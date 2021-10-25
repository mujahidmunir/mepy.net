@foreach ($slide as $item)
<section style="background-image: url({{ URL::to('assets/images/slide') }}/{{ $item->image }});">
    <div class="banner-oly">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content">
                        <h1>{{ $item->title }}</h1>
                        <p>{{ $item->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
