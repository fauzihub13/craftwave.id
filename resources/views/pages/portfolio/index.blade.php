@extends('layouts.app')

@section('title', 'Portofolio ')

@push('style')
    <!-- CSS Libraries -->

@endpush

@section('main')

    <!--Breadcumb-->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Portofolio Kami</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Beranda</a></li>
                        <li>Portofolio Kami</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--Contact Form Area-->
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
            <div class="row " data-slide-show="3" data-md-slide-show="2">
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
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="{{ asset('assets/img/craftwave/portfolio/4.png') }}" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <h3 class="blog-title h6">Website Lokasi Kebun Bogor GorBoen</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="{{ asset('assets/img/craftwave/portfolio/5.png') }}" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <h3 class="blog-title h6">Website Dasboard Pemesanan Photo Box FOTOHOKKIE</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="{{ asset('assets/img/craftwave/portfolio/6.png') }}" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <h3 class="blog-title h6">Website Dasboard Absensi Sambal Bakar Sutomo</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="{{ asset('assets/img/craftwave/portfolio/7.png') }}" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <h3 class="blog-title h6">Website Dasboard Admin One Home Farm</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="{{ asset('assets/img/craftwave/portfolio/8.png') }}" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <h3 class="blog-title h6">Website Wisata  dan Kuliner Bogor GorTour</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="{{ asset('assets/img/craftwave/portfolio/9.png') }}" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <h3 class="blog-title h6">Website Minuman Herbal Moku</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('components.free-consult')




@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->


@endpush
