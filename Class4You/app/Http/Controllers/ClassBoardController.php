<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassInfo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class ClassBoardController extends Controller
{
    // public function classBoardIndex() {
    //     $result = ClassInfo::all();

    //     return view('classboardmain',['data' => $result]);
    // }
    //
    // public function classBoardIndex() {
    //     $result1 = $this->getDataForFirstSection();
    //     $result2 = $this->getDataForSecondSection();
    //     $result3 = $this->getDataForThirdSection();
    //     $result4 = $this->getDataForFourthSection();
    // //  뷰로 전달하는 배열을 올바르게 구성하려면 데이터와 메시지 변수를 각각 분리하고, 
    // //  뷰로 전달할 때 각각의 변수에 대한 키를 지정해야함.
    //     return view('classboardmain', [
    //         'data1' => $result1, 
    //         'data2' => $result2['data2'], 
    //         'msg2' => $result2['msg2'],
    //         'data3' => $result3, 
    //         'data4' => $result4
    //     ]);
    // }
    
    // private function getDataForFirstSection() {
    //     // private 왜 썼을까
    //     return ClassInfo::where('ClassDifficulty', 1)->take(4)->get();
    // }
    
    // // private function getDataForSecondSection() {

    // //     return ClassInfo::where('ClassDifficulty', 2)->take(4)->get();
    // // }

    // private function getDataForSecondSection() {
    //     $msg2 = "이제 첫발을 뗀 당신을 위한 2단계";
    //     $data2 = ClassInfo::where('ClassDifficulty', 2)->take(4)->get();

    //     return ['data2' => $data2, 'msg2' => $msg2];
    // }
    
    // private function getDataForThirdSection() {
        
    //     return ClassInfo::where('ClassDifficulty', 3)->take(4)->get();
    // }

    // private function getDataForFourthSection() {
        
    //     return ClassInfo::where('ClassDifficulty', 4)->take(4)->get();
    // }

    // 왜 두개지
    // public function getClassBoardDetailShow($ClassID) {
    //     $result = ClassInfo::where('ClassID', $ClassID)->first();

    //     // classboardshow와 다르게 한가지 정보만 가지고 오기 때문에 if문 사용
    //     if ($result) {
    //         $classID = $result->ClassID;

    //         $langData = ClassInfo::select('class_languages.ClassLanguageName')
    //         ->join('class_languagelinks', 'class_infos.ClassID', 'class_languagelinks.ClassID')
    //         ->join('class_languages', 'class_languagelinks.ClassLanguageID', 'class_languages.ClassLanguageID')
    //         ->where('class_infos.ClassID', $classID)
    //         ->get();

    //         $result->languages = $langData;

    //         // return view('classBoardDetail', ['data' => $result]);
    //         return response()->json($result);
    //     }    
    // }

}
