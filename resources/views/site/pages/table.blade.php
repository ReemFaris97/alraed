@extends('site.layouts.app')
@section('title', __('trans.tables'))
@section('content')
    <div class="container single-section-padding lineup-sec-wrapper">
        <div class="whole-section-title-wrapper">
            <h3 class="the-section-title">
                <span class="wow animated">S</span>
                <span class="wow animated">C</span>
                <span class="wow animated">H</span>
                <span class="wow animated">E</span>
                <span class="wow animated">D</span>
                <span class="wow animated">U</span>
                <span class="wow animated">L</span>
                <span class="wow animated">E</span>
            </h3>
        </div>
        <div class="time-table-wrapper">
            @unless(is_null($next_match))
                <div class="slider-match-details">
                    <div class="the-tournament">
                        <img src="{{ getimg($next_match->Champion->image) }}" data-toggle="tooltip"
                            title="{{ $next_match->Champion->title }}">
                    </div>
                    <div class="match-common-st">
                        <div class="single-side team-l-wrapper">
                            <img src="{{ getimg($next_match->FirstTeam->image) }}" alt="{{ $next_match->FirstTeam->name }}"
                                data-toggle="tooltip" title="{{ $next_match->FirstTeam->name }}">
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
                            <img src="{{ getimg($next_match->SecondTeam->image) }}" alt="{{ $next_match->SecondTeam->name }}"
                                data-toggle="tooltip" title="{{ $next_match->SecondTeam->name }}">
                        </div>
                    </div>
                </div>
            @endunless
            <div class="all-matches-table">
                @foreach ($next_matches as $n_match)
                    <div class="single-match-row">
                        <div class="m-calendar">
                            <span class="m-day">{{ $n_match->date->format('d') }}</span>
                            <span class="m-month">{{ $n_match->date->format('M') }}</span>
                        </div>
                        <div class="m-team-home">
                            <img src="{{ getimg($n_match->FirstTeam->image) }}" />
                            <div>{{ $n_match->FirstTeam->name }}</div>
                        </div>
                        <div class="m-championship">
                            <img src="{{ getimg($n_match->Champion->image) }}" data-toggle="tooltip"
                                title="{{ $n_match->Champion->name }}" />
                        </div>
                        <div class="m-team-away">
                            <img src="{{ getimg($n_match->SecondTeam->image) }}" />
                            <div>{{ $n_match->SecondTeam->name }}</div>
                        </div>
                        <div class="m-link">
                            <a href="{{ route('match.details', $n_match->id) }}">@lang('trans.details')</a>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="single-match-row">
						<div class="m-calendar">
							<span class="m-day">10</span>
							<span class="m-month">أبريل</span>
						</div>
						<div class="m-team-home">
							<img src="img/tawon-logo.png" />
							<div>التعاون</div>
						</div>
						<div class="m-championship">
							<img src="img/saudi-league.png" data-toggle="tooltip" title="الدوري السعودي" />
						</div>
						<div class="m-team-away">
							<img src="img/logo.png" />
							<div>الرائد</div>
						</div>
						<div class="m-link">
							<a href="match-details.html">التفاصيل</a>
						</div>
					</div>
					<div class="single-match-row">
						<div class="m-calendar">
							<span class="m-day">22</span>
							<span class="m-month">أبريل</span>
						</div>
						<div class="m-team-home">
							<img src="img/hilal-logo.png" />
							<div>الهلال</div>
						</div>
						<div class="m-championship">
							<img src="img/arab-champion.png" data-toggle="tooltip" title="البطولة العربية" />
						</div>
						<div class="m-team-away">
							<img src="img/logo.png" />
							<div>الرائد</div>
						</div>
						<div class="m-link">
							<a href="match-details.html">التفاصيل</a>
						</div>
					</div>
					<div class="single-match-row">
						<div class="m-calendar">
							<span class="m-day">02</span>
							<span class="m-month">مايو</span>
						</div>
						<div class="m-team-home">
							<img src="img/logo.png" />
							<div>الرائد</div>
						</div>
						<div class="m-championship">
							<img src="img/amir-league.jpg" data-toggle="tooltip" title="دوري الأمير محمد بن سلمان" />
						</div>
						<div class="m-team-away">
							<img src="img/shabab-logo.png" />
							<div>الشباب</div>
						</div>
						<div class="m-link">
							<a href="match-details.html">التفاصيل</a>
						</div>
					</div>
					<div class="single-match-row">
						<div class="m-calendar">
							<span class="m-day">06</span>
							<span class="m-month">مايو</span>
						</div>
						<div class="m-team-home">
							<img src="img/logo.png" />
							<div>الرائد</div>
						</div>
						<div class="m-championship">
							<img src="img/arab-champion.png" data-toggle="tooltip" title="البطولة العربية" />
						</div>
						<div class="m-team-away">
							<img src="img/ahli-logo.png" />
							<div>الأهلي</div>
						</div>
						<div class="m-link">
							<a href="match-details.html">التفاصيل</a>
						</div>
					</div> --}}
            </div>

            <hr>
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
                                                            data-toggle="tooltip"
                                                            title="{{ $nx_match->Champion->title }}">
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
            <!--     *************************  End      of Times ********************-->

        </div>
    </div>
@endsection
