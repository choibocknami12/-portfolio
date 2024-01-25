

@extends('classBoard')

@section('classBoardMain')

<div id="wrap">

	<div class="main_visual">
		<div class="main_visual_slider">
			<div class="main_visual_slider_list">
				<div class="main_visual_slider_track">
					<div class="main_visual_slider_track_slick">
						<div class="main_visual_slider_track_slick_item">
							<a href="">
								<img src= "{{ asset($banner[0]['ClassDiffiBanner']) }}" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<hr>

	<div class="class_container_main">
		<main class="class_contents">
			<div class="class_main_mrap">
				
				<div class="class_main_new_text">
					<h3>{{$msg}}</h3>
				</div>
				
				<div class="main_container_new_box">
					<ul class="class_main_container_new">
					@forelse($data as $item)
						{{-- <a href="{{ route('classboarddetail', ['ClassID' => $item->ClassID]) }}"> --}}
							<a href="/classboarddetail/{{ $item->ClassID }}">
						<li class="class_main_container_new_card">
							<div class="class_main_container_new_card_img">
								<img src="{{ asset($item->ClassImg) }}" alt="">
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
									@endif">{{ $language->ClassLanguageName }}</li>
							@empty	
						@endforelse		
							</ul>
						</li>
					</a>
					@empty
					@endforelse

					</ul>
				</div>

				<div>
					{{ $data->links('paging') }}
				</div>
	
			</div>
		</main>
	</div>


</div>

@endsection