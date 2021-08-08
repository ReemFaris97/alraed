<script src="{{asset('admin/plugins/jquery-datatable/extensions/export/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/extensions/export/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/extensions/export/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>

<script src="{{asset('admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/extensions/export/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/extensions/export/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/extensions/export/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/extensions/export/responsive.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/extensions/export/dataTables.scroller.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('table.dataTable').DataTable({
            responsive: true,
            paging: false,
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'csv',
                    text: 'Export csv',
                    charset: 'utf-8',
                    extension: '.csv',
                    fieldSeparator: ';',
                    fieldBoundary: '',
                    filename: 'export',
                    bom: true
                }, 'copy', 'excel', 'pdf', 'print'
            ]


        });
    });
</script>

<script>
    $(document).ready(function () {
        $('#orders').DataTable({
            "order": [[0, "desc"]]
        });
    });


</script>
