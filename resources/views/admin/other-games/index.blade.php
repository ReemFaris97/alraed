@extends('admin.layout.app')

@section('title')
    كل الالعاب الاخري
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
                        كل الالعاب الاخري
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <a href="{{ route('admin.other-games.create') }}">
                            <button class="btn btn-success">إضافة جديد</button>
                        </a>
                    </ul>
                </div>
                <div class="body">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="orders">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $key => $item)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $item->ar_name }}</td>
                                    <td>
                                        <a href="{{ route('admin.other-games.edit', $item->id) }}"
                                            class="btn btn-info btn-circle"><i class="fa fa-pencil"></i></a>
                                        <a href="#" onclick="Delete({{ $item->id }})" data-toggle="tooltip"
                                            data-original-title="حذف" class="btn btn-danger btn-circle"><i
                                                class="fa fa-trash-o"></i></a>
                                        {!! Form::open(['route' => ['admin.other-games.destroy', $item->id], 'id' => 'delete-form' . $item->id, 'method' => 'Delete']) !!}
                                        {!! Form::close() !!}
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
                text: "هل تريد حذف هذا الوسائط ؟",
                icon: "warning",
                buttons: ["الغاء", "موافق"],
                dangerMode: true,

            }).then(function(isConfirm) {
                if (isConfirm) {
                    document.getElementById('delete-form' + item_id).submit();
                } else {
                    swal("تم االإلفاء", "حذف  الوسائط تم الغاؤه", 'info', {
                        buttons: 'موافق'
                    });
                }
            });
        }
    </script>
@endsection
