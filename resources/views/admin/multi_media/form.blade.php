
@include('admin.common.errors')
@include('admin.common.alert')


<div class="form-group form-float">
    <label class="form-label">عنوان الوسائط بالعربى</label>
    <div class="form-line">
        {!! Form::text("ar_title",null,['class'=>'form-control','placeholder'=>'اكتب عنوان الوسائط....'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">عنوان الوسائط بالانجليزية</label>
    <div class="form-line">
        {!! Form::text("en_title",null,['class'=>'form-control','placeholder'=>'write multimedia title... '])!!}
    </div>
</div>

@if (isset($item->image))
    <div class="form-group form-float">
        <label class="form-label">صورة الوسائط الحالية  :</label>
        <div class="form-line">
            <img class="img-preview" src="{{getimg($item->image)}}" style="width: 50px; height: 50px">
        </div>
    </div>
@endif

<div class="form-group form-float">
    <label class="form-label">اضافة صورة الوسائط  </label>
    <div class="form-line">
        {!! Form::file("image",null,['class'=>'form-control'])!!}
    </div>
</div>


<div class="form-group form-float">
    <label class="form-label">محتوى الوسائط بالعربى</label>
    <div class="form-line">
        {!! Form::textarea("ar_description",null,['class'=>'form-control','placeholder'=>'اكتب محتوى الوسائط...'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">محتوى الوسائط بالانجليزية</label>
    <div class="form-line">
        {!! Form::textarea("en_description",null,['class'=>'form-control','placeholder'=>'write multimedia  contenent ...'])!!}
    </div>
</div>

<button class="btn btn-primary waves-effect" type="submit">حفظ</button>
