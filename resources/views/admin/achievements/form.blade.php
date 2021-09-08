@include('admin.common.errors')
@include('admin.common.alert')

<div class="form-group form-float">
  <label class="form-label">الاسم بالعربى</label>
  <div class="form-line">
    {!! Form::text("name[ar]",Arr::get(isset($achievement)??$achievement->getTranslations('name'),'ar',null),['class'=>'form-control','placeholder'=>'اكتب اسم القسم'])!!}
  </div>
</div>

<div class="form-group form-float">
    <label class="form-label">الاسم بالانجليزية</label>
    <div class="form-line">
        {!! Form::text("name[en]",Arr::get(isset($achievement)??$achievement->getTranslations('name'),'en',null),['class'=>'form-control','placeholder'=>'write category name '])!!}
    </div>
</div>
<div class="form-group form-float">
    <label class="form-label">الملف</label>
    <div class="form-line">
        {!! Form::file("url",['class'=>'form-control'])!!}
    </div>
</div>

<button class="btn btn-primary waves-effect" type="submit">حفظ</button>
