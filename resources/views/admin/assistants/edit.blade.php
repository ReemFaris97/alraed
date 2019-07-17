@extends('admin.layout.app')

@section('title')
تعديل المدير المساعد
{{ $item->name }}
@endsection
@section('header')

@endsection

@section('content')

<!-- Basic Validation -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>تعديل المدير المساعد       {{ $item->name }}</h2>
        <ul class="header-dropdown m-r--5">
            <a href="{{route('admin.assistants.index')}}">   <button class="btn btn-danger">كل المديرين المساعدين</button></a>
         </ul>
      </div>
      <div class="body">
        {!!Form::model($item , ['route' => ['admin.assistants.update' , $item->id] , 'method' => 'PATCH','enctype'=>"multipart/form-data",'files' => true]) !!}
        @include('admin.assistants.form')
        {!!Form::close() !!}
      </div>
    </div>
  </div>
</div>


<!-- #END# Basic Validation -->
@endsection

@section('footer')

@endsection
