<template>
<div class="wrapper">
    <div class="my_page_main">
        <div class="my_page_main_tap_uis">
            <div @click="handleTabClick(1)" class="my_page_main_tap_ui" :class="{ 'my_page_main_tap_ui_on': $store.state.myPageClickFlgTab == 1}">대시보드</div>
            <div @click="handleTabClick(2)" class="my_page_main_tap_ui" :class="{ 'my_page_main_tap_ui_on': $store.state.myPageClickFlgTab == 2}">계정정보</div>
            <div @click="handleTabClick(3)" class="my_page_main_tap_ui" :class="{ 'my_page_main_tap_ui_on': $store.state.myPageClickFlgTab == 3}">나의학습</div>
            <!-- <div @click="handleTabClick(4)" class="my_page_main_tap_ui" :class="{ 'my_page_main_tap_ui_on': $store.state.myPageClickFlgTab == 4}">강의노트</div> -->
            <div @click="handleTabClick(5)" class="my_page_main_tap_ui" :class="{ 'my_page_main_tap_ui_on': $store.state.myPageClickFlgTab == 5}">작성 게시글</div>
            
            <!-- <div @click="handleTabClick(6)" class="my_page_main_tap_ui">구매내역</div> -->
            <!-- <div class="my_page_main_tap_ui" onclick="showDashboardContent('공란')">공란</div> -->
        </div>


        <div v-if="$store.state.myPageClickFlgTab === 1" class="my_page_dashboard_box">
            <div class="my_page_dashboard_box_cover">
                <div class="dashboard_recent_learning_class">
                    <div class="dashboard_recent_learning_class_title">
                        <p>최근 학습 강의</p>
                    </div>
                    <div v-for="item in recentClassInfoData" class="dashboard_recent_learning_class_box">
                        <div class="recent_learning_class_title_cover">
                            <div class="recent_learning_class_title">
                                <a>강의명 : {{ item.ClassTitle }}</a>
                            </div>
                        </div>
                        <div class="recent_learning_class_content_cover">
                            <div class="recent_learning_class_content">
                                <p>강의내용 : {{ item.ClassDescription }}</p>
                            </div>
                        </div>
                        <div class="recent_learning_class_progress_cover">
                            <div class="recent_learning_class_progress">
                                <span>진도율 : </span>
                                <span>　{{ flaggedChaptersCount }}강</span>
                                <span style="margin-left: 5px; margin-right: 5px;">/</span>
                                <span>{{ totalChaptersCount }}강</span>
                                <span>({{ percentageFlaggedChapters }}%)</span>
                            </div>
                            <p>{{ getRelativeTime(item.updated_at) }}</p>
                        </div>
                        <div>
                            <progress class="class_datail_watch_progress_bar_progress" :value="percentageFlaggedChapters"  min="0" max="100" id="progress"></progress>
                        </div>
                        <!-- <div class="recent_learning_class_progress_bar_cover">
                            <div role="progressbar" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10.53" aria-label="진도율" class="recent_learning_class_progress_bar"></div>
                        </div> -->
                        <div class="recent_learning_class_button_cover">
                            <div class="recent_learning_class_button">
                                <a :href="'/classboarddetail/' + item.ClassID">바로 학습</a>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- <div class="dashboard_weekly_study_class">
                    <div class="dashboard_weekly_study_class_title">
                        <p>주간 학습 정보</p>
                    </div>
                    <div class="dashboard_weekly_study_class_box">
                        <div class="weekly_study_class_title_cover">
                            <div class="weekly_study_class_title">
                                <button class="weekly_study_class_btn" @click="decrementWeek"><svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 7px;" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/></svg></button>
                                <div class="weekly_study_class_title_input_cover">
                                    <div class="weekly_study_class_title_input_label">
                                        <label for="">주차선택</label>
                                    </div>
                                    <div class="weekly_study_class_title_input_label_button">
                                        <input class="weekly_input_date" type="date" v-model="selectedDate" @change="handleDateChange">
                                        <span>{{ currentWeek }}</span>
                                    </div>
                                </div>
                                <input type="hidden" value="">
                                <button class="weekly_study_class_btn" @click="incrementWeek"><svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 7px;" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg></button>
                            </div>
                        </div>
                        <div class="weekly_study_class_data_cover">
                            <div v-for="(dayData, day) in weeklyStats" :key="day" class="weekly_study_class_data">
                                <span>{{ convertToKoreanDay(day) }} : </span>
                                <span>학습 강의 : </span>
                                <span> {{ dayData.enrollmentFlagCount }}개</span>
                                <span style="margin-left: 5px; margin-right: 5px;">/</span>
                                <span>학습 챕터 : </span>
                                <span> {{ dayData.chapterFlagCount }}개</span>
                            </div>
                        </div>
                        <div class="weekly_study_class_total_cover">
                            <div class="weekly_study_class_total">
                                <span>총 학습 강의 : </span>
                                <span>{{ totalClassCount }}</span>
                            </div>
                            <div class="weekly_study_class_total">
                                <span>총 학습 챕터 : </span>
                                <span>{{ totalChapterCount }}</span>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="dashboard_weekly_study_class">
                    <div class="dashboard_weekly_study_class_title">
                        <p>주간 학습 정보</p>
                    </div>
                    <div class="dashboard_weekly_study_class_box">
                        <div class="weekly_study_class_title_cover">
                            <div class="weekly_study_class_title">
                                <button class="weekly_study_class_btn" @click="decrementWeek"><svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 7px;" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/></svg></button>
                                <div class="weekly_study_class_title_input_cover">
                                    <div class="weekly_study_class_title_input_label">
                                        <label for="">주차선택</label>
                                    </div>
                                    <div class="weekly_study_class_title_input_label_button">
                                        <input class="weekly_input_date" type="date" v-model="selectedDate" @change="handleDateChange">
                                        <span>{{ currentWeek }}</span>
                                    </div>
                                </div>
                                <input type="hidden" value="">
                                <button class="weekly_study_class_btn" @click="incrementWeek"><svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 7px;" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg></button>
                            </div>
                        </div>
                        <div class="weekly_study_class_data_cover">
                            <div v-for="(dayData, day) in weeklyStats" :key="day" class="weekly_study_class_data_chart">
                                {{ convertToKoreanDay(day) }}
                                <Doughnut @mousemove="updatePosition(day)" @mouseover="showTooltip[day] = true" @mouseout="showTooltip[day] = false" :id="'my_doughnut_chart_id_' + day" :options="chartOptions" :data="chartData[day]"/>
                                <div v-if="showTooltip[day]" class="tooltip" :style="{ top: `${position.y + 25}px`, left: `${position.x + 15}px` }">
                                    <p>{{ convertToKoreanDay(day) }}</p>
                                    <br>
                                    <p>학습 강의 : {{ dayData.enrollmentFlagCount}}개</p>
                                    <p>학습 챕터 : {{ dayData.chapterFlagCount }}개</p>
                                </div>
                            </div>
                        </div>
                        <div class="weekly_study_class_total_cover">
                            <div class="weekly_study_class_total1">
                                <span>총 학습 강의 : </span>
                                <span>{{ totalClassCount }}</span>
                            </div>
                            <div class="weekly_study_class_total2">
                                <span>총 학습 챕터 : </span>
                                <span>{{ totalChapterCount }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="dashboard_annual_study_class">
                    <div class="dashboard_annual_study_class_title">
                        <p>연간 학습 정보</p>
                    </div>
                    <div class="dashboard_annual_study_class_box">
                        <div class="weekly_study_class_title_cover">
                            <div class="weekly_study_class_title">
                                <button @click="prevYear" class="weekly_study_class_title_button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/></svg></button>
                                <div class="weekly_study_class_title_input_cover">
                                    <div class="weekly_study_class_title_input_label">
                                    </div>
                                    <div class="weekly_study_class_title_input_label_button">
                                        <button style="display: none;">2023. 12. 05</button>
                                    </div>
                                    <p>{{ selectedYear }}년</p>
                                </div>
                                <input type="hidden" value="">
                                <button  @click="nextYear" :disabled="isNextYearDisabled" class="weekly_study_class_title_button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg></button>
                            </div>
                        </div>
                        <div class="weekly_study_class_data_cover">
                            <Bar id="my-chart-id" :options="barChartOptions" :data="barChartData"/>
                            <div v-for="(data, month) in monthlyStats" :key="month" class="weekly_study_class_data">
                                <span>{{ month }}월 : </span>
                                <span>학습 강의 : </span>
                                <span>{{ data.enrollmentFlagCount }}개</span>
                                <span style="margin-left: 5px; margin-right: 5px;">/</span>
                                <span>학습 챕터 : </span>
                                <span>{{ data.chapterFlagCount }}개</span>
                            </div>
                        </div>
                        <div class="weekly_study_class_total_cover">
                            <div class="weekly_study_class_total">
                                <span>총 학습 강의 : {{ monthTotalClassCount }}</span>
                            </div>
                            <div class="weekly_study_class_total">
                                <span>총 학습 챕터 : {{ monthTotalChapterCount }}</span>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="dashboard_annual_study_class">
                    <div class="dashboard_annual_study_class_title">
                        <p>연간 학습 정보</p>
                    </div>
                    
                    <div class="dashboard_annual_study_class_box">
                        <div class="month_study_class_title_cover">
                            <div class="month_study_class_title">
                                <button @click="prevYear" class="month_study_class_title_button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/></svg></button>
                                <div class="month_study_class_title_input_cover">
                                    <div class="month_study_class_title_input_label">
                                    </div>
                                    <div class="month_study_class_title_input_label_button">
                                        <button style="display: none;">2023. 12. 05</button>
                                    </div>
                                    <p>{{ selectedYear }}년</p>
                                </div>
                                <input type="hidden" value="">
                                <button  @click="nextYear" :disabled="isNextYearDisabled" class="month_study_class_title_button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg></button>
                            </div>
                        </div>
                        <div class="month_study_class_data_cover">
                            <div class="month_study_class_data">
                                <Bar id="my-chart-id" :options="barChartOptions" :data="barChartData"/>
                                <div class="month_study_class_total">
                                    <span class="month_study_class_total_box_1">총 학습 강의 : {{ monthTotalClassCount }}</span>
                                    <span style="opacity: 0.3; margin: 0px 10px 0px 10px;"></span>
                                    <span class="month_study_class_total_box_2">총 학습 챕터 : {{ monthTotalChapterCount }}</span>
                                </div>
                            </div>
                            <div class="month_study_class_data_chart">
                                <div>
                                    <Radar style="border: 1px solid #eaeaea; height: 80%; width: 80%; padding: 10px;" id="my-chart-id" :options="RadarChartOptions" :data="RadarChartData"/>
                                </div>
                                <div style="border: 1px solid #eaeaea; padding: 10px; border-radius: 5px;">
                                    <div class="radar_right_data_title">사용자 언어 통계</div>
                                    <div v-for="data in languagsData" class="radar_right_data">
                                        <span>{{ data.ClassLanguageName }} : </span>
                                        <span>{{ data.languageCount}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div v-if="$store.state.myPageClickFlgTab === 2" class="my_page_users_box">
            <div class="my_page_users_box_cover">
                <div class="users_basic_information">
                    <div class="users_basic_information_title">
                        <p>기본 정보</p>
                    </div>
                    <div class="users_basic_information_box">
                        <div class="users_basic_information_cover">
                            <div class="users_basic_information_title_name">
                                <a>이름</a>
                            </div>
                            <div class="users_basic_information_content_cover">
                                <div>
                                    <p>{{ newUserInfoItems.UserName }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="users_basic_information_cover">
                            <div class="users_basic_information_title_name">
                                <a>생년월일</a>
                            </div>
                            <div class="users_basic_information_content_cover">
                                <div>
                                    <p>{{ newUserInfoItems.UserBirthDate }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="users_basic_information_cover">
                            <div class="users_basic_information_title_name">
                                <a>전화번호</a>
                            </div>
                            <div class="users_basic_information_content_cover">
                                <div style="border: 1px solid #979797;">
                                    <input type="text" name="" id="" v-model="UserPhoneNumber">
                                </div>
                            </div>
                        </div>
                        <div class="users_basic_information_button_cover">
                            <div class="users_basic_information_button">
                                <button type="button" @click="updateUserbasicData() ">전화번호 수정 하기</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="users_basic_information">
                    <div class="users_basic_information_title">
                        <p>주소 정보</p>
                    </div>
                    <div class="users_basic_information_box">
                        <div class="users_basic_information_cover">
                            <div class="users_basic_address_cover">
                                <div class="users_basic_information_title_name">
                                    <a>우편 번호</a>
                                </div>
                                <div>
                                    <button type="button" class="user_address_button" @click="openDaumPostcode">주소 찾기</button>
                                </div>
                            </div>
                            <div class="users_basic_information_content_cover">
                                <div style="border: 1px solid #979797;">
                                    <input type="text" :value="frmAddressData.UserPostcode">
                                </div>
                            </div>
                        </div>
                        <div class="users_basic_information_cover">
                            <div class="users_basic_information_title_name">
                                <a>도로명 주소</a>
                            </div>
                            <div class="users_basic_information_content_cover">
                                <div style="border: 1px solid #979797;">
                                    <input type="text" :value="frmAddressData.UserRoadAddress">
                                </div>
                            </div>
                        </div>
                        <div class="users_basic_information_cover">
                            <div class="users_basic_information_title_name">
                                <a>상세 주소</a>
                            </div>
                            <div class="users_basic_information_content_cover">
                                <div style="border: 1px solid #979797;">
                                    <input type="text" v-model="frmAddressData.UserDetailedAddress">
                                    <!-- <p>대구광역시 중구 공평로 105, 노마즈하우스 1528호</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="users_basic_information_button_cover">
                            <div class="users_basic_information_button">
                                <button type="button" @click="updateUserAddressData()">주소 수정 하기</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="users_basic_information">
                    <div class="users_basic_information_title">
                        <p>계정 정보</p>
                    </div>
                    <div class="users_basic_information_box">
                        <div class="users_basic_information_cover">
                            <div class="users_basic_information_title_name">
                                <a>이메일</a>
                            </div>
                            <div class="users_basic_information_content_cover">
                                <div>
                                    <p>{{ newUserInfoItems.UserEmail }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="users_basic_information_cover" style="margin-bottom: 12px;">
                            <div class="users_basic_information_title_name">
                                <a>비밀번호</a>
                            </div>
                            <div class="users_basic_information_content_cover">
                                <div style="border: 1px solid #979797;">
                                    <input type="password" placeholder="현재 비밀번호를 입력해주세요." v-model="UserPassword">
                                </div>
                            </div>
                        </div>
                        <div class="users_basic_information_cover" style="margin-bottom: 12px;">
                            <div class="users_basic_information_content_cover">
                                <div style="border: 1px solid #979797;">
                                    <input type="password" placeholder="변경할 비밀번호를 입력해주세요." v-model="NewUserPassword">
                                    <!-- <p>대구광역시 중구 공평로 105, 노마즈하우스 1528호</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="users_basic_information_cover">
                            <div class="users_basic_information_content_cover">
                                <div style="border: 1px solid #979797;">
                                    <input type="password" placeholder="변경할 비밀번호를 확인을 입력해주세요." v-model="NewUserPasswordChk">
                                    <!-- <p>대구광역시 중구 공평로 105, 노마즈하우스 1528호</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="users_basic_information_button_cover">
                            <div class="users_basic_information_button">
                                <button type="button" @click="updateUserPasswordData()">비밀번호 수정 하기</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="users_basic_information_password_cover">
                    <!-- <div class="users_basic_information_title">
                        <p>탈퇴 확인</p>
                    </div> -->
                    <!-- <div class="users_basic_password_box">
                        <div class="users_basic_password_cover">
                            <div class="users_basic_password_title">
                                <span class="users_password_titel" >이메일</span>
                                <input class="users_password_input" type="password" placeholder="이메일을 입력하세요" v-model="deletedEmail">
                                <span class="users_password_titel">비밀번호</span>
                                <input class="users_password_input" type="password" placeholder="비밀번호를 입력하세요" v-model="deletedPassword">
                            </div>
                        </div>
                    </div> -->
                    <!-- <button type="button" class="users_password_button" style="margin-right: 50px;">비밀번호 확인</button>          -->
                    <button style="background-color: #750550 !important;" type="button" class="users_password_button" @click="deleteUserData()">탈퇴하기</button>
                </div>
            </div>
        </div>



        <div v-if="$store.state.myPageClickFlgTab === 3" class="my_page_class_box" style="height: auto;">
            <div class="my_page_class_box_cover">
                <div class="class_basic_information">
                    <div class="class_basic_information_title">
                        <p>수강 정보</p>
                    </div>
                </div>

                <div class="my_page_container_new_box">
                    <ul class="my_page_container_new">
                        <a v-for="item in newUserClassInfoItem" :href="'/classboarddetail/' + item.ClassID">
                            <li class="my_page_container_new_card">
                                <div class="my_page_container_new_card_img">
                                    <img :src="'/' + item.ClassImg" alt="">
                                </div>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>


        <div v-if="$store.state.myPageClickFlgTab === 4" class="my_page_class_box">
            <div class="my_page_class_box_cover">
                <div class="class_basic_information">
                    <div class="class_basic_information_title">
                        <p>강의 노트</p>
                    </div>
                </div>

                <div class="users_class_note_full_cover">
                    <div class="users_class_note_box">
                        <div class="users_class_note_cover">
                            <div class="users_class_note_content_box">
                                <span class="users_class_note_content">강의명</span>
                                <span class="users_class_note_content">챕터명</span>
                                <span class="users_class_note_content">노트내용</span>
                                <button class="users_class_note_button">강의 이동</button>
                            </div>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>


        <div v-if="$store.state.myPageClickFlgTab === 5" class="my_page_class_box" style="height: 100%;">
            <div class="my_page_class_box_cover">
                <div class="class_basic_information">
                    <div class="class_basic_information_title">
                        <p>작성 게시글</p>
                    </div>
                </div>

                <div v-for="item in newUserBoardInfoItem" class="users_class_thread_full_cover">
                    <div class="users_class_thread_box">
                        <div class="users_class_thread_cover">
                            <div class="users_class_thread_content_box">
                                <span class="users_class_thread_content">{{ item.created_at }}</span>
                                <span class="users_class_thread_content">{{ item.BoardFlg === '0' ? '미해결' : '해결' }}</span>
                                <span class="users_class_thread_content">{{ item.BoardTitle }}</span>
                                <a :href="'/boardDetail/' + item.BoardID" class="users_class_thread_button">게시판 이동</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div v-if="$store.state.myPageClickFlgTab === 6" class="my_page_class_box">
            <div class="my_page_class_box_cover">
                <div class="class_basic_information">
                    <div class="class_basic_information_title">
                        <p>구매 내역</p>
                    </div>
                </div>

                <div class="users_class_thread_full_cover">
                    <div class="users_class_thread_box">
                        <div class="users_class_thread_cover">
                            <div class="users_class_thread_content_box">
                                <span class="users_class_thread_content">구매일자</span>
                                <span class="users_class_thread_content">강의진행률</span>
                                <span class="users_class_thread_content">강의제목</span>
                                <button class="users_class_thread_button">강의 이동</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="users_class_thread_full_cover">
                    <div class="users_class_thread_box">
                        <div class="users_class_thread_cover">
                            <div class="users_class_thread_content_box">
                                <span class="users_class_thread_content">구매일자</span>
                                <span class="users_class_thread_content">강의진행률</span>
                                <span class="users_class_thread_content">강의제목</span>
                                <button class="users_class_thread_button">강의 이동</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="users_class_thread_full_cover">
                    <div class="users_class_thread_box">
                        <div class="users_class_thread_cover">
                            <div class="users_class_thread_content_box">
                                <span class="users_class_thread_content">구매일자</span>
                                <span class="users_class_thread_content">강의진행률</span>
                                <span class="users_class_thread_content">강의제목</span>
                                <button class="users_class_thread_button">강의 이동</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="users_class_thread_full_cover">
                    <div class="users_class_thread_box">
                        <div class="users_class_thread_cover">
                            <div class="users_class_thread_content_box">
                                <span class="users_class_thread_content">구매일자</span>
                                <span class="users_class_thread_content">강의진행률</span>
                                <span class="users_class_thread_content">강의제목</span>
                                <button class="users_class_thread_button">강의 이동</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="users_class_thread_full_cover">
                    <div class="users_class_thread_box">
                        <div class="users_class_thread_cover">
                            <div class="users_class_thread_content_box">
                                <span class="users_class_thread_content">구매일자</span>
                                <span class="users_class_thread_content">강의진행률</span>
                                <span class="users_class_thread_content">강의제목</span>
                                <button class="users_class_thread_button">강의 이동</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="users_class_thread_full_cover">
                    <div class="users_class_thread_box">
                        <div class="users_class_thread_cover">
                            <div class="users_class_thread_content_box">
                                <span class="users_class_thread_content">구매일자</span>
                                <span class="users_class_thread_content">강의진행률</span>
                                <span class="users_class_thread_content">강의제목</span>
                                <button class="users_class_thread_button">강의 이동</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
</template>
<script>
import Swal from 'sweetalert2';
import { Doughnut, Bar, Radar } from 'vue-chartjs';
import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, DoughnutController, ArcElement, LinearScale, CategoryScale, PointElement, RadialLinearScale, LineElement} from 'chart.js';

ChartJS.register(Title, Tooltip, Legend, BarElement, DoughnutController, ArcElement, LinearScale, CategoryScale, RadialLinearScale, PointElement, LineElement);
export default {
name: 'UserMyPageComponent',

components: { Doughnut, Bar, Radar },

created() {
    // 초기 데이터 설정
    // for (let day in this.weeklyStats) {
    //     this.$set(this.chartData, day, {
    //         labels: ['Study', 'Empty'],
    //         datasets: [{
    //             data: [this.weeklyStats[day].enrollmentFlagCount, 0],
    //             backgroundColor: ['#FF6384', 'transparent'],
    //             hoverBackgroundColor: ['#ff3d66', 'transparent'],
    //         }],
    //     });
    // this.$set(this.showTooltip, day, false);
    // }
},

data() {
    return {
        newUserInfoItems: [],
        newUserClassInfoItem: [],
        newUserBoardInfoItem: [],

        // 마이페이지 날짜 입력 칸 데이터 바인딩
        selectedDate: this.getCurrentDate(),
        weekdays: [],
        currentWeek: '',
        weekStart: [],
        weekEnd: [],
        weeklyStats: {},
        monthlyStats: {},
        lectures: {},
        totalClassCount: 0,
        totalChapterCount: 0,
        selectedYear: new Date().getFullYear(),
        yearStart: '',
        yearEnd: '',
        
        frmAddressData: {
            UserPostcode: '',
            UserRoadAddress: '',
            UserDetailedAddress: '',
        },
        UserPhoneNumber: '',


        UserPassword: '',
        NewUserPassword: '',
        NewUserPasswordChk: '',

        monthTotalClassCount: 0,
        monthTotalChapterCount: 0,

        flaggedChaptersCount: 0,
        totalChaptersCount: 0,
        percentageFlaggedChapters: 0,
        recentClassInfoData: {},

        deletedEmail: '',
        deletedPassword: '',
        // chartData: {},
        chartOptions: {
            responsive: true,
            cutoutPercentage: 50,
            plugins: {
                tooltip: {
                enabled: false,
                },
            },
        },

        chartData: {
            Mon: {
                labels: ['March', 'April'],
                datasets: [
                    {
                    },
                    {
                    },
                ],
            },
            Tue: {
                labels: ['March', 'April'],
                datasets: [
                    {
                    },
                    {
                    },
                ],
            },
            Wed: {
                labels: ['May', 'June'],
                datasets: [
                    {
                    },
                    {
                    },
                ],
            },
            Thu: {
                labels: ['July', 'August'],
                datasets: [
                    {
                    },
                    {
                    },
                ],
            },
            Fri: {
                labels: ['September', 'October'],
                datasets: [
                    {
                    },
                    {
                    },
                ],
            },
            Sat: {
                labels: ['November', 'December'],
                datasets: [
                    {
                    },
                    {
                    },
                ],
            },
            Sun: {
                labels: ['Extra', 'Extra'],
                datasets: [
                    {
                    },
                    {
                    },
                ],
            },
        },

        showTooltip: {},
        position: { x: 0, y: 0 },

        barChartData: {
            labels: [ '1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월' ],
            datasets: [ { data: [] },{ data: [] } ]
        },

        barChartOptions: {
            scales: {
                x: {
                    ticks: {
                        padding: 3
                    }
                },
                y: {
                    grid: {
                        drawBorder: false,
                        color: "#b0aefb",
                        lineWidth: 2
                    },
                    min: 0,
                    max: 20,
                    ticks: {
                        stepSize: 10,
                    }
                }
            },
            responsive: true
        },

        RadarChartData: {
            labels: [],
            datasets: [
            {
            },
            // Add more datasets if needed
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
            // Add more Radar chart options if needed
            scales: {
                r: {
                    max: 10, // 최대값 설정
                    angleLines: {
                        display: true,
                    },
                    pointLabels: {
                        fontSize: 14,
                    },
                    ticks: {
                        stepSize:2,
                    },
                },
            },
        },
        languagsData: {},
    }
},

computed: {
    isNextYearDisabled() {
        const currentYear = new Date().getFullYear();
        this.yearStart = `${this.selectedYear}0101`;
        this.yearEnd = `${this.selectedYear}1231`;
        return this.selectedYear === currentYear;
    },
},


mounted() {
    this.calculateWeekdays();
    this.calculateCurrentWeek();


    const script = document.createElement('script');
    script.src = 'https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js';
    script.async = true;

    // 스크립트 로드 완료 후 실행될 콜백 함수
    script.onload = () => {
        // 이제 스크립트를 사용할 수 있음
        // console.log('DaumMapApi.js 로드 완료!');
        // 여기서부터 DaumMapApi.js를 사용할 수 있음
    };

    // document.head에 스크립트 추가
    document.head.appendChild(script);
},

methods: {
    fetchData() {
        axios.get('/getmypagedashboard', {
            params: {
                weekStart: this.weekStart,
                weekEnd: this.weekEnd,
                yearStart: this.yearStart,
                yearEnd: this.yearEnd,
            }
        })
        .then(response => {
            // console.log(response.data);
            // console.log(response.data.userData);
            // console.log(response.data.ClassData);
            this.newUserInfoItems = response.data.userData;
            this.newUserClassInfoItem = response.data.classData;
            this.newUserBoardInfoItem = response.data.boardData;
            this.weeklyStats = response.data.weeklyStats;
            this.monthlyStats = response.data.monthlyStats;
            this.UserPhoneNumber = response.data.userData.UserPhoneNumber;
            this.frmAddressData.UserPostcode = response.data.userData.UserPostcode;
            this.frmAddressData.UserRoadAddress = response.data.userData.UserRoadAddress;
            this.frmAddressData.UserDetailedAddress = response.data.userData.UserDetailedAddress;
            this.flaggedChaptersCount = response.data.flaggedChaptersCount;
            this.totalChaptersCount = response.data.totalChaptersCount;
            this.percentageFlaggedChapters = response.data.percentageFlaggedChapters;
            this.recentClassInfoData = response.data.recentClassInfoData;
            this.languagsData = response.data.languagsData;
            this.calculateTotals();
            this.monthcalculateTotals();

            this.generateChartData();
            // console.log(this.transformedData());
            this.updateChartData(this.transformedData());
            this.processLanguageData(this.transformedData2());

        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
    },

    transformedData() {
        // this.monthlyStats 객체를 배열로 변환하고, 각 항목에 대해 새로운 객체를 생성하여 반환
        return Object.entries(this.monthlyStats).map(([month, data]) => {
            return {
                // 각 객체의 속성으로는 'month', 'enrollmentFlagCount', 'chapterFlagCount'가 있음
                month,
                enrollmentFlagCount: data.enrollmentFlagCount,
                chapterFlagCount: data.chapterFlagCount,
            };
        });
    },

    
    transformedData2() {
        return Object.entries(this.languagsData).map(([key,data]) => {
            return {
                key,
                ClassLanguageName: data.ClassLanguageName,
                languageCount: data.languageCount,
            };
        });
    },
    
    handleTabClick(tabNumber) {
        this.$store.commit('setMyPageTab', tabNumber);
    },

    // 현재 날짜를 가져오는 메서드
    getCurrentDate() {
        const today = new Date(); // 현재 날짜를 투데이에 넣어줌
        const year = today.getFullYear(); // 현재 년도를 넣어줌
        const month = today.getMonth() + 1; // 월은 0부터 시작하므로 1을 더하기
        const day = today.getDate(); // 현재 일을 넣어줌

        // 해당 값을 계산해서 리턴 해 줌
        return `${year}-${month.toString().padStart(2, '0')}-${day.toString().padStart(2, '0')}`;
    },

    // 날짜가 변경됐을 때 호출하는 메소드로 주차와 요일을 다시 계산 후 화면 출력
    handleDateChange() {
        // 선택된 날짜 주차 계산
        this.calculateWeekdays();
        // 현재 날짜 주차 계산
        this.calculateCurrentWeek();
    },

    // 선택된 날짜의 주차를 계산함
    calculateWeekdays() {
        // 현재 선택된 날짜를 넣어줌, 값이 없을 경우에는 현재 데이터 값을 넣어줌
        const currentDate = this.selectedDate ? new Date(this.selectedDate) : new Date();

        // 햔재 날짜에서 (currentDate.getDay() + 6) % 7) 값을 빼서 주의 첫 날을 계산
        const startYearDate = new Date(currentDate);
        startYearDate.setDate(currentDate.getDate() - (currentDate.getDay() + 6) % 7); // 주의 첫 날로 설정

        // 현재 날짜에서 (currentDate.getDay() + 6) % 7 값을 더해서 주의 마지막 날을 계산
        const endYearDate = new Date(currentDate);
        endYearDate.setDate(currentDate.getDate() + (6 - (currentDate.getDay() + 6) % 7)); // 주의 마지막 날로 설정

        // 주의 첫 날 부터 7일 동안을 계산해서 해당 요일을 출력
        const weekdays = [];
        for (let i = 0; i < 7; i++) {
            const currentDate = new Date(startYearDate);
            currentDate.setDate(startYearDate.getDate() + i);
            weekdays.push(this.formatDate(currentDate));
        }

        
        const yearStart = startYearDate.getFullYear();
        const monthStart = (startYearDate.getMonth() + 1).toString().padStart(2, '0');
        const dayStart = startYearDate.getDate().toString().padStart(2, '0');
        this.weekStart = `${yearStart}${monthStart}${dayStart}`;

        const yearEnd = endYearDate.getFullYear();
        const monthEnd = (endYearDate.getMonth() + 1).toString().padStart(2, '0');
        const dayEnd = endYearDate.getDate().toString().padStart(2, '0');
        this.weekEnd = `${yearEnd}${monthEnd}${dayEnd}`;

        this.weekdays = weekdays;
        this.fetchData();
    },

    // 현재 날짜의 주차를 계산함
    calculateCurrentWeek() {
        const currentDate = this.selectedDate ? new Date(this.selectedDate) : new Date();
        const startOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
        const startOfWeek = new Date(startOfMonth);

    // 요일이 월요일(1)부터 일요일(7)까지인 경우를 생각
        const offset = (startOfWeek.getDay() + 6) % 7;

        startOfWeek.setDate(startOfWeek.getDate() - offset);

        const days = Math.floor((currentDate - startOfWeek) / (24 * 60 * 60 * 1000)) + 1;
        const currentMonthWeek = Math.ceil(days / 7);
        this.currentWeek = `${(currentDate.getFullYear() % 100)}년 ${currentDate.getMonth() + 1}월 ${currentMonthWeek}주차`;
    },

    // 날짜를 주어진 형식으로 포맷하는 메서드
    formatDate(date) {
        if (date instanceof Date) {
            const options = { weekday: 'short', locale: 'ko-KR' };
            return date.toLocaleDateString('ko-KR', options);
        } else {
            return '';
        }
    },

    // 아래 두 메소드는 주차를 증감 시키는 것, 현재 선택된 날을 기준으로 +-7일을 해줌
    incrementWeek() {
        const currentDate = this.selectedDate ? new Date(this.selectedDate) : new Date();
        currentDate.setDate(currentDate.getDate() + 7);
        this.selectedDate = `${currentDate.getFullYear()}-${(currentDate.getMonth() + 1).toString().padStart(2, '0')}-${currentDate.getDate().toString().padStart(2, '0')}`;
        this.calculateWeekdays();
        this.calculateCurrentWeek();
    },
    decrementWeek() {
        const currentDate = this.selectedDate ? new Date(this.selectedDate) : new Date();
        currentDate.setDate(currentDate.getDate() - 7);
        this.selectedDate = `${currentDate.getFullYear()}-${(currentDate.getMonth() + 1).toString().padStart(2, '0')}-${currentDate.getDate().toString().padStart(2, '0')}`;
        this.calculateWeekdays();
        this.calculateCurrentWeek();
    },
    convertToKoreanDay(day) {
    const dayMap = {
            'Mon': '월',
            'Tue': '화',
            'Wed': '수',
            'Thu': '목',
            'Fri': '금',
            'Sat': '토',
            'Sun': '일',
        };

        return dayMap[day] || day;
    },
    calculateTotals() {
        this.totalClassCount = Object.values(this.weeklyStats)
            .reduce((total, dayData) => total + dayData.enrollmentFlagCount, 0);

        this.totalChapterCount = Object.values(this.weeklyStats)
            .reduce((total, dayData) => total + dayData.chapterFlagCount, 0);
    },
    prevYear() {
        this.selectedYear--;
        this.yearStart = `${this.selectedYear}0101`;
        this.yearEnd = `${this.selectedYear}1231`;
        this.fetchData();
    },
    nextYear() {
        if (!this.isNextYearDisabled) {
            this.selectedYear++;
            this.yearStart = `${this.selectedYear}0101`;
            this.yearEnd = `${this.selectedYear}1231`;
            this.fetchData();
        } 
    },
    monthcalculateTotals() {
        this.monthTotalClassCount = Object.values(this.monthlyStats)
            .reduce((total, data) => total + data.enrollmentFlagCount, 0);

        this.monthTotalChapterCount = Object.values(this.monthlyStats)
            .reduce((total, data) => total + data.chapterFlagCount, 0);
    },
    openDaumPostcode() {
        new daum.Postcode({
        oncomplete: function (data) {
            this.handleAddressComplete(data);
        }.bind(this),
        }).open();
    },
    handleAddressComplete(data) {
        // 도로명 주소의 노출 규칙에 따라 주소를 표시하는 로직
        var roadAddr = data.roadAddress;
        var extraRoadAddr = '';

        if (data.bname !== '' && /[동|로|가]$/g.test(data.bname)) {
            extraRoadAddr += data.bname;
        }

        if (data.buildingName !== '' && data.apartment === 'Y') {
            extraRoadAddr += (extraRoadAddr !== '' ? ', ' + data.buildingName : data.buildingName);
        }

        if (extraRoadAddr !== '') {
            extraRoadAddr = ' (' + extraRoadAddr + ')';
        }

        // 주소 정보를 컴포넌트 데이터에 저장
        this.sampleData = {
            postcode: data.zonecode,
            roadAddress: roadAddr,
        };
        
        this.frmAddressData = {
            UserPostcode: data.zonecode,
            UserRoadAddress: roadAddr,
        };

        // this.frmUserData.UserAddress = `${this.sampleData.postcode} ${this.sampleData.roadAddress}`;
    },
    updateUserAddressData() {
        // 주소 변경 확인 대화 상자를 띄우고, 사용자가 확인을 선택한 경우에만 주소를 변경합니다.
        Swal.fire({
            title: '주소 변경',
            text: '주소를 변경하시겠습니까?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '변경',
            cancelButtonText: '취소'
        }).then((result) => {
            if (result.isConfirmed) {
            axios.put('/useraddressdataupdate', {
                UserID: this.newUserInfoItems.UserID,
                UserPostcode: this.frmAddressData.UserPostcode,
                UserRoadAddress: this.frmAddressData.UserRoadAddress,
                UserDetailedAddress: this.frmAddressData.UserDetailedAddress,
            })
            .then(response => {
                Swal.fire({
                icon: 'success',
                title: '성공',
                text: '주소 변경이 완료되었습니다.',
                });
                // 서버 응답에 대한 로직 수행
                // this.$router.push('/board');
            })
            .catch(error => {
                // 에러 처리
                console.error(error);
                Swal.fire({
                icon: 'error',
                title: '에러',
                text: '주소 변경에 실패했습니다.',
                });
            });
            } else {
            // 사용자가 확인 취소를 선택한 경우의 처리
            // console.log('주소 변경이 취소되었습니다.');
            }
        });
    },
    updateUserbasicData() {
        // 전화번호 변경 확인 대화 상자를 띄우고, 사용자가 확인을 선택한 경우에만 전화번호를 변경합니다.
        Swal.fire({
            title: '전화번호 변경',
            text: '전화번호를 변경하시겠습니까?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '변경',
            cancelButtonText: '취소'
        }).then((result) => {
            if (result.isConfirmed) {
            axios.put('/userbasicdataupdate', {
                UserID: this.newUserInfoItems.UserID,
                UserPhoneNumber: this.UserPhoneNumber,
            })
            .then(response => {
                Swal.fire({
                icon: 'success',
                title: '성공',
                text: '전화번호 변경이 완료되었습니다.',
                });
                // 서버 응답에 대한 로직 수행
                // this.$router.push('/board');
            })
            .catch(error => {
                // 에러 처리
                console.error(error);
                Swal.fire({
                icon: 'error',
                title: '에러',
                text: '전화번호 변경에 실패했습니다.',
                });
            });
            } else {
            // 사용자가 확인 취소를 선택한 경우의 처리
            // console.log('전화번호 변경이 취소되었습니다.');
            }
        });
    },

    updateUserPasswordData() {
        // 비밀번호 변경 확인 대화 상자를 띄우고, 사용자가 확인을 선택한 경우에만 비밀번호를 변경합니다.
        Swal.fire({
            title: '비밀번호 변경',
            text: '비밀번호를 변경하시겠습니까?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '변경',
            cancelButtonText: '취소'
        }).then((result) => {
            if (result.isConfirmed) {
            axios.put('/userpassworddataupdate', {
                UserID: this.newUserInfoItems.UserID,
                UserPassword: this.UserPassword,
                NewUserPassword: this.NewUserPassword,
                NewUserPasswordChk: this.NewUserPasswordChk,
            })
            .then(response => {
                if (response.data.success) {
                Swal.fire({
                    icon: 'success',
                    title: '성공',
                    text: '비밀번호 변경에 성공하셨습니다.',
                });
                window.location.reload();
                } else {
                Swal.fire({
                    icon: 'error',
                    title: '에러',
                    text: '비밀번호 변경에 실패하셨습니다.',
                });
                window.location.reload();
                }
            })
            .catch(error => {
                // 에러 처리
                console.error(error);
                Swal.fire({
                icon: 'error',
                title: '에러',
                text: '비밀번호 변경에 실패했습니다.',
                });
            });
            } else {
            // 사용자가 확인 취소를 선택한 경우의 처리
            // console.log('비밀번호 변경이 취소되었습니다.');
            }
        });
    },    
    getRelativeTime(updatedAt) {
        const now = new Date();
        const updatedDate = new Date(updatedAt);
        const timeDiff = now - updatedDate;
        
        // 밀리초(ms)를 일(day), 시간(hour), 분(minute) 등으로 변환
        const seconds = Math.floor(timeDiff / 1000);
        const minutes = Math.floor(seconds / 60);
        const hours = Math.floor(minutes / 60);
        const days = Math.floor(hours / 24);

        if (days > 0) {
            return `${days}일 전`;
        } else if (hours > 0) {
            return `${hours}시간 전`;
        } else if (minutes > 0) {
            return `${minutes}분 전`;
        } else {
            return '방금 전';
        }
    },
    deleteUserData() {
        Swal.fire({
            title: '회원 탈퇴',
            text: '정말로 탈퇴하시겠습니까?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: '삭제',
            cancelButtonText: '취소',
            input: 'password', // 비밀번호 입력란 추가
            inputPlaceholder: '비밀번호를 한번 더 입력하세요',
            inputAttributes: {
                autocapitalize: 'off'
            },
            inputValidator: (value) => {
                // 비밀번호 확인 로직
                if (!value) {
                    return '비밀번호를 입력하세요';
                } 
            }
            }).then((result) => {
            if (result.isConfirmed) {
                axios.delete('/deleteduserdata', {
                    params: {
                        UserID: this.newUserInfoItems.UserID,
                        deletedPassword: result.value,
                    }
                })
                .then(res => {
                    // console.log(res.data);
                    if(res.data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: '성공',
                            text: '탈퇴되셨습니다.',
                        });
                        router.push('/'); 
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: '실패',
                            text: '비밀번호가 일치하지 않습니다.',
                        });
                    }
                })
                .catch(err => {
                // 오류 처리
                // console.log(err.response.data.errors);
                Swal.fire({
                    icon: 'error',
                    title: '에러',
                    text: '삭제에 실패했습니다.',
                });
                });
            } else {

            }
        });

    },

    updatePosition(day) {
        // 마우스 위치 업데이트
        this.position.x = event.clientX;
        this.position.y = event.clientY;
    },
    
    generateChartData() {
        for (const day in this.weeklyStats) {
            if (Object.prototype.hasOwnProperty.call(this.weeklyStats, day)) {
                // console.log(this.weeklyStats[day]);
                this.chartData[day] = {
                    labels: this.weeklyStats[day],
                    datasets: [
                        {
                            label: 'Data ne',
                            backgroundColor: ['#4e81f8','#d1defc'],
                            data: [this.weeklyStats[day].enrollmentFlagCount, 5 - this.weeklyStats[day].enrollmentFlagCount],
                            borderColor: '#fff',
                        },
                        {
                            label: 'Data In',
                            backgroundColor: ['#7371fc','#d1defc'],
                            data: [this.weeklyStats[day].chapterFlagCount, 10 - this.weeklyStats[day].chapterFlagCount],
                            borderColor: '#fff',
                        },
                    ],
                };
            }
        }
    },
    updateChartData(transData) {
        // console.log(transData);
        let result = {
                labels: [],
                datasets: [ {label: '수강 강의', data: [], backgroundColor: '#4e81f8',}, {label: '수강 챕터', data2: [], backgroundColor: '#7371fc',} ],
            };
            // console.log(result);
        result.labels = transData.map(data => data.month);
        result.datasets[0].data = transData.map(data => data.enrollmentFlagCount);
        result.datasets[1].data = transData.map(data => data.chapterFlagCount);
    
        // console.log(result);
        this.barChartData = result;
    },
    processLanguageData(transData) {
        // console.log(transData);
        this.RadarChartData = {
            labels: [],
            datasets: [
            {
                label: '선호 수강 정보',
                fill: true,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(0,0,0,0.1)',
                pointBackgroundColor: ['#f94144','#f3722c','#f8961e','#f9844a','#f9c74f','#90be6d','#43aa8b','#4d908e','#577590','#277da1','#35007a'],
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgba(179,181,198,1)',
                data: [],
            },
            // Add more datasets if needed
            ]
        };

        transData.forEach(item => {
            this.RadarChartData.labels.push(item.ClassLanguageName);
            this.RadarChartData.datasets[0].data.push(item.languageCount);
        });
    }
},

}
</script>
<style>
.weekly_input_date[type='date'] {
border: none;
position: relative;
width: 100%;
padding: 0px 20px;
background-color: none;
border-radius: 8px;
text-align: center;
font-size: 100%;
}

.weekly_input_date[type='date']::-webkit-calendar-picker-indicator {
position: absolute;
left: 0;
top: 0;
width: 100%;
height: 100%;
background: transparent;
color: transparent;
cursor: pointer;
}

.weekly_input_date[type='date']::before {
content: attr(placeholder);
width: 100%;
height: 100%;
}

.weekly_study_class_title_input_label_button input {
position: relative;
outline: none;
}

.weekly_study_class_title_input_label_button span{
position: absolute;
left: 20px;
top: 8px;
z-index: -1;
}

.weekly_study_class_btn {
background-color: transparent;
border: none;
cursor: pointer;
}

.tooltip {
position: absolute;
background-color: #ffffff;
color: #000000;
padding: 10px;
border-radius: 5px;
z-index: 999;
box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.15);
width: 120px;
font-weight: 500;
}
</style>