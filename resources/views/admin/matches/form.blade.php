
@include('admin.common.errors')
@include('admin.common.alert')

<div class="form-group form-float">
    <label class="form-label">اسم المباراة باللغة العربية</label>
    <div class="form-line">
        {!! Form::text("ar_name",null,['class'=>'form-control','placeholder'=>'اكتب اسم المباراة....'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">اسم المباراة باللغة الإنجليزية</label>
    <div class="form-line">
        {!! Form::text("en_name",null,['class'=>'form-control','placeholder'=>'Enter Match name....'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">رابط الحجز</label>
    <div class="form-line">
        {!! Form::url("booking_url",null,['class'=>'form-control','placeholder'=>'رابط حجز التذاكر'])!!}
    </div>
</div>


<div class="form-group form-float">
    <label class="form-label">الفريق الأول</label>
    <div class="form-line">
        {!! Form::select("first_team_id",teams(),null,['class'=>'form-control','placeholder'=>'اختر الفريق الأول'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">الفريق الثاني </label>
    <div class="form-line">
        {!! Form::select("second_team_id",teams(),null,['class'=>'form-control','placeholder'=>'اختر الفريق الثاني'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">البطولة</label>
    <div class="form-line">
        {!! Form::select("champion_id",champions(),null,['class'=>'form-control','placeholder'=>'اختر البطولة'])!!}
    </div>
</div>
<div class="form-group form-float">
    <label class="form-label">الملعب</label>
    <div class="form-line">
        {!! Form::text("stadium",null,['class'=>'form-control','placeholder'=>'اكتب اسم اللاعب....'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">تاريخ المباراة</label>

    <div class="form-line input-group date" id="datetimepicker">
        {!! Form::text("date",null,['class'=>'form-control','placeholder'=>'تاريخ المباراة...'])!!}
        <span class="input-group-addon">
             <span class="glyphicon glyphicon-calendar"></span>
       </span>
    </div>
</div>

@if(isset($item))
<div class="form-group form-float">
    <label class="form-label">أهداف الفريق الاول</label>
    <div class="form-line">
        {!! Form::number("goals_first_team",null,['class'=>'form-control','placeholder'=>'أهداف الفريق الاول'])!!}
    </div>
</div>
<div class="form-group form-float">
    <label class="form-label">أهداف الفريق الثاني</label>
    <div class="form-line">
        {!! Form::number("goals_second_team",null,['class'=>'form-control','placeholder'=>'أهداف الفريق الثاني'])!!}
    </div>
</div>
@endif

<button class="btn btn-primary waves-effect" type="submit">حفظ</button>

@push('scripts')
<script>
    $(function() {
        $('input[name=date').val(" {{ isset($item) ? $item->date : '' }} ")
    })
</script>
@endpush
