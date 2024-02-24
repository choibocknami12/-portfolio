1. 최현희 포트폴리오
930624

2. install

vscode 설치 > 한국어 변경
git 설치
vscode 확장프로그램 설치
<php 설치>
    1. https://windows.php.net/download
    2. 아파치 웹서버 사용 목적 VS16 x64 Thread Safe zip파일 다운로드
    3. 경로 : C:\php-8.2.10\
    3. php.ini-development 복사&붙여넣기 > php.ini 파일명 변경
    4. php.ini 주석 해제
    4-1. 198행
        short_open_tag 설정 (php구분 태그인 <?php ?> 를 <? ?>로 작성 가능) 
        short_open_tag = On
    4-2. 767, 768행
        On windows:
        extension_dir = "PHP설치경로/ext"
    4-3. 936행
        extension 관련 설정 주석해제 (필요에 따라 주석 제거)
        extension=mbstring
    4-4. 977행
        시간대 설정
        date.timezone = Asia/Seoul
    5. 시스템 환경 변수 편집 > 환경 변수 > 시스템 변수 > 새로 만들기
    5-1. 변수 이름 : PHP, 변수 값 : PHP 설치한 폴더 경로 ex) C:\php-8.2.10
    5-2. 시스템 변수 > PATH > 새로 만들기 > %PHP% > 확인
    5-3. cmd > php -v 버전 출력시 설치 완료
    5-4. 버전 출력 되지 않고 오류 발생 시 : visual c++ 설치 필요 
        https://learn.microsoft.com/ko-kr/cpp/windows/latest-supported-vc-redist?view=msvc-170#visual-studio-2015-2017-2019-and-2022
<Apache 설치>
    1. https://www.apachelounge.com/download/
    2. Apache 2.4.56 Win64 다운로드
    3. C:\Apache24 압축 해제
    4. conf\httpd.conf 수정
    4-1. 37행
        "Define SRVROOT"를 Apache24를 설치했던 경로로 변경(순서대로 설치했다면 변경 불필요)
    4-2. 227행
        "ServerName" 주석 해제
    4-3. 285행
        index페이지 설정 (PHP연동 관련 설정)
        <IfModule dir_module>
        DirectoryIndex index.php index.html
        </IfModule>
    4-4. 가장 마지막줄에 아래 설정 추가 (PHP연동 관련 설정-다운로드 버전에 따라 변경)
        PHPIniDir "C:/php-8.2.10"
        LoadModule php_module "C:/php-8.2.10/php8apache2_4.dll"
        AddHandler application/x-httpd-php .php
        AddType application/x-httpd-php .php .html
    5. cmd > C:\Apache24\bin\ 이동
    6. httpd -k install
    7. 설치 완료 후 net start apache2.4
    8. 브라우저 localhost 접속, It works! 확인 시 설치 완료
    9. \Apache24\htodcs\phpinfo.php 배치
        <?php
            phpinfo();
    10. 브라우저 localhost/phpinfo.php 접속, php 정보 확인 시 연동 완료
    11. php 정보 전체 선택 복사
    12. https://xdebug.org/wizard > Analyse my phpinfo() output 버튼클릭
    13. Instructions 순서진행
    14. php_xdebug-3.3.1-8.2-vs16-x86_64.dll 다운로드
    15. C:\php-8.2.16\ext 이동 php_xdebug.dll 파일이름 변경
    16. php.ini
    zend_extension = xdebug
    17. Apache 재실행
<mariaDB 설치>
    1. https://mariadb.org/download/
    2. Display older releases 체크 후 목록 확인
    3. 안정화 버전 10.10.6 설치
    4. 비밀번호 설정 후 UTF8 체크 후 다음 단계
    5. TCP port 3307, Buffer pool size 1020MB 설치
    6. sysdm.cpl 실행(시스템 속성)
    7. 고급>환경 변수>시스템 변수>Path
    8. C:\Program Files\MariaDB 10.10\bin 등록
    9. cmd 실행
    9-1.
        mysql -uroot -p mysql
        root 비밀번호 입력
    9-2. show databases; 확인 후 종료
        cf)https://m.blog.naver.com/heartflow89/221074331956
