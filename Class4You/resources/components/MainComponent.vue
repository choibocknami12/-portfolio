<template>
    <div class="wrapper">
        <!-- <LoadingBar :loading="this.$store.state.loadingStatus"></LoadingBar> -->
        <div class="container">
            <main class="contents">
                <div class="main_mrap">
                    <div class="main_banner_box">
                        <div class="main_visual">
                            <div class="main_visual_slider">
                                <div class="main_visual_slider_list">
                                    <div class="main_visual_slider_track">
                                        <div class="main_visual_slider_track_slick">
                                            <div class="main_visual_slider_track_slick_item">
                                                <Carousel ref="carousel" :autoplay="autoplayDuration" :wrap-around="true" @after-slide="updateIndex">
                                                    <Slide v-for="slide in giftItems" :key="slide.id">
                                                        <a href="">
                                                            <img :src="slide.images[0]">
                                                        </a>
                                                    </Slide>
                                                    <!-- <template #addons>
                                                        <Pagination />
                                                        <div style="margin-bottom: 10px;"></div>
                                                    </template> -->
                                                    <template #addons>
                                                        <Navigation />
                                                        <!-- <Pagination /> -->
                                                    </template>
                                                </Carousel>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="main_nav">
                            <div class="main_nav_num_space">
                                <div class="index-wrapper">
                                    <span class="current-index">{{ currentIndex + 1 }}</span>
                                    /
                                    <span class="total-count">{{ giftItems.length }}</span>
                                </div>
                                <div class="control-wrapper">
                                    <button @click="prevSlide">&#60;</button>
                                    <button @click="toggleAutoplay"> {{ autoplay ? '&#124;&#124;' : '≥' }}</button>
                                    <but @click="nextSlide">&#62;</but   ton>
                                </div>
                            </div>
                            <div class="divider"></div>

                            <div class="main_nav_selection">
                                <div class="main_nav_selection_box">
                                    <span class="main_nav_selection_btn mr_10" v-for="(gift, index) in giftItems" :key="index" @click="selectGift(index)">
                                        {{ gift.name }}
                                    </span>
                                </div>
                            </div>
                        </div> -->
                    </div>

                    <!-- <hr style="margin: 0px; padding: 0px;"> -->

                    <div class="desktop-element category-main-app__menu-wrapper vn-grid-medium">
                        <div class="category-menu category-main-app__menu" data-v-fb686d86="">
                            <!-- <h3 element="h3" class="category-menu__title"><b class="category-menu__title-bold">카테고리</b>에 따라 강의를 찾아보세요. 🙋🏻 <span style="font-size: 15px; color:crimson;">GOOD!</span></h3> -->
                            <h3 element="h3" class="category-menu__title"><b class="category-menu__title-bold">카테고리</b>에 따라 강의를 찾아보세요. 👍 <span style="font-size: 15px; color:crimson;">CHOOSE!</span></h3>
                            <ul class="category-menu__list">
                                <li class="category-menu__list-item">
                                    <a :href="'/classboarddetail/' + 100" class="category-menu__link">
                                        <div role="img" class="category-menu__icon common-category-icon common-category-icon--large" style="mask-image: url(&quot;https://storage.googleapis.com/static.fastcampus.co.kr/prod/uploads/202107/043549-406/ico-prog-large.svg&quot;);">
                                        </div> 
                                        <span class="category-menu__text">프로그래밍</span>
                                    </a>
                                </li>
                                <li class="category-menu__list-item">
                                    <a :href="'/classboarddetail/' + 164" class="category-menu__link">
                                        <div role="img" class="category-menu__icon common-category-icon common-category-icon--large" style="mask-image: url(&quot;https://storage.googleapis.com/static.fastcampus.co.kr/prod/uploads/202107/043531-406/ico-data-large.svg&quot;);">
                                        </div>
                                        <span class="category-menu__text">데이터사이언스</span>
                                    </a>
                                </li>
                                <li class="category-menu__list-item">
                                    <a :href="'/classboarddetail/' + 116" class="category-menu__link">
                                        <div role="img" class="category-menu__icon common-category-icon common-category-icon--large" style="mask-image: url(&quot;https://storage.googleapis.com/static.fastcampus.co.kr/prod/uploads/202306/024644-397/icon-category-ai.svg&quot;);">
                                        </div> 
                                        <span class="category-menu__text">인공지능</span>
                                    </a>
                                </li>
                                <li class="category-menu__list-item">
                                    <a :href="'/classboarddetail/' + 6" class="category-menu__link">
                                        <div role="img" class="category-menu__icon common-category-icon common-category-icon--large" style="mask-image: url(&quot;https://storage.googleapis.com/static.fastcampus.co.kr/prod/uploads/202107/043648-406/ico-dgn-large.svg&quot;);">
                                        </div>
                                        <span class="category-menu__text">디자인</span>
                                    </a>
                                </li>
                                <li class="category-menu__list-item">
                                    <a :href="'/classboarddetail/' + 4" class="category-menu__link">
                                        <div role="img" class="category-menu__icon common-category-icon common-category-icon--large" style="mask-image: url(&quot;https://storage.googleapis.com/static.fastcampus.co.kr/prod/uploads/202107/043744-406/ico-video-large.svg&quot;);"></div> 
                                        <span class="category-menu__text">영상/3D</span>
                                    </a>
                                </li>
                                <li class="category-menu__list-item">
                                <a :href="'/classboarddetail/' + 33" class="category-menu__link">
                                    <div role="img" class="category-menu__icon common-category-icon common-category-icon--large" style="mask-image: url(&quot;https://storage.googleapis.com/static.fastcampus.co.kr/prod/uploads/202301/091216-17/brushicon-48.png&quot;);">
                                    </div>
                                        <span class="category-menu__text">일러스트</span>
                                    </a>
                                </li>
                                <li class="category-menu__list-item">
                                    <a :href="'/classboarddetail/' + 12" class="category-menu__link">
                                        <div role="img" class="category-menu__icon common-category-icon common-category-icon--large" style="mask-image: url(&quot;https://storage.googleapis.com/static.fastcampus.co.kr/prod/uploads/202107/043809-406/ico-fin-large.svg&quot;);">
                                        </div> 
                                        <span class="category-menu__text">금융/투자</span>
                                    </a>
                                </li>
                                <li class="category-menu__list-item">
                                    <a :href="'/classboarddetail/' + 19" class="category-menu__link">
                                        <div role="img" class="category-menu__icon common-category-icon common-category-icon--large" style="mask-image: url(&quot;https://storage.googleapis.com/static.fastcampus.co.kr/prod/uploads/202107/043837-406/ico-mktg-large.svg&quot;);">
                                        </div> 
                                        <span class="category-menu__text">마케팅</span>
                                    </a>
                                </li>
                                <li class="category-menu__list-item">
                                    <a :href="'/classboarddetail/' + 21" class="category-menu__link">
                                        <div role="img" class="category-menu__icon common-category-icon common-category-icon--large" style="mask-image: url(&quot;https://storage.googleapis.com/static.fastcampus.co.kr/prod/uploads/202109/110537-317/ico-product-large.svg&quot;);">
                                        </div>
                                        <span class="category-menu__text">업무 생산성</span>
                                    </a>
                                </li>
                                <li class="category-menu__list-item">
                                    <a :href="'/classboarddetail/' + 41" class="category-menu__link">
                                        <div role="img" class="category-menu__icon common-category-icon common-category-icon--large" style="mask-image: url(&quot;https://storage.googleapis.com/static.fastcampus.co.kr/prod/uploads/202306/024711-397/icon-category-bizplan.svg&quot;);">
                                        </div>
                                        <span class="category-menu__text">비즈니스/기획</span>
                                    </a>
                                </li>
                                <li class="category-menu__list-item">
                                    <a :href="'/classboarddetail/' + 1" class="category-menu__link">
                                        <div role="img" class="category-menu__icon common-category-icon common-category-icon--large" style="mask-image: url(&quot;https://storage.googleapis.com/static.fastcampus.co.kr/prod/uploads/202312/163916-397/trophy.svg&quot;);">
                                        </div>
                                        <span class="category-menu__text">2024 명예의전당</span>
                                    </a>
                                </li> 
                            </ul>
                        </div>
                    </div>

                    <div class="main_new_text">
                        <h3>따끈따끈, 신규 강의를 만나보세요! 🙋🏻‍♀️ <span style="font-size: 15px; color:crimson;">NEW!!</span></h3>
                        <a href="#">2024년 당신의 커리어를 책임질  <span style="color:crimson;">LINE-UP</span></a>
                    </div>

                    <div class="main_container_new_box">
                        <ul class="main_container_new">
                            <carousel v-if="$store.state.shouldShowCarousel" :per-page="4" :navigation-enabled="true" :autoplay=0 :transition="500" >
                                <Slide v-for="item in newClassItems" :key="item.id">
                                <div>
                                    <!-- <router-link :to="{ name: 'classboarddetail', params: { ClassID: item.ClassID } }"> -->
                                    <a :href="'/classboarddetail/' + item.ClassID">
                                        <li class="main_container_new_card">
                                            <div class="main_container_new_card_img">
                                                <img :src="item.ClassImg" alt="">
                                            </div>
                                            <div class="main_container_new_card_title">
                                                <h4>{{ item.ClassTitle }}</h4>
                                            </div>
                                            <div class="main_container_new_card_content">
                                                <p>{{ item.ClassDescription }}</p>
                                            </div>
                                            <ul class="main_container_new_card_tag"> 
                                                <li v-for="item2 in item.languages" :key="item2.id">{{ item2.ClassLanguageName }}</li>
                                            </ul>
                                        </li>
                                    </a>
                                    <!-- </router-link> -->
                                </div>
                                </Slide>
                            </carousel>
                                <div v-if="!$store.state.shouldShowCarousel" v-for="item in newClassItems" :key="item.id" href="">
                                    <!-- <router-link :to="{ name: 'classboarddetail', params: { ClassID: item.ClassID } }"> -->
                                    <a :href="'/classboarddetail/' + item.ClassID">
                                        <li class="main_container_new_card">
                                            <div class="main_container_new_card_img">
                                                <img :src=item.ClassImg />
                                                <!-- <img :src="require(`@/img/${item.ClassImg}`)" /> -->
                                            </div>
                                            <div class="main_container_new_card_title">
                                                <h4>{{ item.ClassTitle }}</h4>
                                            </div>
                                            <div class="main_container_new_card_content">
                                                <p>{{ item.ClassDescription }}</p>
                                            </div>
                                            <ul class="main_container_new_card_tag"> 
                                                <li v-for="item2 in item.languages" :key="item2.id"  :class="{'main_container_new_card_tag_HTML': item2.ClassLanguageName === 'HTML',  'main_container_new_card_tag_CSS': item2.ClassLanguageName === 'CSS',  'main_container_new_card_tag_JAVASCRIPT': item2.ClassLanguageName === 'JavaScript', 'main_container_new_card_tag_PHP': item2.ClassLanguageName === 'PHP', 'main_container_new_card_tag_JAVA': item2.ClassLanguageName === 'JAVA', 'main_container_new_card_tag_DATABASE': item2.ClassLanguageName === 'DataBase'}">{{ item2.ClassLanguageName }}</li>
                                            </ul>
                                        </li>
                                    </a>
                                    <!-- </router-link> -->
                                </div>
                        </ul>
                    </div>

                    <!-- <img class="main_banner" src="/img/event_banner_1.png" alt="" style="margin-bottom: 50px;"> -->



                    <div class="main_banner_wrapper">
                            <article class="main_bottum_banner_wrapper">
                                <div class="marquee">
                                    <div class="marquee__group">
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #FF5722;">
                                        <use xlink:href="#mcdonalds" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #1E1E1E;">
                                        <use xlink:href="#jordan" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #cdb710;">
                                        <use xlink:href="#aws" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #056D86;">
                                        <use xlink:href="#spotify" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #7D90C7;"> 
                                        <use xlink:href="#burger-king" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #EC2025;">
                                        <use xlink:href="#honda" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #369AD6;">
                                        <use xlink:href="#notion" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #000;">
                                        <use xlink:href="#hulu" />
                                    </svg>
                                    </div>

                                    <div aria-hidden="true" class="marquee__group">
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #FF5722;">
                                        <use xlink:href="#mcdonalds" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #1E1E1E;">
                                        <use xlink:href="#jordan" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #cdb710;">
                                        <use xlink:href="#aws" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #056D86;">
                                        <use xlink:href="#spotify" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #7D90C7;">
                                        <use xlink:href="#burger-king" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #EC2025;">
                                        <use xlink:href="#honda" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #369AD6;">
                                        <use xlink:href="#notion" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #000;">
                                        <use xlink:href="#hulu" />
                                    </svg>
                                    </div>
                                </div>

                                <div class="marquee marquee--reverse">
                                    <div class="marquee__group">
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #FF5722;">
                                        <use xlink:href="#hulu" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #1E1E1E;">
                                        <use xlink:href="#notion" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #cdb710;">
                                        <use xlink:href="#honda" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #056D86;">
                                        <use xlink:href="#burger-king" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #7D90C7;">
                                        <use xlink:href="#spotify" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #EC2025;">
                                        <use xlink:href="#aws" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #369AD6;">
                                        <use xlink:href="#jordan" />
                                    </svg>
                                    <svg style="background-color: rgb(245, 246, 255); border: 1px solid #000;">
                                        <use xlink:href="#mcdonalds" />
                                    </svg>
                                    </div>

                                    <div aria-hidden="true" class="marquee__group">
                                    <svg>
                                        <use xlink:href="#hulu" />
                                    </svg>
                                    <svg>
                                        <use xlink:href="#notion" />
                                    </svg>
                                    <svg>
                                        <use xlink:href="#honda" />
                                    </svg>
                                    <svg>
                                        <use xlink:href="#burger-king" />
                                    </svg>
                                    <svg>
                                        <use xlink:href="#spotify" />
                                    </svg>
                                    <svg>
                                        <use xlink:href="#aws" />
                                    </svg>
                                    <svg>
                                        <use xlink:href="#jordan" />
                                    </svg>
                                    <svg>
                                        <use xlink:href="#mcdonalds" />
                                    </svg>
                                    </div>
                                </div>
                                </article>

                                <svg style="display: none" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <symbol id="mcdonalds" viewBox="0 0 24 24">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 300.000000 300.000000" preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="#FF5722" stroke="none">
                                        <path d="M200 2953 c0 -26 4 -85 10 -132 5 -47 21 -221 35 -386 14 -165 29 -343 35 -395 5 -52 12 -131 15 -175 3 -44 10 -120 16 -170 5 -49 16 -173 24 -275 9 -102 22 -255 30 -340 7 -85 21 -238 29 -340 9 -102 18 -205 21 -230 3 -25 8 -81 11 -125 l7 -81 101 -27 c55 -15 157 -43 226 -63 69 -20 148 -42 175 -49 28 -7 109 -29 180 -49 72 -20 187 -53 258 -72 l127 -35 128 35 c70 19 186 52 257 72 72 20 153 42 180 49 28 7 109 30 180 50 72 20 173 48 226 63 l96 26 12 140 c35 402 43 494 56 641 8 88 24 264 35 390 11 127 27 304 35 395 8 91 24 271 36 400 11 129 27 309 35 400 8 91 17 202 21 248 l6 82 -1302 0 -1301 0 0 -47z m2126 -556 c-3 -28 -8 -86 -11 -127 -3 -41 -8 -94 -11 -117 l-5 -43 -628 0 -628 0 3 -22 c2 -13 8 -85 15 -160 l12 -138 600 0 600 0 -6 -62 c-9 -94 -45 -507 -56 -643 -6 -66 -15 -168 -22 -226 l-12 -106 -76 -21 c-42 -11 -134 -37 -206 -57 -71 -20 -189 -53 -262 -72 l-132 -36 -133 36 c-73 20 -191 52 -263 72 -71 20 -164 46 -206 58 l-77 20 -11 106 c-6 58 -16 160 -21 226 -5 66 -13 141 -16 168 l-7 47 177 0 176 0 0 -42 c0 -24 5 -86 12 -139 l12 -96 55 -16 c149 -43 287 -79 301 -79 8 0 92 21 186 47 l171 48 12 116 c7 64 15 158 19 209 l8 92 -568 0 c-312 0 -568 3 -568 8 -1 4 -5 52 -10 107 -10 98 -25 260 -54 595 -8 91 -18 195 -22 232 l-7 68 234 2 c129 2 503 2 833 0 l598 -2 -6 -53z"/>
                                        </g>
                                    </svg>
                                    </symbol>

                                    <symbol id="jordan" viewBox="0 0 24 24">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 300.000000 300.000000" preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,300.000000) scale(0.050000,-0.050000)" fill="#1E1E1E" stroke="none">
                                        <path d="M1472 5418 c-407 -61 -754 -396 -843 -813 -42 -197 -42 -2971 0 -3168 82 -387 376 -692 763 -792 211 -54 3025 -54 3236 0 386 99 663 377 762 764 25 102 30 342 30 1619 l0 1500 -49 161 c-105 342 -317 564 -659 689 l-142 52 -1490 3 c-819 2 -1543 -5 -1608 -15z m2273 -935 c392 -193 379 -757 -22 -934 l-83 -37 99 -47 c296 -141 388 -516 189 -775 -217 -285 -669 -257 -846 52 l-59 105 -7 -499 -6 -498 -55 -104 c-252 -478 -955 -302 -955 239 0 213 81 344 280 453 l107 59 -78 32 c-417 174 -413 813 6 950 l86 28 -120 57 c-435 209 -354 859 119 958 192 40 1246 10 1345 -39z"/>
                                        <path d="M3020 3325 l0 -175 59 101 c57 101 156 192 245 228 34 13 -1 19 -129 20 l-175 1 0 -175z"/>
                                        </g>
                                    </svg>
                                    </symbol>

                                    <symbol id="aws" viewBox="0 0 24 24">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 300.000000 301.000000" preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,301.000000) scale(0.100000,-0.100000)" fill="#F7DF1E" stroke="none">
                                        <path d="M0 1505 l0 -1505 1500 0 1500 0 0 1505 0 1505 -1500 0 -1500 0 0 -1505z m2390 125 c78 -15 153 -52 210 -106 57 -53 97 -112 84 -123 -23 -20 -204 -131 -213 -131 -5 0 -17 13 -27 29 -28 48 -90 81 -151 81 -67 0 -106 -19 -127 -64 -20 -42 -20 -56 -1 -103 19 -48 53 -71 196 -134 224 -99 322 -171 372 -272 56 -114 54 -269 -5 -379 -73 -137 -223 -208 -438 -208 -119 0 -184 15 -279 61 -69 34 -171 127 -208 191 l-22 38 22 14 c58 36 198 116 204 116 3 0 30 -26 59 -59 69 -75 130 -103 229 -103 81 0 143 24 171 68 19 29 22 101 5 133 -17 32 -85 73 -216 130 -185 81 -252 126 -316 212 -76 100 -92 283 -35 401 75 157 284 246 486 208z m-760 -542 c0 -578 -1 -587 -56 -689 -61 -111 -174 -169 -346 -177 -92 -4 -118 -1 -175 17 -87 28 -167 83 -220 152 -64 83 -64 83 62 161 61 37 112 68 115 68 3 0 20 -23 38 -51 43 -65 82 -89 150 -89 66 0 105 19 126 64 14 30 16 94 16 555 l0 521 145 0 145 0 0 -532z"/>
                                        </g>
                                    </svg>
                                    </symbol>

                                    <symbol id="spotify" viewBox="0 0 24 24">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 300.000000 300.000000" preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="#056D86" stroke="none">
                                        <path d="M785 2904 c-418 -33 -695 -127 -695 -236 0 -26 49 -77 99 -103 163 -82 444 -127 801 -126 321 0 588 37 749 103 83 34 151 92 151 128 0 90 -206 176 -514 215 -117 15 -488 27 -591 19z"/>
                                        <path d="M90 2354 l0 -157 39 -37 c64 -61 216 -110 451 -147 167 -26 654 -25 825 1 238 36 406 94 459 157 25 30 26 34 26 186 0 85 -3 153 -7 151 -189 -97 -367 -137 -716 -158 -127 -8 -225 -8 -347 -1 -353 22 -535 62 -722 159 -5 2 -8 -67 -8 -154z"/>
                                        <path d="M2395 2350 c-12 -74 -83 -101 -151 -59 l-34 20 -47 -45 -48 -45 23 -40 c12 -22 22 -51 22 -65 0 -38 -40 -78 -86 -85 l-39 -6 0 -70 0 -69 32 -7 c84 -17 113 -76 71 -148 l-23 -40 45 -46 c24 -25 48 -45 53 -45 5 0 20 9 34 20 57 45 134 12 148 -64 l7 -36 69 0 c67 0 69 1 75 28 19 87 79 115 151 71 l35 -22 48 48 48 47 -24 46 c-15 28 -22 53 -18 66 11 36 47 66 86 73 l39 6 -3 70 -3 70 -45 11 c-38 9 -48 17 -64 49 -18 38 -18 38 7 87 l25 48 -48 47 -48 48 -30 -22 c-42 -29 -96 -28 -127 4 -14 13 -25 33 -25 44 0 45 -9 51 -80 51 l-68 0 -7 -40z m165 -230 c150 -77 121 -305 -45 -349 -135 -35 -268 103 -225 234 15 46 65 104 105 121 45 20 120 17 165 -6z"/>
                                        <path d="M90 1915 c1 -104 5 -157 14 -174 67 -121 541 -215 995 -197 376 15 675 84 762 177 l29 31 0 157 0 157 -74 -36 c-86 -42 -238 -82 -411 -107 -171 -25 -659 -25 -830 0 -173 25 -325 65 -411 107 l-74 36 0 -151z"/>
                                        <path d="M90 1465 c0 -151 0 -154 26 -185 63 -74 249 -133 524 -166 117 -13 566 -21 578 -10 2 3 -12 28 -32 56 -20 27 -36 53 -36 57 0 4 56 64 125 133 l126 126 -68 -7 c-415 -47 -926 3 -1160 111 l-83 39 0 -154z"/>
                                        <path d="M1725 1478 c-2 -7 -6 -31 -10 -53 -10 -59 -34 -93 -83 -116 -54 -27 -96 -21 -156 20 -25 17 -48 31 -53 31 -10 0 -153 -142 -153 -153 0 -5 14 -28 30 -51 42 -58 48 -103 21 -158 -25 -52 -49 -69 -121 -83 l-55 -12 -3 -111 -3 -111 38 -6 c73 -13 103 -27 131 -63 41 -53 38 -121 -7 -186 l-34 -48 79 -79 79 -78 55 34 c59 38 100 44 155 21 43 -18 66 -55 80 -125 l12 -56 110 -3 c124 -3 115 -8 128 75 18 115 132 157 236 87 l53 -35 79 79 79 79 -36 53 c-38 55 -45 95 -25 147 22 58 59 82 152 98 l38 6 -3 111 -3 111 -56 12 c-70 14 -101 34 -123 78 -25 54 -20 95 20 160 l36 59 -73 74 c-40 41 -77 74 -82 74 -5 0 -28 -14 -52 -30 -59 -40 -95 -47 -150 -26 -52 20 -81 56 -90 111 -14 80 -5 75 -126 75 -79 0 -111 -3 -114 -12z m251 -416 c58 -30 129 -112 150 -174 23 -70 15 -166 -19 -234 -86 -170 -319 -218 -461 -93 -74 65 -99 117 -104 215 -4 72 -1 89 20 136 31 68 85 123 152 155 44 21 62 24 136 20 62 -2 96 -9 126 -25z"/>
                                        <path d="M90 1016 c0 -149 1 -155 24 -183 79 -93 394 -168 758 -180 l178 -6 0 175 0 176 -127 6 c-378 19 -615 61 -767 137 -33 16 -61 29 -63 29 -1 0 -3 -69 -3 -154z"/>
                                        </g>
                                    </svg>
                                    </symbol>

                                    <symbol id="burger-king" viewBox="0 0 24 24">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 300.000000 300.000000" preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="#7D90C7" stroke="none">
                                        <path d="M347 2989 c-109 -26 -225 -112 -284 -210 -66 -110 -63 -59 -63 -1279 0 -709 4 -1121 11 -1149 37 -162 178 -303 340 -340 28 -7 440 -11 1149 -11 1220 0 1170 -3 1278 63 62 37 127 103 165 167 59 101 57 62 57 1270 0 709 -4 1121 -11 1149 -26 113 -109 228 -210 288 -110 66 -58 63 -1284 62 -614 -1 -1127 -5 -1148 -10z m1197 -958 c5 -8 -8 -86 -29 -177 -5 -21 -1 -21 113 -26 127 -6 177 -20 226 -66 16 -15 34 -40 41 -56 l13 -30 12 60 c6 32 14 67 16 77 5 16 25 17 238 17 280 0 314 -7 386 -79 62 -62 79 -127 61 -241 -20 -129 -82 -227 -182 -287 -75 -45 -155 -63 -276 -63 -98 0 -103 -1 -108 -22 -3 -13 -12 -56 -20 -97 -8 -40 -18 -77 -21 -82 -3 -5 -55 -9 -115 -9 -91 0 -111 3 -116 16 -5 14 10 128 23 176 5 16 -7 18 -108 20 l-113 3 -3 30 c-1 17 13 108 33 204 19 96 35 184 35 197 0 29 -16 34 -106 34 -68 0 -74 -2 -79 -22 -3 -13 -23 -115 -45 -227 -22 -113 -43 -208 -48 -213 -5 -5 -58 -7 -118 -6 l-109 3 1 40 c0 22 4 60 9 85 l8 45 -66 -62 c-92 -86 -145 -105 -310 -111 -120 -4 -128 -6 -132 -26 -3 -11 -12 -54 -20 -95 -8 -40 -18 -77 -21 -82 -3 -5 -57 -9 -120 -9 l-114 0 0 28 c0 42 151 825 162 840 16 19 448 17 514 -3 61 -18 118 -64 145 -117 11 -22 22 -38 25 -36 2 3 20 83 39 179 19 96 37 180 40 187 5 14 230 18 239 3z"/>
                                        <path d="M756 1632 c-6 -10 -56 -245 -56 -265 0 -6 30 -8 79 -5 128 7 180 56 189 180 4 51 2 58 -20 72 -30 20 -182 34 -192 18z"/>
                                        <path d="M2156 1632 c-6 -10 -56 -245 -56 -263 0 -5 31 -9 68 -9 128 0 202 68 202 186 0 46 -4 56 -25 70 -29 19 -179 32 -189 16z"/>
                                        </g>
                                        </svg>
                                    </symbol>

                                    <symbol id="honda" viewBox="0 0 24 24">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300.000000 300.000000" preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="#EC2025" stroke="none">
                                        <path d="M1780 2994 c-8 -2 -168 -24 -355 -49 -187 -24 -392 -52 -455 -61 -63 -8 -293 -39 -510 -68 l-395 -52 -3 -1261 -2 -1260 82 -11 c46 -6 200 -28 343 -47 143 -20 307 -42 365 -50 58 -8 173 -24 255 -35 266 -37 367 -50 513 -70 78 -11 158 -22 177 -26 l35 -6 0 131 0 130 493 3 493 3 36 24 c19 13 46 40 59 59 l24 36 0 1122 0 1122 -31 39 c-66 82 -38 78 -586 81 l-488 3 0 124 c0 133 1 132 -50 119z m1025 -379 l25 -24 0 -1090 0 -1090 -26 -20 c-26 -21 -36 -21 -500 -21 l-474 0 0 334 0 334 173 -5 c313 -10 584 36 596 102 3 19 2 19 -15 4 -61 -52 -435 -86 -652 -59 l-102 12 0 185 0 185 23 -6 c156 -43 486 -23 557 35 l25 21 -25 -6 c-121 -24 -449 -31 -505 -10 -25 10 -12 28 36 47 l44 17 -50 -5 c-27 -3 -62 -8 -77 -11 l-28 -6 0 551 0 551 475 0 476 0 24 -25z m-1300 -800 c72 -19 121 -56 153 -116 20 -37 23 -54 19 -109 -4 -72 -21 -111 -63 -154 -52 -51 -100 -69 -206 -74 l-97 -5 -3 -126 -3 -126 -75 3 c-41 2 -78 6 -82 9 -5 2 -8 157 -8 344 0 262 3 341 13 344 20 8 158 22 227 24 36 0 93 -6 125 -14z m-527 -16 c17 -6 32 -13 32 -15 0 -2 -7 -30 -16 -62 l-16 -58 -51 13 c-66 17 -99 16 -143 -2 -33 -13 -35 -17 -32 -52 3 -37 5 -39 93 -83 115 -57 140 -75 165 -115 68 -110 9 -254 -119 -292 -70 -20 -190 -13 -254 15 l-45 20 15 62 c13 49 19 60 32 54 59 -25 93 -33 141 -34 70 0 100 19 100 64 0 41 -17 57 -105 97 -91 41 -130 72 -154 123 -26 52 -26 98 -2 151 41 92 141 139 271 128 30 -2 70 -9 88 -14z m-480 -266 c-3 -239 -5 -261 -24 -298 -40 -76 -125 -109 -224 -85 -46 11 -51 15 -46 34 3 11 6 36 6 55 l0 33 45 -6 c27 -4 53 -3 65 4 43 23 50 64 50 300 l0 220 66 0 65 0 -3 -257z"/>
                                        <path d="M2311 2240 c-2 -81 -29 -119 -140 -205 -161 -123 -196 -193 -149 -297 23 -49 105 -154 114 -145 3 2 -7 34 -21 71 -14 37 -28 93 -31 124 -6 54 -4 59 28 92 18 19 69 66 112 104 110 97 138 171 101 266 l-13 35 -1 -45z"/>
                                        <path d="M2319 1956 c-102 -60 -139 -103 -139 -162 0 -47 16 -87 58 -142 23 -30 25 -38 15 -73 -13 -48 -2 -50 32 -5 41 54 43 95 6 159 -49 86 -45 108 43 194 41 40 71 73 68 73 -4 0 -41 -20 -83 -44z"/>
                                        <path d="M2535 1573 c-35 -9 -37 -20 -4 -27 98 -19 89 -106 -18 -191 -54 -42 -39 -41 60 3 63 28 107 71 107 106 0 85 -60 129 -145 109z"/>
                                        <path d="M1912 1384 c-12 -8 -22 -19 -22 -24 0 -18 59 -40 135 -51 116 -17 335 21 362 64 4 6 -6 8 -28 4 -88 -16 -270 -28 -328 -22 -79 9 -94 14 -87 31 7 18 -4 18 -32 -2z"/>
                                        <path d="M1944 1246 c-15 -12 -17 -18 -8 -33 17 -28 94 -36 233 -24 106 9 129 14 162 36 22 14 39 27 39 29 0 1 -26 -1 -57 -6 -94 -15 -315 -15 -320 0 -6 16 -25 15 -49 -2z"/>
                                        <path d="M2625 1064 c-11 -8 -56 -26 -100 -41 -74 -24 -98 -26 -330 -32 -236 -6 -245 -7 -160 -16 166 -18 409 -6 517 27 20 6 52 23 70 39 35 28 37 48 3 23z"/>
                                        <path d="M1312 1593 l3 -108 35 -3 c48 -4 110 20 133 51 12 16 20 42 20 68 0 35 -6 48 -32 71 -28 25 -39 28 -96 28 l-66 0 3 -107z"/>
                                        </g>
                                    </svg>
                                    </symbol>

                                    <symbol id="notion" viewBox="0 0 24 24">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 300.000000 300.000000" preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="#369AD6" stroke="none">
                                        <path d="M194 2928 c4 -40 13 -145 21 -233 8 -88 24 -263 35 -390 11 -126 27 -304 35 -395 8 -91 24 -268 35 -395 24 -277 45 -512 65 -740 9 -93 21 -236 29 -318 7 -81 15 -150 18 -153 6 -6 93 -31 353 -104 83 -23 204 -57 270 -75 66 -19 193 -54 283 -80 l163 -45 102 29 c56 16 194 55 307 86 113 31 225 62 250 70 25 7 106 30 180 50 223 61 228 63 234 93 3 15 8 63 11 107 7 87 36 423 60 685 8 91 24 271 35 400 11 129 27 305 35 390 8 85 24 261 35 390 11 129 27 307 35 395 8 88 17 193 21 233 l6 72 -1312 0 -1312 0 6 -72z m2132 -545 c-6 -66 -54 -603 -96 -1078 -31 -347 -50 -538 -53 -542 -5 -4 -104 -33 -410 -117 l-268 -74 -267 74 c-298 82 -404 113 -408 117 -4 3 -31 275 -39 387 -3 47 -8 97 -11 113 l-6 27 170 0 170 0 7 -97 c4 -54 10 -116 14 -137 l6 -40 182 -49 182 -49 183 49 183 49 6 35 c4 19 15 106 24 194 8 88 18 176 21 195 l5 35 -583 0 -582 0 -17 155 c-9 85 -16 156 -15 157 2 2 277 6 612 10 l611 6 11 151 c7 83 12 159 12 169 0 18 -23 19 -637 16 l-638 -3 -6 44 c-3 25 -9 96 -13 158 l-7 112 831 0 832 0 -6 -67z"/>
                                        </g>
                                    </svg>
                                    </symbol>

                                    <symbol id="hulu" viewBox="0 0 24 24">
                                    <path fill="#000" d="M4.459 4.208c.746.606 1.026.56 2.428.466l13.215-.793c.28 0 .047-.28-.046-.326L17.86 1.968c-.42-.326-.981-.7-2.055-.607L3.01 2.295c-.466.046-.56.28-.374.466zm.793 3.08v13.904c0 .747.373 1.027 1.214.98l14.523-.84c.841-.046.935-.56.935-1.167V6.354c0-.606-.233-.933-.748-.887l-15.177.887c-.56.047-.747.327-.747.933zm14.337.745c.093.42 0 .84-.42.888l-.7.14v10.264c-.608.327-1.168.514-1.635.514-.748 0-.935-.234-1.495-.933l-4.577-7.186v6.952L12.21 19s0 .84-1.168.84l-3.222.186c-.093-.186 0-.653.327-.746l.84-.233V9.854L7.822 9.76c-.094-.42.14-1.026.793-1.073l3.456-.233 4.764 7.279v-6.44l-1.215-.139c-.093-.514.28-.887.747-.933zM1.936 1.035l13.31-.98c1.634-.14 2.055-.047 3.082.7l4.249 2.986c.7.513.934.653.934 1.213v16.378c0 1.026-.373 1.634-1.68 1.726l-15.458.934c-.98.047-1.448-.093-1.962-.747l-3.129-4.06c-.56-.747-.793-1.306-.793-1.96V2.667c0-.839.374-1.54 1.447-1.632z" />
                                    </symbol>
                                </defs>
                                </svg>
                        </div>



                        
                    <div class="main_new_text">
                        <h3>기본부터 실무까지 제시해주는 로드맵 🏃🏻‍♀️ <span style="font-size: 15px; color:crimson;">RoadMap!!</span></h3>
                        <a href="#">Class 4 You의 대표 강의들을 만나보세요.</a>
                    </div>

                    <div class="main_container_hot_box">
                        <ul class="main_container_hot">

                            <carousel v-if="$store.state.shouldShowCarousel" :per-page="4" :navigation-enabled="true" :autoplay=0 :transition="500" >
                                <Slide v-for="item in hot_banners" :key="item.id">
                                    <a :href="item.url">
                                        <li class="main_container_hot_card">
                                            <div class="main_container_hot_card_img">
                                                <img :src="item.img" alt="">
                                            </div>
                                        </li>
                                    </a>
                                </Slide>
                            </carousel>
                            
                            <a v-if="!$store.state.shouldShowCarousel" v-for="item in hot_banners" :key="item.id" :href="item.url">
                                <li class="main_container_hot_card">
                                    <!-- <div class="main_container_hot_card_img"> -->
                                        <img :src="item.img" alt="">
                                    <!-- </div> -->
                                    <div class="main_container_hot_card_text">
                                        <h2 data-splitting="">{{ item.title }}</h2>
                                        <p data-splitting="" v-html="item.content"></p>
                                    </div>
                                </li>
                                
                            </a>
                        </ul>
                    </div>
                    


                        <img class="main_banner" src="/img/event_banner_2.png" alt="">


                    <div class="main_new_text">
                        <h3>뭘 배워할지 모르는 당신을 위한 학습 가이드 🏃🏻‍♀️ <span style="font-size: 15px; color:crimson;">guide!!</span></h3>
                        <a href="#">내게 딱 맞는 학습 순서가 궁금하다면?</a>
                    </div>

                    <div class="main_container_keyword_box">
                        <ul class="main_container_keyword">
                            <carousel v-if="$store.state.shouldShowCarousel" :per-page="4" :navigation-enabled="true" :autoplay=0 :transition="500" >
                                <Slide v-for="item in guide_banners" :key="item.id">
                                    <a :href="item.url">
                                        <li class="main_container_keyword_card">
                                            <div class="main_container_keyword_card_img">
                                                <img :src="item.img" alt="">
                                            </div>
                                        </li>
                                    </a>
                                </Slide>
                            </carousel>

                            <a v-if="!$store.state.shouldShowCarousel" v-for="item in guide_banners" :key="item.id" :href="item.url">
                                <li class="main_container_keyword_card">
                                    <div class="main_container_keyword_card_img">
                                        <img :src="item.img" alt="">
                                    </div>
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
            </main>
        </div>

        

    </div>
