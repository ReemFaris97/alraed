@extends('admin.layout.app')

@section('title')
    المديرين المساعدين
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
                        المديرين المساعدين
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <a href="{{route('admin.assistants.create')}}">
                            <button class="btn btn-success">إضافة مدير مساعد جديد</button>
                        </a>
                    </ul>
                </div>
                <div class="body">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>الإسم</th>
                            <th>الايميل</th>
                            <th>الهاتف</th>
                            <th>حالة الحساب</th>
                            <th>تغيير حالة الحساب</th>
                            <th>العمليات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $key=>$item)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{AccountStatus($item->is_active)}}</td>
                                <td>

                                    @if($item->is_active == 1)
                                        <a href="{{route('admin.Deactivate',$item->id)}}"
                                           class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </a>
                                    @else
                                        <a href="{{route('admin.Activate',$item->id)}}"
                                           class="btn btn-xs btn-success"><i class="fa fa-check"></i> </a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('admin.assistants.edit',$item->id)}}"
                                       class="btn btn-info btn-circle"><i style="padding-top:5px;padding-left: 6px;"
                                                                          class="fa fa-pencil"></i></a>
                                        <a href="#" onclick="Delete({{$item->id}})" data-toggle="tooltip"
                                           data-original-title="حذف" class="btn btn-danger btn-circle"><i
                                                    style="padding-top: 5px;padding-left: 4px;"
                                                    class="fa fa-trash-o"></i></a>

                                    {!!Form::open( ['route' => ['admin.assistants.destroy',$item->id] ,'id'=>'delete-form'.$item->id, 'method' => 'Delete']) !!}
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
                text: "هل تريد حذف هذا المدير المساعد ؟",
                icon: "warning",
                buttons: ["الغاء", "موافق"],
                dangerMode: true,

            }).then(function (isConfirm) {
                if (isConfirm) {
                    document.getElementById('delete-form' + item_id).submit();
                } else {
                    swal("تم االإلفاء", "حذف  المدير المساعد تم الغاؤه", 'info', {buttons: 'موافق'});
                }
            });
        }
    </script>
@endsection
