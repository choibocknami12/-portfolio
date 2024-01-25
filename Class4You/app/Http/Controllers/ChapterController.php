<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classinfo;
use App\Models\Chapter;
use App\Models\Lesson;
use App\Models\Enrollment;
use App\Models\ChapterState;
use App\Models\LessonState;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ChapterController extends Controller
{
    public function getNewClassWatchData($ClassID) {

        $UserID = Auth::id();

        $enrollmentID = Enrollment::where('UserID', $UserID)
            ->where('ClassID', $ClassID)
            ->value('EnrollmentID');
            
        // Log::debug($enrollmentID);

        // 해당 클래스에서 챕터 플래그가 1인 애들의 개수를 가져옴
        $completedChapters = ChapterState::where('EnrollmentID', $enrollmentID)
        ->where('ChapterFlg', 1)
        ->count();

        // Log::debug($completedChapters);
        // $completedChapters = Chapter::where('ClassID', $ClassID)
        // ->where('ChapterFlg', 0)
        // ->count();
    
        // 해당 챕터 애들의 개수를 전부 불러옴
        $totalChapters = ChapterState::where('EnrollmentID', $enrollmentID)
            ->count();
        // Log::debug($totalChapters);

        // Log::debug($completedChapters);
        // Log::debug($totalChapters);
        
        // 리슨 모델에서 챕터 아이디 값이 주어진 배열안에 존재하는지 확인(whereIn 사용), function을 통해 서브쿼리 사용, $query는 쿼리 빌더 객체로 아래 서브쿼리에서 쿼리 빌더를 사용한다는 뜻
        // use ($CLassID)는 클로저로써 외부 변수를 사용하기 위해서 use를 사용해서 파라미터로 받아온 클래스 아이디 값을 사용함
        // ChapterID가 특정 서브쿼리의 결과에 속하고 (whereIn 절), 해당 리슨이 완료된 상태인 경우 (LessonFlg가 1인 경우)의 결과 값을 카운트
        // 서브쿼리는 챕터즈 테이블에서 클래스 아이디가 주어진 $ClassID와 같고, ChapterFlg가 1인 경우의 ChapterID를 선택
        // $completedLessons = Lesson::whereIn('ChapterID', function ($query) use ($ClassID) {
        //     $query->select('ChapterID')
        //         ->from('chapters')
        //         ->where('ClassID', $ClassID)
        //         ->where('ChapterFlg', 1);
        // })->where('LessonFlg', 1)->count();
        
        $completedLessons = LessonState::whereIn('ChapterStateID', function ($query) use ($enrollmentID) {
            $query->select('ChapterStateID')
                ->from('chapter_states')
                ->where('EnrollmentID', $enrollmentID)
                ->where('ChapterFlg', 1);
            })->where('LessonFlg', 1)->count();

        Log::debug($completedLessons);


        // 위와 비슷한 형식이지만 전체 수를 구하기 위한 쿼리문이기 때문에 조건에 플래그 값이 없음
        $totalLessons = LessonState::whereIn('ChapterStateID', function ($query) use ($enrollmentID) {
            $query->select('ChapterStateID')
                ->from('chapter_states')
                ->where('EnrollmentID', $enrollmentID);
        })->count();
        
        // 완료된 값과 전체 값을 퍼센트로 계산하기 위한 계산식
        if ($totalChapters > 0 && $totalLessons > 0) {
            $classProgress = (($completedChapters + $completedLessons) / ($totalChapters + $totalLessons)) * 100;
        } else {
            $classProgress = 0;
        }
        
        // Log::debug($classProgress);

        $classData = Classinfo::where('ClassID', $ClassID)
            ->first();

        $chapterData = Chapter::where('chapters.ClassID', $ClassID)
            ->get();

        foreach($chapterData as $chapterLessonData) {
            $lessonData = Lesson::where('ChapterID', $chapterLessonData -> ChapterID)
                ->get();
            $allLessonData[$chapterLessonData->ChapterID] = $lessonData;
        };

        return response()->json([
            'classData' => $classData,  
            'chapterData' => $chapterData,
            'lessonData' => $allLessonData,
            'classProgressData' => $classProgress,
            'totalChapters' => $totalChapters,
            'completedChapters' =>$completedChapters
        ]);

        // $lessonData = Lesson::

        // Log::debug($ClassID);
        // Log::debug($classData);
        // Log::debug($ClassID);
        // Log::debug($chapterData);
        // Log::debug($aaa);

    }

    // public function postvideochkData($lessonID) {

    //     Log::debug($lessonID);

    // }
}
