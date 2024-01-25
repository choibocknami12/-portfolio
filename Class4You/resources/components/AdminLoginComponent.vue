<template>
    <!-- Page Wrapper -->
    <!-- <loading-component v-if="loading" /> -->
    <div style="background-color:#cad9ff6a; height: 100vh" class="bg-gradient-primary">
        <!-- <h2>Weekly Coding Challenge #1: Sign in/up Form</h2> -->
            <div style="margin: auto;" class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="#">
                  <h1 style="font-size: 30px;">Inquiry</h1>
                  <div class="social-container">
                      <!-- <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                      <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                      <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a> -->
                  </div>
                  <!-- <span>or use your email for registration</span> -->
                  <input v-model="frmInstructorRegistData.InstructorFullName" type="text" placeholder="Name" />
                  <input v-model="frmInstructorRegistData.InstructorEmail" type="email" placeholder="Email" />
                  <input v-model="frmInstructorRegistData.InstructorPhoneNumber" type="text" placeholder="PhoneNumber" />
                  <button type="button" @click="submitInstructorInquiryData()" style="margin-top: 30px; cursor: pointer;">Inquiry</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="#">
                <h1 style="font-size: 30px;">Sign in</h1>
                <div class="social-container">
                    <!-- <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a> -->
                </div>
                <!-- <span>계정 정보를 입력하세요.</span> -->
                <input v-model="frmInstructorLoginData.InstructorEmail" type="email" placeholder="Email" />
                <input v-model="frmInstructorLoginData.InstructorPassword" type="password" placeholder="Password" />
                <!-- <a href="#">비밀번호를 잊으셨나요?</a> -->
                <button style="margin-top: 30px; cursor: pointer;" type="button" @click="submitInstructorLoginData()">Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>이미 계정이 존재하시나요?</h1>
                    <p style="font-weight: 600;">승인 받은 아이디로 로그인 해주세요.</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                  <img src="/img/adminlogin.png" alt="">
                    <!-- <h1>관리자 계정을 잊으셨나요?</h1> -->
                    <!-- <p style="font-weight: 600;">고객센터에 문의 바랍니다.</p> -->
                    <!-- <button class="ghost" id="signUp">Inquiry</button> -->
                    <!-- <button class="ghost">Inquiry</button> -->
                </div>
                </div>
            </div>
            </div>
    </div>
</template>
<script>
import axios from 'axios';
import LoadingComponent from './LoadingComponent.vue';
import Swal from 'sweetalert2';

export default {
    name: 'AdminLoginComponent',

    data() {
        return {
            loading: true, // 로딩 상태를 나타내는 데이터
            
            frmInstructorLoginData: {
                InstructorEmail: '',
                InstructorPassword: '',
            },
            frmInstructorRegistData: {
              InstructorEmail: '',
              InstructorPhoneNumber: '',
              InstructorFullName: '',
            },
            InstructorRegistData: [],
        };
    },

    methods: {
        submitInstructorLoginData() {
            this.$store.dispatch('submitInstructorLoginData', this.frmInstructorLoginData);       
        },
        
        submitInstructorInquiryData() {
            const url = '/instructorinquiry';
            const header = {
            headers: {
                "Content-Type": 'multipart/form-data',
                'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                },
            };

            let frm = new FormData();

            frm.append('InstructorEmail', this.frmInstructorRegistData.InstructorEmail);
            frm.append('InstructorPhoneNumber', this.frmInstructorRegistData.InstructorPhoneNumber);
            frm.append('InstructorFullName', this.frmInstructorRegistData.InstructorFullName);

            axios.post(url, frm, header)
            .then(res => {

              Swal.fire({
                    icon: 'success',
                    title: '문의되었습니다.',
                    confirmButtonText: '확인',
                  }).then(() => {
                    // 페이지 이동
                    // this.$router.push('/adminlogin');
                    this.frmInstructorRegistData = '';
                    // location.reload();
                  });
              // console.log(res.data);
            })
            .catch(err => {
              // console.error(error);
            })
        },
    },

    mounted() {
        // 스크립트를 로드하는 함수를 정의
        const loadScript = (src, callback) => {
        const script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = src;
        script.onload = callback;
        document.head.appendChild(script);
        };

        // 로드할 외부 스크립트들의 배열로 정의
        const externalScriptsToLoad = [
        'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js',
        'https://kit.fontawesome.com/3eee069757.js'
        ];

        // 로드할 내부 스크립트의 경로를 정의
        const internalScriptToLoad = '/js/adminscript.js';

        // 외부 스크립트를 로드하는 함수
        const loadExternalScripts = (scripts, callback) => {
        let loadedScripts = 0;
        const loadNextScript = () => {
            if (loadedScripts < scripts.length) {
            loadScript(scripts[loadedScripts], () => {
                loadedScripts++;
                loadNextScript();
            });
            } else {
            callback();
            }
        };

        loadNextScript();
        };

        // 내부 스크립트를 로드하는 함수
        const loadInternalScript = (src, callback) => {
            const script = document.createElement('script');
            script.type = 'module';  // 여기에 type="module" 추가
            script.src = src;
            script.onload = callback;
            document.head.appendChild(script);
        };

        // 외부 스크립트들을 로드한 후 내부 스크립트를 로드
        loadExternalScripts(externalScriptsToLoad, () => {
            loadInternalScript(internalScriptToLoad, () => {
                // 모든 스크립트가 로드된 후 실행될 코드를 이곳에 추가
                // console.log('All scripts loaded!');
            });
        });

    },

    // beforeCreate() {
    //     // 스타일시트를 동적으로 로드한 후 로딩 상태 변경
    //     const styleLink = document.createElement('link');
    //     styleLink.rel = 'stylesheet';
    //     styleLink.href = '/css/adminlogin.css';
    //     document.head.appendChild(styleLink);
        
    //     // 스타일시트 로드 완료 후 로딩 상태 변경
    //     const checkLoad = () => {
    //     if (styleLink.sheet) {
    //         // 스타일시트가 로드되었음을 확인하면 로딩 상태 변경
    //         this.loading = false;
    //     } else {
    //         // 스타일시트가 아직 로드되지 않았으면 재귀적으로 체크
    //         setTimeout(checkLoad, 10);
    //     }
    //     };

    //     checkLoad();
    // },

    components: {
        LoadingComponent,
    },
}
</script>
<style scoped>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
  box-sizing: border-box;
}

