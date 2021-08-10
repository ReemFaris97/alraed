@extends('admin.layout.app')

@section('title')
    كل الفاعليات
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
                        كل الفاعليات
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <a href="{{route('admin.event.create')}}">
                            <button class="btn btn-success">إضافة فاعلية جديد</button>
                        </a>
                    </ul>
                </div>
                <div class="body">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>عنوان الفاعلية بالعربية</th>
                            <th>عنوان الفاعلية بالانجليزية</th>
                            <th>وصف الفاعلية</th>
                            <th>محتوي الفاعلية</th>
                            <th>العمليات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $key=>$item)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{ $item->ar_title }}</td>
                                <td>{{ $item->en_title }}</td>
                                <td>{{$item->ar_description}}</td>
                                <td>
                                    @if(empty($item->attach))
                                    لا يوجد
                                    @else
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                                      عرض
                                    </button>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('admin.event.edit',$item->id)}}"
                                       class="btn btn-info btn-circle"><i class="fa fa-pencil"></i></a>
                                    <a href="#" onclick="Delete({{$item->id}})" data-toggle="tooltip"
                                       data-original-title="حذف" class="btn btn-danger btn-circle"><i
                                                class="fa fa-trash-o"></i></a>
                                    {!!Form::open( ['route' => ['admin.event.destroy',$item->id] ,'id'=>'delete-form'.$item->id, 'method' => 'Delete']) !!}
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
@foreach($items as $item)
<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">الملفات المرفقة</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            @foreach($item->attach_list as $list)
            <div class="col-md-12">
                @if(isVideo($list))
                <video width="320" height="200" controls>
                  <source src="{{$list}}" type="video/mp4">
                  {{-- <source src="movie.ogg" type="video/ogg"> --}}
                Your browser does not support the video tag.
                </video>
                @else
                <img class="img-preview" src="{{$list}}" style="height: 250px">
                @endif
            </div>
            @endforeach
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection

@section('footer')
    @include('admin.datatable.scripts')
    <script>
        function Delete(id) {
            var item_id = id;
            console.log(item_id);
            swal({
                title: "هل أنت متأكد ",
                text: "هل تريد حذف هذا القسم ؟",
                icon: "warning",
                buttons: ["الغاء", "موافق"],
                dangerMode: true,

            }).then(function (isConfirm) {
                if (isConfirm) {
                    document.getElementById('delete-form' + item_id).submit();
                } else {
                    swal("تم االإلفاء", "حذف  القسم تم الغاؤه", 'info', {buttons: 'موافق'});
                }
            });
        }
    </script>
@endsection
