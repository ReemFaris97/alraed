@extends('site.layouts.app')
@section('title' , __('trans.volunteer') )
@section('styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.11/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="{{asset('site/css/forma.css')}}">
		<script src="{{ url('site') }}/js/modernizr.custom.js"></script>
			<meta name="msapplication-TileColor" content="#B7202B">
	<meta name="theme-color" content="#B7202B">
@endsection
@section('content')
<!--     *************************   Beginnig of ٍSection ********************-->
		<div class="container single-section-padding">
				<div class="whole-section-title-wrapper">
					<h4 class="the-above-title"> @lang('trans.alraed')</h4>
					<h3 class="the-section-title">
						<span class="wow animated">V</span>
						<span class="wow animated">o</span>
						<span class="wow animated">l</span>
						<span class="wow animated">u</span>
						<span class="wow animated">n</span>
						<span class="wow animated">t</span>
						<span class="wow animated">e</span>
						<span class="wow animated">e</span>
						<span class="wow animated">r</span>
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
					<a href="{{ url('volunteer/ar') }}" title="عربي" class="btn btn-default pull-left">عربي</a>
					@else
					<a href="{{ url('volunteer/en') }}" title="EN" class="btn btn-default pull-left">EN</a>
					@endif
				     <div class="the-all-form-title">
						 <span>
							@lang('trans.register_volunteer')
						 </span>
					</div>
					 <form method="post" action="{{ url('post-volunteer') }}">@csrf
					<div class="form-group col-md-12">
					  <label for="name">@lang('trans.name')</label>
					  <input type="text" name="name" class="form-control" id="name" required="">
					@error('name')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					<div class="row flexy">
						<div class="form-group col-md-4">
					  <label for="age">@lang('trans.age')</label>
					  <input type="text" name="age" class="form-control" id="age">
					  @error('age')
						  	<span style="color: red">{{ $message }}</span>
						@enderror
					</div>
					<div class="form-group col-md-4">
					  <label for="gender">@lang('trans.gender')</label>
					  <select name="gender" name="gender" id="gender">
					  	<option value="@lang('trans.male')">@lang('trans.male')</option>
					  	<option value="@lang('trans.female')">@lang('trans.female')</option>
					  </select>
					  @error('gender')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					<div class="form-group col-md-4">
					  <label for="nationality">@lang('trans.nationality')</label>
					  <select name="nationality" id="nationality">
					  	@foreach(getAllCountries() as $key => $country)
					  	<option value="{{ $country }}">{{ $country }}</option>
					  	@endforeach
					  </select>
					  @error('nationality')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					</div>
					<div class="form-group col-md-12">
					  <label for="study">@lang('trans.last_qualification')</label>
					  <select name="qualification" id="study">
					  	<option value="@lang('trans.less_secondary')">@lang('trans.less_secondary')</option>
					  	<option value="@lang('trans.secondary')">@lang('trans.secondary')</option>
					  	<option value="@lang('trans.ba')">@lang('trans.ba')</option>
					  	<option value="@lang('trans.high_diploma')">@lang('trans.high_diploma')</option>
					  	<option value="@lang('trans.master')">@lang('trans.master')</option>
					  	<option value="@lang('trans.phd')">@lang('trans.phd')</option>
					  	<option value="@lang('trans.other')">@lang('trans.other')</option>
					  </select>
					  @error('qualification')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					<div class="form-group col-md-12 other-qual">
					  <label>@lang('trans.last_qualification')</label>
					  <input type="text" name="other_qualification" class="form-control">
					  @error('other_qualification')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>


					<div class="form-group col-md-6">
					  <label for="mob">@lang('trans.phone')</label>
					  <input type="text" name="phone" class="form-control" id="mob">
					  @error('phone')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					<div class="form-group col-md-6">
					  <label for="mail">@lang('trans.email')</label>
					  <input type="email" name="email" class="form-control" id="mail">
					  @error('email')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					<div class="row flexy">
						<div class="form-group col-md-4">
					  <label for="work_type">@lang('trans.type_volunteer_work')</label>
					  <select name="work_type" id="work_type">
					  	<option value="@lang('trans.sporty')">@lang('trans.sporty')</option>
					  	<option value="@lang('trans.social')">@lang('trans.social')</option>
					  	<option value="@lang('trans.cultural')">@lang('trans.cultural')</option>
					  	<option value="@lang('trans.healthy')">@lang('trans.healthy')</option>
					  	<option value="@lang('trans.disasters')">@lang('trans.disasters')</option>
					  	<option value="@lang('trans.other')">@lang('trans.other')</option>
					  </select>
					  @error('work_type')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					<div class="form-group col-md-4 other-work">
					  <label>@lang('trans.another_activity')</label>
					  <input type="text" name="other_work_type" class="form-control">
					  @error('other_work_type')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>


					<div class="form-group col-md-4">
					  <label for="nationality">@lang('trans.type_of_participation')</label>
					  <select name="type" id="nationality">
					  	<option value="@lang('trans.leader')">@lang('trans.leader')</option>
					  	<option value="@lang('trans.member')">@lang('trans.member')</option>
					  </select>
					  	@error('type')
						  	<span style="color: red">{{ $message }}</span>
						@enderror
					</div>
					<div class="form-group col-md-4">
					  <label for="nationality">@lang('trans.volunteer_times')</label>
					  <select name="volunteer_time" id="nationality">
					  	<option value="@lang('trans.open')">@lang('trans.open')</option>
					  	<option value="@lang('trans.club_events_days')">@lang('trans.club_events_days')</option>
					  	<option value="@lang('trans.summer_vacation_days')">@lang('trans.summer_vacation_days')</option>
					  	<option value="@lang('trans.weekend_days')">@lang('trans.weekend_days')</option>
					  	<option value="@lang('trans.days_of_seasons')">@lang('trans.days_of_seasons')</option>
					  	<option value="@lang('trans.public_events')">@lang('trans.public_events')</option>

					  </select>
					  @error('volunteer_time')
					  	<span style="color: red">{{ $message }}</span>
					  @enderror
					</div>
					</div>
					<div class="form-group col-md-12">
					  <label for="nationality">@lang('trans.goal_participating')</label>
					  <select name="goal" id="nationality">
					  	<option value="@lang('trans.serve_club')">@lang('trans.serve_club')</option>
					  	<option value="@lang('trans.personal_relation')">@lang('trans.personal_relation')</option>
					  	<option value="@lang('trans.develop_skills')">@lang('trans.develop_skills')</option>
					  	<option value="@lang('trans.learn_skill')">@lang('trans.learn_skill')</option>
					  	<option value="@lang('trans.make_money')">@lang('trans.make_money')</option>
					  	<option value="@lang('trans.job_exp')">@lang('trans.job_exp')</option>
					  	<option value="@lang('trans.do_good')">@lang('trans.do_good')</option>
					  	<option value="@lang('trans.social_work')">@lang('trans.social_work')</option>
					  </select>
					  @error('goal')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					<div class="row">
						<div class="col-md-12 form-btn-wrapp">
							<button type="submit" class="first-site-btn">@lang('trans.send')</button>
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
		$('.container-fluid.the-footer-section , header').remove();
	$(document).ready(function(){
		$('select').selectpicker();
	})
</script>

<script>
	$(function() {
		$('.other-qual').hide();
		$('#study').change(function () {
			let value = $(this).val();
			if (value == 'other') {
				$('.other-qual').show();
			} else {
				$('.other-qual').hide();
			}
		});

		$('.other-work').hide();
		$('#work_type').change(function () {
			let value = $(this).val();
			if (value == 'other') {
				$('.other-work').show();
			} else {
				$('.other-work').hide();
			}
		});
	})
</script>

@endsection
