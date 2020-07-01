@extends('site.layouts.app')

@section('styles')
			<!--		Owl Carousel-->
        <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/owl.carousel.min.css" />
        <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/owl.theme.default.min.css" />
		<link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/news.css" />
		<script src="{{ url('site') }}/js/modernizr.custom.js"></script>
@endsection


@section('content')
<!--     *************************   Beginnig of ٍSection ********************-->
	<div class="container single-section-padding news-sec-wrapper">
		<div class="whole-section-title-wrapper">
			<h4 class="the-above-title"> @lang('trans.alraed')</h4>
			<h3 class="the-section-title">
				<span class="wow animated">N</span>
				<span class="wow animated">E</span>
				<span class="wow animated">W</span>
				<span class="wow animated">S</span>
			</h3>
			<button id="menu-toggle" class="menu-toggle"><span>Menu</span></button>
			<div id="theGrid" class="main">
				<section class="grid">
					@foreach($news as $s_news)
					<a class="grid__item">
						<h2 class="title title--preview">{{ $s_news->title }}</h2>
						<div class="loader"></div>
						<span class="category">{{ $s_news->category->name }}</span>
						<div class="meta meta--preview">
							<img class="meta__avatar" src="{{ getimg($s_news->image) }}" alt="{{ $s_news->title }}" /> 
							<span class="meta__date"><i class="fa fa-calendar-o"></i> {{ $s_news->created_at->format('d M') }}</span>
							<span class="meta__reading-time"><i class="fa fa-clock-o"></i> {{ $s_news->created_at->format('h:i a') }}</span>
						</div>
					</a>
					@endforeach
					
					{{-- <footer class="page-meta">
						<span class="transparented"><a href="#" class="first-site-btn">@lang('trans.see_more')</a></span>
					</footer> --}}
					<footer class="page-meta">
						<span class="transparented"><a href="{{ $news->previousPageUrl() }}" class="first-site-btn">@lang('trans.previous')</a></span>
						<span class="transparented"><a href="{{ $news->nextPageUrl() }}" class="first-site-btn">@lang('trans.next')</a></span>
					</footer>
				</section>
				<section class="content">
					<div class="scroll-wrap">
						@foreach($news as $news_s)
						<article class="content__item">
							<span class="category category--full">{{ $news_s->category->name }}</span>
							<h2 class="title title--full">{{ $news_s->title }}</h2>
							<div class="meta meta--full">
								<img class="meta__avatar" src="{{ getimg($news_s->image) }}" alt="author01" />
								<span class="meta__author">{{ $news_s->writer_name }}</span>
								<span class="meta__date"><i class="fa fa-calendar-o"></i>{{$news_s->created_at->format('d M') }}</span>
								<span class="meta__reading-time"><i class="fa fa-clock-o"></i> {{ $news_s->created_at->format('h:i a') }}</span>
							</div>
							
<!--							images slider here if isset-->
							<div class="inner-news-slider owl-carousel owl-theme news-slider-caro">
								<div class="item">
									<div class="news-image-wrapper">
									<a href="https://alraedsc.com/storage/photos/MU3jqp7Mq0KHjGTQNHjNexNHrbSaJtFzR1eefbXn.jpeg" data-fancybox="news">
										<img src="https://alraedsc.com/storage/photos/MU3jqp7Mq0KHjGTQNHjNexNHrbSaJtFzR1eefbXn.jpeg" alt="صورة للخبر">
										</a>
									</div>
								</div>
								<div class="item">
									<div class="news-image-wrapper">
									<a href="https://alraedsc.com/storage/photos/mMqeIGhgWFwFcNGx8Zu7GA68UGiy58SgNs2kbnHh.jpeg" data-fancybox="news">
										<img src="https://alraedsc.com/storage/photos/mMqeIGhgWFwFcNGx8Zu7GA68UGiy58SgNs2kbnHh.jpeg" alt="صورة للخبر">
										</a>
									</div>
								</div>
								<div class="item">
									<div class="news-image-wrapper">
									<a href="https://alraedsc.com/storage/photos/E7fGVOiIOLNp9J6veJchEEIHu4ztGjBC15A7DPm2.jpeg" data-fancybox="news">
										<img src="https://alraedsc.com/storage/photos/E7fGVOiIOLNp9J6veJchEEIHu4ztGjBC15A7DPm2.jpeg" alt="صورة للخبر">
										</a>
									</div>
								</div>
							</div>
									

							
							<p>
								{{ $news_s->description }}
							</p>
							
<!--							Video here if isset-->
							<div class="w-80-percent">
								<div class="embed-responsive embed-responsive-16by9">
							  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
							</div>
							</div>

							
							
						</article>
						@endforeach
						
						
						
					</div>
					<button class="close-button" id="close-it"><i class="fa fa-times"></i><span>Close</span></button>
				</section>
			</div>
		</div><!-- /container -->
<!--     *************************  End      of ٍSection ********************-->
@endsection
@section('scripts')
<!--		Fancy Box-->
		<script type="text/javascript" src="{{ url('site') }}/js/jquery.fancybox.min.js"></script>
		<!--		Owl Carousel-->
		<script type="text/javascript" src="{{ url('site') }}/js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="{{ url('site') }}/js/news/classie.js"></script>
		<script type="text/javascript" src="{{ url('site') }}/js/news/main-news.js"></script>
		{{-- <script type="text/javascript">
			$(document).ready(function(){
				$('.grid__item').click(function(){
					NewsFunction();
				});
			})
		</script> --}}
		
		
		
		
		<script>
	
$(document).ready(function(){
		$('.news-slider-caro').owlCarousel({
	animateOut: 'slideOutDown',
	animateIn: 'flipInX',
	items:1,
	margin:0,
	loop:true,
	stagePadding:0,
	dots:true,
	rtl:true,
	nav:false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplaySpeed:5000,
});
})

		</script>
		
		
@endsection