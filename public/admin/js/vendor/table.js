 $(document).ready(function () {

    function getRecord()
    {
        var table = $('#tableRecord').dataTable({
        	autoWidth:  true,
            processing: true,
            serverSide: true,
            destroy: 	true,
            responsive: true,
            rowReorder: true,
            dom: '<"top"<"pull-left"f><"pull-right"l>>rt<"bottom"<"pull-left"i><"pull-right"p>>',

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
            ajax: "/admin/record",
            deferRender: true,
            columns: [
                {data: 'DT_RowIndex',           name: 'DT_RowIndex'},
                {data: 'name',                  name: 'name'},
                {data: 'image',                 name: 'image'},
                {data: 'action',                name: 'action', orderable: false, searchable: false},
            ]
        });
    }

    function getCreativa()
    {
        var table = $('#tableCreativa').dataTable({
        	autoWidth:  true,
            processing: true,
            serverSide: true,
            destroy: 	true,
            responsive: true,
            rowReorder: true,
            dom: '<"top"<"pull-left"f><"pull-right"l>>rt<"bottom"<"pull-left"i><"pull-right"p>>',

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
            ajax: "/admin/creativa",
            deferRender: true,
            columns: [
                {data: 'DT_RowIndex',           name: 'DT_RowIndex'},
                {data: 'name',                  name: 'name'},
                {data: 'image',                 name: 'image'},
                {data: 'action',                name: 'action', orderable: false, searchable: false},
            ]
        });
    }

    function getEntertainment()
    {
        var table = $('#tableEntertainment').dataTable({
        	autoWidth:  true,
            processing: true,
            serverSide: true,
            destroy: 	true,
            responsive: true,
            rowReorder: true,
            dom: '<"top"<"pull-left"f><"pull-right"l>>rt<"bottom"<"pull-left"i><"pull-right"p>>',

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
            ajax: "/admin/entertainment",
            deferRender: true,
            columns: [
                {data: 'DT_RowIndex',           name: 'DT_RowIndex'},
                {data: 'name',                  name: 'name'},
                {data: 'image',                 name: 'image'},
                {data: 'action',                name: 'action', orderable: false, searchable: false},
            ]
        });
    }

    function getTalent()
    {
        var table = $('#tableTalent').dataTable({
        	autoWidth:  true,
            processing: true,
            serverSide: true,
            destroy: 	true,
            responsive: true,
            rowReorder: true,
            dom: '<"top"<"pull-left"f><"pull-right"l>>rt<"bottom"<"pull-left"i><"pull-right"p>>',

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
            ajax: "/admin/talent",
            deferRender: true,
            columns: [
                {data: 'DT_RowIndex',           name: 'DT_RowIndex'},
                {data: 'name',                  name: 'name'},
                {data: 'image',                 name: 'image'},
                {data: 'action',                name: 'action', orderable: false, searchable: false},
            ]
        });
    }

    function getSlide()
    {
        var table = $('#tableSlide').dataTable({
        	autoWidth:  true,
            processing: true,
            serverSide: true,
            destroy: 	true,
            responsive: true,
            rowReorder: true,
            dom: '<"top"<"pull-left"f><"pull-right"l>>rt<"bottom"<"pull-left"i><"pull-right"p>>',

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
            ajax: "/admin/slide",
            deferRender: true,
            columns: [
                {data: 'DT_RowIndex',           name: 'DT_RowIndex'},
                {data: 'title',                 name: 'title'},
                {data: 'description',           name: 'description'},
                {data: 'image',                 name: 'image'},
                {data: 'page',                  name: 'page'},
                {data: 'action',                name: 'action', orderable: false, searchable: false},
            ]
        });
    }

    function getCategories()
    {
        var table = $('#tableCategories').dataTable({
        	autoWidth:  true,
            processing: true,
            serverSide: true,
            destroy: 	true,
            responsive: true,
            rowReorder: true,
            dom: '<"top"<"pull-left"f><"pull-right"l>>rt<"bottom"<"pull-left"i><"pull-right"p>>',

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
            ajax: "/admin/categories",
            deferRender: true,
            columns: [
                {data: 'DT_RowIndex',           name: 'DT_RowIndex'},
                {data: 'name',                  name: 'name'},
                {data: 'slug',                  name: 'slug'},
                {data: 'action',                name: 'action', orderable: false, searchable: false},
            ]
        });
    }

    function getContacts()
    {
        var table = $('#tableContacts').dataTable({
        	autoWidth:  true,
            processing: true,
            serverSide: true,
            destroy: 	true,
            responsive: true,
            rowReorder: true,
            dom: '<"top"<"pull-left"f><"pull-right"l>>rt<"bottom"<"pull-left"i><"pull-right"p>>',

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
            ajax: "/admin/contactus",
            deferRender: true,
            columns: [
                {data: 'DT_RowIndex',           name: 'DT_RowIndex'},
                {data: 'name',                  name: 'name'},
                {data: 'email',                 name: 'email'},
                {data: 'subject',               name: 'subject'},
                {data: 'message',               name: 'message'},

            ]
        });
    }



    getContacts();
    getCategories();
    getTalent();
    getEntertainment();
    getRecord();
    getCreativa();
    getSlide();
 });