<heid SQL 설치>
    1. https://www.heidisql.com/download.php?download=installer
    2. 서버연결 실행 오류 시 포트 번호 확인
    2-1. 
    show global variables like 'PORT';
    2-2. 포트번호 확인 후 heid SQL에서 포트번호 변경 후 실행
<Laravel 설치>
    1. https://getcomposer.org/download/ 컴포저 설치
    2. cmd > composer 입력 후 설치 확인
    3. php.ini 주석 해제
    3-1. 929행
        extension=fileinfo
    3-2. 935행
        extension=mbstring
    3-3. 941행
        extension=openssl
    3-4. 943행
        extension=pdo_mysql
    3-5. 961행
        extension=zip
    4. C:\Apache24\conf\httpd.conf 설정 변경
    4-1. 251, 252행
        DocumentRoot "${SRVROOT}/htdocs/라라벨 디렉토리명/public"
        <Directory "${SRVROOT}/htdocs/라라벨디렉토리명/public">
    4-2. 162행 주석 해제
        LoadModule rewrite_module modules/mod_rewrite.so
    4-3. Apache 재실행
    4-4. 재실행 되지 않을 시 htdocs 폴더 내 라라벨 디렉토리명/public 생성
    5. composer create-project laravel/laravel="9" 프로젝트명
    6. Laravel 서버 실행
<Vue.js 설치>
    1. https://nodejs.org/en 안정화 버전 설치
    2. 라라벨 디렉토리 내에서 npm install
    3. 라우터 설정 : npm install vue-router@4
    4. 뷰엑스 설치 : npm install vuex@next --save
    5. axios 설치 : npm install axios
    6. 디펜던시 뷰 추가 : npm install --save-dev vue
    7. 모듈 에러 시 : npm install --``save-dev vue-loader
    8. 뷰파일 변경 시 실행 : npm run dev
    9. npm run watch
    10. resources > components > AppComponent.vue 생성
    10-1.
        <template>
            <div>
                <p>test</p>
                <router-view></router-view>
            </div>
        </template>
        <script>
        export default {
            name: 'AppComponent',
        }
        </script>
    11. resources/js/app.js 수정
    11-1. 
        require('./bootstrap');
        import { createApp } from 'vue';
        import router from '../js/router.js';
        import AppComponent from '../components/AppComponent.vue';
        createApp({
            components: {
                AppComponent,
            }
        })
        .use(router)
        .mount('#app');
    12. resources > js > router.js 생성
        import { createWebHistory, createRouter } from 'vue-router';
        import AppComponent from '../components/AppComponent.vue';
        const routes = [
            {
                path: '/',
                component: AppComponent,
            },
        ];
        const router = createRouter({
            history: createWebHistory(),
            routes,
        });
    export default router;
    13. webpack.mix.js 수정
    13-1. 
    mix.js('resources/js/app.js', 'public/js')
        .vue({ version: 3, })
        .postCss('resources/css/app.css', 'public/css', [
            //
        ]);
    13. npm run dev
    14. resources > views
        <!DOCTYPE html>
        <html lang="ko">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
            <script src="{{ asset('js/app.js')}}" defer></script>
        </head>
        <body>
            <div id="app">
                <App-Component></App-Component>
            </div>
        </body>
        </html>
<SCSS 설정 및 tailwind 설치>
    1. resources > sass > app.scss 생성
    2. npm install -D tailwindcss postcss autoprefixer
    3. npx tailwindcss init
    4. tailwind.config.js 내 위치
    /** @type {import('tailwindcss').Config} */
    export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
    }
    5. app.scss 내 위치
    @tailwind base;
    @tailwind components;
    @tailwind utilities;
    6. npm run watch 적용
    7. app.blade.php 내 적용
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    8. Module not found: Error: Can't resolve 'sass-loader' 오류 발생 시
    npm install sass 또는
    npm install sass-loader
    8. npm run watch 적용
    9. 예시
        <template>
            <div>
                <p class="text-8xl test-p">test</p>
            </div>
        </template>
        <script>
        export default {
            name: 'AppComponent',
        }
        </script>
        <style lang="scss">
            @import '../sass/app.scss';
        </style>

