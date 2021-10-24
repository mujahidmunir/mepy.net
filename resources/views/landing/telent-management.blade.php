@extends('layouts.master')

@push('mytitle')
TALENT MANAGEMENT
@endpush

@push('mycss')
<link rel="stylesheet" href="{{ asset('assets/css/custom/team.css') }}">
@endpush

@section('slide')
<section class="single-banner">
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
@endsection

@section('content')
<section class="team-part">
    <div class="container">
        <div class="row">

            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="team-card team-gape">
                    <div class="team-img"><img src="{{ asset('assets/img/team-5.jpg') }}" alt="team-5">
                        <div class="team-overlay">
                            <ul class="team-icon">
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-linkedin-in"></i></a></li>

                                <li><a class="icon icon-inline" href="{{ url('profileTalent') }}"><i
                                            class="fas fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-meta">
                        <h4>Miron Mahmud</h4>
                        <p>Radio Jockey</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="team-card team-gape">
                    <div class="team-img"><img src="{{ asset('assets/img/team-6.jpg') }}" alt="team-6">
                        <div class="team-overlay">
                            <ul class="team-icon">
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-linkedin-in"></i></a></li>

                                <li><a class="icon icon-inline" href="{{ url('profileTalent') }}"><i
                                            class="fas fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-meta">
                        <h4>Miron Mahmud</h4>
                        <p>Radio Jockey</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="team-card team-gape">
                    <div class="team-img"><img src="{{ asset('assets/img/team-7.jpg') }}" alt="team-7">
                        <div class="team-overlay">
                            <ul class="team-icon">
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-linkedin-in"></i></a></li>

                                <li><a class="icon icon-inline" href="{{ url('profileTalent') }}"><i
                                            class="fas fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-meta">
                        <h4>Miron Mahmud</h4>
                        <p>Radio Jockey</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="team-card team-gape">
                    <div class="team-img"><img src="{{ asset('assets/img/team-8.jpg') }}" alt="team-8">
                        <div class="team-overlay">
                            <ul class="team-icon">
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-linkedin-in"></i></a></li>

                                <li><a class="icon icon-inline" href="{{ url('profileTalent') }}"><i
                                            class="fas fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-meta">
                        <h4>Miron Mahmud</h4>
                        <p>Radio Jockey</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="team-card team-gape">
                    <div class="team-img"><img src="{{ asset('assets/img/team-9.jpg') }}" alt="team-9">
                        <div class="team-overlay">
                            <ul class="team-icon">
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-linkedin-in"></i></a></li>

                                <li><a class="icon icon-inline" href="{{ url('profileTalent') }}"><i
                                            class="fas fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-meta">
                        <h4>Miron Mahmud</h4>
                        <p>Radio Jockey</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="team-card team-gape">
                    <div class="team-img"><img src="{{ asset('assets/img/team-10.jpg') }}" alt="team-10">
                        <div class="team-overlay">
                            <ul class="team-icon">
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-linkedin-in"></i></a></li>

                                <li><a class="icon icon-inline" href="{{ url('profileTalent') }}"><i
                                            class="fas fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-meta">
                        <h4>Miron Mahmud</h4>
                        <p>Radio Jockey</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="team-card team-gape">
                    <div class="team-img"><img src="{{ asset('assets/img/team-11.jpg') }}" alt="team-11">
                        <div class="team-overlay">
                            <ul class="team-icon">
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-linkedin-in"></i></a></li>

                                <li><a class="icon icon-inline" href="{{ url('profileTalent') }}"><i
                                            class="fas fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-meta">
                        <h4>Miron Mahmud</h4>
                        <p>Radio Jockey</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="team-card team-gape">
                    <div class="team-img"><img src="{{ asset('assets/img/team-12.jpg') }}" alt="team-12">
                        <div class="team-overlay">
                            <ul class="team-icon">
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-linkedin-in"></i></a></li>

                                <li><a class="icon icon-inline" href="{{ url('profileTalent') }}"><i
                                            class="fas fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-meta">
                        <h4>Miron Mahmud</h4>
                        <p>Radio Jockey</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="team-btn"><a class="btn btn-outline" href="#"><i class="fas fa-eye"></i><span>show
                            more</span></a></div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('myjs')

@endpush
