<template>
    <div class="wrapper">
        <div style="padding: 0 10vw;" class="whr"><span>게시판</span><span>&gt;</span><span>수정 게시판</span></div>
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
        <div class="Board_Insert_Box">
        <div class="mantine-Tabs-tabsList mantine-1zsxti" role="tablist" aria-orientation="horizontal">
            <button class="mantine-UnstyledButton-root mantine-Tabs-tab mantine-11amb58" type="button" data-active="true" role="tab" id="mantine-1ig8a3r50-tab-question" aria-selected="true" tabindex="0">
                <span class="mantine-480qv8 mantine-Tabs-tabLabel">수정</span>
            </button>
            <!-- <button class="mantine-UnstyledButton-root mantine-Tabs-tab mantine-11amb58" type="button" role="tab" id="mantine-1ig8a3r50-tab-chat" aria-selected="false" tabindex="-1">
                <span class="mantine-480qv8 mantine-Tabs-tabLabel">고민있어요</span>
            </button>
            <button class="mantine-UnstyledButton-root mantine-Tabs-tab mantine-11amb58" type="button" role="tab" id="mantine-1ig8a3r50-tab-study" aria-selected="false" tabindex="-1">
                <span class="mantine-480qv8 mantine-Tabs-tabLabel">스터디</span>
            </button> -->
        </div>

        <div class="mantine-Alert-root mantine-160zkmi" id="mantine-iilfjlpyb" role="alert" aria-labelledby="mantine-iilfjlpyb-title" aria-describedby="mantine-iilfjlpyb-body">
            <div class="mantine-14n9mxy mantine-Alert-wrapper">
                <div class="mantine-1rnkhfs mantine-Alert-body">
                    <div class="mantine-1wq983h mantine-Alert-title">
                        <span id="mantine-iilfjlpyb-title" class="mantine-17rhxsu mantine-Alert-label">수정 할 게시물을 입력해주세요.</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mantine-InputWrapper-root mantine-Textarea-root mantine-1y7fzyr">
            <div class="mantine-Input-wrapper mantine-Textarea-wrapper mantine-1v7s5f8">
                <textarea class="mantine-Input-input mantine-Textarea-input mantine-goibal" v-model="newBoardItem.BoardTitle"  id="title" name="title" aria-label="title" placeholder="제목에 핵심 내용을 요약해보세요." aria-invalid="false"></textarea>
            </div>
        </div>

        <!-- <div class="css-140imd4">
            <ul class="css-5kov97">
                <input aria-label="tag" placeholder="태그를 설정하세요 (최대 10개)" name="tag" class="css-1ryum8s">
            </ul>
        </div> -->

        <div class="css-1utzp2z">
            <div class="editor-container" style="display: flex; flex-direction: column; height: 100%; max-height: 100%; min-height: 480px; border-radius: 8px;">
                <div class="editor-toolbars ">
                    <div class="editor-toolbar-container sticky ">
                        <div tabindex="0" class="toolbar-group">
                            <!-- 게시물 입력 부분 -->
                            <textarea class="board_insert_textarea" v-model="newBoardItem.BoardComment" placeholder="게시물을 입력하세요..."></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="css-os36di">
            <a :href="'/boardDetail/' + this.BoardID">
                <button class="mantine-UnstyledButton-root mantine-Button-root mantine-1uni1zy" type="button" data-button="true">
                <div class="mantine-1yjkc96 mantine-Button-inner">
                    <span class="mantine-1ryt1ht mantine-Button-label">취소</span>
                </div>
                </button>
            </a>

            <!-- <button @click="updateBoardData(newBoardItem)" class="mantine-UnstyledButton-root mantine-Button-root mantine-1276sa2" type="submit" data-button="true"> -->
            <button @click="updateBoardData(newBoardItem)" class="mantine-UnstyledButton-root mantine-Button-root mantine-1276sa2" type="submit" data-button="true">
                <div class="mantine-1yjkc96 mantine-Button-inner">
                    <span class="mantine-1ryt1ht mantine-Button-label">수정</span>
                    <!-- <span class="mantine-1ryt1ht mantine-Button-label" @click="putBoardDataBtn(newBoardItem)">등록</span> -->
                </div>
            </button>
        </div>

    </div>
    </div>
</template>
<script>
import Swal from 'sweetalert2';
export default {
    name:'BoardUpdateComponent',

    props: ['BoardID'],

    mounted() {
        // this.frmUserBoardData.UserID
        // console.log(localStorage.getItem('UserID'));
        // for (let i = 0; i < localStorage.length; i++) {
        //     const key = localStorage.key(i);
        //     const value = localStorage.getItem(key);
        //     console.log(`${key}: ${value}`);
        // }
        this.fetchData();
    },

    data() {
        return {
            frmBoardData: {},
            newBoardItem: {
            },
            boardData: {
                UserID: this.$store.state.UserID,
                BoardID: this.BoardID,
                BoardComment: '',
                BoardTitle: '',
            },
            
        }
    },

    methods: {
        fetchData() {
            axios.get('/boarddetail/' + this.BoardID)
            .then(response => {
            // console.log(response.data);
            // console.log(this.newBoardItem);
                this.newBoardItem = response.data.boardData;
                this.nowUserID = response.data.userID;
                this.newCommentItem = response.data.commentData;
                // console.log(response.data.commentData);
            })
            .catch(error => {
            console.error('Error fetching data:', error);
            });
        },
        
        // updateBoardData(data) {
        //     this.$store.dispatch('updateBoardData', this.newBoardItem);
        // },

        updateBoardData(data) {
            console.log(data);
            Swal.fire({
                icon: 'success',
                title: '수정',
                text: '게시글이 수정되었습니다.',
                confirmButtonText: '확인'
            }).then((result) => {
                    axios.put('/boardUpdate', {
                    BoardID : this.newBoardItem.BoardID,
                    BoardCategoryID: this.newBoardItem.BoardCategoryID,
                    UserID: this.newBoardItem.UserID,
                    BoardTitle: this.newBoardItem.BoardTitle,
                    BoardComment: this.newBoardItem.BoardComment,
                })
                .then(response => {
                    // console.log(result);
                    // console.log(response);
                    
                    // 서버 응답에 대한 로직 수행
                    // this.$router.push('/board');
                    this.$router.push('/boarddetail/' + this.BoardID);
                    // this.newBoardItem.unshift(response.data[0]);
                })
                .catch(error => {
                    // 에러 처리
                    console.error(error);
                });
            })
            
        },
    }
}
</script>
<style>


</style>