@extends('admin.layout.app')

@section('title')
اضافة  بطولة جديدة
@endsection

@section('content')

<!-- Basic Validation -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>إضافة بطولة جديدة </h2>
        <ul class="header-dropdown m-r--5">
            <a href="{{route('admin.champions.index')}}">   <button class="btn btn-danger">كل البطولات</button></a>
</ul>
      </div>
      <div class="body">
          {!!Form::open( ['route' => 'admin.champions.store' ,'class'=>'form phone_validate', 'method' => 'Post','files' => true]) !!}
            @include('admin.champions.form')
          {!!Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- #END# Basic Validation -->
@endsection

