<!DOCTYPE html>
<html lang="id">
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
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.0.0-beta2-web/css/all.css') }}">
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
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "+00000000", // WhatsApp number
                instagram: "mepy.id", // Line QR code URL
                facebook: "mepy.id", // Facebook URL
                email: "info@mepy.id", // Email
                call: "+000000000", // Call phone number
                company_logo_url: "{{asset('assets/images/customer.jpg')}}", // URL of company logo (png, jpg, gif)
                greeting_message: "Hai, apa yang bisa Saya bantu untuk Kamu? Kirimkan pertanyaan Anda dan Kami akan segera membalasnya.", // Text of greeting message
                call_to_action: "Hubungi Media Sosial", // Call to action
                button_color: "#00E676", // Color of button
                position: "left", // Position may be 'right' or 'left'
                order: "whatsapp,facebook,sms,call", // Order of buttons
                ga: true, // Google Analytics enabled
                branding: false, // Show branding string
                mobile: true, // Mobile version enabled
                desktop: true, // Desktop version enabled
                greeting: true, // Greeting message enabled
                shift_vertical: 0, // Vertical position, px
                shift_horizontal: 0, // Horizontal position, px
                domain: "superpolis.solusiprimaselindo.com", // site domain
                key: "1QRo1ZQ7TrWm8hWd-AenTw", // pro-widget key
            };
            var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>

</body>
<!-- Mirrored from mironmahmud.com/ushno/assets/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Oct 2021 06:34:41 GMT -->

</html>
