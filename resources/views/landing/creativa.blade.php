@extends('layouts.master')

@push('mytitle')
CREATIVA
@endpush

@push('mycss')
<link rel="stylesheet" href="{{ asset('assets/css/custom/about.css') }}">
@endpush

@section('slide')
<section class="single-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content">
                    <h2>Creativa</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Creativa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('content')
<center>
    <h2>MAINTENANCE</h2></center>
@endsection

@push('myjs')
@endpush
