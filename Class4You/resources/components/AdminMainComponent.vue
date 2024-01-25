<template>
    <!-- Page Wrapper -->
    <loading-component v-if="loading" />
    <div v-if="!loading" id="page-top">
        <div id="wrapper">
            
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
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
<!-- 
                <li class="nav-item">
                    <a class="nav-link" href="/admininformation">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>관리자 ㆍ 강사 정보 관리</span></a>
                </li> -->

                <li class="nav-item">
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

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">대시보드</h1>
                            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                        </div>

                        <!-- Content Row -->
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example 대시보드 카드1 -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    월간 결제 금액 (Monthly Amount)</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">&#8361;{{ formatNumber(monthlyPaymentSum) }}원</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example 대시보드 카드2 -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    연간 결제 금액 (Annual Amount)</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">&#8361;{{ formatNumber(yearPaymentSum) }}원</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example 대시보드 카드3 -->

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    총 회원 수
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    {{ formatNumber(userCount) }}명
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            <!-- Pending Requests Card Example 대시보드 카드4 -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                    총 탈퇴 수
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ formatNumber(userCountDelete) }}명</div>
                                                    </div>
                                                    <div class="col">
                                                        <!-- <div class="progress progress-sm mr-2">
                                                            <div class="progress-bar bg-info" role="progressbar"
                                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Row -->

                        <div class="row">

                            <!-- Area Chart 통계차트 -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">전년 대비 유저 회원가입 수</h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                aria-labelledby="dropdownMenuLink">
                                                <div class="dropdown-header">Dropdown Header:</div>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <Line :data="LineChartData" :options="LineChartOptions"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pie Chart 원형차트 -->
                            <div class="col-xl-4 col-lg-5">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">유저 나이대</h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                aria-labelledby="dropdownMenuLink">
                                                <div class="dropdown-header">Dropdown Header:</div>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-pie pt-4 pb-2" style="padding-top: 0px !important;">
                                            <Radar style="margin-top: 20px;" :data="RadarChartData" :options="RadarChartOptions"/>
                                        </div>
                                        <div class="mt-4 text-center small">
                                            <!-- <span class="mr-2">
                                                <i class="fas fa-circle text-primary"></i> Direct
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-success"></i> Social
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-info"></i> Referral
                                            </span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">인기 강의</h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                aria-labelledby="dropdownMenuLink">
                                                <div class="dropdown-header">Dropdown Header:</div>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-pie pt-4 pb-2" style="padding-top: 0px !important;">
                                            <Doughnut :data="DoughnutChartData" :options="DoughnutChartOptions"/>
                                        </div>
                                        <div class="mt-4 text-center small">
                                            <!-- <span class="mr-2">
                                                <i class="fas fa-circle text-primary"></i> Direct
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-success"></i> Social
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-info"></i> Referral
                                            </span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-5">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">인기 언어</h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                aria-labelledby="dropdownMenuLink">
                                                <div class="dropdown-header">Dropdown Header:</div>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-pie pt-4 pb-2" style="padding-top: 0px !important;">
                                            <Pie :data="PieChartData" :options="PieChartOptions"/>
                                        
                                        </div>
                                        <div class="mt-4 text-center small">
                                            <!-- <span class="mr-2">
                                                <i class="fas fa-circle text-primary"></i> Direct
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-success"></i> Social
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-info"></i> Referral
                                            </span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-5">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">인기 단계</h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                aria-labelledby="dropdownMenuLink">
                                                <div class="dropdown-header">Dropdown Header:</div>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-pie pt-4 pb-2" style="padding-top: 0px !important;">
                                            <PolarArea :data="PolarAreaChartData" :options="PolarAreaChartOptions" />
                                        </div>
                                        <div class="mt-4 text-center small">
                                            <!-- <span class="mr-2">
                                                <i class="fas fa-circle text-primary"></i> Direct
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-success"></i> Social
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-info"></i> Referral
                                            </span> -->
                                        </div>
                                    </div>
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
import LoadingComponent from './LoadingComponent.vue';
import Swal from 'sweetalert2';
import { Doughnut, Bar, Radar, Line, PolarArea, Pie } from 'vue-chartjs';
import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, DoughnutController, ArcElement, LinearScale, CategoryScale, PointElement, RadialLinearScale, LineElement} from 'chart.js';

ChartJS.register(Title, Tooltip, Legend, BarElement, DoughnutController, ArcElement, LinearScale, CategoryScale, RadialLinearScale, PointElement, LineElement);

