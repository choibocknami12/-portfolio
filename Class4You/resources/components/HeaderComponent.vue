<template>
    <div class="Header_box_bg" v-if="$route.fullPath.indexOf('classwatch') === -1 && $route.fullPath.indexOf('loading') === -1 && $route.fullPath.indexOf('admin') === -1">

    </div>
    <div class="Header_box" v-if="$route.fullPath.indexOf('classwatch') === -1 && $route.fullPath.indexOf('loading') === -1 && $route.fullPath.indexOf('admin') === -1">
    <!-- <div v-if="$route.fullPath !== '/classwatch/' && $route.fullPath !== '/classwatch'"> -->
            <div id="top_banner" class="top_banner">
                <div class="desc">
                    <ul id="list_txt" class="list_txt">
                        <Carousel ref="carousel" :autoplay="autoplayDuration" :wrap-around="true">
                            <Slide v-for="slide in top_banners" :key="slide.id">
                                <li><a href="">{{ slide }}</a></li>
                            </Slide>
                        </Carousel>
                    </ul>
                </div>
            </div>

        <header id="header" style="border-bottom: 0.5px solid rgba(114, 114, 114, 0.1); background-color: #fff;">
            <div class="navigation">
                <ul class="nav_left side_nav">
                    <!-- <li><a href="" class="menu_btn"><img src="/img/menu.png" alt="">전체 강의</a>
                        <ul class="dropdown">
                            <li><a href="/classBoard/HTML">HTML</a></li>
                            <li><a href="/classBoard/CSS">CSS</a></li>
                            <li><a href="/classBoard/JavaScript">Java Script</a></li>
                            <li><a href="/classBoard/PHP">PHP</a></li>
                            <li><a href="/classBoard/JAVA">JAVA</a></li>
                            <li><a href="/classBoard/DataBase">DataBase</a></li>
                        </ul>
                    </li> -->
                    
                <div class="header_dropdown_box_container">
                    <button class="header_dropdown_box_btn"><span>FULL LECTURE</span><i class="header_dropdown_box_material-icons" ></i>
                    <ul class="header_dropdown_box_dropdown">
                        <li><a href="/classBoard/HTML">HTML</a></li>
                            <li><a href="/classBoard/CSS">CSS</a></li>
                            <li><a href="/classBoard/JavaScript">Java Script</a></li>
                            <li><a href="/classBoard/PHP">PHP</a></li>
                            <li><a href="/classBoard/JAVA">JAVA</a></li>
                            <li><a href="/classBoard/DataBase">DataBase</a></li>
                    </ul>
                    </button>
                </div>

                    <!-- <li><a href="">추천 강의</a></li> -->
                    <!-- <li><a href="">신규 강의</a></li> -->
                    <li>|</li>
                    <li><a href="/board" style="font-weight: 800;">COMMUNITY</a></li>
                    <!-- <button type="button" @click="logoutWithKakao" style="cursor: pointer;">카카오톡 로그아웃</button> -->
                </ul>
                <h1>
                    <a href="/">
                        <img src="/img/Logo.png" alt="">
                    </a>
                </h1>
                <div v-if="!$store.state.userLoginChk" class="side_nav">
                    <!-- <router-link to="/registration">SIGN UP</router-link> -->
                    <a href="/registration" style="font-weight: 800;">SIGN UP</a>
                    <a @click="loginOpenModal" style="cursor: pointer; font-weight: 800;">LOGIN</a>
                    <!-- <div class="search_box">
                        <input type="text" placeholder="SEARCH">
                        <button><img src="/img/SEARCH.png" alt=""></button>
                    </div> -->
                </div>
                <div v-if="$store.state.userLoginChk" class="side_nav">
                    <!-- <router-link to="/">MY PAGE</router-link> -->
                    <a href="/usermypage" style="font-weight: 800;">MY PAGE</a>
                    <a @click="logout" style="cursor: pointer; font-weight: 800;">LOGOUT</a>
                    <!-- <div class="search_box">
                        <input type="text" placeholder="SEARCH">
                        <button><img src="/img/SEARCH.png" alt=""></button>
                    </div> -->
                </div>
            </div>
        </header>

        <div class="login_modal_bk" v-if="loginShowModal">
            <div class="login_modal">
                <div class="login_modal_cancel">
                    <img style="cursor: pointer;" src="/img/modal_cancel.png" alt="" @click="loginCloseModal">
                </div>
                <div class="login_modal_logo">
                    <img src="/img/Logo.png" alt="">
                </div>
                <div class="login_modal_input_box">
                    <input type="email" placeholder="이메일" name="UserEmail" v-model="frmUserLoginData.UserEmail">
                    <input type="password" placeholder="비밀번호" name="UserPassword" v-model="frmUserLoginData.UserPassword">
                </div>
                <div class="login_error_message"></div>
                <div class="login_modal_button">
                    <button type="button" @click="submitUserLoginData()" style="cursor: pointer;">로그인</button>
                </div>
                <div class="login_modal_find_box">
                    <span><a @click="findPassword()">비밀번호 찾기</a></span>
                    <span>&#124;</span>
                    <span><a href="/registration">회원가입 하기</a></span>
                </div>
                <div class="login_modal_easy_box">
                    <p>간편 로그인</p>
                </div>
                <div class="login_modal_button">
                    <button type="button" @click="loginWithKakao" style="cursor: pointer; background-color: #F7E600; color: #3A1D1D ;">카카오톡 로그인</button>
                </div>
            </div>

        </div>

        <div  @click="scrollToTop" class="header_top_btn_cta__wrapper">
            <div class="header_top_cta__button">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4e81f8" class="bi bi-triangle-half header_top_cta__svg" viewBox="0 0 16 16">
                <path d="M8.065 2.016A.13.13 0 0 0 8.002 2v11.983l6.856.017a.12.12 0 0 0 .066-.017.162.162 0 0 0 .054-.06.176.176 0 0 0-.002-.183L8.12 2.073a.146.146 0 0 0-.054-.057zm-1.043-.45a1.13 1.13 0 0 1 1.96 0l6.856 11.667c.458.778-.091 1.767-.98 1.767H1.146c-.889 0-1.437-.99-.98-1.767L7.022 1.566z"/>
            </svg>
            </div>
        </div>
    </div>
