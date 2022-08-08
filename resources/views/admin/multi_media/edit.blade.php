@extends('admin.layout.app')

@section('title')
تعديل الوسائط
{{ $item->title }}
@endsection
@section('content')

<!-- Basic Validation -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>تعديل الوسائط       {{ $item->title }}</h2>
        <ul class="header-dropdown m-r--5">
            <a href="{{route('admin.multimedia.index')}}">   <button class="btn btn-danger">كل البنرات</button></a>
         </ul>
      </div>
      <div class="body">
        {!!Form::model($item , ['route' => ['admin.multimedia.update' , $item->id] , 'method' => 'PATCH','files' => true]) !!}
        @include('admin.multi_media.form')
        {!!Form::close() !!}
      </div>
    </div>
  </div>
</div>


<!-- #END# Basic Validation -->
@endsection
