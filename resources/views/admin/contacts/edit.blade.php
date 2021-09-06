@extends('admin.layout.app')

@section('title')
تعديل القسم
{{ $item->name }}
@endsection
@section('content')

<!-- Basic Validation -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>تعديل القسم       {{ $item->name }}</h2>
        <ul class="header-dropdown m-r--5">
            <a href="{{route('admin.categories.index')}}">   <button class="btn btn-danger">كل الاقسام</button></a>
         </ul>
      </div>
      <div class="body">
        {!!Form::model($item , ['route' => ['admin.categories.update' , $item->id] , 'method' => 'PATCH','files' => true]) !!}
        @include('admin.categories.form')
        {!!Form::close() !!}
      </div>
    </div>
  </div>
</div>


<!-- #END# Basic Validation -->
@endsection
