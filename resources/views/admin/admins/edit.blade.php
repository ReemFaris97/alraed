@extends('admin.layout.app')

@section('title')
تعديل المدير
{{ $user->name }}
@endsection
@section('header')

@endsection

@section('content')

<!-- Basic Validation -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>تعديل المدير       {{ $user->name }}</h2>
        <ul class="header-dropdown m-r--5">
            <a href="{{route('admin.admins.index')}}">   <button class="btn btn-danger">كل المديرين</button></a>
         </ul>
      </div>
      <div class="body">
        {!!Form::model($user , ['route' => ['admin.admins.update' , $user->id] , 'method' => 'PATCH','enctype'=>"multipart/form-data",'files' => true]) !!}
        @include('admin.admins.form')
        {!!Form::close() !!}
      </div>
    </div>
  </div>
</div>


<!-- #END# Basic Validation -->
@endsection

@section('footer')

@endsection
