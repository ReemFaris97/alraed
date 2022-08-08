
@extends('site.layouts.app')
@section('title' , __('trans.first_team') )
@section('styles')
<!--<link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/imagehover.min.css" />-->
		<!--		Panorama Fancy-->
<!--		<link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/panorama.css" />-->
		<script src="{{ url('site') }}/js/modernizr.custom.js"></script>
@endsection

@section('content')

<!--     *************************   Beginnig of ٍSection ********************-->
		<div class="container single-section-padding">
				<div class="whole-section-title-wrapper">
					<h4 class="the-above-title"> Al-Raed</h4>
					<h3 class="the-section-title">
						<span class="wow animated">F</span>
						<span class="wow animated">I</span>
						<span class="wow animated">R</span>
						<span class="wow animated">S</span>
						<span class="wow animated">T </span>
						<span class="wow animated">T</span>
						<span class="wow animated">E</span>
						<span class="wow animated">A</span>
						<span class="wow animated">M</span>
					</h3>
				</div>
				<section>

					<div class="container">
						<!-- <div class="row">
							<a href="{{asset('site/img/theteam.jpg')}}" data-caption="كرة القدم" data-fancybox="firstteam">
								<img src="{{asset('site/img/theteam.jpg')}}" alt="الفريق الأول" class="the-f-team">
							</a>
						</div> -->
						<div class="row">
                            @foreach ($first_teams as $first_team )


						<div class="col-md-3 col-sm-6">
								<div class="item fteam">
									<div class='content-img-txt'>
										<img src="{{asset($first_team->image)}}" alt="">
										<div class="content-detail">
											<h4>{{$first_team->name}}</h4>
											<span>{{$first_team->job}}</span>
										</div>
									</div>
								</div>
							</div>
                            @endforeach

						</div>
					</div>
				</section>


@section('scripts')
		<script type="text/javascript" src="{{ url('site') }}/js/jquery.fancybox.min.js"></script>
<!--
		<script src="{{ url('site') }}/js/classie2.js"></script>
		<script src="{{ url('site') }}/js/helper.js"></script>
		<script src="{{ url('site') }}/js/grid3d.js"></script>
		<script>
			new grid3D( document.getElementById( 'grid3d' ) );
		</script>
-->
@endsection
