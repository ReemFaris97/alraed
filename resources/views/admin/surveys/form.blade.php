@include('admin.common.errors')
@include('admin.common.alert')

<div class="form-group form-float">
  <label class="form-label">الاسم بالعربى</label>
  <div class="form-line">
    {!! Form::text("name_ar",null,['class'=>'form-control','placeholder'=>'اكتب اسم الاستبيان هنا ..'])!!}
  </div>
</div>

<div class="form-group form-float">
    <label class="form-label">الاسم بالانجليزية</label>
    <div class="form-line">
        {!! Form::text("name_en",null,['class'=>'form-control','placeholder'=>'write survey name '])!!}
    </div>
</div>

<div class="form-group ">
    <label class="form-label">الرابط</label>
    <div class="form-line">
        {!! Form::text("url",null,['class'=>'form-control','placeholder'=>'الرابط '])!!}
    </div>
</div>

<button class="btn btn-primary waves-effect" type="submit">حفظ</button>
