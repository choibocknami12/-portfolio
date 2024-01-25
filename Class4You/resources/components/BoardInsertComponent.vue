<template>
    <div class="wrapper">
        <div style="padding: 0 10vw;" class="whr"><span>게시판</span><span>&gt;</span><span>작성 게시판</span></div>
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
                <button @click="frmBoardData.BoardCategoryID = 1" class="mantine-UnstyledButton-root mantine-Tabs-tab mantine-11amb58" :class="{'mantine-11amb58_on': frmBoardData.BoardCategoryID == 1}" type="button">
                    <span class="mantine-480qv8 mantine-Tabs-tabLabel">자유 게시판</span>
                </button>
                <button @click="frmBoardData.BoardCategoryID = 2" class="mantine-UnstyledButton-root mantine-Tabs-tab mantine-11amb58" :class="{'mantine-11amb58_on': frmBoardData.BoardCategoryID == 2}" type="button">
                    <span class="mantine-480qv8 mantine-Tabs-tabLabel">질문 게시판</span>
                </button>
            </div>

            <div class="mantine-Alert-root mantine-160zkmi" id="mantine-iilfjlpyb" role="alert" aria-labelledby="mantine-iilfjlpyb-title" aria-describedby="mantine-iilfjlpyb-body">
                <div class="mantine-14n9mxy mantine-Alert-wrapper">
                    <div class="mantine-1rnkhfs mantine-Alert-body">
                        <div class="mantine-1wq983h mantine-Alert-title">
                            <span id="mantine-iilfjlpyb-title" class="mantine-17rhxsu mantine-Alert-label">예시를 참고해 작성해주세요. 서로 아이디어를 주고 받아요.</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mantine-InputWrapper-root mantine-Textarea-root mantine-1y7fzyr">
                <div class="mantine-Input-wrapper mantine-Textarea-wrapper mantine-1v7s5f8">
                    <textarea class="mantine-Input-input mantine-Textarea-input mantine-goibal" v-model="frmBoardData.BoardTitle"  id="title" name="title" aria-label="title" placeholder="제목에 핵심 내용을 요약해보세요." aria-invalid="false"></textarea>
                </div>
            </div>

            <div class="css-1utzp2z">
                <div class="editor-container" style="display: flex; flex-direction: column; height: 100%; max-height: 100%; min-height: 480px; border-radius: 8px;">
                    <div class="editor-toolbars ">
                        <div class="editor-toolbar-container sticky ">
                            <div tabindex="0" class="toolbar-group">
                                <!-- 게시물 입력 부분 -->
                                <textarea class="board_insert_textarea" v-model="frmBoardData.BoardComment" placeholder="게시물을 입력하세요..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div v-if="frmBoardData.BoardCategoryID == 2" class="css-140imd4">
                <fieldset class="insert_checkbox-group">
                    <div class="insert_checkbox" v-for="(item, index) in checkboxes" :key="index">
                        <label class="insert_checkbox-wrapper">
                            <input type="checkbox" class="insert_checkbox-input" v-model="checkboxes[index].checked" :value="item.label" />
                            <span class="insert_checkbox-tile">
                            <span class="insert_heckbox-label">{{ item.label }}</span>
                            </span>
                        </label>
                    </div>
                </fieldset>
            </div>

            <div class="css-os36di">
                <a href="/board">
                    <button class="mantine-UnstyledButton-root mantine-Button-root mantine-1uni1zy" type="button" @click="goToBoard">
                        <div class="mantine-1yjkc96 mantine-Button-inner">
                            <span class="mantine-1ryt1ht mantine-Button-label">취소</span>
                        </div>
                    </button>
                </a>
                
                <button @click="submitBoardData()" class="mantine-UnstyledButton-root mantine-Button-root mantine-1276sa2" type="submit" data-button="true">
                <div class="mantine-1yjkc96 mantine-Button-inner">
                    <span class="mantine-1ryt1ht mantine-Button-label">등록</span>
                </div>
                </button>
            </div>
        </div>
    </div>
</template>
<script>
import Swal from 'sweetalert2';
export default {
    name:'BoardInsertComponent',

    mounted() {
        // this.frmUserBoardData.UserID
        // console.log(localStorage.getItem('UserID'));
        // for (let i = 0; i < localStorage.length; i++) {
        //     const key = localStorage.key(i);
        //     const value = localStorage.getItem(key);
        //     console.log(`${key}: ${value}`);
        // }
    },

    data() {
        return {
            frmBoardData: {
                BoardCategoryID: 1,
                UserID: this.$store.state.UserID,
                BoardTitle: '',
                BoardComment: '',
                SelectedLanguages: [],
            },

            checkboxes: [
				{ label: 'HTML', checked: false },
				{ label: 'CSS', checked: false },
				{ label: 'JavaScript', checked: false },
				{ label: 'PHP', checked: false },
				{ label: 'JAVA', checked: false },
				{ label: 'DataBase', checked: false },
			],
        }
    },

    methods: {
        submitBoardData() {
            Swal.fire({
                icon: 'success',
                title: '작성',
                text: '게시글이 작성되었습니다.',
                confirmButtonText: '확인'
            }).then((result) => {
                this.$store.dispatch('submitBoardData', this.frmBoardData);
            })
        },
        goToBoard() {
            this.$router.push('/board');
        },
    },
    watch: {
    checkboxes: {
        handler(newCheckboxes) {
            this.frmBoardData.SelectedLanguages = newCheckboxes
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.label);
        },
            deep: true,
        },
    },
}
</script>
<style>


</style>