<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lesson;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        for ($i = 1; $i <= 163; $i++) {
            $lessonCount = rand(2, 5);

            for ($j = 1; $j <= $lessonCount; $j++) {
                Lesson::create([
                    'ChapterID' => $i,
                    'LessonTitle' => $this->getHtmlTitle(),
                    'LessonContent' => $this->getHtmlContent(),
                    'LessonVideoID' => $this->getHtmlVideoID(),
                ]);
            }
        }


        for ($i = 164; $i <= 347; $i++) {
            $lessonCount = rand(2, 5); 

            for ($j = 1; $j <= $lessonCount; $j++) {
                Lesson::create([
                    'ChapterID' => $i, 
                    'LessonTitle' => $this->getCssTitle(),
                    'LessonContent' => $this->getCssContent(),
                    'LessonVideoID' => $this->getCssVideoID(),
                ]);
            }
        }

        
        for ($i = 348; $i <= 558; $i++) {
            $lessonCount = rand(2, 5); 

            for ($j = 1; $j <= $lessonCount; $j++) {
                Lesson::create([
                    'ChapterID' => $i, 
                    'LessonTitle' => $this->getJsTitle(),
                    'LessonContent' => $this->getJsContent(),
                    'LessonVideoID' => $this->getJsVideoID(),
                ]);
            }
        }

                
        for ($i = 559; $i <= 642; $i++) {
            $lessonCount = rand(2, 5); 

            for ($j = 1; $j <= $lessonCount; $j++) {
                Lesson::create([
                    'ChapterID' => $i, 
                    'LessonTitle' => $this->getPhpTitle(),
                    'LessonContent' => $this->getPhpContent(),
                    'LessonVideoID' => $this->getPhpVideoID(),
                ]);
            }
        }

        for ($i = 643; $i <= 799; $i++) {
            $lessonCount = rand(2, 5); 

            for ($j = 1; $j <= $lessonCount; $j++) {
                Lesson::create([
                    'ChapterID' => $i, 
                    'LessonTitle' => $this->getJavaTitle(),
                    'LessonContent' => $this->getJavaContent(),
                    'LessonVideoID' => $this->getJavaVideoID(),
                ]);
            }
        }

        for ($i = 800; $i <= 964; $i++) {
            $lessonCount = rand(2, 5); 

            for ($j = 1; $j <= $lessonCount; $j++) {
                Lesson::create([
                    'ChapterID' => $i, 
                    'LessonTitle' => $this->getDbTitle(),
                    'LessonContent' => $this->getDbContent(),
                    'LessonVideoID' => $this->getDbVideoID(),
                ]);
            }
        }
    }

    protected function getHtmlTitle()
    {
        $titles = ['학습을 위해 필요한 프로그램들', 'HTML(Hyper Text Markup Language) 개념 및 구성요소', '시맨틱 요소(Semantic Elements) 에 대해서', 'HTML 문서 기본 구조', 'HTML 기본 태그와 역할', '수강을 위한 환경 세팅', 'HTML, CSS, JavaScript가 뭔가요?', '제목과 중요도에 따른 태그', '표 사용하기'];
        return $titles[array_rand($titles)];
    }

    protected function getHtmlContent()
    {
        $contents = ['해당 강의를 듣는 사용자를 위한', '하루하루 완강을 목표로하는', 'A부터 Z까지 쉽게 배우는', '혼자서 공부 가능한 얄팍한 지식.', '이해하기 쉬운 비유와 예제', '애니메이션으로 셜명하는 강의'];
        return $contents[array_rand($contents)];
    }

    protected function getHtmlVideoID()
    {
        $videoIDs = ['AXlLlRLyx-Y', 'J3hq7-KyIts', 'LNMvY_c4B8E', 'lNkp-SU8Q7E', 'BEe5uH7VeoY', 'bmlAQLrYoKc', 'udpqdthFwBA', 'r1ZllTCMXo4', 'SfaMZ06ficA', 'c1r4bhpSAdo'];
        return $videoIDs[array_rand($videoIDs)];
    }

    protected function getCssTitle()
    {
        $titles = ['학습을 위해 필요한 프로그램들', 'CSS(Cascading Style Sheet) 개념 및 구성요소', '그리드와 플랙스, 반응형에 대해서', 'CSS 문서 기본 구조', 'CSS 기본 클래스와 역할', '수강을 위한 환경 세팅', 'HTML, CSS, JavaScript가 뭔가요?', '사이트 스타일링하기', '스타일 사용하기'];
        return $titles[array_rand($titles)];
    }

    protected function getCssContent()
    {
        $contents = ['해당 강의를 듣는 사용자를 위한', '하루하루 완강을 목표로하는', 'A부터 Z까지 쉽게 배우는', '혼자서 공부 가능한 얄팍한 지식.', '이해하기 쉬운 비유와 예제', '애니메이션으로 셜명하는 강의'];
        return $contents[array_rand($contents)];
    }

    protected function getCssVideoID()
    {
        $videoIDs = ['ONcmkf07EuI', 'i_6LzwRXtJw', 'YtGAuoFir8w', 'Me7qCXl94nQ', 'wNpplOPbMSc', 'N2WAj79Cna4', 'jdc-7VMNf9g', 'SXilY8XVDK8', 'UK9GF5Kg__A', 'hfg5mtXp1ng'];
        return $videoIDs[array_rand($videoIDs)];
    }

    
    protected function getJsTitle()
    {
        $titles = ['학습을 위해 필요한 프로그램들', 'JS(JavaScript) 개념 및 구성요소', '선택자에 대해서', 'API 문서 기본 구조', 'ID에 대한 내용과 역할', '수강을 위한 환경 세팅', 'HTML, CSS, JavaScript가 뭔가요?', '동적 사이트 만들기', '동적 기능 구현'];
        return $titles[array_rand($titles)];
    }

    protected function getJsContent()
    {
        $contents = ['해당 강의를 듣는 사용자를 위한', '하루하루 완강을 목표로하는', 'A부터 Z까지 쉽게 배우는', '혼자서 공부 가능한 얄팍한 지식.', '이해하기 쉬운 비유와 예제', '애니메이션으로 셜명하는 강의'];
        return $contents[array_rand($contents)];
    }

    protected function getJsVideoID()
    {
        $videoIDs = ['PZIPsKgWJiw', '1kYjb7L8YW4', 'uWbCJGSeqlY', 'QhTNltrkl2U', 'lfNMuwGHbL0', 'vmjHeYSneOg', '2Qc3BBRZSnA', 'WJeDrf_tNz0', 'wZTcQlnDWQo', 'knIpYEODO3Y'];
        return $videoIDs[array_rand($videoIDs)];
    }

    protected function getPhpTitle()
    {
        $titles = ['학습을 위해 필요한 프로그램들', 'PHP(Hypertext Preprocessor) 개념 및 구성요소', '절차지향과 객체지향', '변수 사용에 대해서', '구구단 만들기', '반복문과 조건문에 대해서', '변수란 무엇인가', '연산자들에 대해서'];
        return $titles[array_rand($titles)];
    }

    protected function getPhpContent()
    {
        $contents = ['해당 강의를 듣는 사용자를 위한', '하루하루 완강을 목표로하는', 'A부터 Z까지 쉽게 배우는', '혼자서 공부 가능한 얄팍한 지식.', '이해하기 쉬운 비유와 예제', '애니메이션으로 셜명하는 강의'];
        return $contents[array_rand($contents)];
    }

    protected function getPhpVideoID()
    {
        $videoIDs = ['dy9yQIx38u8', 'KN3DxDke8UY', '6A7-c6tkRHU', 'kYn_jQThdPI', 'eSan4bQ50b8', 'gSgcxDxc7EY', 'U5Pzv8EcbBQ', 'GqHTEYGRza4', 'r5Cxk5BGM04', 'ATmEcDcB52Y'];
        return $videoIDs[array_rand($videoIDs)];
    }

    protected function getJavaTitle()
    {
        $titles = ['학습을 위해 필요한 프로그램들', 'JAVA(Java Standard) 개념 및 구성요소', '절차지향과 객체지향', '변수 사용에 대해서', '구구단 만들기', '반복문과 조건문에 대해서', '변수란 무엇인가', '연산자들에 대해서'];
        return $titles[array_rand($titles)];
    }

    protected function getJavaContent()
    {
        $contents = ['해당 강의를 듣는 사용자를 위한', '하루하루 완강을 목표로하는', 'A부터 Z까지 쉽게 배우는', '혼자서 공부 가능한 얄팍한 지식.', '이해하기 쉬운 비유와 예제', '애니메이션으로 셜명하는 강의'];
        return $contents[array_rand($contents)];
    }

    protected function getJavaVideoID()
    {
        $videoIDs = ['c2SaqgdfW1g', 'qPOvlIFSSqw', 'DH0Ym_zIH2k', 'M_GCJsLjx_I', 'IukLIDIO6FE', 'RlJNFArdAw4', 'MAyWaW-0SPo', '73C23Cfg4dU', 'OL_BJ9GVKG0', 'DsG9q9MJK5o'];
        return $videoIDs[array_rand($videoIDs)];
    }

    protected function getDbTitle()
    {
        $titles = ['학습을 위해 필요한 프로그램들', 'DB(DataBase) 개념 및 구성요소', '데이터에 대해서', 'SQL에 대해서', '개념적 논리적 물리적 설계에 대해', 'PK(Primary Key)에 대해서', 'ERD에 대해서', 'FK(Foreign Key)에 대해서'];
        return $titles[array_rand($titles)];
    }

    protected function getDbContent()
    {
        $contents = ['해당 강의를 듣는 사용자를 위한', '하루하루 완강을 목표로하는', 'A부터 Z까지 쉽게 배우는', '혼자서 공부 가능한 얄팍한 지식.', '이해하기 쉬운 비유와 예제', '애니메이션으로 셜명하는 강의'];
        return $contents[array_rand($contents)];
    }

    protected function getDbVideoID()
    {
        $videoIDs = ['0cRhit1EJM0', '6JFEJWLcKUc', '8r1W_7nuo2U', 'j2DAiY-OXGs', 'EftIRlr6rPI', 'lBk5YhLZevs', '_JURyg_KzHE', '6qkPy7RfLqQ', 'WWAFAm9op2U', '1YmWy-7-OhQ'];
        return $videoIDs[array_rand($videoIDs)];
    }
}
