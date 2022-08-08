@extends('admin.layout.app')

@section('title')
    أعضاء الفريق الاول
@endsection
@section('header')
    @include('admin.datatable.headers')
@endsection
@section('content')
    @include('admin.common.alert')
    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        أعضاء الفريق الاول
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <a href="{{route('admin.first-teams.create')}}">
                            <button class="btn btn-success">إضافة عضو جديد</button>
                        </a>
                    </ul>
                </div>
                <div class="body">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable" dir="rtl">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>الإسم</th>
                            <th>الرقم</th>
                            <th>الوظيفيه</th>
                            <th> الصوره</th>
                            <th>العمليات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $key=>$item)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->number}}</td>
                                <td>{{$item->job}}</td>
                                <td><img src="{{asset($item->image)}}"  style="height: 100px; width: 100px"></td>

                                <td>
                                    <a href="{{route('admin.first-teams.edit',$item->id)}}"
                                       class="btn btn-info btn-circle"><i style="padding-top:5px;padding-left: 6px;"
                                                                          class="fa fa-pencil"></i></a>

                                    <a href="#" onclick="Delete({{$item->id}})" data-toggle="tooltip"
                                           data-original-title="حذف" class="btn btn-danger btn-circle"><i
                                                    style="padding-top: 5px;padding-left: 4px;"
                                                    class="fa fa-trash-o"></i></a>

                                    {!!Form::open( ['route' => ['admin.first-teams.destroy',$item->id] ,'id'=>'delete-form'.$item->id, 'method' => 'Delete']) !!}
                                    {!!Form::close() !!}

                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Exportable Table -->

@endsection

@section('footer')
    @include('admin.datatable.scripts')
    <script>
        function Delete(id) {
            var item_id = id;
            console.log(item_id);
            swal({
                title: "هل أنت متأكد ",
                text: "هل تريد حذف هذا المستخدم ؟",
                icon: "warning",
                buttons: ["الغاء", "موافق"],
                dangerMode: true,

            }).then(function (isConfirm) {
                if (isConfirm) {
                    document.getElementById('delete-form' + item_id).submit();
                } else {
                    swal("تم االإلفاء", "حذف  ألمستخدم تم الغاؤه", 'info', {buttons: 'موافق'});
                }
            });
        }
    </script>
@endsection
