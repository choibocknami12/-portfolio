<?php

namespace Database\Seeders;

use App\Models\ClassNote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class ClassNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {

            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                MyBatis 버전도 낮춰보고 코드도 비교해보고 했는데 자꾸 Invalid bound statement오류가 발생합니다. 
                혹시 어떤 게 문제일까요.. 제가 잘 못 찾는 건가요..?
                EOT,
                'created_at' => $date,
            ]);


            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                Docker Engine v24.0.7 을 사용중입니다.

                아래의 다른 분들처럼 DockerEngine 에서 설정으로 넣어도
                EOT,
                'created_at' => $date,
            ]);

            
            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                이 코드에서 s.charAt(i) 인덱스에 직접 문자값을 저장할 수 없는 이유는 무엇인가요?? 
                리터럴이라서 그런건가요?
                EOT,
                'created_at' => $date,
            ]);

                        
            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                안녕하세요! 수업 잘 듣고 있습니다.

                혹시 두 가지 단어가 모두 포함된 페이지만 조회하려면 어떻게해야할까요? 두가지 단어로 검색하면 둘 중 한가지 단어만 있어도 검색되게 됩니다.
                EOT,
                'created_at' => $date,
            ]);

                        
            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                이 코드에서 s.charAt(i) 인덱스에 직접 문자값을 저장할 수 없는 이유는 무엇인가요?? 
                리터럴이라서 그런건가요?
                EOT,
                'created_at' => $date,
            ]);

                        
            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                혹시 이 강의들을 실습하면 비용이 많이 청구될까요..!?
                EOT,
                'created_at' => $date,
            ]);

                        
            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                위처럼 properties 를 작성했는데 ToDo 테이블이 생성되지 않습니다...
                오류는 전혀 뜨지 않고 있습니다...무엇이 문제인지 잘 모르겠습니다
                EOT,
                'created_at' => $date,
            ]);

                        
            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                build시에 발생하는 에러입니다. 
                dynamic route에서 에러가 발생하는것 같은데 깃헙이슈나 레디스에 올라와있는 방법으로도 잘 해결이 안되네요... 
                output export 를 없애고 빌드르 하면 아래와 같은 에러가 발생합니다
                EOT,
                'created_at' => $date,
            ]);

                        
            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                그러나 MVVM폴더 안에 View폴더 안에 UserModelBasicView파일이 존재하면 
                Preview가 빨간 박스처럼 문제가 나타납니다.
                EOT,
                'created_at' => $date,
            ]);

                        
            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                영상 강의가 너무 떨어져서 인프런 문의에 문의 드렸더니

                인프런측에서는 강사님이 540P로 제공하셔서 개선이 어렵다고 합니다.
                EOT,
                'created_at' => $date,
            ]);

                        
            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                update stock set quantity = quantity - :quantity where product_id = :id 이런식으로는 안되는건가요?

                JPA로는 불가능한가요?
                EOT,
                'created_at' => $date,
            ]);

                        
            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                클라이언트 컴포넌트로 지정했는데도 서버사이드 렌더링으로 동작하는 이유가 뭔가요?
                EOT,
                'created_at' => $date,
            ]);

                        
            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                eclipse.exe에 의해 writtableArea(숫자).dll 파일이 생성되는데 이유가 뭔가요?

                그리고 생성되지않게 하는 방법도있을까요?
                EOT,
                'created_at' => $date,
            ]);

                        
            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                안녕하세요. 책 내용 질문드립니다! 책 208쪽인데요, 
                아핀 공간이 z가 1로 제한된다는 것은 이해가 가는데 왜 왼쪽 그림처럼 오른쪽 사선방향으로 올라가는 지 모르겠어요.
                EOT,
                'created_at' => $date,
            ]);

                        
            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                한국어 분석 말고, 영어 분석은 어떻게 다른지 업데이트 해주 실수 있을까요?
                EOT,
                'created_at' => $date,
            ]);

                        
            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                [질문 템플릿]
                1. 강의 내용과 관련된 질문인가요? (예)
                2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
                3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)
                EOT,
                'created_at' => $date,
            ]);

                        
            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                안녕하세요!

                모듈 강의를 듣다가 import test_module 을 진행하였는데 오류가 나서 문의 드립니다.

                오류 : Import "test_module" could not be resolved
                EOT,
                'created_at' => $date,
            ]);

                        
            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                강의에는 1개 이상 스킵, 컴플리트, 모두 컴플리트

                이런 식의 조건만 소개되어 있는데,
                EOT,
                'created_at' => $date,
            ]);

                        
            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                강의 내용 중 나온 애노테이션을 만들게 되면 Qualifier("mainDiscountPolicy") 
                부분을 제외한 다른 코드는 스프링의 Qualifier 코드를 복붙하여 어노테이션들(@Target, @Retention 등)을 참조해서 사용하게 되는데요
                EOT,
                'created_at' => $date,
            ]);

                        
            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                강의 로그인과 회원가입 실제로 하기 뒷부분에 트렌드조회, 팔로우, 추천게시물을 불러오기 위해 
                주소를 변경해주고 403이 나오는 곳은 credentials 을 추가했습니다
                EOT,
                'created_at' => $date,
            ]);

                        
            $date = $faker->dateTimeBetween('-2 years');
            $enrollmentID = $faker->numberBetween(1, 50000);

            ClassNote::create([
                'EnrollmentID' => $enrollmentID,
                'ClassNoteComment' => <<<EOT
                저는 real CAN 제어기가 없습니다. dbc 화일을 강사님이 가르쳐 주신대로 만들고, 
                Online mode, simulated bus로 세팅하고 , start를 눌러서 TRACE window에서 데이터를 보고 싶은데 아무것도 안 나옵니다. 
                EOT,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            안녕하세요. 책 내용 질문드립니다! 책 208쪽인데요, 
            아핀 공간이 z가 1로 제한된다는 것은 이해가 가는데 왜 왼쪽 그림처럼 오른쪽 사선방향으로 올라가는 지 모르겠어요.
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            한국어 분석 말고, 영어 분석은 어떻게 다른지 업데이트 해주 실수 있을까요?
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            [질문 템플릿]
            1. 강의 내용과 관련된 질문인가요? (예)
            2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
            3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            안녕하세요!

            모듈 강의를 듣다가 import test_module 을 진행하였는데 오류가 나서 문의 드립니다.

            오류 : Import "test_module" could not be resolved
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            강의에는 1개 이상 스킵, 컴플리트, 모두 컴플리트

            이런 식의 조건만 소개되어 있는데,
            EOT,
            'created_at' => $date,
        ]);

        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            [질문 템플릿]
            1. 강의 내용과 관련된 질문인가요? (예)
            2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
            3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)
            EOT,
            'created_at' => $date,
        ]);    
            

        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            [질문 템플릿]
            1. 강의 내용과 관련된 질문인가요? (예)
            2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
            3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            안녕하세요!

            모듈 강의를 듣다가 import test_module 을 진행하였는데 오류가 나서 문의 드립니다.

            오류 : Import "test_module" could not be resolved
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            강의에는 1개 이상 스킵, 컴플리트, 모두 컴플리트

            이런 식의 조건만 소개되어 있는데,
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            강의 내용 중 나온 애노테이션을 만들게 되면 Qualifier("mainDiscountPolicy") 
            부분을 제외한 다른 코드는 스프링의 Qualifier 코드를 복붙하여 어노테이션들(@Target, @Retention 등)을 참조해서 사용하게 되는데요
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            강의 로그인과 회원가입 실제로 하기 뒷부분에 트렌드조회, 팔로우, 추천게시물을 불러오기 위해 
            주소를 변경해주고 403이 나오는 곳은 credentials 을 추가했습니다
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            저는 real CAN 제어기가 없습니다. dbc 화일을 강사님이 가르쳐 주신대로 만들고, 
            Online mode, simulated bus로 세팅하고 , start를 눌러서 TRACE window에서 데이터를 보고 싶은데 아무것도 안 나옵니다. 
            EOT,
            'created_at' => $date,
        ]);

        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            MyBatis 버전도 낮춰보고 코드도 비교해보고 했는데 자꾸 Invalid bound statement오류가 발생합니다. 
            혹시 어떤 게 문제일까요.. 제가 잘 못 찾는 건가요..?
            EOT,
            'created_at' => $date,
        ]);


        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            Docker Engine v24.0.7 을 사용중입니다.

            아래의 다른 분들처럼 DockerEngine 에서 설정으로 넣어도
            EOT,
            'created_at' => $date,
        ]);

        
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            이 코드에서 s.charAt(i) 인덱스에 직접 문자값을 저장할 수 없는 이유는 무엇인가요?? 
            리터럴이라서 그런건가요?
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            안녕하세요! 수업 잘 듣고 있습니다.

            혹시 두 가지 단어가 모두 포함된 페이지만 조회하려면 어떻게해야할까요? 두가지 단어로 검색하면 둘 중 한가지 단어만 있어도 검색되게 됩니다.
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            이 코드에서 s.charAt(i) 인덱스에 직접 문자값을 저장할 수 없는 이유는 무엇인가요?? 
            리터럴이라서 그런건가요?
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            혹시 이 강의들을 실습하면 비용이 많이 청구될까요..!?
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            위처럼 properties 를 작성했는데 ToDo 테이블이 생성되지 않습니다...
            오류는 전혀 뜨지 않고 있습니다...무엇이 문제인지 잘 모르겠습니다
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            build시에 발생하는 에러입니다. 
            dynamic route에서 에러가 발생하는것 같은데 깃헙이슈나 레디스에 올라와있는 방법으로도 잘 해결이 안되네요... 
            output export 를 없애고 빌드르 하면 아래와 같은 에러가 발생합니다
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            그러나 MVVM폴더 안에 View폴더 안에 UserModelBasicView파일이 존재하면 
            Preview가 빨간 박스처럼 문제가 나타납니다.
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            영상 강의가 너무 떨어져서 인프런 문의에 문의 드렸더니

            인프런측에서는 강사님이 540P로 제공하셔서 개선이 어렵다고 합니다.
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            update stock set quantity = quantity - :quantity where product_id = :id 이런식으로는 안되는건가요?

            JPA로는 불가능한가요?
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            클라이언트 컴포넌트로 지정했는데도 서버사이드 렌더링으로 동작하는 이유가 뭔가요?
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            eclipse.exe에 의해 writtableArea(숫자).dll 파일이 생성되는데 이유가 뭔가요?

            그리고 생성되지않게 하는 방법도있을까요?
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            안녕하세요. 책 내용 질문드립니다! 책 208쪽인데요, 
            아핀 공간이 z가 1로 제한된다는 것은 이해가 가는데 왜 왼쪽 그림처럼 오른쪽 사선방향으로 올라가는 지 모르겠어요.
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            한국어 분석 말고, 영어 분석은 어떻게 다른지 업데이트 해주 실수 있을까요?
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            [질문 템플릿]
            1. 강의 내용과 관련된 질문인가요? (예)
            2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
            3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            안녕하세요!

            모듈 강의를 듣다가 import test_module 을 진행하였는데 오류가 나서 문의 드립니다.

            오류 : Import "test_module" could not be resolved
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            강의에는 1개 이상 스킵, 컴플리트, 모두 컴플리트

            이런 식의 조건만 소개되어 있는데,
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            강의 내용 중 나온 애노테이션을 만들게 되면 Qualifier("mainDiscountPolicy") 
            부분을 제외한 다른 코드는 스프링의 Qualifier 코드를 복붙하여 어노테이션들(@Target, @Retention 등)을 참조해서 사용하게 되는데요
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            강의 로그인과 회원가입 실제로 하기 뒷부분에 트렌드조회, 팔로우, 추천게시물을 불러오기 위해 
            주소를 변경해주고 403이 나오는 곳은 credentials 을 추가했습니다
            EOT,
            'created_at' => $date,
        ]);

                    
        $date = $faker->dateTimeBetween('-2 years');
        $enrollmentID = $faker->numberBetween(1, 50000);

        ClassNote::create([
            'EnrollmentID' => $enrollmentID,
            'ClassNoteComment' => <<<EOT
            저는 real CAN 제어기가 없습니다. dbc 화일을 강사님이 가르쳐 주신대로 만들고, 
            Online mode, simulated bus로 세팅하고 , start를 눌러서 TRACE window에서 데이터를 보고 싶은데 아무것도 안 나옵니다. 
            EOT,
            'created_at' => $date,
        ]);

        $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        안녕하세요. 책 내용 질문드립니다! 책 208쪽인데요, 
        아핀 공간이 z가 1로 제한된다는 것은 이해가 가는데 왜 왼쪽 그림처럼 오른쪽 사선방향으로 올라가는 지 모르겠어요.
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        한국어 분석 말고, 영어 분석은 어떻게 다른지 업데이트 해주 실수 있을까요?
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        [질문 템플릿]
        1. 강의 내용과 관련된 질문인가요? (예)
        2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
        3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        안녕하세요!

        모듈 강의를 듣다가 import test_module 을 진행하였는데 오류가 나서 문의 드립니다.

        오류 : Import "test_module" could not be resolved
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        강의에는 1개 이상 스킵, 컴플리트, 모두 컴플리트

        이런 식의 조건만 소개되어 있는데,
        EOT,
        'created_at' => $date,
    ]);

    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        [질문 템플릿]
        1. 강의 내용과 관련된 질문인가요? (예)
        2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
        3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)
        EOT,
        'created_at' => $date,
    ]);    
        

    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        [질문 템플릿]
        1. 강의 내용과 관련된 질문인가요? (예)
        2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
        3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        안녕하세요!

        모듈 강의를 듣다가 import test_module 을 진행하였는데 오류가 나서 문의 드립니다.

        오류 : Import "test_module" could not be resolved
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        강의에는 1개 이상 스킵, 컴플리트, 모두 컴플리트

        이런 식의 조건만 소개되어 있는데,
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        강의 내용 중 나온 애노테이션을 만들게 되면 Qualifier("mainDiscountPolicy") 
        부분을 제외한 다른 코드는 스프링의 Qualifier 코드를 복붙하여 어노테이션들(@Target, @Retention 등)을 참조해서 사용하게 되는데요
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        강의 로그인과 회원가입 실제로 하기 뒷부분에 트렌드조회, 팔로우, 추천게시물을 불러오기 위해 
        주소를 변경해주고 403이 나오는 곳은 credentials 을 추가했습니다
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        저는 real CAN 제어기가 없습니다. dbc 화일을 강사님이 가르쳐 주신대로 만들고, 
        Online mode, simulated bus로 세팅하고 , start를 눌러서 TRACE window에서 데이터를 보고 싶은데 아무것도 안 나옵니다. 
        EOT,
        'created_at' => $date,
    ]);
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        MyBatis 버전도 낮춰보고 코드도 비교해보고 했는데 자꾸 Invalid bound statement오류가 발생합니다. 
        혹시 어떤 게 문제일까요.. 제가 잘 못 찾는 건가요..?
        EOT,
        'created_at' => $date,
    ]);


    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        Docker Engine v24.0.7 을 사용중입니다.

        아래의 다른 분들처럼 DockerEngine 에서 설정으로 넣어도
        EOT,
        'created_at' => $date,
    ]);

    
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        이 코드에서 s.charAt(i) 인덱스에 직접 문자값을 저장할 수 없는 이유는 무엇인가요?? 
        리터럴이라서 그런건가요?
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        안녕하세요! 수업 잘 듣고 있습니다.

        혹시 두 가지 단어가 모두 포함된 페이지만 조회하려면 어떻게해야할까요? 두가지 단어로 검색하면 둘 중 한가지 단어만 있어도 검색되게 됩니다.
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        이 코드에서 s.charAt(i) 인덱스에 직접 문자값을 저장할 수 없는 이유는 무엇인가요?? 
        리터럴이라서 그런건가요?
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        혹시 이 강의들을 실습하면 비용이 많이 청구될까요..!?
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        위처럼 properties 를 작성했는데 ToDo 테이블이 생성되지 않습니다...
        오류는 전혀 뜨지 않고 있습니다...무엇이 문제인지 잘 모르겠습니다
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        build시에 발생하는 에러입니다. 
        dynamic route에서 에러가 발생하는것 같은데 깃헙이슈나 레디스에 올라와있는 방법으로도 잘 해결이 안되네요... 
        output export 를 없애고 빌드르 하면 아래와 같은 에러가 발생합니다
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        그러나 MVVM폴더 안에 View폴더 안에 UserModelBasicView파일이 존재하면 
        Preview가 빨간 박스처럼 문제가 나타납니다.
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        영상 강의가 너무 떨어져서 인프런 문의에 문의 드렸더니

        인프런측에서는 강사님이 540P로 제공하셔서 개선이 어렵다고 합니다.
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        update stock set quantity = quantity - :quantity where product_id = :id 이런식으로는 안되는건가요?

        JPA로는 불가능한가요?
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        클라이언트 컴포넌트로 지정했는데도 서버사이드 렌더링으로 동작하는 이유가 뭔가요?
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        eclipse.exe에 의해 writtableArea(숫자).dll 파일이 생성되는데 이유가 뭔가요?

        그리고 생성되지않게 하는 방법도있을까요?
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        안녕하세요. 책 내용 질문드립니다! 책 208쪽인데요, 
        아핀 공간이 z가 1로 제한된다는 것은 이해가 가는데 왜 왼쪽 그림처럼 오른쪽 사선방향으로 올라가는 지 모르겠어요.
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        한국어 분석 말고, 영어 분석은 어떻게 다른지 업데이트 해주 실수 있을까요?
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        [질문 템플릿]
        1. 강의 내용과 관련된 질문인가요? (예)
        2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
        3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        안녕하세요!

        모듈 강의를 듣다가 import test_module 을 진행하였는데 오류가 나서 문의 드립니다.

        오류 : Import "test_module" could not be resolved
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        강의에는 1개 이상 스킵, 컴플리트, 모두 컴플리트

        이런 식의 조건만 소개되어 있는데,
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        강의 내용 중 나온 애노테이션을 만들게 되면 Qualifier("mainDiscountPolicy") 
        부분을 제외한 다른 코드는 스프링의 Qualifier 코드를 복붙하여 어노테이션들(@Target, @Retention 등)을 참조해서 사용하게 되는데요
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        강의 로그인과 회원가입 실제로 하기 뒷부분에 트렌드조회, 팔로우, 추천게시물을 불러오기 위해 
        주소를 변경해주고 403이 나오는 곳은 credentials 을 추가했습니다
        EOT,
        'created_at' => $date,
    ]);

                
    $date = $faker->dateTimeBetween('-2 years');
    $enrollmentID = $faker->numberBetween(1, 50000);

    ClassNote::create([
        'EnrollmentID' => $enrollmentID,
        'ClassNoteComment' => <<<EOT
        저는 real CAN 제어기가 없습니다. dbc 화일을 강사님이 가르쳐 주신대로 만들고, 
        Online mode, simulated bus로 세팅하고 , start를 눌러서 TRACE window에서 데이터를 보고 싶은데 아무것도 안 나옵니다. 
        EOT,
        'created_at' => $date,
    ]);

    $date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    안녕하세요. 책 내용 질문드립니다! 책 208쪽인데요, 
    아핀 공간이 z가 1로 제한된다는 것은 이해가 가는데 왜 왼쪽 그림처럼 오른쪽 사선방향으로 올라가는 지 모르겠어요.
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    한국어 분석 말고, 영어 분석은 어떻게 다른지 업데이트 해주 실수 있을까요?
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    [질문 템플릿]
    1. 강의 내용과 관련된 질문인가요? (예)
    2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
    3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    안녕하세요!

    모듈 강의를 듣다가 import test_module 을 진행하였는데 오류가 나서 문의 드립니다.

    오류 : Import "test_module" could not be resolved
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    강의에는 1개 이상 스킵, 컴플리트, 모두 컴플리트

    이런 식의 조건만 소개되어 있는데,
    EOT,
    'created_at' => $date,
]);

