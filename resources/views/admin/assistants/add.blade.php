@extends('admin.layout.app')

@section('title')
إضافة  مدير مساعد
@endsection
@section('content')

<!-- Basic Validation -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>إضافة مدير مساعد</h2>
        <ul class="header-dropdown m-r--5">
            <a href="{{route('admin.assistants.index')}}">   <button class="btn btn-danger">كل المديرين المساعدين </button></a>
</ul>
      </div>
      <div class="body">
          {!!Form::open( ['route' => 'admin.assistants.store' ,'class'=>'form phone_validate', 'method' => 'Post','files' => true]) !!}
            @include('admin.assistants.form')
          {!!Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- #END# Basic Validation -->
@endsection
