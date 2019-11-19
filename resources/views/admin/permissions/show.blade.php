@extends('admin.layout.app')

@section('title')
     صلاحيه {{$permission->title}}
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
                        صلاحيه {{$permission->title}}
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <a href="{{route('admin.permissions.index')}}">
                            <button class="btn btn-success">جميع الإحصائيات</button>
                        </a>
                    </ul>
                </div>

                <div class="body">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr>
                            <th> # </th>
                            <th>اسم المستخدم</th>
                            <th>العمليات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $key=>$item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->name}}</td>
                                {!!Form::open( ['route' => ['admin.permissions.delete_user',$item->id] ,'id'=>'delete-form'.$item->id, 'method' => 'get']) !!}
                                <input type="hidden" name="permission_id" value="{{$permission->id}}">
                                <input type="hidden" name="user_id" value="{{$item->id}}">
                                {!!Form::close() !!}
                                <td>
                                    <a href="#" onclick="Delete({{$item->id}})" data-toggle="tooltip"
                                       data-original-title="حذف" class="btn btn-danger btn-circle"><i
                                                class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>


    @endsection

@push('scripts')
    <script>
        function Delete(id) {
            var item_id=id;
            console.log(item_id);
            swal({
                title: "هل أنت متأكد ",
                text: "هل تريد حذف هذا الصلاحيه ؟",
                icon: "warning",
                buttons: ["الغاء", "موافق"],
                dangerMode: true,

            }).then(function(isConfirm){
                if(isConfirm){
                    document.getElementById('delete-form'+item_id).submit();
                }
                else{
                    swal("تم االإلفاء", "حذف الصلاحيه تم الغاؤه",'info',{buttons:'موافق'});
                }
            });
        }
    </script>
    @endpush