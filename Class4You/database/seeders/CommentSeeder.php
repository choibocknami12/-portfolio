<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use Faker\Factory as Faker;

class CommentSeeder extends Seeder
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
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 10000);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => 'si sm쪽에서 일하는 개발자입니다. 8년정도 경력이있는대 서비스 기업으로이직을 고민중입니다. sism하고 서비스의 업무는 많이 다르다고 들었는데 이를 커버하기 위해서 대용량 트레픽같은 이슈를 해결했다는걸 사이드 프로젝트에 담고싶은데 어떻게하는것이 좋을까요',
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => '개발 블로그를 티스토리에 쓰고 계신데, 다른 대안도 많이 있을텐데 계속 쓰시는 이유가 있으실까요?',
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
안녕하세요 취업을 준비하고 있는 취업준비생입니다 :D

이번주 개발바닥 영상의 댓글에서도 동일한 질문을 하였는데 향로님이 직접 답변주시는 귀한 자리가 생겨서 여기에 한 번 더 질문을 드립니다!

향로님과 호돌맨님께서 여러 영상을 통해 신입 개발자에게 강조하시는 역량이 어려운 추상화된 개념 (DDD, MSA, k8s 등등) 보다 언어 자체에 대한 심도있는 이해, SQL, 객체지향적 설계, 구현 능력 등이라고 저는 이해를 했는데요.

신입 개발자로서 취업을 준비할 때 어느 정도의 역량을 준비해야할 지는 참 막막한 것 같습니다. 신입이라는 핑계로 '이 정도까지만 해도 되겠지' 라는 타협이라기보단 '어느 것에 집중을 하는 것이 지금 내가 할 수 있는 올바른 방향일지' 에 대한 고민이랄까요.

향로님 및 호돌맨님께서 생각하시는 그 방향에 대해 다른 시니어 개발자 분들, 그리고 신입을 채용할 계획이 있는 회사의 개발자들 분들이 얼마나 공감할 지 향로님의 생각이 궁금합니다.

한 가지 더 궁금한 걸 질문드리자면 신입 개발자가 어필할 수 있는 역량(?)에 대해서도 향로님의 생각을 말씀해주시면 감사하겠습니다 :D
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
안녕하세요. 저는 리걸테크 기업에서 프론트엔드 개발자로 활동중인 3년차 개발자 이우진 이라고 합니다.

최근에 인공지능 대학원을 준비하고 있습니다. 결심하게 된 이유는 회사에서 자연어 처리 분야로 다중분류 예측 모델을 만들어 API로 개발해내면서 인공지능을 가지고 해결할 수 있는 문제가 정말 많다고 느꼈습니다. 코드로 해결할 수 없는 부분들을 인공지능으로 해결할 수 있으면서 동시에 프론트엔드도 할 줄 아는 개발자이면서 필요할 땐 인공지능을 직접 만들어 소프트웨어와 융합시킬 줄 아는 인재로 성장하고 동시에 이 기회에 석사 학위도 취득하고 싶어서 대학원을 준비하고 있습니다. 정말 고맙게도 회사에서는 대학원과 직장을 병행할 수 있는 근무 시간으로 조율해주겠다고 말씀도 주셔서 대학원도 안정적으로 다닐 수 있습니다.

그런데 나중에 다른 회사에 지원할 기회가 생겨 지원했을 때 인사팀과 실무팀이 저의 이력서를 보고 이 사람은 프론트엔드를 잘하는건지, 인공지능을 잘하는건지 의아해 할 것 같고 얕은 지식으로 둘 다 한다라는 느낌을 줘서 오히려 감점이 될까봐 두렵기도 합니다.

향로님께서 그런 이력서를 보셨을 때는 어떻게 생각하실 것 같나요? 제가 너무 걱정하는 걸까요?

그리고... 향로님... 인프런에서 인프콘 추가 티켓 이벤트 계획 없으신가요?... 너무 가고싶습니다.................... 믿겨지지 않습니다..... 인프콘 행사를 못간다니.... 추가 이벤트.......... 없나요?....
EOT,
            'created_at' => $date,
        ]);

        
                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
