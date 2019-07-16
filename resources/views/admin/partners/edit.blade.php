@extends('admin.layout.app')

@section('title')
تعديل الراعي
{{ $item->name }}
@endsection
@section('content')

<!-- Basic Validation -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>تعديل الراعي       {{ $item->name }}</h2>
        <ul class="header-dropdown m-r--5">
            <a href="{{route('admin.partners.index')}}">   <button class="btn btn-danger">كل الرعاة</button></a>
         </ul>
      </div>
      <div class="body">
        {!!Form::model($item , ['route' => ['admin.partners.update' , $item->id] , 'method' => 'PATCH','files' => true]) !!}
        @include('admin.partners.form')
        {!!Form::close() !!}
      </div>
    </div>
  </div>
</div>


<!-- #END# Basic Validation -->
@endsection
