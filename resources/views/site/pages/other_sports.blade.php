@extends('site.layouts.app')
@section('title' , __('trans.more_sports') )
@section('styles')
		<link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/jquery.fancybox.min.css" />
		<script src="{{ url('site') }}/js/modernizr.custom.js"></script>
@endsection

@section('content')

<!--     *************************   Beginnig of ٍSection ********************-->
		<div class="container single-section-padding">
				<div class="whole-section-title-wrapper">
					<h4 class="the-above-title"> Al-Raed</h4>
					<h3 class="the-section-title">
						<span class="wow animated">S</span>
						<span class="wow animated">P</span>
						<span class="wow animated">O</span>
						<span class="wow animated">R</span>
						<span class="wow animated">T</span>
						<span class="wow animated">S</span>
					</h3>
				</div>
		</div><!-- /container -->
		<section>
			<div class="other-sports-wrapper container-fluid">
				<div class="other-sports">
					<div class="other-sports-links">
						<div class="single-sport-link">
							<a href="{{ url('boxing') }}" target="otherSports" class="active-sport">
								<div class="its-img-wrapper">
									<img src="{{ url('site') }}/img/other/boxing.svg" alt="الملاكمة" />
								</div>
								<h3>@lang('trans.boxing')</h3>
							</a>
						</div>
						<div class="single-sport-link">
							<a href="{{ url('karateh') }}" target="otherSports"  >
								<div class="its-img-wrapper">
									<img src="{{ url('site') }}/img/other/karate.svg" alt="الكاراتيه" />
								</div>
								<h3>@lang('trans.karate')</h3>
							</a>
						</div>
						<div class="single-sport-link">
							<a href="{{ url('tennis') }}" target="otherSports" >
								<div class="its-img-wrapper">
									<img src="{{ url('site') }}/img/other/table%20tennis.svg" alt="تنس طاولة" />
								</div>
								<h3>@lang('trans.tennis')</h3>
							</a>
						</div>
						<div class="single-sport-link">
							<a href="{{ url('handball') }}" target="otherSports" >
								<div class="its-img-wrapper">
									<img src="{{ url('site') }}/img/other/volleyball.svg" alt="كرة يد" />
								</div>
								<h3>@lang('trans.handball')</h3>
							</a>
						</div>
						<div class="single-sport-link">
							<a href="{{ url('electronic') }}" target="otherSports" >
								<div class="its-img-wrapper">
									<img src="{{ url('site') }}/img/other/esports.svg" alt="ألعاب إلكترونية" />
								</div>
								<h3>@lang('trans.video_games')</h3>
							</a>
						</div>
					</div>
					<div class="other-sports-content">
						<iframe src="{{ url('boxing') }}" name="otherSports" class="others-frame"></iframe>
					</div>
				</div>
			</div>
		</section>
<!--     *************************  End      of ٍSection ********************-->

@endsection

@section('scripts')

<script type="text/javascript" src="{{ url('site') }}/js/jquery.fancybox.min.js"></script>
		<script>
			$(document).ready(function(){
				var divHeight = $('.other-sports-content').outerHeight();
				console.log(divHeight);
				$(".other-sports-content").css('padding-bottom' , (divHeight + 50) );
				$(".single-sport-link a").on('click' , function(){
					$(".active-sport").removeClass("active-sport");
					$(this).addClass("active-sport");
				})
			})
		</script>

@endsection
