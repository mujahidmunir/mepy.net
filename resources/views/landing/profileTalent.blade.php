@extends('layouts.master')

@push('mytitle')
PROFILE TALENT
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
                    <h2>Profile Talent</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile Talent</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="section about-part">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="about-img"><a href="#" class="about-1"><img src="{{ asset('assets/img/about-1.jpg') }}" alt="about-1"></a><a
                        href="#" class="about-2"><img src="{{ asset('assets/img/about-2.jpg') }}" alt="about-2"></a></div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="about-content">
                    <h2><span>USHNO</span>some about</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi fugiat totam delectus in velit enim
                        expedita aliquam impedit reprehenderit necessitatibus delectus velit illo corrupti dolor cum.
                        accusamus sint autem hic nisi natus libero veniam soluta eaque dolorem laboriosam obcaecati
                        dolorum unde Rerum recusandae minus facilis!</p>
                    <p>Apart from loud and filtered sound quality we have massive coverage of local and global loyal
                        listenership by the highest responded programs round the week.</p>
                    <h3>Since 1995</h3>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('myjs')

@endpush
