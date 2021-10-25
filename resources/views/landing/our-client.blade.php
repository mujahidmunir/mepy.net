<section class="single-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content">
                    <h2>Our Client</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section team-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="team-slider slider-arrow">
                    @foreach ($client as $item)
                    <div class="team-card">
                        <div class="team-img"><img src="{{asset('assets/images/'. $item->image)}}" alt="team-1">
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="team-btn"><a class="btn btn-outline" href="team.html"><i
                            class="fas fa-eye"></i><span>show more</span></a></div>
            </div>
        </div>
    </div>
</section>