$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    [질문 템플릿]
    1. 강의 내용과 관련된 질문인가요? (예)
    2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
    3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)
    EOT,
    'created_at' => $date,
]);    
    

$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    [질문 템플릿]
    1. 강의 내용과 관련된 질문인가요? (예)
    2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
    3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    안녕하세요!

    모듈 강의를 듣다가 import test_module 을 진행하였는데 오류가 나서 문의 드립니다.

    오류 : Import "test_module" could not be resolved
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    강의에는 1개 이상 스킵, 컴플리트, 모두 컴플리트

    이런 식의 조건만 소개되어 있는데,
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    강의 내용 중 나온 애노테이션을 만들게 되면 Qualifier("mainDiscountPolicy") 
    부분을 제외한 다른 코드는 스프링의 Qualifier 코드를 복붙하여 어노테이션들(@Target, @Retention 등)을 참조해서 사용하게 되는데요
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    강의 로그인과 회원가입 실제로 하기 뒷부분에 트렌드조회, 팔로우, 추천게시물을 불러오기 위해 
    주소를 변경해주고 403이 나오는 곳은 credentials 을 추가했습니다
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    저는 real CAN 제어기가 없습니다. dbc 화일을 강사님이 가르쳐 주신대로 만들고, 
    Online mode, simulated bus로 세팅하고 , start를 눌러서 TRACE window에서 데이터를 보고 싶은데 아무것도 안 나옵니다. 
    EOT,
    'created_at' => $date,
]);
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    MyBatis 버전도 낮춰보고 코드도 비교해보고 했는데 자꾸 Invalid bound statement오류가 발생합니다. 
    혹시 어떤 게 문제일까요.. 제가 잘 못 찾는 건가요..?
    EOT,
    'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    Docker Engine v24.0.7 을 사용중입니다.

    아래의 다른 분들처럼 DockerEngine 에서 설정으로 넣어도
    EOT,
    'created_at' => $date,
]);


