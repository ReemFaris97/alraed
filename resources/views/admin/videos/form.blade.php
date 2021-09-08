@include('admin.common.errors')
@include('admin.common.alert')

<div class="form-group form-float">
    <label class="form-label">الاسم بالعربى</label>
    <div class="form-line">
        {!! Form::text("name",null,['class'=>'form-control'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">كود الفيديو</label>
    <div class="form-line">
        {!! Form::text("code",null,['class'=>'form-control'])!!}
    </div>
</div>

<button class="btn btn-primary waves-effect" type="submit">حفظ</button>