body {
  background: #f6f5f7;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  font-family: 'Montserrat', sans-serif;
  height: 100vh;
  margin: -20px 0 50px;
}

h1 {
  font-weight: bold;
  margin: 0;
}

h2 {
  text-align: center;
}

p {
  font-size: 14px;
  font-weight: 100;
  line-height: 20px;
  letter-spacing: 0.5px;
  margin: 20px 0 30px;
}

span {
  font-size: 12px;
}

a {
  color: #333;
  font-size: 14px;
  text-decoration: none;
  margin: 15px 0;
}

button {
  border-radius: 20px;
  border: 1px solid #3b63dd;
  background-color: #3b63dd;
  color: #FFFFFF;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 45px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
}

button:active {
  transform: scale(0.95);
}

button:focus {
  outline: none;
}

button.ghost {
  background-color: transparent;
  border-color: #FFFFFF;
  cursor: pointer;
}

form {
  background-color: #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 50px;
  height: 100%;
  text-align: center;
}

input {
  background-color: #eee;
  border: none;
  padding: 12px 15px;
  margin: 8px 0;
  width: 100%;
}

.bg-gradient-primary {
  padding: 200px
}
.container {
  background-color: #fff;
  border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
      0 10px 10px rgba(0,0,0,0.22);
  position: relative;
  overflow: hidden;
  width: 768px;
  max-width: 100%;
  min-height: 480px;
}

.form-container {
  position: absolute;
  top: 0;
  height: 100%;
  transition: all 0.6s ease-in-out;
}

.sign-in-container {
  left: 0;
  width: 50%;
  z-index: 2;
}

.container.right-panel-active .sign-in-container {
  transform: translateX(100%);
}

.sign-up-container {
  left: 0;
  width: 50%;
  opacity: 0;
  z-index: 1;
}

.container.right-panel-active .sign-up-container {
  transform: translateX(100%);
  opacity: 1;
  z-index: 5;
  animation: show 0.6s;
}

@keyframes show {
  0%, 49.99% {
    opacity: 0;
    z-index: 1;
  }
  
  50%, 100% {
    opacity: 1;
    z-index: 5;
  }
}

.overlay-container {
  position: absolute;
  top: 0;
  left: 50%;
  width: 50%;
  height: 100%;
  overflow: hidden;
  transition: transform 0.6s ease-in-out;
  z-index: 100;
}

.container.right-panel-active .overlay-container{
  transform: translateX(-100%);
}

.overlay {
  background: #4e73df;
  background: -webkit-linear-gradient(to right, #3b63dd, #6181e1);
  background: linear-gradient(to right, #3b63dd, #6181e1);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 0 0;
  color: #FFFFFF;
  position: relative;
  left: -100%;
  height: 100%;
  width: 200%;
    transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
    transform: translateX(50%);
}

.overlay-panel {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 40px;
  text-align: center;
  top: 0;
  height: 100%;
  width: 50%;
  transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.overlay-left {
  transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
  transform: translateX(0);
}

.overlay-right {
  right: 0;
  transform: translateX(0);
}

.container.right-panel-active .overlay-right {
  transform: translateX(20%);
}

.social-container {
  margin: 20px 0;
}

.social-container a {
  border: 1px solid #DDDDDD;
  border-radius: 50%;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  margin: 0 5px;
  height: 40px;
  width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
</style>