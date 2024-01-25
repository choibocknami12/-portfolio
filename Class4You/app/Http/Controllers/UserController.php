<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\EmailAuthState;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Two\InvalidStateException;
use Redirect;


class UserController extends Controller
{
    // 회원가입
    function store (Request $request) {
        // session()->start();
        // Log::debug($request);
        $data = $request->only('UserEmail', 'UserPassword', 'UserName', 'UserPhoneNumber', 'UserBirthDate', 'UserPostcode', 'UserRoadAddress', 'UserDetailedAddress', 'UserTermsofUse', 'UserPrivacy');
        
        // 비밀번호 암호화
        $data['UserPassword'] = Hash::make($data['UserPassword']);
        // Log::info($request);
        // 회원가입 정보 DB 저장
        $result = User::create($data);

        // // Eloquent 모델을 사용하여 데이터베이스에 저장
        // $user = User::create($validatedData);
        

        // 저장된 사용자를 반환하거나 다른 작업을 수행할 수 있습니다.
        // return response()->json(['user' => $user, 'message' => 'User created successfully']);
        return response()->json(['success' => true, 'message' => '회원가입에 성공했습니다.']);
    }

    // 회원 로그인
    public function loginpost(Request $request) {
        $result = User::where('UserEmail', $request->UserEmail)->first();

        if(!$result || !(Hash::check($request->UserPassword, $result->UserPassword))) {
            return response()->json([
                'success' => false,
                'message' => '아이디와 비밀번호를 확인해주세요.',
            ]);
        }
    
        // 유저 인증 작업
        Auth::login($result);
        session(['user' => $result]);
        session()->save();

        $userId = Auth::id();

        // Log::debug($userId);
        // $token = Str::random(60);

        // $result->update(['remember_token' => $token]);

        if (Auth::check()) {
            // session(['user' => Auth::user()]);
            
            $sessionDataCheck = Auth::check();
            // $sessionDataCheck = $sessionDataCheck ? 1 : 0;
            // $sessionDataUser = Auth::user();
            // $sessionDataUserName = Auth::user()->UserName;
            // $sessionDataUserEmail = Auth::user()->UserEmail;
            // Log::debug($sessionDataUser);
            // Log::debug($sessionDataUserName);
            // Log::debug($sessionDataUserEmail);
            // Log::debug($sessionDataUserEmail);
            return response()->json([
                'success' => true,
                'message' => '로그인이 성공적으로 수행되었습니다.',
                'sessionDataCheck' => $sessionDataCheck,
                // 'sessionCheckUserName' => $sessionDataUserName,
                // 'sessionCheckUserEmail' => $sessionDataUserEmail,
                'userId' => $userId,
            ]);

        } else {
            return response()->json([
                'success' => false,
                'message' => '인증 에러가 발생했습니다.',
            ]);
        }
    }

    // 회원 로그아웃
    public function logout(Request $request)
    {

        // 로그아웃 처리
        Auth::logout();

        $sessionDataCheck = Auth::check();

        return response()->json([
            'message' => '로그아웃 성공',
            'sessionDataCheck' => $sessionDataCheck,
        ]);
    }

    public function emaildoublecheck(Request $request)
    {

        $userEmail = $request->input('UserEmail');

        $result = User::where('UserEmail', $userEmail)->first();

        if ($result) {
            return response()->json([
                'message' => false,
            ]);
        } else {
            return response()->json([
                'message' => true,
            ]);
        }
    }

    public function kakaologin(Request $request)
    {
        try{
            $user = Socialite::driver('kakao')->setHttpClient(new \GuzzleHttp\Client(['verify' => false]))->user();
        } catch(InvalidStateException $e) {
            $user = Socialite::driver('kakao')->setHttpClient(new \GuzzleHttp\Client(['verify' => false]))->stateless()->user();
        }

        $userEmail = $user->email;
        
        $result = User::where('UserEmail', $userEmail)->first();

        if ($result) {
            Auth::login($result);
            session(['user' => $result]);
            session()->save();
            $userId = Auth::id();

            $beforeUrl = session()->get('before_url');
            session()->remove('before_url');
            if (Auth::check()) {         
                session()->put('userChk', true);
                // $domain = request()->getHost();
                $sessionDataCheck = Auth::check();
                // return response()->json([
                //     'success' => true,
                //     'message' => '로그인이 성공적으로 수행되었습니다.',
                //     'sessionDataCheck' => $sessionDataCheck,
                //     'userId' => $userId,
                // ])->header('Location', '/');
                return redirect($beforeUrl);
                // return redirect()->route($beforeUrl);
                // return Redirect::route($beforeUrl);
    
            } else {
                return response()->json([
                    'success' => false,
                    'message' => '인증 에러가 발생했습니다.',
                ]);
            }
        } else {
            session()->put('user', $userEmail);
            return redirect('/registration');
            // return redirect()->route('/registration');
            
        }

        // dd($user);
        
    }

