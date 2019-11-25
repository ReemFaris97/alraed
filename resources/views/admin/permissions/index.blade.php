@extends('admin.layout.app')

@section('title')
    كل الصلاحيات
@endsection
@section('header')
    {{Html::style('admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}
@endsection
@section('content')
    @include('admin.common.alert')
    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        كل الصلاحيات
                    </h2>
                    {{-- <ul class="header-dropdown m-r--5">
                        <a href="{{route('admin.categories.create')}}">
                            <button class="btn btn-success">إضافة قسم جديد</button>
                        </a>
                    </ul> --}}
                </div>
                <div class="body">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم الصلاحيه</th>
                            <th>العمليات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $key=>$item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->title}}</td>

                                <td class="flex-prem">
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#exampleModal{{$item->id}}">
                                        اضافه عضو للصلاحيه
                                    </button>

                                    <a href="{{route('admin.permissions.show',$item->id)}}"><i class="fa fa-info"></i></a>

                                </td>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel" style="color: black;">
                                                    اضافه عضو لصلاحية : {{$item->title}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                {!! Form::open(['route'=>'admin.permissions.store','method'=>'post']) !!}
                                                {!! Form::select("user_id",users(),null,['class'=>'form-control ms','placeholder'=>'اختر المدير'])!!}
                                                {!! Form::hidden('permission_id',$item->id,['class'=>'form-control']) !!}
                                                <br>
                                                <input type="submit" value="حفظ" class="form-control btn btn-success">

                                                {!! Form::close() !!}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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

    <script>

        function Delete(id) {
            var item_id = id;
            console.log(item_id);
            swal({
                title: "هل أنت متأكد ",
                text: "هل تريد حذف هذه الصلاحيه ؟",
                icon: "warning",
                buttons: ["الغاء", "موافق"],
                dangerMode: true,

            }).then(function (isConfirm) {
                if (isConfirm) {
                    document.getElementById('delete-form' + item_id).submit();
                } else {
                    swal("تم االإلفاء", "حذف الصلاحيه تم الغاؤه", 'info', {buttons: 'موافق'});
                }
            });
        }
    </script>

    @include('admin.datatable.scripts')
@endsection
