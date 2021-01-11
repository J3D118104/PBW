$(document).ready(function() {
    $('#cancel').click(function() {
        window.history.go(-1);
    });

    $('table').DataTable({
        /* searching: true,
         sort: true,
         paging: true,
         info: true*/
        dom: "<'row'<'col-md-2'l><'col-md-7'B><'col-md-3'f><'col-12't><'col-md-6'i><'col-md-6'p>>",
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

            },
            {
                text: '<i class="fa fa-pie-chart"></i> Grafik',
                action: function(e, dt, node, conf) {
                    window.location = window.location.href + '/chart';
                }

            }
        ]
    });

    const chartData = [{
            label: "Venezuela",
            value: "290"
        }, {
            label: "Saudi",
            value: "260"
        }, {
            label: "Canada",
            value: "180"
        }, {
            label: "Iran",
            value: "140"
        }, {
            label: "Russia",
            value: "115"
        }, {
            label: "UAE",
            value: "100"
        }, {
            label: "US",
            value: "30"
        }, {
            label: "China",
            value: "30"
        }]
        //STEP 3 - Chart Configurations
    const chartConfigs = {
            type: "doughnut3d",
            width: "100%",
            height: "400",
            dataFormat: "jsonurl",
            dataSource: window.location.href + '_data'
        }
        // Create a chart container
    $("#chart-container").insertFusionCharts(chartConfigs);


});