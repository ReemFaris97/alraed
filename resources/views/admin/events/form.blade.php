
@include('admin.common.errors')
@include('admin.common.alert')

<div class="form-group form-float">
    <label class="form-label">العنوان بالعربى</label>
    <div class="form-line">
        {!! Form::text("ar_title",null,['class'=>'form-control','placeholder'=>'اكتب عنوان الخبر...'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">العنوان بالانجليزية</label>
    <div class="form-line">
        {!! Form::text("en_title",null,['class'=>'form-control','placeholder'=>'write new name... '])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">وصف الفاعلية بالعربى</label>
    <div class="form-line">
        {!! Form::textarea("ar_description",null,['class'=>'form-control','placeholder'=>'اكتب محتوى الخبر...'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">وصف الفاعلية بالانجليزية</label>
    <div class="form-line">
        {!! Form::textarea("en_description",null,['class'=>'form-control','placeholder'=>'write new  contenent ...'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">الصور أو الفيديوهات</label>
    <div class="form-line">
        <input type="file" name="attach[]" class="form-control" multiple="">
    </div>
</div>

<button class="btn btn-primary waves-effect" type="submit">حفظ</button>
