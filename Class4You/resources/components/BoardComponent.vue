<template>
	<div class="wrapper">
		<div id="wrap">
			<div style="padding: 0 10vw;" class="whr"><span>게시판</span><span>&gt;</span><span>자유게시판</span></div>
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
				<div class="board_container_main">
					<div class="board_contents">
						<div class="main_mrap">
							<section class="community_body">
							<div class="community_left_side">
								<nav class="community_body_navigation">
								<ul class="community_aside">
									<li class="community_aside_group">
									<h6>함께 공부해요</h6>
									<ul class="community_aside_menu_list">
										<li class="community_aside_menu">
											<a @click="fetchData(1, searchQuery, solve = null, sortData, boardCategory = 1, loading = true)" :class="{ 'community_aside_menu_on': boardCategory == 1}">
												자유게시판
											</a>
										</li>
										<li class="community_aside_menu">
										<a @click="fetchData(1, searchQuery, solve = null, sortData = 1, boardCategory = 2, loading = true)" :class="{ 'community_aside_menu_on': boardCategory == 2}">질문게시판</a>
											<!-- <ul class="community_dropdown">
												<li><a @click="fetchData(1, searchQuery, solve = null, sortData, boardCategory = 2, boardLanguage = 'HTML')">HTML</a></li>
												<li><a @click="fetchData(1, searchQuery, solve = null, sortData, boardCategory = 2, boardLanguage = 'CSS')">CSS</a></li>
												<li><a @click="fetchData(1, searchQuery, solve = null, sortData, boardCategory = 2, boardLanguage = 'JavaScript')">Java Script</a></li>
												<li><a @click="fetchData(1, searchQuery, solve = null, sortData, boardCategory = 2, boardLanguage = 'PHP')">PHP</a></li>
												<li><a @click="fetchData(1, searchQuery, solve = null, sortData, boardCategory = 2, boardLanguage = 'JAVA')">JAVA</a></li>
												<li><a @click="fetchData(1, searchQuery, solve = null, sortData, boardCategory = 2, boardLanguage = 'DataBase')">DataBase</a></li>
											</ul>  -->
										</li>
									</ul>
									</li>
								</ul>
								</nav>
							</div>

							<div class="community_body_content">
								<div class="search_filter">
								<ul class="search_filter_status">
									<li class="e_status_active">
									<button type="button" @click="fetchData(1, searchQuery, solve = null, sortData, boardCategory, loading = true)" class="e_status_active_tap_button" :class="{ 'e_status_active_tap_button_border_bottom': solve == null}">
										전체
									</button>
									</li>
									<li class="e_status_active">
									<button type="button" @click="fetchData(1, searchQuery, solve = 0, sortData, boardCategory, loading = true)" class="e_status_active_tap_button" :class="{ 'e_status_active_tap_button_border_bottom': solve == 0}">
										미해결
									</button>
									</li>
									<li class="e_status_active">
									<button type="button" @click="fetchData(1, searchQuery, solve = 1, sortData, boardCategory, loading = true)" class="e_status_active_tap_button" :class="{ 'e_status_active_tap_button_border_bottom': solve == 1}">
										해결
									</button>
									</li>
								</ul>
								<div class="e_search">

									<fieldset v-if="boardCategory == 2" class="board_checkbox-group">
										<div class="board_checkbox" v-for="(item, index) in checkboxes" :key="index">
										<label class="board_checkbox-wrapper" @click="loading = true">
											<input type="checkbox" class="board_checkbox-input" v-model="checkboxes[index].checked" :value="item.label" />
											<span class="board_checkbox-tile">
											<span class="board_checkbox-label">{{ item.label }}</span>
											</span>
										</label>
										</div>
									</fieldset>

									<div class="search_item">
									<div class="ac_input_with_item">
										<input type="text" v-model="searchQuery">
									</div>
									<button type="button" @click="fetchData(1, searchQuery, solve, sortData, boardCategory, loading = true)" class="search_item_button">
										검색
									</button>
									</div>
									


								</div>
								</div>
								<div class="question_list_container">
								<div class="posts_container_header">
									<select>
									<option value="">자유게시판</option>
									<option value="">질문게시판</option>
									</select>
									<select style="margin-left: 10px;">
									<option value="">최신순</option>
									<option value="">답변많은순</option>
									<option value="">추천순순</option>
									</select>
									<ul class="order_pc">
									<li class="e_order active">
										<button type="button" @click="fetchData(1, searchQuery, solve, sortData = 1, boardCategory, loading = true)" class="order_pc_button" :class="{ 'order_pc_button_on': sortData == 1}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="violet" class="bi bi-dot svg_opacity_off" :class="{ 'svg_opacity_on': sortData == 1}" viewBox="0 0 16 16"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/></svg>최신순</button>
									</li>
									<li class="e_order active">
										<button type="button" @click="fetchData(1, searchQuery, solve, sortData = 2, boardCategory, loading = true)" class="order_pc_button" :class="{ 'order_pc_button_on': sortData == 2}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="violet" class="bi bi-dot svg_opacity_off" :class="{ 'svg_opacity_on': sortData == 2}" viewBox="0 0 16 16"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/></svg>답변많은순</button>
									</li>
									<li class="e_order active">
										<button type="button" @click="fetchData(1, searchQuery, solve, sortData = 3, boardCategory, loading = true)" class="order_pc_button" :class="{ 'order_pc_button_on': sortData == 3}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="violet" class="bi bi-dot svg_opacity_off" :class="{ 'svg_opacity_on': sortData == 3}" viewBox="0 0 16 16"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/></svg>추천순</button>
									</li>
									<li class="e_order active">
										<button type="button" @click="fetchData(1, searchQuery, solve, sortData = 4, boardCategory, loading = true)" class="order_pc_button" :class="{ 'order_pc_button_on': sortData == 4}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="violet" class="bi bi-dot svg_opacity_off" :class="{ 'svg_opacity_on': sortData == 4}" viewBox="0 0 16 16"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/></svg>조회순</button>
									</li>
									</ul>
									<div class="posts_container_header_button_cover"></div>
									<router-link v-if="$store.state.UserID" class="ac_button" to="/boardinsert">글쓰기</router-link>
								</div>
								<ul class="question_list">
									<li class="question_container">
									<LoadingBar v-if="loading" style="background-color: transparent; min-height: 43vh;"></LoadingBar>
									<a v-else v-for="item in newBoardItems" :href="'/boardDetail/' + item.BoardID" @click="increaseViews(item.BoardID)"> 
										<div  class="question">
										<div class="question_info">
											<div class="question_title">
											<div class="title_sub_text">
												<div class="question_status_tag">
												<span :class="{'question_status_tag_badge': true, 'question_tag_unresolved': item.BoardFlg === '0', 'question_tag_resolved': item.BoardFlg === '1'}">{{ item.BoardFlg === '0' ? '미해결' : '해결' }}</span>
												</div>
											</div>
											<h3 class="title_text">
												{{ item.BoardTitle }}
											</h3>
											</div>
											<p class="question_content_body">
												{{ item.BoardComment }}
											</p>
											<div v-if="boardCategory == 2" class="question_tags">
												<div class="question_tags_button">#</div>
												<div class="question_tags_button_on" v-if="item.HTMLFlg == 1">HTML</div>
        										<div class="question_tags_button_on" v-if="item.CSSFlg == 1">CSS</div>
        										<div class="question_tags_button_on" v-if="item.JavaScriptFlg == 1">JavaScript</div>
        										<div class="question_tags_button_on" v-if="item.PHPFlg == 1">PHP</div>
        										<div class="question_tags_button_on" v-if="item.JAVAFlg == 1">JAVA</div>
        										<div class="question_tags_button_on" v-if="item.DataBaseFlg == 1">DataBase</div>
											</div>
											<div class="question_info_footer">
											<div class="question_info_detail">
												<span class="question_info_user_name">작성자 : {{ hideEmail(item.UserEmail) }}</span>
												<span style="margin: 0px 10px 0px 10px;"> / </span>
												<span class="question_info_user_name">작성시간 : {{ item.created_at }}</span>
											</div>
											<div class="question_info_user_data">
												<dl>
												<dt class="visually_hidden">투표점수</dt>
												<dd class="comment_count">
													<i>추천수 : {{ item.likeratingcnt === null ? 0 : item.likeratingcnt }}</i>
												</dd>
												<dt class="visually_hidden">투표점수</dt>
												<dd class="comment_count">
													<i>비추천 : {{ item.hateratingcnt === null ? 0 : item.likeratingcnt }}</i>
												</dd>
												<dt class="visually_hidden">조회수</dt>
												<dd class="comment_count">
													<i>조회수 : {{ item.BoardView }}</i>
												</dd>
												<dt class="visually_hidden">답변</dt>
												<dd class="comment_count">
													<i>답변수 : {{ item.cnt === null ? 0 : item.cnt}}</i>
													<span></span>
												</dd>
												</dl>
											</div>
											</div>
										</div>
										</div>
									</a>
									</li>
								</ul>
								</div>



								<div class="question_list_pageing_empty">


								<div class="qustuon_list_pageing">
									<div v-for="(page, index) in pagination" :key="index">
										<template v-if="page.url !== null">
											<a class="qustuon_list_page_a" :class="{'page_on': page.label == pageChk}" @click.prevent="fetchData(page.label, searchQuery, solve, sortData, boardCategory,loading = true)" href="#">{{ replaceString(page.label) }}</a>
										</template>
										<template v-else>
											<span>{{ replaceString(page.label) }}</span>
										</template>
									</div>
								</div>
							</div>
							</div>
							<div class="community_right_side">
								<div class="ranking_container">
								<p class="weeklyranking">주간 답변 랭킹  <svg style="opacity: 0.5;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-trophy" viewBox="0 0 16 16">
									<path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"/>
								</svg></p>
								<ul class="ranking_weekly_popular_writes_list">
									<li class="ranking_weekly_popular_write">
										<div>
											<ol v-for="(item, index) in newUserCntItems" :key="item.id" class="ranking_weekly_popular_write_list">
												<li class="ranking_weekly_popular_write_writer">{{ index + 1 }}. {{ hideEmail(item.UserEmail) }}</li>
												<li class="ranking_weekly_popular_write_writer">답변 수 : {{ item.cnt }}</li>
											</ol>
										</div>
									</li>
								</ul>
							</div>
						</div>
							</section>
						</div>
				</div>
		</div>
	</div>
