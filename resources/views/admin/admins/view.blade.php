@extends('admin.layout.app')

@section('title')
 معلومات المدير{{ $user->name }}
@endsection
@section('header')
  {{Html::style('admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}

@endsection

@section('content')

<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="body">
          <table class="table table-bordered table-striped table-hover dataTable js-exportable">
            <thead>
              <tr>
                <th>الإسم</th>
                <th>الايميل</th>
                <th> الهاتف</th>
                <th>الصﻻحيات</th>
                <th>العمليات</th>

              </tr>
            </thead>
          <tbody>

            <tr>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->phone}}</td>
              <td>
                <span class="badge badge-info">مدير الموقع</span>
              </td>
              <td>
                <a href="{{route('admin.general_manger.edit',['id'=>$user->id])}}" class="btn btn-info btn-circle"><i style="padding-top:5px;padding-left: 6px;" class="fa fa-pencil"></i></a>
                  @if(auth()->user()->id != $user->id)
                    <a href="#"  onclick="Delete({{$user->id}})" data-toggle="tooltip" data-original-title="حذف" class="btn btn-danger btn-circle"><i style="padding-top: 5px;padding-left: 4px;" class="fa fa-trash-o"></i></a>
                    {!!Form::open( ['route' => ['admin.general_manger.destroy',$user->id] ,'id'=>'delete-form'.$user->id, 'method' => 'Delete']) !!}
                    {!!Form::close() !!}
                  @endif
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection

@section('footer')
  <script>
      function Delete(id) {
          var item_id=id;
          console.log(item_id);
          swal({
              title: "هل أنت متأكد ",
              text: "هل تريد حذف هذا المستخدم ؟",
              icon: "warning",
              buttons: ["الغاء", "موافق"],
              dangerMode: true,

          }).then(function(isConfirm){
              if(isConfirm){
                  document.getElementById('delete-form'+item_id).submit();
              }
              else{
                  swal("تم االإلفاء", "حذف  الخبر تم الغاؤه",'info',{buttons:'موافق'});
              }
          });
      }
  </script>
  {!!Html::script('admin/plugins/jquery-datatable/jquery.dataTables.js')!!}
  {!!Html::script('admin/js/pages/tables/jquery-datatable.js')!!}

  {!!Html::script('admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')!!}
  {!!Html::script('admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')!!}
  {!!Html::script('admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')!!}
  {!!Html::script('admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')!!}
  {!!Html::script('admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')!!}
  {!!Html::script('admin/plugins/jquery-datatable/extensions/export/jszip.min.js')!!}
  {!!Html::script('admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js')!!}
  {!!Html::script('admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js')!!}
  {!!Html::script('admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')!!}
  {!!Html::script('admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js')!!}
@endsection
