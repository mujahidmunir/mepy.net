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
<section class="section testi-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Review about ushno</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testi-slider slider-arrow slick-initialized slick-slider"><i
                        class="fas fa-chevron-right dandik slick-arrow" style="display: block;"></i>
                    <div class="slick-list draggable">
                        <div class="slick-track"
                            style="opacity: 1; width: 3410px; transform: translate3d(-930px, 0px, 0px);">
                            <div class="testi-card slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true"
                                style="width: 280px;" tabindex="-1">
                                <div class="testi-quote">
                                    <p>Lorem ipsum dolor nobis molestias quis quam ullam optio natus quisquam</p>
                                </div>
                                <div class="testi-meta">
                                    <div class="testi-img"><a href="#" tabindex="-1"><img src="img/testi-2.jpg"
                                                alt="testi-2"></a></div>
                                    <div class="testi-info">
                                        <h4>Morgan threture</h4>
                                        <p>Founder at - Airway</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-card slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true"
                                style="width: 280px;" tabindex="-1">
                                <div class="testi-quote">
                                    <p>Lorem ipsum dolor nobis molestias quis quam ullam optio natus quisquam</p>
                                </div>
                                <div class="testi-meta">
                                    <div class="testi-img"><a href="#" tabindex="-1"><img src="img/testi-3.jpg"
                                                alt="testi-3"></a></div>
                                    <div class="testi-info">
                                        <h4>Morgan threture</h4>
                                        <p>Founder at - Airway</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-card slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true"
                                style="width: 280px;" tabindex="-1">
                                <div class="testi-quote">
                                    <p>Lorem ipsum dolor nobis molestias quis quam ullam optio natus quisquam</p>
                                </div>
                                <div class="testi-meta">
                                    <div class="testi-img"><a href="#" tabindex="-1"><img src="img/testi-4.jpg"
                                                alt="testi-4"></a></div>
                                    <div class="testi-info">
                                        <h4>Morgan threture</h4>
                                        <p>Founder at - Airway</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-card slick-slide slick-current slick-active" data-slick-index="0"
                                aria-hidden="false" style="width: 280px;" tabindex="0">
                                <div class="testi-quote">
                                    <p>Lorem ipsum dolor nobis molestias quis quam ullam optio natus quisquam</p>
                                </div>
                                <div class="testi-meta">
                                    <div class="testi-img"><a href="#" tabindex="0"><img src="img/testi-1.jpg"
                                                alt="testi-1"></a></div>
                                    <div class="testi-info">
                                        <h4>Morgan threture</h4>
                                        <p>Founder at - Airway</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-card slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                                style="width: 280px;" tabindex="0">
                                <div class="testi-quote">
                                    <p>Lorem ipsum dolor nobis molestias quis quam ullam optio natus quisquam</p>
                                </div>
                                <div class="testi-meta">
                                    <div class="testi-img"><a href="#" tabindex="0"><img src="img/testi-2.jpg"
                                                alt="testi-2"></a></div>
                                    <div class="testi-info">
                                        <h4>Morgan threture</h4>
                                        <p>Founder at - Airway</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-card slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                                style="width: 280px;" tabindex="0">
                                <div class="testi-quote">
                                    <p>Lorem ipsum dolor nobis molestias quis quam ullam optio natus quisquam</p>
                                </div>
                                <div class="testi-meta">
                                    <div class="testi-img"><a href="#" tabindex="0"><img src="img/testi-3.jpg"
                                                alt="testi-3"></a></div>
                                    <div class="testi-info">
                                        <h4>Morgan threture</h4>
                                        <p>Founder at - Airway</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-card slick-slide" data-slick-index="3" aria-hidden="true"
                                style="width: 280px;" tabindex="-1">
                                <div class="testi-quote">
                                    <p>Lorem ipsum dolor nobis molestias quis quam ullam optio natus quisquam</p>
                                </div>
                                <div class="testi-meta">
                                    <div class="testi-img"><a href="#" tabindex="-1"><img src="img/testi-4.jpg"
                                                alt="testi-4"></a></div>
                                    <div class="testi-info">
                                        <h4>Morgan threture</h4>
                                        <p>Founder at - Airway</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-card slick-slide slick-cloned" data-slick-index="4" aria-hidden="true"
                                style="width: 280px;" tabindex="-1">
                                <div class="testi-quote">
                                    <p>Lorem ipsum dolor nobis molestias quis quam ullam optio natus quisquam</p>
                                </div>
                                <div class="testi-meta">
                                    <div class="testi-img"><a href="#" tabindex="-1"><img src="img/testi-1.jpg"
                                                alt="testi-1"></a></div>
                                    <div class="testi-info">
                                        <h4>Morgan threture</h4>
                                        <p>Founder at - Airway</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-card slick-slide slick-cloned" data-slick-index="5" aria-hidden="true"
                                style="width: 280px;" tabindex="-1">
                                <div class="testi-quote">
                                    <p>Lorem ipsum dolor nobis molestias quis quam ullam optio natus quisquam</p>
                                </div>
                                <div class="testi-meta">
                                    <div class="testi-img"><a href="#" tabindex="-1"><img src="img/testi-2.jpg"
                                                alt="testi-2"></a></div>
                                    <div class="testi-info">
                                        <h4>Morgan threture</h4>
                                        <p>Founder at - Airway</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-card slick-slide slick-cloned" data-slick-index="6" aria-hidden="true"
                                style="width: 280px;" tabindex="-1">
                                <div class="testi-quote">
                                    <p>Lorem ipsum dolor nobis molestias quis quam ullam optio natus quisquam</p>
                                </div>
                                <div class="testi-meta">
                                    <div class="testi-img"><a href="#" tabindex="-1"><img src="img/testi-3.jpg"
                                                alt="testi-3"></a></div>
                                    <div class="testi-info">
                                        <h4>Morgan threture</h4>
                                        <p>Founder at - Airway</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-card slick-slide slick-cloned" data-slick-index="7" aria-hidden="true"
                                style="width: 280px;" tabindex="-1">
                                <div class="testi-quote">
                                    <p>Lorem ipsum dolor nobis molestias quis quam ullam optio natus quisquam</p>
                                </div>
                                <div class="testi-meta">
                                    <div class="testi-img"><a href="#" tabindex="-1"><img src="img/testi-4.jpg"
                                                alt="testi-4"></a></div>
                                    <div class="testi-info">
                                        <h4>Morgan threture</h4>
                                        <p>Founder at - Airway</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><i class="fas fa-chevron-left bamdik slick-arrow" style="display: block;"></i>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section sponsor-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Our Pertner</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="sponsor-slider slider-arrow slick-initialized slick-slider"><i
                        class="fas fa-chevron-right dandik slick-arrow" style="display: block;"></i>
                    <div class="slick-list draggable">
                        <div class="slick-track"
                            style="opacity: 1; width: 3162px; transform: translate3d(-930px, 0px, 0px);"><a href="#"
                                class="slick-slide slick-cloned" data-slick-index="-5" aria-hidden="true"
                                style="width: 156px;" tabindex="-1"><img src="{{ asset('assets/img/sponsor-2.jpg') }}" alt="sponsor-2"></a><a
                                href="#" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true"
                                style="width: 156px;" tabindex="-1"><img src="{{ asset('assets/img/sponsor-3.jpg') }}" alt="sponsor-3"></a><a
                                href="#" class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true"
                                style="width: 156px;" tabindex="-1"><img src="{{ asset('assets/img/sponsor-4.jpg') }}" alt="sponsor-4"></a><a
                                href="#" class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true"
                                style="width: 156px;" tabindex="-1"><img src="i{{ asset('assets/img/sponsor-5.jpg"') }} alt="sponsor-5"></a><a
                                href="#" class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true"
                                style="width: 156px;" tabindex="-1"><img src="i{{ asset('assets/img/sponsor-3.jpg"') }} alt="sponsor-3"></a><a
                                href="#" class="slick-slide slick-current slick-active" data-slick-index="0"
                                aria-hidden="false" style="width: 156px;" tabindex="0"><img src="{{ asset('assets/img/sponsor-1.jpg') }}"
                                    alt="sponsor-1"></a><a href="#" class="slick-slide slick-active"
                                data-slick-index="1" aria-hidden="false" style="width: 156px;" tabindex="0"><img
                                    src="{{ asset('assets/img/sponsor-2.jpg') }}" alt="sponsor-2"></a><a href="#"
                                class="slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                                style="width: 156px;" tabindex="0"><img src="{{ asset('assets/img/sponsor-3.jpg') }}" alt="sponsor-3"></a><a
                                href="#" class="slick-slide slick-active" data-slick-index="3" aria-hidden="false"
                                style="width: 156px;" tabindex="0"><img src="{{ asset('assets/img/sponsor-4.jpg') }}" alt="sponsor-4"></a><a
                                href="#" class="slick-slide slick-active" data-slick-index="4" aria-hidden="false"
                                style="width: 156px;" tabindex="0"><img src="{{ asset('assets/img/sponsor-5.jpg') }}" alt="sponsor-5"></a><a
                                href="#" class="slick-slide" data-slick-index="5" aria-hidden="true"
                                style="width: 156px;" tabindex="-1"><img src="{{ asset('assets/img/sponsor-3.jpg') }}" alt="sponsor-3"></a><a
                                href="#" class="slick-slide slick-cloned" data-slick-index="6" aria-hidden="true"
                                style="width: 156px;" tabindex="-1"><img src="{{ asset('assets/img/sponsor-1.jpg') }}" alt="sponsor-1"></a><a
                                href="#" class="slick-slide slick-cloned" data-slick-index="7" aria-hidden="true"
                                style="width: 156px;" tabindex="-1"><img src="{{ asset('assets/img/sponsor-2.jpg') }}" alt="sponsor-2"></a><a
                                href="#" class="slick-slide slick-cloned" data-slick-index="8" aria-hidden="true"
                                style="width: 156px;" tabindex="-1"><img src="{{ asset('assets/img/sponsor-3.jpg') }}" alt="sponsor-3"></a><a
                                href="#" class="slick-slide slick-cloned" data-slick-index="9" aria-hidden="true"
                                style="width: 156px;" tabindex="-1"><img src="{{ asset('assets/img/sponsor-4.jpg') }}" alt="sponsor-4"></a><a
                                href="#" class="slick-slide slick-cloned" data-slick-index="10" aria-hidden="true"
                                style="width: 156px;" tabindex="-1"><img src="{{ asset('assets/img/sponsor-5.jpg') }}" alt="sponsor-5"></a><a
                                href="#" class="slick-slide slick-cloned" data-slick-index="11" aria-hidden="true"
                                style="width: 156px;" tabindex="-1"><img src="{{ asset('assets/img/sponsor-3.jpg') }}" alt="sponsor-3"></a>
                        </div>
                    </div><i class="fas fa-chevron-left bamdik slick-arrow" style="display: block;"></i>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('myjs')
<script src="{{ asset('assets/js/vendor/counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/counterup.js') }}"></script>
@endpush