through: { attributes: ['UserId'] }

as Likes 아래에 넣어주세요.

그리고 질문 주제가 달라지면 새 질문에 달아주시면 좋겠습니다. 알림이 와도 찾기가 좀 힘듭니다.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
이미지 한 장만 선택하시면 event.target.files가 아니라 event.target.file이 되어야 합니다. 그리고 input 태그에서도 multiple을 제거하셔야 하고요.

하나를 올리는 데 반복문을 사용할 필요는 없겠죠?

image.append('profileImage', event.target.file)하면 됩니다.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
저도 동일한 문제로 계속해서 에러메시지를 보면서 검색도 해보고, 패키지를 다시 설치도 해보고 했습니다. 그러다 찾아서 해결했습니다. 제 사례를 공유해 드리겠습니다.

선생님의 코드에 보면 mongoose 부분이 이렇게 되어 있었습니다. (깃허브에도 그렇게 되어 있었고요.)

.connect(config.mongoURI, {

그런데 dev.js에는 MONGO_URI 라고 되어 있지요. 그래서 아래와 같이 바꾸니 제대로 연결되네요.

.connect(config.MONGO_URI, {

공부하시는 분께 혹시 도움이 될지 몰라 늦었지만, 답변 달아봅니다. 결국 오타가 많은 부분에 영향을 줄 수 있다는 것을 다시 한번 느끼게 됩니다. 이 문제로 제가 며칠을 검색하고 머리아파 했거든요. 

열공 하세요... 
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
4장 6교시의 질문 문제였는데.. 4장 7교시에서

yum의 패키지를 cd로 바꿔주고 따라해보니 설치가 되었습니다.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
스프레드 연산자를 이용하면 같은 스테이트들은 그냥 그대로 두는게 아니었나요..?
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
certbot이 작성해준게 아니라 직접 작성한겁니다. 애초부터 없었어요

재시작도 해봤습니다.

프론트 노드서버 말씀하신거면 3060으로 했습니다.

재설치해봐도 여전히 server 설정은 작성 안해주네요...            
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
1. saga나 reducer 작성하실 때 같은 것들끼리 선택하는 거는 어떻게 하는건가요?

예를 들어 밑에 signUp을 밑으로 한 번 더 복사하고

type에 SIGN_UP 이부분들만 선택하는거요

vscode에서는 alt + 방향키로 하면되는데 더 밑에거는 마우스 클릭해서 선택해야되고

ctrl+f로 찾아서 alt +엔터 누르면 모든 게 선택되어버려서 어떤 기능인지 궁금합니다!           
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
1. sequelize sync + nodemon 항목을 보던 중, npx sequelize db:create 이후에 node app을 하니 에러가 떴습니다. 각 model파일마다 아래 코드를 넣어줬는데도 불구하고 에러가 뜨는 이유가 무엇인가요? 해결하려면 어떻게 해야되나요?       
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
자세히보니 리듀서가 잘못되어있었네요ㅠ 덕분에 잘 해결되었습니다

1. nodejs 강의 구매하려고 하는데요, 유튜브보니 노드교과서 개정판이 있던데 이것과 현재 인프런에 업로드 되어있는 강의와는 다른건가요?

2. 다른거라면 개정된 걸 구매하고 싶은데 업로드 예정일은 언제인가요?   
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
자바 9 이후 부턴 기본 클래스에서 제거 되었다고 합니다. 그래서 수동등록
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
하 이설정 저설정 찾는다구 시간 다가네요 ㅠㅠ 혹시 관련 운영자님 보시면 PDF파일에 업뎃 주시면 감사 드리겠습니다..ㅠㅠ
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
일단 해당문제는 제가 확인을 해봐야할것같습니다

회전시키기 강의 뒷부분에 

Train valid 폴더로 나누는 과정부터 이어서 해주시고 다음으로 진행 먼저 해주세요ㅠㅠ

현재 제가 잠시 출장중이라 확인까지 시간이 조금 걸릴것같아요
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
rotate 파이썬 파일 run 시켰을 시 뜨는 오류입니다.

numpy와 cv2가 없다고 뜹니다,

아나콘다에서 install을 거친 후에도 똑같아서 문제입니다 ㅠㅠ
EOT,
            'created_at' => $date,
        ]);

        
                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
dataset 폴더 내부입니다! txt파일이 2개 더 많아요!

이렇게 답변 친절하게 해주시는것만으로 너무 감사합니다.!!!
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
조금 더 가다듬어야 했는데 

불편드려 죄송해요 ㅠㅠ

assertion error가 뜨는 이유는 해당 폴더안에 파일이 없거나 경로문제일 가능성이 큽니다
dataset폴더안에 jpg, txt 형식의 파일이 있는지 확인해주시고
jpg랑 txt가 1대1로 딱 맞아야합니다 (txt가 더 많은건 괜찮지만 jpg만 있는건 안되요!)
에러가 나시면 에러 내용이랑 dataset폴더 내부 한번만 찍어주세요
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
제가 보기에

python rotate.py 하셨을때

모듈이 없다는 에러가 아니라 그 아래 내용에서 문제가 생긴걸 보니

라이브러리는 잘 설치된 것 같습니다

python rotateAll.py 실행햇을때 나타나는 에러 한번 찍어주시겟어요?
EOT,
            'created_at' => $date,
        ]);
        
                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
