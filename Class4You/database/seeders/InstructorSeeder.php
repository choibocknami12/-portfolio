<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Instructor;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Instructor::create([
            'InstructorEmail' => 'admin@admin.com',
            'InstructorPassword' => Hash::make('admin1!'),
            'InstructorFullName' => '관리자',
            'InstructorPhoneNumber' => '01012345678',
            'InstructorHistory' =><<<EOT
관리자 아이디입니다.
EOT,
        ]);

        Instructor::create([
            'InstructorEmail' => 'rladudgks@gmail.com',
            'InstructorPassword' => Hash::make('rladudgks1!'),
            'InstructorFullName' => '김영한',
            'InstructorPhoneNumber' => '01023441232',
            'InstructorHistory' => <<<EOT
안녕하세요, 김영한 입니다.
저희의 모토는 여러분을 “스스로 성장하는 개발자”로 만들어 드리는 것입니다. 
다양한 프로젝트 및 실무 경험을 통해 쌓아둔 노하우를 전달드리며, 독학으로 빠른 기간 내에 성장한 저희의 경험을 전달해드립니다.

저희와 함께라면 처음 개발하는 분도, 개발 공부가 어렵고 지쳐있는 분도 모두 쉽고 재밌게 개발 실력을 키울 수 있습니다.
EOT,
        ]);

        Instructor::create([
            'InstructorEmail' => 'dlwjdghks@gmail.com',
            'InstructorPassword' => Hash::make('dlwjdghks1!'),
            'InstructorFullName' => '이정환',
            'InstructorPhoneNumber' => '01065432342',
            'InstructorHistory' => <<<EOT
안녕하세요
IT늦공 이정환 입니다.

IT 에 오랜시간 몸담고 있습니다.

IT 는 개발 트렌드에도 민감해야 하는 부지런함이 필요한 직군인것 같습니다.

저도 여전히 지속적으로 공부하고 있습니다.

제가 가진 소소한 지식이 또 다른 누군가에게 도움이 되면 좋겠습니다. 
EOT,
        ]);

        Instructor::create([
            'InstructorEmail' => 'rlawjdghks@gmail.com',
            'InstructorPassword' => Hash::make('rlawjdghks1!'),
            'InstructorFullName' => '김정환',
            'InstructorPhoneNumber' => '01030581731',
            'InstructorHistory' => <<<EOT
김정환입니다.

안녕하세요. 유튜브에서 즐거운 코딩 경험 - 코딩맥스(CodingMax) 채널을 운영하고 있는 코딩맥스입니다. 삶을 살아 가면서 새로운 지식을 배우고 나누는 것을 좋아 합니다. 😊
EOT,
        ]);

        Instructor::create([
            'InstructorEmail' => 'whgusdud@gmail.com',
            'InstructorPassword' => Hash::make('whgusdud1!'),
            'InstructorFullName' => '조현영',
            'InstructorPhoneNumber' => '01011028382',
            'InstructorHistory' => <<<EOT
안녕하세요. 

즐겁게 개발하고 있는 개발자입니다. 

앞으로 많은 도움을 드릴 수 있었으면 좋겠습니다.


- 따라하며 배우는 도커와 CI환경 저자
- 카카오 기업 신입 공채 FE 교수자
- 패스트캠퍼스, 구름, 코드스테이츠 강사 
- 현대자동차 개발 기업 교육
- 신한은행 메타버스, 코빗 타운 풀스택 개발
- 여러 공공기관 SNS 풀스택 개발
EOT,
        ]);

        Instructor::create([
            'InstructorEmail' => 'dldmswo@gmail.com',
            'InstructorPassword' => Hash::make('dldmswo1!'),
            'InstructorFullName' => '이은재',
            'InstructorPhoneNumber' => '01058472999',
            'InstructorHistory' => <<<EOT
서울에서 웹 개발자/디자이너로 일했고 지금은 제주에서 웹사이트 만드는 일, 강의, 영상 만드는 일, 컨텐츠 만드는 일 등 해보고 싶은거 이것저것 해보며 살고 있습니다 :)
비주얼 임팩트가 있는 인터랙티브 웹 개발에 특히 관심이 많고 페이스북과 유튜브 "이은재"에서 관련 기술들을 공유하고 있어요.

개발자/디자이너/컨텐츠크리에이터

웹사이트 https://studiomeal.com

유튜브 https://youtube.com/c/dldmswo

페이스북 https://www.facebook.com/1mincoding
EOT,
        ]);

        Instructor::create([
            'InstructorEmail' => 'after@gmail.com',
            'InstructorPassword' => Hash::make('after1!'),
            'InstructorFullName' => '애프터캠프',
            'InstructorPhoneNumber' => '01044321231',
            'InstructorHistory' => <<<EOT
안녕하세요
AfterCamp (애프터캠프) 입니다.
개발을 사랑하는 개발자이자 1인 스타트업의 창업자입니다.
오래 전부터 소프트웨어 교육에 관심을 가지고 꾸준히 활동하고 있습니다 😀
EOT,
        ]);
    }
}
