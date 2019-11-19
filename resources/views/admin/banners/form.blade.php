
@include('admin.common.errors')
@include('admin.common.alert')


<div class="form-group form-float">
    <label class="form-label">عنوان البنر بالعربى</label>
    <div class="form-line">
        {!! Form::text("ar_title",null,['class'=>'form-control','placeholder'=>'اكتب عنوان البنر....'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">عنوان البنر بالانجليزية</label>
    <div class="form-line">
        {!! Form::text("en_title",null,['class'=>'form-control','placeholder'=>'write banner title... '])!!}
    </div>
</div>

@if (isset($item->image))
    <div class="form-group form-float">
        <label class="form-label">صورة البنر الحالية  :</label>
        <div class="form-line">
            <img class="img-preview" src="{{getimg($item->image)}}" style="width: 50px; height: 50px">
        </div>
    </div>
@endif

<div class="form-group form-float">
    <label class="form-label">اضافة صورة البنر </label>
    <div class="form-line">
        {!! Form::file("image",null,['class'=>'form-control'])!!}
    </div>
</div>


<div class="form-group form-float">
    <label class="form-label">محتوى البنر بالعربى</label>
    <div class="form-line">
        {!! Form::textarea("ar_description",null,['class'=>'form-control','placeholder'=>'اكتب محتوى البنر...'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">محتوى البنر بالانجليزية</label>
    <div class="form-line">
        {!! Form::textarea("en_description",null,['class'=>'form-control','placeholder'=>'write banner  contenent ...'])!!}
    </div>
</div>

<button class="btn btn-primary waves-effect" type="submit">حفظ</button>
