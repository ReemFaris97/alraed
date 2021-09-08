@extends('admin.layout.app')

@section('title')
    اضافة الفديوهات
@endsection

@section('content')

    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>إضافة قسم</h2>
                    <ul class="header-dropdown m-r--5">
                        <a href="{{route('admin.videos.index')}}">
                            <button class="btn btn-danger">كل الفديوهات</button>
                        </a>
                    </ul>
                </div>
                <div class="body">
                    {!!Form::open( ['route' => 'admin.videos.store' ,'class'=>'form phone_validate', 'method' => 'Post','files' => true]) !!}
                    @include('admin.videos.form')
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Validation -->
@endsection

