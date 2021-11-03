@extends('layouts.master')

@push('mytitle')
TALENT MANAGEMENT
@endpush

@push('mycss')
<link rel="stylesheet" href="{{ asset('assets/css/custom/team.css') }}">
@endpush

@section('slide')
@foreach ($slide as $item)
<section
    style="background-image: url({{ URL::to('assets/images/slide/talent') }}/{{ $item->image }}); padding: 155px 0px 90px; background-position: center;   background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content">
                    <h2>Talent Management</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Talent Management</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
@endsection

@section('content')

@if (!empty($talent))
@foreach ($talent as $item)
<section class="section about-section" id="about">
    <div class="card" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about-text go-to">
                        <h3 class="dark-color">{{ $item->title }}</h3>
                        <br>
                        <p style="text-align: justify">{!! html_entity_decode( \Illuminate\Support\Str::limit($item->description, 300) ) !!}</p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-avatar">
                        <img src="{{ asset('assets/images/gallery/talent/'. $item->image) }}" class="img-fluid" style="width:200px; height:200px;" title="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endforeach
@endif
@endsection

@push('myjs')

@endpush
