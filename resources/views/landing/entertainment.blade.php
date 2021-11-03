@extends('layouts.master')

@push('mytitle')
ENTERTAINMENT
@endpush

@push('mycss')
<link rel="stylesheet" href="{{asset('assets/css/custom/blog-details.css')}}">
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
<section class="section our-work">
    <div style="display: flex;justify-content: center;align-items: center;">
        <div class="col-md-12">
            <div class="card" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                <div class="container">
                    @if (!empty($entertainment))
                    @foreach($entertainment as $item)
                    <div class="row mb-5">
                        <div class="col-lg-12">
                            <div class="section-heading">
                                <h2>{{ $item->title }}</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-card"><img src="{{ asset('assets/images/thumb/entertainment/'.$item->thumb) }}"
                                    alt="blog-1" style="max-height: 300px;">
                                <div class="blog-overlay">
                                    <a
                                        class="btn btn-outline" href="{{ url('entertainment/'. base64_encode($item->srticle_id)) }}">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p style="text-align: justify">{!! html_entity_decode( \Illuminate\Support\Str::limit($item->description, 300) ) !!}</p>
                        </div>
                    </div>
                @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('myjs')
@endpush
