import { createStore } from 'vuex';
import axios from 'axios';
import router from "./router.js"
import VueCookies from "vue-cookies";
import Swal from 'sweetalert2';

// axios.interceptors.request.use(function (config) {
//     store.commit('LOADING_STATUS', true)

//     const token = localStorage.getItem('user_token');
//     config.headers.Authorization = "Bearer " + token;
//     return config;
// });

// axios.interceptors.response.use(function (config) {
//     store.commit('LOADING_STATUS', false)

//     return config
// });

const store = createStore({
    
    // state() : 데이터를 저장하는 영역
    state() {
        return {
            // 정명호
            // RegistrationErrorMessage: {
            //     UserEmail: '',
            //     UserPassword: '',
            //     UserPasswordChk: '',
            //     UserName: '',
            //     UserPhoneNumber1: '',
            //     UserPhoneNumber2: '',
            //     UserPhoneNumber3: '',
            //     UserBirthDate: '',
            //     UserAddress: '',
            //     UserTermsofUse: '',
            //     UserPrivacy: '',
            // },
            loginShowModal: false,

            userData: {
                userCheck: '',
                userName: '',
                userEmail: '',
                UserID: null,
            },
            userLoginChk: null,
            UserID: null,
            shouldShowCarousel: false,
            myPageClickFlgTab: 1,

            // 최현희
            // 라라벨 데이터 저장용
            laravelData: [],
            // 수강평 데이터 저장용
            // classReviewData: [],
            instructorData: {
                instructorCheck: '',
                instructorName: '',
                instructoruserEmail: '',
                instructorID: null,
                instructorIdChk: null,
            },

            instructorLoginChk: null,
            instructorID: null,

            registInsructorData: {
                InstructorEmail: '',
                InstructorPassword: '',
                InstructorFullName: '',
            }
        }
    },

    // mutations : 데이터 수정용 함수 저장 영역
    // 초기 데이터 세팅 (라라벨에서 받은)
    mutations: {
        // setRegistrationErrorMessage(state, error) {
        //     state.RegistrationErrorMessage = error;
        // },
        LOADING_STATUS(state, status) {
            state.loading = status; // 'loading'은 Vuex 스토어의 state에 있어야 할 로딩 상태입니다.
        },
        LOADING_STATUS(state, status) {
            state.loading = status; // 'loading'은 Vuex 스토어의 state에 있어야 할 로딩 상태입니다.
        },
        setOpenLoginModal(state) {
            state.loginShowModal = true;
        },
        setCloseLoginModal(state) {
            state.loginShowModal = false;
        },
        setSaveToLocalStorage(state, data) {
            state.userData.userCheck = data.sessionDataCheck;
            state.userData.UserID = data.UserID;
            localStorage.setItem('UserID', data.userId);
            localStorage.setItem('userCheck', data.sessionDataCheck);

            setTimeout(function() {
                localStorage.clear();
            }, 2 * 60 * 60 * 1000);
            // console.log(data);
            // localStorage.setItem('UserID', {value:data.userId, expire: Date.now() + 7200000});
            // localStorage.setItem('userCheck', {value:data.sessionDataCheck, expire: Date.now() + 7200000});
            // console.log(Date.now() + 7200000);
            // console.log(data);
            // console.log(localStorage.getItem('UserID'));
            // console.log(data);
            // state.userData.userName = data.sessionCheckUserName
            // state.userData.userEmail = data.sessionCheckUserEmail
            // localStorage.setItem('userName', data.sessionCheckUserName);
            // localStorage.setItem('userEmail', data.sessionCheckUserEmail);
            // state.userData.userCheck = localStorage.getItem('userCheck');
        },
        setUserLoginChk(state, userLoginChk) {
            state.userLoginChk = userLoginChk;
        },
        setUserID(state, UserID) {
            state.UserID = UserID;
        },
        setShowCarousel(state, value) {
            state.shouldShowCarousel = value;
        },
        setMyPageTab(state, tab) {
            state.myPageClickFlgTab = tab;
        },
        

        // 최현희
        // 라라벨에서 받은 초기데이터 셋팅
        setLaravelData(state, data) {
			state.laravelData = data;
		},

        setSaveInstructorToLocalStorage(state, data) {
            // console.log(data);
            state.instructorData.instructorCheck = data.sessionInstructorDataCheck;
            state.instructorData.instructorID = data.instructorId;
            state.instructorData.instructorIdChk = data.instructorIdChk;
            localStorage.setItem('InstructorID', data.instructorId);
            localStorage.setItem('instructorDataCheck', data.sessionInstructorDataCheck);
            localStorage.setItem('adminChk', data.adminChk);

            setTimeout(function() {
                localStorage.clear();
            }, 2 * 60 * 60 * 1000);

        },
        setInstructorLoginChk(state, instructorLoginChk) {
            state.instructorLoginChk = instructorLoginChk;
        },
        setInstructorID(state, data) {
            console.log(data);
            state.instructorID = data;
        },
    },

    // actions : ajax로 서버에 데이터를 요청할 때나 시간 함수등 비동기 처리는 actions에 정의
    actions: {
        openLoginModal({ commit }) {
            commit('setOpenLoginModal');
        },
        closeLoginModal({ commit }) {
            commit('setCloseLoginModal');
        },
        // 회원가입 처리 해당 컴포넌트로 이관
        // submitUserData(context, data) {
        //     const url = '/registration'
        //     const header = {
        //         headers: {
        //             "Content-Type": 'multipart/form-data',
        //             'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
        //         },
        //     }
        //     // console.log(data);
        //     // console.log(data.frmUserData);
        //     // console.log(data.frmUserAddressData);
        //     let frm = new FormData();
        //     const UserPhoneNumber = data.frmUserData.UserPhoneNumber1 + data.frmUserData.UserPhoneNumber2 + data.frmUserData.UserPhoneNumber3

        //     data.frmUserData.UserTermsofUse = data.frmUserData.UserTermsofUse ? 1 : 0;

        //     data.frmUserData.UserPrivacy = data.frmUserData.UserPrivacy ? 1 : 0;

        //     frm.append('UserEmail',data.frmUserData.UserEmail);
        //     frm.append('UserPassword',data.frmUserData.UserPassword);
        //     frm.append('UserPasswordChk',data.frmUserData.UserPasswordChk);
        //     frm.append('UserName',data.frmUserData.UserName);
        //     frm.append('UserPhoneNumber',UserPhoneNumber);
        //     frm.append('UserBirthDate',data.frmUserData.UserBirthDate);
        //     frm.append('UserPostcode',data.frmUserAddressData.UserPostcode);
        //     frm.append('UserRoadAddress',data.frmUserAddressData.UserRoadAddress);
        //     frm.append('UserDetailedAddress',data.frmUserAddressData.UserDetailedAddress);
        //     frm.append('UserTermsofUse',data.frmUserData.UserTermsofUse);
        //     frm.append('UserPrivacy',data.frmUserData.UserPrivacy);
        //     context.commit('setRegistrationErrorMessage', null);


        //     axios.post(url, frm, header)
        //     .then(res => { 
        //         // console.log(res.data);
        //         router.push('/'); 
        //     })
        //     .catch(err => {
        //         // console.log(err.response.data.errors)
        //         context.commit('setRegistrationErrorMessage', err.response.data.errors);
        //         // window.location.reload();
        //     })
        // },
        submitUserLoginData(context, data) {
            const url = '/login'
            
            const header = {
                headers: {
                    "Content-Type": 'application/json',
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                },
            }
            const requestData = {
                UserEmail: data.UserEmail,
                UserPassword: data.UserPassword,
            };
            

            axios.post(url, requestData, header)
            .then(res => { 
                // console.log(res);
                context.dispatch('closeLoginModal');
                if (res.data.success) {
                    context.commit('setSaveToLocalStorage', res.data);
                    context.commit('setUserLoginChk', res.data.sessionDataCheck);
                    context.commit('setUserID', res.data.userId);
                    Swal.fire({
                        icon: 'success',
                        title: '로그인 성공',
                        text: '로그인에 성공했습니다.',
                        confirmButtonText: '확인'
                    }).then((result) => {
                        // 확인 버튼을 눌렀을 때(result.value가 true일 때) 페이지 리로드
                        if (result.value) {
                            location.reload();
                        }
                    })
                    // context.commit('setUserLoginChk', {sessionDataCheck:res.data.sessionDataCheck, UserID:res.data.userId});
                    // console.log(res.data.sessionDataCheck)
                    // console.log(res.data)
                    // router.push('/'); 
                } else if(res.data.success == false) {
                    Swal.fire({
                        icon: 'error',
                        title: '로그인 실패',
                        text: '이메일 또는 비밀번호를 확인해주세요.',
                        confirmButtonText: '확인'
                    });
                    // console.log(err.response.data.errors)
                }
            })
            .catch(err => {
                // 서버 오류 등의 예외 처리
                console.error('오류 발생:', err);
                Swal.fire({
                    icon: 'error',
                    title: '로그인 실패',
                    text: '이메일 또는 비밀번호를 확인해주세요.',
                    confirmButtonText: '확인'
                });
            })
            .finally(() => {
                // location.reload();
            })
        },
        logout(context, data) {
            const url = '/logout';
            const header = {
                headers: {
                    "Content-Type": 'application/json',
                },
            };
        
            axios.get(url, header)
            .then(res => {
                context.commit('setUserLoginChk', res.data.sessionDataCheck);
                localStorage.clear();
                
                Swal.fire({
                    icon: 'success',
                    title: '로그아웃 성공',
                    text: '로그아웃에 성공했습니다.',
                    confirmButtonText: '확인'
                }).then(() => {
                    // 확인 버튼을 눌렀을 때 실행할 코드
                    location.reload();
                });
            })
            .catch(err => {
                console.log(err.response.data);
            });
        },
        checkWindowWidth(context) {
            // 특정 크기 이상이면 캐러셀을 표시
            if (window.innerWidth <= 770) {
                context.commit('setShowCarousel', true);
            } else {
                context.commit('setShowCarousel', false);
            }
        },

        submitBoardData(context, data) {
            const url = '/boardInsert'
            const header = {
                headers: {
                    "Content-Type": 'multipart/form-data',
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                },
            }
            console.log(data);
            let frm = new FormData();

            frm.append('BoardCategoryID',data.BoardCategoryID);
            frm.append('UserID',data.UserID);
            frm.append('BoardTitle',data.BoardTitle);
            frm.append('BoardComment',data.BoardComment);
            data.SelectedLanguages.forEach(selectedLanguage => {
                frm.append('SelectedLanguages[]', selectedLanguage);
            });

            // console.log(frm);

            axios.post(url, frm, header)
            .then(res => { 
                // console.log(res.data);
                router.push('/board'); 
            })
            .catch(err => {
                // console.log(err.response.data.errors)
                context.commit('setRegistrationErrorMessage', err.response.data.errors);
            })
        },






        // 관리자 페이지
        submitInstructorLoginData(context, data) {
            const url = '/instructorlogin'
            
            const header = {
                headers: {
                    "Content-Type": 'application/json',
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                },
            }
            const requestData = {
                InstructorEmail: data.InstructorEmail,
                InstructorPassword: data.InstructorPassword,
            };
            // console.log(data);
            

            axios.post(url, requestData, header)
            .then(res => { 
                console.log(res);
                context.dispatch('closeLoginModal');
                if (res.data.success) {
                    context.commit('setSaveInstructorToLocalStorage', res.data);
                    context.commit('sessionInstructorDataCheck', res.data.sessionInstructorDataCheck);
                    context.commit('setInstructorID', res.data.instructorId);
                    Swal.fire({
                        icon: 'success',
                        title: '로그인 성공',
                        text: '로그인에 성공했습니다.',
                        confirmButtonText: '확인'
                    }).then((result) => {
                        // 확인 버튼을 눌렀을 때(result.value가 true일 때) 페이지 리로드
                        if (result.value) {
                            router.push('/adminmain'); 
                        }
                    })
                    // context.commit('setUserLoginChk', {sessionDataCheck:res.data.sessionDataCheck, UserID:res.data.userId});
                    // console.log(res.data.sessionDataCheck)
                    // console.log(res.data)
                    // router.push('/'); 
                } else if(res.data.success == false) {
                    Swal.fire({
                        icon: 'error',
                        title: '로그인 실패',
                        text: '이메일 또는 비밀번호를 확인해주세요.',
                        confirmButtonText: '확인'
                    });
                    // console.log(err.response.data.errors)
                }
            })
            .catch(err => {
                // 서버 오류 등의 예외 처리
                console.error('오류 발생:', err);
                Swal.fire({
                    icon: 'error',
                    title: '로그인 실패',
                    text: '이메일 또는 비밀번호를 확인해주세요.',
                    confirmButtonText: '확인'
                });
            })
            .finally(() => {
                // location.reload();
            })
        },

        // 관리자 회원가입
        submitInstructorRegistData(context, data) {
            
        },





























        // 댓글 작성 함수
        // submitCommentData(context, data) {
        //     const url = '/comments'
        //     const header = {
        //         headers: {
        //             "Content-Type": 'multipart/form-data',
        //             'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
        //         },
        //     }

        //     if(!data.UserID) {
        //         Swal.fire({
        //             icon: 'error',
        //             title: '로그인 확인',
        //             text: '로그인 후 작성해주세요.',
        //             confirmButtonText: '확인'
        //         });
        //     } else if(!data.CommentContent) {
        //         Swal.fire({
        //             icon: 'error',
        //             title: '내용 확인',
        //             text: '내용을 입력해주세요.',
        //             confirmButtonText: '확인'
        //         });
        //     }
        //     let frm = new FormData();
        //     // console.log(data);

        //     frm.append('BoardID',data.BoardID);
        //     frm.append('UserID',data.UserID);
        //     frm.append('CommentContent',data.CommentContent);

        //     // console.log(frm);

        //     axios.post(url, frm, header)
        //     .then(res => {
        //         // console.log(res.data);
        //         window.location.reload();

        //     })
        //     .catch(err => {
        //         // console.log(err.response.data.errors)
        //         context.commit('setRegistrationErrorMessage', err.response.data.errors);
        //     })
        // }, 

        // 댓글 삭제 함수
        // deleteCommentData(context, data) {
        //     const url = '/comments/' + data
        //     const header = {
        //         headers: {
        //             "Content-Type": 'multipart/form-data',
        //             'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
        //         },
        //     }

        //     // let frm = new FormData();
        //     const requestData = {
        //         CommentID: data.CommentID,
        //     };

        //     // console.log(data);

        //     axios.delete(url, requestData, header)
        //     .then(res => { 
        //         // console.log(res.data);
        //         // 해당 처리가 끝나면 리로드함
        //         window.location.reload();
                
        //     })
        //     .catch(err => {
        //         // console.log(err.response.data.errors)
        //         context.commit('setRegistrationErrorMessage', err.response.data.errors);
        //     })
        // },

        // 게시판 삭제 함수
        // delBoardData(context, data) {
        //     const url = '/boarddetail/' + data
        //     const header = {
        //         headers: {
        //             "Content-Type": 'multipart/form-data',
        //             'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
        //         },
        //     }

        //     // let frm = new FormData();
        //     const requestData = {
        //         BoardID: data.BoardID,
        //     };

        //     // console.log(data);

        //     axios.delete(url, requestData, header)
        //     .then(res => { 
        //         // console.log(res.data);
        //         // 해당 처리가 끝나면 리로드함
        //         // window.location.reload();
        //         router.push('/board'); 
        //     })
        //     .catch(err => {
        //         // console.log(err.response.data.errors)
        //         context.commit('setRegistrationErrorMessage', err.response.data.errors);
        //     })
        // },

        // updateBoardData(context, data) {
        //     const url = '/boardUpdate'
        //     const header = {
        //         headers: {
        //             "Content-Type": 'multipart/form-data',
        //             'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
        //         },
        //     }

        //     console.log(data)
        //     let frm = new FormData();
            
        //     frm.append('BoardID',data.BoardID);
        //     frm.append('BoardCategoryID',data.BoardCategoryID);
        //     frm.append('UserID',data.UserID);
        //     frm.append('BoardTitle',data.BoardTitle);
        //     frm.append('BoardComment',data.BoardComment);
        //     // console.log(this.newBoardItem);
        //     // data.BoardTitle;

        //     axios.put(url, frm, header)
        //     .then(res => { 
        //         // console.log(res.data);
        //         // router.push('/boarddetail/:BoardID'); 
        //     })
        //     .catch(err => {
        //         console.log(err.response.data.errors)
        //         context.commit('setRegistrationErrorMessage', err.response.data.errors);
        //     })
        // },

        


    }, 
});

export default store;
