<!-- <template>
  <div>
    <div v-if="!completed">
      <h2>{{ questions[currentQuestion].question }}</h2>
      <div v-for="(option, index) in questions[currentQuestion].options" :key="index">
        <input type="radio" :id="'option' + index" :value="index" v-model="selectedOptions[currentQuestion]">
        <label :for="'option' + index">{{ option }}</label>
      </div>
        <button @click="nextQuestion">다음</button>
    </div>
    <div v-else>
      <p>당신의 추천 프로그래밍 언어는 {{ getRecommendedLanguage() }}입니다.</p>
    </div>
  </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
      currentQuestion: 0,
      selectedOptions: [],
      completed: false,
      results: [],
      questions: [
        {
          question: '친구가 쿠키를 만들었다며 나누어준다. 고마움과 동시에 당신은 어떤생각을 하게 되는가?',
          options: ['a. 어떤 비율과 레시피로 만들었길래 이렇게 맛있지?', 'b. 쿠키 모양이 너무 예뻐서 아까워서 못먹겠다', 'c. 베이킹 사업을 같이 하자고 제안해봐야겠어']
        },
        {
          question: '당신은 팀 활동과 개인 활동 중 무엇을 선택할 것인가?',
          options: ['a. 프로젝트는 사람들과 협업하는 묘미지!', 'b. 나는 혼자 하는 게 편해...', 'c. 흠 난 둘 다 상관 없어']
        },
        {
          question: '팀 활동을 할 때 주어진 역할 중 한 가지를 선택한다면?',
          options: ['a. PPT 만들기 (이쁘게 보여야 발표할 때 더 높은 점수를 받을거야!)', 'b. 자료조사 (발표에서 중요한건 근거지!)', 'c. 발표 (다 필요 없고 해당 근거를 상대에게 전달하는게 중요하지!)']
        },
        {
          question: '당신의 ppt 만들기 스타일은?',
          options: ['a. 음... 그냥 PPT켜서 하얀 슬라이드에 글만 적자...', 'b. PPT는 이쁜게 짱이지!! 탬플릿부터 찾아보자!!', 'c. 탬플릿이 뭐야! 디자인은 내가 더 잘해! 내가 다 만들어야지!!']
        },
        {
          question: '카페에서 공부를 할려고 한다! 어떤 카페를 갈까??',
          options: ['a. 소음이라고는 없는 스터디 카페!!', 'b. 조용한건 못참아... 그래도 어느정도 화이트노이즈는 필요해!', 'c. 난 시끄럽고 사람 많은 곳이 더 집중 잘 돼!']
        },
        {
          question: '최신 맥북이 나왔다! 나의 반응은...!?',
          options: ['a. 와... 디자인.. 미친.. 이건 꼭 사야해!', 'b. 뭐..? M2칩을 탑재했다고? 성능 미쳤다...', 'c. 맥북..? 한국인은 윈도우지!']
        },
        {
          question: '신년을 맞아 새로운 다이어리를 살 예정인 당신, 어떤 다이어리를 살 것인가?',
          options: ['a. 일정을 효율적으로 관리 가능한 깔끔한 다이어리!', 'b. 취향 저격 개성있는 예술적인 디자인의 다이어리!', 'c. 디자인 상관없고 그냥 아무 다이어리면 되지']
        },
        {
          question: '내용이 어려운 공부를 할 때 당신의 스타일은?',
          options: ['a. 이해가 될 때까지 넘어가지 않고 공부한다.', 'b. 어차피 이해 못할 것 같으니, 그냥 외워버리고 진도를 나간다.', 'c. 공부..? 그게 뭔대']
        },
        {
          question: '두근두근 드디어 자취를 시작했다. 당신은 어떻게 집을 꾸밀 것인가?',
          options: ['a. 방 사이즈를 재고 크기에 맞는 가구를 찾아본다.', 'b. 이쁜 가구가 최고지 사이즈는 억지로 맞추면 돼!', 'c. 하.. 귀찮아... 그냥 있는대로 살자']
        }
      ]
      };
    },
    methods: {
      nextQuestion() {
      if (this.selectedOptions[this.currentQuestion] !== undefined) {
        // 현재 질문에 대한 선택한 옵션을 결과 배열에 추가
        this.results.push(this.selectedOptions[this.currentQuestion]);
  
        console.log(this.selectedOptions);
        // 다음 질문으로 이동
        if (this.currentQuestion < this.questions.length - 1) {
          this.currentQuestion++;
        } else {
          // 모든 질문이 완료되면 결과를 분석하여 추천 프로그래밍 언어를 설정
          this.completed = true;
          // 선택된 항목을 인자로 전달하여 함수 호출
          this.getRecommendedLanguage();
        }
        // 계산 후 해당 데이터 초기화
        this.selectedOptions[this.currentQuestion] = null;
        }
      },
      getRecommendedLanguage() {
      // 각 유형에 따라 추천되는 프로그래밍 언어를 결정하는 로직을 작성
      const resultCounts = { a: 0, b: 0, c: 0 };
  
      // 결과를 분석하여 각 유형의 개수를 계산
      this.selectedOptions.forEach(optionIndex => {
      const option = ['a', 'b', 'c'][optionIndex];
      resultCounts[option]++;
      });
  
      // 가장 많이 선택된 유형 계산
      const maxType = Object.keys(resultCounts).reduce((a, b) => resultCounts[a] > resultCounts[b] ? a : b);
      // 각 유형에 따라 추천되는 프로그래밍 언어를 반환
      switch (maxType) {
        case 'a':
          return '백앤드 개발자';
        case 'b':
          return '프론트앤드 개발자';
        case 'c':
          return 'UI UX 디자이너';
        default:
          return '추천 프로그래밍 언어';
        }
      }
    }
  };
  </script> -->
