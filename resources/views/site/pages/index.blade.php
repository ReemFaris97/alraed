
@extends('site.layouts.app')
@section('title' , __('trans.main') )
@section('styles')
 <!--        SLit Slider-->
        <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/style.css" />
        <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/custom.css" />
		<script type="text/javascript" src="{{ url('site') }}/js/modernizr.custom.79639.js"></script>
		<noscript>
			<link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/styleNoJS.css" />
		</noscript>
		<!--		Owl Carousel-->
        <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/owl.carousel.min.css" />
        <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/owl.theme.default.min.css" />
		<!--		Bee 3D-->
        <link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/bee3D.min.css" />
@endsection


@section('content')

<div class="breaking-news-ticker" id="news-tick">
    <!--                <a href="news.html" class="bn-label">أخبار</a>-->
    <div class="bn-news">
        <ul>
        	@foreach($top_news as $tp_news)
            <li><a href="{{ url('news') }}">{{ Str::limit($tp_news->title, 100) }}</a></li>
           @endforeach
        </ul>
    </div>
    <div class="bn-controls">
        <button><span class="bn-arrow bn-prev"></span></button>
        <button><span class="bn-action"></span></button>
        <button><span class="bn-arrow bn-next"></span></button>
    </div>
</div>

<!--     *************************   Beginnig of Slider ********************-->
        <div class="container demo-1 slit-slider-wrap">
            <div id="slider" class="sl-slider-wrapper">
				<div class="sl-slider">
					@foreach($banners as $key => $banner)
					<div class="sl-slide" data-orientation="{{ $key % 2 == 0 ? 'horizontal' : 'vertical' }}" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							@if(isVideo($banner->image))
				             <video class="slider-image" autoplay loop>
				              <source src="{{getimg($banner->image)}}" type="video/mp4">
				              {{-- <source src="movie.ogg" type="video/ogg"> --}}
				            Your browser does not support the video tag.
				            </video>
				            @else
                            <img class="slider-image" src="{{ getimg($banner->image) }}" alt="{{ $banner->title }}" />
                            @endif
<!--
							<h2>{{ $banner->title }}</h2>
							<blockquote>
                                <p>
                                    {{ $banner->description }}
                                </p>
                            </blockquote>
-->
						</div>
					</div>
					@endforeach

				</div><!-- /sl-slider -->
				<nav id="nav-dots" class="nav-dots">
				@foreach($banners as $key => $banner)
					<span class="{{ $key == 0 ? 'nav-dot-current' : '' }}"></span>
				@endforeach
				</nav>
			</div><!-- /slider-wrapper -->
        </div>
<!--     *************************  End       of Slider ********************-->
<!--     *************************  Beginnig of Counter ********************-->
        <div class="container-fluid">
            <div class="row nex-match-timing">
                <div class="col-sm-6 one-skewed-timing skew-wrapper black-bg">
					<div class="wow animated fadeInLeft">
						<div class="skew-inner">
							<h3 class="the-section-title">
								<span class="wow animated">N</span>
								<span class="wow animated">e</span>
								<span class="wow animated">x</span>
								<span class="wow animated">t</span>
							</h3>
							<div class="section-cont">
								<div class="red-color">@lang('trans.next_match')</div>
								@if(is_null($next_match))
								<div class="the-two-teams">
										<span>--</span>
										<span class="red-color">@lang('trans.vs')</span>
										<span>--</span>
								</div>
								@else
								<div class="the-two-teams">
										<span>{{ $next_match->FirstTeam->name }}</span>
										<span class="red-color">@lang('trans.vs')</span>
										<span>{{ $next_match->SecondTeam->name }}</span>
								</div>
								<div>{{ $next_match->date->format('Y / m / d') }}</div>
								<div>{{ $next_match->date->format('h:i a') }}</div>
								@endif
							</div>
						</div>
					</div>
                </div>
                <div class="col-sm-6 one-skewed-timing skew-wrapper red-bg">
					<div class="wow animated fadeInRight">
						<div class="skew-inner">
							<h3 class="the-section-title">
							<span class="wow animated">T</span>
							<span class="wow animated">i</span>
							<span class="wow animated">m</span>
							<span class="wow animated">e</span>
						</h3>
						<div class="section-cont">
							<div class="white-color">@lang('trans.remaining_time')</div>
							<div id="clockdiv">
							  <div>
								<span class="days"></span>
								<div class="smalltext">@lang('trans.day')</div>
								<span class="dotta-dividor">:</span>
							  </div>
							  <div>
								<span class="hours"></span>
								<div class="smalltext">@lang('trans.hour')</div>
								<span class="dotta-dividor">:</span>
							  </div>
							  <div>
								<span class="minutes"></span>
								<div class="smalltext">@lang('trans.minute')</div>
								<span class="dotta-dividor">:</span>
							  </div>

							  <div>
								<span class="seconds"></span>
								<div class="smalltext">@lang('trans.second')</div>
							  </div>
							</div>
						</div>
                    </div>
					</div>
                </div>
            </div>
        </div>
