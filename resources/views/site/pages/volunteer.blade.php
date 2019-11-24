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
				<div class="container vol-form">
					 <form>
					<div class="form-group col-md-12">
					  <label for="name">الإسم</label>
					  <input type="text" class="form-control" id="name">
					</div>
					<div class="row flexy">
						<div class="form-group col-md-4">
					  <label for="age">العمر</label>
					  <input type="text" class="form-control" id="age">
					</div>
					<div class="form-group col-md-4">
					  <label for="gender">الجنس</label>
					  <select name="gender" id="gender">
					  	<option value="1">ذكر</option>
					  	<option value="2">أنثى</option>
					  </select>
					</div>
					<div class="form-group col-md-4">
					  <label for="nationality">الجنسية</label>
					  <select name="nationality" id="nationality">
					  	<option value="1">السعودية</option>
					  	<option value="2">مصر</option>
					  	<option value="3">عمان</option>
					  	<option value="4">البحرين</option>
					  	<option value="5">الكويت</option>
					  	<option value="6">الإمارات</option>
					  </select>
					</div>
					</div>
					<div class="form-group col-md-12">
					  <label for="study">أخر مؤهل دراسي</label>
					  <input type="text" class="form-control" id="study">
					</div>
					<div class="form-group col-md-6">
					  <label for="mob">الجوال</label>
					  <input type="text" class="form-control" id="mob">
					</div>
					<div class="form-group col-md-6">
					  <label for="mail">الإيميل</label>
					  <input type="email" class="form-control" id="mail">
					</div>
					<div class="row flexy">
						<div class="form-group col-md-4">
					  <label for="nationality">نوع العمل التطوعي</label>
					  <select name="nationality" id="nationality">
					  	<option value="1">نشاطي</option>
					  	<option value="2">خيري</option>
					  	<option value="3">رياضي</option>
					  	<option value="4">نشاط اخر</option>
					  </select>
					</div>
					<div class="form-group col-md-4">
					  <label for="nationality">نوع  المشاركة</label>
					  <select name="nationality" id="nationality">
					  	<option value="1">قائد</option>
					  	<option value="2">فرد</option>
					  </select>
					</div>
					<div class="form-group col-md-4">
					  <label for="nationality">أوقات التطوع</label>
					  <select name="nationality" id="nationality">
					  	<option value="1">مفتوح</option>
					  	<option value="2">ايام الجازات الصيفية</option>
					  	<option value="3">ايام المواسم</option>
					  	<option value="4">المناسبات العامة</option>
					  	<option value="5">اايام مباريات النادي</option>
					  </select>
					</div>
					</div>
					<div class="form-group col-md-12">
					  <label for="nationality">ماهو الهدف من المشاركة بالعمال التطوعية بالنادي</label>
					  <select name="nationality" id="nationality">
					  	<option value="1">رغبة في خدمة نادي الرائد </option>
					  	<option value="2">بناء علاقات اشخصية</option>
					  	<option value="3">لتطوير مهاراتي </option>
					  	<option value="4">لتعلم مهارة جديدة</option>
					  	<option value="5">لهدف الحتساب والجر</option>
					  	<option value="6">للحصول على خبرة وظيفية</option>
					  	<option value="7">لستغلل تخصصي بعمل الخير</option>
					  	<option value="8">لستغلل خبرتي بالعمال  التطوعية والجتماعية</option>
					  </select>
					</div>
					<div class="row">
						<div class="col-md-12 form-btn-wrapp">
							<button type="submit" class="first-site-btn">تقدم لدينا</button>
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