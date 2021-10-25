<section class="single-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content">
                    <h2>Our Work</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section our-work">
    <div class="container">
        @foreach ($article as $item)
        @if ($item->category_id == 2)
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>{{ $item->title }}</h2>
                </div>
            </div>
            <div class="col-lg-6 d-float-right">
                <div class="blog-card"><img src="{{ asset('assets/images/thumb/record/'.$item->thumb) }}" alt="blog-1"
                        style="max-height: 300px;">
                    <div class="blog-overlay">
                        <p>{{ Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y') }}</p>
                        <h3><a href="#">Lorem ipsum dolor sit ame consectetur adipiscing</a></h3><a
                            class="btn btn-outline" href="#">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <p style="text-align: justify">{!! html_entity_decode($item->description) !!}</p>
            </div>
        </div>
        @elseif($item->category_id == 3)
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>{{ $item->title }}</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="blog-card"><img src="{{ asset('assets/images/thumb/creativa/'.$item->thumb) }}" alt="blog-1"
                        style="max-height: 300px;">
                    <div class="blog-overlay">
                        <p>{{ Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y') }}</p>
                        <h3><a href="#">Lorem ipsum dolor sit ame consectetur adipiscing</a></h3><a
                            class="btn btn-outline" href="#">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <p style="text-align: justify">{!! html_entity_decode($item->description) !!}</p>
            </div>
        </div>

        @elseif($item->category_id == 4)
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>{{ $item->title }}</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <p style="text-align: justify">{!! html_entity_decode($item->description) !!}</p>
            </div>
            <div class="col-lg-6">
                <div class="blog-card"><img src="{{ asset('assets/images/thumb/talent/'.$item->thumb) }}" alt="blog-1"
                        style="max-height: 300px;">
                    <div class="blog-overlay">
                        <p>{{ Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y') }}</p>
                        <h3><a href="#">Lorem ipsum dolor sit ame consectetur adipiscing</a></h3><a
                            class="btn btn-outline" href="#">read more</a>
                    </div>
                </div>
            </div>
        </div>

        @elseif($item->category_id == 5)

        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>{{ $item->title }}</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <p style="text-align: justify">{!! html_entity_decode($item->description) !!}</p>
            </div>
            <div class="col-lg-6">
                <div class="blog-card"><img src="{{ asset('assets/images/thumb/entertainment/'.$item->thumb) }}" alt="blog-1"
                        style="max-height: 300px;">
                    <div class="blog-overlay">
                        <p>{{ Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y') }}</p>
                        <h3><a href="#">Lorem ipsum dolor sit ame consectetur adipiscing</a></h3><a
                            class="btn btn-outline" href="#">read more</a>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</section>
