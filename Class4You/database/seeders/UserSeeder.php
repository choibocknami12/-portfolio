<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        // foreach (range(1, 10) as $index) {
        //     $date = $faker->dateTimeBetween('-1 years');
        

        //     User::create([
        //         'UserEmail' => 'ykxv317@gmail.com',
        //         'UserPassword' => Hash::make('aA123456!'),
        //         'UserPhoneNumber' => '01012345678',
        //         'UserName' => '김민',
        //         'UserBirthDate' => '1992-03-15',
        //         'UserPostcode' => 12345,
        //         'UserRoadAddress' => '서울특별시 강남구 역삼로 123',
        //         'UserDetailedAddress' => '101호',
        //         'UserTermsofUse' => 1,
        //         'UserPrivacy' => 1,
        //         'created_at' => $date,
        //     ]);

        //     $date = $faker->dateTimeBetween('-1 years');

        //     User::create([
        //         'UserEmail' => 'nfvh729@gmail.com',
        //         'UserPassword' => Hash::make('bB789012@') ,
        //         'UserPhoneNumber' => '01098765432',
        //         'UserName' => '이승우',
        //         'UserBirthDate' => '1995-07-22',
        //         'UserPostcode' => 56789,
        //         'UserRoadAddress' => '경기도 성남시 분당로 456',
        //         'UserDetailedAddress' => '202호',
        //         'UserTermsofUse' => 1,
        //         'UserPrivacy' => 1,
        //         'created_at' => $date,
        //     ]);

        //     $date = $faker->dateTimeBetween('-1 years');

        //     User::create([
        //         'UserEmail' => 'aroq141@naver.com',
        //         'UserPassword' => Hash::make('cC345678#') ,
        //         'UserPhoneNumber' => '01023456789',
        //         'UserName' => '박서준',
        //         'UserBirthDate' => '1998-11-05',
        //         'UserPostcode' => 98765,
        //         'UserRoadAddress' => '인천광역시 남동구 성리로 789',
        //         'UserDetailedAddress' => '303호',
        //         'UserTermsofUse' => 1,
        //         'UserPrivacy' => 1,
        //         'created_at' => $date,
        //     ]);

        //     $date = $faker->dateTimeBetween('-1 years');

        //     User::create([
        //         'UserEmail' => 'sjdk983@daum.net',
        //         'UserPassword' => Hash::make('dD901234!') ,
        //         'UserPhoneNumber' => '01087654321',
        //         'UserName' => '최민아',
        //         'UserBirthDate' => '1991-09-18',
        //         'UserPostcode' => 23456,
        //         'UserRoadAddress' => '대구광역시 중구 대봉로 234',
        //         'UserDetailedAddress' => '404호',
        //         'UserTermsofUse' => 1,
        //         'UserPrivacy' => 1,
        //         'created_at' => $date,
        //     ]);

        //     $date = $faker->dateTimeBetween('-1 years');

        //     User::create([
        //         'UserEmail' => 'igzm856@gmail.com',
        //         'UserPassword' => Hash::make('eE567890@') ,
        //         'UserPhoneNumber' => '01034567890',
        //         'UserName' => '정성민',
        //         'UserBirthDate' => '1996-02-09',
        //         'UserPostcode' => 87654,
        //         'UserRoadAddress' => '부산광역시 해운대구 해운대로 567',
        //         'UserDetailedAddress' => '505호',
        //         'UserTermsofUse' => 1,
        //         'UserPrivacy' => 1,
        //         'created_at' => $date,
        //     ]);

        //     $date = $faker->dateTimeBetween('-1 years');

        //     User::create([
        //         'UserEmail' => 'xjrp248@gmail.com',
        //         'UserPassword' => Hash::make('fF123456#') ,
        //         'UserPhoneNumber' => '01078901234',
        //         'UserName' => '강서연',
        //         'UserBirthDate' => '1990-12-30',
        //         'UserPostcode' => 34567,
        //         'UserRoadAddress' => '대전광역시 중구 대덕대로 789',
        //         'UserDetailedAddress' => '606호',
        //         'UserTermsofUse' => 1,
        //         'UserPrivacy' => 1,
        //         'created_at' => $date,
        //     ]);

        //     $date = $faker->dateTimeBetween('-1 years');

        //     User::create([
        //         'UserEmail' => 'lmpo632@daum.net',
        //         'UserPassword' => Hash::make('gG789012!') ,
        //         'UserPhoneNumber' => '01045678901',
        //         'UserName' => '윤재영',
        //         'UserBirthDate' => '1993-04-25',
        //         'UserPostcode' => 43210,
        //         'UserRoadAddress' => '울산광역시 남구 삼산로 890',
        //         'UserDetailedAddress' => '707호',
        //         'UserTermsofUse' => 1,
        //         'UserPrivacy' => 1,
        //         'created_at' => $date,
        //     ]);

        //     $date = $faker->dateTimeBetween('-1 years');

        //     User::create([
        //         'UserEmail' => 'wvkg579@gmail.com',
        //         'UserPassword' => Hash::make('hH345678@') ,
        //         'UserPhoneNumber' => '01089012345',
        //         'UserName' => '임하늘',
        //         'UserBirthDate' => '1997-08-12',
        //         'UserPostcode' => 21098,
        //         'UserRoadAddress' => '세종특별자치시 도움3로 123',
        //         'UserDetailedAddress' => '808호',
        //         'UserTermsofUse' => 1,
        //         'UserPrivacy' => 1,
        //         'created_at' => $date,
        //     ]);

        //     $date = $faker->dateTimeBetween('-1 years');

        //     User::create([
        //         'UserEmail' => 'bqdi402@naver.com',
        //         'UserPassword' => Hash::make('iI901234#') ,
        //         'UserPhoneNumber' => '01056789012',
        //         'UserName' => '오시우',
        //         'UserBirthDate' => '1994-10-08',
        //         'UserPostcode' => 76543,
        //         'UserRoadAddress' => '경기도 안양시 만안로 456',
        //         'UserDetailedAddress' => '909호',
        //         'UserTermsofUse' => 1,
        //         'UserPrivacy' => 1,
        //         'created_at' => $date,
        //     ]);

        //     $date = $faker->dateTimeBetween('-1 years');

        //     User::create([
        //         'UserEmail' => 'kaxo359@gmail.com',
        //         'UserPassword' => Hash::make('jJ567890!') ,
        //         'UserPhoneNumber' => '01043210987',
        //         'UserName' => '신다운',
        //         'UserBirthDate' => '1999-01-14',
        //         'UserPostcode' => 10987,
        //         'UserRoadAddress' => '서울특별시 강서구 공항대로 789',
        //         'UserDetailedAddress' => '1010호',
        //         'UserTermsofUse' => 1,
        //         'UserPrivacy' => 1,
        //         'created_at' => $date,
        //     ]);

        //     $date = $faker->dateTimeBetween('-1 years');

        //     User::create([
        //         'UserEmail' => 'jfse298@naver.com',
        //         'UserPassword' => Hash::make('kK123456@') ,
        //         'UserPhoneNumber' => '01067890123',
        //         'UserName' => '한지영',
        //         'UserBirthDate' => '1990-06-20',
        //         'UserPostcode' => 45678,
        //         'UserRoadAddress' => '인천광역시 서구 원당로 234',
        //         'UserDetailedAddress' => '1111호',
        //         'UserTermsofUse' => 1,
        //         'UserPrivacy' => 1,
        //         'created_at' => $date,
        //     ]);

        //     $date = $faker->dateTimeBetween('-1 years');

        //     User::create([
        //         'UserEmail' => 'yzlk015@gmail.com',
        //         'UserPassword' => Hash::make('lL789012#') ,
        //         'UserPhoneNumber' => '01054321098',
        //         'UserName' => '정민재',
        //         'UserBirthDate' => '1992-11-28',
        //         'UserPostcode' => 98701,
        //         'UserRoadAddress' => '대구광역시 수성구 범어로 345',
        //         'UserDetailedAddress' => '1212호',
        //         'UserTermsofUse' => 1,
        //         'UserPrivacy' => 1,
        //         'created_at' => $date,
        //     ]);

        //     $date = $faker->dateTimeBetween('-1 years');

        //     User::create([
        //         'UserEmail' => 'rfth927@gmail.com',
        //         'UserPassword' => Hash::make('mM345678!') ,
        //         'UserPhoneNumber' => '01078901234',
        //         'UserName' => '송서연',
        //         'UserBirthDate' => '1995-03-03',
        //         'UserPostcode' => 23456,
        //         'UserRoadAddress' => '부산광역시 연제구 센텀로 456',
        //         'UserDetailedAddress' => '1313호',
        //         'UserTermsofUse' => 1,
        //         'UserPrivacy' => 1,
        //         'created_at' => $date,
        //     ]);

        //     $date = $faker->dateTimeBetween('-1 years');
            
        //     User::create([
        //         'UserEmail' => 'jsdh124@daum.net',
        //         'UserPassword' => Hash::make('nN901234@') ,
        //         'UserPhoneNumber' => '01065432109',
        //         'UserName' => '김건우',
        //         'UserBirthDate' => '1998-09-07',
        //         'UserPostcode' => 76543,
        //         'UserRoadAddress' => '광주광역시 북구 운암로 567',
        //         'UserDetailedAddress' => '1414호',
        //         'UserTermsofUse' => 1,
        //         'UserPrivacy' => 1,
        //         'created_at' => $date,
        //     ]);

        //     $date = $faker->dateTimeBetween('-1 years');

        //     User::create([
        //         'UserEmail' => 'oikp593@naver.com',
        //         'UserPassword' => Hash::make('oO567890#') ,
        //         'UserPhoneNumber' => '01090123456',
        //         'UserName' => '나서윤',
        //         'UserBirthDate' => '1991-04-11',
        //         'UserPostcode' => 87654,
        //         'UserRoadAddress' => '대전광역시 동구 가오로 678',
        //         'UserDetailedAddress' => '1515호',
        //         'UserTermsofUse' => 1,
        //         'UserPrivacy' => 1,
        //         'created_at' => $date,
        //     ]);

        //     $date = $faker->dateTimeBetween('-1 years');

        //     User::create([
        //         'UserEmail' => 'fbdm764@gmail.com',
        //         'UserPassword' => Hash::make('pP123456!') ,
        //         'UserPhoneNumber' => '01034567890',
        //         'UserName' => '박다현',
        //         'UserBirthDate' => '1996-08-26',
        //         'UserPostcode' => 32109,
        //         'UserRoadAddress' => '울산광역시 중구 성남로 789',
        //         'UserDetailedAddress' => '1616호',
        //         'UserTermsofUse' => 1,
        //         'UserPrivacy' => 1,
        //         'created_at' => $date,
        //     ]);

        //     $date = $faker->dateTimeBetween('-1 years');

        //     User::create([
        //         'UserEmail' => 'jzxf872@naver.com',
        //         'UserPassword' => Hash::make('qQ789012@') ,
        //         'UserPhoneNumber' => '01078901234',
        //         'UserName' => '임다은',
        //         'UserBirthDate' => '1993-12-02',
        //         'UserPostcode' => 10987,
        //         'UserRoadAddress' => '세종특별자치시 나성로 890',
        //         'UserDetailedAddress' => '1717호',
        //         'UserTermsofUse' => 1,
        //         'UserPrivacy' => 1,
        //         'created_at' => $date,
        //     ]);

        //     $date = $faker->dateTimeBetween('-1 years');

        //     User::create([
        //         'UserEmail' => 'tyou202@gmail.com',
        //         'UserPassword' => Hash::make('rR345678#') ,
        //         'UserPhoneNumber' => '01012345678',
        //         'UserName' => '황승우',
        //         'UserBirthDate' => '1997-06-17',
        //         'UserPostcode' => 87654,
        //         'UserRoadAddress' => '경기도 광명시 철산로 901',
        //         'UserDetailedAddress' => '1919호',
        //         'UserTermsofUse' => 1,
        //         'UserPrivacy' => 1,
        //         'created_at' => $date,
        //     ]);

        //     $date = $faker->dateTimeBetween('-1 years');

        //     User::create([
        //         'UserEmail' => 'rnsl614@gmail.com',
        //         'UserPassword' => Hash::make('sS901234!') ,
        //         'UserPhoneNumber' => '01098765432',
        //         'UserName' => '강지민',
        //         'UserBirthDate' => '1994-01-23',
        //         'UserPostcode' => 43210,
        //         'UserRoadAddress' => '광주광역시 북구 운암로 567,',
        //         'UserDetailedAddress' => '2020호',
        //         'UserTermsofUse' => 1,
        //         'UserPrivacy' => 1,
        //         'created_at' => $date,
        //     ]);

        //     $date = $faker->dateTimeBetween('-1 years');

            
        //     User::create([
                // 'UserEmail' => 'kyxp431@gmail.com',
                // 'UserPassword' => Hash::make('tT567890@') ,
                // 'UserPhoneNumber' => '01023456789',
                // 'UserName' => '조세은',
                // 'UserBirthDate' => '1999-05-31',
                // 'UserPostcode' => 10987,
                // 'UserRoadAddress' => '서울특별시 송파구 올림픽로 1234',
                // 'UserDetailedAddress' => '1818호',
                // 'UserTermsofUse' => 1,
                // 'UserPrivacy' => 1,
                // 'created_at' => $date,
        //     ]);
        // }

        // foreach (range(1, 58392) as $index) {
        //     $date = $faker->dateTimeBetween('-2 years');

        //     User::create([
        //         'UserEmail' => $this->generateRandomEmail(),
        //         'UserPassword' => Hash::make($this->generateRandomPassword()),
        //         'UserPhoneNumber' => $this->generateRandomKoreanPhoneNumber(),
        //         'UserName' => $this->generateRandomKoreanName(),
        //         'UserBirthDate' => $this->generateRandomBirthday(),
        //         'UserPostcode' => null,
        //         'UserRoadAddress' => null,
        //         'UserDetailedAddress' => null,
        //         'UserTermsofUse' => 1,
        //         'UserPrivacy' => 1,
        //         'created_at' => $date,
        //     ]);
        // }

        foreach (range(1, 5839) as $index) {
            $date = $faker->dateTimeBetween('-2 years');

            User::create([
                'UserEmail' => $this->generateRandomEmail(),
                'UserPassword' => Hash::make($this->generateRandomPassword()),
                'UserPhoneNumber' => $this->generateRandomKoreanPhoneNumber(),
                'UserName' => $this->generateRandomKoreanName(),
                'UserBirthDate' => $this->generateRandomBirthday(),
                'UserPostcode' => null,
                'UserRoadAddress' => null,
                'UserDetailedAddress' => null,
                'UserTermsofUse' => 1,
                'UserPrivacy' => 1,
                'created_at' => $date,
                'deleted_at' => $date,
            ]);
        }


        

    }

    function generateRandomEmail()
    {
        $email = Str::random(8) . '@gmail.com'; // 여기서 8은 이메일의 랜덤한 부분의 길이를 나타냅니다.

        // 중복된 이메일을 방지하기 위해 검사
        while (User::where('UserEmail', $email)->exists()) {
            $email = Str::random(8) . '@gmail.com';
        }
        return $email;
    }

    function generateRandomPassword()
    {
        $uppercase = Str::random(1); // 영문 대문자 1개
        $lowercase = Str::random(1); // 영문 소문자 1개
        $number = Str::random(1);    // 숫자 1개
        $special = Str::random(1);   // 특수문자 1개

        $length = mt_rand(8, 16);
        $randomPart = Str::random($length);
    
        // 모든 요소를 섞어서 최종 비밀번호 생성
        $password = str_shuffle($uppercase . $lowercase . $number . $special . $randomPart);
    
        return $password;
    }

    function generateRandomKoreanName() {
        // 여러 성과 이름을 각각 배열로 정의
        $surnames = ['김', '이', '박', '최', '정', '강', '조', '윤', '장', '임', '한', '오', '서', '신', '유', '도', '설', '육', '제갈', '윤호', '최강', '회', '왕', '지'];
        $firstNames = ['민준', '지은', '준호', '서연', '예진', '성민', '지훈', '영호', '수빈', '지현', '동현', '수민', '은지', '진우', '태영', '주환', '산', '종', '화연', '하율', '은우', '이안', '성찬', '민경', '지우', '정훈', '현희'];
        
        // 랜덤으로 성과 이름 선택
        $randomSurname = $surnames[array_rand($surnames)];
        $randomFirstName = $firstNames[array_rand($firstNames)];
    
        // 랜덤한 한국인 이름 생성
        $koreanName = $randomSurname . $randomFirstName;
    
        return $koreanName;
        
    }

    function generateRandomKoreanPhoneNumber() {
        // 휴대폰 번호의 앞자리와 뒷자리에 대한 현실적인 패턴 정의
        $mobileNumberFormats = [
            '010-xxxx-xxxx', '011-xxxx-xxxx',
        ];
    
        // 랜덤으로 패턴 선택
        $randomFormat = $mobileNumberFormats[array_rand($mobileNumberFormats)];
    
        // 'x'를 랜덤한 숫자로 치환
        $randomNumberPart = '';
        for ($i = 0; $i < strlen($randomFormat); $i++) {
            $randomNumberPart .= ($randomFormat[$i] === 'x') ? mt_rand(0, 9) : $randomFormat[$i];
        }
    
        // 최종적으로 생성된 휴대폰 번호 반환
        return $randomNumberPart;
    }

    function generateRandomBirthday() {
        // 현재 날짜
        $currentDate = new DateTime('now'); // 현재 날짜로 초기화
    
        // 최소 나이 및 최대 나이 설정
        $minAge = 10;
        $maxAge = 100;
    
        // 나이에 따른 최소 및 최대 태어난 해 계산
        $minBirthYear = $currentDate->format('Y') - $maxAge;
        $maxBirthYear = $currentDate->format('Y') - $minAge;
    
        // 랜덤으로 태어난 해 선택
        $randomBirthYear = mt_rand($minBirthYear, $maxBirthYear);
    
        // 랜덤으로 태어난 월 및 일 선택
        $randomBirthMonth = mt_rand(1, 12);
        $randomBirthDay = mt_rand(1, 28); // 간단하게 28일까지로 가정
    
        // 랜덤으로 생성된 생년월일을 날짜 형식으로 반환
        return sprintf('%04d-%02d-%02d', $randomBirthYear, $randomBirthMonth, $randomBirthDay);
    }

    
}