<!-- 
  <template>
    <h2 class="fw-bold mb-2" style="color:#4A5157">회원가입</h2>
    <br />
    <div class="form-outline form-white mb-4">
        <input type="text" v-model="email" class="form-control form-control-lg" placeholder="email" />
        <button class="btn btn-primary btn-sm" style=" color :#4A5157 ;border: none; background-color: white;"
            v-on:click="sendEmail">이메일인증</button>
    </div>
    <div class="form-outline form-white mb-4">
        <input type="text" class="form-control form-control-lg" placeholder="인증번호를 입력!" @input="updateEmailCheck" />
        <button class="btn btn-primary btn-sm" style=" color :#4A5157 ;border: none; background-color: white;"
            v-on:click="emailcheck">확인</button>
    </div>
    <button class="btn btn-primary btn-lg" style="color :#4A5157; border: none; background-color: white;"
        v-on:click="join" v-show="isVisible">join</button>
</template>

<script>
    export default {
        name: 'join',
        data() {
            return {
                email: '',
                pwd: '',
                nickname: '',
                phone: '',
                echeck: '',
                isVisible: false
            }
        },
        methods: {
            sendEmail() {
              const URL = '/emailChkSubmit';
              const HEADER = {
                headers: {
                  'Content-Type': 'multipart/form-data',
                }
              };
              const formData = new FormData();
              formData.append('email', this.email);
              axios.post(URL,formData,HEADER)
              .then(res => {

              })
              .catch(err => {

              })
            },

            updateEmailCheck(event) {
                this.echeck = event.target.value;
            },

            emailcheck() {
                const self = this;
                if (self.echeck === self.emailKey) {
                    alert('확인 완료');
                    this.isVisible = true;
                } else {
                    alert('인증번호가 일치하지 않습니다.');
                }
            }
        }
    }
</script> -->
<!-- 
<template>
  <Radar id="my-chart-id" :options="chartOptions" :data="chartData"/>
</template>

<script>
import { Radar } from 'vue-chartjs'
import { Chart as ChartJS, Title, Tooltip, Legend, LineElement, PointElement, LinearScale, RadialLinearScale } from 'chart.js'

ChartJS.register(Title, Tooltip, Legend, LineElement, PointElement, LinearScale, RadialLinearScale)

