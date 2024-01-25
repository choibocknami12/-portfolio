<template>
    <div class="wrapper">
        <div class="class_container_main">
		<main class="class_contents">
			<div class="class_main_mrap">
				<div class="class_main_visual">
					<img src="" alt="">
				</div>

				<hr>

				<div class="class_main_new_text">
					<h3>아직 방향성을 찾지 못한 분들을 위한 1단계</h3>
					<div class="class_main_viewall_text">
						<p>
                            <a v-for="item in classInfo1" :key="item.id" href="{{route('classboardall',['ClassDifficulty' => $item.ClassDifficulty, 'ClassLanguageName' => $item.ClassLanguageName])}}">전체보기</a>
						</p>
					</div>
				</div>

				<div class="main_container_new_box">
					<ul  class="class_main_container_new">
						<a v-for="item in classInfo1" :key="item.id" href="{{ route('classboarddetail', ['ClassID' => $item.ClassID]) }}">
						<li class="class_main_container_new_card">
							<div class="class_main_container_new_card_img">
                                <img :src="'/' + item.ClassImg" />
							</div>
							<div class="class_main_container_new_card_title">
								<h4>{{item.ClassTitle}}</h4>
							</div>
							<div class="class_main_container_new_card_content">
								<p>{{item.ClassDescription}}</p>
							</div>
							<ul class="class_main_container_new_card_tag"> 
								<li v-for="item2 in item.languages" :key="item2.id" >{{item2.ClassLanguageName}}</li>
							</ul>
						</li>
						</a>
					</ul>
				</div>

				
				<div class="class_main_new_text">
					<h3>아직 방향성을 찾지 못한 분들을 위한 1단계</h3>
					<div class="class_main_viewall_text">
						<p>
                            <a v-for="item in classInfo2" :key="item.id" href="{{route('classboardall',['ClassDifficulty' => $item.ClassDifficulty, 'ClassLanguageName' => $item.ClassLanguageName])}}">전체보기</a>
						</p>
					</div>
				</div>
					

				<div class="class_main_container_new_box">
					<ul class="class_main_container_new">
                        <a v-for="item in classInfo2" :key="item.id" href="{{ route('classboarddetail', ['ClassID' => $item.ClassID]) }}">
						<li class="class_main_container_new_card">
							<div class="class_main_container_new_card_img">
                                <img :src="'/' + item.ClassImg" />
							</div>
							<div class="class_main_container_new_card_title">
								<h4>{{item.ClassTitle}}</h4>
							</div>
							<div class="class_main_container_new_card_content">
								<p>{{item.ClassDescription}}</p>
							</div>
							<ul class="class_main_container_new_card_tag"> 
								<li v-for="item2 in item.languages" :key="item2.id" >{{item2.ClassLanguageName}}</li>
							</ul>
						</li>
						</a>

					</ul>
				</div>

				<div class="class_main_new_text">
					<h3>{{ msg2 }}</h3>
					<div class="class_main_viewall_text">
						<p>
							<a v-for="item in classInfo3" :key="item.id" href="{{route('classboardall',['ClassDifficulty' => $item.ClassDifficulty, 'ClassLanguageName' => $item.ClassLanguageName])}}">전체보기</a>
						</p>
					</div>
				</div>

				<div class="class_main_container_new_box">
					<ul class="class_main_container_new">
					<!-- @forelse($classInfo3 as $item)
						@if ($loop->iteration <= 4)

						<a href="{{ route('classboarddetail', ['ClassID' => $item->ClassID]) }}">
						<li class="class_main_container_new_card">
							<div class="class_main_container_new_card_img">
								<img src="/{{$item->ClassImg}}" alt="">
							</div>
							<div class="class_main_container_new_card_title">
								<h4>{{$item->ClassTitle}}</h4>
							</div>
							<div class="class_main_container_new_card_content">
								<p>{{$item->ClassDescription}}</p>
							</div>
							<ul class="class_main_container_new_card_tag"> 
							@forelse($item->languages as $language)
								<li>{{$language->ClassLanguageName}}</li>
							@empty
						@endforelse
							</ul>
						</li>
						</a>

						@endif
					@empty
					@endforelse -->

					</ul>
				</div>

				<div class="class_main_new_text">
					<h3>3단계까지 완강한 당신 이제 현업 기술을 위한 4단계</h3>
					<div class="class_main_viewall_text">
						<p>
							<!-- @foreach ($classInfo4 as $item)
								<a href="{{route('classboardall',['ClassDifficulty' => $item->ClassDifficulty, 'ClassLanguageName' => $item->ClassLanguageName])}}">전체보기</a>
								@break
							@endforeach -->
						</p>
					</div>
				</div>

				<div class="class_main_container_new_box">
					<ul class="class_main_container_new">

					<!-- @forelse($classInfo4 as $item)
						@if ($loop->iteration <= 4)

						<a href="{{ route('classboarddetail', ['ClassID' => $item->ClassID]) }}">
						<li class="class_main_container_new_card">
							<div class="class_main_container_new_card_img">
								<img src="/{{$item->ClassImg}}" alt="">
							</div>
							<div class="class_main_container_new_card_title">
								<h4>{{$item->ClassTitle}}</h4>
							</div>
							<div class="class_main_container_new_card_content">
								<p>{{$item->ClassDescription}}</p>
							</div>
							<ul class="class_main_container_new_card_tag"> 
							@forelse($item->languages as $language)
								<li>{{$language->ClassLanguageName}}</li>
							@empty
						@endforelse
							</ul>
						</li>
						</a>

						@endif
					@empty
					@endforelse -->

					</ul>
				</div>

				<hr>

				<div class="main_new_text">
					<h3>학습 가이드</h3>
					<a href="#">원하는 키워드를 눌러보세요</a>
				</div>

				<div class="main_container_keyword_box">
					<ul class="main_container_keyword">

						<a href="">
							<li class="main_container_keyword_card">
								<div class="main_container_keyword_card_img">
									<!-- <img src="./img/img-2.png" alt=""> -->
								</div>
							</li>
						</a>

					</ul>
				</div>

			</div>
		</main>
	</div>
    </div>
</template>
<script>
export default {
    name: 'ClassBoardMainComponent',

    props: ['ClassLanguageName'],

    data() {
        return {
        classInfo1: [],
        classInfo2: [],
        classInfo3: [],
        classInfo4: [],
        msg2: '',
        };
    },

    created() {
        this.fetchData();
    },
    methods: {
        fetchData() {
            // 언어 값을 사용하여 API에 요청을 보냄
            axios.get(`/classBoardMain/${this.ClassLanguageName}`)
            .then(response => {
                // console.log(response.data)
                // 받아온 데이터를 컴포넌트의 상태에 설정
                this.classInfo1 = response.data.classInfo1;
                this.classInfo2 = response.data.classInfo2;
                this.classInfo3 = response.data.classInfo3;
                this.classInfo4 = response.data.classInfo4;
                this.msg2 = response.data.msg2;
                // 나머지 데이터도 설정
            })
            .catch(error => {
                // console.error('Error fetching data:', error);
            });
        },
    },
}
</script>
<style>
    
</style>