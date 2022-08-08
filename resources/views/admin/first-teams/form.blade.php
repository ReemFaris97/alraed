@include('admin.common.alert')
@include('admin.common.errors')


<div class="form-group form-float">
  <label class="form-label"> الاسم بالعربي</label>
  <div class="form-line">
    {!! Form::text("ar_name",null,['class'=>'form-control','placeholder'=>'  الاسم  '])!!}
  </div>
</div>

<div class="form-group form-float">
    <label class="form-label"> الاسم باللغه الانجليزيه</label>
    <div class="form-line">
      {!! Form::text("en_name",null,['class'=>'form-control','placeholder'=>'  الاسم  '])!!}
    </div>
  </div>

<div class="form-group form-float">
    <label >الرقم </label>
    {!! Form::number("number",null,['class'=>'form-control','placeholder'=>'  الرقم  '])!!}
    <div class="form-line">
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label"> الوظيفه بالعربي</label>
    <div class="form-line">
      {!! Form::text("ar_job",null,['class'=>'form-control','placeholder'=>'  الوظيفه  '])!!}
    </div>
  </div>

  <div class="form-group form-float">
      <label class="form-label"> الوظيفه باللغه الانجليزيه</label>
      <div class="form-line">
        {!! Form::text("en_job",null,['class'=>'form-control','placeholder'=>'  الوظيفه  '])!!}
      </div>
    </div>
@if(isset($item))
    <div class="form-group form-float">
        <label class="form-label">الصورة  الحالية  :</label>
        <div class="form-line">
            <img class="img-preview" src="{{ is_null($item->image) ? url('admin/images/logo.png') : asset($item->image)}}"  style="height: 100px; width: 100px">
        </div>
    </div>
@endif

<div class="form-group form-float">
    <label class="form-label">الصوره </label>
    <div class="form-line">
        {!! Form::file("image",null,['class'=>'form-control'])!!}
    </div>
</div>





<button class="btn btn-primary waves-effect" type="submit">حفظ</button>
