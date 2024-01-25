<template>
    <div class="wrapper">
        <div class="container" :class="{ 'container-registration-none': regiflg1 }">
            <main class="contents">
                <div class="regist_mrap">
                    <div class="regist_title_box">
                        <div class="regist_title">
                            <h3>이용약관</h3>
                            <span><strong>1. 이용약관 동의</strong></span>
                            <span class="ml_10">></span>
                            <span class="ml_10">2. 계정정보 입력</span>
                        </div>

                        <div class="regist_content_box">
                            <div class="regist_content_box_title">
                                <h3>전체동의</h3>
                            </div>
                            <div class="regist_content_box_check_box">
                                <input type="checkbox" name="selectAll" v-model="selectAll" @change="handleSelectAll">
                                <label for="" style="line-height: 15px;">이용약관 및 개인정보수집 및 이용에 모두 동의합니다.</label>
                            </div>

                            <div class="regist_content_box_lr">
                                <div class="regist_content_box_l">
                                    <div class="regist_content_box_l_checkbox">
                                        <input type="checkbox" name="UserTermsofUse" v-model="frmUserData.UserTermsofUse" @change="handleSelectSingle">
                                        <label for="" style="line-height: 15px;">이용약관 동의 (필수)</label>
                                        <label for="" style="line-height: 15px; color: red; margin-left: 10px;">{{ errors.UserTermsofUse }}</label>
                                    </div>
                                    <div class="regist_content_box_l_terms">
                                        <h3><strong>Class 4 You 이용약관</strong></h3>
                                        <br>
                                        <p>
                                            "제 1장 총칙"
                                        </p>
                                        <br>
                                        <p>
                                            <strong>제1조(목적)</strong>
                                            <br>
                                            1. 이 이용약관은 Class 4 You(이하 '회사'라 함)에서 제공하는 온라인 클래스 서비스(이하 '서비스'라 함)를 이용함에 있어 회사와 이용자 간의 권리, 의무 및 책임사항을 규정함을 목적으로 합니다.
                                            <br>
                                            2. 회사는 본 약관의 내용을 이용자에게 미리 고지하고, 변경이 있는 경우 변경된 약관을 최소 7일 이전에 홈페이지를 통해 공지합니다.
                                        </p>
                                        <br>
                                        <p>
                                            <strong>제2조(약관의 효력과 변경)</strong>
                                            <br>
                                            1. 이 약관은 회사의 홈페이지에 게시함으로써 효력을 발생합니다.
                                            <br>
                                            2. 회사는 필요한 경우 관련 법령을 준수하며 본 약관을 변경할 수 있습니다. 변경된 약관은 홈페이지에 게시함으로써 효력을 발생합니다.
                                        </p>
                                        <br>
                                        <p>
                                            <strong>제3조(서비스의 종류)</strong>
                                            <br>
                                            회사는 다음과 같은 서비스를 제공합니다.
                                            <br>
                                            1. 온라인 수업 예약 및 수강 서비스
                                            <br>
                                            2. 커뮤니티 및 토론 참여 서비스
                                        </p>
                                        <br>
                                        <p>
                                            <strong>제4조(이용자의 의무)</strong>
                                            <br>
                                            1. 이용자는 본 약관 및 관련 법령을 준수하여 서비스를 이용해야 합니다.
                                            <br>
                                            2. 이용자는 회사의 시스템을 이용하여 얻은 정보를 무단으로 복제, 변경, 배포할 수 없습니다.
                                        </p>
                                        <br>
                                        <p>
                                            <strong>제5조(서비스 이용료 및 결제)</strong>
                                            <br>
                                            1. 서비스 이용에 대한 이용료는 회사의 공지나 고지에 따라 정해집니다.
                                            <br>
                                            2. 이용자는 서비스 이용료를 회사가 지정한 방법으로 지불해야 합니다.
                                        </p>
                                        <br>
                                        <p>
                                            <strong>제6조(개인정보의 보호)</strong>
                                            <br>
                                            1. 회사는 이용자의 개인정보를 보호하기 위해 최선을 다하며, 개인정보 처리에 관한 사항은 개인정보 처리방침에서 정합니다.
                                        </p>
                                        <br>
                                        <p>
                                            <strong>제7조(서비스 이용의 제한과 중지)</strong>
                                            <br>
                                            1. 회사는 이용자가 본 약관의 의무를 위반하는 경우, 서비스 이용을 제한하거나 중지할 수 있습니다.
                                            <br>
                                            2. 서비스 이용이 제한되거나 중지된 경우, 이용자는 그 사유를 확인하고 이의를 제기할 수 있습니다.
                                        </p>
                                        <br>
                                        <p>
                                            <strong>제8조(면책조항)</strong>
                                            <br>
                                            1. 회사는 천재지변, 정전, 서비스 설비의 장애 또는 기타 불가항력적인 사유로 인해 서비스를 제공할 수 없는 경우, 이로 인한 손해에 대해 책임을 지지 않습니다.
                                        </p>
                                        
                                    </div>
                                </div>

                                <div class="regist_content_box_r">
                                    <div class="regist_content_box_r_checkbox">
                                        <input type="checkbox" name="UserUserPrivacy" v-model="frmUserData.UserPrivacy" @change="handleSelectSingle">
                                        <label for="" style="line-height: 15px;">개인정보처리방침 동의 (필수)</label>
                                        <label for="" style="line-height: 15px; color: red; margin-left: 10px;">{{ errors.UserPrivacy }}</label>
                                    </div>
                                    <div class="regist_content_box_r_terms">
                                        <h3><strong>Class 4 You 개인정보처리방침</strong></h3>
                                        <br>
                                        <p>
                                        "제 1장 개인정보의 처리 목적"
                                        </p>
                                        <br>
                                        <p>
                                        <strong>제1조(개인정보의 수집 및 이용 목적)</strong>
                                        <br>
                                        1. 회사는 이용자의 개인정보를 다음과 같은 목적으로 수집 및 이용합니다.
                                        <br>
                                        1) 서비스 제공에 관한 계약 이행
                                        <br>
                                        2) 이용자 식별 및 본인 확인
                                        <br>
                                        3) 회원 관리
                                        </p>
                                        <br>
                                        <p>
                                        <strong>제2조(수집하는 개인정보의 항목)</strong>
                                        <br>
                                        1. 회사는 다음과 같은 개인정보를 수집할 수 있습니다.
                                        <br>
                                        1) 필수 항목: 이메일 주소, 이름, 연락처
                                        <br>
                                        2) 선택 항목: 주소, 성별, 생년월일 등
                                        </p>
                                        <br>
                                        <p>
                                        <strong>제3조(개인정보의 보유 및 이용 기간)</strong>
                                        <br>
                                        1. 회사는 이용자의 개인정보를 수집 및 이용 목적이 달성된 후에는 지체 없이 파기합니다.
                                        </p>
                                        <br>
                                        <p>
                                        <strong>제4조(개인정보의 처리 및 보유 기간)</strong>
                                        <br>
                                        1. 회사는 이용자의 개인정보를 수집한 목적이 달성되면 지체 없이 파기합니다. 다만, 관련 법령에 따라 일정 기간 동안 보존할 필요가 있는 경우에는 해당 기간 동안 보관하며, 그 외의 경우에는 지체 없이 파기합니다.
                                        <br>
                                        2. 이용자가 회원탈퇴를 요청한 경우에도, 회사는 해당 회원의 개인정보를 처리 및 보유할 의무가 없습니다.
                                        </p>
                                        <br>
                                        <p>
                                        <strong>제5조(개인정보의 안전성 확보 조치)</strong>
                                        <br>
                                        1. 회사는 개인정보보호법 제29조에 따라 다음과 같이 안전성 확보에 필요한 기술적, 관리적, 물리적 조치를 하고 있습니다.
                                        <br>
                                        1) 개인정보 암호화: 이용자의 개인정보는 암호화되어 저장 및 관리됩니다.
                                        <br>
                                        2) 접근 제한: 개인정보를 처리하는 데이터베이스시스템에 대한 접근 권한을 최소한으로 제한하고 있습니다.
                                        </p>
                                        <br>
                                        <p>
                                        <strong>제6조(개인정보의 파기 절차)</strong>
                                        <br>
                                        1. 회사는 개인정보 보유기간의 경과, 처리목적 달성 등 개인정보가 불필요하게 되었을 때에는 지체 없이 해당 정보를 파기합니다.
                                        <br>
                                        2. 파기 절차는 다음과 같습니다.
                                        <br>
                                        1) 파기 대상: 이용자가 회원탈퇴를 요청한 경우, 수집한 개인정보
                                        <br>
                                        2) 파기 방법: 전자적 파일 형태의 정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 파기하며, 종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각하여 파기합니다.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="regist_button">
                                <button class="regist_button_cancel">CANCEL</button>
                                <button class="regist_button_next" type="button" @click="moveToNext">NEXT</button>
                            </div>


                        </div>
                    </div>
                </div>
            </main>
        </div>


        <div class="container" :class="{ 'container-registration-none': regiflg2 }">
            <main class="contents">
                <div class="regist_mrap">
                    <div class="regist_title_box">
                        <div class="regist_title">
                            <h3>정보입력</h3>
                            <span>1. 이용약관 동의</span>
                            <span class="ml_10">></span>
                            <span class="ml_10"><strong>2. 계정정보 입력</strong></span>
                        </div>

                        <table class="regist_table">
                            <colgroup>
                                <col style="width: 20%;">
                                <col style="width: 80%;">
                            </colgroup>
                            <tr>
                                <th><label for="email">email</label><span style="color: red;">*</span></th>
                                <td>
                                    <div style="display: flex;">
                                        <input type="text" id="email" name="UserEmail" v-model="frmUserData.UserEmail" @input="validateUserEmail" placeholder="이메일을 입력해주세요">
                                        <button @click="postEmailDoubleCheck()" class="email_double_check"><span>중복 확인</span></button>
                                    </div>
                                    <div class="error_message" v-if="errors.UserEmail">{{ errors.UserEmail }}</div>
                                    <div class="success_message" v-else-if="!errors.UserEmail && frmUserData.UserEmail && EmailDoubleCheck">유효한 이메일입니다.</div>
                                    <div class="error_message" v-else-if="!EmailDoubleCheck">{{ EmailDoubleerror }}</div>
                                    <div class="error_message" v-else-if="RegistrationErrorMessage.UserEmail">{{ RegistrationErrorMessage.UserEmail }}</div>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="password">password</label><span style="color: red;">*</span></th>
                                <td>
                                    <input type="password" id="password" name="UserPassword" v-model="frmUserData.UserPassword" @input="validateUserPassword" placeholder="영대소문자,숫자,특수문자(!@#)를 포함한 8~16자" minlength="8" maxlength="17">
                                    <div class="error_message" v-if="errors.UserPassword">{{ errors.UserPassword }}</div>
                                    <div class="success_message" v-else-if="!errors.UserPassword && frmUserData.UserPassword">유효한 비밀번호입니다.</div>
                                    <div class="error_message" v-else-if="RegistrationErrorMessage.UserPassword">{{ RegistrationErrorMessage.UserPassword }}</div>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="password_chk">password chk</label><span style="color: red;">*</span></th>
                                <td>
                                    <input type="password" id="password_chk" name="UserPasswordChk" v-model="frmUserData.UserPasswordChk" @input="validateUserPasswordChk" placeholder="영대소문자,숫자,특수문자(!@#)를 포함한 8~17자" minlength="8" maxlength="17">
                                    <div class="error_message" v-if="errors.UserPasswordChk">{{ errors.UserPasswordChk }}</div>
                                    <div class="success_message" v-else-if="!errors.UserPasswordChk && frmUserData.UserPasswordChk">입력한 비밀번호와 일치합니다.</div>
                                    <div class="error_message" v-else-if="RegistrationErrorMessage.UserPasswordChk">{{ RegistrationErrorMessage.UserPasswordChk }}</div>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="name">name</label><span style="color: red;">*</span></th>
                                <td>
                                    <input type="text" id="name" name="UserName" v-model="frmUserData.UserName" @input="validateUserName" placeholder="최소 2글자 이상" minlength="2" maxlength="50">
                                    <div class="error_message" v-if="errors.UserName">{{ errors.UserName }}</div>
                                    <div class="success_message" v-else-if="!errors.UserName && frmUserData.UserName"></div>
                                    <div class="error_message" v-else-if="RegistrationErrorMessage.UserName">{{ RegistrationErrorMessage.UserName }}</div>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="phone_number">phone number</label><span style="color: red;">*</span></th>
                                <td>
                                    <select class="phone_select_box" id="PhoneNumber1" name="PhoneNumber1" v-model="frmUserData.UserPhoneNumber1">
                                        <option value="010">010</option>
                                        <option value="011">011</option>
                                        <option value="016">016</option>
                                        <option value="017">017</option>
                                        <option value="018">018</option>
                                        <option value="019">019</option>
                                    </select>
                                    -
                                    <input class="phone_input_box" type="text" id="PhoneNumber2" name="PhoneNumber2" v-model="frmUserData.UserPhoneNumber2">
                                    -
                                    <input class="phone_input_box" type="text" id="PhoneNumber3" name="PhoneNumber3" v-model="frmUserData.UserPhoneNumber3">
                                    <div class="error_message" v-if="RegistrationErrorMessage.UserPhoneNumber && !frmUserData.UserPhoneNumber1 && !frmUserData.UserPhoneNumber2 && !frmUserData.UserPhoneNumber3">{{ RegistrationErrorMessage.UserPhoneNumber }}</div>
                                    <div class="error_message"></div>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="birth_date">birth date</label><span style="color: red;">*</span></th>
                                <td>
                                    <input type="date" id="birth_date" name="UserBirthDate" v-model="frmUserData.UserBirthDate" @input="validateUserBirthDate">
                                    <div class="error_message" v-if="RegistrationErrorMessage.UserBirthDate && !frmUserData.UserBirthDate">{{ RegistrationErrorMessage.UserBirthDate }}</div>
                                    <div class="error_message" v-if="errors.UserBirthDate && !frmUserData.UserBirthDate">{{ errors.UserBirthDate }}</div>
                                    <div class="success_message" v-if="!errors.UserBirthDate && frmUserData.UserBirthDate"></div>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="sample4_postcode">Address</label><span style="color: red;">*</span></th>
                                <td>
                                    <div class="regist_table_address_box">
                                        <input class="regist_table_address_postcode" type="text" id="sample4_postcode" name="UserAddress1" v-model="frmUserAddressData.UserPostcode" placeholder="우편번호">
                                        <button class="regist_table_address_button" type="button" @click="openDaumPostcode">우편번호 찾기</button>
                                    </div>
                                        <br>
                                    <input type="text" id="sample4_roadAddress" name="UserAddress2" v-model="frmUserAddressData.UserRoadAddress" placeholder="도로명주소">
                                    <input style="margin-top: 10px;" type="text" id="sample4_detailAddress"  name="UserAddress3" v-model="frmUserAddressData.UserDetailedAddress" placeholder="상세주소">
                                </td>
                            </tr>
                        </table>

                        <div class="regist_button">
                            <button class="regist_button_cancel" type="button" @click="regiflg1=false; regiflg2=true;">PREV</button>
                            <button class="regist_button_next" type="button" @click="submitUserData()">SIGN UP</button>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>
