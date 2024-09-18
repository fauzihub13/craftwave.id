<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
        name="viewport">
    <title>@yield('title') Craftwave.id</title>
    <link rel="icon" type="image/x-icon" href="assets/img/craftwave/logo/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/craftwave/logo/logo-48x48.png">
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/craftwave/logo/logo.png') }}"> --}}

    {{-- Meta Tags --}}
    <meta name="title" content="Craftwave.id">
    <meta name="apple-mobile-web-app-title" content="Craftwave.id">
    <meta name="description" content="Craftwave.id adalah startup yang menyediakan jasa pembuatan website profesional dan manajemen konten sosial media. ">
    <meta name="keywords" content="Jasa Pembuatan Website, Kelola Sosial Media, Digital Agency, Content Management, Website Builder, Design Instagram, Jasa Design">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="Craftwave.id">
    <meta property="og:title" content="Craftwave.id | Pembuatan Website & Kelola Sosial Media">
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Craftwave.id adalah startup yang menyediakan jasa pembuatan website profesional dan manajemen konten sosial media.">
    <meta property="og:url" content="https://craftwave.id">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="Craftwave.id">
    <meta property="og:locale" content="id_ID" />
    <meta property="og:determiner" content="Craftwave.id.id" />

    <!-- General CSS Files -->



    @stack('style')

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700&family=Fira+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!--All CSS File -->
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- Layerslider -->
    <link rel="stylesheet" href="{{ asset('assets/css/layerslider.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

</head>
</head>

<body>

    <!-- Header -->
    @include('components.header')

    <!-- Content -->
    @yield('main')

    <!-- Footer -->
    @include('components.footer')

    <!-- Scroll To Top -->
    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up  blue-gradient-color"></i></a>


    <!-- General JS Scripts -->

    @stack('scripts')

    <!-- Template JS File -->
    <!-- Jquery -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <!-- <script src="assets/js/app.min.js') }}"></script> -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Layerslider -->
    <script src="{{ asset('assets/js/layerslider.utils.js') }}"></script>
    <script src="{{ asset('assets/js/layerslider.transitions.js') }}"></script>
    <script src="{{ asset('assets/js/layerslider.kreaturamedia.jquery.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- WOW.js Animation -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Main Js File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