<!--     *************************  End      of Counter ********************-->
<!--     *************************  Beginnig of News ********************-->
        <div class="container">
            <div class="row">
				<div class="news-slider owl-carousel owl-theme" id="news-slider">
					@foreach($news as $s_new)
					<div class="item">
						<div class="news-image-wrapper">
							<img src="{{ getimg($s_new->image) }}" alt="{{ $s_new->title }}">
						</div>
						<div class="news-text-wrapper">
							<h3 class="news-title"><span>{{ $s_new->category->name }}</span>{{ $s_new->title }}</h3>
							<p>{{ str_limit($s_new->description, 150) }} </p>
							<a href="{{ url('news') }}" class="first-site-btn">
								@lang('trans.see_more')
							</a>
						</div>
					</div>
					@endforeach

				</div>
            </div>
        </div>
<!--     *************************  End      of News ********************-->
<!--     *************************  Beginnig of Times ********************-->
        <div class="container-fluid matches-slider-section">
			<div class="container">
				<h3 class="some-title">
					<span class="red-color pacifico sm-size">@lang('trans.football_matches')</span>
					@lang('trans.matches_results')
				</h3>
			</div>
            <div class="row">
				<div class="matches-slider">
					 <article class="example" id="matches-slider">
						@foreach($previous_matches as $prev_match)
						 <section class="bee3D--slide">
						  <div class="bee3D--inner">
							 <div class="slider-match-timer-wrapper">
								<div class="slider-match-timer">
									<div class="the-top-sec">
										<div>
											<span>{{ $prev_match->date->format('d') }}</span>
											<span>
												<span>{{ $prev_match->date->format('D') }}</span>
												<span>{{ $prev_match->date->format('M') }}</span>
											</span>
										</div>
										<div>
											<span class="big-size">@lang('trans.previous_match')</span>
										</div>
										{{-- <div>
											<span>برعاية</span>
											<span>
											<img src="img/panorama.png" data-toggle="tooltip" title="بانوراما القصيم"/></span>
										</div> --}}
									</div>
									<div class="slider-match-details">
										<div class="the-tournament">
											<img src="{{ getimg($prev_match->Champion->image) }}" data-toggle="tooltip" title="{{ $prev_match->Champion->title }}">
										</div>
										<div class="match-common-st">
											<div class="single-side team-l-wrapper">
												<img src="{{ getimg($prev_match->FirstTeam->image) }}" alt="logo" data-toggle="tooltip" title="{{ $prev_match->FirstTeam->name }}">
											</div>
											<div class="single-side">
												<div class="sm-size">النتيجة</div>
												<div class="red-color sin-middle">
													{{-- {{ $prev_match->goals()->where('team_id', $prev_match->FirstTeam->id)->count() }} : {{ $prev_match->goals()->where('team_id', $prev_match->SecondTeam->id)->count() }} --}}
													{{ $prev_match->goals_first_team.' : '.$prev_match->goals_second_team }}
												</div>
												<div class="the-two-teams">
													<span>{{ $prev_match->FirstTeam->name }}</span>
													<span class="red-color">@lang('trans.result')</span>
													<span>{{ $prev_match->SecondTeam->name }}</span>
												</div>
												<div class="stadium-name">{{ $prev_match->stadium }}</div>
											</div>
											<div class="single-side team-l-wrapper">
												<img src="{{ getimg($prev_match->SecondTeam->image) }}" alt="logo" data-toggle="tooltip" title="{{ $prev_match->SecondTeam->name }}">
											</div>
										</div>
									</div>
								 </div>
							</div>
						  </div>
						 </section>
						 @endforeach

						 @if(!is_null($next_match))
						 <section class="bee3D--slide">
						  <div class="bee3D--inner">
							 <div class="slider-match-timer-wrapper">
								<div class="slider-match-timer">
									<div class="the-top-sec">
										<div>
											<span>{{ $next_match->date->format('d') }}</span>
											<span>
												<span>{{ $next_match->date->format('D') }}</span>
												<span>{{ $next_match->date->format('M') }}</span>
											</span>
										</div>
										<div>
											<span class="big-size">@lang('trans.next_match')</span>
										</div>
										{{-- <div>
											<span>برعاية</span>
											<span>
											<img src="{{ url('site') }}/img/panorama.png" data-toggle="tooltip" title="Panorma Alqassim."/></span>
										</div> --}}
									</div>
									<div class="slider-match-details">
										<div class="the-tournament">
											<img src="{{ getimg($next_match->Champion->image) }}" data-toggle="tooltip" title="{{ $next_match->Champion->title }}">
										</div>
										<div class="match-common-st">
											<div class="single-side team-l-wrapper">
												<img src="{{ getimg($next_match->FirstTeam->image) }}" alt="logo" data-toggle="tooltip" title="{{ $next_match->FirstTeam->name }}">
											</div>
											<div class="single-side">
												<div class="sm-size">@lang('trans.start')</div>
												<div class="red-color sin-middle">
													 {{ $next_match->date->format('h:i a') }}
												</div>
												<div class="the-two-teams">
													<span>{{ $next_match->FirstTeam->name }}</span>
													<span class="red-color">@lang('trans.vs')</span>
													<span>{{ $next_match->SecondTeam->name }}</span>
												</div>
												<div class="stadium-name">{{ $next_match->stadium }}</div>
											</div>
											<div class="single-side team-l-wrapper">
												<img src="{{ getimg($next_match->SecondTeam->image) }}" alt="logo" data-toggle="tooltip" title="{{ $next_match->SecondTeam->name }}">
											</div>
										</div>
									</div>
									<div class="slider-match-btn">
										<a class="oval-btn" href="#" data-text="{{ __('trans.ticket') }}">{{ __('trans.ticket') }}</a>
									</div>
								 </div>
							</div>
						  </div>
						 </section>
						 @endif

						 @foreach($next_matches as $nx_match)
						 <section class="bee3D--slide">
						  <div class="bee3D--inner">
							 <div class="slider-match-timer-wrapper">
								<div class="slider-match-timer">
									<div class="the-top-sec">
										<div>
											<span>{{ $nx_match->date->format('d') }}</span>
											<span>
												<span>{{ $nx_match->date->locale('ar')->format('D') }}</span>
												<span>{{ $nx_match->date->format('M') }}</span>
											</span>
										</div>
										<div>
											<span class="big-size">@lang('trans.later_matches')</span>
										</div>
										{{-- <div>
											<span>برعاية</span>
											<span>
											<img src="{{ url('site') }}/img/panorama.png" data-toggle="tooltip" title="بانوراما القصيم"/></span>
										</div> --}}
									</div>
									<div class="slider-match-details">
										<div class="the-tournament">
											<img src="{{ getimg($nx_match->Champion->image) }}" data-toggle="tooltip" title="{{ $nx_match->Champion->title }}">
										</div>
										<div class="match-common-st">
											<div class="single-side team-l-wrapper">
												<img src="{{ getimg($nx_match->FirstTeam->image) }}" alt="logo" data-toggle="tooltip" title="{{ $nx_match->FirstTeam->name }}">
											</div>
											<div class="single-side">
												<div class="sm-size">@lang('trans.start')</div>
												<div class="red-color sin-middle">
													 {{ $nx_match->date->format('h:i a') }}
												</div>
												<div class="the-two-teams">
													<span>{{ $nx_match->FirstTeam->name }}</span>
													<span class="red-color">@lang('trans.vs')</span>
													<span>{{ $nx_match->SecondTeam->name }}</span>
												</div>
												<div class="stadium-name">{{ $nx_match->stadium }}</div>
											</div>
											<div class="single-side team-l-wrapper">
												<img src="{{ getimg($nx_match->SecondTeam->image) }}" alt="logo" data-toggle="tooltip" title="{{ $nx_match->SecondTeam->name }}">
											</div>
										</div>
									</div>
								 </div>
							</div>
						  </div>
						 </section>
						 @endforeach

						 <!-- Navigation Arrows -->
						 <span class="bee3D--nav bee3D--nav__prev"><i class="fas fa-chevron-left"></i></span>
						 <span class="bee3D--nav bee3D--nav__next"><i class="fas fa-chevron-right"></i></span>
					 </article>
				</div>
            </div>
        </div>
