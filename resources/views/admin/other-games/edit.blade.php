@extends('admin.layout.app')

@section('title')
    تعديل اللعبة
    {{ $item->ar_name }}
@endsection
@section('content')

    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>تعديل اللعبة {{ $item->ar_name }}</h2>
                    <ul class="header-dropdown m-r--5">
                        <a href="{{ route('admin.other-games.index') }}"> <button class="btn btn-danger">كل الالعاب الاخري</button></a>
                    </ul>
                </div>
                <div class="body">
                    {!! Form::model($item, ['route' => ['admin.other-games.update', $item->id], 'method' => 'PATCH', 'files' => true]) !!}
                    @include('admin.other-games.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


    <!-- #END# Basic Validation -->
@endsection
