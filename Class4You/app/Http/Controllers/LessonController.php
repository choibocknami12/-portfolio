<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Lesson;
use App\Models\Chapter;
use App\Models\Classinfo;
use App\Models\Enrollment;
use App\Models\ChapterState;
use App\Models\LessonState;

class LessonController extends Controller
{
    public function updateLessonProgress(Request $request) {

        log::debug($request);

        $UserID = $request->UserID;
        $ClassID = $request->ClassID;
        $LessonID = $request->LessonID;

        Log::debug('아이디 값'.$UserID);
        Log::debug('클래스 값'.$ClassID);
        Log::debug('리슨 값'.$LessonID);
        // Log::debug($ClassID);
        // Log::debug($LessonID);

        $EnrollmentID = Enrollment::where('UserID', $UserID)
            ->where('ClassID', $ClassID)
            ->value('EnrollmentID');

        Log::debug('수강 값'.$EnrollmentID);
        

        LessonState::where('LessonID', $request->LessonID,)
            ->where('EnrollmentID', $EnrollmentID)
            ->update([
                'EnrollmentID' => $EnrollmentID,
                'LessonID' => $LessonID,
                'LessonProgress' => $request->progressPercentage,
                'LessonRunningTime' => $request->lessonRunningTime,
                'LessonFlg' => $request->lessonFlg,
            ]);

        // 리슨 값을 토대로 해당 챕터를 전부 가져옴
        $ChapterStateID = LessonState::where('LessonID', $request->LessonID)
            ->where('EnrollmentID', $EnrollmentID)
            ->value('ChapterStateID');

        Log::debug('챕터스테이트 아이디값'.$ChapterStateID);
        // 챕터의 플래그를 확인해서 해당 챕터에 리슨이 전부 완료됐는지 확인하는 쿼리문
        $allLessonsCompleted = LessonState::where('ChapterStateID', $ChapterStateID)
        ->where('EnrollmentID', $EnrollmentID)
        ->where('LessonFlg', '0') // 아직 완료되지 않은 강의
        ->doesntExist(); // 완료되지 않은 강의가 하나도 없다면 true 반환
        Log::debug('챕터 확인'.$allLessonsCompleted);
        
        // 모든 강의가 완료되었다면 챕터 플래그를 1로 업데이트
        if ($allLessonsCompleted) {
            $aaa = ChapterState::where('ChapterStateID', $ChapterStateID)
                ->where('EnrollmentID', $EnrollmentID)  
                ->update(['ChapterFlg' => '1']);
            
                Log::debug('업데이트 확인'.$aaa);
                Log::debug('업데이트 확인'.$ChapterStateID);
            // 해당 강의의 모든 챕터가 1인지 확인
            $EnrollmentDataID = ChapterState::where('ChapterStateID', $ChapterStateID)->value('EnrollmentID');
            
            // Log::debug($EnrollmentDataID);
            
            $allChaptersCompleted = ChapterState::where('EnrollmentID', $EnrollmentDataID)
            ->where('ChapterFlg', 0) // 아직 완료되지 않은 챕터
            ->doesntExist(); // 완료되지 않은 챕터가 하나도 없다면 true 반환
            // Log::debug($allChaptersCompleted);
            // 모든 챕터가 완료되었다면 강의 플래그를 1로 업데이트
            if ($allChaptersCompleted) {
                Enrollment::where('EnrollmentID', $EnrollmentDataID)
                    ->update(['EnrollmentFlg' => '1']);
                    Log::debug('오냐');
            }
            // Log::debug($allLessonsCompleted);
        }

    }
}
