
@include('admin.common.errors')
@include('admin.common.alert')


<div class="form-group form-float">
    <label class="form-label">اسم العضو بالعربى</label>
    <div class="form-line">
        {!! Form::text("ar_name",null,['class'=>'form-control','placeholder'=>'اكتب اسم العضو....'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">اسم العضو بالانجليزية</label>
    <div class="form-line">
        {!! Form::text("en_name",null,['class'=>'form-control','placeholder'=>'write member name... '])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">المسمى الوظيفي الخاص  بالعضو بالعربى</label>
    <div class="form-line">
        {!! Form::text("ar_job_title",null,['class'=>'form-control','placeholder'=>'اكتب المسمى الوظيفي الخاص  بالعضو ....'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">المسمى الوظيفي الخاص  بالعضو  بالانجليزية</label>
    <div class="form-line">
        {!! Form::text("en_job_title",null,['class'=>'form-control','placeholder'=>'write member job title... '])!!}
    </div>
</div>

@if (isset($item->image))
    <div class="form-group form-float">
        <label class="form-label">صورة العضو الحالية  :</label>
        <div class="form-line">
            <img class="img-preview" src="{{getimg($item->image)}}" style="width: 50px; height: 50px">
        </div>
    </div>
@endif

<div class="form-group form-float">
    <label class="form-label">اضافة صورة جديدة للعضو </label>
    <div class="form-line">
        {!! Form::file("image",null,['class'=>'form-control'])!!}
    </div>
</div>


<div class="form-group form-float">
    <label class="form-label">تفاصيل خاصة بالعضو بالعربى</label>
    <div class="form-line">
        {!! Form::textarea("ar_description",null,['class'=>'form-control','placeholder'=>'اكتب تفاصيل خاصة بالعضو...'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">تفاصيل خاصة بالعضو بالانجليزية</label>
    <div class="form-line">
        {!! Form::textarea("en_description",null,['class'=>'form-control','placeholder'=>'write member  details ...'])!!}
    </div>
</div>

<button class="btn btn-primary waves-effect" type="submit">حفظ</button>
