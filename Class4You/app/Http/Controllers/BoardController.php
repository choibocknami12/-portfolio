<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;
use App\Models\BoardCategory;
use App\Models\BoardLanguagelink;
use App\Models\Comment;
use App\Models\User;
use App\Models\Enrollment;
use App\Models\BoardRatingState;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    public function getBoardMainData(Request $request)
    {
        // // Log::debug($request);
        // // 보드 모델 쿼리를 작성 -> 유저와 답변을 래프트 조인함, 왼쪽 테이블과 오른쪽 테이블 간에 조인을 수행하고, 왼쪽 테이블의 모든 레코드와 일치하는 오른쪽 테이블의 레코드를 가져오는 조인 방식임, 보더가 왼쪽, 유저와 코멘트가 오른쪽
        // // 해당 조인을 사용한 이유는 값이 없는 경우가 있을 수도 있어서 없는 값을 가져오면 에러가 떠서 해당 조인 사용(댓글이 없는 게시물의 경우 자동으로 null 처리를 하기 위해서)
        // // DB::raw를 사용해서 하위 쿼리 (서브 쿼리) 작성, 서브 쿼리에서 답변 테이블을 기준으로 코멘트의 보더 아이디 값으로 그룹화 시켜줌, 
        // $boardDataQuery = Board::leftJoin('users', 'boards.UserID', 'users.UserID')
        //     // 아래 부분은 콜백 함수를 사용, $join은 leftjoin 메소드에서 전달된 콜백 함수에 사용되는 인스턴스 -> left join으로 조인한 결과값을 funtion안에 인스턴스로 넣어주고 해당 on은 조인 시에 사용할 조건을 말함
        //     // 하이디에서 사용한 join 이후 on과 같음 이전 leftjoin에 만든 com에 있는 보더 아이디 값과 보더즈에 있는 보더 아이디 값을 조인해주는거
        //     ->leftJoin(DB::raw('(SELECT BoardID, COUNT(BoardID) AS cnt FROM comments GROUP BY comments.BoardID) com'), function ($join) {
        //         $join->on('com.BoardID', 'boards.BoardID');
        //     })
        //     ->leftJoin('board_languagelinks', 'boards.BoardID', 'board_languagelinks.BoardID')
        //     // 최종적으로 보더 테이블과 유저즈, 코멘트즈들이 연결된 결과를 가져옴
        //     // 쉽게 설명하면 보더즈로 두 개의 테이블(유저와 코멘트)를 레프트 조인을 통해 값이 있는 애들만 불러오고 그 안에서 서브쿼리를 만들어서 콜백함수로 받아온 그룹에 보더 아이디와 보더즈의 보더 아이디와 다시 조인하는 것
        //     ->select('boards.BoardID', 'boards.created_at', 'boards.UserID', 'boards.BoardTitle', 'boards.BoardComment', 'boards.BoardView', 'boards.BoardRecommended', 'boards.BoardNotRecommended', 'boards.BoardFlg', 'users.UserEmail', 'com.cnt', 'board_languagelinks.HTMLFlg', 'board_languagelinks.CSSFlg', 'board_languagelinks.JavaScriptFlg', 'board_languagelinks.PHPFlg', 'board_languagelinks.JAVAFlg', 'board_languagelinks.DataBaseFlg');
        //     // 

        // //  아래 이프문은 파라미터 값이 있는지 확인하고 해당 값이 있을 경우에 쿼리문이 추가되는 것임
        // if ($request->has('boardCategory')) {
        //     $boardCategoryID = $request->input('boardCategory');
        //     $boardDataQuery->where('BoardCategoryID', $boardCategoryID);
        // }
        
        // if ($request->has('boardCategory')) {
        //     $boardCategoryID = $request->input('boardCategory');
            
        //     if ($boardCategoryID == 1) {
        //         $boardDataQuery->where('BoardCategoryID', $boardCategoryID);
        //     } elseif ($boardCategoryID == 2) {
        //         $boardDataQuery->where('BoardCategoryID', $boardCategoryID);    
        //         if ($request->input('boardLanguage') !== null) {
        //             $boardLanguageNames = $request->input('boardLanguage');
        //             // $boardDataQuery->join('board_languagelinks', 'boards.BoardID', 'board_languagelinks.BoardID');
            
        //             foreach (explode(',', $boardLanguageNames) as $boardLanguageName) {
        //                 $column = strtolower($boardLanguageName) . 'Flg';
        //                 $boardDataQuery->where("board_languagelinks.$column", 1);
        //             }
        //         }
        //     }
        // }

        $boardDataQuery = Board::leftJoin('users', 'boards.UserID', 'users.UserID')
            ->leftJoin(DB::raw('(SELECT BoardID, COUNT(BoardID) AS cnt FROM comments GROUP BY comments.BoardID) com'), function ($join) {
                $join->on('com.BoardID', 'boards.BoardID');
            })
            ->leftJoin('board_languagelinks', 'boards.BoardID', 'board_languagelinks.BoardID')
            ->leftJoin(DB::raw('(SELECT BoardID, 
                                        SUM(CASE WHEN BoardRating = 1 THEN 1 ELSE 0 END) as likeratingcnt,
                                        SUM(CASE WHEN BoardRating = -1 THEN 1 ELSE 0 END) as hateratingcnt
                                    FROM board_rating_states
                                    GROUP BY BoardID) ratings'), function ($join) {
                $join->on('ratings.BoardID', 'boards.BoardID');
            })
            ->select(
                'boards.BoardID', 
                'boards.created_at', 
                'boards.UserID', 
                'boards.BoardTitle', 
                'boards.BoardComment', 
                'boards.BoardView', 
                'boards.BoardFlg', 
                'users.UserEmail', 
                'com.cnt', 
                'board_languagelinks.HTMLFlg', 
                'board_languagelinks.CSSFlg', 
                'board_languagelinks.JavaScriptFlg', 
                'board_languagelinks.PHPFlg', 
                'board_languagelinks.JAVAFlg', 
                'board_languagelinks.DataBaseFlg',
                'ratings.likeratingcnt',
                'ratings.hateratingcnt'
            );

        if ($request->has('boardCategory')) {
            $boardCategoryID = $request->input('boardCategory');
            $boardDataQuery->where('BoardCategoryID', $boardCategoryID);
        }
        
        if ($request->has('boardCategory')) {
            $boardCategoryID = $request->input('boardCategory');
            
            if ($boardCategoryID == 1) {
                $boardDataQuery->where('BoardCategoryID', $boardCategoryID);
            } elseif ($boardCategoryID == 2) {
                $boardDataQuery->where('BoardCategoryID', $boardCategoryID);    
                if ($request->input('boardLanguage') !== null) {
                    $boardLanguageNames = $request->input('boardLanguage');
                    // $boardDataQuery->join('board_languagelinks', 'boards.BoardID', 'board_languagelinks.BoardID');
            
                    foreach (explode(',', $boardLanguageNames) as $boardLanguageName) {
                        $column = strtolower($boardLanguageName) . 'Flg';
                        $boardDataQuery->where("board_languagelinks.$column", 1);
                    }
                }
            }
        }

        

        // 검색 결과 값
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $boardDataQuery->where(function ($query) use ($searchTerm) {
                $query->orWhere('boards.BoardTitle', 'LIKE', "%{$searchTerm}%")
                ->orWhere('boards.BoardComment', 'LIKE', "%{$searchTerm}%");
            });
        }

        // 해결 미해결 값에 따라
        if ($request->has('solve')) {
            $solveState = $request->input('solve');
            if ($solveState == 1) {
                $boardDataQuery->where('BoardFlg', 1);
            } else if ($solveState == 0) {
                $boardDataQuery->where('BoardFlg', 0);
            }
        }

        // 최신순 댓글많은순 좋아요순 조회순 등
        if ($request->has('sort')) {
            $sortData = $request->input('sort');
            if($sortData == 1) {
                $boardDataQuery->orderBy('boards.created_at', 'desc');
            } else if($sortData == 2) {
                $boardDataQuery->orderBy('com.cnt', 'desc');
            } else if($sortData == 3) {
                $boardDataQuery->orderBy('ratings.likeratingcnt', 'desc');
            } else if($sortData == 4) {
                $boardDataQuery->orderBy('boards.BoardView', 'desc');
            }
        }

        
        // if($request->input('ClassID') == null) {
        //     $boardDataQuery->whereNull('boards.ClassID');
        // } else if($request->input('ClassID') !== null) {
        //     $boardDataQuery->where('boards.ClassID', $request->input('ClassID'));
        // }

        // $boardDataQuery = Board::join('users', 'boards.UserID', 'users.UserID');
        // ->orderBy('boards.created_at', 'desc');
    
        // 게시물 당 댓글 수를 계산하기 위한 쿼리
        $commentCountQuery = Board::Join('comments', 'boards.BoardID', 'comments.BoardID')
            ->select('boards.BoardID', DB::raw('COUNT(comments.CommentID) AS CommentCount'))
            ->groupBy('boards.BoardID')
            ->get();

        // Log::debug($commentCountQuery);

        // 페이징 처리
        $boardData = $boardDataQuery->orderBy('boards.created_at', 'desc')->paginate(10);

        Log::debug($boardData);
        
        // 유저 이메일값과 코멘트 값 갯수를 내림차순으로
        $userCntData = User::select('users.UserEmail', DB::raw('count(*) as cnt'))
            ->join('comments', 'users.UserID', 'comments.UserID')
            ->groupBy('users.UserEmail')
            ->orderBy('cnt', 'desc')
            ->limit(5)
            ->get();

        // Log::debug($UserCntData);

        // 유저가 수강한 강의 조회
        $EnrollmentData = Enrollment::select('EnrollmentID')
            ->where('UserID', $request->UserID) 
            ->where('ClassID', $request->ClassID) 
            ->first();

        // Log::debug($boardData);

        $UserEmailData = User::select('UserEmail')
            ->where('UserID', $request->UserID)
            ->first();


        return response()->json([
            'boardData' => $boardData,
            'userCntData' => $userCntData,
            'enrollmentData' => $EnrollmentData,
            'userEmailData' => $UserEmailData,
        ]);
    }
    
    public function postBoardData(Request $request) {
        // Log::debug($request);

        $data = $request->only('BoardCategoryID', 'UserID', 'BoardTitle', 'BoardComment');
    
        // 보더 레코드를 생성
        $board = Board::create($data);
    
        // Log::debug($board->BoardID);
        // 선택된 언어들을 가지고 와서 각 언어에 대한 플래그를 1로 업데이트
        if ($request->has('SelectedLanguages')) {
            $selectedLanguages = $request->input('SelectedLanguages');
    
            // 보더 레코드에 해당하는 보더 랭귀지 링크즈 레코드 생성 또는 업데이트
            foreach ($selectedLanguages as $selectedLanguage) {
                $languageColumn = $selectedLanguage . 'Flg';
    
                // 보더 랭귀지 링크즈 레코드 생성 또는 업데이트
                BoardLanguageLink::updateOrCreate(
                    ['BoardID' => $board->BoardID],
                    [$languageColumn => 1]
                );
            }
        }
        

    }

    
    // 자유게시판 디테일페이지로 이동
    public function getBoardDetailShow($BoardID) {

        $UserID = Auth::id();

        if(isset($UserID)) {
            // $userData = '로그인을 해주세요.';
            $userData = User::select('UserEmail', 'UserID')
            ->where('UserID', $UserID)
            ->first();
        } else {
            $userData = [
                'UserEmail' => '게스트입니다. 로그인해주세요',
                'UserID' => null
            ];
        }
        

        $boardData = Board::join('users', 'boards.UserID', 'users.UserID')
            ->where('BoardID', $BoardID)
            ->first();

        // Log::debug($boardData);

        $boardComment = Comment::select('users.UserEmail', 'comments.CommentContent', 'comments.created_at', 'comments.CommentID', 'users.UserID')
            ->join('boards', 'comments.BoardID', 'boards.BoardID')
            ->join('users', 'comments.UserID', 'users.UserID')
            ->where('comments.BoardID', $BoardID)
            ->orderBy('comments.created_at', 'desc')
            ->get();

        
        $likeCount = BoardRatingState::where('BoardID', $BoardID)
            ->whereIn('BoardRating', [1, -1])
            ->sum('BoardRating');
        
        // Log::debug($likeCount);
        
        // $disapprovalCount = BoardRatingState::where('BoardID', $BoardID)
        // ->where('BoardRating', -1)
        // ->count();

        $recommendationState = BoardRatingState::where('BoardID', $BoardID)
        ->where('UserID', $UserID)
        ->first();

        if ($recommendationState) {
            $boardRating = $recommendationState->BoardRating;
            // Log::debug($boardRating);
        
            $recommendationState = $boardRating === 1 ? 'like' : ($boardRating === -1 ? 'hate' : false);
        } else {
            // Log::debug('Recommendation state not found.');
        }

        return response()->json([
            'boardData' => $boardData,
            'userID' => $userData,
            'commentData' => $boardComment,
            'likeCount' => $likeCount,
            'recommendationState' => $recommendationState
        ]);
    }
    // 자유게시판 디테일 페이지 댓글 불러오기
    // public function getBoardDetailComments($BoardID) {
    //     $UserID = Auth::id();

    //     // 댓글 불러오기
    //     $comments = Comment::select(
    //             'comment.CommentID',
    //             'comment.UserID',
    //             'comment.InstructorID',
    //             'comment.Comment_Content',
    //             'comment.created_at',
    //             'comment.updated_at',
    //             'comment.deleted_at',
    //             'Boards.UserID as BoardUserID', // 수정된 부분
    //             'Boards.InstructorID as BoardInstructorID' // 수정된 부분
    //         )
    //         ->join('Boards', 'comment.BoardID', '=', 'Boards.BoardID') // 수정된 부분
    //         ->where('comment.BoardID', $BoardID)
    //         ->orderBy('comment.created_at', 'desc')
    //         ->get();

    //     return response()->json($comments);
    // }
    
    // 자유게시판 삭제
    public function delBoardDetailData($BoardID) {

        Board::destroy($BoardID);
    }

    // 자유게시판 수정페이지 이동
    public function putBoardShow($BoardID) {

        $result = Board::find($BoardID);

        return response()->json($result);
    }

    public function putBoardUpdate(Request $request) {

        // Log::debug($request);
        $data = $request->only('BoardCategoryID', 'BoardID', 'UserID', 'BoardTitle', 'BoardComment');
        
        // $result = Board::find($BoardID);

        Board::where('BoardID', $request->BoardID)->update($data);

        Log::debug($data);
    }

    public function putBoardCompleteUpdate(Request $request) {
        // Log::debug($request);
        // $UserID = Auth::id();
        $boardId = $request->input('BoardID');

        $board = Board::find($boardId);

        if(Auth::check()) {
            $loggedInUserId = Auth::id(); // 현재 로그인된 사용자의 ID를 가져옴
            $requestUserId = $request->UserID; // 리퀘스트에 있는 유저 아이디 값을 저장
            // 세션값과 리퀘스트 값 비교 연산 같을 경우에만
            if ($loggedInUserId == $requestUserId) {
                $board->update(['BoardFlg' => 1]);
                return response()->json(['message' => 'Board Flag Updated'], 200);
            }
        }
    }

    public function putBoardRecommendedUpdate(Request $request) { 
        $UserID = $request->input('UserID');
        $BoardID = $request->input('BoardID');

        $userRating = BoardRatingState::where('UserID', $UserID)
            ->where('BoardID', $BoardID)
            ->first();


            if ($userRating) {
                if($userRating->BoardRating == 1) {
                    $userRating  -> update([
                        'UserID' => $UserID,
                        'BoardID' => $BoardID,
                        'BoardRating' => 0,
                    ]);
                } else if($userRating->BoardRating == -1) {
                    $userRating  -> update([
                        'UserID' => $UserID,
                        'BoardID' => $BoardID,
                        'BoardRating' => 1,
                    ]);
                } else if ($userRating->BoardRating == 0) {
                    $userRating  -> update([
                        'UserID' => $UserID,
                        'BoardID' => $BoardID,
                        'BoardRating' => 1,
                    ]);
                }
            } else {
                BoardRatingState::create([
                    'UserID' => $UserID,
                    'BoardID' => $BoardID,
                    'BoardRating' => 1,
                ]);
            }

            $recommendationState = BoardRatingState::where('BoardID', $BoardID)
                ->where('UserID', $UserID)
                ->first();

            if ($recommendationState) {
                $boardRating = $recommendationState->BoardRating;
            
                $recommendationState = $boardRating === 1 ? 'like' : ($boardRating === -1 ? 'hate' : false);
            } else {
            }

                        
            $likeCount = BoardRatingState::where('BoardID', $BoardID)
            ->whereIn('BoardRating', [1, -1])
            ->sum('BoardRating');
    

            return response()->json([
                'recommendationState' => $recommendationState,
                'likeCount' => $likeCount,
            ]);

        // $boardId = $request->input('BoardID');
        
        // $board = Board::find($boardId);
        // Log::debug($board);
        
        
        // if ($board) {
        //     // 보드가 존재하는 경우, 추천 수를 1 증가시키고 저장
        //     // 업데이트된 추천 수를 응답
        //     $board->BoardRecommended += 1;
        //     $board->save();
        //     return response()->json(['updated_recommendation' => $board->BoardRecommended]);
        // } else {
        //     // 보드가 존재하지 않는 경우
        //     return response()->json(['error' => 'Board not found'], 404);
        // }

    }
    public function putBoardNotRecommendedUpdate(Request $request) { 

        $UserID = $request->input('UserID');
        $BoardID = $request->input('BoardID');

        $userRating = BoardRatingState::where('UserID', $UserID)
            ->where('BoardID', $BoardID)
            ->first();
            if ($userRating) {
                if($userRating->BoardRating == -1) {
                    $userRating  -> update([
                        'UserID' => $UserID,
                        'BoardID' => $BoardID,
                        'BoardRating' => 0,
                    ]);
                } else if($userRating->BoardRating == 1) {
                    $userRating  -> update([
                        'UserID' => $UserID,
                        'BoardID' => $BoardID,
                        'BoardRating' => -1,
                    ]);
                } else if ($userRating->BoardRating == 0) {
                    $userRating  -> update([
                        'UserID' => $UserID,
                        'BoardID' => $BoardID,
                        'BoardRating' => -1,
                    ]);
                }
            } else {
                BoardRatingState::create([
                    'UserID' => $UserID,
                    'BoardID' => $BoardID,
                    'BoardRating' => 1,
                ]);
            }

        $recommendationState = BoardRatingState::where('BoardID', $BoardID)
        ->where('UserID', $UserID)
        ->first();

        if ($recommendationState) {
            $boardRating = $recommendationState->BoardRating;
        
            $recommendationState = $boardRating === 1 ? 'like' : ($boardRating === -1 ? 'hate' : false);
        } else {
        }

                
        $likeCount = BoardRatingState::where('BoardID', $BoardID)
            ->whereIn('BoardRating', [1, -1])
            ->sum('BoardRating');
        
    
        return response()->json([
            'recommendationState' => $recommendationState,
            'likeCount' => $likeCount,
        ]);


        // $boardId = $request->input('BoardID');
        
        // $board = Board::find($boardId);
        // Log::debug($board);
        
        
        // if ($board) {
        //     // 보드가 존재하는 경우, 비추천 수를 1 증가시키고 저장
        //     // 업데이트된 추천 수를 응답
        //     $board->BoardNotRecommended += 1;
        //     $board->save();
        //     return response()->json(['updated_recommendation' => $board->BoardRecommended]);
        // } else {
        //     // 보드가 존재하지 않는 경우
        //     return response()->json(['error' => 'Board not found'], 404);
        // }
    }
    public function putBoardViewUpdate(Request $request) { 
        $boardId = $request->input('BoardID');
        
        $board = Board::find($boardId);
        // Log::debug($board);
        
        
        if ($board) {
            // 보드가 존재하는 경우, 조회수 수를 1 증가시키고 저장
            // 업데이트된 추천 수를 응답
            $board->BoardView += 1;
            $board->save();
            return response()->json(['updated_boardview' => $board->BoardView]);
        } else {
            // 보드가 존재하지 않는 경우
            return response()->json(['error' => 'Board not found'], 404);
        }
    }

    // 강의 질문
    // 강의 질문 게시글 불러오기
    public function getClassQuestion($ClassID) {

        // $result = Board::join('comments','boards.BoardID','comments.BoardID')
        //                     ->where('comments.ClassID', $ClassID)
        //                     ->get();
        $responseData = Board::selectRaw('
                MAX(boards.BoardID) as BoardID,
                MAX(boards.ClassID) as ClassID,
                MAX(boards.UserID) as UserID,
                MAX(boards.BoardTitle) as BoardTitle,
                MAX(boards.BoardComment) as BoardComment,
                MAX(boards.BoardCategoryID) as BoardCategoryID,
                MAX(boards.created_at) as created_at,
                MAX(users.UserEmail) as UserEmail,
                MAX(comments.CommentContent) as CommentContent,
                MAX(comments.CommentID) as CommentID,
                MAX(comments.InstructorID) as InstructorID
            ')
            ->join('users','boards.UserID','users.UserID')
            ->leftJoin('comments','boards.BoardID','comments.BoardID')
            ->where('boards.ClassID', $ClassID)
            ->groupBy('boards.BoardID')
            ->orderBy('created_at', 'desc')
            ->get();

        Log::debug($responseData);
            
        $instructorData = Comment::select('boards.ClassID', 'comments.CommentID', 'comments.UserID', 'comments.BoardID', 'comments.InstructorID', 'comments.CommentContent')
            ->join('boards', 'boards.BoardID', 'comments.BoardID')
            ->where('boards.ClassID', $ClassID)
            ->whereNotNull('comments.InstructorID') 
            ->get();


                
        return response()->json([
            'responseData' => $responseData,
            'instructorData' => $instructorData,
        ]);

    }
    

    // 강의 질문 게시글 작성 함수
    public function postClassQuestion(Request $request) {

        Log::debug("-----------------------------------------------");
        Log::debug($request);

        // 유저가 수강한 강의 조회
        $EnrollmentData = Enrollment::select('EnrollmentID')
            ->where('UserID', $request->UserID) 
            ->where('ClassID', $request->ClassID) 
            ->first();

        $UserEmailData = User::select('UserEmail')
            ->join('enrollments','enrollments.UserID','users.UserID')
            ->join('class_infos','class_infos.ClassID','enrollments.ClassID')
            ->where('users.UserID', $request->UserID)
            ->where('class_infos.ClassID', $request->ClassID) 
            ->first();
        
        Log::debug("유저 이메일 데이터");
        Log::debug($UserEmailData);

        // 조회한 수강 아이디($EnrollmentData)를 리뷰 데이터($request)에 추가    
        $request->merge([
            'EnrollmentID' => $EnrollmentData->EnrollmentID,
            'BoardCategoryID' => 2,
            'UserEmail' => $UserEmailData->UserEmail,
        ]);

        $data = $request->only('EnrollmentID','UserID', 'ClassID', 'BoardID', 'BoardTitle', 'BoardComment', 'BoardCategoryID', 'UserEmail');

        Log::debug('====================================================');
        Log::debug($data);

        $result = Board::create($data);

        // Log::debug('====================================================');
        // Log::debug($result);

        // 기존 받아오는 데이터
        $responseData = Board::select('boards.BoardID',
            'boards.ClassID',
            'boards.UserID',
            'boards.BoardTitle',
            'boards.BoardComment',
            'boards.BoardCategoryID',
            'boards.created_at',
            'users.UserEmail')
            ->join('users','boards.UserID','users.UserID')
            ->where('boards.ClassID', $result->ClassID)
            ->orderBy('boards.created_at','desc')
            ->get();

        // $responseData = Board::select('boards.BoardID',
        //         'boards.ClassID',
        //         'boards.UserID',
        //         'boards.BoardTitle',
        //         'boards.BoardComment',
        //         'boards.BoardCategoryID',
        //         'boards.created_at',
        //         'users.UserEmail',
        //         'comments.CommentContent',
        //         'comments.CommentID',
        //         'comments.InstructorID')
        //         ->join('users','boards.UserID','users.UserID')
        //         ->join('comments','boards.BoardID','comments.BoardID')
        //         ->where('boards.ClassID', $result->ClassID)
        //         // ->where('boards.BoardID', $result->BoardID)
        //         ->orderBy('boards.created_at','desc')
        //         ->get();

                Log::debug($responseData);        

        return response()->json($responseData);
        // return response()->json($result);
    }

    // 강의 게시글 삭제
    public function delClassQuestion($BoardID) {

        // Log::debug("========================================================");
        // Log::debug($BoardID);

        if(Auth::check()) {
            $result = Board::destroy($BoardID);
        }
        // Review::destroy($ReviewID);
        // $result = Review::destroy($ReviewID);
        // Log::debug("========================================================");
        // Log::debug($result);

        return response()->json($result);
    }

    // 강의 게시글 수정
    public function putClassQuestion(Request $request) {

        Log::debug('====================================================');
        Log::debug($request);
        
        $classQuestionData = $request->only('EnrollmentID','UserID', 'ClassID', 'BoardID', 'BoardTitle', 'BoardComment', 'BoardCategoryID');

        $data = Board::where('BoardID', $request->BoardID)
                    ->update($classQuestionData);

        Log::debug('====================================================');
        Log::debug($classQuestionData);

        return response()->json($classQuestionData);            
    }


}