    public function kakaoregist()
    {
        // $user = Socialite::driver('kakao')->setHttpClient(new \GuzzleHttp\Client(['verify' => false]))->user();
        // Log::debug($user->email);

        $userEmail = session()->get('user');
        session()->remove('user');
        // dd($user);
        return response()->json([
            'userEmail' => $userEmail,
        ]);
    }

    public function getuserdata(Request $request)
    {  
        $userChk = session()->get('userChk');
        session()->remove('userChk');
        if (Auth::check()) {
            $userId = Auth::id();
            $sessionDataCheck = Auth::check();
            return response()->json([
                'success' => true,
                'message' => '로그인이 성공적으로 수행되었습니다.',
                'sessionDataCheck' => $sessionDataCheck,
                'userId' => $userId,
                'userChk' => $userChk,
            ]);
        }

    }

    // public function kakaologout()
    // {
    //     Auth::logout();

    //     // dd($request);
    //     return redirect('/');
    // }

    public function googleemailchk(Request $request) { 

        $userChkData = User::select('UserID', 'UserEmail')->where('UserEmail', $request->email)->first();
        // Log::debug($request);
        // Log::debug($userChkData->UserID);
        if($userChkData) {
            $randomValue = Str::random(8);

            $EmailAuthData = [
                'UserID' => $userChkData->UserID,
                'EmailStatus' => 1,
                'EmailToken' => $randomValue,
            ];

            $EmailAuthChkData = EmailAuthState::where('UserID', $userChkData->UserID)->first();

            EmailAuthState::create($EmailAuthData);

            $data = [
                'email' => $request->email,
                'token' => $randomValue,
            ];
    
            // 이메일 전송
            Mail::send('mail.mail_form', ['data' => $data], function($message) use ($data, $request) {
                $message->to($request->email)->subject('이메일인증');
                $message->from('dldmldltmd@gmail.com');
            });

            return response()->json([
                'success' => true,
                'message' => '존재하는 이메일입니다',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => '존재하지 않는 이메일입니다.',
            ]);
        }
    }
    
    public function tokendatachk(Request $request) {
        // Log::debug($request);

        $userID = User::select('UserID')->where('UserEmail', $request->email)->first();

        $emailAuthChk = EmailAuthState::where('UserID', $userID->UserID)->first();
        // Log::debug($emailAuthChk);
        if($emailAuthChk) {
            $emailTokenAuthChk = EmailAuthState::where('UserID', $userID->UserID)
                ->where('EmailToken', $request->token)
                ->first();

                if($emailTokenAuthChk) {
                    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#';
                    $randomValue = $characters[rand(0, 25)];  // 영어 대문자
                    $randomValue .= $characters[rand(26, 51)];  // 영어 소문자
                    $randomValue .= $characters[rand(52, 61)];  // 숫자
                    $randomValue .= $characters[rand(62, 64)];  // 특수문자
                    
                    // 나머지 글자를 랜덤하게 채우기
                    while(strlen($randomValue) < 8) {
                        $randomValue .= $characters[rand(0, strlen($characters) - 1)];
                    }
                    // 랜덤하게 섞기
                    $randomValue = str_shuffle($randomValue);

                    $data = [
                        'password' => $randomValue,
                    ];
                    Mail::send('mail.mail_form_password', ['data' => $data], function($message) use ($data, $request) {
                        $message->to($request->email)->subject('임시 비밀번호');
                        $message->from('dldmldltmd@gmail.com');
                    });

                    $passwordHash = Hash::make($randomValue);

                    User::where('UserID', $userID->UserID)
                        ->update([
                            'UserPassword' => $passwordHash,
                        ]);
                } else {

                }
            
        }
    }

    public function tokendataupdate(Request $request) {

        $userID = User::select('UserID')->where('UserEmail', $request->params['email'])->first();

        $emailAuthChk = EmailAuthState::where('UserID', $userID->UserID)
            ->orderBy('created_at', 'desc') 
            ->first();
        
        // Log::debug($emailAuthChk);
        
        if($emailAuthChk->EmailStatus < 3) {
            $randomValue = Str::random(8);

            EmailAuthState::where('UserID', $emailAuthChk->UserID,)
                ->where('EmailAuthStateID', $emailAuthChk->EmailAuthStateID)
                ->update([
                    'EmailStatus' => DB::raw('EmailStatus + 1'),
                    'EmailToken' => $randomValue,
                ]);

            $data = [
                'email' => $request->params['email'],
                'token' => $randomValue,
            ];

            // 이메일 전송
            Mail::send('mail.mail_form', ['data' => $data], function($message) use ($data, $request) {
                $message->to($request->params['email'])->subject('이메일인증');
                $message->from('dldmldltmd@gmail.com');
            });
        } else {
            return response()->json([
                'success' => false,
                'message' => '5분 후 다시 시도해주세요.',
            ]);
        }
        
    }
}
