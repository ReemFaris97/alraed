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

<script>
    $(function () {
        $('.js-exportable').DataTable({
            dom: 'Bfrtip',
            responsive: true,
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>