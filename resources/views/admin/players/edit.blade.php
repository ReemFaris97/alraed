@extends('admin.layout.app')

@section('title')
تعديل اللاعب
{{ $item->name }}
@endsection
@section('content')

<!-- Basic Validation -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>تعديل اللاعب       {{ $item->name }}</h2>
        <ul class="header-dropdown m-r--5">
            <a href="{{route('admin.players.index')}}">   <button class="btn btn-danger">كل اللاعبين</button></a>
         </ul>
      </div>
      <div class="body">
        {!!Form::model($item , ['route' => ['admin.players.update' , $item->id] , 'method' => 'PATCH','files' => true]) !!}
        @include('admin.players.form')
        {!!Form::close() !!}
      </div>
    </div>
  </div>
</div>


<!-- #END# Basic Validation -->
@endsection
