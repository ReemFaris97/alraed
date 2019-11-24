@extends('admin.layout.app')

@section('title')
اضافة  مباراة جديدة
@endsection
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
@endsection

@section('content')

<!-- Basic Validation -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>إضافة مباراة </h2>
        <ul class="header-dropdown m-r--5">
            <a href="{{route('admin.matches.index')}}">   <button class="btn btn-danger">كل المباريات</button></a>
</ul>
      </div>
      <div class="body">
          {!!Form::open( ['route' => 'admin.matches.store' ,'class'=>'form phone_validate', 'method' => 'Post','files' => true]) !!}
            @include('admin.matches.form')
          {!!Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- #END# Basic Validation -->
@endsection
