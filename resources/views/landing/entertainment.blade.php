@extends('layouts.master')

@push('mytitle')
ENTERTAINMENT
@endpush

@push('mycss')
<link rel="stylesheet" href="{{ asset('assets/css/custom/blog-list.css') }}">
@endpush

@section('slide')
<section class="single-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content">
                    <h2>Entertainment</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Entertainment</li>
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
