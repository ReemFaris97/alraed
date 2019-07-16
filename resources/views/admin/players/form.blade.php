
@include('admin.common.errors')
@include('admin.common.alert')

<div class="form-group form-float">
    <label class="form-label">اسم التيم الخاص باللاعب</label>
    <div class="form-line">
        {!! Form::select("team_id",teams(),null,['class'=>'form-control','placeholder'=>'اختر الفريق الخاص باللاعب'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">الدولة</label>
    <div class="form-line">
        {!! Form::select("country_id",countries(),null,['class'=>'form-control','placeholder'=>'اختر قسم الخبر'])!!}
    </div>
</div>
<div class="form-group form-float">
    <label class="form-label">اسم اللاعب بالعربى</label>
    <div class="form-line">
        {!! Form::text("ar_name",null,['class'=>'form-control','placeholder'=>'اكتب اسم اللاعب....'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">اسم اللاعب بالانجليزية</label>
    <div class="form-line">
        {!! Form::text("en_name",null,['class'=>'form-control','placeholder'=>'write player name... '])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">عمر اللاعب</label>
    <div class="form-line">
        {!! Form::number("age",null,['class'=>'form-control','placeholder'=>'اكتب عمر اللاعب...'])!!}
    </div>
</div>
<div class="form-group form-float">
    <label class="form-label">طول اللاعب</label>
    <div class="form-line">
        <label>سم</label>
        {!! Form::number("length",null,['class'=>'form-control','placeholder'=>'اكتب طول اللاعب...'])!!}
    </div>
</div>


<div class="form-group form-float">
    <label class="form-label">مكان اللاعب في التشكيلة</label>
    <div class="form-line">
        {!! Form::select("position",PlayerPosition(),null,['class'=>'form-control','placeholder'=>'اختر مكان اللاعب ف التشكيلة'])!!}
    </div>
</div>

@if (isset($item->image))
    <div class="form-group form-float">
        <label class="form-label">صورة اللاعب الحالية  :</label>
        <div class="form-line">
            <img class="img-preview" src="{{getimg($item->image)}}" style="width: 50px; height: 50px">
        </div>
    </div>
@endif

<div class="form-group form-float">
    <label class="form-label">اضافة صورة للاعب </label>
    <div class="form-line">
        {!! Form::file("image",null,['class'=>'form-control'])!!}
    </div>
</div>


<button class="btn btn-primary waves-effect" type="submit">حفظ</button>