경로 바꿔서 opencv랑 numpy 깔아봤는데도 안되네요.. 그리고 제가 

원래 이 Yolo_bbox_manipulation-master 파일에 있던 rotate.py 를 run하면 numpy가 없다는 오류가 뜨구요. 

강사님이 수업자료로 올려주신 rotateall.py를 run하면 cv2가 없다는 오류가 뜹니다.. 

여기서는 rotate.py가 아닌 rotateall.py파일을 실행시키는게 맞지요? ㅠ
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
강사님이 얘기해주신대로 아나콘다 개발환경 상에서 경로를 detect 폴더로 바꿔준 후에 pthon rotate.py 입력했는데 에러가 뜹니다. ㅠㅠ 그래서 파이썬 파일을 폴더상에서 열고 run시켜도 여전히 

Traceback (most recent call last):

    File "C:\Users\bak30\OneDrive\바탕 화면\detect\otateAll.py", line 3, in <module>

    import cv2

ModuleNotFoundError: No module named 'cv2'

오류가 뜹니다.. ㅠ
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
우선 이 부분만 보고는 어디의 문제인지 확인하기 어려워 순서를 다시한번 말씀드리겠습니다 ㅠㅠ

아나콘다 네비게이터 실행 - environment - base의 터미널 실행 - conda install opencv 입력 - cd (rotate.py폴더경로) - python rotate.py 해보시고 에러가 나시면 해당 창 스크린샷으로 부탁드립니다
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
오류 확인 결과 인증 오류인 것 같습니다~!!

앞에 <> 이 문자 2개를 지워 주신 후에 다시한번 시도해보시기 바랍니다~!!

문제 발생시 다시한번 질문 주시기 바랍니다~!!
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
안녕하십니까, 비비빅님.

위 스레드에서 언급드린대로 GPU 서버가 아닌 일반 서버를 일단 새롭게 생성하고 환경 생성후 1~2일 후에 GPU 기동 시도후에 가능한지 확인 부탁드려도 될까요?

감사합니다.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
안녕하세요 선생님~ 

`아래는 비슷한 현상을 겪으신 고구넥님이 도움 주신 사항입니다. 내용을 요약하자면 GPU 서버를 사용하려면 기본적으로 다른 VM(GPU가 아닌)을 일정 기간 사용하면 GPU 서버 생성 권한을 얻는데 도움이 된다고 합니다.`

