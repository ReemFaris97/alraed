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
					<h4 class="the-above-title"> Al-Raed</h4>
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
					 <form method="post" action="{{ url('post-desires') }}">@csrf
					<div class="form-group col-md-12">
					  <label for="name">الإسم رباعي</label>
					  <input type="text" name="name" class="form-control" id="name" required="">
					@error('name')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>

					<div class="form-group col-md-12">
					  <label for="nationality">الجنسية</label>
					  <input type="text" name="nationality" class="form-control" id="nationality" required="">
					@error('nationality')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>

					<div class="row flexy">
						<div class="form-group col-md-4">
					  <label for="birth_date">تاريخ الميلاد</label>
					  <input type="date" name="birth_date" class="form-control" id="birth_date">
					  @error('birth_date')
						  	<span style="color: red">{{ $message }}</span>
						@enderror
					</div>
					<div class="form-group col-md-4">
					  <label for="birth_area">مكان الميلاد</label>
					 <input type="text" name="birth_area" class="form-control" id="birth_area" required="">
					  @error('birth_area')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					<div class="form-group col-md-4">
					  <label for="live_area">مكان الإقامة حالياَ</label>
					  <input type="text" name="live_area" class="form-control" id="live_area" required="">
					  @error('live_area')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					</div>
					

					<div class="form-group col-md-12">
					  <label for="mob">الجوال</label>
					  <input type="text" name="phone" class="form-control" id="mob">
					  @error('phone')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					
					<div class="row flexy">
						<div class="form-group col-md-6">
					  <label for="student">هل انت طالب ؟</label>
					  <label><input type="radio" name="student" value="نعم" checked>نعم</label>
					  <label><input type="radio" name="student" value="لا">لا</label>
					  @error('student')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					<div class="form-group col-md-6">
					  <label for="student">هل لديك وظيفة؟</label>
					  <label><input type="radio" name="job" value="نعم" checked>نعم</label>
					  <label><input type="radio" name="job" value="لا">لا</label>
					  	@error('job')
					  		<span style="color: red">{{ $message }}</span>
						@enderror
					</div>
					
					</div>
					
					<div class="form-group col-md-12">
					  <label for="game">حدد اسم اللعبة المرغوب التسجيل به</label>
					  <select name="game[]" id="game" multiple="">
					  	<option value="كرة القدم">كرة القدم</option>
					  	<option value="كرة السلة">كرة السلة</option>
					  	<option value="كرة الطائرة">كرة الطائرة</option>
					  	<option value="كرة اليد">كرة اليد</option>
					  	<option value="الملاكمة">الملاكمة</option>
					  	<option value="المصارعة">المصارعة</option>
					  	<option value="الكارتيه">الكارتيه</option>
					  	<option value="السباحة">السباحة</option>
					  	<option value="تنس الطاولة">تنس الطاولة</option>
					  	<option value="ألعاب إلكترونية">ألعاب إلكترونية</option>
					  	<option value="رفع اﻻثقال">رفع اﻻثقال</option>
					  </select>
					  @error('goal')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>

					<div class="row flexy">
						<div class="form-group col-md-6">
					  <label for="student">هل لديك وسيلة نقل ؟</label>
					  <label><input type="radio" name="transport" value="نعم" checked>نعم</label>
					  <label><input type="radio" name="transport" value="لا">لا</label>
					  @error('transport')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					<div class="form-group col-md-6">
					  <label for="nationality">هل انت مسجل في نادِ آخر؟</label>
					  <label><input type="radio" name="club" value="نعم" checked>نعم</label>
					  <label><input type="radio" name="club" value="لا">لا</label>
					  	@error('club')
					  		<span style="color: red">{{ $message }}</span>
						@enderror
					</div>
					
					</div>

					<div class="form-group col-md-12">
						<label for="opinion">الرآي</label>
						<textarea name="opinion" class="form-control" rows="5"></textarea>
					</div>

					<div class="row">
						<div class="col-md-12 form-btn-wrapp">
							<button type="submit" class="first-site-btn">تسجيل</button>
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