<template>
    <!-- Page Wrapper -->
    <loading-component v-if="loading" />
    <div v-if="!loading" id="page-top">
        <div id="wrapper">
            
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/adminmain">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Class 4 You</div>
                    
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="/adminmain">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>대시보드</span></a>
                </li>
                    
                <li  v-if="adminChk === 'true'" class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>유저 관리</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header admin-main-h6-font-size">유저 정보 관리</h6>
                            <a class="collapse-item" href="/adminuserdata">유저 정보 리스트</a>
                            <a class="collapse-item" href="/adminuserclassdata">유저 강의 리스트</a>
                            <a class="collapse-item" href="/adminuserstatedata">유저 상태 리스트</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>게시글 관리</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header admin-main-h6-font-size">게시글 정보 관리</h6>
                            <a class="collapse-item" href="/adminboardquestiondata">강의 질문 게시글 리스트</a>
                            <a class="collapse-item" href="/adminboardcommunitydata">커뮤니티 게시글 리스트</a>
                            <a class="collapse-item" href="/adminboardreportdata">신고 게시글 리스트</a>
                            <!-- <a class="collapse-item" href="utilities-animation.html">Animations</a>
                            <a class="collapse-item" href="utilities-other.html">Other</a> -->
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>강의 관리</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header admin-main-h6-font-size">강의 정보 수정</h6>
                            <a class="collapse-item" href="/adminclassinsert">강의 관리</a>
                        </div>
                    </div>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link" href="/admininformation">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>관리자 ㆍ 강사 정보 관리</span></a>
                </li> -->

                <li class="nav-item active">
                    <a class="nav-link" href="/adminregistration">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>강사 회원 가입</span></a>
                </li>

                <hr class="sidebar-divider">

                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

                <!-- Sidebar Message -->
                <!-- <div class="sidebar-card d-none d-lg-flex">
                    <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                    <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
                </div> -->

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="display: flex; justify-content: flex-end;">

                        <div class="admin_logout_btn_container" id="admin_container">
                            <button @click="instructorlogout()" class="admin_logout_btn">
                                <span class="admin_circle" aria-hidden="true">
                                    <span class="admin_icon admin_arrow"></span>
                                </span>
                                <span class="admin_logout_button_text">Logout</span>
                            </button>
                        </div>
                        <!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                    aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                       <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    신고게시글 알람 모달
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">신고 게시글 관리로 이동</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    해당 관리자 게시글 질문
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">질문 게시글 관리로 이동</a>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <button type="button" @click="instructorlogout">로그아웃</button>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">현희 최</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    프로필
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    프로필 수정
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    활동 로그
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul> -->

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <div style="width: 80%; background-color: #fff; border-radius: 50px; border: 1px solid rgba(0,0,0,0.3); margin: auto; margin-top: 30px;">
                            <div style="min-width: 100%;" class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">강사 회원 가입</h1>
                                    </div>
                                    <form style="text-align: center;" class="user">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input v-model="frmInstructorRegistData.InstructorFullName" style="text-align: center; font-size: 20px;" type="text" class="form-control form-control-user" id="name"
                                                    placeholder="InstructorName">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input v-model="frmInstructorRegistData.InstructorEmail" style="text-align: center; font-size: 20px;" type="email" class="form-control form-control-user" id="email"
                                                    placeholder="InstructorEmail">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input v-model="frmInstructorRegistData.InstructorPassword" style="text-align: center; font-size: 20px;" type="password" class="form-control form-control-user" id="password"
                                                    placeholder="InstructorPassword">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input v-model="frmInstructorRegistData.InstructorPasswordChk" style="text-align: center; font-size: 20px;" type="password" class="form-control form-control-user" id="password_chk"
                                                    placeholder="InstructorPasswordChk">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div style="display: flex; gap: 20px;" class="col-sm-6 mb-3 mb-sm-0">
                                                <input v-model="frmInstructorRegistData.InstructorPhoneNumber1" style="text-align: center; font-size: 20px;" type="text" class="form-control form-control-user" id="phone_number1" placeholder="***">
                                                <input v-model="frmInstructorRegistData.InstructorPhoneNumber2" style="text-align: center; font-size: 20px;" type="text" class="form-control form-control-user" id="phone_number2" placeholder="****">
                                                <input v-model="frmInstructorRegistData.InstructorPhoneNumber3" style="text-align: center; font-size: 20px;" type="text" class="form-control form-control-user" id="phone_number3" placeholder="****">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div style="display: flex; gap: 20px;" class="col-sm-6 mb-3 mb-sm-0">
                                                <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">Register Account</a> -->
                                                <button @click="submitInstructorData()" type="button" class="btn btn-primary btn-user btn-block">회원가입</button>
                                            </div>

                                        </div>

                                        <hr>
                                    </form>
                                    <!-- <hr> -->
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login.html">Already have an account? Login!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
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
    name: 'AdminRegistrationComponent',

    components: {
        LoadingComponent,
    },
    data() {
        return {
            loading: true, // 로딩 상태를 나타내는 데이터
            InstructorID : null,
            adminChk: false,
            frmInstructorRegistData: {
                InstructorEmail: '',
                InstructorPhoneNumber1: '',
                InstructorPhoneNumber2: '',
                InstructorPhoneNumber3: '',
                InstructorFullName: '',
                InstructorPassword: '',
                InstructorPasswordChk: '',
            },
            InstructorRegistData: [],

        };
    },

    methods: {
        fetchData() {
            axios.get('/instructormain')
            .then(response => {
                // console.log(response.data);
            
            })
            .catch(error => {
                // console.error('Error fetching data:', error);
            });
        },

        instructorlogout() {
            axios.get('/instructorlogout')
            .then(res => {
                // console.log(res);
                localStorage.clear();
                
                Swal.fire({
                    icon: 'success',
                    title: '로그아웃 성공',
                    text: '로그아웃에 성공했습니다.',
                    confirmButtonText: '확인'
                }).then(() => {
                    // 확인 버튼을 눌렀을 때 실행할 코드
                    // location.reload();
                    this.$router.push('/adminlogin');
                });
            })
            .catch(err => {
                // console.log(err.response.data);
            });
        },

        submitInstructorData() {
            if (this.frmInstructorRegistData.InstructorPassword !== this.frmInstructorRegistData.InstructorPasswordChk) {
                Swal.fire({
                    icon: 'error',
                    title: '비밀번호가 일치하지않습니다.',
                    confirmButtonText: '확인',
                })
            }  else {
                const url = '/instructorregist';
                const header = {
                headers: {
                    "Content-Type": 'multipart/form-data',
                    // 'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                    },
                };

                let frm = new FormData();
                const InstructorPhoneNumber = this.frmInstructorRegistData.InstructorPhoneNumber1 + this.frmInstructorRegistData.InstructorPhoneNumber2 + this.frmInstructorRegistData.InstructorPhoneNumber3

                frm.append('InstructorFullName', this.frmInstructorRegistData.InstructorFullName);
                frm.append('InstructorEmail', this.frmInstructorRegistData.InstructorEmail);
                frm.append('InstructorPassword', this.frmInstructorRegistData.InstructorPassword);
                frm.append('InstructorPasswordChk', this.frmInstructorRegistData.InstructorPasswordChk);
                frm.append('InstructorPhoneNumber', InstructorPhoneNumber);

                axios.post(url, frm, header)
                .then(res => {
                    // console.log(res);

                    Swal.fire({
                        icon: 'success',
                        title: '회원가입이 완료되었습니다.',
                        confirmButtonText: '확인',
                        }).then(() => {
                        // 페이지 이동
                        this.$router.push('/adminmain');
                        });
                })
                .catch(err => {
                    // console.error(err);
                });

            }
        },

    },

    beforeCreate() {
        // 스타일시트를 동적으로 로드한 후 로딩 상태 변경
        const styleLink = document.createElement('link');
        styleLink.rel = 'stylesheet';
        styleLink.href = '/css/sb-admin-2.css';
        document.head.appendChild(styleLink);

        const minStyleLink = document.createElement('link');
        minStyleLink.rel = 'stylesheet';
        minStyleLink.href = '/css/sb-admin-2.min.css';
        document.head.appendChild(minStyleLink);

        const allMinStyleLink = document.createElement('link');
        allMinStyleLink.rel = 'stylesheet';
        allMinStyleLink.href = '/vendor/fontawesome-free/css/all.min.css';
        document.head.appendChild(allMinStyleLink);
        

        // 스타일시트 로드 완료 후 로딩 상태 변경
        const checkLoad = () => {
        if (styleLink.sheet && minStyleLink.sheet && allMinStyleLink.sheet) {
            // 스타일시트가 로드되었음을 확인하면 로딩 상태 변경
            this.loading = false;
        } else {
            // 스타일시트가 아직 로드되지 않았으면 재귀적으로 체크
            setTimeout(checkLoad, 10);
        }
        };

        checkLoad();
    },

    mounted() {
        this.InstructorID = localStorage.getItem('InstructorID');
        this.adminChk = localStorage.getItem('adminChk');
        // console.log(localStorage.getItem('adminChk'));
        this.fetchData();
    },

    updated() {

    },
}
</script>
<style scoped>

</style>