로 말씀 해주신대로 GPU없는 새로운 vm을 코어 4개, east1에 만들어서 conda 설치하고 여러가지 만지고있었습니다.

휴대폰 앱에 'Google Cloud Console'있길래 요걸로 켜고 끄는 시도 중에 p100가 켜지는 ... --;;; 일이 발생했습니다.

일시적인건지 VM을 새로만들어서 좀 쓰다보니 이렇게 된건지 확실치 않지만 소식 전달 드립니다.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
1. 오류 발생 시작 일자

- 2020.05.07에서 현재까지

2. 가능하시다면, 구글 클라우드에서 GPU 서버 설치 후 한동안 사용하지 않다가 강의를 위해 기동하는데 안되는 지 여부를 기재 부탁드립니다.

- 현재까지 서버 중지 3회 정도 실시 

- 2회는 정상적으로 재시작 되었으나 마지막 3회 째부터 같은 오류로 서버 스타트가 안되네요.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
여러 시도를 했봤는데 아직까지 실행은 안되는 상황입니다. 시도한 내용은 아래와 같습니다.

* 기존의 VM의 CPU 갯수를 4->1로 변경 시도

* 새로운 west1, east1 VM을 생성 시도 (이때 생성은 GPU 테슬라 p100 + CPU 코어 1개)

* 영역을 바꿔가며 P100 그래픽이 있는 곳을 east, west에서 찾아서 생성 시도.

위의 내용이 모두 'not have enough resources' 오류를 출력 합니다.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
GPU All regions 는 1개 할당 받았습니다.

귀찮아서 기존 p100에서 CPU 만 4->1개로 수정했는데 안되서

그냥 p100 완전히 삭제하고 다시 만들려고 했는데 CPU 1개로 만드는것도 경고 뜹니다.

혹시 잘못했나 해서 다시 해봤는데 똑같습니다.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
CPU 갯수 문제라니 어이가 없군요. 찾으시느라고 고생 많으셨습니다.

일단 이게 전체적으로 이슈가 있는지 한번 확인해 볼 필요가 있겠습니다. 조만간 전체 공지 올리겠습니다.

감사합니다.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
gpu 0->1로 변경 메일 받았은 상태입니다!

오리건에서 설정을 바꿔가면서 하나하나 테스트 해봤습니다.

위와 같이 설정 했을때는 들어가집니다. .

강의와 동일한 설정에서 cpu를 1개로 맞추니까 되고, 2개 이상부터는 안됐습니다.

그리고 cpu를 4개로 맞추고 gpu를 설정 하지 않아도 안됐었습니다. cpu의 갯수 문제인거 같습니다ㅜ
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
저도 동일한 오류가 나타납니다. 오리건말고 South Carolina, 그리고 그 외에  p100이 있는 지역으로 다 설정을 해서 다시 해보아도 동일한 현상이 일어나네요. 
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
감사합니다. 해보니 withCredentials 때문에 그런거였네요. 감사해요 ㅎㅎ 

serializeUser<> deserializeUser<>에 제네릭에 보면 두개를 둘 수 있는데요.매개변수 타입을 지정하는거 같은데요.그래서 ts강의에서 User,number로 정의 하셨는데요.number는 user.id가 number여서 정의 하신건가요?

다른건 그래도 이해는 하겠는데요. 이 부분은 도저히 이해가 안 돼서요 
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
선생님 정말 귀찮게 해드려서 죄송합니다. 저를 선생님의 제자로 받아 주 실 수 없나요? 

done(null,user)를 통해 세션에 저장했습니다.그리고 이제 req의 header에 정보가 있겠죠? 그럼 이제 다른 페이지로 이동할때 
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
대규모 서비스가 아닌 이상 로그인 구현 jwt로 안 하는 것을 추천드립니다. 정책상 엄청나게 복잡한 것들이 많습니다. 저도 대부분은 passport와 세션 사용합니다.

