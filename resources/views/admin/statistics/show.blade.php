@extends('admin.layout.app')

@section('title')
    احصائيات مباراة {{$item->matches->ar_name}}
@endsection
@section('header')
    @include('admin.datatable.headers')
@endsection
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        احصائيات مباراة {{$item->matches->ar_name}}
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <a href="{{route('admin.statistics.index')}}">
                            <button class="btn btn-success">جميع الإحصائيات</button>
                        </a>
                    </ul>
                </div>

            </div>

        </div>
    </div>


    @endsection