<!--     *************************  End      of Times ********************-->
<!--     *************************  Beginnig of News ********************-->
        <div class="container">
            <div class="row">
				<div class="multimedia-slider owl-carousel owl-theme" id="multimedia-slider">
					@foreach ($multimedia as $media)
					<div class="item">
						<div class="news-image-wrapper">
							<a class="watch-vid-btn" data-fancybox="multimedia" data-caption="{{ $media->title }}" href="{{ getimg($media->image) }}" data-toggle="tooltip" title="شاهد المرفق">
								<img src="{{ getimg($media->image) }}" alt="{{ $media->title }}">
							</a>
						</div>
						<div class="news-text-wrapper">
							<h3 class="news-title">{{ $media->title }}</h3>
							<p> {{ $media->description }} </p>
							<a href="{{ url('multimedia') }}" class="first-site-btn">
								@lang('trans.see_more')
							</a>
						</div>
					</div>
					@endforeach

				</div>
            </div>
        </div>
<!--     *************************  End      of News ********************-->
<!--     *************************  Beginnig of Partners ********************-->
        <div class="container-fluid the-partners-section">
            <div class="row">
				<div class="partners-title">
					<div>الرعاة</div>
				</div>
				<div class="partners-slider owl-carousel owl-theme" id="partners-slider">
					@foreach($partners as $partner)
					<div class="item">
						<a href="{{ $partner->url }}" target="_blank" rel="noreferrer noopener">
							<img src="{{ getimg($partner->image) }}" data-toggle="tooltip" title="{{ $partner->name }}">
						</a>
					</div>
					@endforeach

				</div>
            </div>
        </div>