</template>
<script>

import { defineComponent } from "vue";
import { Carousel, Pagination, Slide, Navigation } from "vue3-carousel";
import LoadingBar from './LoadingComponent';
import axios from 'axios'
// import Swal from 'sweetalert2';

import "vue3-carousel/dist/carousel.css"; 



export default {
    name: 'MainComponent',

    components: {
		Carousel,
		Slide,
		Pagination,
        Navigation,
        LoadingBar
	},
    // href="/classBoard/HTML"
    data() {
        return {
            newClassItems: [],
            // hot_banners: ['/img/hot_banner/hot_banner_1.png', '/img/hot_banner/hot_banner_2.png', '/img/hot_banner/hot_banner_3.png', '/img/hot_banner/hot_banner_4.png', '/img/hot_banner/hot_banner_5.png', '/img/hot_banner/hot_banner_6.png', '/img/hot_banner/hot_banner_7.png' , '/img/hot_banner/hot_banner_8.png'],
            
            // 배너 데이터 바인딩
            hot_banners: [
                { url: ['/classboarddetail/5'], img: ['/img/hot_banner/hot_banner_1.png'], title: '백엔드 웹 개발', content: '이 강의는 학습자들에게 다양한 백엔드 웹 개발 기술을 익히고 적용할 수 있는 기회를 제공하는 강의입니다. 이 강의는 실제 프로젝트를 통해 개념을 학습하고 즉시 실전 경험을 쌓을 수 있도록 구성되어 있습니다. 아래는 강의의 주요 특징과 내용에 대한 설명입니다:'},
                { url: ['/classboarddetail/5'], img: ['/img/hot_banner/hot_banner_2.png'], title: '디지털 마케팅', content: '이 강의는 디지털 마케팅의 핵심 원리와 전략을 한눈에 이해할 수 있는 커리큘럼을 제공합니다. 검색 엔진 최적화(SEO), 소셜 미디어 마케팅, 이메일 마케팅 등 다양한 디지털 마케팅 전략과 도구를 다룹니다.'},
                { url: ['/classboarddetail/5'], img: ['/img/hot_banner/hot_banner_3.png'], title: '초격차 UX / UI ', content: '이 강의는 사용자 경험(UX) 및 사용자 인터페이스(UI) 디자인의 기초를 다룹니다. 디자인 프로세스, 웹 및 앱 디자인, 사용자 테스트 등을 포괄적으로 다루며, 참가자들은 실제 프로젝트를 수행하면서 학습합니다.'},
                { url: ['/classboarddetail/5'], img: ['/img/hot_banner/hot_banner_4.png'], title: '필수 스킬 모음', content: '이 강의는 직장생활에서 필요한 다양한 기술과 소프트 스킬을 다룹니다. 업무 효율성, 프로젝트 관리, 커뮤니케이션 등 다양한 주제를 포함합니다.'},
                { url: ['/classboarddetail/5'], img: ['/img/hot_banner/hot_banner_5.png'], title: '딥러닝 인공지능', content: '이 강의는 딥러닝과 인공지능의 기초 이론을 다루며, 신경망 구조, 학습 알고리즘 등에 대한 이해를 제공합니다.'},
                { url: ['/classboarddetail/5'], img: ['/img/hot_banner/hot_banner_6.png'], title: '초격차 디자인 툴', content: 'Adobe Creative Cloud, Sketch, Figma 등 주요 디자인 툴의 사용법을 상세하게 다룹니다.'},
                { url: ['/classboarddetail/5'], img: ['/img/hot_banner/hot_banner_7.png'], title: '로드맵 마스터', content: '이 강의는 프론트엔드 웹 개발에 필요한 HTML, CSS, JavaScript의 기초부터 시작하여, React, Vue, Angular 등의 프레임워크를 다룹니다.'},
                { url: ['/classboarddetail/5'], img: ['/img/hot_banner/hot_banner_8.png'], title: '모션 그래픽', content: '이 강의는 모션 그래픽 디자인의 기초부터 고급 기술까지 포괄적으로 다루며, 참가자들이 다이내믹하고 효과적인 모션 그래픽을 만들 수 있도록 합니다.'},
            ],
            
            // guide_banners: ['/img/guide/html.png', '/img/guide/css.png', '/img/guide/js.png', '/img/guide/php.png', '/img/guide/java.png', '/img/guide/db.png', '/img/guide/jira.png', '/img/guide/figma.png',],

            // 가이드 배너 데이터 바인딩
            guide_banners: [
                { url: ['/classBoard/HTML'], img: ['/img/guide/html.png']},
                { url: ['/classBoard/CSS'], img: ['/img/guide/css.png']},
                { url: ['/classBoard/JavaScript'], img: ['/img/guide/js.png']},
                { url: ['/classBoard/PHP'], img: ['/img/guide/php.png']},
                { url: ['/classBoard/JAVA'], img: ['/img/guide/java.png']},
                { url: ['/classBoard/DataBase'], img: ['/img/guide/db.png']},
                { url: ['/classBoard/HTML'], img: ['/img/guide/jira.png']},
                { url: ['/classBoard/HTML'], img: ['/img/guide/figma.png']},
            ],

            autoplay: true,
            autoplayDuration: 2500,
            giftItems: [
                { id: 1, name: "갑코 채용", images: ['/img/banner/banner1.png'] },
                { id: 2, name: "코딩 역량 인증 시험", images: ['/img/banner/banner2.png'] },
                { id: 3, name: "크래프톤", images: ['/img/banner/banner3.png'] },
                { id: 4, name: "데브코스 (부트캠프)", images: ['/img/banner/banner4.png'] },
                { id: 4, name: "이벤트 배너", images: ['/img/banner/banner6.png'] },
                { id: 4, name: "이벤트 배너", images: ['/img/banner/banner7.png'] },
            ],
            selectedGiftId: null,
            currentIndex: 0,
            teamMembersBox: false,
            teamIsToggled: false,
        }
    },
    mounted() {
        this.fetchData();
        this.checkWindowWidth();
        // 윈도우 크기에 따라서 캐러셀 적용
        window.addEventListener('resize', this.checkWindowWidth);
    },
    beforeDestroy() {
        window.removeEventListener('resize', this.checkWindowWidth);
    },
    methods: {
        fetchData() {
        axios.get('/getNewClassMainData')
            .then(response => {
                // console.log(response);
                this.newClassItems = response.data;
                // return axios.get('/getUserData');
            })
            // .then(response2 => {
            //     if (response2.data.userChk) {
            //         Swal.fire({
            //             icon: 'success',
            //             title: '로그인 성공',
            //             text: '로그인에 성공했습니다.',
            //             confirmButtonText: '확인'
            //         })
            //         console.log(response2);
            //         this.$store.commit('setSaveToLocalStorage', response2.data);
            //         this.$store.commit('setUserLoginChk', response2.data.sessionDataCheck);
            //         this.$store.commit('setUserID', response2.data.userId);
            //     }
            // })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
        },
        selectGift(gift) {
            this.selectedGiftId = gift;
        },
        prevSlide() {
            this.$refs.carousel.prev();
        },
        nextSlide() {
            this.$refs.carousel.next();
        },
        toggleAutoplay() {
            this.autoplay = !this.autoplay;
            this.autoplayDuration = this.autoplay ? 3000 : 0;
        },
        updateIndex(index) {
            this.currentIndex = index;
        },
        checkWindowWidth() {
            this.$store.dispatch('checkWindowWidth');
        },
        // handleClassImageClick(classId) {
        //     const url = '/classBoardDetail/${classId}'
        //     const header = {
        //         headers: {
        //             "Content-Type": 'application/json',
        //             // 'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
        //         },
        //     }
        //     axios.get(url, header)
        //     .then(response => {
        //     const detailData = response.data;

        //     // 프로그래밍 방식으로 라우터를 통해 디테일 페이지로 이동
        //     this.$router.push({
        //             name: 'classboarddetail', // 디테일 페이지의 라우터 이름
        //             params: {
        //             id: classId,
        //             // 기타 필요한 파라미터들...
        //             },
        //             query: {
        //             },
        //         });
        //     })
        //     .catch(error => {
        //     console.error('API 요청 실패:', error);
        //     });
        // },
    }
}
</script>
<style>
.carousel__item {
    color: var(--vc-clr-white);
    margin: 0px;
    padding: 0px;
	font-size: 20px;
	border-radius: 8px;
	display: flex;
	justify-content: center;
	align-items: center;
}

