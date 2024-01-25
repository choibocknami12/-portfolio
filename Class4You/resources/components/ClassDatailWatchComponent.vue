<template>
    <!-- <div @wheel.prevent="disableWheel"> -->
    <div>
        <div class="class_detail_watch">
            <div class="class_detail_watch_contents">
                <div class="class_detail_watch_nav">
                    <div class="class_detail_watch_list">
                        <!-- <a class="class_datail_watch_chapter" :href="'/classboarddetail/' + this.ClassID">강의 대시보드 가기</a> -->
                        <!-- <div>{{ClassDataItem.ClassTitle}}</div> -->
                        <!-- <div>전체 진도율</div> -->
                        <a :href="'/classboarddetail/' + this.ClassID"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg></a>
                        <h3>{{ClassDataItem.ClassTitle}}</h3>
                        <!-- {{ selectedLesson }} -->
                        <!-- <button>수강평 작성</button> -->
                        <div></div>
                    </div>
                </div>
                <div class="class_detail_watch_main">
                    <!-- <div v-for="item in ChapterDataItem" class="class_detail_watch_main_content">
                        <div v-html="selectedLesson.LessonVideo"></div>
                    </div> -->
                    <!-- <div v-if="selectedLesson" class="video-container class_detail_watch_main_content"> -->
                    <div class="video-container class_detail_watch_main_content">
                        <div id="youtube-player"></div>
                        <!-- <div v-html="selectedLesson.LessonVideo"></div> -->
                    </div>
                    <!-- <div class="class_detail_watch_main_content_bar">
                        <span>재생바</span>
                    </div> -->
                </div>
                <!-- <div class="class_detail_watch_footer">
                    <button class="class_detail_watch_next_btn" @click="goToPreviousLesson">이전강의</button>
                    <button class="class_detail_watch_next_btn" @click="goToNextLesson">다음강의</button>
                </div> -->
            </div>

            <!-- 탭 UI 될부분 -->
            <div class="class_detail_watch_right_side">
                <div class="class_detail_watch_right_side_tab_nav">
                    <div @click="clickFlgTab = 0; solve = null; sortData = 0;" :class="{'class_detail_watch_side_tab1': sortData == 0}" class="class_detail_watch_side_tab1_off">
                        <span>커리큘럼</span>
                    </div>
                    <div @click="clickFlgTab = 1; solve = null; sortData = 1;" :class="{'class_detail_watch_side_tab2': sortData == 1}" class="class_detail_watch_side_tab2_off">
                        <span>강의노트</span>
                    </div>
                </div>

                <!-- 커리큘럼UI -->
                <div v-if="clickFlgTab === 0" class="class_detail_watch_side_curriculum_div">
                    <div class="class_datail_watch_side_title_box">
                        <div class="class_datail_watch_side_title">
                            <!-- <h3>스스로 키우는 PHP 문법</h3> -->
                            <p>진도율 : {{ notCompletedChapters }}강 / {{ completedChapters }}강</p>
                            <progress class="class_datail_watch_progress_bar_progress" :value="classProgressData"  min="0" max="100" id="progress"></progress>
                            <!-- <div class="class_datail_watch_progress_bar_cover">
                                <div role="progressbar" aria-valuemax="100" aria-valuemin="0" :aria-valuenow="classProgressData" aria-label="진도율" class="class_datail_watchs_progress_bar"></div>
                            </div> -->
                        </div>
                    </div>
                    <hr>
                    <div class="class_datail_watch_side_content">
                        <div class="class_side_content_curriculum">
                            <div class="class_side_content_details" v-for="(chapter, chapterIndex) in ChapterDataItem" :key="chapter.ChapterID">
                                <details>
                                <summary>
                                    <div  class="side_content_curriculum_title">
                                        <div class="side_curriculum_top">
                                            <p> {{ chapter.ChapterTitle }}</p>
                                            <!-- <p>시간</p> -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16"><path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/></svg>
                                        </div>
                                        <!-- <div class="side_curriculum_bottom">
                                            <p>{{ chapter.ChapterTitle }}</p>
                                        </div> -->
                                    </div>
                                </summary>
                                
                                    <div v-for="lesson in LessonDataItem[chapter.ChapterID]" :key="lesson.LessonID" :class="{'side_content_curriculum_content_1': selectedLesson.LessonID == lesson.LessonID, 'side_content_curriculum_content_2': selectedLesson.LessonID !== lesson.LessonID}" @click="selectLesson(lesson)">
                                        <div class="side_content_curriculum_top">
                                            <p v-if="selectedLesson.LessonID == lesson.LessonID"><svg style="margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/></svg></p>
                                            <p v-else><svg style="margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg></p>
                                            <p>{{lesson.LessonTitle}}</p>
                                        </div>
                                        <div class="side_content_curriculum_buttom">
                                            <p>{{lesson.LessonContent}}</p>
                                        </div>
                                        <!-- <div class="side_content_curriculum_bottom">
                                            <p>아이콘</p>
                                            <p>10분</p>
                                        </div> -->
                                    </div>
                                </details>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 강의노트UI -->
                <div v-if="clickFlgTab === 1" class="class_detail_watch_side_classnote_div">
                    <div>
                        <div class="class_detail_watch_side_classnote_write_div">
                            <fieldset>
                                <div class="class_detail_watch_side_classnote_write">
                                    <div class="class_detail_watch_side_classnote_write_text">
                                        <textarea v-model="noteCommentData.ClassNoteComment" cols="30" rows="10" placeholder="메모해주세요"></textarea>
                                    </div>
                                </div>
                                <div class="class_detail_watch_side_classnote_write_btn">
                                    <button @click="addClassNote()">노트입력</button>
                                </div>
                            </fieldset>
                        </div>
                        <div class="class_detail_watch_side_classnote_list_div">
                            <div v-for="data in noteData" :key="data.ClassNoteID" class="class_detail_watch_side_classnote_list">
                                <div v-if="data.ClassNoteID == updateNoteID" class="class_detail_watch_side_classnote_list_text">
                                    <div>
                                        <textarea v-model="data.ClassNoteComment" class="class_detail_watch_note_update_text" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div v-else  class="class_detail_watch_side_classnote_list_text">   
                                    <div style="font-size: 15px; font-weight: 700; color: #535151; white-space: pre;">
                                        <p>{{ data.ClassNoteComment }}</p>
                                        <!-- <p>{{ data }}</p> -->
                                    </div>
                                </div> 

                                <div>
                                    <div v-if="data.ClassNoteID == updateNoteID" class="class_detail_watch_side_classnote_list_btn">
                                        <div class="class_detail_watch_side_classnote_list_btn_up">
                                            <button @click="updateClassNote(data)">수정</button>
                                        </div>
                                        <div class="class_detail_watch_side_classnote_list_btn_del">
                                            <button @click="updateClassNote(false)">취소</button>
                                        </div>
                                    </div>
                                
                                    <div v-else class="class_detail_watch_side_classnote_list_btn">
                                        <div class="class_detail_watch_side_classnote_list_btn_up">
                                            <button @click="updateNoteID = data.ClassNoteID">수정</button>
                                        </div>
                                        <div class="class_detail_watch_side_classnote_list_btn_del">
                                            <button @click="delClassNote(data)">삭제</button>
                                        </div>
                                        <!-- {{ data }} -->
                                    </div>
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
import axios from 'axios';

