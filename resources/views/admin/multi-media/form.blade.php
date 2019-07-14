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
    <label class="form-label">الاسم بالعربيه </label>
    <div class="form-line">
        {!! Form::text("ar_name",null,['class'=>'form-control','placeholder'=>' اكتب الاسم هنا  '])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">الاسم بالانجليزيه </label>
    <div class="form-line">
        {!! Form::text("en_name",null,['class'=>'form-control','placeholder'=>' اكتب الاسم هنا  '])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">الوصف بالعربيه </label>
    <div class="form-line">
        {!! Form::text("ar_description",null,['class'=>'form-control','placeholder'=>' اكتب الوصف هنا  '])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">الوصف بالانجليزيه  </label>
    <div class="form-line">
        {!! Form::text("en_description",null,['class'=>'form-control','placeholder'=>' اكتب الوصف هنا  '])!!}
    </div>
</div>

@if (isset($item->image))
<div class="form-group form-float">
    <label class="form-label">الصورة  الحالية  :</label>
    <div class="form-line">
        <img class="img-preview" src="{{getimg($item->image)}}">
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
    <label class="form-label">لينك الفيديو</label>
    <div class="form-line">
        {!! Form::text("video",null,['class'=>'form-control '])!!}
    </div>
</div>

<button class="btn btn-primary waves-effect" type="submit">حفظ</button>
