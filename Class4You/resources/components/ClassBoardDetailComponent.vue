<template>
    <div class="wrapper">
		<div style="padding: 0 10vw;" class="whr"><span>전체강의</span><span>&gt;</span><span>{{ languagesChk }}</span></div>
        <div class="class_detail_visual">
            <div class="class_detail_container_box">
                
                <div class="class_detail_container">
					<LoadingBar v-if="loading" style="background-color: transparent; min-height: 43vh;"></LoadingBar>
                    <div v-else class="class_detail_container_lr">
                        <div class="class_detail_container_l">
                            <div class="class_detail_container_l_img_cover">
                                <img :src="'/' + detailClassItems.ClassImg" alt="">
                            </div>
                        </div>

                        <div class="class_detail_container_r">
                            <div class="class_detail_container_r_banner">
                                <div class="class_detail_container_r_banner_label">
                                    <span>NEW</span>
                                </div>
                                <span >{{languagesChk}}</span>
                            </div>
                            <div class="class_detail_container_r_title_box">
                                <h2 class="class_detail_container_r_title">
                                    {{ detailClassItems.ClassTitle }}
                                </h2>
                            </div>
                            <div class="class_detail_container_r_content_box">
                                <p style="white-space: pre-line;" class="class_detail_container_r_content">
                                    {{ detailClassItems.ClassDescription }}
                                </p>
                            </div>
                            <div class="class_detail_container_r_info_box">
                                <span class="class_detail_container_r_info_star_box">
                                    <div class="class_detail_container_r_info_star">
                                        <div class="class_detail_container_r_info_star_inr">
                                            <!-- <span>☆</span> -->
                                            <!-- <span>☆</span> -->
                                            <!-- <span>☆</span> -->
                                            <!-- <span>☆</span> -->
                                            <!-- <span>☆</span> -->
                                            <span>⭐평점</span>
											<span>{{ classRatingData }}.0</span>
                                        </div>
                                    </div>
                                    <!-- <span>{{ classRatingData }}</span> -->
                                </span>
                                <span style="margin-right: 5px;">🙍‍♂️🙍‍♀️</span>
                                <span>{{ enrollmentCnt != null ? enrollmentCnt : '0' }}명</span>
                            </div>
                            <div class="class_detail_container_r_language">
                                <span class="class_detail_container_r_language_icon">#</span>
                                <span v-for="language in detailClassItems.languages" :key="language.id" :class="{'main_container_new_card_tag_HTML': language.ClassLanguageName === 'HTML',  'main_container_new_card_tag_CSS': language.ClassLanguageName === 'CSS',  'main_container_new_card_tag_JAVASCRIPT': language.ClassLanguageName === 'JavaScript', 'main_container_new_card_tag_PHP': language.ClassLanguageName === 'PHP', 'main_container_new_card_tag_JAVA': language.ClassLanguageName === 'JAVA', 'main_container_new_card_tag_DATABASE': language.ClassLanguageName === 'DataBase'}">
									{{ language.ClassLanguageName }}
								</span>
                            </div>
                            <div class="class_detail_container_r_payment_box">
                                <div class="class_detail_container_r_payment_price">
                                    <span>가격: {{ detailClassItems.ClassPrice === 0 ? '무료' : formatNumber(detailClassItems.ClassPrice) + '원' }}</span>
                                </div>
                                <div class="class_detail_container_r_payment_classes">
									<a v-if="EnrollChk" :href="'/classwatch/' + detailClassItems.ClassID" class="class_enrollment_button">
										<div class="class_enrollment_paper class_enrollment_left"></div>
										<div class="class_enrollment_paper class_enrollment_middle"></div>
										<div class="class_enrollment_paper class_enrollment_right"></div>
										<div class="class_enrollment_inner">
											<div class="class_enrollment_zipper">
												<div class="class_enrollment_line"></div>
												<div class="class_enrollment_gradient"></div>
											</div>
											<span>강의 시청</span>
											<svg viewBox="0 0 20 16">
												<polyline points="3 8.75 7.75 13.5 17 2.5"></polyline>
											</svg>
										</div>
									</a>
									<a v-if="!EnrollChk && enrollflg && detailClassItems.ClassPrice === 0" @click="postEnrollApp()" class="class_enrollment_button">
										<div class="class_enrollment_paper class_enrollment_left"></div>
										<div class="class_enrollment_paper class_enrollment_middle"></div>
										<div class="class_enrollment_paper class_enrollment_right"></div>
										<div class="class_enrollment_inner">
											<div class="class_enrollment_zipper">
												<div class="class_enrollment_line"></div>
												<div class="class_enrollment_gradient"></div>
											</div>
											<span>수강 신청</span>
											<svg viewBox="0 0 20 16">
												<polyline points="3 8.75 7.75 13.5 17 2.5"></polyline>
											</svg>
										</div>
									</a>
									<a v-if="!EnrollChk && enrollflg && detailClassItems.ClassPrice !== 0" @click="KGpay" class="class_enrollment_button">
										<div class="class_enrollment_paper class_enrollment_left"></div>
										<div class="class_enrollment_paper class_enrollment_middle"></div>
										<div class="class_enrollment_paper class_enrollment_right"></div>
										<div class="class_enrollment_inner">
											<div class="class_enrollment_zipper">
												<div class="class_enrollment_line"></div>
												<div class="class_enrollment_gradient"></div>
											</div>
											<span>수강 신청</span>
											<svg viewBox="0 0 20 16">
												<polyline points="3 8.75 7.75 13.5 17 2.5"></polyline>
											</svg>
										</div>
									</a>
									<!-- <a v-if="EnrollChk" :href="'/classwatch/' + detailClassItems.ClassID">강의 시청</a>
                                    <a v-if="!EnrollChk && enrollflg && detailClassItems.ClassPrice === 0" @click="postEnrollApp()">수강 신청</a>
                                    <a v-if="!EnrollChk && enrollflg && detailClassItems.ClassPrice !== 0" @click="KGpay">수강 신청</a> -->
                                    <!-- <button v-else @click="postEnrollApp()">{{ classEnrollData.value }}</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="class_container">
            <!-- 강의 소개 -->
			<div class="class_tab_menu_div">
				<ul class="class_tabs">
					<li @click="clickFlgTab = 0; solve = null; sortData = 0;"  class="class_tab_link current"  :class="{'class_tab_link_on': sortData == 0}" data-tab="class_tab1">강의 소개</li>
					<li @click="clickFlgTab = 1; solve = null; sortData = 1;"  class="class_tab_link"  :class="{'class_tab_link_on': sortData == 1}" data-tab="class_tab2">수강평</li>
					<li @click="clickFlgTab = 2; solve = null; sortData = 2;" class="class_tab_link" :class="{'class_tab_link_on': sortData == 2}" data-tab="class_tab3">강의 질문</li>
					<!-- <li @click="clickFlgTab = 3;" class="class_tab_link" data-tab="class_tab4">공지사항</li> -->
				</ul>
			</div>	

        <div v-if="clickFlgTab === 0" class="class_introduce">
			
			<div>
				<div class="class_tab_content_div">
					<div id="class_tab1" class="class_tab_content class_current">
						<p style="font-weight: bold;">
							💡{{ languagesChk }}란,
						</p>
						<p>- {{ detailClassItems.ClassIntroduction }}</p>
					</div>
				</div>
			
				<div class="class_tab_content_div">
					<div class="class_tab_content_title">
						<p>기초 설명</p>
					</div>
					<div id="class_tab1" class="class_tab_content class_tab_content_basic_ba_color">
						<div class="class_tab_content_basic_box">
							<div class="class_tab_content_basic">
								<p><strong>
									<svg xmlns="http://www.w3.org/2000/svg" color="#fff" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
									<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
									<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
									</svg>
									추천드려요
								</strong></p>
							</div>
							<div class="class_tab_content_basic">
								<span>
									<svg style="margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
										<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
									</svg>
								</span>
								<span>코딩의 기초를 다지고싶은 분</span>
							</div>
							<div class="class_tab_content_basic">
								<span>
									<svg style="margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
										<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
									</svg>
								</span>
								<span>코딩 스터디를 원하시는 분</span>
							</div>
							<div class="class_tab_content_basic">
								<span>
									<svg style="margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
										<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
									</svg>
								</span>
								<span>학습 성취감을 느끼고 싶은 분</span>
							</div>
							<div class="class_tab_content_basic">
								<span>
									<svg style="margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
										<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
									</svg>
								</span>
								<span>웹개발 분야로 이직을 원하시는 분</span>
							</div>
							<div class="class_tab_content_basic">
								<span>
									<svg style="margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
										<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
									</svg>
								</span>
								<span>비전공자인데 체계적인 코딩 공부를 원하시는 분</span>
							</div>
						</div>
					</div>
					<div class="class_tab_content class_tab_description">
						<div class="class_tab_description_text_left">
							<span>◼{{ detailClassItems.ClassDescription }}</span>
						</div>
						
					</div>
					
				</div>

				<div class="class_tab_content_div">
					<div class="class_tab_content_title">
						<p>커리큘럼</p>
					</div>
					<!-- <div v-for="item in allLessonsData" id="class_tab1" class="class_tab_curri_div">
						<details>
						<div class="class_tab_content_curriculum">
							<div class="class_tab_content_curriculm_title" style="margin: 10px 0px;">
								<span class="class_tab_content_chapter_title">Charpter.</span>
								<span class="class_tab_content_chapter_title" style="margin-left: 5px;">
									{{ item.ChapterTitle }}
								</span>
							</div>
							<div v-for="(language, languageIndex) in item.lessons" class="class_tab_content_lesson_title">
								<p>{{languageIndex + 1}}.lessons : {{ language.LessonTitle }}</p>
							</div>
							<div class="class_tab_content_lesson_content">
								<p>{{ classCuriData.LessonContent }}</p>
							</div>
						</div>
					</details>
					</div> -->

					<div v-for="item in allLessonsData" id="class_tab1" class="class_tab_curri_div">
						<details class="class_tab_content_curriculum">
							<summary class="class_tab_content_curriculm_title" style="margin: 10px 0px; display: flex;">
								<p>
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="none" fill="currentColor" class="bi bi-box-arrow-down" viewBox="0 0 16 16">
  										<path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"/>
  										<path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
									</svg>
								</p>
								<span class="class_tab_content_chapter_title">Charpter.</span>
								<span class="class_tab_content_chapter_title" style="margin-left: 5px;">
									{{ item.ChapterTitle }}
								</span>
							</summary>
							<div v-for="(language, languageIndex) in item.lessons" class="class_tab_content_lesson_title">
								<!-- <span>Lesson</span> -->
								<p>lessons{{languageIndex + 1}}. {{ language.LessonTitle }}</p>
							</div>
							<div class="class_tab_content_lesson_content">
								<p>{{ classCuriData.LessonContent }}</p>
							</div>
						</details>
					</div>
					
				</div>	
			</div>
			

			<div class="class_tab_content_div" style="display: inline-block;">
				
					<div class="class_tab_content_title">
						<!-- <p>강의 특징</p> -->
					</div>
					<div class="class_tab_content_classpoint_ment">
						<span>💻이 <strong>강의</strong>의 특징은,</span>
					</div>
			
				<div class="class_tab_classpoint_div_box">
					<div class="class_tab_classpoint_div">
						<div id="class_tab1" class="class_tab_classpoint">
							<p><strong>1.{{detailClassItems.ClassPoint}}</strong></p>
							
						</div>
						<div id="class_tab1" class="class_tab_classpoint">
							<p><strong>2.{{detailClassItems.ClassPoint}}</strong></p>
							
						</div>
						<div v-if="languagesChk ==  'HTML'" id="class_tab1" class="class_tab_classpoint">
							<p>
								웹 디자이너 및 UI UX의 기본 HTMl.
								어려운 개념들과 세세한 속성들까지 파고들어가서 현업 개발자 및 퍼블리셔에게도 큰 도움이 될 수 있는 강좌로 만들고자 했습니다.
								그 첫걸음으로, 컴공 지식이 없어도 상대적으로 배워나가기 쉬운 HTML를 첫 주제로 선택했습니다.
							</p>
						</div>
						<div v-if="languagesChk ==  'HTML'" id="class_tab1" class="class_tab_classpoint">
							<p>
								한편 진입장벽이 낮은 HTML & CSS지만, 이를 깊이 있게 공부하여 '제대로' 활용하는 개발자들은 흔하지 않죠. 
								그래서 어려운 개념들과 세세한 속성들까지 파고들어가서 현업 개발자 및 퍼블리셔에게도 큰 도움이 될 수 있는 강좌로 만들고자 했습니다.
								정말 멋지고 유익한 강의를 만들어보자는 목표로, 오랫동안 조사하고 준비한 끝에 이 강의를 제작하게 되었습니다.
							</p>
						</div>

						<div v-if="languagesChk ==  'CSS'" id="class_tab1" class="class_tab_classpoint">
							<p>
								부트스트랩(Bootstrap)과 함께 대표적인 CSS Frameworks인 UIkit을 기초부터 활용까지 체계적으로 배우실 수 있습니다. 
								퍼블리셔 취업을 위해 잘 만들어진 개인 포트폴리오 홈페이지가 반드시 필요합니다. 
							</p>
						</div>
						<div v-if="languagesChk ==  'CSS'" id="class_tab1" class="class_tab_classpoint">
							<p>
								개인 포트폴리오 홈페이지에서 포트폴리오 결과물을 세련되게 보여주기 위해 Slideshow, Slider, Lightbox, Full Screen Modal, Filter 등 
								UIkit 컴포넌트의 상세한 사용법과 실전 제작에 활용하는 퍼블리싱 스킬과 노하우를 배울 수 있습니다.
							</p>
						</div>

						<div v-if="languagesChk ==  'JAVA SCRIPT'" id="class_tab1" class="class_tab_classpoint">
							<p>
								다른 언어도 많은데.. 왜 자바스크립트여야 하냐구요? 
								자바스크립트는 전세계에서 가장 많이 쓰는 언어로, 비전공자도 빠르게 배울 수 있고 이해하기 쉬운 구조를 가지고 있어요. 
								게다가 구글, 페이팔, 아마존 등 유명 기업들도 활용하고 있다니! 더 이상의 고민이 필요한가요?
							</p>
						</div>
						<div v-if="languagesChk ==  'JAVA SCRIPT'" id="class_tab1" class="class_tab_classpoint">
							<p>
								이 강의는 Javascript가 동작하는 기본적인 원리, 코드를 작성하는 방법 등 그 기초를 중점적으로 다루고 있어요. 
								완성된 성을 받아 가는 것이 아닌 성을 쌓아가는 방법을 배우는 것이죠.
								또한, Chrome의 개발자 도구, debugger, vscode를 사용해가며 스스로 성을 쌓아 올릴 수 있도록 필요한 도구들을 함께 알아갈 거에요.
							</p>
						</div>

						<div v-if="languagesChk ==  'PHP'" id="class_tab1" class="class_tab_classpoint">
							<p>
								PHP 개발자의 최종 테크트리, 라라벨(Laravel) 프레임워크의 핵심.
								PHP를 PHP답게, PHP 개발의 정수! 
								PHP를 컴포저(Composer)와 연계해 다른 프로그래밍 언어 못지 않은 가볍고도 강력한 웹 애플리케이션을 개발, 
								운용할 수 있습니다.
							</p>
						</div>
						<div v-if="languagesChk ==  'PHP'" id="class_tab1" class="class_tab_classpoint">
							<p>
								강의를 모두 마치면 해당 리포지토리에 있는 서비스 정도는 하루 정도에 개발할 수 있게 됩니다. 
								PHP 웹 개발의 실력을 키우고픈 분들뿐만 아니라, 혼자서 나만의 홈페이지를 제작하시고픈 분들에게도 도움이 되는 내용으로 구성하였습니다.
							</p>
						</div>

						<div v-if="languagesChk ==  'JAVA'" id="class_tab1" class="class_tab_classpoint">
							<p>
								자바는 객체지향 프로그래밍 언어입니다. 객체지향 프로그래밍의 캡슐화, 상속, 다형성, 추상화 같은 개념이 이런 문제를 해결해 주는 역할을 하고, 
								그렇기 때문에 실무에서 자바를 많이 사용하는 것입니다.
								때문에 객체지향 프로그래밍은 자바에서 가장 중요한 핵심 개념이라고도 볼 수 있습니다.
							</p>
						</div>
						<div v-if="languagesChk ==  'JAVA'" id="class_tab1" class="class_tab_classpoint">
							<p>
								그런데 자바를 처음 공부하는 분들이 정말 아쉽게도 단순 자바 문법만 배우고 있는 경우가 많습니다. 
								하지만 객체지향 개념에서는 문법이 아니라, 이것을 어떤 상황에 왜 써야 하는지를 이해하는 게 핵심입니다.
							</p>
						</div>

						<div v-if="languagesChk ==  'DataBase'" id="class_tab1" class="class_tab_classpoint">
							<p>
								MariaDB를 통해 데이터베이스 가격 부담에서 자유로울 수 있을 뿐만 아니라, 
								대표적인 데이터베이스의 MSSQL, ORACLE, MYSQL에 해당되는 필수 요소 또한 제공하기 때문에 이용에 어려움이 없습니다. 
								뿐만 아니라 공공기관이나 대기업 프로젝트 등에서도 MariaDB가 사용되는 경우가 있습니다
							</p>
						</div>
						<div v-if="languagesChk ==  'DataBase'" id="class_tab1" class="class_tab_classpoint">
							<p>
								MariaDB만의 특징과 HeidiSQL을 통한 MariaDB를 다루는 간단한 방법을 배울 수 있습니다.
								MariaDB로 사업을 준비하시거나 실무에서 사용하실 예정이시라면, 충분히 강의를 통해 데이터베이스를 운영해나가실 수 있습니다.
							</p>
						</div>
					</div>	
				 	<div></div>
					<div v-if="languagesChk ==  'HTML'">
						<div style="margin: 10px;">
							<span></span>
							<div>
								<img style="width: 100%;" src="/img/html/classDetail/html_gif.gif" alt="">
							</div>
						</div>
					</div>
					<div v-if="languagesChk ==  'CSS'">
						<div style="margin: 10px;">
							<span></span>
							<div>
								<img style="width: 100%;" src="/img/css/classDetail/css_gif.gif" alt="">
							</div>
						</div>
					</div>
					<div v-if="languagesChk ==  'JAVA SCRIPT'">
						<div style="margin: 10px;">
							<span></span>
							<div>
								<img style="width: 100%;" src="/img/javascript/classDetail/js_gif.gif" alt="">
							</div>
						</div>
					</div>
					<div v-if="languagesChk ==  'PHP'">
						<div style="margin: 10px;">
							<span></span>
							<div>
								<img style="width: 100%;" src="/img/php/classDetail/php_gif.webp" alt="">
							</div>
						</div>
					</div>
					<div v-if="languagesChk ==  'JAVA'">
						<div style="margin: 10px;">
							<span></span>
							<div>
								<img style="width: 100%;" src="/img/java/classDetail/java_png.png" alt="">
							</div>
						</div>
					</div>
					<div v-if="languagesChk ==  'DataBase'">
						<div style="margin: 10px;">
							<span></span>
							<div>
								<img style="width: 100%;" src="/img/db/classDetail/sql_gif.gif" alt="">
							</div>
						</div>
					</div>
					<!-- <div></div> -->
				</div>
				
			</div>	

			<div class="class_tab_content_div">
				<div class="class_tab_content_title">
					<!-- <p>강사 이력</p> -->
				</div>
				<div id="class_tab1" class="class_tab_content">
					<!-- <p>{{detailClassItems.InstructorID}}</p> -->
					<div class="class_tab_content_instructor_all">
						<div class="class_tab_content_instructor_name">
							<div class="class_tab_content_instructor_name_style">
								<p>강사</p>
							</div>	
							<p><strong>{{detailClassItems.InstructorFullName}}</strong>님</p>
						</div>
						<div class="class_tab_instructorhis">
							<p style="white-space: pre-line;">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
								</svg>
								{{ detailClassItems.InstructorHistory }}
							</p>
						</div>
					</div>
				</div>
			</div>	

		
        </div>

            <!-- 수강평 -->
        <div style="padding: 10px 30px; border-left: 1px solid #ededed; border-right: 1px solid #ededed;" v-if="clickFlgTab === 1">    
            <div v-if="EnrollChk" id="class_tab1" class="class_current class_detail_rating_form">
                <!-- <form name="myform" id="myform" method="post"> -->
                    <fieldset>

                        <div class="class_detail_rating_form_text">
                            <textarea v-model="classReviewData.ReviewComment" name="myform" id="" cols="30" rows="10" placeholder="수강평을 작성해주세요."></textarea>
                            <!-- <textarea name="myform" id="" cols="30" rows="10" placeholder="수강평을 작성해주세요."></textarea> -->
                        </div>

                        <div class="class_detail_rating_form_content">
                            <div class="class_detail_rating_form_star">
								
								<!-- <fieldset class="class_detail_rating_star_form" name="myform">
                                        <legend class="class_detail_rating_star_form_title">별점</legend>
                                            <input v-model="classReviewData.ReviewRating" class="class_detail_rating_star_input" type="radio" name="rating" value="5" id="rate1">
                                                <label class="class_detail_rating_star_label" for="rate1">⭐</label>
                                            <input v-model="classReviewData.ReviewRating" class="class_detail_rating_star_input" type="radio" name="rating" value="4" id="rate2">
                                                <label class="class_detail_rating_star_label" for="rate2">⭐</label>
                                            <input v-model="classReviewData.ReviewRating" class="class_detail_rating_star_input" type="radio" name="rating" value="3" id="rate3">
                                                <label class="class_detail_rating_star_label" for="rate3">⭐</label>
                                            <input v-model="classReviewData.ReviewRating" class="class_detail_rating_star_input" type="radio" name="rating" value="2" id="rate4">
                                                <label class="class_detail_rating_star_label" for="rate4">⭐</label>
                                            <input v-model="classReviewData.ReviewRating" class="class_detail_rating_star_input" type="radio" name="rating" value="1" id="rate5">
                                                <label class="class_detail_rating_star_label" for="rate5">⭐</label>
                                    </fieldset> -->
									<legend class="class_detail_rating_star_form_title">별점</legend>
									<div class="rating__stars">
										<input v-model="classReviewData.ReviewRating" id="rating-1" class="rating__input rating__input-1" type="radio" name="rating" value="1">
										<input v-model="classReviewData.ReviewRating" id="rating-2" class="rating__input rating__input-2" type="radio" name="rating" value="2">
										<input v-model="classReviewData.ReviewRating" id="rating-3" class="rating__input rating__input-3" type="radio" name="rating" value="3">
										<input v-model="classReviewData.ReviewRating" id="rating-4" class="rating__input rating__input-4" type="radio" name="rating" value="4">
										<input v-model="classReviewData.ReviewRating" id="rating-5" class="rating__input rating__input-5" type="radio" name="rating" value="5">
										<label class="rating__label" for="rating-1">
											<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
												<g transform="translate(16,16)">
													<circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
												</g>
												<g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
													<g transform="translate(16,16) rotate(180)">
														<polygon class="rating__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
														<polygon class="rating__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
													</g>
													<g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
														<polyline class="rating__star-line" transform="rotate(0)" points="0 4,0 16" />
														<polyline class="rating__star-line" transform="rotate(72)" points="0 4,0 16" />
														<polyline class="rating__star-line" transform="rotate(144)" points="0 4,0 16" />
														<polyline class="rating__star-line" transform="rotate(216)" points="0 4,0 16" />
														<polyline class="rating__star-line" transform="rotate(288)" points="0 4,0 16" />
													</g>
												</g>
											</svg>
											<span class="rating__sr">1 star—Terrible</span>
										</label>
										<label class="rating__label" for="rating-2">
											<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
												<g transform="translate(16,16)">
													<circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
												</g>
												<g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
													<g transform="translate(16,16) rotate(180)">
														<polygon class="rating__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
														<polygon class="rating__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
													</g>
													<g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
														<polyline class="rating__star-line" transform="rotate(0)" points="0 4,0 16" />
														<polyline class="rating__star-line" transform="rotate(72)" points="0 4,0 16" />
														<polyline class="rating__star-line" transform="rotate(144)" points="0 4,0 16" />
														<polyline class="rating__star-line" transform="rotate(216)" points="0 4,0 16" />
														<polyline class="rating__star-line" transform="rotate(288)" points="0 4,0 16" />
													</g>
												</g>
											</svg>
											<span class="rating__sr">2 stars—Bad</span>
										</label>
										<label class="rating__label" for="rating-3">
											<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
												<g transform="translate(16,16)">
													<circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
												</g>
												<g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
													<g transform="translate(16,16) rotate(180)">
														<polygon class="rating__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
														<polygon class="rating__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
													</g>
													<g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
														<polyline class="rating__star-line" transform="rotate(0)" points="0 4,0 16" />
														<polyline class="rating__star-line" transform="rotate(72)" points="0 4,0 16" />
														<polyline class="rating__star-line" transform="rotate(144)" points="0 4,0 16" />
														<polyline class="rating__star-line" transform="rotate(216)" points="0 4,0 16" />
														<polyline class="rating__star-line" transform="rotate(288)" points="0 4,0 16" />
													</g>
												</g>
											</svg>
											<span class="rating__sr">3 stars—OK</span>
										</label>
										<label class="rating__label" for="rating-4">
											<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
												<g transform="translate(16,16)">
													<circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
												</g>
												<g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
													<g transform="translate(16,16) rotate(180)">
														<polygon class="rating__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
														<polygon class="rating__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
													</g>
													<g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
														<polyline class="rating__star-line" transform="rotate(0)" points="0 4,0 16" />
														<polyline class="rating__star-line" transform="rotate(72)" points="0 4,0 16" />
														<polyline class="rating__star-line" transform="rotate(144)" points="0 4,0 16" />
														<polyline class="rating__star-line" transform="rotate(216)" points="0 4,0 16" />
														<polyline class="rating__star-line" transform="rotate(288)" points="0 4,0 16" />
													</g>
												</g>
											</svg>
											<span class="rating__sr">4 stars—Good</span>
										</label>
										<label class="rating__label" for="rating-5">
											<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
												<g transform="translate(16,16)">
													<circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
												</g>
												<g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
													<g transform="translate(16,16) rotate(180)">
														<polygon class="rating__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
														<polygon class="rating__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
													</g>
													<g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
														<polyline class="rating__star-line" transform="rotate(0)" points="0 4,0 16" />
														<polyline class="rating__star-line" transform="rotate(72)" points="0 4,0 16" />
														<polyline class="rating__star-line" transform="rotate(144)" points="0 4,0 16" />
														<polyline class="rating__star-line" transform="rotate(216)" points="0 4,0 16" />
														<polyline class="rating__star-line" transform="rotate(288)" points="0 4,0 16" />
													</g>
												</g>
											</svg>
											<span class="rating__sr">5 stars—Excellent</span>
										</label>
									</div>
                                
                            </div>

                            <div class="class_detail_rating_form_button">
                                <button @click="addClassReview()">수강평 작성</button>
                            </div>
                        </div>

                    </fieldset>
                <!-- </form> -->
            </div>

			<!-- <div v-if="!EnrollChk">
				로그인 바람
			</div> -->

            <div class="class_detail_rating_list">
				<div class="class_detail_rating_view_tab">
					<div class="class_detail_rating_tab_title_view">
						<span>VIEW</span>
					</div>
                    <!-- <div class="class_detail_rating_tab_title">
						<span>|</span>
					</div>
					<div class="class_detail_rating_tab_title">
						<span>최신순</span>
					</div> -->
					<!-- <div class="class_detail_rating_tab_title">
						<span>인기순</span>
					</div> -->
					<!-- <div class="class_detail_rating_tab_title">
						<span><a href="">조회순</a></span>
					</div> -->
				</div>

				<div>
					<div v-for="data in reviewClassItems" :key="data.ReviewID" id="class_tab1" class="class_detail_rating_list_div class_tab_content_div">
						<div class="class_detail_rating_list_user">
							<div class="class_detail_rating_user_id">
								<p>{{ hideEmail(data.UserEmail) }} |</p>
								<p class="class_detail_rating_review_data">{{ getRatingStar(data.ReviewRating) }}</p>
							</div>
							<div class="class_detail_rating_user_date">
								<p>{{ data.created_at }}</p>
							</div>
						</div>
						<div class="class_detail_rating_list_text">
							<textarea v-if="data.ReviewID == updataReviewID" class="class_detail_rating_list_text_textarea" v-model="data.ReviewComment" cols="20" rows="5"></textarea>
							<p v-else class="class_detail_rating_list_text_p">{{ data.ReviewComment }}</p>
						</div>
						<div class="class_detail_rating_user_button">
							<!-- <div class="class_detail_rating_user_update_button"> -->
								<!-- <button @click="classReviewUpdate(data)">수정</button> -->
							<!-- </div> -->
							<div v-if="data.UserID == $store.state.UserID">
								<div style="display: grid; justify-content: space-between; grid-template-columns: 1fr 1fr;" v-if="data.ReviewID == updataReviewID">
									<div class="class_detail_rating_user_delete_reating">
										<!-- <fieldset class="class_detail_rating_star_form" name="myform">
											<input v-model="classReviewData.ReviewRating" class="class_detail_rating_star_input" type="radio" name="rating" value="5" id="rate1">
												<label class="class_detail_rating_star_label" for="rate1">⭐</label>
											<input v-model="classReviewData.ReviewRating" class="class_detail_rating_star_input" type="radio" name="rating" value="4" id="rate2">
												<label class="class_detail_rating_star_label" for="rate2">⭐</label>
											<input v-model="classReviewData.ReviewRating" class="class_detail_rating_star_input" type="radio" name="rating" value="3" id="rate3">
												<label class="class_detail_rating_star_label" for="rate3">⭐</label>
											<input v-model="classReviewData.ReviewRating" class="class_detail_rating_star_input" type="radio" name="rating" value="2" id="rate4">
												<label class="class_detail_rating_star_label" for="rate4">⭐</label>
											<input v-model="classReviewData.ReviewRating" class="class_detail_rating_star_input" type="radio" name="rating" value="1" id="rate5">
												<label class="class_detail_rating_star_label" for="rate5">⭐</label>
										</fieldset> -->

										<div class="rating__stars">
											<input v-model="classReviewData.ReviewRating" id="rating-1" class="rating__input rating__input-1" type="radio" name="rating" value="1">
											<input v-model="classReviewData.ReviewRating" id="rating-2" class="rating__input rating__input-2" type="radio" name="rating" value="2">
											<input v-model="classReviewData.ReviewRating" id="rating-3" class="rating__input rating__input-3" type="radio" name="rating" value="3">
											<input v-model="classReviewData.ReviewRating" id="rating-4" class="rating__input rating__input-4" type="radio" name="rating" value="4">
											<input v-model="classReviewData.ReviewRating" id="rating-5" class="rating__input rating__input-5" type="radio" name="rating" value="5">
											<label class="rating__label" for="rating-1">
												<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
													<g transform="translate(16,16)">
														<circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
													</g>
													<g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
														<g transform="translate(16,16) rotate(180)">
															<polygon class="rating__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
															<polygon class="rating__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
														</g>
														<g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
															<polyline class="rating__star-line" transform="rotate(0)" points="0 4,0 16" />
															<polyline class="rating__star-line" transform="rotate(72)" points="0 4,0 16" />
															<polyline class="rating__star-line" transform="rotate(144)" points="0 4,0 16" />
															<polyline class="rating__star-line" transform="rotate(216)" points="0 4,0 16" />
															<polyline class="rating__star-line" transform="rotate(288)" points="0 4,0 16" />
														</g>
													</g>
												</svg>
												<span class="rating__sr">1 star—Terrible</span>
											</label>
											<label class="rating__label" for="rating-2">
												<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
													<g transform="translate(16,16)">
														<circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
													</g>
													<g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
														<g transform="translate(16,16) rotate(180)">
															<polygon class="rating__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
															<polygon class="rating__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
														</g>
														<g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
															<polyline class="rating__star-line" transform="rotate(0)" points="0 4,0 16" />
															<polyline class="rating__star-line" transform="rotate(72)" points="0 4,0 16" />
															<polyline class="rating__star-line" transform="rotate(144)" points="0 4,0 16" />
															<polyline class="rating__star-line" transform="rotate(216)" points="0 4,0 16" />
															<polyline class="rating__star-line" transform="rotate(288)" points="0 4,0 16" />
														</g>
													</g>
												</svg>
												<span class="rating__sr">2 stars—Bad</span>
											</label>
											<label class="rating__label" for="rating-3">
												<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
													<g transform="translate(16,16)">
														<circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
													</g>
													<g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
														<g transform="translate(16,16) rotate(180)">
															<polygon class="rating__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
															<polygon class="rating__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
														</g>
														<g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
															<polyline class="rating__star-line" transform="rotate(0)" points="0 4,0 16" />
															<polyline class="rating__star-line" transform="rotate(72)" points="0 4,0 16" />
															<polyline class="rating__star-line" transform="rotate(144)" points="0 4,0 16" />
															<polyline class="rating__star-line" transform="rotate(216)" points="0 4,0 16" />
															<polyline class="rating__star-line" transform="rotate(288)" points="0 4,0 16" />
														</g>
													</g>
												</svg>
												<span class="rating__sr">3 stars—OK</span>
											</label>
											<label class="rating__label" for="rating-4">
												<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
													<g transform="translate(16,16)">
														<circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
													</g>
													<g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
														<g transform="translate(16,16) rotate(180)">
															<polygon class="rating__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
															<polygon class="rating__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
														</g>
														<g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
															<polyline class="rating__star-line" transform="rotate(0)" points="0 4,0 16" />
															<polyline class="rating__star-line" transform="rotate(72)" points="0 4,0 16" />
															<polyline class="rating__star-line" transform="rotate(144)" points="0 4,0 16" />
															<polyline class="rating__star-line" transform="rotate(216)" points="0 4,0 16" />
															<polyline class="rating__star-line" transform="rotate(288)" points="0 4,0 16" />
														</g>
													</g>
												</svg>
												<span class="rating__sr">4 stars—Good</span>
											</label>
											<label class="rating__label" for="rating-5">
												<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
													<g transform="translate(16,16)">
														<circle class="rating__star-ring" fill="none" stroke="#000" stroke-width="16" r="8" transform="scale(0)" />
													</g>
													<g stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
														<g transform="translate(16,16) rotate(180)">
															<polygon class="rating__star-stroke" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="none" />
															<polygon class="rating__star-fill" points="0,15 4.41,6.07 14.27,4.64 7.13,-2.32 8.82,-12.14 0,-7.5 -8.82,-12.14 -7.13,-2.32 -14.27,4.64 -4.41,6.07" fill="#000" />
														</g>
														<g transform="translate(16,16)" stroke-dasharray="12 12" stroke-dashoffset="12">
															<polyline class="rating__star-line" transform="rotate(0)" points="0 4,0 16" />
															<polyline class="rating__star-line" transform="rotate(72)" points="0 4,0 16" />
															<polyline class="rating__star-line" transform="rotate(144)" points="0 4,0 16" />
															<polyline class="rating__star-line" transform="rotate(216)" points="0 4,0 16" />
															<polyline class="rating__star-line" transform="rotate(288)" points="0 4,0 16" />
														</g>
													</g>
												</svg>
												<span class="rating__sr">5 stars—Excellent</span>
											</label>
										</div>


									</div>
									<div class="class_detail_rating_user_btn">
										<div class="class_detail_rating_user_updated_button">
											<button @click="addUpdataReview(data)">수정</button>
										</div>
										<div class="class_detail_rating_user_cancel_button">
											<button @click="addUpdataReview(false)">취소</button>
										</div>
									</div>
								</div>
								<div class="class_detail_rating_user_btn" v-else>
									<div class="class_detail_rating_user_updated_button">
										<button @click="updataReviewID = data.ReviewID">수정</button>
									</div>

										<button @click="deleteClassReview(data)" :class="{ 'class_detail_rating_user_delete_button': true, ['reviewID' + data.ReviewID]: true }" >
											<div class="class_detail_rating_user_delete_trash">
												<div class="class_detail_rating_user_delete_top">
													<div class="class_detail_rating_user_delete_paper"></div>
												</div>
												<div class="class_detail_rating_user_delete_box"></div>
												<div class="class_detail_rating_user_delete_check">
													<svg viewBox="0 0 8 6">
														<polyline points="1 3.4 2.71428571 5 7 1"></polyline>
													</svg>
												</div>
											</div>
											<span>삭제</span>
										</button>
								</div>
							</div>
						</div>
					</div>
				</div>

			
				
        	</div>
        </div>

            <!-- 커뮤니티 -->
            
        <div v-if="clickFlgTab === 2">    
            <div v-if="EnrollChk" id="class_tab1" class="class_current class_detail_rating_form">
                <!-- <form action=""> -->
                    <fieldset>

                        <div class="class_detail_rating_form_text">
                            <input v-model="classQuestionItems.BoardTitle" class="class_detail_rating_form_text_input" type="text" placeholder="제목을 작성해주세요.">
                            <textarea v-model="classQuestionItems.BoardComment" cols="30" rows="10" placeholder="강의에 대한 질문을 작성해주세요."></textarea>
                        </div>

                        <div class="class_detail_commu_form_content">

                            <div class="class_detail_rating_form_button">
                                <button @click="addClassQuestion()">질문 작성</button>
                            </div>
                        </div>

                    </fieldset>
                <!-- </form> -->
            </div>

            <div class="class_detail_community_list">
				<div class="class_detail_commu_view_tab">
					<div class="class_detail_commu_tab_title">
						<span>VIEW</span>
					</div>
				</div>

				<div v-for="data in classQuestionData" :key="data.BoardID" id="class_tab1" class="class_detail_commu_list_div">
				<!-- <div id="class_tab1" class="class_detail_commu_list_div"> -->
					<!-- <div class="class_detail_commu_list_user" style="font-size: 13px;">
						<div class="class_detail_rating_user_id">
							<div class="class_detail_rating_user_id_info">
								<p class="class_detail_rating_user_email">{{ hideEmail(data.UserEmail) }}</p>
							</div>
						</div>
						<div class="class_detail_rating_user_date">
							<p>{{ data.created_at }}</p>
						</div>
					</div> -->
					<!-- <div v-for="data in classQuestionData" :key="data.BoardID" class="class_detail_commu_list_text"> -->
					<div class="class_detail_commu_list_text">
						<div v-if="data.BoardID == updateClassQuestionBoardID" class="class_detail_commu_list_text_div1">
							<div class="class_detail_commu_list_update_text_title">
								<input v-model="data.BoardTitle" type="text">
							</div>
							<div class="class_detail_commu_list_update_text_comment">
								<textarea v-model="data.BoardComment" cols="30" rows="10"></textarea>
							</div>
						</div>

						<div class="class_detail_commu_list_text_div2" v-else>
							<div class="class_detail_commu_list_text_board_title">
								<div style="display: flex; padding: 5px 0px;">
									<p class="class_detail_commu_list_text_board_tag">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
											<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
											<path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
										</svg>
									</p>
									<p style="margin-top: 10px;">{{ data.BoardTitle }}</p>
								</div>

								<div class="class_detail_commu_user_id">
									<div class="class_detail_rating_user_id_info" style="display: flex; font-size: 15px;">
										<p>
											<svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16" style="margin: 3px 5px;">
												<circle cx="8" cy="8" r="8"/>
											</svg>
										</p>
										<p class="class_detail_rating_user_email">{{ hideEmail(data.UserEmail) }}</p>
									</div>
									<div class="class_detail_rating_user_date" style="display: flex; font-size: 14px;">
										<p>
											<svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16" style="margin: 3px 5px;">
												<circle cx="8" cy="8" r="8"/>
											</svg>
										</p>
										<p>{{ data.created_at }}</p>
									</div>
								</div>

							</div>
							<div class="class_detail_commu_list_text_board_comment" style="white-space: pre-wrap;">
								<p>{{ data.BoardComment }}</p>
							</div>
						</div>
					
						<div v-if="data.UserID == $store.state.UserID">
							<div class="class_detail_commu_list_user" style="font-size: 13px;">
								<!-- <div class="class_detail_commu_user_id">
									<div class="class_detail_rating_user_id_info" style="display: flex;">
										<span>
											<svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
												<circle cx="8" cy="8" r="8"/>
											</svg>
										</span>
										<p class="class_detail_rating_user_email">{{ hideEmail(data.UserEmail) }}</p>
									</div>
									<div class="class_detail_rating_user_date" style="display: flex;">
										<span>
											<svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
												<circle cx="8" cy="8" r="8"/>
											</svg>
										</span>
										<p>{{ data.created_at }}</p>
									</div>
								</div> -->
								

								<div v-if="data.BoardID == updateClassQuestionBoardID" class="class_detail_community_user_button">
									<div class="class_detail_rating_user_updated_button">
										<button @click="updateClassQuestion(data)">수정</button>
									</div>
									<button class="class_detail_rating_user_delete_button" style="line-height: 25px; color: #fff; background-color: #2B3044; font-weight: 700; border:" @click="updateClassQuestion(false)">취소</button>
								</div>
								<div v-else class="class_detail_community_user_button">
									<div class="class_detail_rating_user_updated_button">
										<button @click="updateClassQuestionBoardID = data.BoardID">수정</button>
									</div>
									<button @click="delClassQuestion(data)" :class="{ 'class_detail_rating_user_delete_button': true, ['boardID_' + data.BoardID]: true }">
										<div class="class_detail_rating_user_delete_trash">
											<div class="class_detail_rating_user_delete_top">
												<div class="class_detail_rating_user_delete_paper"></div>
											</div>
											<div class="class_detail_rating_user_delete_box"></div>
											<div class="class_detail_rating_user_delete_check">
												<svg viewBox="0 0 8 6">
													<polyline points="1 3.4 2.71428571 5 7 1"></polyline>
												</svg>
											</div>
										</div>
										<span>삭제</span>
									</button>
								</div>

							</div>
							<!-- <div v-if="data.BoardID == updateClassQuestionBoardID" class="class_detail_community_user_button"> -->
								<!-- <div class="class_detail_rating_user_updated_button">
									<button @click="updateClassQuestion(data)">수정</button>
								</div> -->

								<!-- 안살림 <div class="class_detail_rating_user_delete_button">
								</div> -->
								
								<!-- <button class="class_detail_rating_user_delete_button" style="line-height: 25px; color: #fff; background-color: #2B3044; font-weight: 700; border:" @click="updateClassQuestion(false)">취소</button> -->
							<!-- </div> -->
							<!-- <div v-else class="class_detail_community_user_button"> -->
								<!-- <div class="class_detail_rating_user_updated_button">
									<button @click="updateClassQuestionBoardID = data.BoardID">수정</button>
								</div> -->
								<!-- <button @click="delClassQuestion(data)" class="class_detail_rating_user_delete_button">
									<div class="class_detail_rating_user_delete_trash">
										<div class="class_detail_rating_user_delete_top">
											<div class="class_detail_rating_user_delete_paper"></div>
										</div>
										<div class="class_detail_rating_user_delete_box"></div>
										<div class="class_detail_rating_user_delete_check">
											<svg viewBox="0 0 8 6">
												<polyline points="1 3.4 2.71428571 5 7 1"></polyline>
											</svg>
										</div>
									</div>
									<span>삭제</span>
								</button> -->
								<!-- 안살림 <div class="class_detail_rating_user_delete_button">
									<button @click="delClassQuestion(data)">삭제</button>
								</div> -->
							<!-- </div> -->
						</div>
					</div>	
					<div v-if="instructorData" class="class_detail_community_btn_answer">
						<div v-for="item in instructorData" class="class_detail_community_instructor_answer">
							<div v-if="data.BoardID == item.BoardID">
								<details style="margin-top: 10px;">
									<summary>
										<p>✔강사 답변 보기</p>
									</summary>
									<div class="class_detail_community_instructor_answer_comment">
										<p style="line-height: 30px; white-space: pre-wrap; color: #000;">{{item.CommentContent}}</p>
									</div>
								</details>
							</div>
						</div>
					</div>
					
				</div>
        	</div>

        </div>    

            <!-- 공지사항 -->
        
        <div v-if="clickFlgTab === 3">   
            <div id="class_tab1" class="class_tab_content class_current class_detail_notice_main">
				<div class="class_detail_notice_main_div">
					<div class="class_detail_notice_title">
						<p>메인 공지사항</p>
					</div>
					<div class="class_detail_notice_content">
						<p>집에가면머합니까남아서열심히하소</p>
						<p>그래도레이아웃작업은다해가지않슴니까?</p>
						<p>감사하다명호야</p>
						<p>근데 이거 늘어나나?</p>
						<p>늘어나긴하네</p>
						<p>div로 함더 묶을까 말까</p>
					</div>
				</div>
            </div>
            
            <div class="class_detail_rating_list">
				<div class="class_detail_rating_view_tab">
					<div class="class_detail_rating_tab_title">
                        <!-- 질문게시판 클릭시 커뮤니티 질문게시판 페이지로 이동 -->
						<span>이전 공지사항</span>
					</div>
				</div>

			<hr>

				<div id="class_tab1" class="class_detail_rating_list_div">
					<div class="class_detail_rating_list_user">
						<div class="class_detail_rating_user_id">
							<p>관리자ID</p>
						</div>
						<div class="class_detail_rating_user_date">
							<p>2023-12-13</p>
						</div>
					</div>
					<div class="class_detail_rating_list_text">
						<p>css 이렇게 많이 써본건 처음이야</p>
						<p>css 이렇게 많이 써본건 처음이야</p>
						<p>css 이렇게 많이 써본건 처음이야</p>
						
					</div>
				</div>
			
			<hr>

				<div id="class_tab1" class="class_detail_rating_list_div">
					<div class="class_detail_rating_list_user">
						<div class="class_detail_rating_user_id">
							<p>관리자ID</p>
						</div>
						<div class="class_detail_rating_user_date">
							<p>2023-12-13</p>
						</div>
					</div>
					<div class="class_detail_rating_list_text">
						<p>수업이 재밌어요</p>
					</div>
				</div>

			<hr>	

				<div id="class_tab1" class="class_detail_rating_list_div">
					<div class="class_detail_rating_list_user">
						<div class="class_detail_rating_user_id">
							<p>관리자ID</p>
						</div>
						<div class="class_detail_rating_user_date">
							<p>2023-12-13</p>
						</div>
					</div>
					<div class="class_detail_rating_list_text">
						<p>코딩 조아요</p>
					</div>
				</div>

			<hr>

				<div id="class_tab1" class="class_detail_rating_list_div">
					<div class="class_detail_rating_list_user">
						<div class="class_detail_rating_user_id">
							<p>관리자ID</p>
						</div>
						<div class="class_detail_rating_user_date">
							<p>2023-12-13</p>
						</div>
					</div>
					<div class="class_detail_rating_list_text">
						<p>재밌는 라라벨</p>
					</div>
				</div>
        	</div>
        </div> 

		</div>
        

        
    </div>
