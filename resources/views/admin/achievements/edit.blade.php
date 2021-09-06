@extends('admin.layout.app')

@section('title')
    تعديل الانجازات
    {{ $achievement->name }}
@endsection
@section('content')

    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>تعديل الانجازات {{ $achievement->name }}</h2>
                    <ul class="header-dropdown m-r--5">
                        <a href="{{route('admin.achievements.index')}}">
                            <button class="btn btn-danger">كل الانجازات</button>
                        </a>
                    </ul>
                </div>
                <div class="body">
                    {!!Form::model($achievement , ['route' => ['admin.achievements.update' , $achievement->id] , 'method' => 'PATCH','files' => true]) !!}
                    @include('admin.achievements.form')
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>


    <!-- #END# Basic Validation -->
@endsection
