@extends('layouts.app')

@section('title', 'Layanan ')

@push('style')
    <!-- CSS Libraries -->

@endpush

@section('main')


    <!--Breadcumb-->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Layanan</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Beranda</a></li>
                        <li>Layanan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Service Area-->

    <!--Service Area-->
    <section class=" space-top space-extra-bottom" data-bg-src="assets/img/bg/sr-bg-1-1.png">
        <div class="container">

            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="title-area">
                        <h2 class="sec-title h1">Layanan <span class="text-blue-gradient">Craftwave.id</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-lg-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.2s" id="tab-service-1">
                    <div class="title-area ">
                        <h6 class="sec-title ">
                            <a href="" class="tab-services">Website</a>
                        </h6>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.2s" id="tab-service-2">
                    <div class="title-area">
                        <h6 class="sec-title">
                            <a href="" class="tab-services">Social Media</a>
                        </h6>
                    </div>
                </div>
            </div>

            {{-- Tab Website --}}
            <div class="row " data-slide-show="3" data-md-slide-show="2" id="tab-services-content-1">
                <div class="col-xl-4">
                    <div class="price-style1 primary-color">
                        <div class="price-shape"></div>
                        <h3 class="price-package h5">Landing Page</h3>
                        <div class="price-amount h1 text-blue-gradient">499k <span class="price-duration"><s></s></span></div>
                        <div class="price-features">
                            <ul>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>1 halaman website statis</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free domain</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free hosting</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free SSL</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free jasa instalasi</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Integrasi sosial media</li>
                            </ul>
                        </div>
                        <a href="#" class="btn-primary-gradient w-100">Pesan Sekarang  <i class="far fa-arrow-right"></i></a>


                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="price-style1">
                        <div class="price-shape" ></div>
                        <h3 class="price-package h5">Premium Website</h3>
                        <div class="price-amount h1 text-blue-gradient">999k <span class="price-duration"><s></s></span></div>
                        <div class="price-features">
                            <ul>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>5 halaman website statis</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free domain</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free hosting</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free SSL</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Premium design website</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free jasa instalasi</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Whatsapp form</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Integrasi sosial media</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Banner</li>
                            </ul>
                        </div>
                        <a href="#" class="btn-primary-gradient w-100">Pesan Sekarang  <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="price-style1">
                        <div class="price-shape"></div>
                        <h3 class="price-package h5">Custom Website</h3>
                        <div class="price-amount h1 text-blue-gradient">1500k <span class="price-duration">mulai dari</span></div>
                        <div class="price-features">
                            <ul>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Halaman website dinamis</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Custom fitur website</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Custom design website</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free domain</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free hosting</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free SSL</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free jasa instalasi</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Whatsapp form</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Integrasi sosial media</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Banner</li>
                            </ul>
                        </div>
                        <a href="#" class="btn-primary-gradient w-100">Pesan Sekarang  <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            {{-- Tab Sosial Media --}}
            <div class="row " data-slide-show="3" data-md-slide-show="2"  id="tab-services-content-2">

                <div class="col-xl-4">
                    <div class="price-style1">
                        <div class="price-shape"></div>
                        <h3 class="price-package h5 ">Basic Mingguan</h3>
                        <div class="price-amount h1 text-blue-gradient">159k <span class="price-duration"><s></s></span></div>
                        <div class="price-features">
                            <ul>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>3 Postingan Instagram per minggu (gambar atau carousel).</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Gratis 2 desain story Instagram dengan upload harian.</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Pengelolaan dan monitoring engagement.</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Laporan mingguan performa media sosial.</li>
                            </ul>
                        </div>
                        <a href="#" class="btn-primary-gradient w-100">Pesan Sekarang  <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="price-style1">
                        <div class="price-shape"></div>
                        <h3 class="price-package h5">Basic Mingguan</h3>
                        <div class="price-amount h1 text-blue-gradient">219k <span class="price-duration"><s></s></span></div>
                        <div class="price-features">
                            <ul>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>6 Postingan Instagram per minggu (gambar, carousel, atau video pendek).</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Gratis 3 desain story Instagram dengan upload harian.</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Pengelolaan dan monitoring engagement (like, komentar, DM).</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Laporan mingguan performa media sosial.</li>
                            </ul>
                        </div>
                        <a href="#" class="btn-primary-gradient w-100">Pesan Sekarang  <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="price-style1">
                        <div class="price-shape"></div>
                        <h3 class="price-package h5">Basic Mingguan</h3>
                        <div class="price-amount h1 text-blue-gradient">359k <span class="price-duration"><s></s></span></div>
                        <div class="price-features">
                            <ul>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>9 Postingan Instagram per bulan (gambar, carousel, atau video pendek).</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Gratis 4 desain story Instagram dengan upload harian.</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Pengelolaan dan monitoring engagement (like, komentar).</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Laporan bulanan  performa media sosial.</li>
                            </ul>
                        </div>
                        <a href="#" class="btn-primary-gradient w-100">Pesan Sekarang  <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="price-style1">
                        <div class="price-shape"></div>
                        <h3 class="price-package h5">Premium Bulanan</h3>
                        <div class="price-amount h1 text-blue-gradient">459k <span class="price-duration"><s></s></span></div>
                        <div class="price-features">
                            <ul>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>12 Postingan Instagram per bulan (gambar, carousel, atau video pendek).</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Gratis 8 desain story Instagram dengan upload harian.</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Pengelolaan dan monitoring engagement (like, komentar).</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Desain custom banner atau visual untuk promosi khusus.</li>
                                <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Laporan bulanan  performa media sosial.</li>
                            </ul>
                        </div>
                        <a href="#" class="btn-primary-gradient w-100">Pesan Sekarang  <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->


@endpush
