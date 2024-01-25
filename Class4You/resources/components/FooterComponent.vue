<template>
    <div v-if="$route.fullPath.indexOf('classwatch') === -1 && $route.fullPath.indexOf('loading') === -1 && $route.fullPath.indexOf('admin') === -1">
        <footer>
            <div class="footer_main">

                <div class="footer_info">
                    <div class="footer_info_btn_div">
                        <ul class="footer_info_btn">
                            <li>
                                <a href="">
                                    <img src="" alt="">
                                </a>
                            </li>
                            <li>
                                <p>개인정보처리방침 |</p>
                            </li>
                            <li>
                                <p>| 이용약관</p>
                            </li>
                            <!-- <li @click="toggleClass" style="cursor: pointer;">
                                <p>| 프로젝트 설명</p>
                            </li> -->
                        </ul>
                    </div>
                    <div class="footer_info_buttom">
                        <p>(주)그린컴퓨터아카데미 | 대표자: 정명호 | 사업자번호: 001-81-000000 사업자 정보 확인</p>
                        <p>통신판매업: 2023-대구중구중앙로B-0062 | 개인정보보호책임자: 정명호 | 이메일: info@inflearn.com</p>
                        <p>주소: 대구 중구 중앙대로394 제일빌딩 5F</p>
                        <p>©INFLAB. ALL RIGHTS RESERVED</p>
                    </div>
                </div>

                <div class="footer_info_icon">
                    <div class="footer_info_icon_content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                        </svg>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                        </svg>
                    </div>
                </div>

            </div>
        </footer>

        <div class="main_banner_code_full" v-if="teamMembersBox" style="position: fixed; top: 0; z-index: 10000; background-color: #00000073; height: 100vh; width: 100vw;">
            <div style="display: flex; gap: 30px; padding: 50px 10vw; justify-content: center; margin-top: 250px;">
                <div class="main_banner_code_card">
                    <div class="main_banner_code_card-back">
                        <div class="main_banner_code_line-numbers">
                        <div>1</div>
                        <div>2</div>
                        <div>3</div>
                        <div>4</div>
                        <div>5</div>
                        <div>6</div>
                        <div>7</div>
                        <div>8</div>
                        <div>9</div>
                        </div><code><span class="main_banner_code_variable">const </span><span class="main_banner_code_function">aboutMe </span><span class="main_banner_code_operator">= </span><span>{</span>
                        <div class="main_banner_code_indent"> <span class="main_banner_code_property">name</span><span class="main_banner_code_operator">: </span><span class="main_banner_code_string">'정명호'</span><span>,</span></div>
                        <div class="main_banner_code_indent"> <span class="main_banner_code_property">title</span><span class="main_banner_code_operator">: </span><span class="main_banner_code_string">'Jr. Developer'</span><span>,</span></div>
                        <div class="main_banner_code_indent"> <span class="main_banner_code_property">contact</span><span class="main_banner_code_operator">: </span><span>{</span>
                            <div class="main_banner_code_indent"> <span class="main_banner_code_property">email</span><span class="main_banner_code_operator">: </span><span class="main_banner_code_string">'jmh4912@naver.com'</span><span>,</span></div>
                            <div class="main_banner_code_indent"><span class="main_banner_code_property">website</span><span class="main_banner_code_operator">:</span><span class="main_banner_code_string">'https://github.com/iammyeongho'</span></div><span>}</span>
                        </div><span>}</span></code>
                    </div>
                    <div class="main_banner_code_card-front">
                        <div class="main_banner_code_line-numbers">
                        <div>1</div>
                        <div>2</div>
                        <div>3</div>
                        <div>4</div>
                        <div>5</div>
                        <div>6</div>
                        <div>7</div>
                        <div>8</div>
                        <div>9</div>
                        </div><code><span class="main_banner_code_variable">this</span><span>.</span><span class="method">우리를 소개할게요</span><span>(</span><span class="main_banner_code_string">'mouseover'</span><span>, </span><span class="main_banner_code_function">() => </span><span>{ </span>
                        <div class="main_banner_code_indent"><span class="main_banner_code_variable">this</span><span>.</span><span class="main_banner_code_property">flipCard </span><span>= </span><span class="boolean">true</span><span>;</span></div><span>});</span></code>
                    </div>
                </div>
                <div class="main_banner_code_card">
                    <div class="main_banner_code_card-back">
                        <div class="main_banner_code_line-numbers">
                        <div>1</div>
                        <div>2</div>
                        <div>3</div>
                        <div>4</div>
                        <div>5</div>
                        <div>6</div>
                        <div>7</div>
                        <div>8</div>
                        <div>9</div>
                        </div><code><span class="main_banner_code_variable">const </span><span class="main_banner_code_function">aboutMe </span><span class="main_banner_code_operator">= </span><span>{</span>
                        <div class="main_banner_code_indent"> <span class="main_banner_code_property">name</span><span class="main_banner_code_operator">: </span><span class="main_banner_code_string">'최현희'</span><span>,</span></div>
                        <div class="main_banner_code_indent"> <span class="main_banner_code_property">title</span><span class="main_banner_code_operator">: </span><span class="main_banner_code_string">'Jr. Developer'</span><span>,</span></div>
                        <div class="main_banner_code_indent"> <span class="main_banner_code_property">contact</span><span class="main_banner_code_operator">: </span><span>{</span>
                            <div class="main_banner_code_indent"> <span class="main_banner_code_property">email</span><span class="main_banner_code_operator">: </span><span class="main_banner_code_string">'roseok624@gmail.com'</span><span>,</span></div>
                            <div class="main_banner_code_indent"><span class="main_banner_code_property">website</span><span class="main_banner_code_operator">:</span><span class="main_banner_code_string">'https://github.com/choibocknami12'</span></div><span>}</span>
                        </div><span>}</span></code>
                    </div>
                    <div class="main_banner_code_card-front">
                        <div class="main_banner_code_line-numbers">
                        <div>1</div>
                        <div>2</div>
                        <div>3</div>
                        <div>4</div>
                        <div>5</div>
                        <div>6</div>
                        <div>7</div>
                        <div>8</div>
                        <div>9</div>
                        </div><code><span class="main_banner_code_variable">this</span><span>.</span><span class="method">목표는 개발자입니다</span><span>(</span><span class="main_banner_code_string">'mouseover'</span><span>, </span><span class="main_banner_code_function">() => </span><span>{ </span>
                        <div class="main_banner_code_indent"><span class="main_banner_code_variable">this</span><span>.</span><span class="main_banner_code_property">flipCard </span><span>= </span><span class="boolean">true</span><span>;</span></div><span>});</span></code>
                    </div>
                </div>
                <div class="main_banner_code_card">
                    <div class="main_banner_code_card-back">
                        <div class="main_banner_code_line-numbers">
                        <div>1</div>
                        <div>2</div>
                        <div>3</div>
                        <div>4</div>
                        <div>5</div>
                        <div>6</div>
                        <div>7</div>
                        <div>8</div>
                        <div>9</div>
                        </div><code><span class="main_banner_code_variable">const </span><span class="main_banner_code_function">aboutThis </span><span class="main_banner_code_operator">= </span><span>{</span>
                        <div class="main_banner_code_indent"> <span class="main_banner_code_property">name</span><span class="main_banner_code_operator">: </span><span class="main_banner_code_string">'class4You'</span><span>,</span></div>
                        <div class="main_banner_code_indent"> <span class="main_banner_code_property">title</span><span class="main_banner_code_operator">: </span><span class="main_banner_code_string">'onlineClassWebSite'</span><span>,</span></div>
                        <div class="main_banner_code_indent"> <span class="main_banner_code_property">contact</span><span class="main_banner_code_operator">: </span><span>{</span>
                            <div class="main_banner_code_indent"> <span class="main_banner_code_property">period</span><span class="main_banner_code_operator">: </span><span class="main_banner_code_string">'2023.12.04~2024.01.23'</span><span>,</span></div>
                            <div class="main_banner_code_indent"><span class="main_banner_code_property">website</span><span class="main_banner_code_operator">:</span><span class="main_banner_code_string">'http://112.222.157.156:6004/'</span></div><span>}</span>
                        </div><span>}</span></code>
                    </div>
                    <div class="main_banner_code_card-front">
                        <div class="main_banner_code_line-numbers">
                        <div>1</div>
                        <div>2</div>
                        <div>3</div>
                        <div>4</div>
                        <div>5</div>
                        <div>6</div>
                        <div>7</div>
                        <div>8</div>
                        <div>9</div>
                        </div><code><span class="main_banner_code_variable">this</span><span>.</span><span class="method">targetDevelopers</span><span>(</span><span class="main_banner_code_string">'mouseover'</span><span>, </span><span class="main_banner_code_function">() => </span><span>{ </span>
                        <div class="main_banner_code_indent"><span class="main_banner_code_variable">this</span><span>.</span><span class="main_banner_code_property">flipCard </span><span>= </span><span class="boolean">true</span><span>;</span></div><span>});</span></code>
                    </div>
                </div>
            </div>
            <div @click="toggleClass" class="main_banner_code_close">
                <button style="background-color: transparent; color: #fff; border: none; font-weight: 700;">X</button>
            </div>
        </div>
    </div>
</template>
<script>

export default {
    name: 'FooterComponent',

    data() {
        return {
            teamMembersBox: false,
            teamIsToggled: false,
        }
    },

    methods: {
        toggleClass() {
        // 클릭 이벤트 처리 함수
            this.teamMembersBox = !this.teamMembersBox;
        },
    }
}
</script>
<style>

    .main_banner_code_close {
        position: absolute; 
        left: 48%; 
        background-color: #2c3e50; 
        padding: 15px 20px; 
        border: none; 
        border-radius: 100%;
        opacity: 0.5;
        cursor: pointer;
    }

    .main_banner_code_close:hover {
        opacity: 1;
    }
</style>