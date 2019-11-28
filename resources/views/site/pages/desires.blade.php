@extends('site.layouts.app')
@section('styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.11/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="{{asset('site/css/forma.css')}}">
		<script src="{{ url('site') }}/js/modernizr.custom.js"></script>
@endsection
@section('content')
<!--     *************************   Beginnig of ٍSection ********************-->
		<div class="container single-section-padding">
				<div class="whole-section-title-wrapper">
					<h4 class="the-above-title"> @lang('trans.alraed') </h4>
					<h3 class="the-section-title">
						<span class="wow animated">D</span>
						<span class="wow animated">e</span>
						<span class="wow animated">s</span>
						<span class="wow animated">i</span>
						<span class="wow animated">r</span>
						<span class="wow animated">e</span>
						<span class="wow animated">s</span>
					</h3>
				</div>
		</div><!-- /container -->
		<section>
			<div class="volunteer-form-wrapper container-fluid">
				@if(session()->has('success'))
				<div class="alert alert-success">
					<strong>{{ session()->get('success') }}</strong>
				</div>
				@endif
				<div class="container vol-form">
					@if(app()->getLocale() == 'en')
					<a href="{{ url('desires/ar') }}" title="عربي" class="btn btn-default pull-left">عربي</a>
					@else
					<a href="{{ url('desires/en') }}" title="EN" class="btn btn-default pull-left">EN</a>
					@endif
				 <div class="the-all-form-title">
						 <span>
							@lang('trans.form_wish')
						 </span>
					</div>
					 <form method="post" action="{{ url('post-desires') }}">@csrf
					<div class="form-group col-md-12">
					  <label for="name">@lang('trans.triple_name')</label>
					  <input type="text" name="name" class="form-control" id="name" required="">
					@error('name')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>

					<div class="form-group col-md-12">
					  <label for="nationality">@lang('trans.nationality')</label>
					  <input type="text" name="nationality" class="form-control" id="nationality" required="">
					@error('nationality')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>

					<div class="row flexy">
						<div class="form-group col-md-4">
					  <label for="birth_date">@lang('trans.birth_date')</label>
					  <input type="date" name="birth_date" class="form-control" id="birth_date">
					  @error('birth_date')
						  	<span style="color: red">{{ $message }}</span>
						@enderror
					</div>
					<div class="form-group col-md-4">
					  <label for="birth_area">@lang('trans.place_birth')</label>
					 <input type="text" name="birth_area" class="form-control" id="birth_area" required="">
					  @error('birth_area')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					<div class="form-group col-md-4">
					  <label for="live_area">@lang('trans.place_residence')</label>
					  <input type="text" name="live_area" class="form-control" id="live_area" required="">
					  @error('live_area')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					</div>
					

					<div class="form-group col-md-12">
					  <label for="mob">@lang('trans.phone')</label>
					  <input type="text" name="phone" class="form-control" id="mob">
					  @error('phone')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					
					<div class="row flexy">
						<div class="form-group col-md-6">
					  <label for="student">@lang('trans.you_student')</label>
					  <label><input type="radio" name="student" value="@lang('trans.yes')" checked>@lang('trans.yes')</label>
					  <label><input type="radio" name="student" value="@lang('trans.no')">@lang('trans.no')</label>
					  @error('student')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					<div class="form-group col-md-6">
					  <label for="student">@lang('trans.have_job')</label>
					  <label><input type="radio" name="job" value="@lang('trans.yes')" checked>@lang('trans.yes')</label>
					  <label><input type="radio" name="job" value="@lang('trans.no')">@lang('trans.no')</label>
					  	@error('job')
					  		<span style="color: red">{{ $message }}</span>
						@enderror
					</div>
					
					</div>
					
					<div class="form-group col-md-12">
					  <label for="game">@lang('trans.select_game')</label>
					  <select name="game[]" id="game" multiple="" title="{{ __('trans.choose_game') }}">
					  	<option value="كرة القدم" selected="">@lang('trans.football')</option>
					  	<option value="@lang('trans.basketball')">@lang('trans.basketball')</option>
					  	<option value="@lang('trans.volleyball')">@lang('trans.volleyball')</option>
					  	<option value="@lang('trans.handball')">@lang('trans.handball')</option>
					  	<option value="@lang('trans.boxing')">@lang('trans.boxing')</option>
					  	<option value="@lang('trans.wrestling')">@lang('trans.Wrestling')</option>
					  	<option value="@lang('trans.karate')">@lang('trans.karate')</option>
					  	<option value="@lang('trans.swimming')">@lang('trans.swimming')</option>
					  	<option value="@lang('trans.tennis')">@lang('trans.tennis')</option>
					  	<option value="@lang('trans.video_games')">@lang('trans.video_games')</option>
					  	<option value="@lang('trans.weightlifting')">@lang('trans.weightlifting')</option>
					  </select>
					  @error('goal')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>

					<div class="row flexy">
						<div class="form-group col-md-6">
					  <label for="student">@lang('trans.have_transport')</label>
					  <label><input type="radio" name="transport" value="@lang('trans.yes')" checked>@lang('trans.yes')</label>
					  <label><input type="radio" name="transport" value="@lang('trans.no')">@lang('trans.no')</label>
					  @error('transport')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					<div class="form-group col-md-6">
					  <label for="nationality">@lang('trans.register_with_another_club')</label>
					  <label><input type="radio" name="club" value="@lang('trans.yes')" checked>@lang('trans.yes')</label>
					  <label><input type="radio" name="club" value="@lang('trans.no')">@lang('trans.no')</label>
					  	@error('club')
					  		<span style="color: red">{{ $message }}</span>
						@enderror
					</div>
					
					</div>

					<div class="form-group col-md-12">
						<label for="opinion">@lang('trans.feedback')</label>
						<textarea name="opinion" class="form-control" rows="5"></textarea>
					</div>

					<div class="row">
						<div class="col-md-12 form-btn-wrapp">
							<button type="submit" class="first-site-btn">@lang('trans.register')</button>
						</div>
					</div>
				  </form>
				</div>
			</div>
		</section>
<!--     *************************  End      of ٍSection ********************-->
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.11/js/bootstrap-select.min.js"></script>
<script>
	$(document).ready(function(){
		$('select').selectpicker();
	})
</script>
@endsection