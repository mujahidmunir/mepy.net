@extends('admin.layouts.master')

@push('title')
ADMIN | TALENT
@endpush

@push('css')
<link rel="stylesheet" href="{{ asset('admin/css/vendor/dataTable.css') }}">

<style>
    .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
    }

    /* On mouse-over, add a deeper shadow */
    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

</style>
@endpush

@push('breadcrumbs')
<h1 class="mb-0 pb-0 display-4" id="title">List Talent</h1>
<nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
    <ul class="breadcrumb pt-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('talent') }}">Talent</a></li>
    </ul>
</nav>
@endpush

@section('content')
<div class="row">

    <div class="col-xl-12 mb-6">
        <div class="card">
            <div class="card-body">
                @include('admin.talent.create')

                @include('admin.talent.edit')
            </div>
        </div>


    </div>

    <div class="col-xl-12 mb-6">
        <div class="card">
            <div class="card-body">

                <h5 class="mb-4">
                    <strong>talent</strong>
                </h5>

                <div class="row">

                    <div class="col-lg-12">
                        <div class="mb-5">
                            <table class="table table-hover nowrap" width="100%" id="tableTalent">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('admin/js/vendor/dataTable.js') }}"></script>
<script src="{{ asset('admin/js/vendor/table.js') }}"></script>
<script>
    function loadPreview(input, id) {
        id = id || '#preview_img';
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(id)
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
            };

            reader.readAsDataURL(input.files[0]);
        }

    }

    function loadPreviewEdit(input, id) {
        id = id || '#preview_img_edit';
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(id)
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
            };

            reader.readAsDataURL(input.files[0]);
        }

    }

    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function reset() {
            let default_img = 'https://www.w3adda.com/wp-content/uploads/2019/09/No_Image-128.png';
            $('input').val('');
            $("#preview_img").attr('src', default_img);

        }

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 10000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        $('#data-master').on('submit', function (e) {
            e.preventDefault();
            $('#simpan-data').html("Menyimpan...");
            $('#simpan-data').attr('disabled', true);
            let data = $("#data-master").serialize();
            let datax = new FormData(this);
            console.log(data);

            $.ajax({
                type: "POST",
                url: "{{ url('admin/talent') }}",
                data: datax,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    $("#jenis_menuHelp").html("");
                    $('#simpan-data').html("Simpan");
                    $('#simpan-data').removeAttr('disabled');
                    if (response.status == 1) {
                        let oTable = $('#tableTalent').dataTable();
                        oTable.fnDraw(false);
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: 'Berhasil Menambah talent !',
                        });
                    } else if (response.status == 2) {
                        Toast.fire({
                            icon: 'error',
                            title: 'Gagal Menambah talent !'
                        })
                    } else if (response.status == 3) {
                        Toast.fire({
                            icon: 'warning',
                            title: 'talent Telah Tersedia !'
                        })
                    }
                },
                error: function (e) {
                    $("#jenis_menuHelp").html("");
                    $('#simpan-data').html(`SIMPAN <i class="far fa-save"></i></button>`);
                    $('#simpan-data').removeAttr('disabled');
                    Toast.fire({
                        icon: 'error',
                        title: 'Gagal menyimpan data !'
                    });
                }
            });
        });

        $(this).on('click', '#button_delete', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Peringatan',
                text: "Apakah anda yakin akan menghapus data ?",
                icon: 'warning',
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonClass: 'btn btn-danger btn-lg mr-2',
                cancelButtonClass: 'btn btn-primary btn-lg',
                confirmButtonText: 'Hapus <i class="fe fe-trash"></i> <br>',
                cancelButtonText: 'Batal <i class="fe fe-close"> </i>'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "DELETE",
                        url: `{{ url('admin/talent') }}/${id}`,
                        data: {
                            _token: '{{csrf_token()}}'
                        },
                        dataType: "json",
                        success: function (response) {
                            if (response.status == 1) {
                                let oTable = $('#tableTalent').dataTable();
                                oTable.fnDraw(false);
                                reset();
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: 'Berhasil Menghapus talent !',
                                });
                            } else if (response.status == 2) {
                                Toast.fire({
                                    icon: 'error',
                                    title: 'Gagal Menghapus talent !'
                                })
                            }
                        },
                        error: function () {
                            Toast.fire({
                                icon: 'error',
                                title: 'Gagal Menghapus talent !'
                            });
                        }
                    });
                }
            })
        });

        $(this).on('click', "#button_edit", function (e) {
            e.preventDefault();

            let id = $(this).data('id');
            $.ajax({
                type: "get",
                url: `{{url('admin/talent')}}/${id}{{ '/edit' }}`,
                dataType: "json",
                success: function (response) {

                    console.log(response);
                    $("#id_edit").val(response.id);
                    $("#name_edit").val(response.name);
                    $("#preview_img_edit").attr('src',
                        `{{ asset('assets/images/gallery/talent/') }}/${response.image}`
                        );

                },
                error: function () {
                    Toast.fire({
                        icon: 'error',
                        title: 'Gagal mengambil data !'
                    })
                }
            });
            $(".modal-title").html("Ubah Data talent");
        });
        editData();
        function editData()
        {

            $('#data-edit').on('submit', function (e) {
            e.preventDefault();
            $('#simpan-edit').html("Memperbaharui...");
            $('#simpan-edit').attr('disabled', true);
            let id = $("#id_edit").val();
            let data = $("#data-edit").serialize();
            let datax = new FormData(this);
            console.log(data);

            $.ajax({
                type: "PUT",
                url: `{{url('admin/talent')}}/${id}`,
                data: datax,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    $("#jenis_menuHelp").html("");
                    $('#simpan-edit').html("Simpan");
                    $('#simpan-edit').removeAttr('disabled');
                    $("#editData").modal('hide');
                    if (response.status == 1) {
                        let oTable = $('#tableTalent').dataTable();
                        oTable.fnDraw(false);
                        reset();
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: 'Berhasil Memperbaharui talent!',
                        });
                    } else if (response.status == 2) {
                        Toast.fire({
                            icon: 'error',
                            title: 'Gagal Memperbaharui talent !'
                        })
                    }
                },
                error: function (e) {
                    $("#jenis_menuHelp").html("");
                    $('#simpan-edit').html(`SIMPAN <i class="far fa-save"></i></button>`);
                    $('#simpan-edit').removeAttr('disabled');
                    Toast.fire({
                        icon: 'error',
                        title: 'Gagal menyimpan data !'
                    });
                }
            });
        });

        }
    });

</script>
@endpush