굳이 jwt로 하시겠다면 jwt를 할 때는 passport 필요없습니다. passport-jwt가 있긴 한데 딱히 유용하지는 않습니다.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
네 import passport를 import * as passport로 바꾸니까 되네요. ch3/back 깃허브에서 다운 받았는데 그 부분이 잘 못 되었나봐요.한가지 궁금한점이요. 
앵귤러와 ts로 웹 서비스를 하려고 하는데요.보아하니 login구현을 jwt로 하는것 같더라구요.보통은 어떻게 하나요? 대부분 passport를 이용하나요?
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
이미지로 첨부 하였습니다.감사합니다.node.js 강좌 다시 한번 볼까 하는데요. 
많이 이렇게 바뀌었을까요? 책이나 인강은 확실히 이해하는데 도움은 되지만 새로나온기술이나 깊이 있게 들어가지는 못하는것 같습니다.
혼자 학습하는것이 중요한데 혹시 어떻게 공부하셨나요? 고려대 경영학과 다니시는 중에 바꾸신것 같은데요.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
dlib은 설치가 된 것 같은데 face_recognition이 또 설치가 안되네요 ㅠ 

혹시 face_recognition도 따로 설치하는 방법이 있을까요..

그리고 하나만 더 질문 드릴게요..

가상환경에서 설치하는 것들이 그 가상환경에 나가면 실행이 안되는 건가요..

귀찮게 해서 죄송합니다. ㅠ
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
아아 저 캡쳐에는 없지만 저 부분은 이미 깃 클론 후  터미널을 종료후에 다시 킨 거라서 폴더가 있는 상태입니다!
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
conda navigator 에서 ComputerVision 에 있는 내용 다 지우고 다시 해봐도 안되네요 ㅠㅠ

늦은 시간 죄송합니다..
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
안녕하세요?

아래 -H 옵션을 이용하여 Home enviroment를 사용하도록 명령을 실행해 보세요. 

sudo -H pip install dlib

혹시 pip명령으로 안되면 아래 pip3로도 실행해 보세요. 

sudo -H pip3 install dlib

감사합니다.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
안녕하세요?

가끔 설치가 애를 먹이는 경우가 있습니다.

보내주신 메시지로만 봐서는 cmake의 실행권한 문제로 보이는데

일단 pip도 오래되었으니 업데이트 해야 할 것 같습니다.

pip install --upgrade pip

위 명령으로 pip를 최신상태로 업데이트 하고 명령창을 닫은 후 새 명령창에서 다시 설치해보세요.

그래도 동일한 문제가 발생하면

sudo pip install dlib

으로 권한을 상승시켜서 다시 설치해 보세요.

실행해 보시고 계속 문제가 해결되지 않으면 지금처럼 로그를 같이 보내주세요.

감사합니다.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
const loginStatus = useSelector((state) => state.auth.user.loginStatus)

이렇게 끝까지 꺼내시면 됩니다. 객체인 경우에 그 객체 내부에 하나만 바뀌어도 다 업데이트 되거든요.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
그래서 loginStaus없앴는데도 같아용...혹시 라우트나 리덕스 리덕스미들웨어 연결과정에서 이런경우가 있나요?
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
Header.js


reducers/auth.js

sagas/auth.js



이렇게 되어있습니다
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
지금 여기저기 콘솔로 찍어봤는데 실패했을때 사가에서 USER_LOAD_FAILURE 액션을 하게되는데 try catch문에서 USER_LOAD_FAILURE액션을 뺐더니 렌더링이 제대로 되는데... 
분명 리듀서에서는 USER_LOAD_FAILURE 액션에서 바뀌는건 아무것도 없는데 왜 새로 렌더링이될까요...?
EOT,
            'created_at' => $date,
        ]);

        
                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
            네..현재 Main.js 라우트에서는 Header.js 컴포넌트에서 유저 로드하는 액션 말고는 없는데..왜그런지 모르겠어요..
            근데 디스패치만 빼면 그냥 그대로 렌더링 한번만 되는데... 뭐가문제죠...디스패치해서 셋스테이트 한번만 할뿐일텐데..
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
            아 죄송해요 저 액션은 유저를 로드해오는 액션인데 첫 웹사이트 접근시에는 로그인이 되어있지않아 에러를 뱉고있어요
            근데 모달 함수를 주석처리해도 렌더는 세번되네요...왜그러죠..?...
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
cmd 에서 

