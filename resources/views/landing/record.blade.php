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
                        <li><a href="#{{ $item->srticle_id }}" class="nav-link active" data-toggle="tab">{{ $item->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                @foreach ($gallery as $data)
                <div class="tab-pane active" id="{{ $data->srticle_id }}">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="show-card">
                                <div class="show-content">
                                    <div class="show-bg"><img src="{{ asset('assets/img/show-1.jpg') }}" alt="show-1"></div>
                                    <div class="show-overlay">
                                        <div class="show-time">
                                            <p>08:00 - 10:00pm</p>
                                            <h4>Tiny Time Talks</h4>
                                        </div>
                                        <ul class="show-host">
                                            <li><a href="#"><img src="{{ asset('assets/img/host-1.jpg') }}" alt="host-1"></a></li>
                                            <li><a href="#"><img src="{{ asset('assets/img/host-2.jpg') }}" alt="host-2"></a></li>
                                            <li><a href="#"><img src="{{ asset('assets/img/host-3.jpg') }}" alt="host-3"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="show-meta">
                                    <h5>RJ Sumu, Monty, Rony</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="show-card">
                                <div class="show-content">
                                    <div class="show-bg"><img src="{{ asset('assets/img/show-2.jpg') }}" alt="show-2"></div>
                                    <div class="show-overlay">
                                        <div class="show-active"><img src="{{ asset('assets/img/sound.gif') }}" alt="sound"></div>
                                        <div class="show-time">
                                            <p>09:15 - 10:45pm</p>
                                            <h4>Public Reaction</h4>
                                        </div>
                                        <ul class="show-host">
                                            <li><a href="#"><img src="{{ asset('assets/img/host-2.jpg') }}" alt="host-2"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="show-meta">
                                    <h5>RJ Mahmud</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="show-card">
                                <div class="show-content">
                                    <div class="show-bg"><img src="{{ asset('assets/img/show-3.jpg') }}" alt="show-3"></div>
                                    <div class="show-overlay">
                                        <div class="show-time">
                                            <p>03:15 - 04:55am</p>
                                            <h4>Couple Story</h4>
                                        </div>
                                        <ul class="show-host">
                                            <li><a href="#"><img src="{{ asset('assets/img/host-3.jpg') }}" alt="host-3"></a></li>
                                            <li><a href="#"><img src="{{ asset('assets/img/host-4.jpg') }}" alt="host-4"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="show-meta">
                                    <h5>RJ Bonny, Imran</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="show-card">
                                <div class="show-content">
                                    <div class="show-bg"><img src="{{ asset('assets/img/show-4.jpg') }}" alt="show-4"></div>
                                    <div class="show-overlay">
                                        <div class="show-time">
                                            <p>05:25 - 06:30pm</p>
                                            <h4>Transport Signal</h4>
                                        </div>
                                        <ul class="show-host">
                                            <li><a href="#"><img src="{{ asset('assets/img/host-4.jpg') }}" alt="host-4"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="show-meta">
                                    <h5>RJ Ayman</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="show-card">
                                <div class="show-content">
                                    <div class="show-bg"><img src="img/show-5.jpg" alt="show-5"></div>
                                    <div class="show-overlay">
                                        <div class="show-time">
                                            <p>01:45 - 02:30am</p>
                                            <h4>Comedy Nightclub</h4>
                                        </div>
                                        <ul class="show-host">
                                            <li><a href="#"><img src="img/host-5.jpg" alt="host-4"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="show-meta">
                                    <h5>RJ Farjana</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="show-card">
                                <div class="show-content">
                                    <div class="show-bg"><img src="img/show-6.jpg" alt="show-6"></div>
                                    <div class="show-overlay">
                                        <div class="show-time">
                                            <p>04:45 - 05:30am</p>
                                            <h4>Knowledge sharing</h4>
                                        </div>
                                        <ul class="show-host">
                                            <li><a href="#"><img src="img/host-6.jpg" alt="host-6"></a></li>
                                            <li><a href="#"><img src="img/host-7.jpg" alt="host-7"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="show-meta">
                                    <h5>RJ Rasel, Priya</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="show-card">
                                <div class="show-content">
                                    <div class="show-bg"><img src="img/show-7.jpg" alt="show-7"></div>
                                    <div class="show-overlay">
                                        <div class="show-time">
                                            <p>02:45 - 03:10pm</p>
                                            <h4>Music for Emotion</h4>
                                        </div>
                                        <ul class="show-host">
                                            <li><a href="#"><img src="img/host-7.jpg" alt="host-7"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="show-meta">
                                    <h5>RJ Tahmina</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="show-card">
                                <div class="show-content">
                                    <div class="show-bg"><img src="img/show-8.jpg" alt="show-8"></div>
                                    <div class="show-overlay">
                                        <div class="show-time">
                                            <p>06:45 - 08:10am</p>
                                            <h4>Education for abroad</h4>
                                        </div>
                                        <ul class="show-host">
                                            <li><a href="#"><img src="img/host-8.jpg" alt="host-8"></a></li>
                                            <li><a href="#"><img src="img/host-5.jpg" alt="host-5"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="show-meta">
                                    <h5>RJ Niloy, Shusmita</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="show-btn"><a class="btn btn-outline" href="#"><i
                            class="fas fa-eye"></i><span>show more</span></a></div>
            </div>
        </div>
    </div>

    @endif
</section>
@endsection

@push('myjs')

@endpush
