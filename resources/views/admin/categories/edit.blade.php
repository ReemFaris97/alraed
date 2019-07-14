@extends('admin.layout.app')

@section('title')
تعديل القسم
{{ $category->name() }}
@endsection
@section('header')

@endsection

@section('content')

<!-- Basic Validation -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>تعديل القسم       {{ $category->name() }}</h2>
        <ul class="header-dropdown m-r--5">
            <a href="{{route('admin.categories.index')}}">   <button class="btn btn-danger">كل الاقسام</button></a>
         </ul>
      </div>
      <div class="body">
        {!!Form::model($category , ['route' => ['admin.categories.update' , $category->id] , 'method' => 'PATCH','files' => true]) !!}
        @include('admin.categories.form')
        {!!Form::close() !!}
      </div>
    </div>
  </div>
</div>


<!-- #END# Basic Validation -->
@endsection

@section('footer')

@endsection
