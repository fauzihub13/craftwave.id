@extends('layouts.app')

@section('title', 'Portofolio ')

@push('style')
    <!-- CSS Libraries -->

@endpush

@section('main')

    <!--Breadcumb-->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/craftwave/other/Counter.webp') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Referensi Website</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('beranda') }}">Beranda</a></li>
                        <li>Website</li>
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
                        <h2 class="sec-title h1">Referensi <span class="text-blue-gradient">Website</span></h2>
                    </div>
                </div>
            </div>
            <div class="row " data-slide-show="3" data-md-slide-show="2">

                <div class="col-xl-4">
                    <a href="https://website.craftwave.id/landing-pages/prolearn">
                        <div class="vs-blog blog-style1">
                            <div class="blog-img">
                                <img src="{{ asset('assets/img/craftwave/portfolio/website/11.png') }}" alt="Blog Image" class="w-100">
                                <div class="blog-content">
                                    <h3 class="blog-title h6">Landing Page - Prolearn</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-4">
                    <a href="https://website.craftwave.id/landing-pages/cafe-1">
                        <div class="vs-blog blog-style1">
                            <div class="blog-img">
                                <img src="{{ asset('assets/img/craftwave/portfolio/website/12.png') }}" alt="Blog Image" class="w-100">
                                <div class="blog-content">
                                    <h3 class="blog-title h6">Landing Page - Cafe</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-4">
                    <a href="https://website.craftwave.id/company-profile/hotel-1">
                        <div class="vs-blog blog-style1">
                            <div class="blog-img">
                                <img src="{{ asset('assets/img/craftwave/portfolio/website/13.png') }}" alt="Blog Image" class="w-100">
                                <div class="blog-content">
                                    <h3 class="blog-title h6">Company Profile - Hotel</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-4">
                    <a href="https://website.craftwave.id/company-profile/properti-1">
                        <div class="vs-blog blog-style1">
                            <div class="blog-img">
                                <img src="{{ asset('assets/img/craftwave/portfolio/website/14.png') }}" alt="Blog Image" class="w-100">
                                <div class="blog-content">
                                    <h3 class="blog-title h6">Company Profile - Properti</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-4">
                    <a href="https://website.craftwave.id/company-profile/travel-1">
                        <div class="vs-blog blog-style1">
                            <div class="blog-img">
                                <img src="{{ asset('assets/img/craftwave/portfolio/website/15.png') }}" alt="Blog Image" class="w-100">
                                <div class="blog-content">
                                    <h3 class="blog-title h6">Company Profile - Travel</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-4">
                    <a href="https://website.craftwave.id/company-profile/resto-1">
                        <div class="vs-blog blog-style1">
                            <div class="blog-img">
                                <img src="{{ asset('assets/img/craftwave/portfolio/website/16.png') }}" alt="Blog Image" class="w-100">
                                <div class="blog-content">
                                    <h3 class="blog-title h6">Company Profile - Restaurant</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-4">
                    <a href="https://website.craftwave.id/toko-online/agrihub">
                        <div class="vs-blog blog-style1">
                            <div class="blog-img">
                                <img src="{{ asset('assets/img/craftwave/portfolio/website/17.png') }}" alt="Blog Image" class="w-100">
                                <div class="blog-content">
                                    <h3 class="blog-title h6">Toko Online - Agrihub</h3>
                                </div>
                            </div>
                        </div>
                    </a>
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