export default {
  name: 'RadarChart',
  components: { Radar },
  data() {
    return {
      chartData: {
        labels: ['Eating', 'Drinking', 'Sleeping', 'Designing', 'Coding', 'Cycling', 'Running'],
        datasets: [
          {
            label: 'My First dataset',
            backgroundColor: 'rgba(179,181,198,0.2)',
            borderColor: 'rgba(179,181,198,1)',
            pointBackgroundColor: 'rgba(179,181,198,1)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgba(179,181,198,1)',
            data: [65, 59, 90, 81, 56, 55, 40]
          },
          // Add more datasets if needed
        ]
      },
      chartOptions: {
        responsive: true
        // Add more Radar chart options if needed
      }
    }
  }
}
</script> -->

<!-- <template>
  <div>
    <Line :data="LineChartdata" :options="LineChartoptions"/>
  </div>
</template>
<script>
import { Doughnut, Bar, Radar, Line } from 'vue-chartjs';
import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, DoughnutController, ArcElement, LinearScale, CategoryScale, PointElement, RadialLinearScale, LineElement} from 'chart.js';

ChartJS.register(Title, Tooltip, Legend, BarElement, DoughnutController, ArcElement, LinearScale, CategoryScale, RadialLinearScale, PointElement, LineElement);

export default {
  components: {
        Line
    },

    data() {
      return {
        LineChartdata: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [
                    {
                        label: 'Data One',
                        backgroundColor: '#f87979',
                        data: [40, 39, 10, 40, 39, 80, 40]
                    }
                ]
            },
            LineChartoptions: {
                responsive: true,
                maintainAspectRatio: false
            }
      }
    }
}
</script>
<style>
  
</style> -->

<!-- <template>
  <div >

   <svg class="board_detail_like" :class="{ 'click': isClicked }" @mouseover="startTransition" @mouseout="resetTransition" @click="toggleClick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
    <path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z"/>  
  </svg>

  <svg class="board_detail_like" :class="{ 'click': isClicked }" @mouseover="startTransition" @mouseout="resetTransition" @click="toggleClick" xmlns="http://www.w3.org/2000/svg" version="1.0" width="300.000000pt" height="300.000000pt" viewBox="0 0 300.000000 300.000000" preserveAspectRatio="xMidYMid meet">
    <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" stroke="none">
    <path d="M963 2645 c-37 -19 -60 -40 -82 -73 -56 -88 -64 -137 -70 -462 l-6 -295 -225 -5 c-211 -5 -228 -7 -273 -29 -84 -41 -130 -124 -130 -236 0 -57 21 -152 118 -525 64 -250 128 -475 140 -500 27 -52 68 -94 108 -109 38 -15 945 -15 983 -1 32 13 243 161 296 208 57 51 60 81 56 517 -3 348 -5 383 -22 415 -10 19 -143 159 -296 310 -251 249 -281 282 -313 347 -35 71 -64 180 -87 320 -7 41 -21 87 -34 105 -30 45 -89 50 -163 13z"/>
    <path d="M2134 1666 c-67 -29 -64 -1 -64 -623 0 -414 3 -569 12 -588 24 -52 41 -55 373 -55 l307 0 29 29 29 29 0 574 c0 636 3 605 -66 634 -47 20 -574 20 -620 0z"/>
    </g>
  </svg>

  <svg class="board_detail_like" :class="{ 'click': isClicked }" @mouseover="startTransition" @mouseout="resetTransition" @click="toggleClick" xmlns="http://www.w3.org/2000/svg" version="1.0" width="300.000000pt" height="300.000000pt" viewBox="0 0 300.000000 300.000000" preserveAspectRatio="xMidYMid meet">
    <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" stroke="none">
    <path d="M209 2571 l-29 -29 0 -574 c0 -636 -3 -605 66 -634 48 -20 570 -20 618 0 69 29 66 -1 66 623 0 414 -3 569 -12 588 -24 52 -41 55 -373 55 l-307 0 -29 -29z"/>
    <path d="M1471 2589 c-30 -12 -244 -163 -293 -207 -57 -51 -60 -81 -56 -517 3 -348 5 -383 22 -415 10 -19 143 -159 296 -310 251 -249 281 -282 313 -347 35 -71 64 -180 87 -320 16 -100 42 -137 99 -141 65 -5 141 36 180 96 56 88 64 137 70 462 l6 295 225 5 c211 5 228 7 273 29 84 41 130 124 130 236 0 57 -21 152 -118 525 -64 250 -128 475 -140 500 -27 52 -68 94 -108 109 -36 14 -952 14 -986 0z"/>
    </g>
  </svg>
  </div>