firebase init hosting 이렇게치면

Error: There are no Firebase projects associated with this account. 오류가떠요

다른계정으로 바꿀려고하는데  바꾼계정이 안되네요 

계속물어보는것도 죄송합니다 저만 자꾸 오류만나서 제 컴퓨터가 문제가있나요 
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
네 약간 헷갈리시는 분을 위해서 정리를 해드리도록 하겠습니다

우선 cmd.exe 라는건 터미널 창이라고 하는거 입니다

이걸 실행하시고 cd 라는 명령어를 통해서 소스 저장된 위치로 이동을 하셔야 됩니다

예를 들어, cd c:\myproject\javascript-source

그리고 나서 dir 명령어를 치시면 startup.bat이 있는지 확인하시면 됩니다

참고로 cd 뒤에 저 위치가 기억이 안난다면  윈도우 탐색기를 열으셔서 상단에 위치 주소가 나와 있는걸 복사하시면 됩니다.

그리고 startup.bat화일이 없다면 윈도우 탐색기에서 해당 소스 디렉토리에 화일을 하나 생성하시고 아래 내용을 기록해서 생성해놔주시면 됩니다.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
제가 아마 강의에 놓친 부분이 있엇던것 같습니다.

Auth를 하시기 전에 Firebase Auth  셋팅을 해주시고 접근을 하시면 될듯 합니다.

구글 로그인이면 구글 로그인 설정 , 이메일이면 이메일 설정을 먼저 하시고 코드에서 로그인 일 코딩하시면 될듯 합니다 ^^
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
원격제어 부탁드립니다

귀하 아이디 

1 027 658 947

비밀번호

sv59f3pv 이거입니다 어느게 맞는지모르겠네요
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
안녕하십니까,

위 사항과 관련하여 별도의 동영상을 제작하고 강의에 추가하였습니다. '섹션9:실습 환경관련 이슈 사항이 있을 때마다 내용을 공유하는 섹션입니다'라는 추가 섹션을 생성하였고, 해당 섹션의 수업1:Resource 부족 관련 해결 방안에 보다 상세하게 해당 내역을 설명 드리고 있사오니 참조 부탁드립니다.

감사합니다.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
안녕하세요 선생님~ 

`아래는 비슷한 현상을 겪으신 고구넥님이 도움 주신 사항입니다. 내용을 요약하자면 GPU 서버를 사용하려면 기본적으로 다른 VM(GPU가 아닌)을 일정 기간 사용하면 GPU 서버 생성 권한을 얻는데 도움이 된다고 합니다.`

로 말씀 해주신대로 GPU없는 새로운 vm을 코어 4개, east1에 만들어서 conda 설치하고 여러가지 만지고있었습니다.

휴대폰 앱에 'Google Cloud Console'있길래 요걸로 켜고 끄는 시도 중에 p100가 켜지는 ... --;;; 일이 발생했습니다.

일시적인건지 VM을 새로만들어서 좀 쓰다보니 이렇게 된건지 확실치 않지만 소식 전달 드립니다.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
1. 오류 발생 시작 일자

- 2020.05.07에서 현재까지

2. 가능하시다면, 구글 클라우드에서 GPU 서버 설치 후 한동안 사용하지 않다가 강의를 위해 기동하는데 안되는 지 여부를 기재 부탁드립니다.

- 현재까지 서버 중지 3회 정도 실시 

- 2회는 정상적으로 재시작 되었으나 마지막 3회 째부터 같은 오류로 서버 스타트가 안되네요.
EOT,
            'created_at' => $date,
        ]);

        
                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
한번 해보쟈님, 밤늦게 수고 많으셨습니다.

