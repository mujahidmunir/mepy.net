@extends('layouts.master')

@push('mytitle')
    RECORD
@endpush

@push('mycss')

@endpush

@section('slide')
<section class="banner-1">
    <div class="banner-oly">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content">
                        <h1>RECORD</h1>
                        {{-- <p>Listen with the ears &amp; understand with the heart</p><a href="#"
                            class="btn btn-inline"><i class="fas fa-eye"></i><span>live on youtube</span></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')

<section class="section show-part">

    @if (!empty($record))
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Show All Record</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div id="show-menu">
                    <ul class="nav nav-tabs">
                        @foreach ($record as $item)
                        <li><a href="#{{ $item->srticle_id }}" class="nav-link" data-toggle="tab">{{ $item->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-pane active" id="{{ $item->srticle_id }}">
                    <div class="row">
                        @foreach ($gallery as $data)
                        @if ($item->srticle_id == $data->srticle_id)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="show-card">
                                <div class="show-content">
                                    <div class="show-bg"><img src="{{ asset('assets/images/gallery/record/'. $data->image) }}" alt="show-1"></div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
</section>
@endsection

@push('myjs')

@endpush
