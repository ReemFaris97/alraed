@extends('site.layouts.app')
@section('title', __('trans.news'))
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

            {{-- <!--     *************************  Beginnig of Times ********************-->
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
                            @foreach ($previous_matches as $prev_match)
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
                                                </div>
                                                <div class="slider-match-details">
                                                    <div class="the-tournament">
                                                        <img src="{{ getimg($prev_match->Champion->image) }}"
                                                            data-toggle="tooltip"
                                                            title="{{ $prev_match->Champion->title }}">
                                                    </div>
                                                    <div class="match-common-st">
                                                        <div class="single-side team-l-wrapper">
                                                            <img src="{{ getimg($prev_match->FirstTeam->image) }}"
                                                                alt="logo" data-toggle="tooltip"
                                                                title="{{ $prev_match->FirstTeam->name }}">
                                                        </div>
                                                        <div class="single-side">
                                                            <div class="sm-size">النتيجة</div>
                                                            <div class="red-color sin-middle">
                                                                {{ $prev_match->goals_first_team . ' : ' . $prev_match->goals_second_team }}
                                                            </div>
                                                            <div class="the-two-teams">
                                                                <span>{{ $prev_match->FirstTeam->name }}</span>
                                                                <span class="red-color">@lang('trans.result')</span>
                                                                <span>{{ $prev_match->SecondTeam->name }}</span>
                                                            </div>
                                                            <div class="stadium-name">{{ $prev_match->stadium }}</div>
                                                        </div>
                                                        <div class="single-side team-l-wrapper">
                                                            <img src="{{ getimg($prev_match->SecondTeam->image) }}"
                                                                alt="logo" data-toggle="tooltip"
                                                                title="{{ $prev_match->SecondTeam->name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            @endforeach

                            @if (!is_null($next_match))
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
                                                </div>
                                                <div class="slider-match-details">
                                                    <div class="the-tournament">
                                                        <img src="{{ getimg($next_match->Champion->image) }}"
                                                            data-toggle="tooltip"
                                                            title="{{ $next_match->Champion->title }}">
                                                    </div>
                                                    <div class="match-common-st">
                                                        <div class="single-side team-l-wrapper">
                                                            <img src="{{ getimg($next_match->FirstTeam->image) }}"
                                                                alt="logo" data-toggle="tooltip"
                                                                title="{{ $next_match->FirstTeam->name }}">
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
                                                            <img src="{{ getimg($next_match->SecondTeam->image) }}"
                                                                alt="logo" data-toggle="tooltip"
                                                                title="{{ $next_match->SecondTeam->name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-match-btn">
                                                    <a class="oval-btn" href="{{ $next_match->booking_url }}"
                                                        data-text="{{ __('trans.ticket') }}">{{ __('trans.ticket') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            @endif

                            @foreach ($next_matches as $nx_match)
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
                                                </div>
                                                <div class="slider-match-details">
                                                    <div class="the-tournament">
                                                        <img src="{{ getimg($nx_match->Champion->image) }}"
                                                            data-toggle="tooltip" title="{{ $nx_match->Champion->title }}">
                                                    </div>
                                                    <div class="match-common-st">
                                                        <div class="single-side team-l-wrapper">
                                                            <img src="{{ getimg($nx_match->FirstTeam->image) }}"
                                                                alt="logo" data-toggle="tooltip"
                                                                title="{{ $nx_match->FirstTeam->name }}">
                                                        </div>
                                                        <div class="single-side">
                                                            <div class="sm-size">@lang('trans.start')</div>
                                                            <div class="red-color sin-middle">
                                                                {{ $nx_match->date->format('h:i A') }}
                                                            </div>
                                                            <div class="the-two-teams">
                                                                <span>{{ $nx_match->FirstTeam->name }}</span>
                                                                <span class="red-color">@lang('trans.vs')</span>
                                                                <span>{{ $nx_match->SecondTeam->name }}</span>
                                                            </div>
                                                            <div class="stadium-name">{{ $nx_match->stadium }}</div>
                                                        </div>
                                                        <div class="single-side team-l-wrapper">
                                                            <img src="{{ getimg($nx_match->SecondTeam->image) }}"
                                                                alt="logo" data-toggle="tooltip"
                                                                title="{{ $nx_match->SecondTeam->name }}">
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
            <!--     *************************  End      of Times ********************--> --}}

            <div id="theGrid" class="main">
                <section class="grid">
                    @foreach ($news as $s_news)
                        <a class="grid__item">
                            <h2 class="title title--preview">{{ $s_news->title }}</h2>
                            <div class="loader"></div>
                            <span class="category">{{ $s_news->category->name }}</span>
                            <div class="meta meta--preview">
                                <img class="meta__avatar" src="{{ getimg($s_news->image) }}"
                                    alt="{{ $s_news->title }}" />
                                <span class="meta__date"><i class="fa fa-calendar-o"></i>
                                    {{ $s_news->created_at->format('d M') }}</span>
                                <span class="meta__reading-time"><i class="fa fa-clock-o"></i>
                                    {{ $s_news->created_at->format('h:i a') }}</span>
                            </div>
                        </a>
                    @endforeach

                    {{-- <footer class="page-meta">
						<span class="transparented"><a href="#" class="first-site-btn">@lang('trans.see_more')</a></span>
					</footer> --}}
                    <footer class="page-meta">
                        <span class="transparented"><a href="{{ $news->previousPageUrl() }}"
                                class="first-site-btn">@lang('trans.previous')</a></span>
                        <span class="transparented"><a href="{{ $news->nextPageUrl() }}"
                                class="first-site-btn">@lang('trans.next')</a></span>
                    </footer>
                </section>
                <section class="content">
                    <div class="scroll-wrap">
                        @foreach ($news as $news_s)
                            <article class="content__item">
                                <span class="category category--full">{{ $news_s->category->name }}</span>
                                <h2 class="title title--full">{{ $news_s->title }}</h2>
                                <div class="meta meta--full">
                                    <img class="meta__avatar" src="{{ getimg($news_s->image) }}" alt="author01" />
                                    <span class="meta__author">{{ $news_s->writer_name }}</span>
                                    <span class="meta__date"><i
                                            class="fa fa-calendar-o"></i>{{ $news_s->created_at->format('d M') }}</span>
                                    <span class="meta__reading-time"><i class="fa fa-clock-o"></i>
                                        {{ $news_s->created_at->format('h:i a') }}</span>
                                </div>

                                <!--							images slider here if isset-->
                                <div class="inner-news-slider owl-carousel owl-theme news-slider-caro">
                                    @foreach ($news_s->images as $img)
                                        <div class="item">
                                            <div class="news-image-wrapper">
                                                <a href="{{ asset($img->image) }}" data-fancybox="news">
                                                    <img src="{{ asset($img->image) }}" alt="صورة للخبر">
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{-- <div class="item"> --}}
                                    {{-- <div class="news-image-wrapper"> --}}
                                    {{-- <a href="https://alraedsc.com/storage/photos/mMqeIGhgWFwFcNGx8Zu7GA68UGiy58SgNs2kbnHh.jpeg" data-fancybox="news"> --}}
                                    {{-- <img src="https://alraedsc.com/storage/photos/mMqeIGhgWFwFcNGx8Zu7GA68UGiy58SgNs2kbnHh.jpeg" alt="صورة للخبر"> --}}
                                    {{-- </a> --}}
                                    {{-- </div> --}}
                                    {{-- </div> --}}
                                    {{-- <div class="item"> --}}
                                    {{-- <div class="news-image-wrapper"> --}}
                                    {{-- <a href="https://alraedsc.com/storage/photos/E7fGVOiIOLNp9J6veJchEEIHu4ztGjBC15A7DPm2.jpeg" data-fancybox="news"> --}}
                                    {{-- <img src="https://alraedsc.com/storage/photos/E7fGVOiIOLNp9J6veJchEEIHu4ztGjBC15A7DPm2.jpeg" alt="صورة للخبر"> --}}
                                    {{-- </a> --}}
                                    {{-- </div> --}}
                                    {{-- </div> --}}
                                </div>



                                <p>
                                    {{ $news_s->description }}
                                </p>


                                {{-- <div class="w-80-percent">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                        </div>
                                    </div> --}}



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
            $(document).ready(function() {
                $('.news-slider-caro').owlCarousel({
                    animateOut: 'slideOutDown',
                    animateIn: 'flipInX',
                    items: 1,
                    margin: 0,
                    loop: true,
                    stagePadding: 0,
                    dots: true,
                    rtl: true,
                    nav: false,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 5000,
                });
            })
        </script>


    @endsection