</template>
<script>
import { defineComponent } from "vue";
import { Carousel, Pagination, Slide, Navigation } from "vue3-carousel";
import Swal from 'sweetalert2';


import "vue3-carousel/dist/carousel.css"; 
import { result } from "lodash";
export default {
    name: 'HeaderComponent',

    components: {
		Carousel,
		Slide,
		Pagination,
        Navigation
	},

    data() {
        return {
            // loginShowModal: false,

            frmUserLoginData: {
                UserEmail: '',
                UserPassword: '',
            },

            top_banners: ['새로운 온라인 클래스 오픈', '풀스택 개발자를 위한 과정', '지금 결제 시 무료 강의 오픈', '오픈 찬스 지금 당장 확인하세요',],
            autoplay: true,
            autoplayDuration: 5000,
            loginClickFlgTab: 1,
            userEmailChk: {},
            userEmailData: {},
            showScrollButton: false,
        }
    },

    created() {
        this.loadUserLoginStatus();

    },

    beforeDestroy() {
        window.removeEventListener('scroll', this.handleScroll);
    },
    mounted() {
        axios.get('/getUserData')
        .then(response2 => {
            if (response2.data.userChk) {
                Swal.fire({
                    icon: 'success',
                    title: '로그인 성공',
                    text: '로그인에 성공했습니다.',
                    confirmButtonText: '확인'
                })
                // console.log(response2);
                this.$store.commit('setSaveToLocalStorage', response2.data);
                this.$store.commit('setUserLoginChk', response2.data.sessionDataCheck);
                this.$store.commit('setUserID', response2.data.userId);
            }

            
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
        window.addEventListener('scroll', this.handleScroll);
    },

    computed: {
        loginShowModal() {
            return this.$store.state.loginShowModal;
        },
    },

    methods: {
        scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        },
        handleScroll() {
            this.showScrollButton = window.scrollY > 100;
        },
        loginOpenModal() {
            this.$store.commit('setOpenLoginModal');
        }, 
        loginCloseModal() {
            this.$store.commit('setCloseLoginModal');
        },
        submitUserLoginData() {
            this.$store.dispatch('submitUserLoginData', this.frmUserLoginData);
        },
        logout() {
            this.$store.dispatch('logout');
            localStorage.clear();
        },
        loadUserLoginStatus() {
            const userLoginChk = localStorage.getItem('userCheck');
            const UserID = localStorage.getItem('UserID');
            if (userLoginChk !== null) {
                this.$store.commit('setUserLoginChk', userLoginChk);
                this.$store.commit('setUserID', UserID);
            }
        },
        loginWithKakao() {
            // axios.get('/login/kakao/callback')
            // .then(response => {
            //     // 서버에서 받은 응답(response)을 이용한 로직 수행
            //     console.log(response.data);

            //     // 리다이렉션 등 필요한 작업 수행
            //     if (response.data.success) {
            //     // 로그인이 성공하면 홈페이지로 이동
            //     this.$router.push('/');
            //     } else {
            //     // 로그인 실패 등의 경우 처리
            //     alert('로그인에 실패했습니다.');
            //     }
            // })
            // .catch(error => {
            //     // 오류 처리
            //     console.error('에러 발생:', error);
            // });
            location.href='/login/kakao?before_url=' + window.location.pathname;
            
        },
        logoutWithKakao() {
            location.href='/logout/kakao/callback';
        },
        findPassword() {
            this.$store.state.loginShowModal = false;
            Swal.fire({
                icon: 'info', // 추가: 아이콘 설정
                title: '이메일 입력',
                input: 'email',
                inputLabel: '-',
                inputPlaceholder: '인증번호를 받을 이메일을 입력해주세요',
                showCancelButton: true,
                cancelButtonText: '취소',
                confirmButtonText: '인증번호 전송',
                showLoaderOnConfirm: true,
                preConfirm: (verificationCode) => {
                    return new Promise((resolve) => {
                        setTimeout(() => {
                            resolve(verificationCode);
                        }, 3000);
                        this.userEmailData = verificationCode;
                        const url = '/emailChkSubmit';
                        const header = {
                            headers: {
                            'Content-Type': 'multipart/form-data',
                            }
                        };
                        const formData = new FormData();
                            formData.append('email', verificationCode);
                            axios.post(url,formData, header)
                        .then(res => {
                            // console.log(res.data);
                            if(res.data.success === false) {
                                    this.userEmailChk = false;
                                    Swal.fire({
                                    icon: 'warning', // 추가: 아이콘 설정
                                    title: '에러',
                                    text: '존재하지 않는 이메일입니다.',
                                    confirmButtonText: 'Close',
                                });
                            }
                        })
                        .catch(err => {

                        })
                    });
                }
            }).then((result) => {
                    if (this.userEmailChk && !result.dismiss && result.value) {
                        // console.log(result.value);
                        Swal.fire({
                            icon: 'info',
                            title: '인증번호 입력',
                            html:
                            '<div class="swal2-div">' +
                                '<input id="verificationCodeInput" class="swal2-input email_chk_swal2_input" placeholder="인증번호를 입력해주세요.">' +
                                '<button style="cursor:pointer;" type="button" id="resendButton" class="swal2-confirm email_chk_swal2_confirm">재전송</button>' +
                            '</div>',
                            showCancelButton: true,
                            cancelButtonText: '취소',
                            confirmButtonText: '인증',
                            showLoaderOnConfirm: true,
                            didOpen: (modalElement) => {
                                const resendButton = modalElement.querySelector('#resendButton');
                                // 재전송 버튼에 클릭 이벤트 추가
                                resendButton.addEventListener('click', () => {
                                    resendButton.style.opacity = "0.3";
                                    resendButton.style.pointerEvents = "none";
                                    
                                    setTimeout(() => {
                                        resendButton.style.opacity = "1";
                                        resendButton.style.pointerEvents = "auto";
                                        // 재전송 버튼 클릭 시 동작 처리
                                        axios.put('/tokenChkUpdate', {
                                            params: {
                                                email: this.userEmailData,
                                            }
                                        })
                                        .then(res => {
                                            // console.log(res.data);
                                            if(res.data.success === false) {
                                                    // this.userEmailChk = false;
                                                    Swal.fire({
                                                    icon: 'warning', // 추가: 아이콘 설정
                                                    title: '횟수 초과',
                                                    text: '잠시 후 다시 시도해주세요.',
                                                    confirmButtonText: 'Close',
                                                });
                                            }
                                        })
                                    },2000);
                                });
                            },
                            preConfirm: (verificationCode) => {
                                const verificationCodeInputValue = document.getElementById('verificationCodeInput').value;
                                // console.log(resendButton);
                                axios.get('/tokenChkSubmit', {
                                    params: {
                                        email: this.userEmailData,
                                        token: verificationCodeInputValue
                                    }
                                })
                                    .then(res => {
                                        // console.log(res.data);
                                })

                                return new Promise((resolve) => {
                                    setTimeout(() => {
                                        resolve(verificationCode);
                                    }, 3000);
                                    
                                });
                            },
                        
                    }).then((verificationResult) => {
                        if (!verificationResult.dismiss && verificationResult.value) {
                            // Third step: Display success message (in your case, send temporary password)
                            Swal.fire({
                                icon: 'success', // 추가: 아이콘 설정
                                title: '인증 완료',
                                text: '해당 이메일로 임시 비밀번호를 전송하였습니다.',
                                confirmButtonText: '확인'
                            });
                        } else if (verificationResult.dismiss === Swal.DismissReason.cancel) {
                            // User clicked cancel, handle it as needed
                            Swal.fire({
                                icon: 'warning', // 추가: 아이콘 설정
                                title: '취소',
                                text: '취소 처리 되었습니다.',
                                confirmButtonText: 'Close'
                            });
                        } else {
                            // Verification failed, handle it as needed
                            Swal.fire({
                                icon: 'warning', // 추가: 아이콘 설정
                                title: '횟수 초과',
                                text: '5분 후 다시 시도해주세요.',
                                confirmButtonText: 'Close',
                            });
                        }
                    });
                }
            });
        }
    }
}
</script>
<style>

.swal2-div {
    display: flex;
}

.email_chk_swal2_input {
    margin: 1em 10px 3px;
}
.email_chk_swal2_confirm {
    border: 0;
    border-radius: 0.25em;
    background-color: #7066e0;
    color: #fff;
    font-size: 1em;
    padding: .625em 1.1em;
    margin: 1em 0px 3px;
}
</style>