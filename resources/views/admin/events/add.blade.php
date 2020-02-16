@extends('admin.layout.app')

@section('title')
اضافة فاعلية
@endsection

@section('content')

<!-- Basic Validation -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>إضافة فاعلية </h2>
        <ul class="header-dropdown m-r--5">
            <a href="{{route('admin.event.index')}}">   <button class="btn btn-danger">كل الفاعليات </button></a>
</ul>
      </div>
      <div class="body">
          {!!Form::open( ['route' => 'admin.event.store' ,'class'=>'form phone_validate', 'method' => 'Post','files' => true]) !!}
            @include('admin.events.form')
          {!!Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- #END# Basic Validation -->
@endsection