$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    이 코드에서 s.charAt(i) 인덱스에 직접 문자값을 저장할 수 없는 이유는 무엇인가요?? 
    리터럴이라서 그런건가요?
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    안녕하세요! 수업 잘 듣고 있습니다.

    혹시 두 가지 단어가 모두 포함된 페이지만 조회하려면 어떻게해야할까요? 두가지 단어로 검색하면 둘 중 한가지 단어만 있어도 검색되게 됩니다.
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    이 코드에서 s.charAt(i) 인덱스에 직접 문자값을 저장할 수 없는 이유는 무엇인가요?? 
    리터럴이라서 그런건가요?
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    혹시 이 강의들을 실습하면 비용이 많이 청구될까요..!?
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    위처럼 properties 를 작성했는데 ToDo 테이블이 생성되지 않습니다...
    오류는 전혀 뜨지 않고 있습니다...무엇이 문제인지 잘 모르겠습니다
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    build시에 발생하는 에러입니다. 
    dynamic route에서 에러가 발생하는것 같은데 깃헙이슈나 레디스에 올라와있는 방법으로도 잘 해결이 안되네요... 
    output export 를 없애고 빌드르 하면 아래와 같은 에러가 발생합니다
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    그러나 MVVM폴더 안에 View폴더 안에 UserModelBasicView파일이 존재하면 
    Preview가 빨간 박스처럼 문제가 나타납니다.
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    영상 강의가 너무 떨어져서 인프런 문의에 문의 드렸더니

    인프런측에서는 강사님이 540P로 제공하셔서 개선이 어렵다고 합니다.
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    update stock set quantity = quantity - :quantity where product_id = :id 이런식으로는 안되는건가요?

    JPA로는 불가능한가요?
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    클라이언트 컴포넌트로 지정했는데도 서버사이드 렌더링으로 동작하는 이유가 뭔가요?
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    eclipse.exe에 의해 writtableArea(숫자).dll 파일이 생성되는데 이유가 뭔가요?

    그리고 생성되지않게 하는 방법도있을까요?
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    안녕하세요. 책 내용 질문드립니다! 책 208쪽인데요, 
    아핀 공간이 z가 1로 제한된다는 것은 이해가 가는데 왜 왼쪽 그림처럼 오른쪽 사선방향으로 올라가는 지 모르겠어요.
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    한국어 분석 말고, 영어 분석은 어떻게 다른지 업데이트 해주 실수 있을까요?
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    [질문 템플릿]
    1. 강의 내용과 관련된 질문인가요? (예)
    2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
    3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    안녕하세요!

    모듈 강의를 듣다가 import test_module 을 진행하였는데 오류가 나서 문의 드립니다.

    오류 : Import "test_module" could not be resolved
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    강의에는 1개 이상 스킵, 컴플리트, 모두 컴플리트

    이런 식의 조건만 소개되어 있는데,
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    강의 내용 중 나온 애노테이션을 만들게 되면 Qualifier("mainDiscountPolicy") 
    부분을 제외한 다른 코드는 스프링의 Qualifier 코드를 복붙하여 어노테이션들(@Target, @Retention 등)을 참조해서 사용하게 되는데요
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    강의 로그인과 회원가입 실제로 하기 뒷부분에 트렌드조회, 팔로우, 추천게시물을 불러오기 위해 
    주소를 변경해주고 403이 나오는 곳은 credentials 을 추가했습니다
    EOT,
    'created_at' => $date,
]);

            
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
    'EnrollmentID' => $enrollmentID,
    'ClassNoteComment' => <<<EOT
    저는 real CAN 제어기가 없습니다. dbc 화일을 강사님이 가르쳐 주신대로 만들고, 
    Online mode, simulated bus로 세팅하고 , start를 눌러서 TRACE window에서 데이터를 보고 싶은데 아무것도 안 나옵니다. 
    EOT,
    'created_at' => $date,
]);

