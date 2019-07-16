
@include('admin.common.errors')
@include('admin.common.alert')


<div class="form-group form-float">
    <label class="form-label">اسم البطولة بالعربى</label>
    <div class="form-line">
        {!! Form::text("ar_title",null,['class'=>'form-control','placeholder'=>'اكتب اسم البطولة....'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">اسم البطولة بالانجليزية</label>
    <div class="form-line">
        {!! Form::text("en_title",null,['class'=>'form-control','placeholder'=>'write champion name... '])!!}
    </div>
</div>

@if (isset($item->image))
    <div class="form-group form-float">
        <label class="form-label">صورة البطولة الحالية  :</label>
        <div class="form-line">
            <img class="img-preview" src="{{getimg($item->image)}}" style="width: 50px; height: 50px">
        </div>
    </div>
@endif

<div class="form-group form-float">
    <label class="form-label">اضافة صورة البطولة  </label>
    <div class="form-line">
        {!! Form::file("image",null,['class'=>'form-control'])!!}
    </div>
</div>


<button class="btn btn-primary waves-effect" type="submit">حفظ</button>
