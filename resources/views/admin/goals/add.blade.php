@extends('admin.layout.app')

@section('title')
اضافة  هدف جديد
@endsection

@section('content')

<!-- Basic Validation -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>إضافة هدف </h2>
        <ul class="header-dropdown m-r--5">
            <a href="{{route('admin.goals.index')}}">   <button class="btn btn-danger">كل الاهداف</button></a>
</ul>
      </div>
      <div class="body">
          {!!Form::open( ['route' => 'admin.goals.store' ,'class'=>'form phone_validate', 'method' => 'Post','files' => true]) !!}
            @include('admin.goals.form')
          {!!Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- #END# Basic Validation -->
@endsection

