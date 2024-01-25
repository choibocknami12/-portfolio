<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Enrollment;
use App\Models\ClassInfo;
use App\Models\ClassNote;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ClassNoteController extends Controller
{
    //강의 노트 불러오기 : /classwatch/ 안에서 이루어지는거니까 똑같은 라우터를 쓰나?
    public function getClassNoteIndex($ClassID) {

        $UserID = Auth::id();

        $EnrollmentData = Enrollment::select('EnrollmentID')
            ->where('UserID', $UserID) 
            ->where('ClassID', $ClassID)
            ->first();
            
        $EnrollmentData =  $EnrollmentData ? true : false;

        $result = ClassNote::select('class_notes.ClassNoteID',
            'class_notes.ClassNoteComment',
            'enrollments.UserID',
            'enrollments.ClassID')
            ->join('enrollments','class_notes.EnrollmentID','enrollments.EnrollmentID')
            ->where('enrollments.UserID', $UserID)
            ->where('enrollments.ClassID', $ClassID)
            ->orderBy('class_notes.created_at', 'desc')
            ->get();
        
        Log::debug($result);
        Log::debug($EnrollmentData);

        return response()->json([
            'noteData' => $result,
            'enrollmentData' => $EnrollmentData
        ]);

    }
    
    // 강의 노트 작성
    public function postClassNoteData(Request $request) {

        Log::debug($request->UserID);
        Log::debug($request->ClassID);
        Log::debug('프론트에서 받은 데이터---------------------------------------------');
        Log::debug($request);
        Log::debug($request->all());

        $EnrollmentData = Enrollment::select('EnrollmentID')
            ->where('UserID', $request->UserID) 
            ->where('ClassID', $request->ClassID) 
            ->first();

        $request->merge(['EnrollmentID' => $EnrollmentData->EnrollmentID]);
        $data = $request->only('EnrollmentID', 'ClassNoteComment', 'ClassNoteID');
        

        Log::debug($data);

        $result = ClassNote::create($data);

        Log::debug("작성된 데이터-------------------------------------------");
        Log::debug($result);

        
        // $responseData = ClassNote::select('class_notes.ClassNoteID',
        //     'class_notes.ClassNoteComment',
        //     'enrollments.UserID',
        //     'enrollments.ClassID')
        //     ->join('enrollments','class_notes.EnrollmentID','enrollments.EnrollmentID')
        //     ->where('enrollments.UserID', $result->UserID)
        //     ->where('enrollments.ClassID', $result->ClassID)
        //     ->orderBy('class_notes.created_at', 'desc')
        //     ->get();
        //     Log::debug($responseData);
            
        return response()->json($result);
        // return response()->json($responseData);
    }

    // 강의 노트 삭제
    public function delClassNoteData($ClassNoteID) {
        
        // 파라미터에 ClassID랑 ClassNoteID 확인해 봐야함. 지금 너무 헷갈림
        if(Auth::check()) {
            $result = ClassNote::destroy($ClassNoteID);
        }

        return response()->json($result);
    }

    // 강의 노트 수정
    public function putClassNoteData(Request $request) {
        
        $classNoteData = $request->only('EnrollmentID', 'ClassNoteID', 'ClassNoteComment');

        $data = ClassNote::where('ClassNoteID', $request->ClassNoteID)
            ->update($classNoteData);

        return response()->json($data);
    }

}
