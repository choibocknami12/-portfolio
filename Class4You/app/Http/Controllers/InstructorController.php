<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\ClassPayment;
use App\Models\Lesson;
use App\Models\User;
use App\Models\ClassInfo;
use App\Models\UserStatus;
use App\Models\Enrollment;
use App\Models\Board;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class InstructorController extends Controller
{
    //
    public function instructorloginpost(Request $request) {
        // Log::debug('여긴 관리자 로그인 부');
        // Log::debug($request);

        $result = Instructor::where('InstructorEmail', $request->InstructorEmail)->first();

        if(!$result || !(Hash::check($request->InstructorPassword, $result->InstructorPassword))) {
            return response()->json([
                'success' => false,
                'message' => '아이디와 비밀번호를 확인해주세요.',
            ]);
        }

        Auth::guard('admin')->login($result);

        session(['admin' => $result]);
        session()->save();
        
        $instructorId = Auth::guard('admin')->id();
        if (Auth::guard('admin')->check()) {
            // session(['user' => Auth::user()]);
            $adminChk = Instructor::where('InstructorID', $instructorId)->where('InstructorFlg', 1)->first();
            // $instructorIdChk = ($instructorId == 1) ? true : false;
            $adminChk =  $adminChk ? true : false;
            $sessionInstructorDataCheck = Auth::guard('admin')->check();

            return response()->json([
                'success' => true,
                'message' => '로그인이 성공적으로 수행되었습니다.',
                'sessionInstructorDataCheck' => $sessionInstructorDataCheck,
                // 'sessionCheckUserName' => $sessionDataUserName,
                // 'sessionCheckUserEmail' => $sessionDataUserEmail,
                'instructorId' => $instructorId,
                'adminChk' =>  $adminChk,
            ]);

        } else {
            return response()->json([
                'success' => false,
                'message' => '인증 에러가 발생했습니다.',
            ]);
        }
    }

    public function instructorlogoutget() {
        // 로그아웃 처리
        Auth::guard('admin')->logout();
        
        $sessioninstructorDataCheck = Auth::guard('admin')->check();

        return response()->json([
            'message' => '로그아웃 성공',
            'sessioninstructorDataCheck' => $sessioninstructorDataCheck,
        ]);
    }

    public function instructoruserdata(Request $request) {
        // Log::debug($request);
        $searchPicked = $request->searchPicked;
        // Log::debug($searchPicked);
        $instructorId = Auth::guard('admin')->id();

        $adminChk = Instructor::where('InstructorID', $instructorId)->where('InstructorFlg', 1)->first();

        if($adminChk) {
            $userDataQuery = User::select('users.UserID', 'users.UserEmail', 'users.UserName', 'users.UserBirthDate', 'users.UserPostcode', 'users.UserRoadAddress', 'users.UserDetailedAddress', 'users.created_at', 'users.deleted_at', 'users.UserState')
            ->withTrashed()
            ->orderBy('users.created_at', 'desc');
        }

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            if($searchPicked == 1) {
                $userDataQuery->where(function ($query) use ($searchTerm) {
                    $query->orWhere('users.UserEmail', 'LIKE', "%{$searchTerm}%");
                });
            } else if($searchPicked == 2) {
                $userDataQuery->where(function ($query) use ($searchTerm) {
                    $query->orWhere('users.UserName', 'LIKE', "%{$searchTerm}%");
                });
            } else if($searchPicked == 3) {
                // $searchTerm = Carbon::createFromFormat('Ymd', $searchTerm)->format('Y-m-d');
                Log::debug($searchTerm);
                $userDataQuery->where(function ($query) use ($searchTerm) {
                    $query->orWhere('users.UserBirthDate', 'LIKE', "%{$searchTerm}%");
                });
            }
        }
        $userData = $userDataQuery->paginate(10);

        return response()->json([
            'userData' => $userData,
        ]);
    }

    public function instructoruserclassdata(Request $request) {
        

        $instructorId = Auth::guard('admin')->id();

        $adminChk = Instructor::where('InstructorID', $instructorId)->where('InstructorFlg', 1)->first();
        
        if($adminChk) {
            $ClassDataQuery = Enrollment::select('enrollments.UserID', 'enrollments.ClassID', 'class_infos.ClassTitle', 'class_infos.ClassPrice', 'class_infos.ClassDifficultyID', 'enrollments.created_at', 'enrollments.EnrollmentFlg')
                ->join('users', 'enrollments.UserID' ,'users.UserID')
                ->join('class_infos', 'enrollments.ClassID', 'class_infos.ClassID')
                ->orderBy('users.created_at', 'desc');
        }

        $searchPicked = $request->searchPicked;

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            if($searchPicked == 1) {
                $ClassDataQuery->where(function ($query) use ($searchTerm) {
                    $query->orWhere('class_infos.ClassID', 'LIKE', "%{$searchTerm}%");
                });
            } else if($searchPicked == 2) {
                $ClassDataQuery->where(function ($query) use ($searchTerm) {
                    $query->orWhere('class_infos.ClassTitle', 'LIKE', "%{$searchTerm}%");
                });
            } else if($searchPicked == 3) {
                // $searchTerm = Carbon::createFromFormat('Ymd', $searchTerm)->format('Y-m-d');
                Log::debug($searchTerm);
                $ClassDataQuery->where(function ($query) use ($searchTerm) {
                    $query->orWhere('class_infos.ClassPrice', 'LIKE', "%{$searchTerm}%");
                });
            }
        }


        $ClassData = $ClassDataQuery->paginate(10);

        return response()->json([
            'classData' => $ClassData,
        ]);

    }

    public function instructoruserboardquestion(Request $request) {

        $instructorId = Auth::guard('admin')->id();

        $adminChk = Instructor::where('InstructorID', $instructorId)->where('InstructorFlg', 1)->first();

        if($adminChk) {
            $boardQuestionDataQuery = Board::whereNotNull('ClassID')
                ->withTrashed()
                ->orderBy('boards.created_at', 'desc');
        }

        // if ($request->has('search')) {
        //     $searchTerm = $request->input('search');
        //     $boardQuestionDataQuery->where(function ($query) use ($searchTerm) {
        //         $query->orWhere('BoardTitle', 'LIKE', "%{$searchTerm}%")
        //             ->orWhere('BoardComment', 'LIKE', "%{$searchTerm}%")
        //             ->orWhere('BoardID', 'LIKE', "%{$searchTerm}%");
        //     });
        // }

        $searchPicked = $request->searchPicked;
                
        if ($request->has('search')) {
            // Log::debug('오냐');
            $searchTerm = $request->input('search');
            // Log::debug($searchPicked);
            if($searchPicked == 1) {
                $boardQuestionDataQuery->where(function ($query) use ($searchTerm) {
                    $query->orWhere('UserID', 'LIKE', "%{$searchTerm}%");
                });
            } else if($searchPicked == 2) {

                // Log::debug($searchTerm);
                $boardQuestionDataQuery->where(function ($query) use ($searchTerm) {
                    $query->orWhere('BoardTitle', 'LIKE', "%{$searchTerm}%");
                });
            } else if($searchPicked == 3) {

                if (strpos($searchTerm, '미해결') !== false) {
                    $searchTerm = '0';
                } else if (strpos($searchTerm, '해결') !== false) {
                    $searchTerm = '1';
                } 
                // $searchTerm = Carbon::createFromFormat('Ymd', $searchTerm)->format('Y-m-d');
                // Log::debug($searchTerm);
                $boardQuestionDataQuery->where(function ($query) use ($searchTerm) {
                    $query->orWhere('BoardFlg', 'LIKE', "%{$searchTerm}%");
                });
            }
        }

        $BoardData = $boardQuestionDataQuery->paginate(10);

        return response()->json([
            'boardData' => $BoardData,
        ]);

    }

    public function instructoruserboardcommunity(Request $request) {
        $instructorId = Auth::guard('admin')->id();

        $adminChk = Instructor::where('InstructorID', $instructorId)->where('InstructorFlg', 1)->first();
        
        if($adminChk) {
            $boardQuestionDataQuery = Board::whereNull('ClassID')
                ->withTrashed()
                ->orderBy('boards.created_at', 'desc');
        }

        // if ($request->has('search')) {
        //     $searchTerm = $request->input('search');
        //     $boardQuestionDataQuery->where(function ($query) use ($searchTerm) {
        //         $query->orWhere('BoardTitle', 'LIKE', "%{$searchTerm}%")
        //             ->orWhere('BoardComment', 'LIKE', "%{$searchTerm}%")
        //             ->orWhere('BoardID', 'LIKE', "%{$searchTerm}%");
        //     });
        // }

        $searchPicked = $request->searchPicked;
                
        if ($request->has('search')) {
            // Log::debug('오냐');
            $searchTerm = $request->input('search');
            // Log::debug($searchPicked);
            if($searchPicked == 1) {
                $boardQuestionDataQuery->where(function ($query) use ($searchTerm) {
                    $query->orWhere('UserID', 'LIKE', "%{$searchTerm}%");
                });
            } else if($searchPicked == 2) {

                // Log::debug($searchTerm);
                $boardQuestionDataQuery->where(function ($query) use ($searchTerm) {
                    $query->orWhere('BoardTitle', 'LIKE', "%{$searchTerm}%");
                });
            } else if($searchPicked == 3) {

              if (strpos($searchTerm, '미해결') !== false) {
                    $searchTerm = '0';
                } else if (strpos($searchTerm, '해결') !== false) {
                    $searchTerm = '1';
                } 
                // $searchTerm = Carbon::createFromFormat('Ymd', $searchTerm)->format('Y-m-d');
                // Log::debug($searchTerm);
                $boardQuestionDataQuery->where(function ($query) use ($searchTerm) {
                    $query->orWhere('BoardFlg', 'LIKE', "%{$searchTerm}%");
                });
            }
        }

        $BoardData = $boardQuestionDataQuery->paginate(10);

        return response()->json([
            'boardData' => $BoardData,
        ]);

    }

    public function instructoruserstate(Request $request) {

        Log::debug($request);
        if($request->ban == 'ban') {
            UserStatus::create([
                'UserID' => $request->UserID,
                'UserStatus' => '1',
                'SuspensionType' => '2',
            ]);

            $UserStateDate = User::find($request->UserID);

            $UserStateDate->update([
                'UserID' => $request->UserID,
                'UserState' => '2',
            ]);


            return response()->json([
                'userStateData' => $UserStateDate,
            ]);

        } else {
            UserStatus::create([
                'UserID' => $request->UserID,
                'UserStatus' => '1',
                'SuspensionType' => '1',
                'SuspendedUntil' => $request->Date,
            ]);

            $UserStateDate = User::find($request->UserID);

            $UserStateDate->update([
                'UserID' => $request->UserID,
                'UserState' => '1',
            ]);


            return response()->json([
                'userStateData' => $UserStateDate,
            ]);
        }
    }

    public function instructoruserstatedata(Request $request) {
        $instructorId = Auth::guard('admin')->id();
        
        $adminChk = Instructor::where('InstructorID', $instructorId)->where('InstructorFlg', 1)->first();
        
        if($adminChk) {
            $userStateDataQuery = UserStatus::select(
                'UserStatusID',
                'UserID',
                'UserStatus',
                'SuspensionType',
                'SuspendedUntil',
                'created_at'
                )
                ->addSelect(DB::raw('(
                    SELECT COUNT(*)
                    FROM user_statuses t2
                    WHERE t2.UserID = user_statuses.UserID AND t2.created_at <= user_statuses.created_at
                    ) as status_count'))
                    ->orderBy('created_at', 'desc');
                }
                
        // if ($request->has('search')) {
            //     $searchTerm = $request->input('search');
            //     $userStateDataQuery->where(function ($query) use ($searchTerm) {
                //         $query->where('UserID', $searchTerm);
                //     });
                // }
                
        $searchPicked = $request->searchPicked;
                
        if ($request->has('search')) {
            // Log::debug('오냐');
            $searchTerm = $request->input('search');
            // Log::debug($searchPicked);
            if($searchPicked == 1) {
                $userStateDataQuery->where(function ($query) use ($searchTerm) {
                    $query->orWhere('UserID', 'LIKE', "%{$searchTerm}%");
                });
            } else if($searchPicked == 2) {
                if (strpos($searchTerm, '임시') !== false) {
                    $searchTerm = '1';
                } else if (strpos($searchTerm, '영구') !== false) {
                    $searchTerm = '2';
                }
                // Log::debug($searchTerm);
                $userStateDataQuery->where(function ($query) use ($searchTerm) {
                    $query->orWhere('SuspensionType', 'LIKE', "%{$searchTerm}%");
                });
            } else if($searchPicked == 3) {
                // $searchTerm = Carbon::createFromFormat('Ymd', $searchTerm)->format('Y-m-d');
                // Log::debug($searchTerm);
                $userStateDataQuery->where(function ($query) use ($searchTerm) {
                    $query->orWhere('created_at', 'LIKE', "%{$searchTerm}%");
                });
            }
        }
        
        $userStateData = $userStateDataQuery->paginate(10);
        
        return response()->json([
            'userStateData' => $userStateData,
        ]);
    }

    public function postRegistInstructor(Request $request) {
        $admindata = [
            'Email' => $request->InstructorEmail,
            'PhoneNumber' => $request->InstructorPhoneNumber,
            'FullName' => $request->InstructorFullName,
        ];

        Mail::send('mail.mail_form_admin', ['data' => $admindata], function($message) use ($admindata, $request) {
            $message->to('jmh4912@naver.com')->subject('강사 문의하기');
            $message->from('dldmldltmd@gmail.com');
        });

    }

    public function instructoruserstateput(Request $request) {
        Log::debug($request);
        if($request->value == 0) {
            $UserStateDate = UserStatus::where('UserStatusID', $request->UserStatusID)
            ->update([
                'UserStatus' => '0',
                'SuspensionType' => '0',
                'SuspendedUntil' => null,
            ]);

            $User = User::find($request->UserID);

            $User->update([
                'UserID' => $request->UserID,
                'UserState' => '0',
            ]);

            
            $UserStateDate = UserStatus::where('UserStatusID', $request->UserStatusID)->first();

            return response()->json([
                'userStateData' => $UserStateDate,
            ]);
        } else if ($request->value == 1) {
            $UserStateDate = UserStatus::where('UserStatusID', $request->UserStatusID)
            ->update([
                'UserStatus' => '1',
                'SuspensionType' => '2',
                'SuspendedUntil' => null,
            ]);

            $User = User::find($request->UserID);

            $User->update([
                'UserID' => $request->UserID,
                'UserState' => '2',
            ]);

            $UserStateDate = UserStatus::where('UserStatusID', $request->UserStatusID)->first();

            Log::debug($UserStateDate);
            return response()->json([
                'userStateData' => $UserStateDate,
            ]);
        }
    }

    public function getinstructorclassinsertdata(Request $request) {
        $instructorId = Auth::guard('admin')->id();
        $searchTerm = $request->input('search');


        $ClassDataQuery = ClassInfo::select(
            'class_infos.ClassID',
            'class_infos.CategoryID',
            'class_infos.ClassDifficultyID',
            'class_infos.ClassTitle',
            'class_infos.ClassPrice',
            DB::raw('cha.chapter_count'),
            DB::raw('lescnt.lesson_count'),
            DB::raw('enr.enrollment_count')
        )
        ->join(DB::raw('(SELECT subcha.ClassID, COUNT(subcha.ClassID) AS chapter_count FROM chapters subcha GROUP BY subcha.ClassID) cha'), function($join) {
            $join->on('class_infos.ClassID', '=', 'cha.ClassID');
        })
        ->join(DB::raw('(
                SELECT
                    cha2.ClassID,
                    SUM(chales1.lesson_count) lesson_count
                FROM chapters cha2
                JOIN (
                    SELECT
                        cha1.ChapterID,
                        les2.lesson_count
                    FROM chapters cha1
                    JOIN (
                        SELECT les1.ChapterID, COUNT(les1.ChapterID) lesson_count FROM lessons les1 GROUP BY les1.ChapterID
                    ) les2 ON cha1.ChapterID = les2.ChapterID
                ) chales1 ON cha2.ChapterID = chales1.ChapterID
                GROUP BY cha2.classID
            ) lescnt'), function($join) {
            $join->on('class_infos.ClassID', '=', 'lescnt.ClassID');
        })
        ->join(DB::raw('(SELECT enr1.ClassID, COUNT(enr1.ClassID) enrollment_count FROM enrollments enr1 GROUP BY enr1.ClassID) enr'), function($join) {
            $join->on('class_infos.ClassID', '=', 'enr.ClassID');
        });


        // Log::debug($searchTerm);
        // Log::debug($request);
        // Log::debug($request);
        // $ClassDataQuery = Classinfo::leftJoin('enrollments', 'class_infos.ClassID', '=', 'enrollments.ClassID')
        //     ->leftJoin('chapters', 'class_infos.ClassID', '=', 'chapters.ClassID')
        //     ->leftJoin('lessons', 'chapters.ChapterID', '=', 'lessons.ChapterID')
        //     ->select(
        //         'class_infos.ClassID',
        //         'class_infos.CategoryID',
        //         'class_infos.ClassDifficultyID',
        //         'class_infos.ClassTitle',
        //         'class_infos.ClassPrice',
        //         DB::raw('COUNT(DISTINCT chapters.ChapterID) as chapter_count'),
        //         DB::raw('COUNT(DISTINCT lessons.LessonID) as lesson_count'),
        //         DB::raw('COUNT(DISTINCT enrollments.UserID) as enrollment_count')
        //     )
        //     ->groupBy('class_infos.ClassID', 'class_infos.CategoryID', 'class_infos.ClassDifficultyID', 'class_infos.ClassTitle', 'class_infos.ClassPrice')
        //     ->orderByDesc('class_infos.created_at');
        
        // if ($request->filled('search')) {
        //     $searchTerm = $request->input('search');
        //     $ClassDataQuery->where(function ($query) use ($searchTerm) {
        //         $query->orWhere('class_infos.ClassTitle', 'LIKE', "%{$searchTerm}%")
        //             ->orWhere('class_infos.ClassID', 'LIKE', "%{$searchTerm}%");
        //     });
        // }


        $searchPicked = $request->searchPicked;
                
        if ($request->has('search')) {
            // Log::debug('오냐');
            $searchTerm = $request->input('search');
            // Log::debug($searchPicked);
            if($searchPicked == 1) {
                $ClassDataQuery->where(function ($query) use ($searchTerm) {
                    $query->orWhere('class_infos.ClassTitle', 'LIKE', "%{$searchTerm}%");
                });
            } else if($searchPicked == 2) {
                $ClassDataQuery->where(function ($query) use ($searchTerm) {
                    $query->orWhere('class_infos.ClassPrice', 'LIKE', "%{$searchTerm}%");
                });
            }
        }
        
        
        $ClassData = $ClassDataQuery->paginate(10);

        // $ClassDataQuery = Classinfo::join('chapters', 'class_infos.ClassID', '=', 'chapters.ClassID')
        // ->join('lessons', 'chapters.ChapterID', '=', 'lessons.ChapterID')
        // ->leftJoin('enrollments', 'class_infos.ClassID', '=', 'enrollments.ClassID');


        // if (!$searchTerm == 'undefined') {
        //     $ClassDataQuery->orWhere('class_infos.ClassTitle', 'LIKE', "%{$searchTerm}%");
        // }
        

        // $ClassData = $ClassDataQuery->select(
        //         'class_infos.ClassID',
        //         'class_infos.CategoryID',
        //         'class_infos.ClassDifficultyID',
        //         'class_infos.ClassTitle',
        //         'class_infos.ClassPrice',
        //         DB::raw('COUNT(DISTINCT chapters.ChapterID) as chapter_count'),
        //         DB::raw('COUNT(lessons.LessonID) as lesson_count'),
        //         DB::raw('COUNT(DISTINCT enrollments.UserID) as enrollment_count') // 수정된 부분
        //     )
        //     ->groupBy('class_infos.ClassID', 'class_infos.CategoryID', 'class_infos.ClassDifficultyID', 'class_infos.ClassTitle', 'class_infos.ClassPrice')
        //     ->paginate(10);

            return response()->json([
                'ClassData' => $ClassData,
            ]);
    }

    public function getinstructorchapterinsertdata($ClassID) {
        $ChapterData = Chapter::select(
            'chapters.ClassID',
            'chapters.ChapterID',
            'chapters.ChapterTitle',
            DB::raw('COUNT(lessons.LessonID) AS TotalLessons')
        )
            ->join('lessons', 'chapters.ChapterID', 'lessons.ChapterID')
            ->where('chapters.ClassID', $ClassID)
            ->groupBy('chapters.ClassID', 'chapters.ChapterID', 'chapters.ChapterTitle')
            ->get();
        Log::debug($ChapterData);

        return response()->json([
            'ChapterData' => $ChapterData,
        ]);
    }

    public function getinstructorlessoninsertdata($ChapterID) {

        $LessonData = Lesson::where('ChapterID', $ChapterID)
            ->get();

        return response()->json([
            'LessonData' => $LessonData,
        ]);
    }

    public function getinstructormain() {

        // 월간 연간 결제 금액
        $currentMonth = date('m');
        $currentYear = date('Y');

        $monthlyPaymentSum = ClassPayment::whereMonth('created_at', '=', $currentMonth)
            ->whereYear('created_at', '=', $currentYear)
            ->sum('PaymentAmount');

        $yearPaymentSum = ClassPayment::whereYear('created_at', $currentYear)
            ->sum('PaymentAmount');
        // ========================



        // 총 회원 수
        $userCount = User::count('UserID');
        // ========================

        // 총 회원 수
        $userCountDelete = User::whereNotNull('deleted_at')->withTrashed()->count('UserID');
        // ========================

        // 작년, 현재 유저 수 비교
        // $currentYear = date('Y');
        // $lastYear = $currentYear - 1;
        
        // $userCounts = User::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(UserID) as count')
        //     ->whereYear('created_at', '>=', $lastYear)
        //     ->whereYear('created_at', '<=', $currentYear)
        //     ->groupBy('year', 'month')
        //     ->orderBy('year', 'asc')
        //     ->orderBy('month', 'asc')
        //     ->get();
        
        // $userCountsByYear = [];
        
        // foreach ($userCounts as $monthlyUserCount) {
        //     $year = $monthlyUserCount->year;
        //     $month = $monthlyUserCount->month;
        //     $count = $monthlyUserCount->count;
        
        //     // 해당 년도의 배열이 없다면 새로 생성
        //     if (!isset($userCountsByYear[$year])) {
        //         $userCountsByYear[$year] = [];
        //     }
        
        //     // 해당 월의 데이터가 없으면 0으로 초기화
        //     for ($m = 1; $m <= 12; $m++) {
        //         if (!array_key_exists($m, $userCountsByYear[$year])) {
        //             $userCountsByYear[$year][$m] = 0;
        //         }
        //     }
        
        //     // 해당 월의 데이터 추가
        //     $userCountsByYear[$year][$month] = $count;
        // }
        
        $currentYear = date('Y');
        $lastYear = $currentYear - 1;

        $userCounts = User::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(UserID) as count')
            ->whereYear('created_at', '>=', $lastYear)
            ->whereYear('created_at', '<=', $currentYear)
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();

        $userCountsByYear = [];

        // 1월부터 12월까지의 데이터 그룹화
        for ($month = 1; $month <= 12; $month++) {
            $userCountsByYear[$month] = [
                'lastYear' => 0,
                'currentYear' => 0,
            ];
        }

        foreach ($userCounts as $monthlyUserCount) {
            $year = $monthlyUserCount->year;
            $month = $monthlyUserCount->month;
            $count = $monthlyUserCount->count;

            // 해당 년도에 따라 값을 넣어줌
            $userCountsByYear[$month][$year === $lastYear ? 'lastYear' : 'currentYear'] = $count;
        }

        // ========================

        // 연령대 인원 조회
        // 'FLOOR(DATEDIFF(NOW(), UserBirthDate) / 365.25 / 10) * 10 as age_group, 이걸 통해서 사용자의 나이를 10년 단위로 그룹화
        // groupBy('age_group')을 사용하여 나이 그룹에 따라 그룹화
        $userAgeCounts = User::selectRaw('FLOOR(DATEDIFF(NOW(), UserBirthDate) / 365.25 / 10) * 10 as age_group, COUNT(UserID) as count')
            ->whereNotNull('UserBirthDate')
            ->groupBy('age_group')
            ->orderBy('age_group', 'asc')
            ->get();
        
        // $userCountsByAgeGroup 배열은 나이대의 키로 할당, 해당 나이대에 속하는 사용자 수와 연령을 값으로 하는 연관 배열
        $userCountsByAgeGroup = [];
        
        // 포이치 돌려서 각 나이대에 값 할당
        foreach ($userAgeCounts as $userAgeCount) {
            $ageGroup = $userAgeCount->age_group;
        
            // 해당 연령 그룹의 배열이 없다면 새로 생성
            if (!isset($userCountsByAgeGroup[$ageGroup])) {
                $userCountsByAgeGroup[$ageGroup] = [
                    'age_group' => $ageGroup,
                    'count' => 0,
                ];
            }
        
            // 해당 연령 그룹의 데이터 추가
            $userCountsByAgeGroup[$ageGroup]['count'] += $userAgeCount->count;
        }

        // Log::debug($userCountsByAgeGroup);
        // ========================

        // 가장 인기 있는 강의 TOP 5
        $classTopData = Enrollment::select('ClassID', \DB::raw('COUNT(UserID) as user_count'))
            ->groupBy('ClassID')
            ->orderByDesc('user_count')
            ->limit(6)
            ->get();
            // Log::debug($classTopData);
        // ========================

        // 가장 인기 있는 언어
        $classLanguage = Enrollment::join('class_languagelinks', 'enrollments.ClassID', '=', 'class_languagelinks.ClassID')
            ->select('class_languagelinks.ClassLanguageID', \DB::raw('COUNT(enrollments.UserID) as user_count'))
            ->groupBy('class_languagelinks.ClassLanguageID')
            ->orderByDesc('user_count')
            ->get();

        // 각 언어 ID를 언어 이름으로 변환
        $languageMapping = [
            1 => 'HTML',
            2 => 'CSS',
            3 => 'JavaScript',
            4 => 'PHP',
            5 => 'JAVA',
            6 => 'DataBase',
        ];

        // map함수는 컬렉션 안에 있는 각 항목에 대해서 아래 작업을 수행하고 새로운 값으로 반환하는 함수
        // $item은 $classLanguage 컬렉션에서 각 항목을 나타냄
        // $item->ClassLanguageID는 현재 항목의 ClassLanguageID 값을 나타냄
        // $languageMapping[$languageID]는 $languageMapping 배열에서 아이디 값을 토대로 맞는 언어 이름 값을 찾음
        // isset($languageMapping[$languageID]) ? $languageMapping[$languageID] : "Unknown"는 해당 언어 ID에 대응하는 언어 이름이 $languageMapping에 존재하는지 확인하고, 존재하지 않으면 "Unknown"을 사용 (삼항연산자)
        $classLanguage = $classLanguage->map(function ($item) use ($languageMapping) {
            $languageID = $item->ClassLanguageID;
            $languageName = isset($languageMapping[$languageID]) ? $languageMapping[$languageID] : "Unknown";
            
            return [
                'language_name' => $languageName,
                'user_count' => $item->user_count,
            ];
        });

        // Log::debug($ClassLanguage);
        // ========================

        // 가장 인기 있는 강의 단계
        $classDifficultyLevels = Enrollment::join('class_infos', 'enrollments.ClassID', '=', 'class_infos.ClassID')
            ->select('class_infos.ClassDifficultyID', \DB::raw('COUNT(enrollments.UserID) as user_count'))
            ->groupBy('class_infos.ClassDifficultyID')
            ->orderByDesc('user_count')
            ->get();

        // Log::debug($classDifficultyLevels);
        // ========================


        return response()->json([
            'monthlyPaymentSum' => $monthlyPaymentSum,
            'yearPaymentSum' => $yearPaymentSum,
            'userCount' => $userCount,
            'userCountDelete' => $userCountDelete,
            'userCountsByYear' => $userCountsByYear,
            'userCountsByAgeGroup' => $userCountsByAgeGroup,
            'classTopData' => $classTopData,
            'classLanguage' => $classLanguage,
            'classDifficultyLevels' => $classDifficultyLevels,
        ]);
    }


    public function postRegistInstructorData(Request $request) {

        // Log::debug("request");
        // Log::debug($request);

        $data = $request->only('InstructorEmail', 'InstructorFullName', 'InstructorPassword' ,'InstructorPhoneNumber');

        // 비밀번호 암호화
        $data['InstructorPassword'] = Hash::make($data['InstructorPassword']);

        $result = Instructor::create($data);

        // $admindata = [
        //     'email' => $request->InstructorEmail,
        // ];

        // Mail::send('mail.mail_form_admin', ['data' => $admindata], function($message) use ($data, $request) {
        //     $message->to('jmh4912@naver.com')->subject('강사 회원가입 요청');
        //     $message->from('dldmldltmd@gmail.com');
        // });

        // Log::debug("result");
        // Log::debug($result);

        return response()->json($result);
    }

    public function getmodalclassuserdata(Request $request) {

        LOG::debug($request);
        $ClassID = $request->ClassID;

        $userEnrollmentData = Enrollment::select('users.UserID', 'users.UserEmail', 'users.UserName', 'users.UserPhoneNumber', 'users.UserBirthDate', 'users.created_at','enrollments.ClassID')
            ->join('users', 'enrollments.UserID', 'users.UserID')
            ->where('enrollments.ClassID', $ClassID)
            ->paginate(20);

        return response()->json([
            'userEnrollmentData' => $userEnrollmentData,
        ]);
    }
}

