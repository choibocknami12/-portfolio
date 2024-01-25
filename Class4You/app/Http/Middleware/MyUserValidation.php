<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class MyUserValidation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Log::debug("****************** 유저 유효성 체크 시작 ******************");
        
        $arrBaseKey = [
            'UserEmail',
            'UserPassword',
            'UserPasswordChk',
            'UserPhoneNumber',
            'UserName',
            'UserBirthDate',
            'UserAddress',
            'UserTermsofUse',
            'UserPrivacy',
            'NewUserPassword',
            'NewUserPasswordChk',
        ];

        $arrBaseValidation = [
            'UserEmail' => 'regex:/^\S+@\S+\.\S+$/'
            ,'UserPassword' => 'required|string|min:8|max:16|regex:/^(?=.*[a-zA-Z])(?=.*[!@#]).+$/'
            ,'UserPasswordChk' => 'required|string|same:UserPassword'
            ,'UserName' => 'required|string|min:2|regex:/^[a-zA-Z가-힣 ]+$/u'
            ,'UserPhoneNumber' => 'required|string|regex:/^01[016789]\d{7,8}$/'
            ,'UserBirthDate' => 'required|date_format:Y-m-d|before_or_equal:today'
            ,'UserAddress' => 'required|string|min:5|max:255'
            ,'UserTermsofUse' => 'required|numeric|in:1'
            ,'UserPrivacy' => 'required|numeric|in:1'
            ,'NewUserPassword' => 'required|string|min:8|max:16|regex:/^(?=.*[a-zA-Z])(?=.*[!@#]).+$/'
            ,'NewUserPasswordChk' => 'required|string|same:NewUserPassword'
        ];

        $arrRequestParam = [];

        // Log::debug("****************** foreach 시작 ******************");
        foreach($arrBaseKey as $val) {
            // Log::debug("항목 :" .$val);
            if($request->has($val)) {
                $arrRequestParam[$val] = $request->$val;
            } else {
                // 배열 안에 없는 값은 바리데이션에서 제거
                unset($arrBaseValidation[$val]);
            }
            // Log::debug("리퀘스트 파라미터 획득", $arrRequestParam);
            // Log::debug("유효성 체크 리스트 획득", $arrBaseValidation);
        }
        // Log::debug("****************** foreach 끝 ******************");

        $validator = Validator::make($arrRequestParam, $arrBaseValidation);

        if ($validator->fails()) {
            $errors = [];
            foreach ($validator->errors()->messages() as $field => $messages) {
                $errors[$field] = $messages[0]; // 첫 번째 오류 메시지만 사용
                Log::error("Validation error for field '$field': " . implode(', ', $messages));
            }
        
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $errors,
            ], 400);
        }

        // 유효성 검사 실패 시 처리
        // if($validator->fails()) {
        //     return redirect('/'.$request->path())->withErrors($validator->errors());
        // }

        // Log::debug("****************** 유저 유효성 체크 종료 ******************");
        return $next($request);
    }
}