$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
'EnrollmentID' => $enrollmentID,
'ClassNoteComment' => <<<EOT
안녕하세요. 책 내용 질문드립니다! 책 208쪽인데요, 
아핀 공간이 z가 1로 제한된다는 것은 이해가 가는데 왜 왼쪽 그림처럼 오른쪽 사선방향으로 올라가는 지 모르겠어요.
EOT,
'created_at' => $date,
]);

        
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
'EnrollmentID' => $enrollmentID,
'ClassNoteComment' => <<<EOT
한국어 분석 말고, 영어 분석은 어떻게 다른지 업데이트 해주 실수 있을까요?
EOT,
'created_at' => $date,
]);

        
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
'EnrollmentID' => $enrollmentID,
'ClassNoteComment' => <<<EOT
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)
EOT,
'created_at' => $date,
]);

        
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
'EnrollmentID' => $enrollmentID,
'ClassNoteComment' => <<<EOT
안녕하세요!

모듈 강의를 듣다가 import test_module 을 진행하였는데 오류가 나서 문의 드립니다.

오류 : Import "test_module" could not be resolved
EOT,
'created_at' => $date,
]);

        
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
'EnrollmentID' => $enrollmentID,
'ClassNoteComment' => <<<EOT
강의에는 1개 이상 스킵, 컴플리트, 모두 컴플리트

