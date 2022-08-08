@extends('admin.layout.app')

@section('title')
    تعديل العضو
    {{ $item->name }}
@endsection
@section('content')

    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>تعديل العضو {{ $item->name }}</h2>
                    <ul class="header-dropdown m-r--5">
                        <a href="{{route('admin.first-teams.index')}}">
                            <button class="btn btn-danger">كل الاعضاء</button>
                        </a>
                    </ul>
                </div>
                <div class="body">
                    {!!Form::model($item , ['route' => ['admin.first-teams.update' , $item->id] , 'method' => 'PATCH','enctype'=>"multipart/form-data",'files' => true]) !!}
                    @include('admin.first-teams.form')
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>


    <!-- #END# Basic Validation -->
@endsection
