@extends('layouts.master')

@push('mytitle')
TALENT MANAGEMENT
@endpush

@push('mycss')
<link rel="stylesheet" href="{{ asset('assets/css/custom/team.css') }}">
@endpush

@section('slide')
@foreach ($slide as $item)
<section  style="background-image: url({{ URL::to('assets/images/slide/talent') }}/{{ $item->image }}); padding: 155px 0px 90px; background-position: center;   background-size: cover;">
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
<section class="team-part">
    <div class="container">
        <div class="row">
            @foreach ($talent as $item)
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="team-card team-gape">
                    <div class="team-img"><img src="{{ asset('assets/images/gallery/talent/'. $item->image) }}" alt="team-1">
                        <div class="team-overlay">
                            <ul class="team-icon">
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-meta">
                        <h4>{{ $item->name }}</h4>
                        <p>{{ $item->job }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@push('myjs')

@endpush
