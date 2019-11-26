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
					 <form method="post" action="{{ url('post-volunteer') }}">@csrf
					<div class="form-group col-md-12">
					  <label for="name">الإسم</label>
					  <input type="text" name="name" class="form-control" id="name" required="">
					@error('name')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					<div class="row flexy">
						<div class="form-group col-md-4">
					  <label for="age">العمر</label>
					  <input type="text" name="age" class="form-control" id="age">
					  @error('age')
						  	<span style="color: red">{{ $message }}</span>
						@enderror
					</div>
					<div class="form-group col-md-4">
					  <label for="gender">الجنس</label>
					  <select name="gender" name="gender" id="gender">
					  	<option value="ذكر">ذكر</option>
					  	<option value="أنثي">أنثى</option>
					  </select>
					  @error('gender')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					<div class="form-group col-md-4">
					  <label for="nationality">الجنسية</label>
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
					  <label for="study">أخر مؤهل دراسي</label>
					  <select name="qualification" id="study">
					  	<option value="أقل ثانوي">أقل ثانوي</option>
					  	<option value="ثانوي">ثانوي</option>
					  	<option value="بكالوريوس">بكالوريوس</option>
					  	<option value="ماجستير">ماجستير</option>
					  	<option value="دكتوراه">دكتوراه</option>
					  	<option value="other">آخرى</option>
					  </select>
					  @error('qualification')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					<div class="form-group col-md-12 other-qual">
					  <label>آخر مؤهل دراسي</label>
					  <input type="text" name="other_qualification" class="form-control">
					  @error('other_qualification')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>


					<div class="form-group col-md-6">
					  <label for="mob">الجوال</label>
					  <input type="text" name="phone" class="form-control" id="mob">
					  @error('phone')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					<div class="form-group col-md-6">
					  <label for="mail">الإيميل</label>
					  <input type="email" name="email" class="form-control" id="mail">
					  @error('email')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					<div class="row flexy">
						<div class="form-group col-md-4">
					  <label for="work_type">نوع العمل التطوعي</label>
					  <select name="work_type" id="work_type">
					  	<option value="رياضي">رياضي</option>
					  	<option value="اجتماعي">اجتماعي</option>
					  	<option value="ثقافي">ثقافي</option>
					  	<option value="صحي">صحي</option>
					  	<option value="الكوراث والطوارئ">الكوراث والطوارئ</option>
					  	<option value="other">نشاط آخر</option>
					  </select>
					  @error('work_type')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					<div class="form-group col-md-4 other-work">
					  <label>نشاط آخر</label>
					  <input type="text" name="other_work_type" class="form-control">
					  @error('other_work_type')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>


					<div class="form-group col-md-4">
					  <label for="nationality">نوع  المشاركة</label>
					  <select name="type" id="nationality">
					  	<option value="قائد">قائد</option>
					  	<option value="فرد">فرد</option>
					  </select>
					  	@error('type')
						  	<span style="color: red">{{ $message }}</span>
						@enderror
					</div>
					<div class="form-group col-md-4">
					  <label for="nationality">أوقات التطوع</label>
					  <select name="volunteer_time" id="nationality">
					  	<option value="مفتوح">مفتوح</option>
					  	<option value="مناسبات النادي">مناسبات النادي</option>
					  	<option value="ايام الاجازات الصيفية">ايام الاجازات الصيفية</option>
					  	<option value="ايام اجازة نهاية الاسبوع">ايام اجازة نهاية الاسبوع</option>
					  	<option value="ايام المواسم">ايام المواسم</option>
					  	<option value="المناسبات العامة">المناسبات العامة</option>
					  	<option value="ايام مباريات النادي">ايام مباريات النادي</option>
					  </select>
					  @error('volunteer_time')
					  	<span style="color: red">{{ $message }}</span>
					  @enderror
					</div>
					</div>
					<div class="form-group col-md-12">
					  <label for="nationality">ماهو الهدف من المشاركة بالاعمال التطوعية بالنادي</label>
					  <select name="goal" id="nationality">
					  	<option value="رغبة في خدمة نادي الرائد">رغبة في خدمة نادي الرائد </option>
					  	<option value="بناء علاقات اشخصية">بناء علاقات شخصية</option>
					  	<option value="لتطوير مهاراتي">لتطوير مهاراتي </option>
					  	<option value="لتعلم مهارة جديدة">لتعلم مهارة جديدة</option>
					  	<option value="لهدف الإحتساب والأجر">لهدف الإحتساب والأجر</option>
					  	<option value="للحصول على خبرة وظيفية">للحصول على خبرة وظيفية</option>
					  	<option value="لإستغلال تخصصي بعمل الخير">لإستغلال تخصصي بعمل الخير</option>
					  	<option value="لإستغلال خبرتي بالأعمال التطوعية والإجتماعية">لإستغلال خبرتي بالأعمال التطوعية والإجتماعية</option>
					  </select>
					  @error('goal')
					  	<span style="color: red">{{ $message }}</span>
					@enderror
					</div>
					<div class="row">
						<div class="col-md-12 form-btn-wrapp">
							<button type="submit" class="first-site-btn">إرسال</button>
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