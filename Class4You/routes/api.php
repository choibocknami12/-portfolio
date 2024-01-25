<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClassInfoController;
use App\Http\Controllers\ClassBoardController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BoardController;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




// Route::middleware('my.user.validation')->post('/registration', [UserController::class, 'store']);

// Route::get('/getNewClassMainData', [ClassInfoController::class, 'getNewClassMainData']);

// 클래스 보드 뷰 연동 테스트용
// Route::get('/classBoardMain/{ClassLanguageName}', [ClassInfoController::class, 'classBoardIndex']);

// Route::get('/classboarddetail/{ClassID}', [ClassInfoController::class, 'getClassBoardDetailShow']);

// Route::get('/classboarddetailreview/{ClassID}', [ReviewController::class, 'getClassReviewIndex']);

// Route::get('/board', [BoardController::class, 'getBoardMainData']);
