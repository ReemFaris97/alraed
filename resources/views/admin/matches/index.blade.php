@extends('admin.layout.app')

@section('title')
جدول المباريات
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
                        جدول المباريات
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <a href="{{route('admin.matches.create')}}">
                            <button class="btn btn-success">إضافة مباراة جديدة</button>
                        </a>
                    </ul>
                </div>
                <div class="body">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>البطولة</th>
                            <th>الفريق الأول</th>
                            <th>الفريق الثاني</th>
                            <th> الملعب</th>
                            <th> نتيجة المبارة</th>
                            <th> تاريخ المباراة</th>
                            <th>العمليات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $key=>$item)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$item->Champion->ar_title }}</td>
                                <td>{{$item->FirstTeam->ar_name }}</td>
                                <td>{{$item->SecondTeam->ar_name }}</td>
                                <td>{{$item->stadium }}</td>
                                <td>
                                    @if(!is_null($item->goals_first_team))
                                    {{ $item->goals_first_team.' : '.$item->goals_second_team }}
                                    @else
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#matchNo_{{ $item->id }}">
                                      إضافة أهداف
                                    </button>
                                    @endif
                                </td>
                                <td>{{$item->date }}</td>
                                <td>
                                    <a href="{{route('admin.matches.edit',['id'=>$item->id])}}"
                                       class="btn btn-info btn-circle"><i class="fa fa-pencil"></i></a>
                                    <a href="#" onclick="Delete({{$item->id}})" data-toggle="tooltip"
                                       data-original-title="حذف" class="btn btn-danger btn-circle"><i
                                                class="fa fa-trash-o"></i></a>
                                    {!!Form::open( ['route' => ['admin.matches.destroy',$item->id] ,'id'=>'delete-form'.$item->id, 'method' => 'Delete']) !!}
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

<!-- Update no of goals -->
@foreach($items as $item)
<!-- Modal -->
<div class="modal fade" id="matchNo_{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">إضافة الاهداف</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('admin.addGoals', $item->id) }}">@csrf @method('PUT')
      <div class="modal-body">
        <div class="form-group">
            <label>أهداف الفريق الاول</label>
            <input type="number" name="goals_first_team" class="form-control" required="">
        </div>
        <div class="form-group">
            <label>أهداف الفريق الثاني</label>
            <input type="number" name="goals_second_team" class="form-control" required="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
        <button type="submit" class="btn btn-primary">حفظ</button>
      </div>
    </form>
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
                text: "هل تريد حذف هذه المباراة ؟",
                icon: "warning",
                buttons: ["الغاء", "موافق"],
                dangerMode: true,

            }).then(function (isConfirm) {
                if (isConfirm) {
                    document.getElementById('delete-form' + item_id).submit();
                } else {
                    swal("تم االإلفاء", "حذف  المباراة تم الغاؤه", 'info', {buttons: 'موافق'});
                }
            });
        }
    </script>
@endsection
