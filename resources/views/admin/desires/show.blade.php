@extends('admin.layout.app')

@section('title')
    {{$desire->name}}
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
                     {{$desire->name}}
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <a href="{{route('admin.desire.index')}}">
                            <button class="btn btn-success">جميع الرغبات</button>
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
                            <td>{{ $desire->name }}</td>
                        </tr>
                        <tr>
                            <th>الجنسية</th>
                            <td>{{ $desire->nationality }}</td>
                        </tr>
                        <tr>
                            <th>تاريخ الميلاد</th>
                            <td>{{ $desire->birth_date }}</td>
                        </tr>
                        <tr>
                            <th>مكان الميلاد</th>
                            <td>{{ $desire->birth_area }}</td>
                        </tr>
                        <tr>
                            <th>مكان اﻻقامة حاليا</th>
                            <td>{{ $desire->live_area }}</td>
                        </tr>
                        <tr>
                            <th>رقم الجوال</th>
                            <td>{{ $desire->phone }}</td>
                        </tr>
                        <tr>
                            <th>الرياضة المفضلة</th>
                            <td>
                                <ul>
                                    @foreach($desire->game as $game)
                                    <li>{{ $game }}</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>طالب</th>
                            <td>{{ $desire->student }}</td>
                        </tr>
                        <tr>
                            <th>لديه وظيفة</th>
                            <td>{{ $desire->job }}</td>
                        </tr>
                        <tr>
                            <th>لديه وسيلة نقل</th>
                            <td>{{ $desire->transport }}</td>
                        </tr>
                        <tr>
                            <th>يلعب في ناد آخر</th>
                            <td>{{ $desire->club }}</td>
                        </tr>
                        <tr>
                            <th>الرآي</th>
                            <td>{{ $desire->opinion }}</td>
                        </tr>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>


    @endsection
