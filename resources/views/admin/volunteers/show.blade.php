@extends('admin.layout.app')

@section('title')
    {{$volunteer->name}}
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
                     {{$volunteer->name}}
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <a href="{{route('admin.volunteer.index')}}">
                            <button class="btn btn-success">جميع الطلبات</button>
                        </a>
                    </ul>
                </div>

                <div class="body">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr>
                            <th>العنوان </th>
                            <th>الوصف</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>اﻻسم</th>
                            <td>{{ $volunteer->name }}</td>
                        </tr>
                        <tr>
                            <th>العمر</th>
                            <td>{{ $volunteer->age }}</td>
                        </tr>
                        <tr>
                            <th>الجنس</th>
                            <td>{{ $volunteer->gender }}</td>
                        </tr>
                        <tr>
                            <th>آخر مؤهل دراسي</th>
                            <td>{{ $volunteer->qualification }}</td>
                        </tr>
                        <tr>
                            <th>الجنسية</th>
                            <td>{{ $volunteer->nationality }}</td>
                        </tr>
                        <tr>
                            <th>رقم الجوال</th>
                            <td>{{ $volunteer->phone }}</td>
                        </tr>
                        <tr>
                            <th>البريد اﻻلكتروني</th>
                            <td>{{ $volunteer->email }}</td>
                        </tr>
                        <tr>
                            <th>نوع العمل التطوعي</th>
                            <td>{{ $volunteer->work_type }}</td>
                        </tr>
                        <tr>
                            <th>نوع المشاركة</th>
                            <td>{{ $volunteer->type }}</td>
                        </tr>
                        <tr>
                            <th>أوقات التطوع</th>
                            <td>{{ $volunteer->volunteer_time }}</td>
                        </tr>
                        <tr>
                            <th>الهدف من المشارة بالاعمال التطوعية بالنادي</th>
                            <td>{{ $volunteer->goal }}</td>
                        </tr>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>


    @endsection
