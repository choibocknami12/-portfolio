<template>
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
                    <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header admin-main-h6-font-size">게시글 정보 관리</h6>
                            <a class="collapse-item active" href="/adminboardquestiondata">강의 질문 게시글 리스트</a>
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

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
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
                    <h1 class="h3 mb-2 text-gray-800">게시물 정보</h1>
                    <p class="mb-4">해당 정보는 해당 강사의 강의에 질문을 남긴 게시글에 대한 정보를 출력합니다. </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div style="display: flex; align-items: center; justify-content: space-between;" class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">강의질문 게시글 테이블</h6>
                            <div>
                                <!-- <form style="margin: 0px !important; border: 1px solid #ebebeb; border-radius: 8px;" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                    <div class="input-group">
                                        <input v-model="searchQuery" type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                        aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button @click="fetchData(1, searchQuery)" class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form> -->
                                <form class="keyword-search-form">
                                    <input v-model="searchQuery" type="search" value="" placeholder="Search" class="keyword-search-input">
                                    <button type="button" @click="fetchData(1, searchQuery, searchPicked)" class="keyword-search-button">
                                    <svg class="keyword-submit-button">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#search"></use>
                                    </svg>
                                    </button>
                                    <div class="keyword-search-option">
                                    <div>
                                        <input v-model="searchPicked" name="type" type="radio" value="1" id="keyword-type-users">
                                        <label for="keyword-type-users">
                                        <svg class="keyword-edit-pen-title" :class="{'keyword-type-on': searchPicked == 1}">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use>
                                        </svg>
                                        <span>UserNum</span>
                                        </label>
                                    </div>
                                    
                                    <div>
                                        <input v-model="searchPicked" name="type" type="radio" value="2" id="keyword-type-posts">
                                        <label for="keyword-type-posts">
                                        <svg class="keyword-edit-pen-title" :class="{'keyword-type-on': searchPicked == 2}">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#post"></use>
                                        </svg>
                                        <span>BoardTitle</span>
                                        </label>
                                    </div>
                                    <div>
                                        <input v-model="searchPicked" name="type" type="radio" value="3" id="keyword-type-special">
                                        <label for="keyword-type-special">
                                        <svg class="keyword-edit-pen-title" :class="{'keyword-type-on': searchPicked == 3}">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#special"></use>
                                        </svg>
                                        <span>BoardFlg</span>
                                        </label>
                                    </div>
                                    </div>
                                </form>
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" display="none">
                                    <symbol id="search" viewBox="0 0 32 32">
                                    <path d="M 19.5 3 C 14.26514 3 10 7.2651394 10 12.5 C 10 14.749977 10.810825 16.807458 12.125 18.4375 L 3.28125 27.28125 L 4.71875 28.71875 L 13.5625 19.875 C 15.192542 21.189175 17.250023 22 19.5 22 C 24.73486 22 29 17.73486 29 12.5 C 29 7.2651394 24.73486 3 19.5 3 z M 19.5 5 C 23.65398 5 27 8.3460198 27 12.5 C 27 16.65398 23.65398 20 19.5 20 C 15.34602 20 12 16.65398 12 12.5 C 12 8.3460198 15.34602 5 19.5 5 z" />
                                    </symbol>
                                    <symbol id="user" viewBox="0 0 32 32">
                                    <path d="M 16 4 C 12.145852 4 9 7.1458513 9 11 C 9 13.393064 10.220383 15.517805 12.0625 16.78125 C 8.485554 18.302923 6 21.859881 6 26 L 8 26 C 8 21.533333 11.533333 18 16 18 C 20.466667 18 24 21.533333 24 26 L 26 26 C 26 21.859881 23.514446 18.302923 19.9375 16.78125 C 21.779617 15.517805 23 13.393064 23 11 C 23 7.1458513 19.854148 4 16 4 z M 16 6 C 18.773268 6 21 8.2267317 21 11 C 21 13.773268 18.773268 16 16 16 C 13.226732 16 11 13.773268 11 11 C 11 8.2267317 13.226732 6 16 6 z" /></symbol>
                                    <symbol id="images" viewbox="0 0 32 32">
                                    <path d="M 2 5 L 2 6 L 2 26 L 2 27 L 3 27 L 29 27 L 30 27 L 30 26 L 30 6 L 30 5 L 29 5 L 3 5 L 2 5 z M 4 7 L 28 7 L 28 20.90625 L 22.71875 15.59375 L 22 14.875 L 21.28125 15.59375 L 17.46875 19.40625 L 11.71875 13.59375 L 11 12.875 L 10.28125 13.59375 L 4 19.875 L 4 7 z M 24 9 C 22.895431 9 22 9.8954305 22 11 C 22 12.104569 22.895431 13 24 13 C 25.104569 13 26 12.104569 26 11 C 26 9.8954305 25.104569 9 24 9 z M 11 15.71875 L 20.1875 25 L 4 25 L 4 22.71875 L 11 15.71875 z M 22 17.71875 L 28 23.71875 L 28 25 L 23.03125 25 L 18.875 20.8125 L 22 17.71875 z" />
                                    </symbol>
                                    <symbol id="post" viewbox="0 0 32 32">
                                    <path d="M 3 5 L 3 6 L 3 23 C 3 25.209804 4.7901961 27 7 27 L 25 27 C 27.209804 27 29 25.209804 29 23 L 29 13 L 29 12 L 28 12 L 23 12 L 23 6 L 23 5 L 22 5 L 4 5 L 3 5 z M 5 7 L 21 7 L 21 12 L 21 13 L 21 23 C 21 23.73015 21.221057 24.41091 21.5625 25 L 7 25 C 5.8098039 25 5 24.190196 5 23 L 5 7 z M 7 9 L 7 10 L 7 13 L 7 14 L 8 14 L 18 14 L 19 14 L 19 13 L 19 10 L 19 9 L 18 9 L 8 9 L 7 9 z M 9 11 L 17 11 L 17 12 L 9 12 L 9 11 z M 23 14 L 27 14 L 27 23 C 27 24.190196 26.190196 25 25 25 C 23.809804 25 23 24.190196 23 23 L 23 14 z M 7 15 L 7 17 L 12 17 L 12 15 L 7 15 z M 14 15 L 14 17 L 19 17 L 19 15 L 14 15 z M 7 18 L 7 20 L 12 20 L 12 18 L 7 18 z M 14 18 L 14 20 L 19 20 L 19 18 L 14 18 z M 7 21 L 7 23 L 12 23 L 12 21 L 7 21 z M 14 21 L 14 23 L 19 23 L 19 21 L 14 21 z" />
                                    </symbol>
                                    <symbol id="special" viewbox="0 0 32 32">
                                    <path d="M 4 4 L 4 5 L 4 27 L 4 28 L 5 28 L 27 28 L 28 28 L 28 27 L 28 5 L 28 4 L 27 4 L 5 4 L 4 4 z M 6 6 L 26 6 L 26 26 L 6 26 L 6 6 z M 16 8.40625 L 13.6875 13.59375 L 8 14.1875 L 12.3125 18 L 11.09375 23.59375 L 16 20.6875 L 20.90625 23.59375 L 19.6875 18 L 24 14.1875 L 18.3125 13.59375 L 16 8.40625 z M 16 13.3125 L 16.5 14.40625 L 17 15.5 L 18.1875 15.59375 L 19.40625 15.6875 L 18.5 16.5 L 17.59375 17.3125 L 17.8125 18.40625 L 18.09375 19.59375 L 17 19 L 16 18.40625 L 15 19 L 14 19.59375 L 14.3125 18.40625 L 14.5 17.3125 L 13.59375 16.5 L 12.6875 15.6875 L 13.90625 15.59375 L 15.09375 15.5 L 15.59375 14.40625 L 16 13.3125 z" />
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="text-align: center;" id="dataTable" width="100%" cellspacing="0">
                                    <colgroup>
                                        <col style="width: 4%;">
                                        <col style="width: 5%;">
                                        <col style="width: 4%;">
                                        <col style="width: 15%;">
                                        <col style="width: 25%;">
                                        <col style="width: 7%;">
                                        <col style="width: 5%;">
                                        <col style="width: 5%;">
                                        <col style="width: 5%;">
                                        <col style="width: 5%;">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th>강의번호</th>
                                            <th>게시글번호</th>
                                            <th>유저번호</th>
                                            <th>제목</th>
                                            <th>내용</th>
                                            <th>생성날짜</th>
                                            <th>해결유무</th>
                                            <th>게시물상태</th>
                                            <th>답변유무</th>
                                            <th>답변하기</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="datas in boardQuestionData">
                                            <th>{{ datas.ClassID }}</th>
                                            <th>{{ datas.BoardID }}</th>
                                            <th>{{ datas.UserID }}</th>
                                            <th style="text-align: left;">{{ datas.BoardTitle }}</th>
                                            <th style="text-align: left;">{{ datas.BoardComment }}</th>
                                            <th>{{ datas.created_at }}</th>
                                            <th>{{ datas.BoardFlg == 0 ? '미해결' : datas.BoardFlg == 1 ? '해결' : '상태를 확인할 수 없음' }}</th>
                                            <th>{{ datas.deleted_at == null ? '미삭제' : datas.deleted_at !== null ? '삭제' : '상태를 확인할 수 없음' }}</th>
                                            <th>{{ datas.BoardInstructorFlg == 0 ? '미해결' : datas.BoardInstructorFlg == 1 ? '해결' : '상태를 확인할 수 없음' }}</th>
                                            <th><button type="button" @click="handleModalClick(datas.BoardID)" style="padding: 0px 8px; border-radius: 3px; background-color: rgb(255, 95, 127); color: #fff; border: none;">답변하기</button></th>
                                        
                                        </tr>
                                    </tbody>
                                    
                                
                                </table>
                            
                                <div id="admin_modal_container" class="admin_modal_container" :class="{ 'admin_modal_show': showModal }">
                                    <!-- 모달 내용 -->
                                    <form>
                                        <div class="admin_modal_content">
                                            <!-- <div class="admin_modal_content_label_span">
                                                <div class="admin_modal_content_label">
                                                    <label for="">답변하기</label>
                                                </div>
                                                <div>
                                                    <span @click="showModal = false" class="admin_answer_modal_close">❌</span>
                                                </div>
                                            </div> -->
                                            
                                            <div class="admin_modal_content_text">
                                                <div class="admin_class_user_data_modal-container-header">
                                                    <h5 class="admin_class_user_data_modal-container-title">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true">
                                                        <path fill="none" d="M0 0h24v24H0z" />
                                                        <path fill="currentColor" d="M14 9V4H5v16h6.056c.328.417.724.785 1.18 1.085l1.39.915H3.993A.993.993 0 0 1 3 21.008V2.992C3 2.455 3.449 2 4.002 2h10.995L21 8v1h-7zm-2 2h9v5.949c0 .99-.501 1.916-1.336 2.465L16.5 21.498l-3.164-2.084A2.953 2.953 0 0 1 12 16.95V11zm2 5.949c0 .316.162.614.436.795l2.064 1.36 2.064-1.36a.954.954 0 0 0 .436-.795V13h-5v3.949z" />
                                                    </svg>
                                                    답변하기
                                                    </h5>
                                                    <button type="button" @click="showModal = false"   class="admin_class_user_data_icon-button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                        <path fill="none" d="M0 0h24v24H0z" />
                                                        <path fill="currentColor" d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                                                    </svg>
                                                    </button>
                                                </div>

                                                <div style="padding: 50px 10px;">
                                                    <textarea v-model="questionAnswerData.CommentContent"></textarea>
                                                </div>
                                                    <!-- <textarea></textarea> -->
                                                <div class="admin_class_user_data_modal-container-footer">
                                                    <button @click="submitAnswer()"  class="admin_class_user_data_button admin_class_user_data_is-primary">전송</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            
                                <table style="display: flex; justify-content: center; font-size: 15px; gap: 8px;">
                                    <tbody v-for="(page, index) in pagination" :key="index">
                                        <template v-if="page.url !== null">
											<a class="admin_qustuon_list_page_a" :class="{'admin_page_on': page.label == pageChk}" @click.prevent="fetchData(page.label, searchQuery, searchPicked)" href="#">{{ replaceString(page.label) }}</a>
										</template>
										<template v-else>
											<span>{{ replaceString(page.label) }}</span>
                                        </template>
                                    </tbody>
                                </table>
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
                            <span>Copyright &copy; Your Website 2020</span>
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

    </div>
