<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chapter;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $classes = [
                [
                    'ClassID' => 1,
                    'Chapters' => [
                        '섹션 0. 강의 자료',
                        '섹션 1. HTML Basics',
                        '섹션 2. CSS Basics',
                        '섹션 3. 간단한 버튼을 만들면서 HTML CSS 배우기',
                        '섹션 4. Flexbox, Grid, Display',
                        '섹션 5. 유튜브 사이트 만들기',
                        '섹션 6. 인스타그램 사이트 만들기',
                    ],
                ],
                [
                    'ClassID' => 2,
                    'Chapters' => [
                        '섹션 0. 웹 개발 시작해봐요',
                        '섹션 1. 기초 HTML',
                        '섹션 2. 멋진 CSS',
                        '섹션 3. 진짜배기 JAVASCRIPT',
                        '섹션 4. 실습으로 검증하기',
                    ],
                ],
                [
                    'ClassID' => 3,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 4,
                    'Chapters' => [
                        '섹션 0. Sass 기초 학습',
                        '섹션 1. 자몽톡 클론코딩 with Sass',
                    ],
                ],
                [
                    'ClassID' => 5,
                    'Chapters' => [
                        '섹션 0. 웹 개발 시작해봐요',
                        '섹션 1. 기초 HTML',
                        '섹션 2. 멋진 CSS',
                        '섹션 3. 진짜배기 JAVASCRIPT',
                        '섹션 4. 실습으로 검증하기',
                    ],
                ],
                [
                    'ClassID' => 6,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 7,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 8,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 9,
                    'Chapters' => [
                        '섹션 0. 웹 개발 시작해봐요',
                        '섹션 1. 기초 HTML',
                        '섹션 2. 멋진 CSS',
                        '섹션 3. 진짜배기 JAVASCRIPT',
                        '섹션 4. 실습으로 검증하기',
                    ],
                ],
                [
                    'ClassID' => 10,
                    'Chapters' => [
                        '섹션 0. Sass 기초 학습',
                        '섹션 1. 자몽톡 클론코딩 with Sass',
                    ],
                ],
                [
                    'ClassID' => 11,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 웹, 코딩, HTML',
                        '섹션 2. HTML 와 웹페이지',
                        '섹션 3. 인터넷과 웹',
                        '섹션 4. 웹서버와 운영',
                        '섹션 5. 마치며',
                        '섹션 6. 부록',
                    ],
                ],
                [
                    'ClassID' => 12,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 13,
                    'Chapters' => [
                        '섹션 0. 웹 개발 시작해봐요',
                        '섹션 1. 기초 HTML',
                        '섹션 2. 멋진 CSS',
                        '섹션 3. 진짜배기 JAVASCRIPT',
                        '섹션 4. 실습으로 검증하기',
                    ],
                ],
                [
                    'ClassID' => 14,
                    'Chapters' => [
                        '섹션 0. 강의 자료',
                        '섹션 1. HTML Basics',
                        '섹션 2. CSS Basics',
                        '섹션 3. 간단한 버튼을 만들면서 HTML CSS 배우기',
                        '섹션 4. Flexbox, Grid, Display',
                        '섹션 5. 유튜브 사이트 만들기',
                        '섹션 6. 인스타그램 사이트 만들기',
                    ],
                ],
                [
                    'ClassID' => 15,
                    'Chapters' => [
                        '섹션 0. 웹 개발 시작해봐요',
                        '섹션 1. 기초 HTML',
                        '섹션 2. 멋진 CSS',
                        '섹션 3. 진짜배기 JAVASCRIPT',
                        '섹션 4. 실습으로 검증하기',
                    ],
                ],
                [
                    'ClassID' => 16,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 17,
                    'Chapters' => [
                        '섹션 0. Sass 기초 학습',
                        '섹션 1. 자몽톡 클론코딩 with Sass',
                    ],
                ],
                [
                    'ClassID' => 18,
                    'Chapters' => [
                        '섹션 0. 웹 개발 시작해봐요',
                        '섹션 1. 기초 HTML',
                        '섹션 2. 멋진 CSS',
                        '섹션 3. 진짜배기 JAVASCRIPT',
                        '섹션 4. 실습으로 검증하기',
                    ],
                ],
                [
                    'ClassID' => 19,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 20,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 21,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 22,
                    'Chapters' => [
                        '섹션 0. 웹 개발 시작해봐요',
                        '섹션 1. 기초 HTML',
                        '섹션 2. 멋진 CSS',
                        '섹션 3. 진짜배기 JAVASCRIPT',
                        '섹션 4. 실습으로 검증하기',
                    ],
                ],
                [
                    'ClassID' => 23,
                    'Chapters' => [
                        '섹션 0. Sass 기초 학습',
                        '섹션 1. 자몽톡 클론코딩 with Sass',
                    ],
                ],
                [
                    'ClassID' => 24,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 웹, 코딩, HTML',
                        '섹션 2. HTML 와 웹페이지',
                        '섹션 3. 인터넷과 웹',
                        '섹션 4. 웹서버와 운영',
                        '섹션 5. 마치며',
                        '섹션 6. 부록',
                    ],
                ],
                [
                    'ClassID' => 25,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 26,
                    'Chapters' => [
                        '섹션 0. 웹 개발 시작해봐요',
                        '섹션 1. 기초 HTML',
                        '섹션 2. 멋진 CSS',
                        '섹션 3. 진짜배기 JAVASCRIPT',
                        '섹션 4. 실습으로 검증하기',
                    ],
                ],
                [
                    'ClassID' => 27,
                    'Chapters' => [
                        '섹션 0. 강의 자료',
                        '섹션 1. HTML Basics',
                        '섹션 2. CSS Basics',
                        '섹션 3. 간단한 버튼을 만들면서 HTML CSS 배우기',
                        '섹션 4. Flexbox, Grid, Display',
                        '섹션 5. 유튜브 사이트 만들기',
                        '섹션 6. 인스타그램 사이트 만들기',
                    ],
                ],
                [
                    'ClassID' => 28,
                    'Chapters' => [
                        '섹션 0. 웹 개발 시작해봐요',
                        '섹션 1. 기초 HTML',
                        '섹션 2. 멋진 CSS',
                        '섹션 3. 진짜배기 JAVASCRIPT',
                        '섹션 4. 실습으로 검증하기',
                    ],
                ],
                [
                    'ClassID' => 29,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 30,
                    'Chapters' => [
                        '섹션 0. Sass 기초 학습',
                        '섹션 1. 자몽톡 클론코딩 with Sass',
                    ],
                ],
                [
                    'ClassID' => 31,
                    'Chapters' => [
                        '섹션 0. 웹 개발 시작해봐요',
                        '섹션 1. 기초 HTML',
                        '섹션 2. 멋진 CSS',
                        '섹션 3. 진짜배기 JAVASCRIPT',
                        '섹션 4. 실습으로 검증하기',
                    ],
                ],
                [
                    'ClassID' => 32,
                    'Chapters' => [
                        '섹션 0. Sass 기초 학습',
                        '섹션 1. 자몽톡 클론코딩 with Sass',
                    ],
                ],
                [
                    'ClassID' => 33,
                    'Chapters' => [
                        '섹션 0. 웹 개발 시작해봐요',
                        '섹션 1. 기초 HTML',
                        '섹션 2. 멋진 CSS',
                        '섹션 3. 진짜배기 JAVASCRIPT',
                        '섹션 4. 실습으로 검증하기',
                    ],
                ],
                [
                    'ClassID' => 34,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 웹, 코딩, HTML',
                        '섹션 2. HTML 와 웹페이지',
                        '섹션 3. 인터넷과 웹',
                        '섹션 4. 웹서버와 운영',
                        '섹션 5. 마치며',
                        '섹션 6. 부록',
                    ],
                ],
                [
                    'ClassID' => 35,
                    'Chapters' => [
                        '섹션 0. 학습 준비',
                        '섹션 1. Flex 핵심정리',
                        '섹션 2. Flex UI 만들기',
                        '섹션 3. Flex로 반응형 페이지 만들기',
                        '섹션 4. Grid 핵심정리',
                        '섹션 5. Grid로 반응형 페이지 만들기',
                        '섹션 6. Grid에 품은 창의력',
                    ],
                ],
                [
                    'ClassID' => 36,
                    'Chapters' => [
                        '섹션 0. 준비하기',
                        '섹션 1. CSS Transition',
                        '섹션 2. part1 css 선택자',
                        '섹션 2. CSS Animation',
                        '섹션 3. Web Animation API 기본',
                        '섹션 4. 여러개의 객체에 애니메이션 적용하기',
                        '섹션 5. 원하는 경로로 자유롭게 이동하는 애니메이션',
                    ],
                ],
                [
                    'ClassID' => 37,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 38,
                    'Chapters' => [
                        '섹션 0. 시작하기',
                        '섹션 1. SVG의 개념과 기본적인 사용법',
                        '섹션 2. CSS와 자바스크립트 적용하기',
                        '섹션 3. 그리기',
                        '섹션 4. 텍스트',
                        '섹션 5. 효과',
                    ],
                ],
                [
                    'ClassID' => 39,
                    'Chapters' => [
                        '섹션 0. 준비하기',
                        '섹션 1. CSS Transition',
                        '섹션 2. part1 css 선택자',
                        '섹션 2. CSS Animation',
                        '섹션 3. Web Animation API 기본',
                        '섹션 4. 여러개의 객체에 애니메이션 적용하기',
                        '섹션 5. 원하는 경로로 자유롭게 이동하는 애니메이션',
                    ],
                ],
                [
                    'ClassID' => 40,
                    'Chapters' => [
                        '섹션 0. 시작하기',
                        '섹션 1. SVG의 개념과 기본적인 사용법',
                        '섹션 2. CSS와 자바스크립트 적용하기',
                        '섹션 3. 그리기',
                        '섹션 4. 텍스트',
                        '섹션 5. 효과',
                    ],
                ],
                [
                    'ClassID' => 41,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 42,
                    'Chapters' => [
                        '섹션 0. 준비하기',
                        '섹션 1. CSS Transition',
                        '섹션 2. part1 css 선택자',
                        '섹션 2. CSS Animation',
                        '섹션 3. Web Animation API 기본',
                        '섹션 4. 여러개의 객체에 애니메이션 적용하기',
                        '섹션 5. 원하는 경로로 자유롭게 이동하는 애니메이션',
                    ],
                ],
                [
                    'ClassID' => 43,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 44,
                    'Chapters' => [
                        '섹션 0. 준비하기',
                        '섹션 1. CSS Transition',
                        '섹션 2. part1 css 선택자',
                        '섹션 2. CSS Animation',
                        '섹션 3. Web Animation API 기본',
                        '섹션 4. 여러개의 객체에 애니메이션 적용하기',
                        '섹션 5. 원하는 경로로 자유롭게 이동하는 애니메이션',
                    ],
                ],
                [
                    'ClassID' => 45,
                    'Chapters' => [
                        '섹션 0. 시작하기',
                        '섹션 1. SVG의 개념과 기본적인 사용법',
                        '섹션 2. CSS와 자바스크립트 적용하기',
                        '섹션 3. 그리기',
                        '섹션 4. 텍스트',
                        '섹션 5. 효과',
                    ],
                ],
                [
                    'ClassID' => 46,
                    'Chapters' => [
                        '섹션 0. 준비하기',
                        '섹션 1. CSS Transition',
                        '섹션 2. part1 css 선택자',
                        '섹션 2. CSS Animation',
                        '섹션 3. Web Animation API 기본',
                        '섹션 4. 여러개의 객체에 애니메이션 적용하기',
                        '섹션 5. 원하는 경로로 자유롭게 이동하는 애니메이션',
                    ],
                ],
                [
                    'ClassID' => 47,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 웹, 코딩, HTML',
                        '섹션 2. HTML 와 웹페이지',
                        '섹션 3. 인터넷과 웹',
                        '섹션 4. 웹서버와 운영',
                        '섹션 5. 마치며',
                        '섹션 6. 부록',
                    ],
                ],
                [
                    'ClassID' => 48,
                    'Chapters' => [
                        '섹션 0. 시작하기',
                        '섹션 1. SVG의 개념과 기본적인 사용법',
                        '섹션 2. CSS와 자바스크립트 적용하기',
                        '섹션 3. 그리기',
                        '섹션 4. 텍스트',
                        '섹션 5. 효과',
                    ],
                ],
                [
                    'ClassID' => 49,
                    'Chapters' => [
                        '섹션 0. 준비하기',
                        '섹션 1. CSS Transition',
                        '섹션 2. part1 css 선택자',
                        '섹션 2. CSS Animation',
                        '섹션 3. Web Animation API 기본',
                        '섹션 4. 여러개의 객체에 애니메이션 적용하기',
                        '섹션 5. 원하는 경로로 자유롭게 이동하는 애니메이션',
                    ],
                ],
                [
                    'ClassID' => 50,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 웹, 코딩, HTML',
                        '섹션 2. HTML 와 웹페이지',
                        '섹션 3. 인터넷과 웹',
                    ],
                ],
                [
                    'ClassID' => 51,
                    'Chapters' => [
                        '섹션 0. 준비하기',
                        '섹션 1. CSS Transition',
                        '섹션 2. part1 css 선택자',
                        '섹션 2. CSS Animation',
                        '섹션 3. Web Animation API 기본',
                    ],
                ],
                [
                    'ClassID' => 52,
                    'Chapters' => [
                        '섹션 0. 시작하기',
                        '섹션 1. SVG의 개념과 기본적인 사용법',
                        '섹션 2. CSS와 자바스크립트 적용하기',
                        '섹션 3. 그리기',
                        '섹션 4. 텍스트',
                        '섹션 5. 효과',
                    ],
                ],
                [
                    'ClassID' => 53,
                    'Chapters' => [
                        '섹션 0. 준비하기',
                        '섹션 1. CSS Transition',
                        '섹션 2. part1 css 선택자',
                        '섹션 2. CSS Animation',
                        '섹션 3. Web Animation API 기본',
                        '섹션 4. 여러개의 객체에 애니메이션 적용하기',
                        '섹션 5. 원하는 경로로 자유롭게 이동하는 애니메이션',
                    ],
                ],
                [
                    'ClassID' => 54,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                    ],
                ],
                [
                    'ClassID' => 55,
                    'Chapters' => [
                        '섹션 0. 준비하기',
                        '섹션 1. CSS Transition',
                    ],
                ],
                [
                    'ClassID' => 56,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 57,
                    'Chapters' => [
                        '섹션 0. 준비하기',
                        '섹션 1. CSS Transition',
                        '섹션 2. part1 css 선택자',
                        '섹션 2. CSS Animation',
                        '섹션 3. Web Animation API 기본',
                    ],
                ],
                [
                    'ClassID' => 58,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 웹, 코딩, HTML',
                        '섹션 2. HTML 와 웹페이지',
                        '섹션 3. 인터넷과 웹',
                        '섹션 4. 웹서버와 운영',
                        '섹션 5. 마치며',
                        '섹션 6. 부록',
                    ],
                ],
                [
                    'ClassID' => 59,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 웹, 코딩, HTML',
                        '섹션 2. HTML 와 웹페이지',
                        '섹션 3. 인터넷과 웹',
                    ],
                ],
                [
                    'ClassID' => 60,
                    'Chapters' => [
                        '섹션 0. 시작하기',
                        '섹션 1. SVG의 개념과 기본적인 사용법',
                        '섹션 2. CSS와 자바스크립트 적용하기',
                        '섹션 3. 그리기',
                        '섹션 4. 텍스트',
                        '섹션 5. 효과',
                    ],
                ],
                [
                    'ClassID' => 61,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                    ],
                ],
                [
                    'ClassID' => 62,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                    ],
                ],
                [
                    'ClassID' => 63,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 웹, 코딩, HTML',
                        '섹션 2. HTML 와 웹페이지',
                        '섹션 3. 인터넷과 웹',
                    ],
                ],
                [
                    'ClassID' => 64,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                    ],
                ],
                [
                    'ClassID' => 65,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                    ],
                ],
                [
                    'ClassID' => 66,
                    'Chapters' => [
                        '섹션 0. [소개영상] 웹 퍼블리셔를 위한 JS 핵심이론 및 실전예제 교재 및 완성본',
                        '섹션 1. [다운로드] 웹 퍼블리셔를 위한 JS 핵심이론 및 실전예제 교재 및 완성본',
                    ],
                ],
                [
                    'ClassID' => 67,
                    'Chapters' => [
                        '섹션 0. 들어가기에 앞서...',
                        '섹션 1. JavaScript V8엔진',
                        '섹션 2. V8 엔진의 최적화 전략 - 인라이닝 (Inlining)',
                        '섹션 3. V8 엔진의 최적화 전략 - 히든 클래스 (Hidden Class)',
                        '섹션 5. 히든 클래스(Hidden Class) 조금 더 살펴보기',
                        '섹션 6. 마치며...',
                    ],
                ],
                [
                    'ClassID' => 68,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                    ],
                ],
                [
                    'ClassID' => 69,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                    ],
                ],
                [
                    'ClassID' => 70,
                    'Chapters' => [
                        '섹션 0. [소개영상] 웹 퍼블리셔를 위한 JS 핵심이론 및 실전예제 교재 및 완성본',
                        '섹션 1. [다운로드] 웹 퍼블리셔를 위한 JS 핵심이론 및 실전예제 교재 및 완성본',
                    ],
                ],
                [
                    'ClassID' => 71,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                    ],
                ],
                [
                    'ClassID' => 72,
                    'Chapters' => [
                        '섹션 0. 들어가기에 앞서...',
                        '섹션 1. JavaScript V8엔진',
                        '섹션 2. V8 엔진의 최적화 전략 - 인라이닝 (Inlining)',
                        '섹션 3. V8 엔진의 최적화 전략 - 히든 클래스 (Hidden Class)',
                        '섹션 5. 히든 클래스(Hidden Class) 조금 더 살펴보기',
                        '섹션 6. 마치며...',
                    ],
                ],
                [
                    'ClassID' => 73,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 웹, 코딩, HTML',
                        '섹션 2. HTML 와 웹페이지',
                        '섹션 3. 인터넷과 웹',
                    ],
                ],
                [
                    'ClassID' => 74,
                    'Chapters' => [
                        '섹션 0. [소개영상] 웹 퍼블리셔를 위한 JS 핵심이론 및 실전예제 교재 및 완성본',
                        '섹션 1. [다운로드] 웹 퍼블리셔를 위한 JS 핵심이론 및 실전예제 교재 및 완성본',
                    ],
                ],
                [
                    'ClassID' => 75,
                    'Chapters' => [
                        '섹션 0. 들어가기에 앞서...',
                        '섹션 1. JavaScript V8엔진',
                        '섹션 2. V8 엔진의 최적화 전략 - 인라이닝 (Inlining)',
                        '섹션 3. V8 엔진의 최적화 전략 - 히든 클래스 (Hidden Class)',
                        '섹션 5. 히든 클래스(Hidden Class) 조금 더 살펴보기',
                        '섹션 6. 마치며...',
                    ],
                ],
                [
                    'ClassID' => 76,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 웹, 코딩, HTML',
                        '섹션 2. HTML 와 웹페이지',
                        '섹션 3. 인터넷과 웹',
                    ],
                ],
                [
                    'ClassID' => 77,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                    ],
                ],
                [
                    'ClassID' => 78,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 웹, 코딩, HTML',
                        '섹션 2. HTML 와 웹페이지',
                        '섹션 3. 인터넷과 웹',
                    ],
                ],
                [
                    'ClassID' => 79,
                    'Chapters' => [
                        '섹션 0. 들어가기에 앞서...',
                        '섹션 1. JavaScript V8엔진',
                        '섹션 2. V8 엔진의 최적화 전략 - 인라이닝 (Inlining)',
                        '섹션 3. V8 엔진의 최적화 전략 - 히든 클래스 (Hidden Class)',
                        '섹션 5. 히든 클래스(Hidden Class) 조금 더 살펴보기',
                        '섹션 6. 마치며...',
                    ],
                ],
                [
                    'ClassID' => 80,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                    ],
                ],
                [
                    'ClassID' => 81,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 웹, 코딩, HTML',
                        '섹션 2. HTML 와 웹페이지',
                        '섹션 3. 인터넷과 웹',
                    ],
                ],
                [
                    'ClassID' => 82,
                    'Chapters' => [
                        '섹션 0. 들어가기에 앞서...',
                        '섹션 1. JavaScript V8엔진',
                        '섹션 2. V8 엔진의 최적화 전략 - 인라이닝 (Inlining)',
                        '섹션 3. V8 엔진의 최적화 전략 - 히든 클래스 (Hidden Class)',
                        '섹션 5. 히든 클래스(Hidden Class) 조금 더 살펴보기',
                        '섹션 6. 마치며...',
                    ],
                ],
                [
                    'ClassID' => 83,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 84,
                    'Chapters' => [
                        '섹션 0. 들어가기에 앞서...',
                        '섹션 1. JavaScript V8엔진',
                        '섹션 2. V8 엔진의 최적화 전략 - 인라이닝 (Inlining)',
                        '섹션 3. V8 엔진의 최적화 전략 - 히든 클래스 (Hidden Class)',
                        '섹션 5. 히든 클래스(Hidden Class) 조금 더 살펴보기',
                        '섹션 6. 마치며...',
                    ],
                ],
                [
                    'ClassID' => 85,
                    'Chapters' => [
                        '섹션 0. [소개영상] 웹 퍼블리셔를 위한 JS 핵심이론 및 실전예제 교재 및 완성본',
                        '섹션 1. [다운로드] 웹 퍼블리셔를 위한 JS 핵심이론 및 실전예제 교재 및 완성본',
                    ],
                ],
                [
                    'ClassID' => 86,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 웹, 코딩, HTML',
                        '섹션 2. HTML 와 웹페이지',
                        '섹션 3. 인터넷과 웹',
                    ],
                ],
                [
                    'ClassID' => 87,
                    'Chapters' => [
                        '섹션 0. 시작하기',
                        '섹션 1. Web API - DOM',
                        '섹션 2. 자바스크립트 기초',
                        '섹션 3. Web API - BOM',
                        '섹션 4. 프로젝트',
                    ],
                ],
                [
                    'ClassID' => 88,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 웹, 코딩, HTML',
                        '섹션 2. HTML 와 웹페이지',
                        '섹션 3. 인터넷과 웹'
                    ],
                ],
                [
                    'ClassID' => 89,
                    'Chapters' => [
                        '섹션 0. [소개영상] 웹 퍼블리셔를 위한 JS 핵심이론 및 실전예제 교재 및 완성본',
                        '섹션 1. [다운로드] 웹 퍼블리셔를 위한 JS 핵심이론 및 실전예제 교재 및 완성본',
                    ],
                ],
                [
                    'ClassID' => 90,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 91,
                    'Chapters' => [
                        '섹션 0. 시작하기',
                        '섹션 1. Web API - DOM',
                        '섹션 2. 자바스크립트 기초',
                        '섹션 3. Web API - BOM',
                        '섹션 4. 프로젝트',
                    ],
                ],
                [
                    'ClassID' => 92,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 93,
                    'Chapters' => [
                        '섹션 0. 진짜! 자바스크립트',
                        '섹션 1. 나만 모르면 안되는 프로그래밍 특급 원리',
                        '섹션 2. 수업 환경 준비',
                        '섹션 3. 수업 강의 자료',
                        '섹션 4. 변수 이해하기',
                        '섹션 5. 기본 데이터 타입',
                    ],
                ],
                [
                    'ClassID' => 94,
                    'Chapters' => [
                        '섹션 0. 강의 소개',
                        '섹션 1. 자바스크립트를 왜 배워야 할까?',
                        '섹션 2. 자바스크립트 시작하기',
                        '섹션 3. 자바스크립트 응용하기',
                        '섹션 4. DOM과 DOM API',
                        '섹션 5. 프로젝트 준비하기',
                    ],
                ],
                [
                    'ClassID' => 95,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 96,
                    'Chapters' => [
                        '섹션 0. 진짜! 자바스크립트',
                        '섹션 1. 나만 모르면 안되는 프로그래밍 특급 원리',
                        '섹션 2. 수업 환경 준비',
                        '섹션 3. 수업 강의 자료',
                        '섹션 4. 변수 이해하기',
                        '섹션 5. 기본 데이터 타입',
                    ],
                ],
                [
                    'ClassID' => 97,
                    'Chapters' => [
                        '섹션 0. 시작하기',
                        '섹션 1. Web API - DOM',
                        '섹션 2. 자바스크립트 기초',
                        '섹션 3. Web API - BOM',
                        '섹션 4. 프로젝트',
                    ],
                ],
                [
                    'ClassID' => 98,
                    'Chapters' => [
                        '섹션 0. 강의 소개',
                        '섹션 1. 자바스크립트를 왜 배워야 할까?',
                        '섹션 2. 자바스크립트 시작하기',
                        '섹션 3. 자바스크립트 응용하기',
                        '섹션 4. DOM과 DOM API',
                        '섹션 5. 프로젝트 준비하기',
                    ],
                ],
                [
                    'ClassID' => 99,
                    'Chapters' => [
                        '섹션 0. 진짜! 자바스크립트',
                        '섹션 1. 나만 모르면 안되는 프로그래밍 특급 원리',
                        '섹션 2. 수업 환경 준비',
                        '섹션 3. 수업 강의 자료',
                        '섹션 4. 변수 이해하기',
                        '섹션 5. 기본 데이터 타입',
                    ],
                ],
                [
                    'ClassID' => 100,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 101,
                    'Chapters' => [
                        '섹션 0. [소개영상] 웹 퍼블리셔를 위한 JS 핵심이론 및 실전예제 교재 및 완성본',
                        '섹션 1. [다운로드] 웹 퍼블리셔를 위한 JS 핵심이론 및 실전예제 교재 및 완성본',
                    ],
                ],
                [
                    'ClassID' => 102,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 웹, 코딩, HTML',
                        '섹션 2. HTML 와 웹페이지',
                        '섹션 3. 인터넷과 웹'
                    ],
                ],
                [
                    'ClassID' => 103,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 104,
                    'Chapters' => [
                        '섹션 0. 진짜! 자바스크립트',
                        '섹션 1. 나만 모르면 안되는 프로그래밍 특급 원리',
                        '섹션 2. 수업 환경 준비',
                        '섹션 3. 수업 강의 자료',
                        '섹션 4. 변수 이해하기',
                        '섹션 5. 기본 데이터 타입',
                    ],
                ],
                [
                    'ClassID' => 105,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 106,
                    'Chapters' => [
                        '섹션 0. [소개영상] 웹 퍼블리셔를 위한 JS 핵심이론 및 실전예제 교재 및 완성본',
                        '섹션 1. [다운로드] 웹 퍼블리셔를 위한 JS 핵심이론 및 실전예제 교재 및 완성본',
                    ],
                ],
                [
                    'ClassID' => 107,
                    'Chapters' => [
                        '섹션 0. part1 html / css 기초',
                        '섹션 1. 전체작업파일 받기',
                        '섹션 2. part1 css 선택자',
                        '섹션 3. part3 semantic /list tag /사용자 입력 tag',
                        '섹션 4. part4 pseudo class/ font / paragraph / unit',
                        '섹션 5. part5 css / background / display / border / boxmodel',
                    ],
                ],
                [
                    'ClassID' => 108,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 웹, 코딩, HTML',
                        '섹션 2. HTML 와 웹페이지',
                        '섹션 3. 인터넷과 웹'
                    ],
                ],
                [
                    'ClassID' => 109,
                    'Chapters' => [
                        '섹션 0. PHP 라라벨 프레임 워크에 대한 설명과 장단점',
                        '섹션 1. 라라벨 세일로 다운받은 프로젝트의 각 디렉토리 별 역할 안내',
                        '섹션 2. 라라벨에서 sail 명령어 사용법과 도커의 구조 안내',
                        '섹션 3. get, post 같은 웹 페이지 라우팅을 라라벨에서 처리하는 방법',
                    ],
                ],
                [
                    'ClassID' => 110,
                    'Chapters' => [
                        '섹션 0. 컨트롤러와 서비스 컨테이너, 서비스 프로바이더 기능을 나누는 기준 및 사용법 안내',
                        '섹션 1. 페이지를 불러오기 전, 처리 코드 미들웨어에 대한 안내와 소개',
                    ],
                ],
                [
                    'ClassID' => 111,
                    'Chapters' => [
                        '섹션 0. 라라벨에서는 프론트엔드는 어떻게? vue 나 react를 대체할 livewire 설치',
                        '섹션 1. 라라벨 Livewire 프레임워크의 주요 사용코드를 소개',
                        '섹션 2. 데이터베이스 연결과 MVC 패턴을 라라벨에서는 어떻게 구현하는지 에 대한 설명',
                        '섹션 3. 데이터베이스 안의 데이터를 다루기 위한 CRUD 방법 안내'
                    ],
                ],
                [
                    'ClassID' => 112,
                    'Chapters' => [
                        '섹션 0. 파일 스토리지 기능을 사용하는 방법에 대한 안내',
                        '섹션 1. 실전에서 라라벨 서비스 방법',
                    ],
                ],
                [
                    'ClassID' => 113,
                    'Chapters' => [
                        '섹션 0. PHP 라라벨 프레임 워크에 대한 설명과 장단점',
                        '섹션 1. 라라벨 세일로 다운받은 프로젝트의 각 디렉토리 별 역할 안내',
                        '섹션 2. 라라벨에서 sail 명령어 사용법과 도커의 구조 안내',
                        '섹션 3. get, post 같은 웹 페이지 라우팅을 라라벨에서 처리하는 방법',
                    ],
                ],
                [
                    'ClassID' => 114,
                    'Chapters' => [
                        '섹션 0. 컨트롤러와 서비스 컨테이너, 서비스 프로바이더 기능을 나누는 기준 및 사용법 안내',
                        '섹션 1. 페이지를 불러오기 전, 처리 코드 미들웨어에 대한 안내와 소개',
                    ],
                ],
                [
                    'ClassID' => 115,
                    'Chapters' => [
                        '섹션 0. 라라벨에서는 프론트엔드는 어떻게? vue 나 react를 대체할 livewire 설치',
                        '섹션 1. 라라벨 Livewire 프레임워크의 주요 사용코드를 소개',
                        '섹션 2. 데이터베이스 연결과 MVC 패턴을 라라벨에서는 어떻게 구현하는지 에 대한 설명',
                        '섹션 3. 데이터베이스 안의 데이터를 다루기 위한 CRUD 방법 안내'
                    ],
                ],
                [
                    'ClassID' => 116,
                    'Chapters' => [
                        '섹션 0. 파일 스토리지 기능을 사용하는 방법에 대한 안내',
                        '섹션 1. 실전에서 라라벨 서비스 방법',
                    ],
                ],
                [
                    'ClassID' => 117,
                    'Chapters' => [
                        '섹션 0. PHP 라라벨 프레임 워크에 대한 설명과 장단점',
                        '섹션 1. 라라벨 세일로 다운받은 프로젝트의 각 디렉토리 별 역할 안내',
                        '섹션 2. 라라벨에서 sail 명령어 사용법과 도커의 구조 안내',
                        '섹션 3. get, post 같은 웹 페이지 라우팅을 라라벨에서 처리하는 방법',
                    ],
                ],
                [
                    'ClassID' => 118,
                    'Chapters' => [
                        '섹션 0. 컨트롤러와 서비스 컨테이너, 서비스 프로바이더 기능을 나누는 기준 및 사용법 안내',
                        '섹션 1. 페이지를 불러오기 전, 처리 코드 미들웨어에 대한 안내와 소개',
                    ],
                ],
                [
                    'ClassID' => 119,
                    'Chapters' => [
                        '섹션 0. 라라벨에서는 프론트엔드는 어떻게? vue 나 react를 대체할 livewire 설치',
                        '섹션 1. 라라벨 Livewire 프레임워크의 주요 사용코드를 소개',
                        '섹션 2. 데이터베이스 연결과 MVC 패턴을 라라벨에서는 어떻게 구현하는지 에 대한 설명',
                        '섹션 3. 데이터베이스 안의 데이터를 다루기 위한 CRUD 방법 안내'
                    ],
                ],
                [
                    'ClassID' => 120,
                    'Chapters' => [
                        '섹션 0. 파일 스토리지 기능을 사용하는 방법에 대한 안내',
                        '섹션 1. 실전에서 라라벨 서비스 방법',
                    ],
                ],
                [
                    'ClassID' => 121,
                    'Chapters' => [
                        '섹션 0. PHP 라라벨 프레임 워크에 대한 설명과 장단점',
                        '섹션 1. 라라벨 세일로 다운받은 프로젝트의 각 디렉토리 별 역할 안내',
                        '섹션 2. 라라벨에서 sail 명령어 사용법과 도커의 구조 안내',
                        '섹션 3. get, post 같은 웹 페이지 라우팅을 라라벨에서 처리하는 방법',
                    ],
                ],
                [
                    'ClassID' => 122,
                    'Chapters' => [
                        '섹션 0. 컨트롤러와 서비스 컨테이너, 서비스 프로바이더 기능을 나누는 기준 및 사용법 안내',
                        '섹션 1. 페이지를 불러오기 전, 처리 코드 미들웨어에 대한 안내와 소개',
                    ],
                ],
                [
                    'ClassID' => 123,
                    'Chapters' => [
                        '섹션 0. 라라벨에서는 프론트엔드는 어떻게? vue 나 react를 대체할 livewire 설치',
                        '섹션 1. 라라벨 Livewire 프레임워크의 주요 사용코드를 소개',
                        '섹션 2. 데이터베이스 연결과 MVC 패턴을 라라벨에서는 어떻게 구현하는지 에 대한 설명',
                        '섹션 3. 데이터베이스 안의 데이터를 다루기 위한 CRUD 방법 안내'
                    ],
                ],
                [
                    'ClassID' => 124,
                    'Chapters' => [
                        '섹션 0. 파일 스토리지 기능을 사용하는 방법에 대한 안내',
                        '섹션 1. 실전에서 라라벨 서비스 방법',
                    ],
                ],
                [
                    'ClassID' => 125,
                    'Chapters' => [
                        '섹션 0. PHP 라라벨 프레임 워크에 대한 설명과 장단점',
                        '섹션 1. 라라벨 세일로 다운받은 프로젝트의 각 디렉토리 별 역할 안내',
                        '섹션 2. 라라벨에서 sail 명령어 사용법과 도커의 구조 안내',
                        '섹션 3. get, post 같은 웹 페이지 라우팅을 라라벨에서 처리하는 방법',
                    ],
                ],
                [
                    'ClassID' => 126,
                    'Chapters' => [
                        '섹션 0. 컨트롤러와 서비스 컨테이너, 서비스 프로바이더 기능을 나누는 기준 및 사용법 안내',
                        '섹션 1. 페이지를 불러오기 전, 처리 코드 미들웨어에 대한 안내와 소개',
                    ],
                ],
                [
                    'ClassID' => 127,
                    'Chapters' => [
                        '섹션 0. 라라벨에서는 프론트엔드는 어떻게? vue 나 react를 대체할 livewire 설치',
                        '섹션 1. 라라벨 Livewire 프레임워크의 주요 사용코드를 소개',
                        '섹션 2. 데이터베이스 연결과 MVC 패턴을 라라벨에서는 어떻게 구현하는지 에 대한 설명',
                        '섹션 3. 데이터베이스 안의 데이터를 다루기 위한 CRUD 방법 안내'
                    ],
                ],
                [
                    'ClassID' => 128,
                    'Chapters' => [
                        '섹션 0. 파일 스토리지 기능을 사용하는 방법에 대한 안내',
                        '섹션 1. 실전에서 라라벨 서비스 방법',
                    ],
                ],
                [
                    'ClassID' => 129,
                    'Chapters' => [
                        '섹션 0. PHP 라라벨 프레임 워크에 대한 설명과 장단점',
                        '섹션 1. 라라벨 세일로 다운받은 프로젝트의 각 디렉토리 별 역할 안내',
                        '섹션 2. 라라벨에서 sail 명령어 사용법과 도커의 구조 안내',
                        '섹션 3. get, post 같은 웹 페이지 라우팅을 라라벨에서 처리하는 방법',
                    ],
                ],
                [
                    'ClassID' => 130,
                    'Chapters' => [
                        '섹션 0. 컨트롤러와 서비스 컨테이너, 서비스 프로바이더 기능을 나누는 기준 및 사용법 안내',
                        '섹션 1. 페이지를 불러오기 전, 처리 코드 미들웨어에 대한 안내와 소개',
                    ],
                ],
                [
                    'ClassID' => 131,
                    'Chapters' => [
                        '섹션 0. 라라벨에서는 프론트엔드는 어떻게? vue 나 react를 대체할 livewire 설치',
                        '섹션 1. 라라벨 Livewire 프레임워크의 주요 사용코드를 소개',
                        '섹션 2. 데이터베이스 연결과 MVC 패턴을 라라벨에서는 어떻게 구현하는지 에 대한 설명',
                        '섹션 3. 데이터베이스 안의 데이터를 다루기 위한 CRUD 방법 안내'
                    ],
                ],
                [
                    'ClassID' => 132,
                    'Chapters' => [
                        '섹션 0. 파일 스토리지 기능을 사용하는 방법에 대한 안내',
                        '섹션 1. 실전에서 라라벨 서비스 방법',
                    ],
                ],
                [
                    'ClassID' => 133,
                    'Chapters' => [
                        '섹션 0. PHP 라라벨 프레임 워크에 대한 설명과 장단점',
                        '섹션 1. 라라벨 세일로 다운받은 프로젝트의 각 디렉토리 별 역할 안내',
                        '섹션 2. 라라벨에서 sail 명령어 사용법과 도커의 구조 안내',
                        '섹션 3. get, post 같은 웹 페이지 라우팅을 라라벨에서 처리하는 방법',
                    ],
                ],
                [
                    'ClassID' => 134,
                    'Chapters' => [
                        '섹션 0. 컨트롤러와 서비스 컨테이너, 서비스 프로바이더 기능을 나누는 기준 및 사용법 안내',
                        '섹션 1. 페이지를 불러오기 전, 처리 코드 미들웨어에 대한 안내와 소개',
                    ],
                ],
                [
                    'ClassID' => 135,
                    'Chapters' => [
                        '섹션 0. 라라벨에서는 프론트엔드는 어떻게? vue 나 react를 대체할 livewire 설치',
                        '섹션 1. 라라벨 Livewire 프레임워크의 주요 사용코드를 소개',
                        '섹션 2. 데이터베이스 연결과 MVC 패턴을 라라벨에서는 어떻게 구현하는지 에 대한 설명',
                        '섹션 3. 데이터베이스 안의 데이터를 다루기 위한 CRUD 방법 안내'
                    ],
                ],
                [
                    'ClassID' => 136,
                    'Chapters' => [
                        '섹션 0. 파일 스토리지 기능을 사용하는 방법에 대한 안내',
                        '섹션 1. 실전에서 라라벨 서비스 방법',
                    ],
                ],
                [
                    'ClassID' => 137,
                    'Chapters' => [
                        '섹션 0. 강의 소개와 자료',
                        '섹션 1. Hello World',
                        '섹션 3. 연산자',
                        '섹션 4. 조건문',
                    ],
                ],
                [
                    'ClassID' => 138,
                    'Chapters' => [
                        '섹션 0. 반복문',
                        '섹션 1. 스코프, 형변환',
                        '섹션 2. 훈련',
                        '섹션 3. 배열',
                        '섹션 4. 메서드',
                    ],
                ],
                [
                    'ClassID' => 139,
                    'Chapters' => [
                        '섹션 0. 강좌 소개',
                        '섹션 1. 운영 체제 기본',
                        '섹션 2. Java Thread Fundamentals - 스레드 생성 및 실행 구조',
                        '섹션 3. Java Thread Fundamentals - 스레드 기본 API',
                    ],
                ],
                [
                    'ClassID' => 140,
                    'Chapters' => [
                        '섹션 0. Java Thread Fundamentals - 스레드 활용',
                        '섹션 1. Synchronization Fundamentals - 동기화 개념',
                        '섹션 2. Synchronization Fundamentals - 동기화 기법',
                        '섹션 3. Java Synchronization',
                    ],
                ],
                [
                    'ClassID' => 141,
                    'Chapters' => [
                        '섹션 0. Java Locks',
                        '섹션 1. Java 동기화 도구',
                        '섹션 2. 자바 동시성 프레임워크',
                        '섹션 3. ThreadPoolExecutor 이해',
                        '섹션 4. CompletableFuture',
                    ],
                ],
                [
                    'ClassID' => 142,
                    'Chapters' => [
                        '섹션 0. 강의 소개와 자료',
                        '섹션 1. Hello World',
                        '섹션 3. 연산자',
                        '섹션 4. 조건문',
                    ],
                ],
                [
                    'ClassID' => 143,
                    'Chapters' => [
                        '섹션 0. 반복문',
                        '섹션 1. 스코프, 형변환',
                        '섹션 2. 훈련',
                        '섹션 3. 배열',
                        '섹션 4. 메서드',
                    ],
                ],
                [
                    'ClassID' => 144,
                    'Chapters' => [
                        '섹션 0. 강좌 소개',
                        '섹션 1. 운영 체제 기본',
                        '섹션 2. Java Thread Fundamentals - 스레드 생성 및 실행 구조',
                        '섹션 3. Java Thread Fundamentals - 스레드 기본 API',
                    ],
                ],
                [
                    'ClassID' => 145,
                    'Chapters' => [
                        '섹션 0. Java Thread Fundamentals - 스레드 활용',
                        '섹션 1. Synchronization Fundamentals - 동기화 개념',
                        '섹션 2. Synchronization Fundamentals - 동기화 기법',
                        '섹션 3. Java Synchronization',
                    ],
                ],
                [
                    'ClassID' => 146,
                    'Chapters' => [
                        '섹션 0. Java Locks',
                        '섹션 1. Java 동기화 도구',
                        '섹션 2. 자바 동시성 프레임워크',
                        '섹션 3. ThreadPoolExecutor 이해',
                        '섹션 4. CompletableFuture',
                    ],
                ],
                [
                    'ClassID' => 147,
                    'Chapters' => [
                        '섹션 0. 강의 소개와 자료',
                        '섹션 1. Hello World',
                        '섹션 3. 연산자',
                        '섹션 4. 조건문',
                    ],
                ],
                [
                    'ClassID' => 148,
                    'Chapters' => [
                        '섹션 0. 반복문',
                        '섹션 1. 스코프, 형변환',
                        '섹션 2. 훈련',
                        '섹션 3. 배열',
                        '섹션 4. 메서드',
                    ],
                ],
                [
                    'ClassID' => 149,
                    'Chapters' => [
                        '섹션 0. 강좌 소개',
                        '섹션 1. 운영 체제 기본',
                        '섹션 2. Java Thread Fundamentals - 스레드 생성 및 실행 구조',
                        '섹션 3. Java Thread Fundamentals - 스레드 기본 API',
                    ],
                ],
                [
                    'ClassID' => 150,
                    'Chapters' => [
                        '섹션 0. Java Thread Fundamentals - 스레드 활용',
                        '섹션 1. Synchronization Fundamentals - 동기화 개념',
                        '섹션 2. Synchronization Fundamentals - 동기화 기법',
                        '섹션 3. Java Synchronization',
                    ],
                ],
                [
                    'ClassID' => 151,
                    'Chapters' => [
                        '섹션 0. Java Locks',
                        '섹션 1. Java 동기화 도구',
                        '섹션 2. 자바 동시성 프레임워크',
                        '섹션 3. ThreadPoolExecutor 이해',
                        '섹션 4. CompletableFuture',
                    ],
                ],
                [
                    'ClassID' => 152,
                    'Chapters' => [
                        '섹션 0. 강의 소개와 자료',
                        '섹션 1. Hello World',
                        '섹션 3. 연산자',
                        '섹션 4. 조건문',
                    ],
                ],
                [
                    'ClassID' => 153,
                    'Chapters' => [
                        '섹션 0. 반복문',
                        '섹션 1. 스코프, 형변환',
                        '섹션 2. 훈련',
                        '섹션 3. 배열',
                        '섹션 4. 메서드',
                    ],
                ],
                [
                    'ClassID' => 154,
                    'Chapters' => [
                        '섹션 0. 강좌 소개',
                        '섹션 1. 운영 체제 기본',
                        '섹션 2. Java Thread Fundamentals - 스레드 생성 및 실행 구조',
                        '섹션 3. Java Thread Fundamentals - 스레드 기본 API',
                    ],
                ],
                [
                    'ClassID' => 155,
                    'Chapters' => [
                        '섹션 0. 강좌 소개',
                        '섹션 1. 운영 체제 기본',
                        '섹션 2. Java Thread Fundamentals - 스레드 생성 및 실행 구조',
                        '섹션 3. Java Thread Fundamentals - 스레드 기본 API',
                    ],
                ],
                [
                    'ClassID' => 156,
                    'Chapters' => [
                        '섹션 0. Java Thread Fundamentals - 스레드 활용',
                        '섹션 1. Synchronization Fundamentals - 동기화 개념',
                        '섹션 2. Synchronization Fundamentals - 동기화 기법',
                        '섹션 3. Java Synchronization',
                    ],
                ],
                [
                    'ClassID' => 157,
                    'Chapters' => [
                        '섹션 0. Java Locks',
                        '섹션 1. Java 동기화 도구',
                        '섹션 2. 자바 동시성 프레임워크',
                        '섹션 3. ThreadPoolExecutor 이해',
                        '섹션 4. CompletableFuture',
                    ],
                ],
                [
                    'ClassID' => 158,
                    'Chapters' => [
                        '섹션 0. 강의 소개와 자료',
                        '섹션 1. Hello World',
                        '섹션 3. 연산자',
                        '섹션 4. 조건문',
                    ],
                ],
                [
                    'ClassID' => 159,
                    'Chapters' => [
                        '섹션 0. 반복문',
                        '섹션 1. 스코프, 형변환',
                        '섹션 2. 훈련',
                        '섹션 3. 배열',
                        '섹션 4. 메서드',
                    ],
                ],
                [
                    'ClassID' => 160,
                    'Chapters' => [
                        '섹션 0. 강좌 소개',
                        '섹션 1. 운영 체제 기본',
                        '섹션 2. Java Thread Fundamentals - 스레드 생성 및 실행 구조',
                        '섹션 3. Java Thread Fundamentals - 스레드 기본 API',
                    ],
                ],
                [
                    'ClassID' => 161,
                    'Chapters' => [
                        '섹션 0. Java Thread Fundamentals - 스레드 활용',
                        '섹션 1. Synchronization Fundamentals - 동기화 개념',
                        '섹션 2. Synchronization Fundamentals - 동기화 기법',
                        '섹션 3. Java Synchronization',
                    ],
                ],
                [
                    'ClassID' => 162,
                    'Chapters' => [
                        '섹션 0. Java Locks',
                        '섹션 1. Java 동기화 도구',
                        '섹션 2. 자바 동시성 프레임워크',
                        '섹션 3. ThreadPoolExecutor 이해',
                        '섹션 4. CompletableFuture',
                    ],
                ],
                [
                    'ClassID' => 163,
                    'Chapters' => [
                        '섹션 0. 강의 소개와 자료',
                        '섹션 1. Hello World',
                        '섹션 3. 연산자',
                        '섹션 4. 조건문',
                    ],
                ],
                [
                    'ClassID' => 164,
                    'Chapters' => [
                        '섹션 0. 반복문',
                        '섹션 1. 스코프, 형변환',
                        '섹션 2. 훈련',
                        '섹션 3. 배열',
                        '섹션 4. 메서드',
                    ],
                ],
                [
                    'ClassID' => 165,
                    'Chapters' => [
                        '섹션 0. 강좌 소개',
                        '섹션 1. 운영 체제 기본',
                        '섹션 2. Java Thread Fundamentals - 스레드 생성 및 실행 구조',
                        '섹션 3. Java Thread Fundamentals - 스레드 기본 API',
                    ],
                ],
                [
                    'ClassID' => 166,
                    'Chapters' => [
                        '섹션 0. Java Thread Fundamentals - 스레드 활용',
                        '섹션 1. Synchronization Fundamentals - 동기화 개념',
                        '섹션 2. Synchronization Fundamentals - 동기화 기법',
                        '섹션 3. Java Synchronization',
                    ],
                ],
                [
                    'ClassID' => 167,
                    'Chapters' => [
                        '섹션 0. Java Locks',
                        '섹션 1. Java 동기화 도구',
                        '섹션 2. 자바 동시성 프레임워크',
                        '섹션 3. ThreadPoolExecutor 이해',
                        '섹션 4. CompletableFuture',
                    ],
                ],
                [
                    'ClassID' => 168,
                    'Chapters' => [
                        '섹션 0. 강의 소개와 자료',
                        '섹션 1. Hello World',
                        '섹션 3. 연산자',
                        '섹션 4. 조건문',
                    ],
                ],
                [
                    'ClassID' => 169,
                    'Chapters' => [
                        '섹션 0. 반복문',
                        '섹션 1. 스코프, 형변환',
                        '섹션 2. 훈련',
                        '섹션 3. 배열',
                        '섹션 4. 메서드',
                    ],
                ],
                [
                    'ClassID' => 170,
                    'Chapters' => [
                        '섹션 0. 강좌 소개',
                        '섹션 1. 운영 체제 기본',
                        '섹션 2. Java Thread Fundamentals - 스레드 생성 및 실행 구조',
                        '섹션 3. Java Thread Fundamentals - 스레드 기본 API',
                    ],
                ],
                [
                    'ClassID' => 171,
                    'Chapters' => [
                        '섹션 0. Java Thread Fundamentals - 스레드 활용',
                        '섹션 1. Synchronization Fundamentals - 동기화 개념',
                        '섹션 2. Synchronization Fundamentals - 동기화 기법',
                        '섹션 3. Java Synchronization',
                    ],
                ],
                [
                    'ClassID' => 172,
                    'Chapters' => [
                        '섹션 0. 강좌 소개',
                        '섹션 1. 운영 체제 기본',
                        '섹션 2. Java Thread Fundamentals - 스레드 생성 및 실행 구조',
                        '섹션 3. Java Thread Fundamentals - 스레드 기본 API'
                    ],
                ],
                [
                    'ClassID' => 173,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 보고 싶은 데이터 꺼내오기',
                        '섹션 2. 조건에 맞는 데이터 검색하기',
                        '섹션 3. 데이터 순서 정렬하기',
                        '섹션 4. 마무리',
                    ],
                ],
                [
                    'ClassID' => 174,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. DML (Data Manipulation Language)',
                        '섹션 2. ERD (Entity Relationship Diagram)',
                        '섹션 4. 조인 조건이 특이한 문제 풀이',
                    ],
                ],
                [
                    'ClassID' => 175,
                    'Chapters' => [
                        '섹션 0. 윈도우 함수 (Window Functions)',
                        '섹션 1. 정규표현식 (Regular Expressions)',
                        '섹션 2. [심화] 사용자정의함수',
                        '섹션 3. 마무리',
                    ],
                ],
                [
                    'ClassID' => 176,
                    'Chapters' => [
                        '섹션 0. 인트로',
                        '섹션 1. SELECT 기초 - 원하는 정보 가져오기',
                        '섹션 2. SELECT 더 깊이 파보기',
                    ],
                ],
                [
                    'ClassID' => 177,
                    'Chapters' => [
                        '섹션 0. 데이터 조작하기',
                        '섹션 1. MySQL 더 깊이 알아가기',
                        '섹션 2. MySQL 활용 웹사이트 만들기',
                    ],
                ],
                [
                    'ClassID' => 178,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 보고 싶은 데이터 꺼내오기',
                        '섹션 2. 조건에 맞는 데이터 검색하기',
                        '섹션 3. 데이터 순서 정렬하기',
                        '섹션 4. 마무리',
                    ],
                ],
                [
                    'ClassID' => 179,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. DML (Data Manipulation Language)',
                        '섹션 2. ERD (Entity Relationship Diagram)',
                        '섹션 4. 조인 조건이 특이한 문제 풀이',
                    ],
                ],
                [
                    'ClassID' => 180,
                    'Chapters' => [
                        '섹션 0. 윈도우 함수 (Window Functions)',
                        '섹션 1. 정규표현식 (Regular Expressions)',
                        '섹션 2. [심화] 사용자정의함수',
                        '섹션 3. 마무리',
                    ],
                ],
                [
                    'ClassID' => 181,
                    'Chapters' => [
                        '섹션 0. 인트로',
                        '섹션 1. SELECT 기초 - 원하는 정보 가져오기',
                        '섹션 2. SELECT 더 깊이 파보기',
                    ],
                ],
                [
                    'ClassID' => 182,
                    'Chapters' => [
                        '섹션 0. 데이터 조작하기',
                        '섹션 1. MySQL 더 깊이 알아가기',
                        '섹션 2. MySQL 활용 웹사이트 만들기',
                    ],
                ],
                [
                    'ClassID' => 183,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 보고 싶은 데이터 꺼내오기',
                        '섹션 2. 조건에 맞는 데이터 검색하기',
                        '섹션 3. 데이터 순서 정렬하기',
                        '섹션 4. 마무리',
                    ],
                ],
                [
                    'ClassID' => 184,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. DML (Data Manipulation Language)',
                        '섹션 2. ERD (Entity Relationship Diagram)',
                        '섹션 4. 조인 조건이 특이한 문제 풀이',
                    ],
                ],
                [
                    'ClassID' => 185,
                    'Chapters' => [
                        '섹션 0. 윈도우 함수 (Window Functions)',
                        '섹션 1. 정규표현식 (Regular Expressions)',
                        '섹션 2. [심화] 사용자정의함수',
                        '섹션 3. 마무리',
                    ],
                ],
                [
                    'ClassID' => 186,
                    'Chapters' => [
                        '섹션 0. 인트로',
                        '섹션 1. SELECT 기초 - 원하는 정보 가져오기',
                        '섹션 2. SELECT 더 깊이 파보기',
                    ],
                ],
                [
                    'ClassID' => 187,
                    'Chapters' => [
                        '섹션 0. 데이터 조작하기',
                        '섹션 1. MySQL 더 깊이 알아가기',
                        '섹션 2. MySQL 활용 웹사이트 만들기',
                    ],
                ],
                [
                    'ClassID' => 188,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 보고 싶은 데이터 꺼내오기',
                        '섹션 2. 조건에 맞는 데이터 검색하기',
                        '섹션 3. 데이터 순서 정렬하기',
                        '섹션 4. 마무리',
                    ],
                ],
                [
                    'ClassID' => 189,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. DML (Data Manipulation Language)',
                        '섹션 2. ERD (Entity Relationship Diagram)',
                        '섹션 4. 조인 조건이 특이한 문제 풀이',
                    ],
                ],
                [
                    'ClassID' => 190,
                    'Chapters' => [
                        '섹션 0. 윈도우 함수 (Window Functions)',
                        '섹션 1. 정규표현식 (Regular Expressions)',
                        '섹션 2. [심화] 사용자정의함수',
                        '섹션 3. 마무리',
                    ],
                ],
                [
                    'ClassID' => 191,
                    'Chapters' => [
                        '섹션 0. 인트로',
                        '섹션 1. SELECT 기초 - 원하는 정보 가져오기',
                        '섹션 2. SELECT 더 깊이 파보기',
                    ],
                ],
                [
                    'ClassID' => 192,
                    'Chapters' => [
                        '섹션 0. 데이터 조작하기',
                        '섹션 1. MySQL 더 깊이 알아가기',
                        '섹션 2. MySQL 활용 웹사이트 만들기',
                    ],
                ],
                [
                    'ClassID' => 193,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 보고 싶은 데이터 꺼내오기',
                        '섹션 2. 조건에 맞는 데이터 검색하기',
                        '섹션 3. 데이터 순서 정렬하기',
                        '섹션 4. 마무리',
                    ],
                ],
                [
                    'ClassID' => 194,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. DML (Data Manipulation Language)',
                        '섹션 2. ERD (Entity Relationship Diagram)',
                        '섹션 4. 조인 조건이 특이한 문제 풀이',
                    ],
                ],
                [
                    'ClassID' => 195,
                    'Chapters' => [
                        '섹션 0. 윈도우 함수 (Window Functions)',
                        '섹션 1. 정규표현식 (Regular Expressions)',
                        '섹션 2. [심화] 사용자정의함수',
                        '섹션 3. 마무리',
                    ],
                ],
                [
                    'ClassID' => 196,
                    'Chapters' => [
                        '섹션 0. 인트로',
                        '섹션 1. SELECT 기초 - 원하는 정보 가져오기',
                        '섹션 2. SELECT 더 깊이 파보기',
                    ],
                ],
                [
                    'ClassID' => 197,
                    'Chapters' => [
                        '섹션 0. 데이터 조작하기',
                        '섹션 1. MySQL 더 깊이 알아가기',
                        '섹션 2. MySQL 활용 웹사이트 만들기',
                    ],
                ],
                [
                    'ClassID' => 198,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 보고 싶은 데이터 꺼내오기',
                        '섹션 2. 조건에 맞는 데이터 검색하기',
                        '섹션 3. 데이터 순서 정렬하기',
                        '섹션 4. 마무리',
                    ],
                ],
                [
                    'ClassID' => 199,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. DML (Data Manipulation Language)',
                        '섹션 2. ERD (Entity Relationship Diagram)',
                        '섹션 4. 조인 조건이 특이한 문제 풀이',
                    ],
                ],
                [
                    'ClassID' => 201,
                    'Chapters' => [
                        '섹션 0. 윈도우 함수 (Window Functions)',
                        '섹션 1. 정규표현식 (Regular Expressions)',
                        '섹션 2. [심화] 사용자정의함수',
                        '섹션 3. 마무리',
                    ],
                ],
                [
                    'ClassID' => 202,
                    'Chapters' => [
                        '섹션 0. 인트로',
                        '섹션 1. SELECT 기초 - 원하는 정보 가져오기',
                        '섹션 2. SELECT 더 깊이 파보기',
                    ],
                ],
                [
                    'ClassID' => 203,
                    'Chapters' => [
                        '섹션 0. 데이터 조작하기',
                        '섹션 1. MySQL 더 깊이 알아가기',
                        '섹션 2. MySQL 활용 웹사이트 만들기',
                    ],
                ],
                [
                    'ClassID' => 204,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 보고 싶은 데이터 꺼내오기',
                        '섹션 2. 조건에 맞는 데이터 검색하기',
                        '섹션 3. 데이터 순서 정렬하기',
                        '섹션 4. 마무리',
                    ],
                ],
                [
                    'ClassID' => 205,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. DML (Data Manipulation Language)',
                        '섹션 2. ERD (Entity Relationship Diagram)',
                        '섹션 4. 조인 조건이 특이한 문제 풀이',
                    ],
                ],
                [
                    'ClassID' => 206,
                    'Chapters' => [
                        '섹션 0. 윈도우 함수 (Window Functions)',
                        '섹션 1. 정규표현식 (Regular Expressions)',
                        '섹션 2. [심화] 사용자정의함수',
                        '섹션 3. 마무리',
                    ],
                ],
                [
                    'ClassID' => 207,
                    'Chapters' => [
                        '섹션 0. 인트로',
                        '섹션 1. SELECT 기초 - 원하는 정보 가져오기',
                        '섹션 2. SELECT 더 깊이 파보기',
                    ],
                ],
                [
                    'ClassID' => 208,
                    'Chapters' => [
                        '섹션 0. 데이터 조작하기',
                        '섹션 1. MySQL 더 깊이 알아가기',
                        '섹션 2. MySQL 활용 웹사이트 만들기',
                    ],
                ],
                [
                    'ClassID' => 209,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 보고 싶은 데이터 꺼내오기',
                        '섹션 2. 조건에 맞는 데이터 검색하기',
                        '섹션 3. 데이터 순서 정렬하기',
                        '섹션 4. 마무리',
                    ],
                ],
                [
                    'ClassID' => 210,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. DML (Data Manipulation Language)',
                        '섹션 2. ERD (Entity Relationship Diagram)',
                        '섹션 4. 조인 조건이 특이한 문제 풀이',
                    ],
                ],
                [
                    'ClassID' => 211,
                    'Chapters' => [
                        '섹션 0. 윈도우 함수 (Window Functions)',
                        '섹션 1. 정규표현식 (Regular Expressions)',
                        '섹션 2. [심화] 사용자정의함수',
                        '섹션 3. 마무리',
                    ],
                ],
                [
                    'ClassID' => 212,
                    'Chapters' => [
                        '섹션 0. 인트로',
                        '섹션 1. SELECT 기초 - 원하는 정보 가져오기',
                        '섹션 2. SELECT 더 깊이 파보기',
                    ],
                ],
                [
                    'ClassID' => 213,
                    'Chapters' => [
                        '섹션 0. 데이터 조작하기',
                        '섹션 1. MySQL 더 깊이 알아가기',
                        '섹션 2. MySQL 활용 웹사이트 만들기',
                    ],
                ],
                [
                    'ClassID' => 214,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. 보고 싶은 데이터 꺼내오기',
                        '섹션 2. 조건에 맞는 데이터 검색하기',
                        '섹션 3. 데이터 순서 정렬하기',
                        '섹션 4. 마무리',
                    ],
                ],
                [
                    'ClassID' => 215,
                    'Chapters' => [
                        '섹션 0. 오리엔테이션',
                        '섹션 1. DML (Data Manipulation Language)',
                        '섹션 2. ERD (Entity Relationship Diagram)',
                        '섹션 4. 조인 조건이 특이한 문제 풀이',
                    ],
                ],
                [
                    'ClassID' => 216,
                    'Chapters' => [
                        '섹션 0. 윈도우 함수 (Window Functions)',
                        '섹션 1. 정규표현식 (Regular Expressions)',
                        '섹션 2. [심화] 사용자정의함수',
                        '섹션 3. 마무리',
                    ],
                ],
            ];

        foreach ($classes as $class) {
            $classID = $class['ClassID'];
            $chapters = $class['Chapters'];

            foreach ($chapters as $chapterTitle) {
                Chapter::create([
                    'ClassID' => $classID,
                    'ChapterTitle' => $chapterTitle,
                ]);
            }
        }


    }
}
