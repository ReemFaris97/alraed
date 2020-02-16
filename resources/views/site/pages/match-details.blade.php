
@extends('site.layouts.app')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ url('site') }}/css/lineup.css" />
@endsection

@section('content')

<div class="container single-section-padding lineup-sec-wrapper">
				<div class="whole-section-title-wrapper">
					<h3 class="the-section-title">
						<span class="wow animated">M</span>
						<span class="wow animated">A</span>
						<span class="wow animated">T</span>
						<span class="wow animated">C</span>
						<span class="wow animated">H</span>
					</h3>
				</div>	
				<div class="slider-match-details" id="the-two-main-teams">
					<div class="the-tournament">
						<img src="{{ getimg($match->Champion->image) }}" data-toggle="tooltip" title="{{ $match->Champion->title }}">
					</div>
					<div class="match-common-st">
						<div class="single-side team-l-wrapper">
							<img src="{{ getimg($match->FirstTeam->image) }}" alt="Al Hilal logo" data-toggle="tooltip" title="{{ $match->FirstTeam->name }}">
							@if($match->date < date('Y-m-d H:i:s'))
								@foreach($match->goals()->where('team_id', $match->FirstTeam->id)->get() as $f_goal)
								<div class="goal-scorer">
									<span class="goal-i"><i class="fas fa-futbol"></i></span>
									<span class="goal-t"> <i class="far fa-clock"></i> {{ $f_goal->minuit }} </span>
									<span class="goal-s">{{ $f_goal->player->name }}</span>
								</div>
								@endforeach
							@endif
						</div>
						<div class="single-side">
							<div class="sm-size">
							@if($match->date < date('Y-m-d H:i:s'))
								@lang('trans.result')
							@else
								@lang('trans.start')
							@endif
							</div>
							<div class="red-color sin-middle">
								@if($match->date < date('Y-m-d H:i:s'))
									{{-- {{ $match->goals()->where('team_id', $match->FirstTeam->id)->count() }} : {{ $match->goals()->where('team_id', $match->SecondTeam->id)->count() }} --}}
									{{ $match->goals_first_team.' : '.$match->goals_second_team }}
								@else
									{{ $match->date->format('h:i a') }}
								@endif
							</div>
							<div class="the-two-teams">
								<span>{{ $match->FirstTeam->name }}</span>
								<span class="red-color">@lang('trans.vs')</span>
								<span>{{ $match->SecondTeam->name }}</span>
							</div>
							<div class="stadium-name">{{ $match->stadium }}</div>
						</div>
						<div class="single-side team-l-wrapper">
							<img src="{{ getimg($match->SecondTeam->image) }}" alt="{{ $match->SecondTeam->name }}" data-toggle="tooltip" title="{{ $match->SecondTeam->name }}">
							{{-- @if($match->date < date('Y-m-d H:i:s'))
								@foreach($match->goals()->where('team_id', $match->SecondTeam->id)->get() as $s_goal)
								<div class="goal-scorer">
									<span class="goal-i"><i class="fas fa-futbol"></i></span>
									<span class="goal-t"> <i class="far fa-clock"></i> {{ $s_goal->minuit }} </span>
									<span class="goal-s">{{ $s_goal->player->name }}</span>
								</div>
								@endforeach
							@endif --}}
						</div>
					</div>
				</div>
				{{-- <div class="nav nav-tabs radial-switch">
					<li class="selected-tab"><a id="formation-tab">التشكيلة</a></li>
					<li><a id="statistics-tab">الإحصائيات</a></li>
				</div>
				<div id="formation" class="the-shown-taab">
					<h3 class="red-color">تشكيل الفريقين</h3>
					<div class="team-lineup-wrapper">
						<div class="static">        
							<div class="js-switcher switcher">
								<a href="#" class="js-switch disabled switch-btn">الرائد</a><a href="#" class="js-switch switch-btn">الهلال</a>
							</div>
						</div>
						<div class="js-stage stage texture">
							<div class="js-world world">
								<div class="team js-team">
									<!-- Team cards / icons goes here -->
								</div>
								<div class="terrain js-terrain">
									<div class="field field--alt"></div>
									<div class="field ground">
										<div class="field__texture field__texture--gradient"></div>
										<div class="field__texture field__texture--gradient-b"></div>
										<div class="field__texture field__texture--grass"></div>
										<div class="field__line field__line--goal"></div>
										<div class="field__line field__line--goal field__line--goal--far"></div>
										<div class="field__line field__line--outline"></div>
										<div class="field__line field__line--penalty"></div>
										<div class="field__line field__line--penalty-arc"></div>
										<div class="field__line field__line--penalty-arc field__line--penalty-arc--far"></div>
										<div class="field__line field__line--mid"></div>
										<div class="field__line field__line--circle"></div>
										<div class="field__line field__line--penalty field__line--penalty--far"></div>
									</div>
									<div class="field__side field__side--front"></div>
									<div class="field__side field__side--left"></div>
									<div class="field__side field__side--right"></div>
									<div class="field__side field__side--back"></div>
								</div>
							</div>
							<div class="loading js-loading">من فضلك إنتظر ...</div>
						</div>
					</div>
				</div>
			    <div id="statistics">
					<h3 class="red-color">الإحصائيات</h3>
					<div class="single-statistics-row">
						<div class="mat-name">
							الهلال
						</div>
						
						<div class="mat-name">
							الرائد
						</div>
					</div>
					<div class="single-statistics-row">
						<div class="mat-score">0</div>
						<div class="stati-name">
							Goals
						</div>
						<div class="mat-score">2</div>
					</div>
					<div class="single-statistics-row calcuatable">
						<div class="team-percent rr-side"><span class="custo-progress"></span></div>
						<span class="stati-num rr-side">5</span>
						<div class="stati-name">Corners</div>
						<span class="stati-num ll-side">3</span>
						<div class="team-percent ll-side"><span class="custo-progress"></span></div>
						
					</div>
					<div class="single-statistics-row calcuatable">
						<div class="team-percent rr-side"><span class="custo-progress"></span></div>
						<span class="stati-num rr-side">2</span>
						<div class="stati-name">Offside</div>
						<span class="stati-num ll-side">1</span>
						<div class="team-percent ll-side"><span class="custo-progress"></span></div>
						
					</div>
					<div class="single-statistics-row calcuatable">
						<div class="team-percent rr-side"><span class="custo-progress"></span></div>
						<span class="stati-num rr-side">2</span>
						<div class="stati-name">Y Card</div>
						<span class="stati-num ll-side">4</span>
						<div class="team-percent ll-side"><span class="custo-progress"></span></div>
						
					</div>
					<div class="single-statistics-row calcuatable">
						<div class="team-percent rr-side"><span class="custo-progress"></span></div>
						<span class="stati-num rr-side">0</span>
						<div class="stati-name">R Card</div>
						<span class="stati-num ll-side">1</span>
						<div class="team-percent ll-side"><span class="custo-progress"></span></div>
						
					</div>
			   </div> --}}
				<div class="some-previous-matches">
					@foreach($previous_matches as $prev_match)
					<div class="slider-match-details">
						<div class="match-common-st">
							<div class="single-side team-l-wrapper">
								<img src="{{ getimg($prev_match->FirstTeam->image) }}" alt="{{ $prev_match->FirstTeam->name }}" data-toggle="tooltip" title="{{ $prev_match->FirstTeam->name }}">
								<div class="teaam-name">{{ $prev_match->FirstTeam->name }}</div>
							</div>
							<div class="single-side">
								<div class="red-color sin-middle">
									{{-- {{ $prev_match->goals()->where('team_id', $prev_match->FirstTeam->id)->count() }} : {{ $prev_match->goals()->where('team_id', $prev_match->SecondTeam->id)->count() }} --}}
									{{ $prev_match->goals_first_team.' : '.$prev_match->goals_second_team }}
								</div>
								<div class="the-two-teams">
									<span class="red-color"><a href="{{ route('match.details', $prev_match->id) }}">@lang('trans.details')</a></span>
								</div>
							</div>
							<div class="single-side team-l-wrapper">
								<img src="{{ getimg($prev_match->SecondTeam->image) }}" alt="{{ $prev_match->SecondTeam->name }}" data-toggle="tooltip" title="{{ $prev_match->SecondTeam->name }}">
								<div class="teaam-name">{{ $prev_match->SecondTeam->name }}</div>
							</div>
						</div>
					</div>															
					@endforeach
				
				</div>
			</div>