</template>

<script>
export default {
  data() {
    return {
      isClicked: false,
      isHovered: false,
    };
  },
  methods: {
    toggleClick() {
      this.isClicked = !this.isClicked;
    },
    startTransition() {
      this.isHovered = true;
    },
    resetTransition() {
      this.isHovered = false;
    },
  },
};
</script>

<style scoped>
.board_detail_like {
  cursor: pointer;
  height: 50px;
  width: 50px;
  fill: #ddd;
  transition: fill 0.5s;
}

.board_detail_like:hover {
  fill: rgba(242, 71, 134, 0.3);
}

.board_detail_like.click {
  fill: rgb(242, 71, 134);
}
</style> -->

<template>
<div class="modal">
  <article class="modal-container">
    <header class="modal-container-header">
      <h1 class="modal-container-title">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true">
          <path fill="none" d="M0 0h24v24H0z" />
          <path fill="currentColor" d="M14 9V4H5v16h6.056c.328.417.724.785 1.18 1.085l1.39.915H3.993A.993.993 0 0 1 3 21.008V2.992C3 2.455 3.449 2 4.002 2h10.995L21 8v1h-7zm-2 2h9v5.949c0 .99-.501 1.916-1.336 2.465L16.5 21.498l-3.164-2.084A2.953 2.953 0 0 1 12 16.95V11zm2 5.949c0 .316.162.614.436.795l2.064 1.36 2.064-1.36a.954.954 0 0 0 .436-.795V13h-5v3.949z" />
        </svg>
        Terms and Services
      </h1>
      <button class="icon-button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path fill="none" d="M0 0h24v24H0z" />
          <path fill="currentColor" d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
        </svg>
      </button>
    </header>
    <section class="modal-container-body rtf">
      <h2>Quarum ambarum rerum cum medicinam pollicetur, luxuriae licentiam pollicetur.</h2>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Unum nescio, quo modo possit, si luxuriosus sit, finitas cupiditates habere. Hoc est non modo cor non habere, sed ne palatum quidem. Sic, et quidem diligentius saepiusque ista loquemur inter nos agemusque communiter. Paulum, cum regem Persem captum adduceret, eodem flumine invectio? Quid igitur dubitamus in tota eius natura quaerere quid sit effectum? Duo Reges: constructio interrete. </p>

      <h3>Ut proverbia non nulla veriora sint quam vestra dogmata.</h3>

      <p>Quasi vero, inquit, perpetua oratio rhetorum solum, non etiam philosophorum sit. Tria genera cupiditatum, naturales et necessariae, naturales et non necessariae, nec naturales nec necessariae. Sin aliud quid voles, postea. Consequatur summas voluptates non modo parvo, sed per me nihilo, si potest; </p>

      <p>Cur igitur easdem res, inquam, Peripateticis dicentibus verbum nullum est, quod non intellegatur? Primum in nostrane potestate est, quid meminerimus? Eam tum adesse, cum dolor omnis absit; Quodsi ipsam honestatem undique pertectam atque absolutam. Aliam vero vim voluptatis esse, aliam nihil dolendi, nisi valde pertinax fueris, concedas necesse est. Nec enim, cum tua causa cui commodes, beneficium illud habendum est, sed faeneratio, nec gratia deberi videtur ei, qui sua causa commodaverit. Universa enim illorum ratione cum tota vestra confligendum puto. Sed residamus, inquit, si placet. Sed vobis voluptatum perceptarum recordatio vitam beatam facit, et quidem corpore perceptarum. Itaque primos congressus copulationesque et consuetudinum instituendarum voluntates fieri propter voluptatem; Ita enim se Athenis collocavit, ut sit paene unus ex Atticis, ut id etiam cognomen videatur habiturus. Atque hoc loco similitudines eas, quibus illi uti solent, dissimillimas proferebas. </p>

      <h2>An hoc usque quaque, aliter in vita?</h2>
      <ol>
        <li>Etenim nec iustitia nec amicitia esse omnino poterunt, nisi ipsae per se expetuntur.</li>
        <li>Pisone in eo gymnasio, quod Ptolomaeum vocatur, unaque nobiscum Q.</li>
        <li>Certe nihil nisi quod possit ipsum propter se iure laudari.</li>
        <li>Itaque e contrario moderati aequabilesque habitus, affectiones ususque corporis apti esse ad naturam videntur.</li>
      </ol>

      <p>Utilitatis causa amicitia est quaesita. Qui autem de summo bono dissentit de tota philosophiae ratione dissentit. Quamquam non negatis nos intellegere quid sit voluptas, sed quid ille dicat. Sed emolumenta communia esse dicuntur, recte autem facta et peccata non habentur communia. Hoc positum in Phaedro a Platone probavit Epicurus sensitque in omni disputatione id fieri oportere. Potius inflammat, ut coercendi magis quam dedocendi esse videantur. Roges enim Aristonem, bonane ei videantur haec: vacuitas doloris, divitiae, valitudo; Totum autem id externum est, et quod externum, id in casu est. Non autem hoc: igitur ne illud quidem. Simul atque natum animal est, gaudet voluptate et eam appetit ut bonum, aspernatur dolorem ut malum. Quamquam tu hanc copiosiorem etiam soles dicere. Quid enim necesse est, tamquam meretricem in matronarum coetum, sic voluptatem in virtutum concilium adducere? Hoc positum in Phaedro a Platone probavit Epicurus sensitque in omni disputatione id fieri oportere. Videsne quam sit magna dissensio? </p>

      <h3>Claudii libidini, qui tum erat summo ne imperio, dederetur.</h3>

      <p>Eorum enim est haec querela, qui sibi cari sunt seseque diligunt. Cum audissem Antiochum, Brute, ut solebam, cum M. An obliviscimur, quantopere in audiendo in legendoque moveamur, cum pie, cum amice, cum magno animo aliquid factum cognoscimus? Qui igitur convenit ab alia voluptate dicere naturam proficisci, in alia summum bonum ponere? Magni enim aestimabat pecuniam non modo non contra leges, sed etiam legibus partam. Haec mirabilia videri intellego, sed cum certe superiora firma ac vera sint, his autem ea consentanea et consequentia, ne de horum quidem est veritate dubitandum. At, illa, ut vobis placet, partem quandam tuetur, reliquam deserit. Sed utrum hortandus es nobis, Luci, inquit, an etiam tua sponte propensus es? Sed est forma eius disciplinae, sicut fere ceterarum, triplex: una pars est naturae, disserendi altera, vivendi tertia. Nemo enim est, qui aliter dixerit quin omnium naturarum simile esset id, ad quod omnia referrentur, quod est ultimum rerum appetendarum. Quid est, quod ab ea absolvi et perfici debeat? Quod cum accidisset ut alter alterum necopinato videremus, surrexit statim. Tantum dico, magis fuisse vestrum agere Epicuri diem natalem, quam illius testamento cavere ut ageretur. Quod iam a me expectare noli. Quod totum contra est. Semper enim ita adsumit aliquid, ut ea, quae prima dederit, non deserat. </p>

      <h2>Sed nimis multa.</h2>

      <p>Nec vero alia sunt quaerenda contra Carneadeam illam sententiam. Negat enim summo bono afferre incrementum diem. Causa autem fuit huc veniendi ut quosdam hinc libros promerem. Deinde prima illa, quae in congressu solemus: Quid tu, inquit, huc? Minime vero probatur huic disciplinae, de qua loquor, aut iustitiam aut amicitiam propter utilitates adscisci aut probari. Nulla profecto est, quin suam vim retineat a primo ad extremum. Sed ad illum redeo. Quem quidem vos, cum improbis poenam proponitis, inpetibilem facitis, cum sapientem semper boni plus habere vultis, tolerabilem. Huic ego, si negaret quicquam interesse ad beate vivendum quali uteretur victu, concederem, laudarem etiam; Non igitur de improbo, sed de callido improbo quaerimus, qualis Q. His singulis copiose responderi solet, sed quae perspicua sunt longa esse non debent. Quae cum ita sint, effectum est nihil esse malum, quod turpe non sit. </p>

    </section>
    <footer class="modal-container-footer">
      <button class="button is-ghost">Decline</button>
      <button class="button is-primary">Accept</button>
    </footer>
  </article>
