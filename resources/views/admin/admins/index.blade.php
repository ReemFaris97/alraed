@extends('admin.layout.app')

@section('title')
كل المديرين
@endsection
@section('header')
{{Html::style('admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}
@endsection
@section('content')
  @if (session('alert'))
    <div class="alert alert-success">
      {{ session('alert') }}
    </div>
  @endif
<!-- Exportable Table -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>
          كل المديرين
        </h2>
        <ul class="header-dropdown m-r--5">
            <a href="{{route('admin.admins.create')}}">   <button class="btn btn-success">إضافة مدير جديد</button></a>
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
            @foreach($admins as $key=>$user)
            <tr>
              <td>{{++$key}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->phone}}</td>
              <td>{{$user->is_admin == 1 ? 'عضو إدارة' : 'مستخدم'}}</td>
              <td >

                @if($user->is_admin == 1)
                  <a href="{{url('dashboard/admins/'.$user->id.'/deActivate')}}"
                     class="btn btn-xs btn-danger"><i class="fa fa-times"></i>  </a>
                @else
                  <a href="{{url('dashboard/admins/'.$user->id.'/activate')}}"
                     class="btn btn-xs btn-success"><i class="fa fa-check"></i> </a>
                @endif
              </td>
              <td>
                <a href="{{route('admin.admins.edit',['id'=>$user->id])}}" class="btn btn-info btn-circle"><i style="padding-top:5px;padding-left: 6px;" class="fa fa-pencil"></i></a>

                <a href="#"  onclick="Delete({{$user->id}})" data-toggle="tooltip" data-original-title="حذف" class="btn btn-danger btn-circle"><i style="padding-top: 5px;padding-left: 4px;" class="fa fa-trash-o"></i></a>
                    {!!Form::open( ['route' => ['admin.admins.destroy',$user->id] ,'id'=>'delete-form'.$user->id, 'method' => 'Delete']) !!}
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
          swal("تم االإلفاء", "حذف  ألمستخدم تم الغاؤه",'info',{buttons:'موافق'});
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
