@include('admin.common.alert')
@include('admin.common.errors')


<div class="form-group form-float">
  <label class="form-label">الإسم</label>
  <div class="form-line">
    {!! Form::text("name",null,['class'=>'form-control','placeholder'=>'  الاسم  '])!!}
  </div>
</div>

<div class="form-group form-float">
  <label class="form-label">الإيميل</label>
  {!! Form::email("email",null,['class'=>'form-control','placeholder'=>'  الايميل '])!!}
  <div class="form-line">
  </div>
</div>


<div class="form-group form-float">
    <label >الجوال </label>
    {!! Form::text("phone",null,['class'=>'form-control','placeholder'=>'  الجوال  '])!!}
    <div class="form-line">
    </div>
</div>

@if (isset($item->image))
    <div class="form-group form-float">
        <label class="form-label">الصورة  الحالية  :</label>
        <div class="form-line">
            <img class="img-preview" src="{{getimg($item->image)}}" style="height: 100px; width: 100px">
        </div>
    </div>
@endif

<div class="form-group form-float">
    <label class="form-label">الصوره </label>
    <div class="form-line">
        {!! Form::file("image",null,['class'=>'form-control'])!!}
    </div>
</div>

<div class="form-group form-float">
  <label class="form-label">كلمة المرور</label>
    {!! Form::input('password','password',null,['class'=>'form-control','placeholder'=>'كلمة المرور']) !!}
    <div class="form-line">
  </div>
</div>

<div class="form-group form-float">
  <label class="form-label">تكرار كلمة المرور</label>
    {!! Form::input('password','password_confirmation',null,['class'=>'form-control','placeholder'=>'تكرار كلمة المرور']) !!}

    <div class="form-line">
  </div>
</div>

@if (isset($item))
    <div class="form-group">
        {!! Form::radio("is_active",1,null,['class'=>'with-gap','id'=>'radio_3']) !!}
        <label for="radio_3"> تفعيل </label>

        {!! Form::radio("is_active",0,null,['class'=>'with-gap','id'=>'radio_4']) !!}
        <label for="radio_4" >عدم تفعيل</label>
    </div>
@endif

{!! Form::input('hidden','role','assistant',['class'=>'form-control']) !!}

<button class="btn btn-primary waves-effect" type="submit">حفظ</button>