</div>
</template>
<script>
export default {
  
}
</script>
<style>
  @import url("https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap");
*,
*:before,
*:after {
  box-sizing: border-box;
}

/* Some basic CSS overrides */
body {
  line-height: 1.5;
  min-height: 100vh;
  font-family: "Outfit", sans-serif;
  color: #2d232e;
  background-color: #c8c0bd;
  position: relative;
}

button,
input,
select,
textarea {
  font: inherit;
}

a {
  color: inherit;
}

/* End basic CSS override */
* {
  scrollbar-width: 0;
}

*::-webkit-scrollbar {
  background-color: transparent;
  width: 12px;
}

*::-webkit-scrollbar-thumb {
  border-radius: 99px;
  background-color: #ddd;
  border: 4px solid #fff;
}

.modal {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: rgba(0, 0, 0, 0.25);
}

.modal-container {
  max-height: 90vh;
  max-width: 500px;
  margin-left: auto;
  margin-right: auto;
  background-color: #fff;
  border-radius: 16px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.25);
}
@media (max-width: 600px) {
  .modal-container {
    width: 90%;
  }
}

.modal-container-header {
  padding: 16px 32px;
  border-bottom: 1px solid #ddd;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.modal-container-title {
  display: flex;
  align-items: center;
  gap: 8px;
  line-height: 1;
  font-weight: 700;
  font-size: 1.125;
}
.modal-container-title svg {
  width: 32px;
  height: 32px;
  color: #750550;
}

