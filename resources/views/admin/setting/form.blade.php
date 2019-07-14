@extends('admin.layout.app')
@section('title')
    {{$settings_page}}
@endsection

@section('content')
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            {!!Form::open( ['route' => 'admin.settings.store' , 'method' => 'Post','files'=>true]) !!}
            <div class="card">
                <div class="header">
                    <h2> التحكم ب{{$settings_page}}</h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                    @foreach($settings as $setting)
                         @if($setting->type == 'text')
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="form-label">{{$setting->title}} (AR)</label>
                                <div class="form-line">
                                    {!! Form::text($setting->name.'[]',$setting->ar_value,['class'=>'form-control'])!!}
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="form-label">{{$setting->title}} (EN)</label>
                                <div class="form-line">
                                    {!! Form::text($setting->name.'[]',$setting->en_value,['class'=>'form-control'])!!}
                                </div>
                            </div>

                             @elseif($setting->type == 'url')
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="form-label">{{$setting->title}}</label>
                                <div class="form-line">
                                    {!! Form::url($setting->name.'[]',$setting->ar_value,['class'=>'form-control'])!!}
                                </div>
                            </div>
                             @elseif($setting->type == 'number')
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="form-label">{{$setting->title}}</label>
                                <div class="form-line">
                                    {!! Form::number($setting->name.'[]',$setting->ar_value,['class'=>'form-control'])!!}
                                </div>
                            </div>

                        @elseif($setting->type == 'varchar')
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="form-label">{{$setting->title}}</label>
                                <div class="form-line">
                                    {!! Form::email($setting->name.'[]',$setting->ar_value,['class'=>'form-control'])!!}
                                </div>
                            </div>

                        @else($setting->type=='varchar-multiple')
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="form-label">{{$setting->title}}</label>
                                <div class="form-line">
                                    {!! Form::textarea($setting->name.'[]',$setting->ar_value,['class'=>'form-control editor'])!!}
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="form-label">{{$setting->title}}</label>
                                <div class="form-line">
                                    {!! Form::textarea($setting->name.'[]',$setting->en_value,['class'=>'form-control editor'])!!}
                                </div>
                            </div>

                        @endif

                    @endforeach
                    <button class="btn btn-primary waves-effect" type="submit">حفظ</button>

                </div>
                {!!Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {!! Html::script('/admin/plugins/ckeditor/ckeditor.js') !!}

    {{--<script>--}}
        {{----}}
        {{--$(document).ready(function () {--}}

            {{--CKEDITOR.replaceClass = 'editor1';--}}

        {{--});--}}

    {{--</script>--}}

    <script>

        $(document).ready(function () {

            CKEDITOR.replaceClass = 'editor';

        });
    </script>
@endpush