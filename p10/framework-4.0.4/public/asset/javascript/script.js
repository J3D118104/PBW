$(document).ready(function() {
    $('#cancel').click(function() {
        window.history.go(-1);
    });

    $('table').DataTable({
        /* searching: true,
         sort: true,
         paging: true,
         info: true*/
        dom: "<'row'<'col-3'l><'col-6'B><'col-3'f><'col-12't><'col-6'i><'col-6'p>>",
        buttons: [
            'colvis',
            {
                extend: 'copy',
                exportOptions: {
                    columns: ':visible'
                },
                text: '<i class="fa fa-copy"></i> salin'

            },
            {
                extend: 'excel',
                exportOptions: {
                    columns: ':visible'
                },
                text: '<i class="fa fa-table"></i> excel'

            },
            {
                extend: 'csv',
                exportOptions: {
                    columns: ':visible'
                }

            },
            {
                extend: 'pdf',
                exportOptions: {
                    columns: ':visible'
                },
                customize: function(doc) {
                    doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                },
                download: 'open',
                text: '<i class="fa fa-sticky-note"></i> PDF'


            },
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible'
                },
                text: '<i class="fa fa-print"></i> cetak'

            }
        ]
    });

});