.modal-container-body {
  padding: 24px 32px 51px;
  overflow-y: auto;
}

.rtf h1,
.rtf h2,
.rtf h3,
.rtf h4,
.rtf h5,
.rtf h6 {
  font-weight: 700;
}
.rtf h1 {
  font-size: 1.5rem;
  line-height: 1.125;
}
.rtf h2 {
  font-size: 1.25rem;
  line-height: 1.25;
}
.rtf h3 {
  font-size: 1rem;
  line-height: 1.5;
}
.rtf > * + * {
  margin-top: 1em;
}
.rtf > * + :is(h1, h2, h3) {
  margin-top: 2em;
}
.rtf > :is(h1, h2, h3) + * {
  margin-top: 0.75em;
}
.rtf ul,
.rtf ol {
  margin-left: 20px;
  list-style-position: inside;
}
.rtf ol {
  list-style: numeric;
}
.rtf ul {
  list-style: disc;
}

.modal-container-footer {
  padding: 20px 32px;
  display: flex;
  align-items: center;
  justify-content: flex-end;
  border-top: 1px solid #ddd;
  gap: 12px;
  position: relative;
}
.modal-container-footer:after {
  content: "";
  display: block;
  position: absolute;
  top: -51px;
  left: 24px;
  right: 24px;
  height: 50px;
  flex-shrink: 0;
  background-image: linear-gradient(to top, rgba(255, 255, 255, 0.75), transparent);
  pointer-events: none;
}

.button {
  padding: 12px 20px;
  border-radius: 8px;
  background-color: transparent;
  border: 0;
  font-weight: 600;
  cursor: pointer;
  transition: 0.15s ease;
}
.button.is-ghost:hover, .button.is-ghost:focus {
  background-color: #dfdad7;
}
.button.is-primary {
  background-color: #750550;
  color: #fff;
}
.button.is-primary:hover, .button.is-primary:focus {
  background-color: #4a0433;
}

.icon-button {
  padding: 0;
  border: 0;
  background-color: transparent;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  line-height: 1;
  cursor: pointer;
  border-radius: 8px;
  transition: 0.15s ease;
}
.icon-button svg {
  width: 24px;
  height: 24px;
}
.icon-button:hover, .icon-button:focus {
  background-color: #dfdad7;
}
</style>