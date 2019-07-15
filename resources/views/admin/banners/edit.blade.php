@extends('admin.layout.app')

@section('title')
تعديل البنر
{{ $item->title }}
@endsection
@section('content')

<!-- Basic Validation -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>تعديل البنر       {{ $item->title }}</h2>
        <ul class="header-dropdown m-r--5">
            <a href="{{route('admin.banners.index')}}">   <button class="btn btn-danger">كل البنرات</button></a>
         </ul>
      </div>
      <div class="body">
        {!!Form::model($item , ['route' => ['admin.banners.update' , $item->id] , 'method' => 'PATCH','files' => true]) !!}
        @include('admin.banners.form')
        {!!Form::close() !!}
      </div>
    </div>
  </div>
</div>


<!-- #END# Basic Validation -->
@endsection
