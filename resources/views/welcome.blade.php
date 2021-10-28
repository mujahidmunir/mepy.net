@extends('layouts.master')

@push('mytitle')
HOME
@endpush

@push('mycss')
<link rel="stylesheet" href="{{asset('assets/css/custom/blog-details.css')}}">

@endpush


@section('slide')
@include('landing.slider')
@endsection

@section('content')
<section class="section about-part animate__animated  animate__backInLeft animate__delay-5s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-content">
                    @foreach ($article as $item)
                    @if ($item->category_id == 1)
                    <h2>{!! html_entity_decode($item->title) !!}</h2>
                    <p class="d-block" style="text-align: justify">
                        {!! html_entity_decode($item->description) !!}
                    </p>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@include('landing.our-work')
@include('landing.our-client')
@include('landing.talent-landing')

@endsection

@push('myjs')

@endpush
