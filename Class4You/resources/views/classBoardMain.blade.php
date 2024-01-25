@extends('classBoard')
<!-- 상속받음 -->
@section('classBoardMain')
<!-- section: 아래의 코드 출력 -->
<div id="wrap">
<div style="padding: 0 10vw;" class="whr"><span>전체강의</span><span>&gt;</span><span>{{$classLanguageName}}</span></div>
	<div class="class_container_main">
		<main class="class_contents">
			<div class="class_main_mrap">
				<div class="main_visual">
					<div class="main_visual_slider">
						<div class="main_visual_slider_list">
							<div class="main_visual_slider_track">
								<div class="main_visual_slider_track_slick">
									<div class="main_visual_slider_track_slick_item">
										<a href="">
											<img src="/img/classBoardBanner.png">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<hr>

				<div class="class_main_new_text">
					<h3>아직 방향성을 찾지 못한 분들을 위한 1단계</h3>
					<div class="class_main_viewall_text">
						<p>
							@foreach ($classInfo1 as $item)
								{{-- <a href="{{route('classBoardViewAll',['ClassDifficulty' => $item->ClassDifficultyID, 'ClassLanguageName' => $item->ClassLanguageName])}}">전체보기</a> --}}
								<a href="/classBoardViewAll/{{ $item->ClassDifficultyID }}/{{$item->ClassLanguageName}}">전체보기</a>
								@break
							@endforeach	
						</p>
					</div>
				</div>

				<div class="main_container_new_box">
					<ul class="class_main_container_new">

					@forelse($classInfo1 as $item)
						@if ($loop->iteration <= 4)
						<!-- iteration: 루프반복의 인덱스, loop: 블레이드에서 제공하는 루프정보를 가지고 있는 객체 -->
						<!-- classInfo1의 배열의 [0]~[3]까지 출력하겠다는 의미  -->
						<a href="/classboarddetail/{{ $item->ClassID }}">
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
								<li class="@if ($language->ClassLanguageName == 'HTML') main_container_new_card_tag_HTML 
											@elseif ($language->ClassLanguageName == 'CSS') main_container_new_card_tag_CSS 
											@elseif ($language->ClassLanguageName == 'JavaScript') main_container_new_card_tag_JAVASCRIPT 
											@elseif ($language->ClassLanguageName == 'PHP') main_container_new_card_tag_PHP 
											@elseif ($language->ClassLanguageName == 'JAVA') main_container_new_card_tag_JAVA 
											@elseif ($language->ClassLanguageName == 'DataBase') main_container_new_card_tag_DATABASE 
											@endif">
									{{$language->ClassLanguageName}}</li>
							@empty
						@endforelse
							</ul>
							
						</li>
						</a>

						@endif
					@empty
					@endforelse

					</ul>
				</div>

				
				<div class="class_main_new_text">
				@foreach ($classInfo2 as $item)
					<h3>{{$msg2}}</h3>
				<div class="class_main_viewall_text">
						<p>
							{{-- <a href="{{route('classboardall',['ClassDifficulty' => $item->ClassDifficultyID, 'ClassLanguageName' => $item->ClassLanguageName])}}">전체보기</a>	 --}}
							<a href="/classBoardViewAll/{{ $item->ClassDifficultyID }}/{{$item->ClassLanguageName}}">전체보기</a>
						</p>
				</div>
					@break
				@endforeach
				</div>
					

				<div class="class_main_container_new_box">
					<ul class="class_main_container_new">

					@forelse($classInfo2 as $item)
						@if ($loop->iteration <= 4)

						<a href="/classboarddetail/{{ $item->ClassID }}">
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
								<li class="@if ($language->ClassLanguageName == 'HTML') main_container_new_card_tag_HTML 
									@elseif ($language->ClassLanguageName == 'CSS') main_container_new_card_tag_CSS 
									@elseif ($language->ClassLanguageName == 'JavaScript') main_container_new_card_tag_JAVASCRIPT 
									@elseif ($language->ClassLanguageName == 'PHP') main_container_new_card_tag_PHP 
									@elseif ($language->ClassLanguageName == 'JAVA') main_container_new_card_tag_JAVA 
									@elseif ($language->ClassLanguageName == 'DataBase') main_container_new_card_tag_DATABASE 
									@endif">{{$language->ClassLanguageName}}</li>
								@empty
							@endforelse
							</ul>
						</li>
						</a>

						@endif
					@empty
					@endforelse

					</ul>
				</div>

				<div class="class_main_new_text">
					<h3>1단계와 2단계를 완강한 당신을 위한 3단계</h3>
					<div class="class_main_viewall_text">
						<p>
							@foreach ($classInfo3 as $item)
								{{-- <a href="{{route('classboardall',['ClassDifficulty' => $item->ClassDifficultyID, 'ClassLanguageName' => $item->ClassLanguageName])}}">전체보기</a> --}}
								<a href="/classBoardViewAll/{{ $item->ClassDifficultyID }}/{{$item->ClassLanguageName}}">전체보기</a>
								@break
							@endforeach
						</p>
					</div>
				</div>

				<div class="class_main_container_new_box">
					<ul class="class_main_container_new">

					@forelse($classInfo3 as $item)
						@if ($loop->iteration <= 4)

						<a href="/classboarddetail/{{ $item->ClassID }}">
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
								<li class="@if ($language->ClassLanguageName == 'HTML') main_container_new_card_tag_HTML 
									@elseif ($language->ClassLanguageName == 'CSS') main_container_new_card_tag_CSS 
									@elseif ($language->ClassLanguageName == 'JavaScript') main_container_new_card_tag_JAVASCRIPT 
									@elseif ($language->ClassLanguageName == 'PHP') main_container_new_card_tag_PHP 
									@elseif ($language->ClassLanguageName == 'JAVA') main_container_new_card_tag_JAVA 
									@elseif ($language->ClassLanguageName == 'DataBase') main_container_new_card_tag_DATABASE 
									@endif">{{$language->ClassLanguageName}}</li>
							@empty
						@endforelse
							</ul>
						</li>
						</a>

						@endif
					@empty
					@endforelse

					</ul>
				</div>

				<div class="class_main_new_text">
					<h3>3단계까지 완강한 당신 이제 현업 기술을 위한 4단계</h3>
					<div class="class_main_viewall_text">
						<p>
							@foreach ($classInfo4 as $item)
								{{-- <a href="{{route('classboardall',['ClassDifficulty' => $item->ClassDifficultyID, 'ClassLanguageName' => $item->ClassLanguageName])}}">전체보기</a> --}}
								<a href="/classBoardViewAll/{{ $item->ClassDifficultyID }}/{{$item->ClassLanguageName}}">전체보기</a>
								@break
							@endforeach
						</p>
					</div>
				</div>

				<div class="class_main_container_new_box">
					<ul class="class_main_container_new">

					@forelse($classInfo4 as $item)
						@if ($loop->iteration <= 4)

						<a href="/classboarddetail/{{ $item->ClassID }}">
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
								<li class="@if ($language->ClassLanguageName == 'HTML') main_container_new_card_tag_HTML 
									@elseif ($language->ClassLanguageName == 'CSS') main_container_new_card_tag_CSS 
									@elseif ($language->ClassLanguageName == 'JavaScript') main_container_new_card_tag_JAVASCRIPT 
									@elseif ($language->ClassLanguageName == 'PHP') main_container_new_card_tag_PHP 
									@elseif ($language->ClassLanguageName == 'JAVA') main_container_new_card_tag_JAVA 
									@elseif ($language->ClassLanguageName == 'DataBase') main_container_new_card_tag_DATABASE 
									@endif">{{$language->ClassLanguageName}}</li>
							@empty
						@endforelse
							</ul>
						</li>
						</a>

						@endif
					@empty
					@endforelse

					</ul>
				</div>

				<hr>

			</div>
		</main>
	</div>
	
</div>
<script>
</script>
@endsection