@extends('admin.layout.app')

@section('title')
    الوسائط المتعدده
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
                        كل الوسائط المتعدده
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <a href="{{route('admin.multi-media.create')}}">   <button class="btn btn-success">إضافة وسائط جديد</button></a>
                    </ul>
                </div>
                <div class="body">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
            <tr>
              <th> # </th>
              <th>الاسم بالعربيه </th>
              <th>الاسم بالانجليزيه </th>
              <th>الوصف بالعربيه</th>
              <th>الوصف بالانجليزيه</th>
              <th>الصوره</th>
              <th>الفيديو</th>
              <th>العمليات</th>
          </tr>
          </thead>
             <tbody>
                 <tbody>
                  @foreach($items as $key=>$item)
                 <tr>
                   <td>{{++$key}}</td>
                  <td>{{$item->ar_name}}</td>
                  <td>{{$item->en_name}}</td>
                  <td>{{$item->ar_description}}</td>
                  <td>{{$item->en_description}}</td>
                  <td><img src="{{checkimag($item->image)?getimg($item->image):asset('admin/3.jpg')}}"></td>
                  <td> <iframe src="{{$item->video}}"
                               width="140" height="140" frameborder="0"></iframe></td>
                     <td>
                     <a href="{{route('admin.multi-media.edit',['id'=>$item->id])}}" class="btn btn-info btn-circle">
                             <i style="padding-top:5px;padding-left: 6px;" class="fa fa-pencil"></i></a>
                   <a href="#"  onclick="Delete({{$item->id}})" data-toggle="tooltip" data-original-title="حذف" class="btn btn-danger btn-circle"><i style="padding-top: 5px;padding-left: 4px;" class="fa fa-trash-o"></i></a>
                           {!!Form::open( ['route' => ['admin.multi-media.destroy',$item->id] ,'id'=>'delete-form'.$item->id,
                            'method' => 'Delete']) !!}
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
                text: "هل تريد حذف هذه الوسائط ؟",
                icon: "warning",
                buttons: ["الغاء", "موافق"],
                dangerMode: true,

            }).then(function(isConfirm){
                if(isConfirm){
                    document.getElementById('delete-form'+item_id).submit();
                }
                else{
                    swal("تم االإلفاء", "حذف  الوسائط تم الغاؤه",'info',{buttons:'موافق'});
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
