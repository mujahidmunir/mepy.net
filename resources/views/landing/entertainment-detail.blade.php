@extends('layouts.master')

@push('mytitle')
ENTERTAINMENT | DETAIL
@endpush

@push('mycss')
<link rel="stylesheet" href="{{asset('assets/css/custom/blog-details.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/custom/gallery.css') }}">
<style>
    /* The Modal (background) */
    #image-viewer {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.9);
    }

    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    .modal-content {
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    #image-viewer .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    #image-viewer .close:hover,
    #image-viewer .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }
    }

</style>
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
                        <li class="breadcrumb-item active" aria-current="page">Entertainment / Detail</li>
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
                    <div class="row mb-5">
                        <div class="col-lg-12">
                            <div class="section-heading">
                                <h2>{{ $articles->title }}</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p style="text-align: justify">{!! html_entity_decode($articles->description) !!}</p>
                        </div>
                        <div class="col-lg-6">
                            <br>
                            <div class="row">
                                @foreach ($galleries as $item)
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="images">
                                        <img src="{{ asset('assets/images/gallery/entertainment/'. $item->image) }}" class="img-fluid"
                                        alt="gallery-8">
                                    </div>
                                </div>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="image-viewer">
    <span class="close">&times;</span>
    <img class="modal-content" id="full-image">
</div>
@endsection

@push('myjs')
<script>
    $(".images img").click(function () {
        $("#full-image").attr("src", $(this).attr("src"));
        $('#image-viewer').show();
    });

    $("#image-viewer .close").click(function () {
        $('#image-viewer').hide();
    });

</script>
@endpush
