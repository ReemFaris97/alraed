@include('admin.common.errors')
@include('admin.common.alert')

<div class="form-group form-float">
    <label class="form-label">الاسم بالعربى</label>
    <div class="form-line">
        {!! Form::text("name[ar]",Arr::get(isset($achievement)??$achievement->getTranslations('name'),'ar',null),['class'=>'form-control'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">الاسم بالانجليزية</label>
    <div class="form-line">
        {!! Form::text("name[en]",Arr::get(isset($achievement)??$achievement->getTranslations('name'),'en',null),['class'=>'form-control'])!!}
    </div>
</div>
<div class="form-group form-float">
    <label class="form-label">العنوان بالعربى</label>
    <div class="form-line">
        {!! Form::text("title[ar]",Arr::get(isset($achievement)??$achievement->getTranslations('title'),'ar',null),['class'=>'form-control'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">العنوان بالانجليزية</label>
    <div class="form-line">
        {!! Form::text("title[en]",Arr::get(isset($achievement)??$achievement->getTranslations('title'),'en',null),['class'=>'form-control'])!!}
    </div>
</div>
<div class="form-group form-float">
    <label class="form-label">الصورة</label>
    <div class="form-line">
        {!! Form::file("image",['class'=>'form-control'])!!}
    </div>
</div>

<button class="btn btn-primary waves-effect" type="submit">حفظ</button>