</template>
<script>
import axios from 'axios';
import LoadingComponent from './LoadingComponent.vue';

export default {
    name: 'AdminBoardDataComponent',

    data() {
        return {
            loading: true, // 로딩 상태를 나타내는 데이터
            boardQuestionData: {},
            pagination: {},
			page: {},
			pageChk: {},
            searchQuery: '',
            adminChk: false,
            showModal: false,
            questionAnswerData: {
                CommentContent: '',
                InstructorID: this.InstructorID,
                BoardID: this.BoardID,
                UserID: this.$store.state.UserID
            },
            // questionAnswerItems: [],
            // questionAnswerData: {},
            amdinID: null,
            commentBoardID: null,
            // answerFlg: [],
            searchPicked: 1,
        };
    },

    methods: {
        fetchData(page = 1) {
            axios.get(`/instructoruserboardquestion?page=${page}&search=${this.searchQuery}&searchPicked=${this.searchPicked}`)
            .then(response => {
                // console.log(response.data)
                // console.log(response.data.boardData.data)
                this.boardQuestionData = response.data.boardData.data;
                this.pagination = response.data.boardData.links;
                this.page = response.data.boardData.current_page;
                this.pageChk = response.data.boardData.current_page;
            })
            .catch(error => {
                // console.error('Error fetching data:', error);
            });
        },
        replaceString(str) {
			const arrList = {
				'&laquo;': '≪',
				'&raquo;': '≫'
			}
			//  &laquo; 이전
			//  다음 &raquo;
			str = str.replace('&laquo;', '<');
			str = str.replace('&raquo;', '>');
			// console.log(str);
			return str;
		},
        handleModalClick(data) {
            // console.log(data);
            // console.log("버튼 클릭됨");

            this.commentBoardID = data;

            this.showModal = true;
            // console.log(this.showModal);
            // this.modalIndex = index;
            
        },
        submitAnswer() {
            // console.log("모달 상태:", this.showModal);
            // console.log("데이터값:", this.boardData);
            // console.log("데이터값1:", this.boardQuestionData);
            // console.log("데이터값2:", this.questionAnswerData);

            const url = '/adminboardquestiondata';
            const header = {
            headers: {
                "Content-Type": 'multipart/form-data',
                // 'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                },
            };

            let frm = new FormData();

            frm.append('CommentContent', this.questionAnswerData.CommentContent);
            frm.append('BoardID', this.commentBoardID);
            frm.append('InstructorID', this.adminID);

            // console.log("데이터값:", this.questionAnswerData);
            // console.log("데이터값:", this.boardQuestionData);
            // console.log(frm);

            axios.post(url, frm, header)
                .then(res => {
                    // console.log("questionAnswerData",res);

                    this.showModal = false;
                })
                .catch(err => {

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

    },

    mounted() {
        this.fetchData();

        this.adminChk = localStorage.getItem('adminChk');
        this.adminID = localStorage.getItem('InstructorID');
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

    components: {
        LoadingComponent,
    },
}
</script>
<style>
/* 모달 스타일 */
.admin_modal_container {
    display: none;
    /* position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    z-index: 100;
    opacity: 0.5; */
    background-color: rgba(0, 0, 0, 0.25);
    /* opacity: 0.5; */
}

.admin_modal_container.admin_modal_show {
    /* display: inline-block;
    position: relative;
    bottom: 50vh;
    left: 50vh;
    background-color: #ededed; */
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    z-index: 100;
}

.admin_modal_show {
    display: block;
}

.admin_modal_content_label_span{
    display: flex;
    flex-direction: row;
    /* gap: 50px; */
    justify-content: space-between;
    /* align-items: center; */
}

.admin_modal_content {
    display: flex; 
    flex-direction: column;
    flex-wrap: wrap;
    width: 30%;
    /* margin-left: 25%; */
    /* margin-top: 15%; */
    margin: auto;
}

.admin_modal_content_label {
    font-weight: 700;
    color: #fff;
}

.admin_modal_content_text {
    border: 1px solid rgba(89 90 91 / 30%);
  /* border-radius: 5px; */
  /* height: 30vh; */
    padding: 10px;
    background-color: #ffffff;
    display: flex;
    flex-direction: column;
    border-radius: 20px;
    margin-top: 30%;
    box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23)
}

.admin_modal_content_text_btn>button {
    border: none;
    padding: 5px 10px;
    margin-top: 5px;
    border-radius: 5px;
    font-size: 13px;
}

.admin_modal_content_text>div>textarea {
    background-color: #fff;
    border: none;
    resize: none;
    padding: 10px;
    width: 100%;
    height: 300px;
    overflow: hidden;
    border-radius: 5px;
    border: 1px solid #ddd;
    margin: 10px 0px;
    /* position: relative;
    top: 50%;
    right: 50%; */
}

.admin_answer_modal_close {
    cursor: pointer;
}

.keyword-type-on {
  fill: #4e73df !important;
}
</style>