</div>
</template>
<script>
// import Pagination from 'vue3-pagination';
import LoadingBar from './LoadingComponent';
export default {
	name: 'BoardComponent',

	computed: {
	},

	components: {
		LoadingBar,
	},

	data() {
		return {
			newBoardItems: [],
			newUserCntItems: [],
			searchQuery: '',
			solve: null,
			sortData: 1,
			current_page: 1,
			pagination: {},
			page: {},
			pageChk: {},
			boardCategory: 1,

			checkboxes: [
				{ label: 'HTML', checked: false },
				{ label: 'CSS', checked: false },
				{ label: 'JavaScript', checked: false },
				{ label: 'PHP', checked: false },
				{ label: 'JAVA', checked: false },
				{ label: 'DataBase', checked: false },
			],

			loading: true,
			loadingChk: false,
		}
	},
	
	mounted() {
        this.fetchData();
    },
	methods: {
			// 해당 함수가 실행 될때 파라미터를 보냄, 엑시오스 처리할 때 파라미터를 포함해서 라우터로 보냄
		fetchData(page = 1) {

		const selectedLanguages = this.checkboxes
		.filter(item => item.checked)
		.map(item => item.label)
		.join(',')
		
        axios.get(`/board/data?page=${page}&search=${this.searchQuery}&solve=${this.solve}&sort=${this.sortData}&boardCategory=${this.boardCategory}&boardLanguage=${selectedLanguages}`)
            .then(response => {
			
                this.newBoardItems = response.data.boardData.data;
                this.newUserCntItems = response.data.userCntData;
                this.pagination = response.data.boardData.links;
                this.page = response.data.boardData.current_page;
                this.pageChk = response.data.boardData.current_page;
				// console.log(response.data);

				// console.log(response.data.boardData.data);
				// console.log(response.data.boardData.links);
				// console.log(response.data.boardData.current_page);
				// console.log(response.data.userCntData);

				const checkLoad = () => {
					if(response.data) {
						this.loading = false;
					} else {
						setTimeout(checkLoad, 10);
					}
				}

				checkLoad();
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    	},
		hideEmail(email) {
			// 백앤드에서 이메일 형식으로 온 값을 도메인 부분은 제거하고 뒤에 4자리는 * 표시함
			if (email && typeof email === 'string') {
				const atIndex = email.indexOf('@');
				const username = email.substring(0, Math.min(4, atIndex));
				const asterisks = '*'.repeat(atIndex - 4);
				return username + asterisks;
			} else {
				return ''; // 예외 경우에 처리할 값을 적어주면됨
			}
		},
		// boardSearch() {
		// 	axios.get('/search', {
		// 		params: {
		// 		search_item: this.search_item
		// 		}
		// 	})
		// 		.then(response => {
		// 	// 서버 응답에 대한 로직 수행
		// 	console.log(response.data);
		// })
		// .catch(error => {
		// 	// 에러 처리
		// 	console.error(error);
		// });

		// }
		// 컨트롤러에서 페이징 처리해서 보낼 때 이전버튼과 다음 버튼이 HTML의 엔티티 코드로 넘어오기 때문에 해당 코드를 변환해주기 위한 함수
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
		increaseViews(boardID) {
			axios.put('/boardViewsUpdate', {
                BoardID : boardID,
                UserID: this.$store.state.UserID,
            })
            .then(response => {
                // console.log(response.data);
                // 서버 응답에 대한 로직 수행
                // this.$router.push('/board');
            })
            .catch(error => {
                // 에러 처리
                console.error(error);
            });
		},
	},
	watch: {
		checkboxes: {
			deep: true,
			handler() {
				this.fetchData();
				// this.sendRequest();
			},
		},
	},
}

</script>
<style>
	
</style>