export default {
    name: 'AdminMainComponent',

    components: {
        LoadingComponent,
        Line,
        PolarArea,
        Doughnut,
        Radar,
        Pie
    },
    data() {
        return {
            loading: true, // 로딩 상태를 나타내는 데이터
            InstructorID : null,
            adminChk: false,
            monthlyPaymentSum: {},
            yearPaymentSum: {},
            userCount: {},
            userCountDelete: {},

            classLanguage: {},
            classDifficultyLevels: {},
            classTopData: {},
            userCountsByAgeGroup: {},
            userCountsByYear: {},

            LineChartData: {
                labels: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
                datasets: [
                    {
                        label: '?',
                        backgroundColor: '#f87979',
                        data: [40, 39, 10, 40, 39, 80, 40, 10, 40, 39, 80, 40]
                    },
                    {
                        label: '?',
                        backgroundColor: '#000',
                        data: [12, 19, 40, 20, 89, 8, 4, 101, 54, 39, 65, 20]
                    }
                ],
            },
            LineChartOptions: {
                responsive: true,
                maintainAspectRatio: false,
                pointRadius: 3,
                pointBorderWidth: 3,
                cubicInterpolationMode:1,
                borderWidth: 2,
                pointHitRadius: 50,
            },

            RadarChartData: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [
                    {
                        label: 'Data One',
                        backgroundColor: 'rgba(255,99,132,0.2)',
                        borderColor: 'rgba(255,99,132,1)',
                        pointBackgroundColor: 'rgba(255,99,132,1)',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: 'rgba(255,99,132,1)',
                        data: [40, 39, 10, 40, 39, 80, 40]
                    }
                ]
            },
            RadarChartOptions: {
                responsive: true,
                maintainAspectRatio: false,
                fill: true,
                pointHitRadius: 50,
                pointRadius: 8,
                pointBorderWidth: 5,
                cubicInterpolationMode:1,
                borderWidth: 2,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            },

            
            DoughnutChartData: {
                labels: ['January'],
                datasets: [
                    {
                        label: 'Data One',
                        backgroundColor: '#f87979',
                        data: [40, 39, 10, 40, 39, 80, 40]
                    }
                ]
            },
            DoughnutChartOptions: {
                responsive: true,
                maintainAspectRatio: false,
                responsive: true,
                plugins: {
                    legend: {
                        display: true
                    }
                }
            },



            PieChartData: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [
                    {
                        label: 'Data One',
                        backgroundColor: '#f87979',
                        data: [40, 39, 10, 40, 39, 80, 40]
                    }
                ]
            },
            PieChartOptions: {
                responsive: true,
                maintainAspectRatio: false
            },


            PolarAreaChartData: {
                labels: [
                    'Eating',
                ],
                datasets: [
                    {
                    label: 'My Second dataset',
                    backgroundColor: 'rgba(255,99,132,0.2)',
                    pointBackgroundColor: 'rgba(255,99,132,1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(255,99,132,1)',
                    data: [28, 48, 40, 19, 96, 27, 100]
                    }
                ]
            },
            PolarAreaChartOptions: {
                responsive: true,
                maintainAspectRatio: false,
            },
            

        };
    },

    methods: {
        fetchData() {
            axios.get('/instructormain')
            .then(response => {
                console.log(response.data);
                this.monthlyPaymentSum = response.data.monthlyPaymentSum;
                this.yearPaymentSum = response.data.yearPaymentSum;
                this.userCount = response.data.userCount;
                this.userCountDelete = response.data.userCountDelete;
                
                this.userCountsByYear = response.data.userCountsByYear;
                this.userCountsByAgeGroup = response.data.userCountsByAgeGroup;
                this.classTopData = response.data.classTopData;
                this.classLanguage = response.data.classLanguage;
                this.classDifficultyLevels = response.data.classDifficultyLevels;

                this.updateLineChartData(this.linetransformedData());

                this.updateRadarChartData(this.radartransformedData());

                this.updateDoughnutChartData(this.doughnuttransformedData());

                this.updatePieChartData(this.pietransformedData());

                this.updatePolarAreaChartData(this.polarAreatransformedData());
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
                    location.reload();
                });
            })
            .catch(err => {
                // console.log(err.response.data);
            });
        },

        formatNumber(value) {
            // console.log(value);
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        },

        linetransformedData() {
            // this.monthlyStats 객체를 배열로 변환하고, 각 항목에 대해 새로운 객체를 생성하여 반환
            return Object.entries(this.userCountsByYear).map(([month, data]) => {
                return {
                    // 각 객체의 속성으로는 'month', 'enrollmentFlagCount', 'chapterFlagCount'가 있음
                    month,
                    lastYear: data.lastYear,
                    currentYear: data.currentYear,
                };
            });
        },

        updateLineChartData(transData) {

            let result = {
                    labels: [],
                    datasets: [ {label: '전년도 회원', data: [], backgroundColor: '#f87979', borderColor: '#f87979'}, {label: '이번년도 회원', data2: [], backgroundColor: '#7371fc', borderColor: '#7371fc'} ],
                };
                // console.log(result);
            result.labels = transData.map(data => `${data.month}월`);
            result.datasets[0].data = transData.map(data => data.lastYear);
            result.datasets[1].data = transData.map(data => data.currentYear);
        
            // console.log(result);
            this.LineChartData = result;
        },

        radartransformedData() {
            return Object.entries(this.userCountsByAgeGroup).map(([key,data]) => {
                return {
                    key,
                    age_group: data.age_group,
                    count: data.count,
                };
            });
        },

        updateRadarChartData(transData) {
            // console.log(transData);
            this.RadarChartData = {
                labels: [],
                datasets: [
                {
                    label: '수강 나이대 정보',
                    backgroundColor: 'rgba(255,99,132,0.2)',
                    borderColor: 'rgba(0,0,0,0.1)',
                    pointBackgroundColor: ['#f94144','#f3722c','#f8961e','#f9844a','#f9c74f','#90be6d','#43aa8b','#4d908e','#577590','#277da1','#35007a'],
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(255,99,132,1)',
                    data: [],
                },
                // Add more datasets if needed
                ]
            };
            transData.forEach(item => {
                this.RadarChartData.labels.push(`${item.age_group}대`);
                this.RadarChartData.datasets[0].data.push(item.count);
            });
            // console.log(this.PolarAreaChartData.labels);
        },

        doughnuttransformedData() {
            return Object.entries(this.classTopData).map(([key,data]) => {
                return {
                    key,
                    classID: data.ClassID,
                    user_count: data.user_count,
                };
            });
        },

        updateDoughnutChartData(transData) {
            // console.log(transData);
            this.DoughnutChartData = {
                labels: [],
                datasets: [
                    {
                        label: '수강 인원',
                        backgroundColor: ['#ffadad','#ffd6a5','#fdffb6','#caffbf','#9bf6ff','#a0c4ff','#bdb2ff','#ffc6ff'],
                        pointBackgroundColor: 'rgba(179,181,198,1)',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: 'rgba(179,181,198,1)',
                        data: [],
                    },
                ],
            };
            transData.forEach(item => {
                this.DoughnutChartData.labels.push(`아이디 : ${item.classID}`);
                this.DoughnutChartData.datasets[0].data.push(item.user_count);
            });
            // console.log(this.PolarAreaChartData.labels);
        },

        pietransformedData() {
            return Object.entries(this.classLanguage).map(([key,data]) => {
                return {
                    key,
                    language_name: data.language_name,
                    user_count: data.user_count,
                };
            });
        },

        updatePieChartData(transData) {
            console.log(transData);
            this.PieChartData = {
                labels: [],
                datasets: [
                {
                    label: '수강 인원',
                    backgroundColor: ['#ffadad','#ffd6a5','#fdffb6','#caffbf','#9bf6ff','#a0c4ff'],
                    pointBackgroundColor: 'rgba(179,181,198,1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(179,181,198,1)',
                    data: [],
                },
                // Add more datasets if needed
                ]
            };
            transData.forEach(item => {
                this.PieChartData.labels.push(`언어명 : ${item.language_name}`);
                this.PieChartData.datasets[0].data.push(item.user_count);
            });
            // console.log(this.PolarAreaChartData.labels);
        },

        polarAreatransformedData() {
            return Object.entries(this.classDifficultyLevels).map(([key,data]) => {
                return {
                    key,
                    classDifficultyID: data.ClassDifficultyID,
                    user_count: data.user_count,
                };
            });
        },

        updatePolarAreaChartData(transData) {
            // console.log(transData);
            this.PolarAreaChartData = {
                labels: [],
                datasets: [
                {
                    label: '수강 인원',
                    backgroundColor: [
                        'rgba(255, 173, 173, 0.5)',
                        'rgba(255, 214, 165, 0.5)', 
                        'rgba(253, 255, 182, 0.5)',
                        'rgba(202, 255, 191, 0.5)' 
                        ],
                    pointBackgroundColor: 'rgba(179,181,198,1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(179,181,198,1)',
                    data: [],
                },
                // Add more datasets if needed
                ]
            };
            transData.forEach(item => {
                this.PolarAreaChartData.labels.push(`난이도 : ${item.classDifficultyID}`);
                this.PolarAreaChartData.datasets[0].data.push(item.user_count);
            });
            // console.log(this.PolarAreaChartData.labels);
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
            // this.loading = false;
        } else {
            // 스타일시트가 아직 로드되지 않았으면 재귀적으로 체크
            // setTimeout(checkLoad, 10);
        }
        };

        checkLoad();
    },

    mounted() {
        this.InstructorID = localStorage.getItem('InstructorID');
        this.adminChk = localStorage.getItem('adminChk');
        // console.log(localStorage.getItem('adminChk'));
        this.fetchData();
        
        setTimeout(() => {
            this.loading = false;
        }, 1500);
    },

    updated() {

    },
}
</script>
<style scoped>

</style>