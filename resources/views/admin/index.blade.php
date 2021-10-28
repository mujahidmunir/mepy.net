@extends('admin.layouts.master')

@push('title')
    ADMIN | DASHBOARD
@endpush

@push('css')

@endpush

@push('breadcrumbs')
<h1 class="mb-0 pb-0 display-4" id="title">E-learning Dashboard</h1>
<nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
    <ul class="breadcrumb pt-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboards</a></li>
    </ul>
</nav>
@endpush

@section('content')

<div class="row">
    <div class="col-xl-6 mb-5">
        <h2 class="small-title">Continue Learning</h2>
        <div class="scroll-out">
            <div class="scroll-by-count" data-count="3">
                <div class="card mb-2">
                    <div class="row g-0 sh-14">
                        <div class="col-auto">
                            <a href="Course.Detail.html" class="d-block position-relative h-100">
                                <img src="{{ asset('admin/img/product/small/product-9.webp') }}" alt="alternate text"
                                    class="card-img card-img-horizontal sw-14 sw-lg-18">
                                <button
                                    class="btn btn-icon-only btn-icon-start btn-foreground btn-sm px-3 position-absolute absolute-center opacity-75"
                                    type="button">
                                    <i data-cs-icon="play" data-cs-size="16"
                                        data-cs-fill="var(--primary)"></i>
                                </button>
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body pt-0 pb-0 h-100 d-flex align-items-center">
                                <div class="w-100">
                                    <div class="d-flex flex-row justify-content-between mb-2">
                                        <a href="Course.Detail.html">Introduction to Baking Cakes</a>
                                        <div class="text-muted">67%</div>
                                    </div>
                                    <div class="progress mb-2">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="67"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="row g-0 sh-14">
                        <div class="col-auto">
                            <a href="Course.Detail.html" class="d-block position-relative h-100">
                                <img src="{{ asset('admin/img/product/small/product-2.webp') }}" alt="alternate text"
                                    class="card-img card-img-horizontal sw-14 sw-lg-18">
                                <button
                                    class="btn btn-icon-only btn-icon-start btn-foreground btn-sm px-3 position-absolute absolute-center opacity-75"
                                    type="button">
                                    <i data-cs-icon="play" data-cs-size="16"
                                        data-cs-fill="var(--primary)"></i>
                                </button>
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body pt-0 pb-0 h-100 d-flex align-items-center">
                                <div class="w-100">
                                    <div class="d-flex flex-row justify-content-between mb-2">
                                        <a href="Course.Detail.html">Apple Cake Recipe</a>
                                        <div class="text-muted">85%</div>
                                    </div>
                                    <div class="progress mb-2">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="row g-0 sh-14">
                        <div class="col-auto">
                            <a href="Course.Detail.html" class="d-block position-relative h-100">
                                <img src="{{ asset('admin/img/product/small/product-3.webp') }}" alt="alternate text"
                                    class="card-img card-img-horizontal sw-14 sw-lg-18">
                                <button
                                    class="btn btn-icon-only btn-icon-start btn-foreground btn-sm px-3 position-absolute absolute-center opacity-75"
                                    type="button">
                                    <i data-cs-icon="play" data-cs-size="16"
                                        data-cs-fill="var(--primary)"></i>
                                </button>
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body pt-0 pb-0 h-100 d-flex align-items-center">
                                <div class="w-100">
                                    <div class="d-flex flex-row justify-content-between mb-2">
                                        <a href="Course.Detail.html">Sandwich Making Techniques</a>
                                        <div class="text-muted">14%</div>
                                    </div>
                                    <div class="progress mb-2">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="14"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="row g-0 sh-14">
                        <div class="col-auto">
                            <a href="Course.Detail.html" class="d-block position-relative h-100">
                                <img src="{{ asset('admin/img/product/small/product-7.webp') }}" alt="alternate text"
                                    class="card-img card-img-horizontal sw-14 sw-lg-18">
                                <button
                                    class="btn btn-icon-only btn-icon-start btn-foreground btn-sm px-3 position-absolute absolute-center opacity-75"
                                    type="button">
                                    <i data-cs-icon="play" data-cs-size="16"
                                        data-cs-fill="var(--primary)"></i>
                                </button>
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body pt-0 pb-0 h-100 d-flex align-items-center">
                                <div class="w-100">
                                    <div class="d-flex flex-row justify-content-between mb-2">
                                        <a href="Course.Detail.html">Chapati</a>
                                        <div class="text-muted">63%</div>
                                    </div>
                                    <div class="progress mb-2">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="63"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="row g-0 sh-14">
                        <div class="col-auto">
                            <a href="Course.Detail.html" class="d-block position-relative h-100">
                                <img src="{{ asset('admin/img/product/small/product-5.webp') }}" alt="alternate text"
                                    class="card-img card-img-horizontal sw-14 sw-lg-18">
                                <button
                                    class="btn btn-icon-only btn-icon-start btn-foreground btn-sm px-3 position-absolute absolute-center opacity-75"
                                    type="button">
                                    <i data-cs-icon="play" data-cs-size="16"
                                        data-cs-fill="var(--primary)"></i>
                                </button>
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body pt-0 pb-0 h-100 d-flex align-items-center">
                                <div class="w-100">
                                    <div class="d-flex flex-row justify-content-between mb-2">
                                        <a href="Course.Detail.html">Soda Bread</a>
                                        <div class="text-muted">36%</div>
                                    </div>
                                    <div class="progress mb-2">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="46"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 mb-5">
        <h2 class="small-title">Recommended for You</h2>
        <div class="card w-100 sh-50 sh-md-40 h-xl-100-card hover-img-scale-up position-relative">
            <img src="{{ asset('admin/img/banner/cta-standard-3.webp') }}" class="card-img h-100 scale position-absolute"
                alt="card image">
            <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                <div>
                    <div class="cta-1 mb-3 text-black w-75 w-sm-50">Introduction to Bread Making</div>
                    <div class="w-50 text-black mb-3">
                        Liquorice caramels chupa chups bonbon. Jelly-o candy sugar chocolate cake
                        caramels apple pie lollipop jujubes.
                    </div>
                    <div class="mb-2">
                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                data-initial-rating="5">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="text-muted d-inline-block text-small align-text-top">(572)</div>
                    </div>
                    <div>$ 27.50</div>
                </div>
                <div>
                    <a href="Course.Detail.html"
                        class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                        <i data-cs-icon="chevron-right"></i>
                        <span>View</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush
