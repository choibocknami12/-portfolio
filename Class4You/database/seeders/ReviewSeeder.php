<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Review;

class ReviewSeeder extends Seeder
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
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
와....대박이에요. 파트 10까지 나와도 되고, 파트당 20만원씩 책정하셔도 다 구매할테니 제발 내용 덜어내거나 난이도 조절하지 마시고 자잘한 부분도 포기하지 말아주세요 ㅜㅠ 
얼마전에 수강생들에게 단체메일 보내셨던데 내용 굳이 안 덜어내셔도 깊이가 애매해지거나 하지않으니 걱정마시구 (보는 사람이 건너뛰면 되는 문제기도 하지만 정 신경쓰이시면 파트7 이후 외전으로 다루셔도 괜찮습니다..!) 
어디에도 이런 강의 없습니다. 저는 이만 팬티 갈아입으러 갑니다..
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
정말 좋네요, Rookiss 님 때문에 사교육을 굳이 받지 않더라도 두꺼운 전공 서적을 사서 혼자 끙끙 앓으면서 고통 받지 않아도 취업 준비를 할 수 있을 것 같습니다. 
두꺼운 책을 혼자 연구 하는 것도 의미가 있겠지만 그것을 연구한 분이 알기 쉽게 설명을 해주고 중요한 부분만 예제들을 써주시면서 설명을 자세하게 하니 두꺼운 책을 사서 보지도 않을거 선생님의 강의로 대체를 할 수 있는것 같습니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
학부 과정에서 만든 게임 경험으로 너무 부족한 제 실력을 깨닫고 더 배우기 위해 찾아들었던 이 강의가 정말 계속 더 성장할 수 있다는 것을 깨닫게 해주었습니다.
이번에 'Rookiss'님과 이력에 있는 회사에 취직했고, 곧 입사 예정입니다.
감사 인사드리고 싶어 이렇게 수강평 남깁니다.
정말로 감사드립니다!
나중에 저도 열심히 잘해서 제 지식을 공유할 수 있는 사람이 돼보겠습니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
수강들으면서 제 디자인의 꿈을 키우고있어여, 개발과정에만 집중하다 이런 강의도 배우니, 커리어가 상승하는 느낌과 동시에 디자인적인 재미까지 더해가는 것같아 즐겁네요!
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
잘 정리된 내용을 잘 정리해서 실습과 함께 알려주시니 너무 좋습니다!
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
따라하기 좋아요, 다만 기능에 관한 설명이 조금 들어갔으면 좋겠습니다. 
예를들면 VScode 확장 부분도 이야기해주시고 또 단축키나 이런부분도 들어갔으면 너무좋았을 것 같습니다
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
와 진짜 대박이에요...... 다른 강의 듣다가 포기했었는데 재미있게 들었습니다.
n회독해서 더욱 완벽해지겠습니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
                22년 1월에 시작하여, 중간에 우여곡절도 많이 겪고 포기할까 생각도 많이 했지만 어느덧 22년 마지막 날인 12월 31일에 완강했네요. 
                깃허브나 AWS 인스턴스명 같은걸 Do_It_Django_2022 이런 식으로 해뒀는데 2022년에 완강하게 되어 너무 기쁩니다..ㅎㅎ
                본 강의를 통해 파이썬을 활용하여 프론트엔드와 백엔드 부분을 상당 부분 구현 가능하다는 점을 배울 수 있었고, 
                docker, aws, letsencrypt, https 인증 등 생소한 요소들이 많았는데 이러한 부분을 접하는 값진 경험이 되었습니다. 
                완강 후 head_image 파일의 업로드 용량을 어떻게 수정할지, 대댓글은 어떻게 구현할지, 포스트에 댓글이 달렸을 때 어떻게 포스트 작성자에게 알림을 보낼지 등 세세한 부분을 찾아보고 
                수정해보면서 서버에 반영한다면 정말 본인만의 블로그가 완성될 것 같습니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
유튜브 구독자로서 Git 강의를 완강하고 html/css 강의도 이어서 구매하였습니다. 
얄코님 강의의 강점은 깔끔한 커리큘럼과 전달력이 좋으셔서 내용이 귀에 쏙쏙 박힌다는 점입니다. 
강의를 듣는 것이지만 마치 이야기를 듣는 것처럼 저도 모르게 빠져들어 듣게 됩니다. 
이렇게 강의를 따라가다 보면 어느 순간 내용을 이해하고 습득한 자신을 볼 수 있게 됩니다. 
돈이 전혀 아깝지 않은 강의라고 생각됩니다. 고민 중이시라면 구매하는 것을 강력 추천드립니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
자세히 가르쳐주시고 하나하나 훑어주셔서 좋았어요. 모든 공부가 그렇겠지만 자기만의 방법을 찾고 공부하니까 훨씬 집중이 잘되더라구요.
저 같은 경우에는 소스코드를 먼저 스스로 해석해보고 강의를 들었는데 이 경우에 내가 해석한게 맞는지 또는 모르는 문법은 어떤 것을 의미하는지 생각하고 강의에 임하다보니까 더 머리 속에 남았어요!
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
비전공자, 생초보자로 공부를 시작했는데, 남들은 재미있고 쉽다는 HTML&CSS 파트인데도 저는 역시 생초보자여서 그런지 어려웠습니다. 
11시간 좀 넘는 강의인데 거의 7주 넘어서 완강을 했네요. 사실 중간에 어려워서 다른 강의로 갈아탔다가, 다시 이 강의로 넘어 왔어요. 
첫 강의여서 혹시 레벨이 저한테 안맞나 싶었는데, 그냥 제가 잘 이해를 못하는 머리를 가진 것이라고 생각했고 다른 강의에 비해 압축적이지만 많은 것을 담고 있고 설명을 잘하신다고 생각해서 완강을 하게 되었네요.
10분~20분 정도로 나뉘어진 강의라고 생각해도, 저처럼 생초보자는 머리로만 이해하고 넘어가면 나중에 파이널 프로젝트때 멘붕옵니다. 
아직 파이널 프로젝트 제대로 클론이나 다 이해는 못하고 있지만, 더 시간을 투자해서 복습해야 겠다는 생각이 드네요.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
강의력 좋으신건 유튜브를 통해 알고 있었는데요, 
영상 초반에 '자, 자'가 많다고 하셨는데 말씀 하실때마다 '자' 하시니까 은근 신경쓰이네요 ㅋㅋㅋㅋ. 강의력은 정말 좋으셔요..
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
인터넷 강의중 처음 유료결제해서 들어봤는데 그이상의 가치가 있는 강의였습니다.
좋은 강의 만들어주셔서 정말 감사하고, 단순 강의 외에도 준비하신 자료들을 보고 업무를 대하는 태도에 있어서도 많은 귀감이 되었습니다.
자바스크립트까지 완강하겠습니다~
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
    학교에서 강의로 HTML, CSS를 배웠을 때는 레이아웃의 L자도 모르던 제가 이 강의를 듣고, 
    일주일만에 엄청난 러닝커브를 경험했고, 웬만한 웹 페이지를 모두 만들 수 있게 되었습니다ㅠㅠㅠ 설명도 너무 잘해주시고, 
    자료도 너무 잘 되어 있어서 공부하면서 정말 즐거웠던 것 같습니다! 주변에 다른 분들께도 얄코님 강의를 많이 추천드리고 있어요!! 감사합니다 ㅠㅠ
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
아직 완강전이지만 적어 봅니다.
완전 초보 입장에서 상당히 훌륭한 강의라고 보여집니다..

단지 강의 속도가 굉장히 빠르기 때문에, 화면에 보이는걸 따라가려고 하다가는 이미 몇단계가 지나있어서 수십번을 되돌리기를 해야할수도 있습니다.

중간중간 일시정지해서 내용을 확인하시거나,
함께 제공해주시는 학습페이지를 미리미리 예습한뒤에 진행해야, 한번보고 "뭔지 알겠다" 싶을거 같습니다.

완강하고 다시 몇번 돌려보면 더 좋을것 같습니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);
            
            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
마지막에 있는 파이널 프로젝트 섹션 너무 좋아요
배운 내용들을 사용해서 웹사이트를 만들어 볼 수 있어서 좋았어요
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);
            
            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
강의 내용이 빠르게 진행되는 만큼 시간을 줄일 수도 있고 지루하지 않았습니다.
사람에 따라 배경 지식과 이해력이 다른 만큼 저는 초보자라 3독을 하니 유레카하는 시점이 왔습니다.
아, 그리고 메일로 질문 드리면 매우 빠르게 회신 주셔서 놀라기도 했습니다.
좋은 강의 올려주셔서 감사합니다 선생님
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);
            
            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
진짜 너무 명강의에요, 진짜 감동했습니다.
비전공자나 처음 접하는 사람도 정말 잘 이해되고 꼼꼼하게 알 수 있었어요.
꼭 리액트, 타입스크립트 강의도 나왔으면 좋겠어요! 강의가 새로 나온다면 무조건 듣겠습니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
선생님 덕분에 HTML, CSS의 기초를 잘 다질 수 있었습니다. 
국비지원 학원에서 HTML, CSS를 배울 때 아쉬웠던 부분을 잘 메꿀 수 있었습니다. 감사합니다. 앞으로도 좋은 강의 많이 만들어 주세요🔥
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
세심하고 꼼꼼하신 구성으로 많은 기능과 속성들에 대하여 이해하기 쉽게 알려주시기 위해 정말 애쓰셨습니다. 
한강 한강 모두 완전히 이해하고 익히면서 끝내지는 못하였지만 후에 내 자신의 Website를 꾸며가면서 다시금 하나 하나 익혀가면서 궁금한 사항들을 여쭙도록 하겠습니다. 
정성을 다해주신 강의에 최고 평점 드립니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
정말 학생을 위한 배려가 느껴지는 강의였습니다.
내용을 더 효과적으로 전달하려고 노력하신 모습이 느껴져서 잘 배운것 말고도 기분좋게 들을 수 있었습니다.
강의 수강하는 동안 여러 요소들의 사용법을 충분히 연습할 수 있었고 마지막 파이널 프로젝트에선 내가 이 정도 결과물을 이해할 수 있게됐구나 하는 성취감도 얻을 수 있었습니다. 더불어 vs code 플러그인 소개나 emmet 사용법 소개도 혼자 연습할때 도움이 되는걸 많이 느꼈습니다.
강의 시간은 11시간이지만 완강하는데는 그에 다섯배 이상은 시간이 걸린 것 같고 이점이 오히려 이 수업이 도움이 많이 됐다는 방증이라고 봅니다.
기회가 있을 때 주위에 꼭 추천하겠습니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
감사합니다. 큰 도움이 되었습니다.
웹개발에 있어 HTML CSS를 겉할기 수준으로 그때 그때 찿아보는 수준으로 알고 있었는데 이 강의를 듣고 HTML CSS의 전체적인 흐름을 이해하고, 기본기를 다지게 되었으며, 최신 트렌드를 이해하게 되었습니다.
강의에 정성이 보이네요. 감사합니다!!
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
강좌 진행이 빠르고 좋습니다.
새로 접하거나 이해 안되는 부분은 영상 멈추고 소화하고 합니다.도움이 됩니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
대학생 할인이라는 좋은 프로모션에 이렇게 좋은 강의까지 들을 수 있어서 정말 너무 좋아요. 
강의를 정말 정성껏 만들고 수강자분들이 쉽게 공부할 수 있게끔 강의+부교재+진행 면에 있어서도 구성을 탄탄하게 준비하신게 느껴집니다. 좋은 강의 감사합니다 :)
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
좋은 강의입니다 ! HTML, CSS에 부족함을 느끼고 이 강의로 다시 업그레이드 시켰네요. 
까먹은 부분은 블로그로 돌아가서 원하는 부분만 다시 익힐 수 있다는 장점도 있고! 알찬 강의였습니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
강사님 설명을 너무 잘해주세요...
비전공자인데도 이해가 쏙쏙됩니다
JS강의도 있으면 좋겠는데 ㅠㅠㅠㅠ 강의가 없나봐요
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
후...퀄리티가 너무 좋아서 눈물이 날 정도입니다.

수강평 원래 잘 안남기는 사람인데 인프런에서는 이상하게 남기고 싶네요?ㅋㅋㅋㅋㅋㅋ

진짜 강추드립니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
웹 개발 하는데 있어서 사용하고 있었던 태그나 기능 등의 지식에 대해 좀 더 깊게 알 수 있었습니다.
감사합니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
아무것도 모를 때 기초를 배우기에 좋습니다.
강의 사이트를 통해 수강자가 다룰 컨텐츠를 직접 '체험'함으로써 달라지는 점을 쉽게 파악할 수 있다는 점에서 입문하기에 좋다고 말씀드리고싶습니다.
그리고 강의에서 나오지 않은 부분인데, import와 link의 용도가 많이 비슷한 것 같아서 따로 찾아봤더니,
.css 파일을 불러오는 속도 면에서 @import의 사용은 지양하고, link 태그를 쓰는 편이 더 좋은 것 같습니다.

추가로 자바스크립트도 다뤄주셨으면 좋겠다는 생각이 드네요.
강의 잘 듣고있습니다. 감사합니다.

출처:
http://egloos.zum.com/seye2/v/2319809
https://stackoverflow.com/questions/10036977/best-way-to-include-css-why-use-import
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
컨트롤 탭 눌러서 복붙하고 진행하는 속도랑 거기에 맞춰서 말하시는 속도가 너무너무너무 빨라요. 0.75배속으로 겨우 따라가고 있습니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
매우 만족스러운 경험이었습니다. 강의 커리큘럼은 체계적으로 구성되어 있었고, 강사님들은 전문적인 지식과 경험을 가지고 계셨습니다.

강의의 구성은 이론 강의와 실습 강의로 나뉘어져 있었습니다. 이론 강의에서는 Html, CSS, JavaScript의 기본 개념과 문법에 대해 자세히 설명해 주셨고, 실습 강의에서는 실제로 코드를 작성하면서 응용력을 향상시킬 수 있었습니다. 또한 코드 문제를 풀면서 스스로 생각하는 힘을 기를 수 있게 되었습니다.

웹 개발에 대한 기초 배울 수 있는 좋은 코스라고 생각하며 이 부트캠프를 추천드립니다. 감사합니다!
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
생에처음듣는 프론트엔드 강의로 js에 j자도 모르던 사람이 기초를 확실하게 알수있는 강의입니다.
체계적으로 정리된 커리큘럼이 존재하여서 중간에 강의를 듣다가 갑자기 난이도가 확상승하는 구간이 존재하지않습니다.
단 모든것을 a to z까지 알려주는 방식은 아닌 기타 필요한것은 본인이 어느정도 찾아봐야하는대 이는
오히려 내가 무엇을 모르고 강의 내용에서 더나아가 깊게 학습할수있는 경험을 주는 과정이였습니다.
이 강의를 들으면서 js가 왜 쓰이는지 js가 지닌힘등을 확실히 알게 되어갑니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
저는 오프라인으로 수업에 참여했는데, 아무것도 모르는 상태에서 시작해서 직접 뮤직 플레이어를 만들 수 있게 되었습니다. 
수업에 참여하는 과정에 포함된 작은 과제들을 해결하면서 자신감을 얻고, 재미있게 학습을 이어나갈 수 있었습니다. 
성격상 배움을 시작하고 이어나가는 것을 잘 못하는데, 조금씩 재미를 붙이며 시간가는 줄 모르고 커리큘럼을 마무리 한 것 같습니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
좋은 멘토 분들과 좋은 환경에서 좋은 강의를 들으면서 성장해 나갈 수 있어서 좋았습니다. 
혼자서 공부하기에는 막막했는데, 체계적인 스케줄링과 현장 밀착관리로 도움을 많이 받았고, 
컨텐츠도 초보자들이 입문으로 차근차근 시작해 나가기에 무리가 없었습니다. 
강의를 하나하나 들으면서 성장해 나갈 수 있었고 주차마다 큰 과제가 있어 해결해 나가는 재미도 있었습니다. 추천합니당~ ^-^*
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);
            
            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
가격대비 강의 시간도 굉장히 길고 다루는 예제도 많아서 퍼블리셔 뿐만 아니라 프론트엔드 공부하시는 분들 이거 완강하시면 HTML, CSS는 기본적으로 이해하기 좋으실 것 같아요 추천합니다!
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
                2년전 국비로 배우고 다른일하다가 다시 웹퍼블 하고 싶어서 포폴 갈아엎을려고 새로 다시 배우고 있는데 국비에서 배웠던것보다 더 많고 새로운것들을 배우고 갑니다.
                포폴완성될때까지 다른 강의도 들을 예정입니다~ 완전 잘가르쳐주세용
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
시즌 1 에서 정말 하나하나 자세하게 알려주셔서 많이 배웠습니다.
시즌 2 수강 신청하고 보고 있는데 역시! 하나하나 자세하게 알려주셔서 이해하기 쉽습니다.
믿고 보는 강의입니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
국비수료후 혼자 공부할때 난감할때가 많았는데 정말 도움이 많이 된 강의입니다!
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
감사합니다!!
구글 크롬 다운로드 사이트에서 모바일 메뉴를 만드려고 하니 잘 안되네요 ^^;;
좀더 공부해서 완성하도록 하겠습니다!!
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            
            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
강사님 정말 대단하십니다. 
변화가 빠른 웹프론트엔드 분야에 큰 획을 그을 분이십니다. 
실무에 정말 큰 도움이 되는 강의입니다. 너무 감사합니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
항상 감사히 잘 배우고 있습니다~ 믿고 보는 강의입니다^^
여기에 남기는게 맞는것인지 모르겠는데~ <caption> 을 추가 해도 tr th (background -color 있음) 영역의 border-radius 가 유지되어 있습니다. 
프로그램 자체 내에서 보완한 것인지 모르겠지만요~ 암튼 코드가 줄어서 좋긴 합니다
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
몇달 전에 면접과 취업을 부르는 퍼블리셔 개인 포트폴리오 홈페이지 강의 수강했습니다. 
코딩웍스 새소식 보고 이번에 시즌2 오픈한신거 강의 신청하면서 시즌1 먼저해야 하나 고민했는데 신청했어요.
시즌2 강의 1/4쯤 들었어요. 초반에 의욕적으로 열심히 학습한 것 같은데 아직도 1/4이라니ㅠㅠ 퍼블리싱 초급에게 학습량도 많아서 좀 어려운 듯 하지만 도전 정신을 가지고 알찬 강의 잘 듣고 있습니다. 
선생님.. 혹시 시즌1을 먼저 듣고 이 강의를 듣는게 나을까요? 아니면 병행하는게 좋을까요? :)
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
온라인 강의로 퍼블리싱을 배운다는 게 많이 걱정되어서 수강을 망설였는데요. 
배우다 보니 의외로 재밌어서 집중도 잘되고 설명도 천천히 잘해주셔서 너무 좋았어요:) 직접 만드신 수업 교재도 진짜 고퀄이어서 깜짝 놀랐습니다ㅎㅎㅎ 
열심히 듣고 가르쳐주시는 예제 따라 하다 보면 제께 하나둘씩 쌓이는 느낌이라 너무 뿌듯하고 잘 응용해서 취업 성공할 수 있을 것 같아요♥ 좋은 강의 감사드리고 더 다양한 강의 많이많이 만들어 주세요~ 
취업하고도 계속 듣고 싶어요!
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
업무하다가 다른 사이트 코드에서 gsap을 발견하고, 공부하고 싶어서 수강하게 됐어요! 
영어 사이트 보면서 막막했는데 이렇게 기초부터 알려주는 강의가 있었다니! 
애니메이션의 미래는 gsap인가 싶을 정도로 대단하고 다양하고 재밌는 기능들이 많네요! 다음 파트도 넘넘 기대됩니다~
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
역시 믿고 듣는 범쌤의 강의👍
인터랙티브 웹에 관심 있는 분들이라면 필수인 최고의 명강의입니다!!
다음 강의도 기대하고 있습니다!!
범쌤 화이팅!!🐯
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
와 정말 제가 찾던 강의가 여기에 있네요...
시중에 바닐라 자바스크립트로 이루어진 강의만 있고 gsap 강의는 gsap 내에서 공개하는 튜토리얼 말고는 아무리 찾아도 없었는데 정말 빛과 같은 강의입니다ㅜ
실무에서 아웃풋을 낼 수 있는 애니메이션 라이브러리를 찾고 있었는데 너무 좋네요ㅜ
강의 내주셔서 너무 감사드리고 감사드린김에 다음 강의도 꼭 출시 부탁드립니다.
강사님 복받으실거에요ㅎㅎ
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
친절한 강의와 꼼꼼한 강의자료 감사합니다.

혹시 scroll시 작동되는 gsap도 추가해주시면 좋겠습니다ㅜㅜ
제가 커리큘럼을 자세히 살펴보지 않고 강의 수강을 했지만
정작 궁금했던 부분은 scrollTrigger 부분이라서... 조금 아쉬웠습니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
완강했습니다! 😆 곧 인터랙션이 많은 프로젝트를 할 예정인데 그 프로젝트에 gsap을 적용해보려고 하는 중에 이 강의를 찾게 되어 수강하게 되었는데요. 
실습도 중간중간 할 수 있고, 직접 코딩 해보고 강의를 볼 수 있게끔 해주셔서 정말 도움이 많이 된것 같습니다! 
인터랙션 웹 기능 중에서 아무래도 scroll 관련 인터랙션이 많은데, scrollTrigger나, scroll 관련 플러그인에 대한 강의도 나왔으면 정말 좋을거 같아요!

강의 정말 잘 들었고, 새해 복 많이 받으세요 :)
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);
            
            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
좋은 강의입니다 ! HTML, CSS에 부족함을 느끼고 이 강의로 다시 업그레이드 시켰네요. 
까먹은 부분은 블로그로 돌아가서 원하는 부분만 다시 익힐 수 있다는 장점도 있고! 알찬 강의였습니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
강사님 설명을 너무 잘해주세요...
비전공자인데도 이해가 쏙쏙됩니다
JS강의도 있으면 좋겠는데 ㅠㅠㅠㅠ 강의가 없나봐요
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
후...퀄리티가 너무 좋아서 눈물이 날 정도입니다.

수강평 원래 잘 안남기는 사람인데 인프런에서는 이상하게 남기고 싶네요?ㅋㅋㅋㅋㅋㅋ

진짜 강추드립니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
웹 개발 하는데 있어서 사용하고 있었던 태그나 기능 등의 지식에 대해 좀 더 깊게 알 수 있었습니다.
감사합니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
아무것도 모를 때 기초를 배우기에 좋습니다.
강의 사이트를 통해 수강자가 다룰 컨텐츠를 직접 '체험'함으로써 달라지는 점을 쉽게 파악할 수 있다는 점에서 입문하기에 좋다고 말씀드리고싶습니다.
그리고 강의에서 나오지 않은 부분인데, import와 link의 용도가 많이 비슷한 것 같아서 따로 찾아봤더니,
.css 파일을 불러오는 속도 면에서 @import의 사용은 지양하고, link 태그를 쓰는 편이 더 좋은 것 같습니다.

추가로 자바스크립트도 다뤄주셨으면 좋겠다는 생각이 드네요.
강의 잘 듣고있습니다. 감사합니다.

