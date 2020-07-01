
@include('admin.common.errors')
@include('admin.common.alert')

<div class="form-group form-float">
    <label class="form-label">القسم الخاص بالخبر</label>
    <div class="form-line">
        {!! Form::select("category_id",categories(),null,['class'=>'form-control','placeholder'=>'اختر قسم الخبر'])!!}
    </div>
</div>


<div class="form-group form-float">
    <label class="form-label">اسم الكاتب بالعربى</label>
    <div class="form-line">
        {!! Form::text("ar_writer_name",null,['class'=>'form-control','placeholder'=>'اكتب اسم الكاتب....'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">اسم الكاتب بالانجليزية</label>
    <div class="form-line">
        {!! Form::text("en_writer_name",null,['class'=>'form-control','placeholder'=>'write writer name... '])!!}
    </div>
</div>

@if (isset($item->image))
    <div class="form-group form-float">
        <label class="form-label">صورة الكاتب الحالية  :</label>
        <div class="form-line">
            <img class="img-preview" src="{{getimg($item->image)}}" style="width: 50px; height: 50px">
        </div>
    </div>
@endif

<div class="form-group form-float">
    <label class="form-label">اضافة صورة للكاتب </label>
    <div class="form-line">
        {!! Form::file("image",null,['class'=>'form-control'])!!}
    </div>
</div>


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
    <label class="form-label">محتوى الخبر بالعربى</label>
    <div class="form-line">
        {!! Form::textarea("ar_description",null,['class'=>'form-control','placeholder'=>'اكتب محتوى الخبر...'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">محتوى الخبر بالانجليزية</label>
    <div class="form-line">
        {!! Form::textarea("en_description",null,['class'=>'form-control','placeholder'=>'write new  contenent ...'])!!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">رابط الفيديو</label>
    <div class="form-line">
        {!! Form::url("video_title",null,['class'=>'form-control','placeholder'=>' الصق رابط للفيديو ...'])!!}
    </div>
</div>


<div class="form-group form-float">
    <label class="form-label">صور الخبر</label>
    
    <div class="multiple-uploader">
              <div class="btn-file  fileinput-button">
                  <span>اضافة صور توضيحية </span>
                  <input type="file" name="image[]" id="files" multiple accept="image/jpeg, image/png, image/gif,"><br/>
              </div>
              <output id="Filelist"></output>
          </div>
    
    
</div>



<button class="btn btn-primary waves-effect" type="submit">حفظ</button>
