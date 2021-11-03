<section class="single-banner mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content">
                    <h2>Our Talent</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section team-part">
    <div class="container">
        <div class="row">
            @if (!empty($talent))
            @foreach ($talent as $item)
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="team-card team-gape">
                    <div class="team-img"><img src="{{ asset('assets/images/gallery/talent/'. $item->image) }}" alt="team-1">
                        <div class="team-overlay">
                            <ul class="team-icon">
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="icon icon-inline" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-meta">
                        <h4>{{ $item->title }}</h4>
                        <p style="text-align: justify">{!! html_entity_decode( \Illuminate\Support\Str::limit($item->description, 300) ) !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="team-btn"><a class="btn btn-outline" href="{{ url('talent-management') }}"><i class="fas fa-eye"></i><span>show
                                more</span></a></div>
            </div>
        </div>
    </div>
</section>
