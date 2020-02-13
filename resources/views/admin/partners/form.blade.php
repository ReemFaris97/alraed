
@include('admin.common.errors')
@include('admin.common.alert')


<div class="form-group form-float">
    <label class="form-label">اسم الراعي بالعربى</label>
    <div class="form-line">
        {!! Form::text("ar_name",null,['class'=>'form-control','placeholder'=>'اكتب اسم الراعي....'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">اسم الراعي بالانجليزية</label>
    <div class="form-line">
        {!! Form::text("en_name",null,['class'=>'form-control','placeholder'=>'write Sponsor name... '])!!}
    </div>
</div>

@if (isset($item->image))
    <div class="form-group form-float">
        <label class="form-label">صورة الراعي الحالية  :</label>
        <div class="form-line">
            <img class="img-preview" src="{{getimg($item->image)}}" style="width: 50px; height: 50px">
        </div>
    </div>
@endif

<div class="form-group form-float">
    <label class="form-label">اضافة صورة الراعي </label>
    <div class="form-line">
        {!! Form::file("image",null,['class'=>'form-control'])!!}
    </div>
</div>


<div class="form-group form-float">
    <label class="form-label">رابط الراعي إن وٌجد</label>
    <div class="form-line">
        {!! Form::url("url",null,['class'=>'form-control','placeholder'=>'اضف رابط الراعي هنا...'])!!}
    </div>
</div>


<button class="btn btn-primary waves-effect" type="submit">حفظ</button>
