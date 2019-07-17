@include('admin.common.errors')
@include('admin.common.alert')

<div class="form-group form-float">
    <label class="form-label">المباراة</label>
    <div class="form-line">
        {!! Form::select("match_id",matches(),null,['class'=>'form-control','placeholder'=>'اختر المباراة'])!!}
    </div>
</div>


<h3> احصائيات الفريق الأول</h3>

<div class="form-group form-float">
    <label class="form-label">الفريق الأول</label>
    <div class="form-line">
        {!! Form::select("first_team_id",teams(),null,['class'=>'form-control','placeholder'=>'اختر الفريق الأول'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">أهداف الفريق الأول</label>
    <div class="form-line">
        {!! Form::number("first_team_goals",null,['class'=>'form-control','placeholder'=>'اكتب أهداف الفريق الأول....'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">الكرات العرضية للفريق الأول</label>
    <div class="form-line">
        {!! Form::number("first_team_corners",null,['class'=>'form-control','placeholder'=>'الكرات العرضية للفريق الأول...'])!!}
    </div>
</div>
<div class="form-group form-float">
    <label class="form-label">الكرات التسلل للفريق الأول</label>
    <div class="form-line">
        {!! Form::number("first_team_Offside",null,['class'=>'form-control','placeholder'=>'الكرات التسلل للفريق الأول الأول...'])!!}
    </div>
</div>
<div class="form-group form-float">
    <label class="form-label">عدد الإنذارات للفريق الأول</label>
    <div class="form-line">
        {!! Form::number("first_team_YCard",null,['class'=>'form-control','placeholder'=>'عدد الإنذارات للفريق الأول...'])!!}
    </div>
</div>
<div class="form-group form-float">
    <label class="form-label" style="color: red">عدد مرات الطرد للفريق الأول </label>
    <div class="form-line">
        {!! Form::number("first_team_RCard",null,['class'=>'form-control','placeholder'=>'عدد مرات الطرد للفريق الأول...'])!!}
    </div>
</div>

<h3> احصائيات الفريق الثاني</h3>
<div class="form-group form-float">
    <label class="form-label">الفريق لثاني </label>
    <div class="form-line">
        {!! Form::select("second_team_id",teams(),null,['class'=>'form-control','placeholder'=>'اختر الفريق الثاني'])!!}
    </div>
</div>


<div class="form-group form-float">
    <label class="form-label">أهداف الفريق الثاني</label>
    <div class="form-line">
        {!! Form::number("second_team_goals",null,['class'=>'form-control','placeholder'=>'اكتب الفريق الثاني....'])!!}
    </div>
</div>


<div class="form-group form-float">
    <label class="form-label">الكرات العرضية للفريق الثاني</label>
    <div class="form-line">
        {!! Form::number("second_team_corners",null,['class'=>'form-control','placeholder'=>'الكرات العرضية للفريق الثاني...'])!!}
    </div>
</div>


<div class="form-group form-float">
    <label class="form-label">الكرات التسلل للفريق الثاني</label>
    <div class="form-line">
        {!! Form::number("second_team_Offside",null,['class'=>'form-control','placeholder'=>'الكرات التسلل للفريق الثاني...'])!!}
    </div>
</div>


<div class="form-group form-float">
    <label class="form-label">عدد الإنذارات للفريق الثاني</label>
    <div class="form-line">
        {!! Form::number("second_team_YCard",null,['class'=>'form-control','placeholder'=>'عدد الإنذارات للفريق الثاني...'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label" style="color: red">عدد مرات الطرد للفريق الثاني</label>
    <div class="form-line">
        {!! Form::number("second_team_RCard",null,['class'=>'form-control','placeholder'=>'عدد مرات الطرد للفريق  الثاني...'])!!}
    </div>
</div>


<button class="btn btn-primary waves-effect" type="submit">حفظ</button>

@push('scripts')
    <script>

    </script>
@endpush