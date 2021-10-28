@extends('admin.layouts.master')

@push('title')
ADMIN | DASHBOARD
@endpush

@push('css')
<link rel="stylesheet" href="{{ asset('admin/css/vendor/dataTable.css') }}">
@endpush

@push('breadcrumbs')
<h1 class="mb-0 pb-0 display-4" id="title">List Record</h1>
<nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
    <ul class="breadcrumb pt-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('record') }}">Record</a></li>
    </ul>
</nav>
@endpush

@section('content')

<div class="row">
    <div class="col-xl-12 mb-5">

        <div class="card">
            <div class="card-body">
                <h5 class="mb-4">
                    <strong>DAFTAR BARANG</strong>
                </h5>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-5">
                            <table class="table table-hover nowrap" style="width: 100%" id="tableRecord">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Image</th>
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

@endpush