export default {
    name: 'ClassDatailWatchComponent',

    props: ['ClassID'],

    data() {
        return {
            ClassDataItem: {},
            ChapterDataItem: {},
            LessonDataItem: {},
            selectedChapter: null,
            selectedLesson: 1,
            // YouTube 동영상 ID
            videoId: '',
            // YouTube Player 객체
            player: null,
            LessonAllRunningTime: 0,
            LessonRunningTime: 0,
            LessonProgress: 0,
            LessonFlg: 0,
            classProgressData: '',

            notCompletedChapters: 0,
            completedChapters: 0,
            clickFlgTab: 0,
            solve: null,
			sortData: 0,

            // 강의 노트
            // classNoteData: [],
            noteData: [],
            noteCommentData: {
                ClassID: this.ClassID,
                UserID: this.$store.state.UserID,
                ClassNoteComment: this.ClassNoteComment,
                ClassNoteID: this.ClassNoteID,
            },
            newNoteCommentData() {
                return {
                    ClassID: this.ClassID,
                    UserID: this.$store.state.UserID,
                    ClassNoteComment: this.ClassNoteComment,
                    ClassNoteID: this.ClassNoteID,
                }
            },
            updateNoteData: {},
            updateNoteID: {},
        }
    },

    
    beforeDestroy() {
        // 컴포넌트가 파괴되기 전(페이지 종료 시점)에 호출되는 훅
        this.saveLessonProgress();
    },

    methods: {
        // disableWheel(event) {
        //     event.preventDefault();
        // },
        fetchData() {
		axios.get('/classwatchview/' + this.ClassID)
			.then(response => {
			// API 응답에 대한 로직 수행
			// console.log(response.data);
                this.ClassDataItem = response.data.classData;
                this.ChapterDataItem = response.data.chapterData;
                this.LessonDataItem = response.data.lessonData;
                this.classProgressData = response.data.classProgressData;
                this.notCompletedChapters = response.data.completedChapters;
                this.completedChapters = response.data.totalChapters;

                // 리슨 데이터의 객체에서 첫번째 챕터 ID값을 가져와서 변수에 저장
                const firstChapterId = Object.keys(response.data.lessonData)[0];
                // 저장한 ID값을 리슨 데이터 배열에 넣어서 첫번쨰 데이터를 가져옴
                const firstChapterLessons = response.data.lessonData[firstChapterId];

                // 처번째 레슨값이 있는지 그리고 0보다 큰지를 확인함
                if (firstChapterLessons && firstChapterLessons.length > 0) {
                    // 첫번째 비디오 아이디 값을 불러와서 변수에 저장
                    const firstLessonVideoId = firstChapterLessons[0].LessonVideoID;
                    // console.log(firstLessonVideoId);
                    // 해당 값을 변수에 저장
                    this.videoId = firstLessonVideoId;
                }
                // console.log(response.data.lessonData);
                // this.videoId = response.data.lessonData
                axios.get('/classwatchnote/' + this.ClassID)
                .then(noteResponse => {
                    // console.log('노트레스폰스데이터',noteResponse);
                    // console.log(noteResponse.data.noteData);
                    this.noteData = noteResponse.data.noteData;
                    // console.log(this.noteData);
                })
                .catch(noteError => {
                    // 두 번째 API 에러 처리
                    console.error(noteError);
                });

			})
			.catch(error => {
			// 에러 처리
			    console.error(error);
			});
		},
        selectChapter(chapterID) {
            // 선택된 챕터를 업데이트하고 선택된 레슨 초기화
            this.selectedChapter = chapterID;
            this.selectedLesson = null;
        },
        selectLesson(lessonID) {
            // 선택된 레슨을 업데이트하고 해당 레슨의 비디오 ID를 사용하여 videoId를 설정
            this.selectedLesson = lessonID;
            // console.log(this.selectedLesson.LessonVideoID);
            this.videoId = this.selectedLesson.LessonVideoID;
        },
        getLessonVideo(lessonID) {
            // lessonID에 해당하는 레슨의 비디오 ID 반환 (현재 사용 X)
            return this.lessonDataItem.lessonVideoID
        },
        isSelectedLesson(lesson) {
            // 현재 선택된 레슨인지 확인하는 메서드
            return this.selectedLesson === lesson;
        },

        initYoutubePlayer() {
            // YouTube Player 생성
            this.player = new window.YT.Player('youtube-player', {
            height: '550',
            width: '1000',
            videoId: this.videoId,
            events: {
                'onReady': this.onPlayerReady,
                'onStateChange': this.onPlayerStateChange,
            },
            playerVars: {
                'origin': 'http://127.0.0.1:8000',
                'key': 'AIzaSyCZuYGiU9g-_nslcbFnWRd9ZSxkEu9bltg',
            },
        });
        },
        onPlayerReady(event) {
            // YouTube Player가 준비되면 호출되는 콜백
            this.LessonAllRunningTime = this.player.getDuration();
            // console.log(this.player);
        },
        getCurrentTime() {
            // YouTube API의 getCurrentTime() 메서드를 사용하여 현재 동영상 위치와 진행도 계산
            // 주기적으로 호출되어 동영상의 현재 위치를 업데이트
            if (this.player) {
                this.currentTime = this.player.getCurrentTime();
                this.LessonRunningTime = this.currentTime;
                // console.log('현재 동영상 위치:', this.currentTime);
                
                // 동영상 총 길이 가져오기
                this.duration = this.player.getDuration();
                // 진행도 계산
                this.progressPercentage = (this.currentTime / this.duration) * 100;
                // LessonProgress 업데이트
                this.LessonProgress = this.progressPercentage;
            }
        },
        onPlayerStateChange(event) {
            // YouTube Player의 상태 변경 이벤트 처리
            // 동영상이 종료되면 handleVideoCompletion() 호출
            // 동영상이 재생 중이면 getCurrentTime()을 주기적으로 호출하여 동영상 위치 업데이트
            // 동영상이 일시 정지되면 saveLessonProgress() 호출 및 갱신 중지
            if (event.data === window.YT.PlayerState.ENDED) {
                // 동영상이 종료되면 완료 체크 수행
                this.handleVideoCompletion();
            } else if (event.data === window.YT.PlayerState.PLAYING) {
                // 동영상이 재생 중일 때 1초 간격으로 현재 동영상 위치 콘솔에 출력
                    this.progressInterval = setInterval(() => {
                    this.getCurrentTime();
                }, 1000);
            } else if (event.data === window.YT.PlayerState.PAUSED) {
                // 동영상이 일시 정지 상태일 때 갱신 중지
                clearInterval(this.progressInterval);
                this.saveLessonProgress();
            }
        },
        handleVideoCompletion() {
            // 동영상이 끝났을 때 실행할 작업 수행
            this.LessonFlg = 1;
            this.saveLessonProgress();
            // console.log('영상 끝');
        },
        saveLessonProgress() {
            // 서버에 레슨 진행 상태를 업데이트하는 메서드 (Axios를 사용하여 PUT 요청)
            // 필요한 데이터를 서버에 보내어 레슨 진행 상태 저장
            axios.put('/lessonprogress', {
                lessonAllRunningTime: this.LessonAllRunningTime,
                lessonRunningTime: this.LessonRunningTime,
                lessonFlg: this.LessonFlg,
                progressPercentage: this.LessonProgress,  // Vuex Store에서 상태 가져오기
                LessonID: this.selectedLesson.LessonID,
                UserID: this.$store.state.UserID,
                ClassID: this.ClassID,
                // 다른 필요한 데이터 추가 가능
            })
            .then(response => {
                // 서버 응답에 대한 로직 수행
                // console.log(response.data);
            })
            .catch(error => {
                // 에러 처리
                console.error(error);
            });
        },
        goToNextLesson() {
            // 다음 레슨으로 이동하는 메서드
            const allLessons = Object.values(this.LessonDataItem).flat();
            // console.log(allLessons.length);
            const currentIndex = allLessons.findIndex(lesson => lesson.LessonID == this.selectedLesson);
            // console.log(currentIndex);

            if(currentIndex < allLessons.length - 1) {
                
                // 현재 리슨이 배열의 범위 내에 있고, 다음 리슨이 있다면
                const nextLesson = allLessons[currentIndex + 1];
                // console.log(nextLesson);
                // 다음 리슨으로 전환
                this.selectedLesson = nextLesson.LessonID;
                this.videoId = nextLesson.LessonVideoID;    

                // YouTube 플레이어 초기화
                this.player.destroy();
                this.initYoutubePlayer();
            } else {
                alert('다음 영상이 없습니다.');
            }
        },
        goToPreviousLesson() {

            const allLessons = Object.values(this.LessonDataItem).flat();
            // console.log(allLessons.length);
            const currentIndex = allLessons.findIndex(lesson => lesson.LessonID === this.selectedLesson);
            // console.log(currentIndex);

            // 현재 리슨이 배열의 첫 번째보다 더 앞에 있고, 이전 리슨이 있다면
            const previousLesson = allLessons[currentIndex - 1];

            // 이전 리슨으로 전환
            this.selectedLesson = previousLesson.LessonID;
            this.videoId = previousLesson.LessonVideoID;

            // YouTube 플레이어 초기화
            this.player.destroy();
            this.initYoutubePlayer();
        },
        // 노트 작성 함수
        addClassNote() {

            const url = '/classwatchnote'
            const header = {
                headers: {
                    "Content-Type": 'multipart/form-data',
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                },
            }

            let frm = new FormData();
            frm.append('ClassID',this.noteCommentData.ClassID);
            frm.append('UserID',this.noteCommentData.UserID);
            // frm.append('ClassNoteID',this.noteCommentData.ClassNoteID);
            frm.append('ClassNoteComment',this.noteCommentData.ClassNoteComment);

            axios.post(url, frm, header)
            .then(res => {
                // res가 왜 빈값인지 알아야함.>해결
                // console.log("res데이터 어디갔냐");
                // console.log(res);
                // console.log(res);
                // console.log("레스데이터", res.data);
                // console.log("UserID값", res.data.UserID);
                
                
                // 여기엔 있음
                // console.log("노트아이디", res.data.ClassNoteID);
                // 작성된 노트 데이터
                // console.log("작성된 노트 데이터");
                // console.log("this.noteCommentData", this.noteCommentData);
                // 노트데이터 배열 리스트
                // console.log("this.noteData",this.noteData);
                // 밑에 둘다 ID없음
                // console.log("노트아이디찾자",this.noteData.ClassNoteID);
                // console.log("노트아이디찾자",this.noteCommentData.ClassNoteID);
                // console.log(this.classNoteData);
                
                this.noteCommentData.ClassNoteID = res.data.ClassNoteID;
                // console.log("노트아이디찾자",this.noteCommentData.ClassNoteID);
                this.noteData.unshift(res.data);
                // this.noteCommentData.unshift(this.noteData[0]);
                this.noteCommentData = this.newNoteCommentData();
                // ClassNoteID값이 안들어가있음. 컨트롤러에서는 다 받아옴. 이거 확인되야 바로 수정가능할듯
                // console.log(this.noteCommentData);
            })
            .catch(err => {
                // console.log("전달안됨")
            })
        },
        // 노트 삭제 함수
        delClassNote(data) {
            console.log(data);
			// Display confirmation dialog using Swal.fire
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
					const url = '/classwatchnote/' + data.ClassNoteID;
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
							text: '노트가 삭제되었습니다.',
							confirmButtonText: '확인'
						})
						// Remove the deleted item from the reviewClassItems array
						this.noteData = this.noteData.filter((item) => item.ClassNoteID !== data.ClassNoteID);
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
        // 노트 수정 함수
        updateClassNote(data) {
            
            // console.log("data는 이거");
            // console.log(data);

            if(data) {
                this.updateNoteData = data;
                // console.log("updateNoteData는 이거");
                // console.log(this.updateNoteData);

                axios.put('/classwatchnote', {
                    ClassID: this.updateNoteData.ClassID,
                    UserID: this.updateNoteData.UserID,
                    ClassNoteID: this.updateNoteData.ClassNoteID,
                    ClassNoteComment: this.updateNoteData.ClassNoteComment,
                })
                .then(response => {
                    // console.log('put되고나서 데이터값');
                    // console.log(response.data);

                    this.updateNoteData = response.data;

                    Swal.fire({
					icon: 'success',
					title: '수정',
					text: '노트가 수정되었습니다.',
					confirmButtonText: '확인'
					})

                    this.updateNoteID = false;
                })
                .catch(error => {
					// 에러 처리
                    // 콘솔 에러를 이렇게 사용하면 디테일한 메세지까지 확인할 수 있음.
					console.error(error.response);
				});
            } else {
                this.updateNoteID = false;
            }
        },
    },
    
    mounted() {
        // 컴포넌트가 마운트되면 fetchData() 및 initYoutubePlayer() 호출
        this.fetchData();
            if (window.YT && window.YT.Player) {
            this.initYoutubePlayer();
            } else {
            // YouTube IFrame API 로드 후 초기화
            window.onYouTubeIframeAPIReady = () => {
                this.initYoutubePlayer();
            };
        }    
    },

    watch: {
        // videoId가 변경될 때마다 YT.Player 재생성
        videoId(newVideoId) {
        if (this.player) {
            // 이미 플레이어가 있는 경우 중지하고 파괴
            // this.player.stopVideo();
            this.player.destroy();
        }
        // 새로운 videoId로 플레이어 생성
        this.initYoutubePlayer();
        },
    },

    

}
</script>
<style>
    .wrapper {
        height:auto;
        min-height: 100%;
        /* padding-bottom: 0px; */
    }
    /* 초기 상태에서 숨겨진 상태로 설정 */
    details:not([open]) summary + * {
            display: none;
        }

    /* 트랜지션 효과 설정 */
    details summary {
        cursor: pointer;
        transition: all 0.2s ease-in-out;
    }

    /* 펼쳐졌을 때의 스타일 설정 */
    details[open] summary {
        color: #007BFF; /* 열린 상태일 때의 텍스트 색상 변경 (원하는 색상으로 수정 가능) */
    }

    
</style>