<!--     *************************  End      of Partners ********************-->
<!--     *************************  Beginnig of About ********************-->
        <div class="container-fluid the-about-section" style="background-image: url({{ url('site') }}/img/all-team.jpg)">
           	<div class="about-words-wrapper animated wow fadeInLeft">
				 <div class="about-words">
					<div>
						<h1>{{ setting('alraed') }}</h1>
						<p> {{ preg_replace("/&#?[a-z0-9]+;/i","",strip_tags(setting('about'))) }}
						</p>

							<a href="/about-alraed" class="first-site-btn">
								@lang('trans.see_more')
							</a>
					</div>
				</div>
			</div>
        </div>
<!--     *************************  End      of About ********************-->

@endsection

@section('scripts')
<!--		Fancy Box-->
		<script type="text/javascript" src="{{ url('site') }}/js/jquery.fancybox.min.js"></script>
		<!--		Owl Carousel-->
		<script type="text/javascript" src="{{ url('site') }}/js/owl.carousel.min.js"></script>
		<!--		Bee3d Slider-->
		<script src="{{ url('site') }}/js/classie.js"></script>
  		<script src="{{ url('site') }}/js/parallax.custom.js"></script>
		<script type="text/javascript" src="{{ url('site') }}/js/bee3D.min.js"></script>
		<script>
			var element = document.querySelector('#matches-slider');
			var slider = new Bee3D(element, {
			  effect: 'coverflow',
				focus: 2,
			  listeners: {
				keys: true,
				   touches: false
			  },
			  navigation: {
				enabled: true
			  },
			  parallax: {
				enabled: true
			  },
			  shadows: {
				enabled: true
			  },
			  autoplay: {
				enabled: true,
				speed: 8000
			  },
			  loop: {
				enabled: true,
				continuous: true
			  }
			});
		</script>
<!--        Slit Slider-->
		<script type="text/javascript" src="{{ url('site') }}/js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="{{ url('site') }}/js/jquery.slitslider.js"></script>
		<script type="text/javascript">
			$(function() {
				var Page = (function() {
					var $navArrows = $( '#nav-arrows' ),
						$nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {

							onBeforeChange : function( slide, pos ) {
								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );
							},
							autoplay : true,
							interval : 2000
						} ),
						init = function() {
							initEvents();
						},
						initEvents = function() {
							// add navigation events
							$navArrows.children( ':last' ).on( 'click', function() {
								slitslider.next();
								return false;
							} );
							$navArrows.children( ':first' ).on( 'click', function() {
								slitslider.previous();
								return false;
							} );
							$nav.each( function( i ) {
								$( this ).on( 'click', function( event ) {
									var $dot = $( this );
									if( !slitslider.isActive() ) {
										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									}
									slitslider.jump( i + 1 );
									return false;
								} );
							} );
						};
						return { init : init };
				})();
				Page.init();

			});
		</script>

<!--        Timer-->
        <script type="text/javascript">
        	var aimTime = {{ is_null($next_match) ? date('Y-m-d H:i:s') : ($next_match->date->diffInRealMilliseconds(date('Y-m-d H:i:s'))) }} ;
            function getTimeRemaining(endtime) {
              var t = Date.parse(endtime) - Date.parse(new Date());
              var seconds = Math.floor((t / 1000) % 60);
              var minutes = Math.floor((t / 1000 / 60) % 60);
              var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
              var days = Math.floor(t / (1000 * 60 * 60 * 24));
              return {
                'total': t,
                'days': days,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
              };
            }

            function initializeClock(id, endtime) {
              var clock = document.getElementById(id);
              var daysSpan = clock.querySelector('.days');
              var hoursSpan = clock.querySelector('.hours');
              var minutesSpan = clock.querySelector('.minutes');
              var secondsSpan = clock.querySelector('.seconds');

              function updateClock() {
                var t = getTimeRemaining(endtime);

                daysSpan.innerHTML = t.days;
                hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                if (t.total <= 0) {
                  clearInterval(timeinterval);
                }
              }

              updateClock();
              var timeinterval = setInterval(updateClock, 1000);
            }
            console.log(aimTime)
	            // var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
	            var deadline = new Date(Date.parse(new Date()) + aimTime);
            initializeClock('clockdiv', deadline);
        </script>
@endsection
