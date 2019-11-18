
@extends('site.layouts.app')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/imagehover.min.css" />
		<!--		Panorama Fancy-->
		<link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/panorama.css" />
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
			<section class="grid3d vertical" id="grid3d">
				<div class="grid-wrap">
					<!--			Here you wil make a loop to get the players image , name and position-->
					<div class="grid">
						@foreach($teams as $team)
						<figure class="imghvr-shutter-in-out-diag-1 single-team-player-block animated wow"><img src="{{ getimg($team->image) }}" alt="{{ $team->name }}">
						  <figcaption>
							<h3>{{ $team->name }}</h3>
							<p>المدير الفني</p>
						  </figcaption><a href="javascript:;"></a>
						</figure>
						@endforeach
						
					</div>
				</div>
				<!--				Here you wil make a loop to get the players details in the order-->
				<div class="content players-descriptions">
					@foreach($teams as $t)
					<div class="single-player-details">
						<img src="{{ getimg($t->image) }}" alt="{{ $t->name }}" >
						<h3>{{ $t->name }}</h3>
						<div class="inner-player-position">{{ $t->job_position }}</div>
						<p class="dummy-text">
							{{ $t->description }}
							 
						</p>
					</div>
					@endforeach
					
					<span class="loading"></span>
					<span class="icon close-content" title="اغلاق">
						<img src="{{ url('site') }}/img/whistle.svg" alt="close" />
					</span>
				</div>
			</section>
		</div><!-- /container -->
<!--     *************************  End      of ٍSection ********************-->

@endsection

@section('scripts')
		<script src="{{ url('site') }}/js/classie2.js"></script>
		<script src="{{ url('site') }}/js/helper.js"></script>
		<script src="{{ url('site') }}/js/grid3d.js"></script>
		<script>
			new grid3D( document.getElementById( 'grid3d' ) );
		</script>
@endsection