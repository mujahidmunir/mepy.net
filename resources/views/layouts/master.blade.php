<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mironmahmud.com/ushno/assets/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Oct 2021 06:33:34 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author-name" content="Mironcoder">
    <meta name="author-email" content="mironcoder@gmail.com">
    <meta name="author-profile" content="https://themeforest.net/user/mironcoder">
    <meta name="template-name" content="Ushno">
    <meta name="template-type" content="FM Radio Station">
    <meta name="template-title" content="Ushno - FM Radio Station Bootstrap HTML Template">
    <meta name="keywords"
        content="ushno, fm, bootstrap, html, template, mp3, player, radio station, responsive, schedule, shoutcast, online radio station template, radio station html template, radio station website template, mp3 player">
    <title>@stack('mytitle')</title>
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom/index.css') }}">
    @stack('mycss')
</head>

<body>
    <div class="back2top-btn"><a href="#"><i class="fas fa-long-arrow-alt-up"></i></a></div>
    @include('layouts.header')

    @include('layouts.navbar')
    <main class="banner-slider">
        @yield('slide')
    </main>

    @yield('content')

    @include('layouts.footer')
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom/slick.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom/venobox.js') }}"></script>
    <script src="{{ asset('assets/js/custom/player.js') }}"></script>

    @stack('myjs')
    <script src="{{ asset('assets/js/custom/main.js') }}"></script>

</body>
<!-- Mirrored from mironmahmud.com/ushno/assets/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Oct 2021 06:34:41 GMT -->

</html>
