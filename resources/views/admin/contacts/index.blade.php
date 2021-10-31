@extends('admin.layouts.master')

@push('title')
ADMIN | CONTACTS
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
<h1 class="mb-0 pb-0 display-4" id="title">List Kontak</h1>
<nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
    <ul class="breadcrumb pt-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('talent') }}">Kontak</a></li>
    </ul>
</nav>
@endpush

@section('content')
<div class="row">


    <div class="col-xl-12 mb-6">
        <div class="card">
            <div class="card-body">

                <h5 class="mb-4">
                    <strong>Kontak</strong>
                </h5>

                <div class="row">

                    <div class="col-lg-12">
                        <div class="mb-5">
                            <table class="table table-hover nowrap" width="100%" id="tableContacts">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Subjek</th>
                                        <th>Pesan</th>
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

@endpush