오늘 저녁쯤에 us-west1 에서 GPU TYPE을 T4 로 변경해서 한번 시도해 주실 수 있나요?

김상화님, 아직도 서버가 'not have enough resources' 로 기동이 안된다면, 역시 us-west1 에서 GPU TYPE을 T4로 변경해서 시도해 보시고 상황 업데이트 부탁드립니다.

고우주님, 아직 접속 오류가 계속 발생하면 오류 메시지 부탁드립니다.

감사합니다.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
한번 해보쟈님, 밤늦게 수고 많으셨습니다.

오늘 저녁쯤에 us-west1 에서 GPU TYPE을 T4 로 변경해서 한번 시도해 주실 수 있나요?

김상화님, 아직도 서버가 'not have enough resources' 로 기동이 안된다면, 역시 us-west1 에서 GPU TYPE을 T4로 변경해서 시도해 보시고 상황 업데이트 부탁드립니다.

고우주님, 아직 접속 오류가 계속 발생하면 오류 메시지 부탁드립니다.

감사합니다.
EOT,
            'created_at' => $date,
        ]);
        
                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
현재까지 구글 문의 결과는 계정의 문제가 아니라, 구글 클라우드에 GPU 자원이 없어서 할당이 어렵다는 답변을 듣고 있습니다. 이 문제는 제가 계속 구글쪽에 문의해 볼것입니다.

그리고 GPU 서버를 생성할 때 한번 '리소스 부족' 오류가 나오면 연이어서 여러 Region을 바꾸면서 GPU 생성 시도를 하더라도 거의 자동적으로(?) GCP에서 '리소스 부족' 오류를 내면서 GPU 서버 생성을 막는것 같습니다. 짜증 나시더라도 이런 경우  몇시간 Cool down한 뒤에 다시 만드는 시도를 해봐야 할 것 같습니다.

저도 이문제에 계속 테스트 중이니, 새로운 결과 나올때 업데이트 드리겠습니다. 

그리고 아직까지 기동이 안되시는 분은 계속 이 스레드에 답변 부탁드립니다.

감사합니다.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
감사합니다, 김상화님,

만약에 GPU ALL Regions 가 2개 이상이시면 US-west1 에 GPU 서버를 신규로 한번 생성하되, CPU 개수를 1개(4개가 아님)로 설정해서 생성을 부탁 드려도 될까요?

만일 GPU All regions가 1개라면 기존 GPU를 삭제하시고 새로운 GPU를 CPU 개수 1개로 해서 생성을 부탁 드려도 될지요?

미리 감사드립니다.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
고우주님, 접속 불가 오류 메시지가 위와 다른 내용인지요? 

자세한 오류 메시지를 UPDATE 부탁드립니다.

감사합니다.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
안녕하십니까,

요새 west1에서 이런 문제가 나타난다는 질문이 눈이 띄는 군요.  혹시 두분 다 아직도 동일한 오류가 나시나요?  그리고 다른 지역으로 설정을 다시 해보아도 여전히 동일한 오류가 나는지 update 부탁드립니다.

감사합니다.
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
일단 해당문제는 제가 확인을 해봐야할것같습니다

회전시키기 강의 뒷부분에 

Train valid 폴더로 나누는 과정부터 이어서 해주시고 다음으로 진행 먼저 해주세요ㅠㅠ

현재 제가 잠시 출장중이라 확인까지 시간이 조금 걸릴것같아요
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        Comment::create([
            'UserID' => $user,
            'BoardID' => $board,
            'InstructorID' => null,
            'CommentContent' => <<<EOT
rotate 파이썬 파일 run 시켰을 시 뜨는 오류입니다.

numpy와 cv2가 없다고 뜹니다,

아나콘다에서 install을 거친 후에도 똑같아서 문제입니다 ㅠㅠ
EOT,
            'created_at' => $date,
        ]);

                    $date = $faker->dateTimeBetween('-2 years');
            $user = $faker->numberBetween(1, 50000);
            $board = $faker->numberBetween(1, 798);

        }

    }
}