이런 식의 조건만 소개되어 있는데,
EOT,
'created_at' => $date,
]);

$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
'EnrollmentID' => $enrollmentID,
'ClassNoteComment' => <<<EOT
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)
EOT,
'created_at' => $date,
]);    


$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
'EnrollmentID' => $enrollmentID,
'ClassNoteComment' => <<<EOT
[질문 템플릿]
1. 강의 내용과 관련된 질문인가요? (예)
2. 인프런의 질문 게시판과 자주 하는 질문에 없는 내용인가요? (예)
3. 질문 잘하기 메뉴얼을 읽어보셨나요? (예)
EOT,
'created_at' => $date,
]);

        
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
'EnrollmentID' => $enrollmentID,
'ClassNoteComment' => <<<EOT
안녕하세요!

모듈 강의를 듣다가 import test_module 을 진행하였는데 오류가 나서 문의 드립니다.

오류 : Import "test_module" could not be resolved
EOT,
'created_at' => $date,
]);

        
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
'EnrollmentID' => $enrollmentID,
'ClassNoteComment' => <<<EOT
강의에는 1개 이상 스킵, 컴플리트, 모두 컴플리트

이런 식의 조건만 소개되어 있는데,
EOT,
'created_at' => $date,
]);

        
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
'EnrollmentID' => $enrollmentID,
'ClassNoteComment' => <<<EOT
강의 내용 중 나온 애노테이션을 만들게 되면 Qualifier("mainDiscountPolicy") 
부분을 제외한 다른 코드는 스프링의 Qualifier 코드를 복붙하여 어노테이션들(@Target, @Retention 등)을 참조해서 사용하게 되는데요
EOT,
'created_at' => $date,
]);

        
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
'EnrollmentID' => $enrollmentID,
'ClassNoteComment' => <<<EOT
강의 로그인과 회원가입 실제로 하기 뒷부분에 트렌드조회, 팔로우, 추천게시물을 불러오기 위해 
주소를 변경해주고 403이 나오는 곳은 credentials 을 추가했습니다
EOT,
'created_at' => $date,
]);

        
$date = $faker->dateTimeBetween('-2 years');
$enrollmentID = $faker->numberBetween(1, 50000);

ClassNote::create([
'EnrollmentID' => $enrollmentID,
'ClassNoteComment' => <<<EOT
저는 real CAN 제어기가 없습니다. dbc 화일을 강사님이 가르쳐 주신대로 만들고, 
Online mode, simulated bus로 세팅하고 , start를 눌러서 TRACE window에서 데이터를 보고 싶은데 아무것도 안 나옵니다. 
EOT,
'created_at' => $date,
]);


















        } 
        
    }
}

