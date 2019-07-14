@extends('admin.layout.app')

@section('title')
كل الاقسام
@endsection
@section('header')
{{Html::style('admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}
{{Html::style('css/index_style.css')}}

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
          كل الاقسام
        </h2>
        <ul class="header-dropdown m-r--5">
            <a href="{{route('admin.categories.create')}}">   <button class="btn btn-success">إضافة قسم جديد</button></a>
</ul>
        </div>
        <div class="body">
          <table class="table table-bordered table-striped table-hover dataTable js-exportable">
            <thead>
              <tr>
                <th>#</th>
                <th>الاسم بالعربى</th>
                <th>الاسم بالانجليزى</th>
                <th>صورة القسم</th>
                <th>العمليات</th>
              </tr>
            </thead>
          <tbody>
            @foreach($categories as $key=>$category)
            <tr>
              <td>{{++$key}}</td>
              <td>{{$category->ar_name}}</td>
              <td>{{$category->en_name}}</td>
              <td>
                <img src="{{checkimag($category->image)?getimg($category->image):asset('img/category/default.jpg')}}" style="width: 50px; height: 50px">
              </td>
              <td>
                <a href="{{route('admin.categories.edit',['id'=>$category->id])}}" class="btn btn-info btn-circle"><i  class="fa fa-pencil"></i></a>
                    <a href="#"  onclick="Delete({{$category->id}})" data-toggle="tooltip" data-original-title="حذف" class="btn btn-danger btn-circle"><i  class="fa fa-trash-o"></i></a>
                    {!!Form::open( ['route' => ['admin.categories.destroy',$category->id] ,'id'=>'delete-form'.$category->id, 'method' => 'Delete']) !!}
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
              text: "هل تريد حذف هذا القسم ؟",
              icon: "warning",
              buttons: ["الغاء", "موافق"],
              dangerMode: true,

          }).then(function(isConfirm){
              if(isConfirm){
                  document.getElementById('delete-form'+item_id).submit();
              }
              else{
                  swal("تم االإلفاء", "حذف  القسم تم الغاؤه",'info',{buttons:'موافق'});
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
