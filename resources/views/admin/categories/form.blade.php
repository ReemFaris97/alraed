@include('admin.common.errors')
@include('admin.common.alert')

<div class="form-group form-float">
  <label class="form-label">الاسم بالعربى</label>
  <div class="form-line">
    {!! Form::text("ar_name",null,['class'=>'form-control','placeholder'=>'اكتب اسم القسم'])!!}
  </div>
</div>

<div class="form-group form-float">
    <label class="form-label">الاسم بالانجليزية</label>
    <div class="form-line">
        {!! Form::text("en_name",null,['class'=>'form-control','placeholder'=>'write category name '])!!}
    </div>
</div>

<button class="btn btn-primary waves-effect" type="submit">حفظ</button>