</template>
<script>
import Swal from 'sweetalert2';
import axios from 'axios'
import { toHandlerKey } from 'vue';
import LoadingBar from './LoadingComponent';
export default {
    name: 'ClassBoardDetailComponent',
	props: 
		['ClassID'],

	components: {
		LoadingBar,
	},
	
    data() {
        return {
            clickFlgTab: 0,
			// detailClassItems: [],
			detailClassItems: {
				languages: [
					{ ClassLanguageName: 'HTML' },
					{ ClassLanguageName: 'CSS' },
					{ ClassLanguageName: 'JAVA SCRIPT' },
					{ ClassLanguageName: 'PHP' },
					{ ClassLanguageName: 'JAVA' },
					{ ClassLanguageName: 'DATABASE' },
				]
			},
			reviewClassItems: [],
			// 글작성시 필요한 데이터?
			classReviewData: {
				ClassID: this.ClassID,
        		UserID: this.$store.state.UserID,
        		UserEmail: this.$store.state.UserEmail,
        		ReviewComment: '',
        		ReviewRating: Number,
				ReviewID: this.ReviewID,
			},
			EnrollChk: '',
			delReviewData: {
				ReviewID: this.ReviewID
			},
			newReviewData() {
				return {
					ClassID: this.ClassID,
					UserID: this.$store.state.UserID,
					UserEmail: this.$store.state.UserEmail,
					ReviewComment: '',
					ReviewRating: Number,
					ReviewID: this.ReviewID,
				};
			},
			// 질문하기. 함수로 객체만드는것과 데이터자체를 객체로 만드는것은 어떤 차이가 있는가
			// newReviewData: {
			// 	ClassID: this.ClassID,
        	// 	UserID: this.$store.state.UserID,
        	// 	UserEmail: this.$store.state.UserEmail,
        	// 	ReviewComment: '',
        	// 	ReviewRating: Number,
			// 	ReviewID: this.ReviewID,
			// },
			editReview: false,
			classEnrollData: {
				ClassID: this.ClassID,
				UserID: this.$store.state.UserID
			},
			enrollmentCnt: null,
			// pagination: {},
			// page: {},
			solve: null,
			sortData: 0,
			classCuriData: {},
			classRatingData: {},
			// enrollflg: null,
			languagesChk: {},
			allLessonsData: {},
			updataReviewData: {},
			updataReviewID: {},
			ratingStar: [
				{ value: 1.0, emoji: '⭐' },
				{ value: 2.0, emoji: '⭐⭐' },
				{ value: 3.0, emoji: '⭐⭐⭐' },
				{ value: 4.0, emoji: '⭐⭐⭐⭐' },
				{ value: 5.0, emoji: '⭐⭐⭐⭐⭐' },
			],
			page: {},

			paymentUserData: {},
			// 강의 질문
			classQuestionData: [],
			instructorData: [],
			classQuestionItems: {
				ClassID: this.ClassID,
				UserID: this.$store.state.UserID,
				BoardID: this.BoardID,
				UserEmail: this.$store.state.UserEmail,
				BoardTitle: this.BoardTitle,
				BoardComment: this.BoardComment,
			},
			classQuestionAnswerData:{},
			newClassQuestion() {
				return {
					ClassID: this.ClassID,
					BoardID: this.BoardID,
					UserID: this.$store.state.UserID,
					UserEmail: this.$store.state.UserEmail,
					BoardTitle: this.BoardTitle,
					BoardComment: this.BoardComment,
				}
			},
			updateClassQuestionData: {},
			updateClassQuestionBoardID: {},
			answerData: {},
			loading: true,
        }
    },
	mounted() {
        this.fetchData();
		this.enrollflg = true;
    },

	updated() {

	},

	methods: {
		fetchData(page = 1) {
		// 여기에서 정보를 추가로 조회하는 로직을 구현
		// 예시: API를 호출하여 데이터를 가져옴\
		axios.get('/classBoardDetail/' + this.ClassID)
			.then(response => {
			// API 응답에 대한 로직 수행
			// console.log(response.data);
			this.detailClassItems = response.data.result;
			// this.enrollmentCnt = response.data.userCnt.user_count;
			// this.classCuriData = response.data.classCuri;
			this.EnrollChk = response.data.enrollmentChk;
			this.languagesChk = response.data.result.languages[0].ClassLanguageName;
			this.allLessonsData = response.data.allLessonsData;
			this.paymentUserData = response.data.userData;
			
			if (response.data.avgReviewRating && response.data.avgReviewRating.avgRating !== undefined) {
				// avgRating 값이 존재하는 경우
				this.classRatingData = response.data.avgReviewRating.avgRating;
			} else {
				// avgRating 값이 없는 경우
				this.classRatingData = 0;
			}

			if (response.data.userCnt.user_count !== undefined) {
				// avgRating 값이 존재하는 경우
				this.enrollmentCnt = response.data.userCnt.user_count;
			} else {
				// avgRating 값이 없는 경우
				this.enrollmentCnt = 0;
			}

			const checkLoad = () => {
					if(response.data) {
						this.loading = false;
					} else {
						setTimeout(checkLoad, 10);
					}
				}

			checkLoad();


			// if(this.clickFlgTab === 1) {
				axios.get('/classboarddetailreview/' + this.ClassID)
				// axios.get(`/classboarddetailreview/data`, {
				// 	params: {
				// 		page: this.pagination.current_page
				// 	}
				// })
				.then(reviewResponse => {
                    // 두 번째 API 응답에 대한 로직 수행
                    // console.log(reviewResponse.data);
						this.reviewClassItems = reviewResponse.data.reviewsData;
						// this.pagination = reviewResponse.data.links;
						this.EnrollChk = reviewResponse.data.enrollmentData;
						// this.newReviewData = reviewResponse.data.classReviewData;
						// console.log('classID',this.ClassID);

						axios.get('/classquestion/' + this.ClassID)
						.then(boardResponse => {
							// console.log(boardResponse);
							// console.log('이건 값이 있어');
							// console.log(boardResponse.data);
							// console.log('이건 값이 없어');
							// console.log(boardResponse.data.data);
							// console.log('이건 값이 ');
							// console.log('강의질문데이터',boardResponse.data.boardData.data);
							this.classQuestionData = boardResponse.data.responseData;
							this.instructorData = boardResponse.data.instructorData;
							// this.classQuestionAnswerData = boardResponse.data.boardData.data.answerData;
							// console.log('강의답변데이터',boardResponse.data.boardData.data.answerData);
							// this.EnrollChk = boardResponse.data.boardData.enrollmentData;
							
						}) 
                })
                .catch(reviewError => {
                    // 두 번째 API 에러 처리
                    console.error(reviewError);
                });
			// }

			})
			.catch(error => {
			// 에러 처리
			console.error(error);
			});
		},

		// addClassReview() {
		// 	axios.post('/classboarddetailreview/' + this.ClassID)
		// 		.then(reviewResponse => {
        //             // 두 번째 API 응답에 대한 로직 수행
        //             console.log(reviewResponse.data);
		// 			this.userClassReviewComment = reviewResponse.data;
        //         })
        //         .catch(reviewError => {
        //             // 두 번째 API 에러 처리
        //             console.error(reviewError);
        //         });
    	// },

		// 수강평 작성 함수
		addClassReview() {
			// this.$store.dispatch('addClassReview', this.classReviewData);\
			
            const url = '/classboarddetailreview'
            const header = {
                headers: {
                    "Content-Type": 'multipart/form-data',
                    // 'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                },
            }
            let frm = new FormData();
            frm.append('ClassID',this.classReviewData.ClassID);
            frm.append('UserID',this.classReviewData.UserID);
            frm.append('ReviewComment',this.classReviewData.ReviewComment);
            frm.append('ReviewRating',this.classReviewData.ReviewRating);

            // console.log(frm);

            axios.post(url, frm, header)
            .then(res => {
				Swal.fire({
					icon: 'success',
					title: '완료',
					text: '수강평이 작성되었습니다.',
					confirmButtonText: '확인'
            	})
				// console.log(res.data);
				// console.log(this.reviewClassItems);
				// console.log(this.reviewClassItems.UserEmail);
				
                // console.log(res.data[0]);
				
				// 기존 수강평 데이터의 [0]번 방에 작성한 수강평 추가
                this.reviewClassItems.unshift(res.data[0]);
				// console.log(this.classReviewData);
				// 수강평 등록시 기록된 데이터 삭제?
				// if(this.deleteClassReview) {
				// if(this.addClassReview) {
				// 	return this.classReviewData = '';
				// }
				this.classReviewData = this.newReviewData();
				// this.classReviewData = this.newReviewData ;
				
			})
			// .then(res => {
			// 	this.newReviewData();
			// })
            .catch(err => {
                // console.log(err.response.data.errors)
                // context.commit('setRegistrationErrorMessage', err.response.data.errors);
				Swal.fire({
                    icon: 'error',
                    title: '에러',
                    text: '내용 및 별점을 체크해주세요.',
				});
            })
		},
		hideEmail(email) {
			const atIndex = email.indexOf('@');
			const username = email.substring(0, Math.min(4, atIndex));
			const asterisks = '*'.repeat(atIndex - 4);
			return username + asterisks;
		},

		//수강평에 이모지 표현 함수
		getRatingStar(rating) {
			// console.log(rating);
			// console.log(this.classReviewData);
			// console.log(this.classReviewData.ReviewRating);
			// const rating = this.classReviewData.ReviewRating;
			// return this.ratingStar[rating];
			const starObject = this.ratingStar.find(item => item.value == rating);
			// console.log(starObject);
  			return starObject ? starObject.emoji : '';
		},

		// 수강평 삭제 함수
		// deleteClassReview(data) {
		// 	this.$store.dispatch('deleteClassReview', data);
		// },

		async deleteClassReview(data) {
    		const button = document.querySelector('.class_detail_rating_user_delete_button.reviewID' + data.ReviewID);

			if (!button.classList.contains('delete')) {
			button.classList.add('delete');
			setTimeout(() => {
				button.classList.remove('delete');
				this.handleDeleteConfirmation(data);
			}, 1000);
			}
		},
		async handleDeleteConfirmation(data) {
			const result = await Swal.fire({
			title: '정말로 삭제하시겠습니까?',
			text: '삭제 후에는 복구할 수 없습니다.',
			icon: 'question',
			showCancelButton: true,
			confirmButtonColor: '#d33',
			cancelButtonColor: '#3085d6',
			confirmButtonText: '삭제',
			cancelButtonText: '취소',
			});

			if (result.isConfirmed) {
			const url = '/classboarddetailreview/' + data.ReviewID;
			const header = {
				headers: {
				'Content-Type': 'multipart/form-data',
				'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
				},
			};

			try {
				const res = await axios.delete(url, header);
				Swal.fire({
				icon: 'success',
				title: '완료',
				text: '수강평이 삭제되었습니다.',
				confirmButtonText: '확인'
				});

				this.reviewClassItems = this.reviewClassItems.filter((item) => item.ReviewID !== data.ReviewID);
			} catch (err) {
				console.error(err);
				Swal.fire({
				icon: 'error',
				title: '삭제 실패',
				text: '삭제 중에 오류가 발생했습니다.',
				});
			}
			}
		},

		async postEnrollApp() {
			if (!this.$store.state.UserID) {
				Swal.fire({
					icon: 'error',
					title: '에러',
					text: '로그인 후 수강신청 해주세요.',
				});
				return; // 로그인되지 않았을 때 함수 종료
			}

			const button = document.querySelector('.class_enrollment_button');

			if (!button.classList.contains('compress')) {
				button.classList.add('compress');
				setTimeout(() => button.classList.remove('compress'), 1000);
			}

			try {
				await new Promise(resolve => setTimeout(resolve, 500)); // 4초 대기
				const response = await axios.post('/classEnrollAppPost', {
					ClassID: this.ClassID,
					UserID: this.$store.state.UserID,
					Payment: this.detailClassItems.ClassPrice,
				});

				this.EnrollChk = true;
				Swal.fire({
					icon: 'success',
					title: '성공',
					text: '수강 신청에 성공하셨습니다.',
				});
				// window.location.reload();
			} catch (error) {
				// 실패 처리
				console.error(error);
				// context.commit('setRegistrationErrorMessage', error.response.data.errors);
			}
		},
		
		clickTab() {
			this.hovered = true;
		},
		clickTabOut() {
			this.hovered = false;
		},
		addUpdataReview(data) {
			
			if(data){
				this.updataReviewData = data;
				// console.log(this.updataReviewData);
				// console.log(data);
				
				axios.put('/classboarddetailreview', {
					ClassID : this.updataReviewData.ClassID,
					UserID: this.updataReviewData.UserID,
					ReviewID: this.updataReviewData.ReviewID,
					ReviewComment: this.updataReviewData.ReviewComment,
					ReviewRating: this.classReviewData.ReviewRating,
					// ReviewRating: this.updataReviewData.ReviewRating,
				})
				.then(response => {
					// 여기서는 백엔드 db만 데이터가 변경되는것.
					// console.log(response);
					// console.log(this.updataReviewData);
					// console.log(this.classReviewData);
					// console.log(response.data);
					// console.log(this.reviewClassItems);
					// 서버 응답에 대한 로직 수행
					// this.$router.push('/board');
					// this.reviewClassItems.unshift(res.data[0]);
					this.updataReviewData.ReviewRating = this.classReviewData.ReviewRating;
					this.updataReviewData = response.data;

					Swal.fire({
					icon: 'success',
					title: '수정',
					text: '수강평이 수정되었습니다.',
					confirmButtonText: '확인'
					})

					// .then((result) => {
					// 	if(this.updataReviewID === false) {
					// 		this.updataReviewID = false;
					// 	}
					// 	console.log(this.updataReviewID);
					// })

					
					this.updataReviewID = false;
					// console.log(this.updataReviewData.ReviewRating);
					
					// console.log(this.updataReviewData);
					// console.log(this.classReviewData.ReviewRating);

				})
				.catch(error => {
					// 에러 처리
					console.error(error);
				});
			} else {
				this.updataReviewID = false;
			}
			// console.log(data);
			
		
		},
		KGpay() {
			const button = document.querySelector('.class_enrollment_button');

			if (!button.classList.contains('compress')) {
				button.classList.add('compress');
				setTimeout(() => button.classList.remove('compress'), 1000);
			}

			const self = this;
			const merchant_uid = this.ClassID;
			const amount = this.detailClassItems.ClassPrice;
			const buyer_email = this.paymentUserData.UserEmail;
			const buyer_name = this.paymentUserData.UserName;
			const buyer_tel = this.paymentUserData.UserPhoneNumber;
			const buyer_addr = this.paymentUserData.UserRoadAddress + this.paymentUserData.UserRoadAddress;
			const buyer_postcode = this.paymentUserData.UserPostcode;

			const paymentPromise = new Promise((resolve, reject) => {
				IMP.init("imp78131745");
				IMP.request_pay({
					pg: 'html5_inicis',
					pay_method: 'card',
					merchant_uid: merchant_uid + '_' + new Date().getTime(),
					name: 'Plantiful Point',
					amount: amount,
					buyer_email: buyer_email,
					buyer_name: buyer_name,
					buyer_tel: buyer_tel,
					buyer_addr: buyer_addr,
					buyer_postcode: buyer_postcode
				}, function (response) {
					// 결제 후 호출되는 callback 함수
					if (response.success) { // 결제 성공
						console.log(response);
						resolve(); // Promise를 성공(resolve) 상태로 변경
					} else {
						reject(); // Promise를 실패(reject) 상태로 변경
					}
				});
			});

			paymentPromise.then(() => {
				// IMP.request_pay 완료 후 실행되는 코드
				// 이 부분에 추가로 실행할 코드를 작성
			}).catch(() => {
				// 결제 실패 시 처리
				axios.post('/classEnrollAppPost', {
					ClassID: self.ClassID,
					UserID: self.$store.state.UserID,
					Payment: self.detailClassItems.ClassPrice,
				})
					.then(res => {
						self.EnrollChk = true;
						Swal.fire({
							icon: 'success',
							title: '성공',
							text: '수강 신청에 성공하셨습니다.',
						});
						// window.location.reload();
					})
					.catch(err => {
						// 실패 처리
						console.error(err);
					});
			});
		},

		// 강의 질문 함수
		// 질문 작성 함수
		addClassQuestion() {
			// const url = '`/board/data?ClassID=${this.ClassID}`'
			const url = '/board/data?ClassID=' + this.ClassID;
            const header = {
                headers: {
                    "Content-Type": 'multipart/form-data',
                    // "Content-Type": 'application/json',
                    // 'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                },
            }

			// console.log(this.UserEmail);
			// console.log(this.classQuestionItems.UserEmail);
			// console.log(this.$store.state.UserEmail);
			// console.log(UserEmail);

			let frm = new FormData();
            frm.append('ClassID',this.classQuestionItems.ClassID);
            frm.append('UserID',this.classQuestionItems.UserID);
            frm.append('BoardTitle',this.classQuestionItems.BoardTitle);
            frm.append('BoardComment',this.classQuestionItems.BoardComment);


			axios.post(url, frm, header)
			.then(res => {
				Swal.fire({
					icon: 'success',
					title: '완료',
					text: '질문 게시글이 작성되었습니다.',
					confirmButtonText: '확인'
            	})

				// console.log(res.data.data);
				// console.log("res.data임-객체");
				// console.log(res.data);
				// console.log("classQuestionItems임");
				// console.log(this.classQuestionItems);
				// console.log("classQuestionData임-배열");
				// console.log(this.classQuestionData);

				// console.log("Before unshift - classQuestionData:", this.classQuestionData);
        		// this.classQuestionData.unshift(res.data);
        		// console.log("After unshift - classQuestionData:", this.classQuestionData);
        
				// this.classQuestionData.push(res.data);
				this.classQuestionData.unshift(res.data[0]);
				
				this.classQuestionItems = this.newClassQuestion();
				// location.reload();
				
			})
			.catch(error => {
				console.error(error.response);
			})
		},

		
		// 강의 질문 삭제 함수
		async delClassQuestion(data) {
			const button = document.querySelector('.class_detail_rating_user_delete_button.boardID_' + data.BoardID);
			if (!button.classList.contains('delete')) {
			button.classList.add('delete');
			setTimeout(() => {
				button.classList.remove('delete');
				this.handleDeleteConfirmation2(data);
			}, 1000);
			}

			// console.log(data);


		},
		async handleDeleteConfirmation2(data) {
			Swal.fire({
				title: '정말로 삭제하시겠습니까?',
				text: '삭제 후에는 복구할 수 없습니다.',
				icon: 'question',
				showCancelButton: true,
				confirmButtonColor: '#d33',
				cancelButtonColor: '#3085d6',
				confirmButtonText: '삭제',
				cancelButtonText: '취소',
			}).then((result) => {
				// Check if the user clicked the confirm button
				if (result.isConfirmed) {
					// const url = '/board/data?BoardID=' + this.BoardID;
					const url = `/board/data/${data.BoardID}`;
					const header = {
						headers: {
							'Content-Type': 'multipart/form-data',
							'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
						},
					};

				axios
					.delete(url, header)
					.then((res) => {
						Swal.fire({
							icon: 'success',
							title: '완료',
							text: '게시글이 삭제되었습니다.',
							confirmButtonText: '확인'
						})

						// console.log('res',res);
						// console.log(res.data);
						// Remove the deleted item from the reviewClassItems array
						this.classQuestionData = this.classQuestionData.filter((item) => item.BoardID !== data.BoardID);
					})
					.catch((err) => {
						// Handle errors, e.g., display an alert
						console.error(err);
						Swal.fire({
							icon: 'error',
							title: '삭제 실패',
							text: '삭제 중에 오류가 발생했습니다.',
						});
					});
				}
			});
		},
		// 강의 게시글 수정
		updateClassQuestion(data) {
			if(data) {
				this.updateClassQuestionData = data;
				// console.log(this.updataReviewData);
				// console.log(data);
				
				axios.put('/board/data', {
					ClassID : this.updateClassQuestionData.ClassID,
					UserID: this.updateClassQuestionData.UserID,
					BoardID: this.updateClassQuestionData.BoardID,
					BoardTitle: this.updateClassQuestionData.BoardTitle,
					BoardComment: this.updateClassQuestionData.BoardComment,
				})
				.then(response => {
					// 여기서는 백엔드 db만 데이터가 변경되는것.
					console.log(response);
					// console.log(this.updataReviewData);
					// console.log(this.classReviewData);
					console.log('레스폰스데이터입니다',response.data);
					// console.log(this.reviewClassItems);
					// 서버 응답에 대한 로직 수행
					
					// this.updataReviewData.ReviewRating = this.classReviewData.ReviewRating;
					this.updateClassQuestionData = response.data;

					Swal.fire({
					icon: 'success',
					title: '수정',
					text: '게시글이 수정되었습니다.',
					confirmButtonText: '확인'
					})

					this.updateClassQuestionBoardID = false;
					
				})
				.catch(error => {
					// 에러 처리
					console.error(error);
				});
			} else {
				this.updateClassQuestionBoardID = false;
			}
		},
		formatNumber(value) {
            // console.log(value);
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        },

	}
    
}
</script>
<style>
    .class_tab_link.hovered {
		/* color: #222; */
    	border-bottom: 2px solid #000;
	}
</style>