.carousel__slide {
    margin: 0px;
    padding: 0px;
    display: block;
    width: 100%;
}

.carousel__pagination {
    position: absolute;
    bottom: 0px;
    background-color: rgba(255,255,255, 0.2);
    padding: 5px;
    width: 100%;
}

.carousel__pagination-button::after {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin: 0 5px;
    background-color: #bbb;
    border-radius: 50%;
    cursor: pointer;
}

.carousel__pagination-button:hover::after, .carousel__pagination-button--active::after {
    background-color: var(--vc-pgn-active-color);
}

.carousel__prev,
.carousel__next {
    box-sizing: content-box;
    /* border: 5px solid white; */
    /* font-size: 300px; */
}

.carousel__icon {
    color: #fff;
}

@media screen and (max-width: 1000px) {
    .carousel__pagination {
        padding: 3px;
    }
}

@media screen and (max-width: 450px) {
    .carousel__pagination {
        padding: 0px;
    }

    .carousel__pagination-button::after {
        width: 5px;
        height: 5px;
    }
}
.carousel__next {
    width: 150px;
    height: 150px;
    font-size: 250px;
    opacity: 0.3;
}

.carousel__next:hover {
    color: #fff;
    width: 150px;
    height: 150px;
    font-size: 250px;
    opacity: 0.8;
}

.carousel__prev {
    width: 150px;
    height: 150px;
    font-size: 250px;
    opacity: 0.3;
}

.carousel__prev:hover {
    color: #fff;
    width: 150px;
    height: 150px;
    font-size: 250px;
    opacity: 0.8;
}

@media screen and (max-width: 800px) {
    .carousel__next {
        width: 80px;
        height: 80px;
        font-size: 250px;
        opacity: 0.3;
    }

    .carousel__prev {
        width: 80px;
        height: 80px;
        font-size: 250px;
        opacity: 0.3;
    }
}




</style>