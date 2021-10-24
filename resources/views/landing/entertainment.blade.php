@extends('layouts.master')

@push('mytitle')
ENTERTAINMENT
@endpush

@push('mycss')
<link rel="stylesheet" href="{{ asset('assets/css/custom/blog-list.css') }}">
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
<section class="blog-part">
    <div class="container">
        <div class="row content-reverse">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="blog-src"><input type="text" placeholder="Search..."><button><i
                                    class="fas fa-search"></i></button></form>
                    </div>
                    <div class="col-md-7 col-lg-12">
                        <div class="blog-filter">
                            <h3>popular post</h3>
                            <ul class="blog-suggest">
                                <li>
                                    <div class="suggest-img"><a href="#"><img src="img/suggest-1.jpg"
                                                alt="suggest-1"></a></div>
                                    <div class="suggest-content">
                                        <div class="suggest-title">
                                            <h4><a href="#">Business contents insurance is a type of business.</a></h4>
                                        </div>
                                        <div class="suggest-meta">
                                            <div class="suggest-date"><i class="far fa-calendar-alt"></i>
                                                <p>02 feb 2020</p>
                                            </div>
                                            <div class="suggest-comment"><i class="far fa-comments"></i>
                                                <p>16</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="suggest-img"><a href="#"><img src="img/suggest-2.jpg"
                                                alt="suggest-2"></a></div>
                                    <div class="suggest-content">
                                        <div class="suggest-title">
                                            <h4><a href="#">Business contents insurance is a type of business.</a></h4>
                                        </div>
                                        <div class="suggest-meta">
                                            <div class="suggest-date"><i class="far fa-calendar-alt"></i>
                                                <p>02 feb 2020</p>
                                            </div>
                                            <div class="suggest-comment"><i class="far fa-comments"></i>
                                                <p>13</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="suggest-img"><a href="#"><img src="img/suggest-3.jpg"
                                                alt="suggest-3"></a></div>
                                    <div class="suggest-content">
                                        <div class="suggest-title">
                                            <h4><a href="#">Business contents insurance is a type of business.</a></h4>
                                        </div>
                                        <div class="suggest-meta">
                                            <div class="suggest-date"><i class="far fa-calendar-alt"></i>
                                                <p>02 feb 2020</p>
                                            </div>
                                            <div class="suggest-comment"><i class="far fa-comments"></i>
                                                <p>19</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-12">
                        <div class="blog-filter">
                            <h3>Top categories</h3>
                            <ul class="blog-cate">
                                <li>
                                    <h5><a href="#">Technology</a></h5>
                                    <p>23</p>
                                </li>
                                <li>
                                    <h5><a href="#">Education</a></h5>
                                    <p>17</p>
                                </li>
                                <li>
                                    <h5><a href="#">Business</a></h5>
                                    <p>09</p>
                                </li>
                                <li>
                                    <h5><a href="#">Freelancing</a></h5>
                                    <p>12</p>
                                </li>
                                <li>
                                    <h5><a href="#">Programing</a></h5>
                                    <p>42</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="blog-filter">
                            <h3>Best tags</h3>
                            <ul class="blog-tag">
                                <li><a href="#">domain</a></li>
                                <li><a href="#">cloud</a></li>
                                <li><a href="#">web</a></li>
                                <li><a href="#">payment</a></li>
                                <li><a href="#">E-commerce</a></li>
                                <li><a href="#">Sequerity</a></li>
                                <li><a href="#">solution</a></li>
                                <li><a href="#">offer</a></li>
                                <li><a href="#">support</a></li>
                                <li><a href="#">knowladge</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="blog-filter">
                            <h3>follow us</h3>
                            <ul class="blog-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="blog-ad"><a href="#"><img src="img/ad-banner.jpg" alt="ad-banner"></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="blog-card"><img src="img/blog-1.jpg" alt="blog-1">
                            <div class="blog-overlay">
                                <p>03 february 2020</p>
                                <h3><a href="#">Lorem ipsum dolor sit ame consectetur adipiscing</a></h3><a
                                    class="btn btn-outline" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="blog-card"><img src="img/blog-2.jpg" alt="blog-2">
                            <div class="blog-overlay">
                                <p>03 february 2020</p>
                                <h3><a href="#">Lorem ipsum dolor sit ame consectetur adipiscing</a></h3><a
                                    class="btn btn-outline" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="blog-card"><img src="img/blog-3.jpg" alt="blog-3">
                            <div class="blog-overlay">
                                <p>03 february 2020</p>
                                <h3><a href="#">Lorem ipsum dolor sit ame consectetur adipiscing</a></h3><a
                                    class="btn btn-outline" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="blog-card"><img src="img/blog-4.jpg" alt="blog-4">
                            <div class="blog-overlay">
                                <p>03 february 2020</p>
                                <h3><a href="#">Lorem ipsum dolor sit ame consectetur adipiscing</a></h3><a
                                    class="btn btn-outline" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="blog-card"><img src="img/blog-5.jpg" alt="blog-5">
                            <div class="blog-overlay">
                                <p>03 february 2020</p>
                                <h3><a href="#">Lorem ipsum dolor sit ame consectetur adipiscing</a></h3><a
                                    class="btn btn-outline" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="blog-card"><img src="img/blog-6.jpg" alt="blog-6">
                            <div class="blog-overlay">
                                <p>03 february 2020</p>
                                <h3><a href="#">Lorem ipsum dolor sit ame consectetur adipiscing</a></h3><a
                                    class="btn btn-outline" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="blog-card"><img src="img/blog-7.jpg" alt="blog-7">
                            <div class="blog-overlay">
                                <p>03 february 2020</p>
                                <h3><a href="#">Lorem ipsum dolor sit ame consectetur adipiscing</a></h3><a
                                    class="btn btn-outline" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="blog-card"><img src="img/blog-8.jpg" alt="blog-8">
                            <div class="blog-overlay">
                                <p>03 february 2020</p>
                                <h3><a href="#">Lorem ipsum dolor sit ame consectetur adipiscing</a></h3><a
                                    class="btn btn-outline" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i
                                        class="fas fa-long-arrow-alt-left"></i></a></li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">...</li>
                            <li class="page-item"><a class="page-link" href="#">67</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i
                                        class="fas fa-long-arrow-alt-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('myjs')

@endpush
