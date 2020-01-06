@extends('site.layouts.app')
@section('content')
<div class="container single-section-padding lineup-sec-wrapper">
		<button id="share-mee">Share</button>
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
						<img src="{{ getimg($next_match->Champion->image) }}" data-toggle="tooltip" title="{{ $next_match->Champion->title }}">
					</div>
					<div class="match-common-st">
						<div class="single-side team-l-wrapper">
							<img src="{{ getimg($next_match->FirstTeam->image) }}" alt="{{ $next_match->FirstTeam->name }}" data-toggle="tooltip" title="{{ $next_match->FirstTeam->name }}">
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
							<img src="{{ getimg($next_match->SecondTeam->image) }}" alt="{{ $next_match->SecondTeam->name }}" data-toggle="tooltip" title="{{ $next_match->SecondTeam->name }}">
						</div>
					</div>
				</div>
				@endunless
				<div class="all-matches-table">
					@foreach($next_matches as $n_match)
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
							<img src="{{ getimg($n_match->Champion->image) }}" data-toggle="tooltip" title="{{ $n_match->Champion->name }}" />
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
			</div>
		</div>	
@endsection