 $(document).ready(function () {

    function getRecord()
    {
        var table = $('#tableRecord').dataTable({
        	autoWidth:  true,
            processing: true,
            serverSide: true,
            destroy: 	true,
            responsive: true,
            dom: '<"top"<"pull-left"f><"pull-right"l>>rt<"bottom"<"pull-left"i><"pull-right"p>>',
		        columnDefs: [
		            { responsivePriority: 1, targets: 0 },
		            { responsivePriority: 2, targets: 4 }
		        ],
            language:  {
                 processing: '<span style="color:black;">Mohon Tunggu...</span><i class="fe fe-refresh fa-spin fa-3x fa-fw" style="color:#2510A3;"></i>',
                 sEmptyTable:    "Tidak Ada Data Yang Tersedia Pada Tabel Ini",
                 sLengthMenu:    "Tampilkan _MENU_ Baris",
                 sZeroRecords:   "Tidak Ditemukan Data Yang Sesuai",
                 sInfo:          "Menampilkan _START_ Sampai _END_ Dari _TOTAL_ Baris",
                 sInfoEmpty:     "Menampilkan 0 Sampai 0 Dari 0 Baris",
                 sInfoFiltered:  "(disaring dari _MAX_ entri keseluruhan)",
                 sInfoPostFix:   "",
                 sSearch:        "Cari:",
                 sUrl:           "",
                 oPaginate:     {
                    sFirst:         "Pertama",
                    sPrevious:      "Sebelumnya",
                    sNext:          "Selanjutnya",
                    sLast:          "Terakhir",
                 },
            },
            stateSave: true,
            order: [],
            ajax: "admin/record",
            deferRender: true,
            columns: [
                {data: 'DT_RowIndex',           name: 'DT_RowIndex'},
                {data: 'name',                  name: 'name'},
                {data: 'image',                 name: 'image'},
                {data: 'action',                name: 'action', orderable: false, searchable: false},
            ]
        });
    }

    getRecord();
 });
