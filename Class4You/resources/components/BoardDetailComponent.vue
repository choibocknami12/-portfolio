<template>
    <div class="wrapper">
        <div class="board_detail_wrap">
            <!-- <div class="whr"><span>게시판</span><span>></span><span>상세 게시판</span></div> -->
            <div class="whr">
                <router-link to="/board">게시판</router-link>
                <span>></span>
                <span>상세 게시판</span>
            </div>
            <div class="main_visual">
                        <div class="main_visual_slider">
                            <div class="main_visual_slider_list">
                                <div class="main_visual_slider_track">
                                    <div class="main_visual_slider_track_slick">
                                        <div class="main_visual_slider_track_slick_item">
                                            <a href="">
                                                <img src="/img/banner/banner5.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-bottom: 50px;"></div>
            <section class="mainSectionpost">
                <section class="mainSec row jcB">
                    <div class="postBox">
                        <div class="postInfo row aiC jcB">
                            <div>
                                <p>작성자 : <span>{{ newBoardItem.UserEmail }}</span></p>
                            </div>
                            <div class="row aiC">
                                <p>작성일<span>{{ newBoardItem.created_at }}</span></p>
                                <p>조회수<span>{{newBoardItem.BoardView}}</span></p>
                                <p>좋아요<span>{{newBoardItem.BoardRecommended}}</span></p>
                            </div>
                        </div>
                        <div class="postTitBox row aiC">
                            <label for="postTit">제목 : </label>
                            <p type="text" id="postTit">{{ newBoardItem.BoardTitle }}</p>
                        </div>
                        <div class="postContBox row">

                            <label for="postCont">내용 : </label> 
                            <p class="postCont" style="white-space: pre-line;">{{ newBoardItem.BoardComment }}</p>
                        </div>
                        <div class="laguage">
                            <!-- <ul class="row aiC laguage_gap_10">
                                <li>React</li>
                                <li>JS</li>
                                <li>CSS</li>
                                <li>HTML</li>
                                <li>LARAVEL</li>
                                <li>React</li>
                            </ul> -->
                        </div>
                        <div class="reco row jcC">
                            <!-- <div class="row aiC cibal_class_name_jangnan">
                                <p>{{recommendationCount}}</p>추천
                                <button type="button" @click="updateRecommendedBoardData()"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16"><path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/></svg></button>
                            </div> -->

                            <!-- <button @click="updateRecommendedBoardData()" class="high-five like_button_color" :class="{'detali_like_state_on': recommendationState === 'like'}">
                                <span v-if="recommendationState === 'like'">Like!</span>
                                <span v-else>좋아요</span>
                                <div class="hands">
                                    <svg class="left" viewBox="0 0 32 36">
                                    <ellipse cx="14" cy="13" rx="9" ry="11" />
                                    <path
                                        d="M16.0011 5.5C15.5011 3.5 13.5012 4 12.5012 5.5C11.5012 7 9.5 14 9.75 20M16.0011 5.5C14.9998 8 13.9981 12 13.9994 16.5M16.0011 5.5C16.5011 4.5 17.5646 2.5 18.4994 2.5C19.737 2.5 20.7439 3.28645 20.5011 4.5M23.4981 7.5C23.4981 7.5 21.9994 12 21.9994 16M23.4981 7.5C24.9981 5.5 27.0011 7 27.0011 8.5C26.7527 10.9503 25.2188 11.8879 25.4985 25.5C25.6052 30.6943 21.6939 34 16.4985 34C11.5003 34 6.59828 29.4598 6.0011 23.5C5.5001 18.5 6.64678 15.1392 7.50115 14C9.00115 12 9.51575 14.5859 9.50102 16C9.48502 17.5364 9.65 20 9.65 20M23.4981 7.5C24 6 23.5 2.5 20.5011 4.5M20.5011 4.5C19.0011 8 17.9994 11.5 17.9994 16.5"
                                    />
                                    </svg>
                                    <svg class="right" viewBox="0 0 32 36">
                                    <ellipse cx="14" cy="13" rx="9" ry="11" />
                                    <path
                                        d="M16.0011 5.5C15.5011 3.5 13.5012 4 12.5012 5.5C11.5012 7 9.5 14 9.75 20M16.0011 5.5C14.9998 8 13.9981 12 13.9994 16.5M16.0011 5.5C16.5011 4.5 17.5646 2.5 18.4994 2.5C19.737 2.5 20.7439 3.28645 20.5011 4.5M23.4981 7.5C23.4981 7.5 21.9994 12 21.9994 16M23.4981 7.5C24.9981 5.5 27.0011 7 27.0011 8.5C26.7527 10.9503 25.2188 11.8879 25.4985 25.5C25.6052 30.6943 21.6939 34 16.4985 34C11.5003 34 6.59828 29.4598 6.0011 23.5C5.5001 18.5 6.64678 15.1392 7.50115 14C9.00115 12 9.51575 14.5859 9.50102 16C9.48502 17.5364 9.65 20 9.65 20M23.4981 7.5C24 6 23.5 2.5 20.5011 4.5M20.5011 4.5C19.0011 8 17.9994 11.5 17.9994 16.5"
                                    />
                                    </svg>
                                </div>
                                <div class="success like_button_bg_color"><span style="line-height: 38px;">Like!</span></div>
                            </button> -->
                            <div style="display: flex; padding: 15px 30px; gap: 20px; border: 1px solid #c6c6c61f; box-shadow: 0px 5px 10px 1px #ebebeb; border-radius: 20px;">
                                <svg style="position: relative; top: -6px" class="board_detail_like" :class="{ 'click': likeisClicked }" @click="updateRecommendedBoardData()" xmlns="http://www.w3.org/2000/svg" version="1.0" width="300.000000pt" height="300.000000pt" viewBox="0 0 300.000000 300.000000" preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" stroke="none">
                                    <path d="M963 2645 c-37 -19 -60 -40 -82 -73 -56 -88 -64 -137 -70 -462 l-6 -295 -225 -5 c-211 -5 -228 -7 -273 -29 -84 -41 -130 -124 -130 -236 0 -57 21 -152 118 -525 64 -250 128 -475 140 -500 27 -52 68 -94 108 -109 38 -15 945 -15 983 -1 32 13 243 161 296 208 57 51 60 81 56 517 -3 348 -5 383 -22 415 -10 19 -143 159 -296 310 -251 249 -281 282 -313 347 -35 71 -64 180 -87 320 -7 41 -21 87 -34 105 -30 45 -89 50 -163 13z"/>
                                    <path d="M2134 1666 c-67 -29 -64 -1 -64 -623 0 -414 3 -569 12 -588 24 -52 41 -55 373 -55 l307 0 29 29 29 29 0 574 c0 636 3 605 -66 634 -47 20 -574 20 -620 0z"/>
                                    </g>
                                </svg>

                                <div class="board_detail_like_num">{{ likeCount }}</div>

                                <svg style="position: relative; top: 6px" class="board_detail_like" :class="{ 'click': hateisClicked }"  @click="updateNotRecommendedBoardData()" xmlns="http://www.w3.org/2000/svg" version="1.0" width="300.000000pt" height="300.000000pt" viewBox="0 0 300.000000 300.000000" preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" stroke="none">
                                    <path d="M209 2571 l-29 -29 0 -574 c0 -636 -3 -605 66 -634 48 -20 570 -20 618 0 69 29 66 -1 66 623 0 414 -3 569 -12 588 -24 52 -41 55 -373 55 l-307 0 -29 -29z"/>
                                    <path d="M1471 2589 c-30 -12 -244 -163 -293 -207 -57 -51 -60 -81 -56 -517 3 -348 5 -383 22 -415 10 -19 143 -159 296 -310 251 -249 281 -282 313 -347 35 -71 64 -180 87 -320 16 -100 42 -137 99 -141 65 -5 141 36 180 96 56 88 64 137 70 462 l6 295 225 5 c211 5 228 7 273 29 84 41 130 124 130 236 0 57 -21 152 -118 525 -64 250 -128 475 -140 500 -27 52 -68 94 -108 109 -36 14 -952 14 -986 0z"/>
                                    </g>
                                </svg>
                            </div>
                            <!-- <button @click="updateNotRecommendedBoardData()" class="high-five" :class="{'detali_hate_state_on': recommendationState === 'hate'}">
                                <span v-if="recommendationState === 'hate'">Hate!</span>
                                <span v-else>싫어요</span>
                                <div class="hands">
                                    <svg class="left" viewBox="0 0 32 36">
                                    <ellipse cx="14" cy="13" rx="9" ry="11" />
                                    <path
                                        d="M16.0011 5.5C15.5011 3.5 13.5012 4 12.5012 5.5C11.5012 7 9.5 14 9.75 20M16.0011 5.5C14.9998 8 13.9981 12 13.9994 16.5M16.0011 5.5C16.5011 4.5 17.5646 2.5 18.4994 2.5C19.737 2.5 20.7439 3.28645 20.5011 4.5M23.4981 7.5C23.4981 7.5 21.9994 12 21.9994 16M23.4981 7.5C24.9981 5.5 27.0011 7 27.0011 8.5C26.7527 10.9503 25.2188 11.8879 25.4985 25.5C25.6052 30.6943 21.6939 34 16.4985 34C11.5003 34 6.59828 29.4598 6.0011 23.5C5.5001 18.5 6.64678 15.1392 7.50115 14C9.00115 12 9.51575 14.5859 9.50102 16C9.48502 17.5364 9.65 20 9.65 20M23.4981 7.5C24 6 23.5 2.5 20.5011 4.5M20.5011 4.5C19.0011 8 17.9994 11.5 17.9994 16.5"
                                    />
                                    </svg>
                                    <svg class="right" viewBox="0 0 32 36">
                                    <ellipse cx="14" cy="13" rx="9" ry="11" />
                                    <path
                                        d="M16.0011 5.5C15.5011 3.5 13.5012 4 12.5012 5.5C11.5012 7 9.5 14 9.75 20M16.0011 5.5C14.9998 8 13.9981 12 13.9994 16.5M16.0011 5.5C16.5011 4.5 17.5646 2.5 18.4994 2.5C19.737 2.5 20.7439 3.28645 20.5011 4.5M23.4981 7.5C23.4981 7.5 21.9994 12 21.9994 16M23.4981 7.5C24.9981 5.5 27.0011 7 27.0011 8.5C26.7527 10.9503 25.2188 11.8879 25.4985 25.5C25.6052 30.6943 21.6939 34 16.4985 34C11.5003 34 6.59828 29.4598 6.0011 23.5C5.5001 18.5 6.64678 15.1392 7.50115 14C9.00115 12 9.51575 14.5859 9.50102 16C9.48502 17.5364 9.65 20 9.65 20M23.4981 7.5C24 6 23.5 2.5 20.5011 4.5M20.5011 4.5C19.0011 8 17.9994 11.5 17.9994 16.5"
                                    />
                                    </svg>
                                </div>
                                <div class="success"><span style="line-height: 38px;">Hate!</span></div>
                            </button> -->
                            
                            <!-- <div>
                                <button @click="updateNotRecommendedBoardData()" class="button-star">
                                    <canvas></canvas>
                                    <div class="label">
                                        <span class="default">비추<span class="success"> 완료</span></span>
                                    </div>
                                    <div class="number">
                                        <span class="current">{{disapprovalCount}}</span>
                                        <span class="new">{{disapprovalCount + 1}}</span>
                                        <div class="add">+1</div>
                                    </div>
                                </button>
                            </div> -->
                            <!-- <div class="row aiC cibal_class_name_jangnan">
                                <button type="button" @click="updateNotRecommendedBoardData()"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-hand-thumbs-down-fill" viewBox="0 0 16 16"><path d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z"/></svg></button>
                                비추천<p>{{disapprovalCount}}</p>
                            </div> -->
                        </div>
                        
                        <div class="board_button">
                            <div class="board_detail_report_div">
                                <div class="board_detail_report_btn">
                                    <button v-if="$store.state.userLoginChk" type="button" @click="boardReport()">🚨 게시글 신고</button>
                                </div>
                            </div>

                            <div v-if="newBoardItem.UserID == $store.state.UserID"  class="row aiC">
                                <a v-if="newBoardItem.BoardFlg == '0'" @click="updatecompleteBoardData()" class="board_complete">해결</a>
                                <a :href="'/boardupdate/' + newBoardItem.BoardID" v-if="$store.state.UserID" class="board_rewrite">수정</a>
                                <!-- <a @click="deleteBoardData(newBoardItem.BoardID)" class="board_delete">삭제</a> -->
                                <!-- <button @click="deleteBoardData(newBoardItem.BoardID)" class="board_delete">삭제</button> -->
                                <!-- <a @click="deleteBoardData(newBoardItem.BoardID)" class="board_delete">삭제</a> -->
                                <button @click="deleteBoardData(newBoardItem.BoardID)" :class="{ 'class_detail_rating_user_delete_button': true, ['boardID' + newBoardItem.BoardID]: true }" >
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
            
                    <div class="reviewBox border-t-none">
                        <!-- <div class="number">
                            <p>답변<span>0</span></p>
                        </div> -->
                            <div class="Commentnumber">
                                <p>답변 <span>{{ newCommentItem.length }}</span></p>
                            </div>
                        <div class="reviewList">
                            <p class="board_detail_user_id">{{nowUserID.UserEmail}}</p>
                        </div>
                        <div class="reviewPost row jcB">
                            <!-- <textarea placeholder="댓글을 입력해주세요." v-model="frmCommentData.CommentContent"></textarea> -->
                            <textarea placeholder="댓글을 입력해주세요." v-model="commentData.CommentContent"></textarea>
                            <!-- <textarea placeholder="댓글을 입력해주세요." v-model="newCommentItem.CommentContent"></textarea> -->
                            <!-- <button type="button" @click="submitCommentData()">저장</button> -->
                            <button @click="addBoardComment()">저장</button>
                        </div>
                    </div>
                    <div class="reviewBox border-t-none" style="padding: 10px 0px;">
                        <div v-for="item in newCommentItem" :key="item.CommentID" class="reviewList">
                            <div class="item">
                                <div class="commentInfo row aiC jcB">
                                    <p class="comment_writer">작성자<span>{{ hideEmail(item.UserEmail) }}</span></p>
                                    <div class="comment_created_report_div">
                                        <p>작성일<span>{{ item.created_at }}</span></p>
                                        
                                    </div>
                                </div>
                                <div class="commentText">
                                    <textarea v-if="item.CommentID == updateCommentID" v-model="item.CommentContent" class="board_comment_update_textarea"></textarea>
                                    <span v-else>{{ item.CommentContent }}</span>   
                                </div>
                                
                                <div class="commentActions row aiC">
                                    <button v-if="$store.state.userLoginChk" class="comment_report_btn" type="button" @click="commentReport(item.CommentID)">🚨 댓글신고</button>
                                    <div v-if="item.UserID == $store.state.UserID" style="margin-left: auto;">
                                        <div v-if="item.CommentID == updateCommentID" >
                                            <button @click="addUpdateComment(item)" class="commentActions_updateBtn">수정</button>
                                            <button @click="updateCommentID = false" class="commentActions_deleteBtn">취소</button>
                                        </div>    
                                            <!-- <button class="comment_editBtn">수정</button> -->
                                        <div style="display: flex;" v-else>
                                            <button @click="updateCommentID = item.CommentID" class="commentActions_updateBtn">수정</button>
                                            <button @click="deleteCommentData(item.CommentID)" :class="{ 'class_detail_rating_user_delete_button': true, ['commentID' + item.CommentID]: true }" style="padding: 5px 20px">
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
                                            <!-- <button @click="deleteCommentData(item.CommentID)" class="commentActions_deleteBtn">삭제</button> -->
                                            <!-- <button class="commentActions_reportBtn">신고</button> -->
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin-top: 20px;">
                            </div>       
                        </div>
                    </div>
                </section> 
            </section>
        </div>
    </div>
    <!-- <div v-if="showEditModalFlag" class="modal">
        <div class="modal-content">
            <span class="close" @click="closeEditModal">&times;</span>
            <textarea v-model="editCommentContent"></textarea>
            <button @click="updateCommentData(editingCommentId)">저장</button>
        </div>
    </div> -->

