@include('admin.common.errors')
@include('admin.common.alert')


<div class="form-group form-float">
    <label class="form-label">عنوان الوسائط بالعربى</label>
    <div class="form-line">
        {!! Form::text('ar_title', null, ['class' => 'form-control', 'placeholder' => 'اكتب عنوان الوسائط....']) !!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">عنوان الوسائط بالانجليزية</label>
    <div class="form-line">
        {!! Form::text('en_title', null, ['class' => 'form-control', 'placeholder' => 'write multimedia title... ']) !!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">النوع</label>
    <div class="form-line">
        {!! Form::select('type', ['image' => 'صورة', 'video' => 'فديو'], null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">اضافة صورة الوسائط </label>
    <div class="form-line">
        {!! Form::file('image', null, ['class' => 'form-control']) !!}
    </div>
</div>

@if (isset($item) && $item->images->count())
    <div class="form-group form-float">
        <label class="form-label">صور الوسائط الحالية :</label>
        <div class="form-line">
            @foreach ($item->images as $image)
                <a href="{{asset($image->path)}}" target="_blank" rel="noopener noreferrer">
                    <img class="img-preview" src="{{ asset($image->path) }}" style="width: 50px; height: 50px">
                </a>
            @endforeach
        </div>
    </div>
@endif

{{--<div class="form-group form-float">
    <label class="form-label">اضافة صورة الوسائط  </label>
    <div class="form-line">
        <input type="file" name="images[]" id="images" multiple>
    </div>
</div>--}}
<div class="form-group form-float">
    <label class="form-label">اضافة صور الوسائط </label>
    <div class="form-line">
        <input type="file" name="path[]" multiple class="form-control">
    </div>
</div>

@if (isset($item) && @$item->images()->exists())
    <div class="form-group form-float">
        <label class="form-label">صور الوسائط الحالية :</label>
        @foreach ($item->images as $item)
            <div class="form-line">
                <img class="img-preview" src="{{ asset($item->path) }}" style="width: 50px; height: 50px">
            </div>
        @endforeach
    </div>
@endif


<div class="form-group form-float">
    <label class="form-label">محتوى الوسائط بالعربى</label>
    <div class="form-line">
        {!! Form::textarea('ar_description', null, [
            'class' => 'form-control',
            'placeholder' => 'اكتب محتوى الوسائط...',
        ]) !!}
    </div>
</div>

<div class="form-group form-float">
    <label class="form-label">محتوى الوسائط بالانجليزية</label>
    <div class="form-line">
        {!! Form::textarea('en_description', null, [
            'class' => 'form-control',
            'placeholder' => 'write multimedia  contenent ...',
        ]) !!}
    </div>
</div>

<button class="btn btn-primary waves-effect" type="submit">حفظ</button>
