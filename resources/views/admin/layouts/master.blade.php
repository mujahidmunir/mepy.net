<!DOCTYPE html>
<html lang="en" data-footer="true"
    data-override='{"attributes": {"placement": "vertical","layout": "boxed", "behaviour": "unpinned" }, "storagePrefix": "elearning-portal"}'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>@stack('title')</title>
    <meta name="description" content="Acorn elearning platform dashboard.">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('admin/img/favicon/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('admin/img/favicon/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('admin/img/favicon/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('admin/img/favicon/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('admin/img/favicon/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('admin/img/favicon/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('admin/img/favicon/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('admin/img/favicon/apple-touch-icon-152x152.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('admin/img/favicon/favicon-196x196.png') }}" sizes="196x196">
    <link rel="icon" type="image/png" href="{{ asset('admin/img/favicon/favicon-96x96.png') }}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{ asset('admin/img/favicon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('admin/img/favicon/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('admin/img/favicon/favicon-128.png') }}" sizes="128x128">
    <meta name="application-name" content="&nbsp;">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="{{ asset('admin/img/favicon/mstile-144x144.png') }}">
    <meta name="msapplication-square70x70logo" content="{{ asset('admin/img/favicon/mstile-70x70.png') }}">
    <meta name="msapplication-square150x150logo" content="{{ asset('admin/img/favicon/mstile-150x150.png') }}">
    <meta name="msapplication-wide310x150logo" content="{{ asset('admin/img/favicon/mstile-310x150.png') }}">
    <meta name="msapplication-square310x310logo" content="{{ asset('admin/img/favicon/mstile-310x310.png') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.0.0-beta2-web/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/font/CS-Interface/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/vendor/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/vendor/glide.core.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
    <script src="{{ asset('admin/js/base/loader.js') }}"></script>
    @stack('css')
</head>

<body>
    <div id="root">
        @include('admin.layouts.nav')
        <main>
            <div class="container">
                <div class="page-title-container">
                    <div class="row">
                        <div class="col-12 col-md-7">
                         @yield('breadcrumbs')
                        </div>
                    </div>
                </div>
                @include('sweetalert::alert')
                @yield('content')
            </div>
        </main>
        <footer>
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <p class="mb-0 text-muted text-medium">Colored Strategies 2021</p>
                        </div>
                        <div class="col-sm-6 d-none d-sm-block">
                            <ul class="breadcrumb pt-0 pe-0 mb-0 float-end">
                                <li class="breadcrumb-item mb-0 text-medium">
                                    <a href="https://1.envato.market/BX5oGy" target="_blank" class="btn-link">Review</a>
                                </li>
                                <li class="breadcrumb-item mb-0 text-medium">
                                    <a href="https://1.envato.market/BX5oGy" target="_blank"
                                        class="btn-link">Purchase</a>
                                </li>
                                <li class="breadcrumb-item mb-0 text-medium"><a
                                        href="https://acorn-html-docs.coloredstrategies.com/" target="_blank"
                                        class="btn-link">Docs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    @include('admin.layouts.settings')
    <script src="{{ asset('admin/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/OverlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/autoComplete.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/clamp.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/glide.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('admin/font/CS-Line/csicons.min.js') }}"></script>
    <script src="{{ asset('admin/js/base/helpers.js') }}"></script>
    <script src="{{ asset('admin/js/base/globals.js') }}"></script>
    <script src="{{ asset('admin/js/base/nav.js') }}"></script>
    <script src="{{ asset('admin/js/base/search.js') }}"></script>
    <script src="{{ asset('admin/js/base/settings.js') }}"></script>
    <script src="{{ asset('admin/js/base/init.js') }}"></script>
    <script src="{{ asset('admin/js/cs/glide.custom.js') }}"></script>
    <script src="{{ asset('admin/js/cs/charts.extend.js') }}"></script>
    <script src="{{ asset('admin/js/pages/dashboard.elearning.js') }}"></script>
    <script src="{{ asset('admin/js/common.js') }}"></script>
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
    @stack('js')
</body>

</html>
