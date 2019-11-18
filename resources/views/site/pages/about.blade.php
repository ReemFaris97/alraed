
@extends('site.layouts.app')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/scrolling.css" />
		<link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/pater.css" />
@endsection

@section('content')

<main class="single-section-padding about-us-section">
			<div class="morph-wrap">
				<svg class="morph" width="1400" height="770" viewBox="0 0 1400 770">
					<path d="M 262.9,252.2 C 210.1,338.2 212.6,487.6 288.8,553.9 372.2,626.5 511.2,517.8 620.3,536.3 750.6,558.4 860.3,723 987.3,686.5 1089,657.3 1168,534.7 1173,429.2 1178,313.7 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z"/>
				</svg>
			</div>
			
			<!--@foreach($abouts as $about)-->
			<!--<div class="content-wrap">-->
			<!--	<div class="content content--layout content--layout-1">-->
			<!--		<img class="content__img" src="{{ url('site') }}/img/logo.png" alt="Some image" />-->
			<!--		<h3 class="content__title">@lang('trans.brief_history')</h3>-->
			<!--		<p class="content__desc">-->
			<!--			{{ $about->value }}-->
			<!--		</p>-->
			<!--	</div>-->
			<!--</div>-->
			<!--@endforeach-->
			<div class="content-wrap">
				<div class="content content--layout content--layout-1">
					<img class="content__img" src="{{ url('site') }}/img/ball.jpg" alt="كرة القدم" />
					<h3 class="content__title">كرة القدم</h3>
					<p class="content__desc">
						برز نادي الرائد واشتهر في لعبة كرة القدم، حيث استطاع الصعود لمصاف فرق دوري الدرجة الأولى السعودي، وذلك موسم 1980-1981 مع نادي الروضة في التصفيات التي أقيمت في الرياض، ويهبط بعد موسم ويعود في								 موسم 1983-1984 للصعود مع نادي الأنصار. وفي موسم 1986 حقق الإنجاز الأغلى والأثمن بصعود الفريق الأول لمصاف أندية الدوري السعودي الممتاز كأول أندية منطقة القصيم يحقق هذا الإنجاز، ثم تكرر صعوده إلى الدوري الممتاز في نهاية أعوام 1989، 1992، 1998، 2002، 2007، ويتمتع الرائد بشعبية جماهيرية تعتبر الأولى بالقصيم والخامسة في المملكة العربية السعودية.
					</p>
				</div>
			</div>
			<div class="content-wrap">
				<div class="content content--layout content--layout-1">
					<img class="content__img" src="{{ url('site') }}/img/championship.png" alt="كأس خادم الحرمين الشريفين" />
					<h3 class="content__title">كأس خادم الحرمين الشريفين</h3>
					<p class="content__desc">
						برز نادي الرائد واشتهر في لعبة كرة القدم، حيث استطاع الصعود لمصاف فرق دوري الدرجة الأولى السعودي، وذلك موسم 1980-1981 مع نادي الروضة في التصفيات التي أقيمت في الرياض، ويهبط بعد موسم ويعود في								 موسم 1983-1984 للصعود مع نادي الأنصار. وفي موسم 1986 حقق الإنجاز الأغلى والأثمن بصعود الفريق الأول لمصاف أندية الدوري السعودي الممتاز كأول أندية منطقة القصيم يحقق هذا الإنجاز، ثم تكرر صعوده إلى الدوري الممتاز في نهاية أعوام 1989، 1992، 1998، 2002، 2007، ويتمتع الرائد بشعبية جماهيرية تعتبر الأولى بالقصيم والخامسة في المملكة العربية السعودية.
					</p>
				</div>
			</div> 
		</main>




@endsection

@section('scripts')

		<script src="{{ url('site') }}/js/imagesloaded.pkgd.min.js"></script>
		<script src="{{ url('site') }}/js/anime.min.js"></script>
		<script src="{{ url('site') }}/js/scrollMonitor.js"></script>
		<script src="{{ url('site') }}/js/scrolling.js"></script>

@endsection