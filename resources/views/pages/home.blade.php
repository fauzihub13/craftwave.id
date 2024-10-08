@extends('layouts.app')

@section('title', '')

@push('style')
    <!-- CSS Libraries -->

@endpush

@section('main')

    <!--Hero Area-->
    <section class="vs-hero-wrapper position-relative  ">
        <div class="vs-hero-carousel" data-height="850" data-container="1900" data-slidertype="responsive">
            <!-- Slide 1-->
            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
                <img width="1920" height="850" src="{{ asset('assets/img/craftwave/hero/1.webp') }}" class="ls-bg" alt="hero-bg" />
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:300px; height:1558px; background-color:rgba(14, 84, 245, 0.5); top:-473px; left:51px;"
                    class="ls-l ls-text-layer d-hd-none"
                    data-ls="offsetxin:-800; offsetyin:-800; durationin:1700; delayin:1200; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; rotation:43.46;">
                </div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:589px; height:1819.7px; top:-485px; left:406px; background:linear-gradient(172deg, rgba(5, 26, 79, 0.35) 21%, rgba(0, 0, 0, 0) 54%);"
                    class="ls-l ls-text-layer d-hd-none"
                    data-ls="offsetxin:-800; offsetyin:-800; durationin:1500; delayin:1300; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; bgcolorout:transparent; colorout:transparent; rotation:43.46;">
                </div>
                <p style="font-size:18px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; border-width:2px 2px 2px 2px; border-color:#ffffff; border-radius:5px 5px 5px 5px; padding-top:9px; padding-right:23.5px; padding-left:23.5px; top:240px; left:650px; padding-bottom:9px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    AHLI PADA BIDANGNYA</p>
                <h1 style="top:225px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; color:#ffffff; font-family:Exo;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    LAYANAN
                </h1>
                <h1 style="top:305px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    WEBSITE & KONTEN TERBAIK 2024
                </h1>
                <div style="top:405px; left:350px; background-size:inherit; background-position:inherit; font-size:16px; line-height:28px; font-family:Fira Sans; width:695px; color:#ffffff; white-space:normal;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:600; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Mengoptimalkan website Anda dengan desain profesional dan pengelolaan konten strategis. Kami menghadirkan solusi digital kreatif yang siap meningkatkan bisnis Anda dengan teknologi terkini.
                </div>
                <div style="top:495px; left:350px; background-size:inherit; background-position:inherit; font-size:24px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route('konsultasi', ' ') }}" class="btn-secondary-white ls-hero-btn">KONSULTASI SEKARANG  <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <p style="font-size:32px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; border-width:2px 2px 2px 2px; border-color:#ffffff; border-radius:5px 5px 5px 5px; padding-top:18px; padding-right:44px; padding-left:44px; top:160px; left:90px; padding-bottom:18px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    LAYANAN KONSULTASI GRATIS</p>
                <h1 style="top:280px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; color:#ffffff; font-family:Exo;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    LAYANAN WEBSITE &
                </h1>
                <h1 style="top:380px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    KONTEN TERBAIK 2024
                </h1>
                <div style="top:540px; left:80px; background-size:inherit; background-position:inherit; font-size:24px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route('konsultasi', ' ') }}" class="btn-secondary-whitels-hero-btn">KONSULTASI SEKARANG  <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <h1 style="top:120px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; color:#ffffff; font-family:Exo; width:10000px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    LAYANAN WEBSITE &
                </h1>
                <h1 style="top:280px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; font-family:Exo; color:#ffffff; width:10000px; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    KONTEN TERBAIK 2024
                </h1>
                <div style="top:520px;  left:50%; text-align:center; background-size:inherit; background-position:inherit; font-size:24px; width:80%"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route('konsultasi', ' ') }}" class="btn-secondary-white ls-hero-btn">KONSULTASI SEKARANG  <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <a class="ls-l ls-hide-tablet ls-hide-phone" href="#next" target="_self" data-ls="static:forever;">
                    <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; left:1685px; top:50%;"
                        class="ls-html-layer">
                        <span class="icon-btn style2"><i class="far fa-arrow-right"></i></span>
                    </div>
                </a>
                <a class="ls-l ls-hide-tablet ls-hide-phone" href="#prev" target="_self" data-ls="static:forever;">
                    <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; left:150px; top:50%;"
                        class="ls-html-layer">
                        <span class="icon-btn style2"><i class="far fa-arrow-left"></i></span>
                    </div>
                </a>
            </div>
            <!-- Slide 2-->
            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:out; kenburnsscale:1.1;">
                <img width="1920" height="850" src="{{ asset('assets/img/craftwave/hero/2.webp') }}" class="ls-bg" alt="hero-bg" />
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:300px; height:1558px; background-color:rgba(14, 84, 245, 0.5); top:-473px; left:51px;"
                    class="ls-l ls-text-layer d-hd-none"
                    data-ls="offsetxin:-800; offsetyin:-800; durationin:1700; delayin:1200; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; rotation:43.46;">
                </div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:589px; height:1819.7px; top:-485px; left:406px; background:linear-gradient(172deg, rgba(5, 26, 79, 0.35) 21%, rgba(0, 0, 0, 0) 54%);"
                    class="ls-l ls-text-layer d-hd-none"
                    data-ls="offsetxin:-800; offsetyin:-800; durationin:1500; delayin:1300; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; bgcolorout:transparent; colorout:transparent; rotation:43.46;">
                </div>
                <p style="font-size:18px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; border-width:2px 2px 2px 2px; border-color:#ffffff; border-radius:5px 5px 5px 5px; padding-top:9px; padding-right:23.5px; padding-left:23.5px; top:240px; left:1100px; padding-bottom:9px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    PROSES CEPAT DAN MURAH</p>
                <h1 style="top:225px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; color:#ffffff; font-family:Exo;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    DUKUNGAN PEMBUATAN
                </h1>
                <h1 style="top:305px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    WEBSITE & MANAJEMEN KONTEN
                </h1>
                <div style="top:405px; left:350px; background-size:inherit; background-position:inherit; font-size:16px; line-height:28px; font-family:Fira Sans; width:695px; color:#ffffff; white-space:normal;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:600; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Kami menghadirkan layanan pembuatan website yang responsif dan pengelolaan konten yang efektif. Bangun kehadiran online yang kuat dengan strategi digital yang terukur dan berkelanjutan.
                </div>
                <div style="top:495px; left:350px; background-size:inherit; background-position:inherit; font-size:24px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route('konsultasi', ' ') }}" class="btn-secondary-white ls-hero-btn">KONSULTASI SEKARANG  <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <p style="font-size:32px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; border-width:2px 2px 2px 2px; border-color:#ffffff; border-radius:5px 5px 5px 5px; padding-top:18px; padding-right:44px; padding-left:44px; top:160px; left:90px; padding-bottom:18px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    LAYANAN KONSULTASI GRATIS</p>
                <h1 style="top:280px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; color:#ffffff; font-family:Exo;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    DUKUNGAN PEMBUATAN
                </h1>
                <h1 style="top:380px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    WEBSITE & MANAJEMEN KONTEN
                </h1>
                <div style="top:540px; left:80px; background-size:inherit; background-position:inherit; font-size:24px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route('konsultasi', ' ') }}" class="btn-secondary-white ls-hero-btn">KONSULTASI SEKARANG  <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <h1 style="top:120px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; color:#ffffff; font-family:Exo; width:10000px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    PEMBUATAN WEBSITE
                </h1>
                <h1 style="top:280px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; font-family:Exo; color:#ffffff; width:10000px; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    & MANAJEMEN KONTEN
                </h1>
                <div style="top:520px;  left:50%; text-align:center; background-size:inherit; background-position:inherit; font-size:24px; width:80%"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route('konsultasi', ' ') }}" class="btn-secondary-white ls-hero-btn">KONSULTASI SEKARANG  <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Slide 3-->
            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
                <img width="1920" height="850" src="{{ asset('assets/img/craftwave/hero/3.webp') }}" class="ls-bg" alt="hero-bg" />
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:300px; height:1558px; background-color:rgba(14, 84, 245, 0.5); top:-473px; left:51px;"
                    class="ls-l ls-text-layer d-hd-none"
                    data-ls="offsetxin:-800; offsetyin:-800; durationin:1700; delayin:1200; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; rotation:43.46;">
                </div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:589px; height:1819.7px; top:-485px; left:406px; background:linear-gradient(172deg, rgba(5, 26, 79, 0.35) 21%, rgba(0, 0, 0, 0) 54%);"
                    class="ls-l ls-text-layer d-hd-none"
                    data-ls="offsetxin:-800; offsetyin:-800; durationin:1500; delayin:1300; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; bgcolorout:transparent; colorout:transparent; rotation:43.46;">
                </div>
                <p style="font-size:18px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; border-width:2px 2px 2px 2px; border-color:#ffffff; border-radius:5px 5px 5px 5px; padding-top:9px; padding-right:23.5px; padding-left:23.5px; top:240px; left:635px; padding-bottom:9px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    AHLI PADA BIDANGNYA</p>
                <h1 style="top:225px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; color:#ffffff; font-family:Exo;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    TIM AHLI
                </h1>
                <h1 style="top:305px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    DIGITAL & PROFESIONAL KREATIF
                </h1>
                <div style="top:405px; left:350px; background-size:inherit; background-position:inherit; font-size:16px; line-height:28px; font-family:Fira Sans; width:695px; color:#ffffff; white-space:normal;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:600; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Dipercaya oleh banyak bisnis, tim kami adalah gabungan dari desainer web kreatif dan ahli konten yang berpengalaman. Kami siap mengubah ide Anda menjadi kenyataan digital yang mengesankan.</div>
                <div style="top:495px; left:350px; background-size:inherit; background-position:inherit; font-size:24px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route('konsultasi', ' ') }}" class="btn-secondary-white ls-hero-btn">KONSULTASI SEKARANG  <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <p style="font-size:32px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; border-width:2px 2px 2px 2px; border-color:#ffffff; border-radius:5px 5px 5px 5px; padding-top:18px; padding-right:44px; padding-left:44px; top:160px; left:90px; padding-bottom:18px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    HIGHLY QUALIFIYED ENGINERS</p>
                <h1 style="top:280px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; color:#ffffff; font-family:Exo;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    TIM AHLI
                </h1>
                <h1 style="top:380px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    DIGITAL & PROFESIONAL KREATIF
                </h1>
                <div style="top:540px; left:80px; background-size:inherit; background-position:inherit; font-size:24px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route('konsultasi', ' ') }}" class="btn-secondary-white ls-hero-btn">KONSULTASI SEKARANG  <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <h1 style="top:120px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; color:#ffffff; font-family:Exo; width:10000px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    TIM AHLI DIGITAL
                </h1>
                <h1 style="top:280px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; font-family:Exo; color:#ffffff; width:10000px; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    & PROFESIONAL KREATIF
                </h1>
                <div style="top:520px;  left:50%; text-align:center; background-size:inherit; background-position:inherit; font-size:24px; width:80%"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="{{ route('konsultasi', ' ') }}" class="btn-secondary-white ls-hero-btn">KONSULTASI SEKARANG  <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div data-bg-src="{{ asset('assets/img/bg/ab-bg-1-1.jpg') }}">
        <!--Features Area-->
        <section class="space-top "></section>
        <!-- About Us-->
        <section class="position-relative space-bottom">
            {{-- <span class="about-shape1 d-none d-xl-block">Craftwave.id</span> --}}
            <div class="container z-index-common">
                <div class="row gx-60">
                    <div class="col-lg-6 col-xl-5 mb-50 mb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="img-box1">
                            <div class="img-1">
                                <img src="{{ asset('assets/img/craftwave/other/Introduction.webp') }}" alt="About image">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 align-self-center wow fadeInUp" data-wow-delay="0.3s">
                        {{-- <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Get best It solution 2024</span> --}}
                        <h2 class="sec-title h1">Digital Website dan Content Management Agency</h2>
                        <p class="mb-4 mt-1 pb-3">Craftwave.id hadir untuk mengubah ide bisnis Anda menjadi identitas digital yang kuat,
                                                    dengan layanan pembuatan website profesional dan pengelolaan media sosial yang kreatif dan berdampak.</p>
                        <div class="call-media">
                            <div class="call-media__icon"><img src="assets/img/icon/tel-1-1.png" alt="icon"></div>
                            <div class="media-body">
                                <span class="call-media__label">LAYANAN 24 JAM TERSEDIA</span>
                                <p class="call-media__info">Hubungi Kami: <a href="{{ route('konsultasi', ' ') }}">+62 8998 6012 63</a></p>
                            </div>
                        </div>
                        <a href="{{ route('tentang-kami') }}" class="btn-primary-gradient">Tentang Kami  <i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--Service Area-->
    <section class=" space-top space-extra-bottom" data-bg-src="assets/img/bg/sr-bg-1-1.png">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="title-area">
                        {{-- <span class="sec-subtitle">Our Latest Services</span> --}}
                        <h2 class="sec-title h1">Layanan <span class="text-blue-gradient">Craftwave.id</span></h2>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp justify-content-center" data-wow-delay="0.2s">
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1 card-primary">
                        <div class="service-icon"><img src="assets/img/icon/sr-icon-1-1.png" alt="Features"></div>
                        <h3 class="service-title h5"><a href="">Pengelolaan Sosial Media</a></h3>
                        <p class="service-text">Tingkatkan brand Anda dengan strategi social media yang menghubungkan dan menginspirasi.</p>
                        <a href="{{ route('layanan.index') }}" class="btn-secondary-smoke">Pesan Sekarang <i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1 card-primary">
                        <div class="service-icon"><img src="assets/img/icon/sr-icon-1-2.png" alt="Features"></div>
                        <h3 class="service-title h5"><a href="">Pembuatan Website</a></h3>
                        <p class="service-text">Dapatkan website elegan yang mengesankan dan mengonversi pengunjung menjadi pelanggan setia.</p>
                        <a href="{{ route('layanan.index') }}" class="btn-secondary-smoke">Pesan Sekarang <i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Counter Area-->
    <div class="position-relative ">
        <div class="counter-shape1"></div>
        <div class="bg-black z-index-common space" data-bg-src="{{ asset('assets/img/craftwave/other/Counter.webp') }}">
            <div class="container wow fadeInUp" data-wow-delay="0.2s">
                <div class="row justify-content-between gy-4">
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="assets/img/icon/count-1-1.png" alt="icon"></div>
                            <div class="media-body">
                                <span class="counter-media__number h1 text-white">9</span>
                                <p class="counter-media__title text-white">Klien</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="assets/img/icon/count-1-2.png" alt="icon"></div>
                            <div class="media-body">
                                <span class="counter-media__number h1 text-white">12</span>
                                <p class="counter-media__title text-white">Website</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="assets/img/icon/count-1-3.png" alt="icon"></div>
                            <div class="media-body">
                                <span class="counter-media__number h1 text-white">8</span>
                                <p class="counter-media__title text-white">Sosial Media</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--Portofolio Area-->
    <section class="vs-blog-wrapper  space-top space-extra-bottom" data-bg-src="assets/img/bg/blog-bg-1-1.jpg">
        <div class="container  wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area">
                        {{-- <span class="sec-subtitle">Weekly Updates</span> --}}
                        <h2 class="sec-title h1">Portofolio <span class="text-blue-gradient">Kami</span></h2>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="{{ asset('assets/img/craftwave/portfolio/1.png') }}" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <h3 class="blog-title h6">Branding Website Consultant IT Reclas Technology</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="{{ asset('assets/img/craftwave/portfolio/2.png') }}" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <h3 class="blog-title h6">Website Perdagangan Produk Pertanian B2B</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="{{ asset('assets/img/craftwave/portfolio/3.png') }}" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <h3 class="blog-title h6">Website Toko Online Aromatherapy JivaJoy</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('portofolio') }}" class="sec-subtitle text-center">Selengkapnya <i
                    class="far fa-long-arrow-right"></i></a>
        </div>
    </section>

    <!--Brand Section-->
    <section class=" space-bottom">
        <div class="container">
            <div class="sec-line-wrap">
                <div class="sec-line"></div>
                <h2 class="sec-title2">Klien Kami</h2>
                <div class="sec-line"></div>
            </div>
            <div class="row vs-carousel text-center" data-slide-show="5" data-md-slide-show="3" data-sm-slide-show="2"
                data-xs-slide-show="2">
                <div class="col-auto"><img src="{{ asset('assets/img/craftwave/client/1.png') }}" alt="Brand"></div>
                <div class="col-auto"><img src="{{ asset('assets/img/craftwave/client/2.png') }}" alt="Brand"></div>
                <div class="col-auto"><img src="{{ asset('assets/img/craftwave/client/3.png') }}" alt="Brand"></div>
                <div class="col-auto"><img src="{{ asset('assets/img/craftwave/client/4.png') }}" alt="Brand"></div>
                <div class="col-auto"><img src="{{ asset('assets/img/craftwave/client/5.png') }}" alt="Brand"></div>
                <div class="col-auto"><img src="{{ asset('assets/img/craftwave/client/6.png') }}" alt="Brand"></div>
                <div class="col-auto"><img src="{{ asset('assets/img/craftwave/client/7.png') }}" alt="Brand"></div>
                <div class="col-auto"><img src="{{ asset('assets/img/craftwave/client/8.png') }}" alt="Brand"></div>
                <div class="col-auto"><img src="{{ asset('assets/img/craftwave/client/9.png') }}" alt="Brand"></div>
            </div>
        </div>
    </section>

    <!--Testimonial Area-->
    <section class=" space-extra-bottom">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-between">
                <div class="col-lg-auto text-center text-lg-start">
                    <div class="title-area">
                        {{-- <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Our Best Review’s</span> --}}
                        <h2 class="sec-title h1">Kata <span class="text-blue-gradient">Mereka</span></h2>
                    </div>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <div class="sec-btns">
                        <button class="btn-secondary-white" data-slick-prev="#testislide1"><i
                                class="far fa-arrow-left"></i></button>
                        <button class="btn-secondary-white " data-slick-next="#testislide1"><i
                                class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2" id="testislide1">
                <div class="col-xl-4">
                    <div class="testi-style1">
                        <div class="testi-icon"><i class="fal fa-quote-right"></i></div>
                        <p class="testi-text">“Craftwave.id membuat sistem absensi dan laporan kegiatan yang sangat membantu pengelolaan karyawan kami. Semua terintegrasi dengan baik dan mudah digunakan. Hasilnya benar-benar di luar ekspektasi kami!”</p>
                        <h3 class="testi-name h6">Panji Yeza</h3>
                        <div class="testi-degi">CEO Sambal Bakar Sutomo</div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="testi-style1">
                        <div class="testi-icon"><i class="fal fa-quote-right"></i></div>
                        <p class="testi-text">“Website e-commerce B2B yang dibuat oleh craftwave.id sangat profesional dan sesuai dengan kebutuhan pasar kami. Fitur-fiturnya lengkap dan proses transaksi berjalan lancar. Benar-benar solusi terbaik untuk bisnis kami.”</p>
                        <h3 class="testi-name h6">Sarah</h3>
                        <div class="testi-degi">CEO Agrihub</div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="testi-style1">
                        <div class="testi-icon"><i class="fal fa-quote-right"></i></div>
                        <p class="testi-text">“Website pencatatan dan pelatihan pertanian dari Craftwave.id hasilnya sangat memuaskan. Sistemnya memudahkan kami dalam mencatat hasil panen serta mengadakan pelatihan online bagi anggota kelompok tani.”</p>
                        <h3 class="testi-name h6">Victor Lee</h3>
                        <div class="testi-degi">Founder One Home Farm</div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="testi-style1">
                        <div class="testi-icon"><i class="fal fa-quote-right"></i></div>
                        <p class="testi-text">“Website pemetaan lokasi kebun yang dibuat oleh craftwave.id sangat membantu kami dalam memperlihatkan kebun-kebun kota. Pengunjung jadi mudah menemukan lokasi kami dan semua informasi tersedia dengan jelas.”</p>
                        <h3 class="testi-name h6">Syifa</h3>
                        <div class="testi-degi">Pemilik GorBoen</div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="testi-style1">
                        <div class="testi-icon"><i class="fal fa-quote-right"></i></div>
                        <p class="testi-text">“Website daftar wisata kuliner dan tempat wisata yang kami pesan dari craftwave.id sangat informatif dan mudah diakses oleh wisatawan. Desainnya sangat menarik dan fitur pencariannya sangat memudahkan. ”</p>
                        <h3 class="testi-name h6">Farhan</h3>
                        <div class="testi-degi">Pemilik Studio Photo</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Team Area-->
    <section class="space-extra-bottom">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area">
                        <h2 class="sec-title h1">Tim <span class="text-blue-gradient">Kami</span></h2>
                    </div>
                </div>
            </div>
            <div class="row  d-flex justify-content-center" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2">
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="#"><img src="{{ asset('assets/img/craftwave/tim/Fauzi.png') }}" alt="image"></a>

                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="#">Fauzi Adi Saputra</a>
                            </h3>
                            <p class="team-degi">Chief Technology Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="#"><img src="{{ asset('assets/img/craftwave/tim/Marsya.png') }}" alt="image"></a>

                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="#">Marsya Halya Alfrida</a>
                            </h3>
                            <p class="team-degi">Chief Marketing Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="#"><img src="{{ asset('assets/img/craftwave/tim/Mia.png') }}" alt="image"></a>

                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="#">Mia Putri Yeza</a>
                            </h3>
                            <p class="team-degi">Chief Financial Officer</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--CTA Area-->
    @include('components.free-consult')

@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->


@endpush
