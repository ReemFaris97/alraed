
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
        <label class="form-label">ملف البنر الحالي  :</label>
        <div class="form-line">
            @if(isVideo($item->image))
             <video width="320" height="200" controls>
              <source src="{{getimg($item->image)}}" type="video/mp4">
              {{-- <source src="movie.ogg" type="video/ogg"> --}}
            Your browser does not support the video tag.
            </video> 
            @else
            <img class="img-preview" src="{{getimg($item->image)}}" style="width: 50px; height: 50px">
            @endif
        </div>
    </div>
@endif

<div class="form-group form-float">
    <label class="form-label">اضافة صورة أو فيدو للبنر </label>
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