출처:
http://egloos.zum.com/seye2/v/2319809
https://stackoverflow.com/questions/10036977/best-way-to-include-css-why-use-import
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
컨트롤 탭 눌러서 복붙하고 진행하는 속도랑 거기에 맞춰서 말하시는 속도가 너무너무너무 빨라요. 0.75배속으로 겨우 따라가고 있습니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
매우 만족스러운 경험이었습니다. 강의 커리큘럼은 체계적으로 구성되어 있었고, 강사님들은 전문적인 지식과 경험을 가지고 계셨습니다.

강의의 구성은 이론 강의와 실습 강의로 나뉘어져 있었습니다. 이론 강의에서는 Html, CSS, JavaScript의 기본 개념과 문법에 대해 자세히 설명해 주셨고, 실습 강의에서는 실제로 코드를 작성하면서 응용력을 향상시킬 수 있었습니다. 또한 코드 문제를 풀면서 스스로 생각하는 힘을 기를 수 있게 되었습니다.

웹 개발에 대한 기초 배울 수 있는 좋은 코스라고 생각하며 이 부트캠프를 추천드립니다. 감사합니다!
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
생에처음듣는 프론트엔드 강의로 js에 j자도 모르던 사람이 기초를 확실하게 알수있는 강의입니다.
체계적으로 정리된 커리큘럼이 존재하여서 중간에 강의를 듣다가 갑자기 난이도가 확상승하는 구간이 존재하지않습니다.
단 모든것을 a to z까지 알려주는 방식은 아닌 기타 필요한것은 본인이 어느정도 찾아봐야하는대 이는
오히려 내가 무엇을 모르고 강의 내용에서 더나아가 깊게 학습할수있는 경험을 주는 과정이였습니다.
이 강의를 들으면서 js가 왜 쓰이는지 js가 지닌힘등을 확실히 알게 되어갑니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
저는 오프라인으로 수업에 참여했는데, 아무것도 모르는 상태에서 시작해서 직접 뮤직 플레이어를 만들 수 있게 되었습니다. 
수업에 참여하는 과정에 포함된 작은 과제들을 해결하면서 자신감을 얻고, 재미있게 학습을 이어나갈 수 있었습니다. 
성격상 배움을 시작하고 이어나가는 것을 잘 못하는데, 조금씩 재미를 붙이며 시간가는 줄 모르고 커리큘럼을 마무리 한 것 같습니다.
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
좋은 멘토 분들과 좋은 환경에서 좋은 강의를 들으면서 성장해 나갈 수 있어서 좋았습니다. 
혼자서 공부하기에는 막막했는데, 체계적인 스케줄링과 현장 밀착관리로 도움을 많이 받았고, 
컨텐츠도 초보자들이 입문으로 차근차근 시작해 나가기에 무리가 없었습니다. 
강의를 하나하나 들으면서 성장해 나갈 수 있었고 주차마다 큰 과제가 있어 해결해 나가는 재미도 있었습니다. 추천합니당~ ^-^*
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);
            
            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
가격대비 강의 시간도 굉장히 길고 다루는 예제도 많아서 퍼블리셔 뿐만 아니라 프론트엔드 공부하시는 분들 이거 완강하시면 HTML, CSS는 기본적으로 이해하기 좋으실 것 같아요 추천합니다!
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years');
            $rating = $faker->numberBetween(1, 5);
            $enrollment = $faker->numberBetween(1, 50000);

            Review::create([
                'EnrollmentID' => $enrollment,
                'ReviewComment' => <<<EOT
2년전 국비로 배우고 다른일하다가 다시 웹퍼블 하고 싶어서 포폴 갈아엎을려고 새로 다시 배우고 있는데 국비에서 배웠던것보다 더 많고 새로운것들을 배우고 갑니다.
포폴완성될때까지 다른 강의도 들을 예정입니다~ 완전 잘가르쳐주세용
EOT,
                'ReviewRating' => $rating,
                'created_at' => $date,
            ]);



        }
    }
}
