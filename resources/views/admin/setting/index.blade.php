@extends('admin.layout.app')

@section('title')
    كل الاعدادات
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
                        كل الاعدادات
                    </h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr>
                            <th> # </th>
                            <th>اسم الصفحة</th>
                            <th>العمليات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($settings as $key=>$item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item}}</td>
                                <td><a href="{{route('admin.settings.show',['id'=>$item])}}"><i class="fa fa-eye"></i></a></td>
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
                text: "هل تريد حذف هذه الاعدادات ؟",
                icon: "warning",
                buttons: ["الغاء", "موافق"],
                dangerMode: true,

            }).then(function(isConfirm){
                if(isConfirm){
                    document.getElementById('delete-form'+item_id).submit();
                }
                else{
                    swal("تم االإلفاء", "حذف  الاعدادات تم الغاؤه",'info',{buttons:'موافق'});
                }
            });
        }
    </script>
    
    
    
    <!-- Jquery DataTable Plugin Js -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.18/b-1.5.6/r-2.2.2/datatables.min.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js
"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js
"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js
"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js
"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js
"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js
"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js
"></script>

<script>

   $(document).ready(function() {
   $('table.dataTable').DataTable( {
       responsive: true,
       dom: 'Bfrtip',
       buttons: [
           'copy', 'csv', 'excel', 'pdf', 'print'
       ]

   } );
} );
</script>
@endsection