@endsection


@section('scripts')

<script>
		
			$(".nav.nav-tabs.radial-switch li a").on('click' , function(e){
				e.preventDefault();
				$(this).parents('li').removeClass("active");
				$('li.selected-tab').removeClass("selected-tab");
				$(this).parents('li').addClass("selected-tab");
				
			})
			$("#formation-tab").click(function(){
				$(".the-shown-taab").removeClass("the-shown-taab");
				$("#formation").addClass("the-shown-taab")
			});
				$("#statistics-tab").click(function(){
				$(".the-shown-taab").removeClass("the-shown-taab");
				$("#statistics").addClass("the-shown-taab")
			});
			
			
			$(document).ready(function(){
				var initHeight = 0; 
				var divHeight = $("#the-two-main-teams .single-side.team-l-wrapper").height();
			$("#the-two-main-teams .single-side.team-l-wrapper").each(function(){
				if($(this).height() >= initHeight){
					initHeight = $(this).height();
				}
			})
				$("#the-two-main-teams .single-side.team-l-wrapper").css('height' , initHeight)
			})
			
		</script>
		<script>
			$("#statistics-tab").click(function(){
				$(".single-statistics-row.calcuatable").each(function(){
					var rightValue = parseFloat($(this).find(".stati-num.rr-side").html());
					var leftValue = parseFloat($(this).find(".stati-num.ll-side").html());
					var totalValue = rightValue + leftValue;
					var rightPercentage = (rightValue / totalValue) * 100;
					var leftPercentage = (leftValue / totalValue) * 100;
					console.log(totalValue)
					console.log(rightPercentage)
					console.log(leftPercentage)
					var rightProgress = $(this).find(".team-percent.rr-side .custo-progress");
					rightProgress.css('width' , rightPercentage  + '%');
					var leftProgress = $(this).find(".team-percent.ll-side .custo-progress");
					leftProgress.css('width' , leftPercentage  + '%');
				})
			})
		</script>
		<!--        Lineup-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js"></script>
        <script type="text/javascript" src="{{ url('site') }}/js/lineup.js"></script>
@endsection