@include('admin.common.errors')
@include('admin.common.alert')

<div class="row">
    <div class="form-group form-float cols-6">
        <label class="form-label">اسم اللعبة بالعربى</label>
        <div class="form-line">
            {!! Form::text('ar_name', null, ['class' => 'form-control', 'placeholder' => 'اكتب اسم اللعبة....']) !!}
        </div>
    </div>

    <div class="form-group form-float cols-6">
        <label class="form-label">اسم اللعبة بالانجليزية</label>
        <div class="form-line">
            {!! Form::text('en_name', null, ['class' => 'form-control', 'placeholder' => 'write game name... ']) !!}
        </div>
    </div>
</div>

@if (isset($item) && $item->images->count())
    <div class="form-group form-float">
        <label class="form-label">صور اللعبة الحالية :</label>
        <div class="form-line">
            @foreach ($item->images as $image)
                <a href="{{asset($image->path)}}" target="_blank" rel="noopener noreferrer">
                    <img class="img-preview" src="{{ asset($image->path) }}" style="width: 50px; height: 50px">
                </a>
            @endforeach
        </div>
    </div>
@endif

<div class="form-group form-float">
    <label class="form-label">اضافة صور اللعبة </label>
    <div class="form-line">
        <input type="file" name="path[]" multiple class="form-control">
    </div>
</div>

<button class="btn btn-primary waves-effect" type="submit">حفظ</button>