</template>
<script>
import Swal from 'sweetalert2';
export default {
    name: 'RegistrationComponent',

    data() {
        return {
            regiflg1: false,
            regiflg2: true,

            selectAll: false,

            frmUserData: {
                UserEmail: '',
                UserPassword: '',
                UserPasswordChk: '',
                UserName: '',
                UserPhoneNumber1: '',
                UserPhoneNumber2: '',
                UserPhoneNumber3: '',
                UserBirthDate: '',
                UserTermsofUse: '',
                UserPrivacy: '',
                UserTermsofUse: '',
                UserPrivacy: '',
            },

            frmUserAddressData: {
                UserPostcode: '',
                UserRoadAddress: '',
                UserDetailedAddress: '',
            },

            sampleData: {
                UserPostcode: '',
                UserRoadAddress: '',
            },

            errors: {},

            RegistrationErrorMessage: {
                UserEmail: '',
                UserPassword: '',
                UserPasswordChk: '',
                UserName: '',
                UserPhoneNumber1: '',
                UserPhoneNumber2: '',
                UserPhoneNumber3: '',
                UserBirthDate: '',
                UserAddress: '',
                UserTermsofUse: '',
                UserPrivacy: '',
            },

            EmailDoubleCheck: false,

            EmailDoubleerror: '',
        }
    },
    methods: {
        handleSelectAll() {
            if (this.selectAll) {
                this.frmUserData.UserTermsofUse = true;
                this.frmUserData.UserPrivacy = true;
            } else {
                // 전체 선택 체크박스를 해제했을 때
                this.frmUserData.UserTermsofUse = false;
                this.frmUserData.UserPrivacy = false;
            }
        },
        handleSelectSingle() {
            if (this.frmUserData.UserTermsofUse && this.frmUserData.UserPrivacy) {
                this.selectAll = true;
            } else {
                this.selectAll = false;
            }
        },
        // submitUserData() {
        //     const formData = {
        //         frmUserData: this.frmUserData,
        //         frmUserAddressData: this.frmUserAddressData
        //     };

        //     this.$store.dispatch('submitUserData', formData)
        //         .then(data => {
        //         // 성공적으로 처리된 경우의 로직
        //         })
        //         .catch(error => {
        //         // 오류 발생 시의 로직
        //         });
        // },
        submitUserData() {
            const url = '/registration';
            const header = {
            headers: {
                "Content-Type": 'multipart/form-data',
                'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
            },
            };

            let frm = new FormData();
            const UserPhoneNumber = this.frmUserData.UserPhoneNumber1 + this.frmUserData.UserPhoneNumber2 + this.frmUserData.UserPhoneNumber3;

            this.frmUserData.UserTermsofUse = this.frmUserData.UserTermsofUse ? 1 : 0;
            this.frmUserData.UserPrivacy = this.frmUserData.UserPrivacy ? 1 : 0;

            frm.append('UserEmail', this.frmUserData.UserEmail);
            frm.append('UserPassword', this.frmUserData.UserPassword);
            frm.append('UserPasswordChk', this.frmUserData.UserPasswordChk);
            frm.append('UserName', this.frmUserData.UserName);
            frm.append('UserPhoneNumber', UserPhoneNumber);
            frm.append('UserBirthDate', this.frmUserData.UserBirthDate);
            frm.append('UserPostcode', this.frmUserAddressData.UserPostcode);
            frm.append('UserRoadAddress', this.frmUserAddressData.UserRoadAddress);
            frm.append('UserDetailedAddress', this.frmUserAddressData.UserDetailedAddress);
            frm.append('UserTermsofUse', this.frmUserData.UserTermsofUse);
            frm.append('UserPrivacy', this.frmUserData.UserPrivacy);
            if(this.EmailDoubleCheck) {
                axios.post(url, frm, header)
                .then(res => {
                    // SweetAlert2로 성공 알림창 띄우기
                    Swal.fire({
                    icon: 'success',
                    title: '회원가입이 완료되었습니다.',
                    confirmButtonText: '확인',
                    }).then(() => {
                    // 페이지 이동
                    this.$router.push('/');
                    });
                })
                .catch(err => {
                    if (err.response.data.errors) {
                    // SweetAlert2로 에러 메시지 띄우기
                    Swal.fire({
                        icon: 'error',
                        title: '에러',
                        text: '회원가입에 실패하였습니다. 다시 시도해주세요.',
                        confirmButtonText: '확인',
                    });
                    // 에러 메시지를 컴포넌트의 상태에 저장
                    this.RegistrationErrorMessage = err.response.data.errors;
                    } else {
                    // 예상치 못한 다른 종류의 에러 처리
                    console.error('Unexpected error:', err);
                    }
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: '이메일 중복 체크를 해주세요.',
                    confirmButtonText: '확인',
                })
            }
            
        },
        validateUserEmail() {
            if (!this.frmUserData.UserEmail.match(/^\S+@\S+\.\S+$/)) {
                this.errors.UserEmail = '이메일 양식이 맞지 않습니다.';
                this.EmailDoubleCheck = null;
            } else {
                this.errors.UserEmail = '';
                this.EmailDoubleCheck = null;
            }
        },
        validateUserPassword() {
            if (!this.frmUserData.UserPassword.match(/^(?=.*[a-zA-Z])(?=.*[!@#]).+$/)) {
                this.errors.UserPassword = '패스워드 양식이 맞지 않습니다.';
            } else {
                this.errors.UserPassword = '';
            }
        },
        validateUserPasswordChk() {
            if (this.frmUserData.UserPasswordChk !== this.frmUserData.UserPassword) {
                this.errors.UserPasswordChk = '입력한 패스워드와 일치하지 않습니다.';
            } else {
                this.errors.UserPasswordChk = '';
            }
        },
        validateUserName() {
            if (!this.frmUserData.UserName.match(/^[a-zA-Z가-힣 ]+$/)) {
                this.errors.UserName = '이름을 다시 한 번 확인해주세요.';
            } else {
                this.errors.UserName = '';
            }
        },
        validateUserBirthDate() {
            if (!this.frmUserData.UserBirthDate.match(/^\d{4}-\d{2}-\d{2}$/)) {
                this.errors.UserBirthDate = '생년월일을 다시 한 번 확인해주세요.';
            } else {
                this.errors.UserBirthDate = '';
            }
        },
        moveToNext() {
            if(!this.frmUserData.UserTermsofUse) {
                this.errors.UserTermsofUse = '이용약관 동의는 필수사항입니다.'
            } else {
                this.errors.UserTermsofUse = ''
            }

            if(!this.frmUserData.UserPrivacy) {
                this.errors.UserPrivacy = '개인정보 동의는 필수사항입니다.'
            } else {
                this.errors.UserPrivacy = ''
            }

            if (this.frmUserData.UserTermsofUse && this.frmUserData.UserPrivacy) {
                // 이동 로직 구현
                this.regiflg1 = true;
                this.regiflg2 = false;
            }
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

            // // 주소 정보를 컴포넌트 데이터에 저장
            // this.sampleData = {
            //     postcode: data.zonecode,
            //     roadAddress: roadAddr,
            // };

            this.frmUserAddressData = {
                UserPostcode: data.zonecode,
                UserRoadAddress: roadAddr,
            }

            // this.frmUserData.UserAddress = `${this.sampleData.postcode} ${this.sampleData.roadAddress}`;
        },
        postEmailDoubleCheck() {
            const url = '/registrationEmailDoubleCheck';

            let frm = new FormData();
            frm.append('UserEmail', this.frmUserData.UserEmail);

            axios.post(url, frm)
            .then(res => {
                // console.log(res.data);
                // SweetAlert2로 성공 알림창 띄우기
                if(res.data.message) {
                    Swal.fire({
                    icon: 'success',
                    title: '사용 가능한 이메일입니다.',
                    confirmButtonText: '확인',
                    }).then(() => {
                        this.EmailDoubleCheck = true;
                    });
                } else if (res.data.message === false) {
                    this.EmailDoubleerror = '이미 존재하는 이메일입니다.'
                    Swal.fire({
                    icon: 'error',
                    title: '이미 존재하는 이메일입니다.',
                    confirmButtonText: '확인',
                    }).then(() => {
                        this.EmailDoubleCheck = false;
                    });
                }
            })
            .catch(err => {
                if (err.response.data.errors) {
                // SweetAlert2로 에러 메시지 띄우기
                Swal.fire({
                    icon: 'error',
                    title: '에러',
                    text: '중복 확인에 실패하였습니다.',
                    confirmButtonText: '확인',
                });
                // 에러 메시지를 컴포넌트의 상태에 저장
                this.RegistrationErrorMessage = err.response.data.errors;
                } else {
                // 예상치 못한 다른 종류의 에러 처리
                console.error('Unexpected error:', err);
                }
            });
        }
    },

    // 카카오톡 주소 찾기 API 스크립트 불러오기
    mounted() {

        const url = '/registrationtest';
        axios.get(url)
        .then(res => {
            // console.log(res.data);
            this.frmUserData.UserEmail = res.data.userEmail;
        })
        .catch(err => {
            console.log(err);
        })


        // 동적으로 스크립트 로드
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
}
</script>
<style>
    input {
        cursor: pointer;
    }

    .date-wrap {
        /* width: 300px; */
        margin: 0 auto;
    }
    
    
    ::-webkit-calendar-picker-indicator {
        /* position: absolute; */
        right: -10px;
        top: 0;
        transform: translateX(-10px);
        padding-left: 300px;    
        /* height: 50px; */
        cursor: pointer;
    }
</style>