</template>
<script>
import Swal from 'sweetalert2';
import * as THREE from 'three';
import gsap from 'gsap';
export default {
    name: 'BoardDetailComponent',

    props: ['BoardID'],

    data() {
        return {
            newBoardItem: {
            },
            nowUserID: {},
            // newCommentItem: {
            // },
            newCommentItem: [],
            newComment: '', 

            // frmCommentData: {
            //     UserID: this.$store.state.UserID,
            //     BoardID: this.BoardID,
            //     CommentID: this.CommnetID,
            //     CommentContent: '',
            // },
            commentData: {
                UserID: this.$store.state.UserID,
                UserEmail: this.$store.state.UserEmail,
                BoardID: this.BoardID,
                CommentID: this.CommentID,
                CommentContent: '',
            },
            // commentData: [
            //     {
            //         UserID: this.$store.state.UserID,
            //         UserEmail: this.$store.state.UserEmail,
            //         BoardID: this.BoardID,
            //         CommentID: this.CommentID,
            //         CommentContent: '',
            //     }
            // ],
            commentItems: [],
            newCommentData() {
                return {
                    UserID: this.$store.state.UserID,
                    UserEmail: this.$store.state.UserEmail,
                    BoardID: this.BoardID,
                    CommentID: this.CommentID,
                    CommentContent: '',
                };
            },
            updateCommentData: {},
            updateCommentID: {},
            // recommendationCount: 0,
            // disapprovalCount: 0,

            likeCount: 0,

            // 게시글 신고
            boardReportData: {
                UserID: this.$store.state.UserID,
                UserEmail: this.$store.state.UserEmail,
                BoardID: this.BoardID,
                CommentID: this.CommentID,
                ReportContent: this.ReportContent,
            },
            newReportData: {},
            commentReportData: {
                UserID: this.$store.state.UserID,
                CommentID: this.CommentID,
                ReportContent: this.ReportContent,
            },
            reportData: [],

            recommendationState: false,
            
            likeisClicked: false,
            hateisClicked: false,
        };
    },

    mounted() {
        this.fetchData();

        const scene = new THREE.Scene();
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
        'https://assets.codepen.io/16327/MorphSVGPlugin3.min.js',
        'https://unpkg.co/gsap@3/dist/gsap.min.js'
        ];

        // 로드할 내부 스크립트의 경로를 정의
        const internalScriptToLoad = '/js/LikeButtonScript.js';

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
                console.log('All scripts loaded!');
            });
        });
    },

    updated() {
        // console.log('컴포넌트가 업데이트되었습니다.', this.commentItems);
    },

    methods: {
        fetchData() {
        axios.get('/boarddetail/' + this.BoardID)
            .then(response => {
            // console.log(response.data);
                this.newBoardItem = response.data.boardData;
                this.nowUserID = response.data.userID;
                this.newCommentItem = response.data.commentData;
                // this.recommendationCount = response.data.recommendationCount;
                // this.disapprovalCount = response.data.disapprovalCount;
                this.likeCount = response.data.likeCount;
                this.recommendationState = response.data.recommendationState;
                this.reportData = response.data.commentReportData;
                // console.log(response.data.commentData);

                if(this.recommendationState === 'like') {
                    this.likeisClicked = true;
                } else if(this.recommendationState === 'hate') {
                    this.hateisClicked = true;
                } else {
                    this.likeisClicked = false;
                    this.hateisClicked = false;
                }
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
        },
        // 이메일 변환 함수
        hideEmail(email) {
			const atIndex = email.indexOf('@');
			const username = email.substring(0, Math.min(4, atIndex));
			const asterisks = '*'.repeat(atIndex - 4);
			return username + asterisks;
		},

        // 댓글 작성 불러오기
        // submitCommentData() {
        //     this.$store.dispatch('submitCommentData', this.frmCommentData);
        //     console.log(this.frmCommentData);
        // },

        // 댓글 작성 함수
        addBoardComment() {
            if (this.$store.state.userLoginChk) {
                const url = '/comments'
                const header = {
                    headers: {
                        "Content-Type": 'multipart/form-data',
                        'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                    },
                }

                // TODO : data 부분 찾아가지고 변경해야댐
                // if(!data.UserID) {
                //     Swal.fire({
                //         icon: 'error',
                //         title: '로그인 확인',
                //         text: '로그인 후 작성해주세요.',
                //         confirmButtonText: '확인'
                //     });
                // } else if(!data.CommentContent) {
                //     Swal.fire({
                //         icon: 'error',
                //         title: '내용 확인',
                //         text: '내용을 입력해주세요.',
                //         confirmButtonText: '확인'
                //     });
                // }
                let frm = new FormData();
                // console.log(data);

                frm.append('BoardID',this.commentData.BoardID);
                frm.append('UserID',this.commentData.UserID);
                frm.append('UserEmail',this.commentData.UserEmail);
                frm.append('CommentContent',this.commentData.CommentContent);

                // console.log(frm);

                axios.post(url, frm, header)
                .then(res => {
                    Swal.fire({
                        icon: 'success',
                        title: '완료',
                        text: '댓글이 작성되었습니다.',
                        confirmButtonText: '확인'
                    })
                    //res.data가 이상함. 다시 확인해야함
                    // console.log(res.data);
                    // 이게 작성된 댓글리스트들
                    // console.log(this.newCommentItem);
                    // 작성된 댓글 데이터
                    // console.log(this.commentData);
                    // console.log(res.data);
                    // window.location.reload();

                    // unshift는 배열에 사용
                    // this.newCommentItem.unshift(this.commentData);
                    this.newCommentItem.unshift(res.data[0]);
                    // push는 배열에 객체 추가할 때 사용
                    // this.newCommentItem.push({...commentData});
                    // console.log(this.commentData);
                    this.commentData = this.newCommentData();

                })
                .catch(err => {
                    // console.log(err.response.data.errors)
                    // context.commit('setRegistrationErrorMessage', err.response.data.errors);
                })
            } else {
                Swal.fire({
                    icon: 'error',
                    title: '저장 실패',
                    text: '로그인 후 작성해주세요',
                });
            }
            
        },
        

        // 댓글 삭제 불러오기
        // sweetalert2을 이용한 알러트 출력 방법
        async deleteCommentData(deleteCommentID) {

            const button = document.querySelector('.class_detail_rating_user_delete_button.commentID' + deleteCommentID);

                if (!button.classList.contains('delete')) {
                button.classList.add('delete');
                setTimeout(() => {
                    button.classList.remove('delete');
                    this.handleDeleteConfirmation2(deleteCommentID);
                }, 1000);
            }
        },
        async handleDeleteConfirmation2(deleteCommentID) {
            // console.log(deleteCommentID);
                Swal.fire({
                title: '정말로 삭제하시겠습니까?',
                text: "삭제 후에는 복구할 수 없습니다.",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: '삭제',
                cancelButtonText: '취소'
            }).then((result) => {
                // 알러트의 확인 버트을 눌러야 아래 if문이 true갑으로 실행된다
                if (result.isConfirmed) {
                // this.$store.dispatch('deleteCommentData', data);
                
                console.log(deleteCommentID);
                    const url = '/comments/' + deleteCommentID;
                    const header = {
                        headers: {
                            "Content-Type": 'multipart/form-data',
                            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                        },
                    };
                    // const requestData = {
                    //     CommentID: data.CommentID,
                    // };

                // console.log(data);
                // console.log(requestData);

                // axios.delete(url, requestData, header)
                axios.delete(url, header)
                .then(res => { 
                    Swal.fire({
                        icon: 'success',
                        title: '완료',
                        text: '댓글이 삭제되었습니다.',
                        confirmButtonText: '확인'
            	    })
                    // console.log(this.commentItems);
                    // console.log(res.data);
                    // console.log('response before');
                    // console.log(res.data ? 'true' : 'false');
                    // console.log(this.commentData);
                    // console.log(this.commentItems);
                    // this.newCommentItem = [this.newCommentItem];
                    // console.log(this.newCommentData);
                    // console.log(this.newCommentItem);
                    // 해당 처리가 끝나면 리로드함
                    // window.location.reload();
                    // this.newCommentItem = this.newComment.filter((item) => item.CommentID !== requestData.CommentID);
                    // this.newCommentItem = this.commentItems.filter((item) => item.CommentID !== data.CommentID);
                    // this.newCommentItem = this.newCommentData;
                    
                    // this.commentItems = this.commentItems.filter((comment) => comment.CommentID !== data.CommentID);
                    this.newCommentItem = this.newCommentItem.filter((item) => item.CommentID !== deleteCommentID);
                    // console.log('response after');
                    // console.log(this.newCommentItem);
                    
                })
                .catch(err => {
                    // console.log(err.response.data.errors)
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

        // 댓글 수정
        addUpdateComment(data) {
			// console.log(data);
			this.updateCommentData = data;
			// console.log(this.updataReviewData);
			// console.log(data);
			
			axios.put( '/comments', {
                BoardID: this.BoardID,
				UserID: this.updateCommentData.UserID,
				CommentID: this.updateCommentData.CommentID,
				CommentContent: this.updateCommentData.CommentContent,
			})
			.then(response => {
				// console.log(response);
				// 서버 응답에 대한 로직 수행
				// this.$router.push('/board');
				// this.reviewClassItems.unshift(res.data[0]);
				Swal.fire({
                icon: 'success',
                title: '수정',
                text: '댓글이 수정되었습니다.',
                confirmButtonText: '확인'
				}).then((result) => {
					this.updateCommentID = false;
				})
			})
			.catch(error => {
				// 에러 처리
				console.error(error);
			});
		
		},

        // 게시판 삭제 불러오기
        async deleteBoardData(data) {
			const button = document.querySelector('.class_detail_rating_user_delete_button.boardID' + data);
                if (!button.classList.contains('delete')) {
                button.classList.add('delete');
                setTimeout(() => {
                    button.classList.remove('delete');
                    this.handleDeleteConfirmation(data);
                }, 1000);
            }
        },
        async handleDeleteConfirmation(data) {
            Swal.fire({
                title: '정말로 삭제하시겠습니까?',
                text: "삭제 후에는 복구할 수 없습니다.",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: '삭제',
                cancelButtonText: '취소'
            }).then((result) => {
                if (result.isConfirmed) {
                    // const url = '/boarddetail/' + data
                    const url = '/boarddetail/' + data
                    const header = {
                        headers: {
                            "Content-Type": 'multipart/form-data',
                            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                        },
                    // this.$store.dispatch('delBoardData', data);
                    };
                
            axios
                .delete(url, header)
                .then((res) => {

                    // console.log(this.newBoardItem);
                    // this.newBoardItem = this.delBoard();
                    // router.push('/board');
                    this.$router.push('/board');
                })
                .catch((err) => {

                    console.error(err);
                    Swal.fire({
							icon: 'error',
							title: '삭제 실패',
							text: '삭제 중에 오류가 발생했습니다.',
						});
                        console.log(err.response);
                    });
                }
            });    

        },

        // 게시판 수정 게시판 페이지
        updateBoardData(data) {
            this.$store.dispatch('updateBoardData', data);
        },
        updatecompleteBoardData() {
            axios.put('/boardCompleteUpdate', {
                BoardID : this.newBoardItem.BoardID,
                UserID: this.newBoardItem.UserID,
                BoardFlg: 1,
            })
            .then(response => {
                // console.log(response.data);
                // 서버 응답에 대한 로직 수행
                this.$router.push('/boarddetail/:BoardID');
                // location.reload();
            })
            .catch(error => {
                // 에러 처리
                console.error(error);
            });
        },
        updateRecommendedBoardData() {
            axios.put('/boardRecommendedUpdate', {
                BoardID : this.newBoardItem.BoardID,
                UserID: this.$store.state.UserID,
            })
            .then(response => {
                // console.log(response.data);
                this.recommendationState = response.data.recommendationState;
                this.likeCount = response.data.likeCount;

                if(this.recommendationState === 'like') {
                    this.likeisClicked = true;
                    this.hateisClicked = false;
                } else if(this.recommendationState === 'hate') {
                    this.likeisClicked = false;
                    this.hateisClicked = true;
                } else {
                    this.likeisClicked = false;
                    this.hateisClicked = false;
                }
                // console.log(this.newBoardItem);
                // 서버 응답에 대한 로직 수행
                // this.$router.push('/board');
                // location.reload();
            })
            .catch(error => {
                // 에러 처리
                console.error(error);
            });
        },
        updateNotRecommendedBoardData() {
            axios.put('/boardNotRecommendedUpdate', {
                BoardID : this.newBoardItem.BoardID,
                UserID: this.$store.state.UserID,
            })
            .then(response => {
                // console.log(response.data);
                this.recommendationState = response.data.recommendationState;
                this.likeCount = response.data.likeCount;

                if(this.recommendationState === 'like') {
                    this.likeisClicked = true;
                    this.hateisClicked = false;
                } else if(this.recommendationState === 'hate') {
                    this.likeisClicked = false;
                    this.hateisClicked = true;
                } else {
                    this.likeisClicked = false;
                    this.hateisClicked = false;
                }
                // 서버 응답에 대한 로직 수행
                // this.$router.push('/board');
                // location.reload();
            })
            .catch(error => {
                // 에러 처리
                console.error(error);
            });
        },

        // 게시글 신고
        boardReport() {
            Swal.fire({
                icon: 'info', // 추가: 아이콘 설정
                title: '게시글 신고 사유',
                input: 'textarea',
                inputLabel: '-',
                inputPlaceholder: '게시글 신고사유를 입력해주세요',
                showCancelButton: true,
                cancelButtonText: '취소',
                confirmButtonText: '신고하기',
                showLoaderOnConfirm: true,
                preConfirm: (ReportContent) => {
                    return new Promise((resolve) => {
                        setTimeout(() => {
                            resolve(ReportContent);
                        }, 3000);

                        const url = '/reportSubmit';
                        const header = {
                            headers: {
                            'Content-Type': 'multipart/form-data',
                            }
                        };
                        const formData = new FormData();
                            formData.append('ReportContent', ReportContent);
                            formData.append('BoardID', this.boardReportData.BoardID);
                            
                        axios.post(url, formData, header)
                        .then(res => {
                            // console.log(res.data);
                            
                        })
                        .catch(err => {

                        })
                    });
                }
            }).then((result) => {
                if(result.isConfirmed) {
                    Swal.fire({
                        icon: 'success', // 추가: 아이콘 설정
                        title: '신고 완료',
                        text: '게시글이 신고되었습니다.',
                        confirmButtonText: '확인'
                    })
                } else if(result.isDismissed) {

                };
            })
        },
        commentReport(data) {
            console.log(data);
            const CommentID = data;
            Swal.fire({
                icon: 'info', // 추가: 아이콘 설정
                title: '댓글 신고 사유',
                input: 'textarea',
                inputLabel: '-',
                inputPlaceholder: '댓글 신고사유를 입력해주세요',
                showCancelButton: true,
                cancelButtonText: '취소',
                confirmButtonText: '신고하기',
                showLoaderOnConfirm: true,
                
                preConfirm: (ReportContent) => {
                    return new Promise((resolve) => {
                        setTimeout(() => {
                            resolve(ReportContent);
                        }, 3000);

                        // const url = '/reportCommentSubmit';
                        const url = '/reportSubmit';
                        const formData = new FormData();
                            formData.append('ReportContent', ReportContent);
                            formData.append('CommentID', CommentID);
                            // formData.append('BoardID', this.commentReportData.BoardID);

                            // console.log(formData);

                        axios.post(url, formData)
                        .then(res => {
                            // console.log(res.data);
                        })
                        .catch(err => {

                        })
                    });
                }
            }).then((result) => {
                if(result.isConfirmed) {
                    Swal.fire({
                        icon: 'success', // 추가: 아이콘 설정
                        title: '신고 완료',
                        text: '댓글이 신고되었습니다.',
                        confirmButtonText: '확인'
                    })
                } else if(result.isDismissed) {

                };
            })
        },
        liketoggleClick() {
            this.likeisClicked = !this.likeisClicked;
        },
        hatetoggleClick() {
            this.hateisClicked = !this.hateisClicked;
        },
    }
};
</script>
<style scoped>

.whr a {
    width: 100%;
    margin: 20px auto 10px auto;
    font-size: 14px;
    color: #999;
}
.whr a:hover {
    color: rgb(59, 59, 252);
}
</style>