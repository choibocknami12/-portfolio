<?php

namespace App\Http\Controllers;

use App\Models\ChapterState;
use App\Models\LessonState;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Enrollment;
use App\Models\Lesson;
use App\Models\Chapter;
use App\Models\ClassPayment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class EnrollmentController extends Controller
{
    public function postClassEnrollData(Request $request) {

        // Log::debug($request);

        $UserID = $request->UserID;
        $ClassID = $request->ClassID;
        // $LessonID = $request->LessonID;



        // Log::debug($request);

        // $data = $request->only('UserID', 'ClassID');
        
        // $result = Enrollment::create($data);

        // 로그를 남기기 위한 디버그 메시지
        // Log::debug($request);

        // 요청에서 필요한 데이터 추출
        $data = $request->only('UserID', 'ClassID');

        // 유저 아이디와 클래스 아이디를 사용하여 검색
        $existingEnrollment = Enrollment::where('UserID', $data['UserID'])
            ->where('ClassID', $data['ClassID'])
            ->first();

        // 검색 결과가 없을 경우에만 크리에이트 수행
        if (!$existingEnrollment) {
            $result = Enrollment::create($data);

            $EnrollmentID = Enrollment::where('UserID', $UserID)
                ->where('ClassID', $ClassID)
                ->value('EnrollmentID');

            $ClassPaymentData = [
                'EnrollmentID' => $EnrollmentID,
                'PaymentAmount' => $request->input('Payment'),
                'PaymentMeans' => 1,
                'PaymentState' => 1,
            ];

            Log::debug($ClassPaymentData);

            ClassPayment::create($ClassPaymentData);

            // Log::debug($EnrollmentID);

            $ChapterData = Chapter::select('ChapterID')
                ->where('ClassID', $ClassID)
                ->get();

            // Log::debug($ChapterData);

            foreach($ChapterData as $ChapterID) {
                $ChapterStateData = [
                    'EnrollmentID' => $EnrollmentID,
                    'ChapterID' => $ChapterID->ChapterID,
                ];
                ChapterState::create($ChapterStateData);

                $ChapterStateID = ChapterState::where('ChapterID', $ChapterID->ChapterID)
                    ->where('EnrollmentID', $EnrollmentID)
                    ->value('ChapterStateID');

                $LessonData = Lesson::select('LessonID')
                    ->where('ChapterID', $ChapterID->ChapterID)
                    ->get();
                    // Log::debug($LessonData);
                    
                foreach($LessonData as $LessonID) {
                    $ChapterStateData = [
                        'ChapterStateID' => $ChapterStateID,
                        'EnrollmentID' => $EnrollmentID,
                        'LessonID' => $LessonID->LessonID,
                    ];
                    // Log::debug($LessonID->Lesson);
                    LessonState::create($ChapterStateData);
                }
            }




            // 크리에이트 성공 여부에 따른 로직 추가
            if ($result) {
                // 성공적으로 생성됨
                return response()->json(['message' => '수강신청 처리가 되었습니다.'], 201);
            } else {
                // 생성에 실패함
                return response()->json(['message' => '해당 정보를 다시 확인 해주세요.'], 500);
            }
        } else {
            // 이미 해당 유저 아이디에 해당하는 클래스 값이 존재함
            return response()->json(['message' => '이미 수강한 사용자입니다.'], 400);
    }
    }
}
