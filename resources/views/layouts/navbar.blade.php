<nav class="navbar-part">
    <div class="navbar-bg animate__pulse">
        <div class="container">
            <div class="navbar-content"><a class="navbar-logo" href="{{url('/')}}"><img src="{{ asset('assets/images/logo/mepy.png') }}"
                        alt="logo"></a><button class="navbar-toggle" type="button"><i
                        class="fas fa-bars"></i></button>
                <div class="navbar-overlay">
                    <div class="navbar-slide">
                        <div class="slide-head"><a href="{{url('/')}}"><img src="{{ asset('assets/images/logo/mepy.png') }}" alt="logo"></a><button
                                class="cencel"><i class="fas fa-times"></i></button></div>
                        <ul class="navbar-list">
                            <li class="navbar-item {{ request()->is('/') ? 'active' : '' }}"><a class="navbar-link" href="{{ url('/') }}"><span><i
                                            class="fas fa-home"></i>Home</span></a></li>

{{--                            <li class="navbar-player">--}}
{{--                                <div class="player"><button class="player-btn" id="play-pause-button"><i--}}
{{--                                            class="fas fa-play"></i></button></div>--}}
{{--                            </li>--}}
{{--                             <li class="navbar-item navbar-dropdown"><a class="navbar-link" href="#"><span><i--}}
{{--                                            class="fas fa-headphones-alt"></i>pages</span><small--}}
{{--                                        class="fas fa-chevron-down"></small></a>--}}
{{--                                <ul class="dropdown-list">--}}
{{--                                    <li><a class="dropdown-link" href="team.html">Team Members</a></li>--}}
{{--                                    <li><a class="dropdown-link" href="video.html">Videos</a></li>--}}
{{--                                    <li><a class="dropdown-link" href="gallery.html">Gallery</a></li>--}}
{{--                                    <li><a class="dropdown-link" href="sponsor.html">Become a Sponsor</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="navbar-item navbar-dropdown"><a class="navbar-link" href="#"><span><i--}}
{{--                                            class="fas fa-headphones-alt"></i>blogs</span><small--}}
{{--                                        class="fas fa-chevron-down"></small></a>--}}
{{--                                <ul class="dropdown-list">--}}
{{--                                    <li><a class="dropdown-link" href="blog-list.html">Blog list</a></li>--}}
{{--                                    <li><a class="dropdown-link" href="blog-details.html">blog details</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                            <li class="navbar-item {{ request()->is('record') ? 'active' : '' }}"><a class="navbar-link" href="{{ url('record') }}"><span><i
                                class="fas fa-record-vinyl"></i>Record</span></a></li>

                            <li class="navbar-item {{ request()->is('creativa') ? 'active' : '' }}"><a class="navbar-link" href="{{ url('creativa') }}"><span><i
                                    class="fas fa-headphones-alt"></i>Creativa</span></a></li>

                            <li class="navbar-item {{ request()->is('talent-management') || request()->is('profileTalent') ? 'active' : '' }}"><a class="navbar-link" href="{{ url('talent-management') }}"><span><i
                                class="fas fa-tasks"></i>Talent Management</span></a></li>

                            <li class="navbar-item {{ request()->is('entertainment') ? 'active' : '' }}"><a class="navbar-link" href="{{ url('entertainment') }}"><span><i
                                            class="fas fa-film"></i>Entertainment</span></a>
                            </li>
                            <li class="navbar-item {{ request()->is('contact-us') ? 'active' : '' }}"><a class="navbar-link" href="{{ url('contact-us') }}"><span><i
                                            class="fas fa-map-marker-alt"></i>Contact Us</span></a>
                            </li>



                        </ul>
                        <div class="navbar-btn"><a class="btn btn-outline" href="{{ url('login') }}"><i
                                    class="fas fa-sign-in-alt"></i><span>Login</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<nav class="navbar navbar-dark navbar-expand fixed-bottom d-lg-none d-xl-none font-weight-bold"
     style="height: 7%; background-color: #a22bfb;">
    <ul class="navbar-nav nav-justified w-100" style="font-size: 18px; color: #0a0f33;">
        <li class="nav-item">
            <a href="{{URL::to('/')}}" class="nav-link" style="color: white; ">
                <i class="fa fa-home"></i>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{URL::to('/record')}}" class="nav-link" style="color: white; ">
                <i class="fas fa-fas fa-record-vinyl "></i>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{URL::to('/talent-management')}}" class="nav-link" style="color: white; ">
                <i class="fas fa-users"></i>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{URL::to('/talent-management')}}" class="nav-link" style="color: white; ">
                <i class="fas fa-headphones"></i>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{URL::to('/talent-management')}}" class="nav-link" style="color: white; ">
                <i class="fas fa-film"></i>
            </a>
        </li>







    </ul>
</nav>
