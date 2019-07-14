@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif


<div class="form-group form-float">
  <label class="form-label">الاسم بالعربى</label>
  <div class="form-line">
    {!! Form::text("ar_name",null,['class'=>'form-control','placeholder'=>'  الاسم بالعربى  '])!!}
  </div>
</div>

<div class="form-group form-float">
    <label class="form-label">الاسم بالانجليزية</label>
    <div class="form-line">
        {!! Form::text("en_name",null,['class'=>'form-control','placeholder'=>'  الاسم بالانجليزية  '])!!}
    </div>
</div>

@if (isset($category->image))
    <div class="form-group form-float">
        <label class="form-label">الصورة  الحالية  :</label>
        <div class="form-line">
            <img class="img-preview" src="{{getimg($category->image)}}" style="height: 100px; width: 100px">
        </div>
    </div>
@endif

<div class="form-group form-float">
    <label class="form-label">صورة القسم</label>
    <div class="form-line">
        {!! Form::file("image",null,['class'=>'form-control'])!!}
    </div>
</div>



<button class="btn btn-primary waves-effect" type="submit">حفظ</button>
