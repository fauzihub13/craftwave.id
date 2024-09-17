@extends('layouts.app')

@section('title', 'Layanan ')

@push('style')
    <!-- CSS Libraries -->

@endpush

@section('main')


    <!--Breadcumb-->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/craftwave/other/Counter.png') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Layanan</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('beranda') }}">Beranda</a></li>
                        <li>Layanan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Service Area-->

    <!--Service Area-->
    <section class=" space-top space-extra-bottom" data-bg-src="">
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
            <div class="" id="tab-services-content-1">

                {{-- Landing Page --}}
                <h6 class="sec-title text-blue-gradient text-center ">Landing Page</h6>
                <div class="row justify-content-center">
                    <div class="col-xl-4">
                        <div class="price-style1 primary-color">
                            <div class="price-shape"></div>
                            <h3 class="price-package h5">Landing Page Reguler</h3>
                            <div class="price-amount h1 text-blue-gradient">599k <span class="price-duration"><s></s></span></div>
                            <div class="price-features">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Template Website</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>1 Halaman Website</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Request Warna Desain</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Domain 1 tahun (.my.id/ .web.id/ .com)</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Hosting 1 tahun</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free SSL</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Unmetered Bandwidth</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Tanya Jawab & Pemanduan</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Garansi Masa Aktif Website</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Perpanjangan: Rp. 299.000/ tahun</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>1x Revisi</li>

                                </ul>
                            </div>
                            <a href="{{ route('konsultasi', 'Pembuatan Landing Page Reguler') }}" class="btn-primary-gradient w-100">Pesan Sekarang  <i class="far fa-arrow-right"></i></a>

                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="price-style1">
                            <div class="price-shape" ></div>
                            <h3 class="price-package h5">Landing Page Premium</h3>
                            <div class="price-amount h1 text-blue-gradient">699k <span class="price-duration"><s></s></span></div>
                            <div class="price-features">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Design Professional dan Custom (Bisa Mengajukan Desain Sendiri)</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Request Warna Desain</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Domain 1 tahun (.my.id/ .web.id/ .com)</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Hosting 1 tahun</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free SSL</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Unmetered Bandwidth</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Tanya Jawab & Pemanduan</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Garansi Masa Aktif Website</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Perpanjangan: Rp. 349.000/ tahun</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>2x Revisi</li>

                                </ul>
                            </div>
                            <a href="{{ route('konsultasi', 'Pembuatan Landing Page Premium') }}" class="btn-primary-gradient w-100">Pesan Sekarang  <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                {{-- Company Profile --}}
                <h6 class="sec-title text-blue-gradient text-center mt-5">Company Profile</h6>
                <div class="row justify-content-center">
                    <div class="col-xl-4">
                        <div class="price-style1">
                            <div class="price-shape"></div>
                            <h3 class="price-package h5">Company Profile Reguler</h3>
                            <div class="price-amount h1 text-blue-gradient">899k <span class="price-duration"></span></div>
                            <div class="price-features">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Template Website</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>4 Halaman Website</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Request Warna Desain</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Domain 1 tahun (.my.id/ .web.id/ .com)</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Hosting 1 tahun</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free SSL</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Unmetered Bandwidth</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Tanya Jawab & Pemanduan</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Garansi Masa Aktif Website</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Perpanjangan: Rp. 299.000/ tahun</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>1x Revisi</li>

                                </ul>
                            </div>
                            <a href="{{ route('konsultasi', 'Pembuatan Company Profile Reguler') }}" class="btn-primary-gradient w-100">Pesan Sekarang  <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="price-style1">
                            <div class="price-shape"></div>
                            <h3 class="price-package h5">Company Profile Premium</h3>
                            <div class="price-amount h1 text-blue-gradient">999k <span class="price-duration"></span></div>
                            <div class="price-features">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Design Professional dan Custom (Bisa Mengajukan Desain Sendiri)</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Request Warna Desain</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Domain 1 tahun (.my.id/ .web.id/ .com)</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Hosting 1 tahun</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free SSL</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Unmetered Bandwidth</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Tanya Jawab & Pemanduan</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Garansi Masa Aktif Website</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Perpanjangan: Rp. 349.000/ tahun</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>2x Revisi</li>

                                </ul>
                            </div>
                            <a href="{{ route('konsultasi', 'Pembuatan Company Profile Premium') }}" class="btn-primary-gradient w-100">Pesan Sekarang  <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                {{-- Toko Online --}}
                <h6 class="sec-title text-blue-gradient text-center mt-5">Toko Online</h6>
                <div class="row justify-content-center">
                    <div class="col-xl-4">
                        <div class="price-style1">
                            <div class="price-shape"></div>
                            <h3 class="price-package h5">Toko Online Reguler</h3>
                            <div class="price-amount h1 text-blue-gradient">1.299k <span class="price-duration"></span></div>
                            <div class="price-features">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Template Website</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Request Warna Desain</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Checkout Pesanan ke WhatsApp</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Domain 1 tahun (.my.id/ .web.id/ .com)</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Hosting 1 tahun</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free SSL</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Unmetered Bandwidth</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Tanya Jawab & Pemanduan</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Garansi Masa Aktif Website</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Perpanjangan: Rp. 299.000/ tahun</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>1x Revisi</li>
                                </ul>
                            </div>
                            <a href="{{ route('konsultasi', 'Pembuatan Toko Online Reguler') }}" class="btn-primary-gradient w-100">Pesan Sekarang  <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="price-style1">
                            <div class="price-shape"></div>
                            <h3 class="price-package h5">Toko Online Premium</h3>
                            <div class="price-amount h1 text-blue-gradient">1.499k <span class="price-duration"></span></div>
                            <div class="price-features">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Design Professional dan Custom (Bisa Mengajukan Desain Sendiri)</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Request Warna Desain</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Checkout Pesanan di Website</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Domain 1 tahun (.my.id/ .web.id/ .com)</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Hosting 1 tahun</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free SSL</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Unmetered Bandwidth</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Tanya Jawab & Pemanduan</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Garansi Masa Aktif Website</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Perpanjangan: Rp. 349.000/ tahun</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>2x Revisi</li>
                                </ul>
                            </div>
                            <a href="{{ route('konsultasi', 'Pembuatan Toko Online Premium') }}" class="btn-primary-gradient w-100">Pesan Sekarang  <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                {{-- Custom Website --}}
                <h6 class="sec-title text-blue-gradient text-center mt-5">Custom Website</h6>
                <div class="row justify-content-center">
                    <div class="col-xl-4">
                        <div class="price-style1">
                            <div class="price-shape"></div>
                            <h3 class="price-package h5">Custom Website</h3>
                            <div class="price-amount h1 text-blue-gradient">1.500k <span class="price-duration">mulai dari</span></div>
                            <div class="price-features">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Desain Custom sesuai Kebutuhan</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Jumlah Halaman sesuai Kebutuhan</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Fitur sesuai Kebutuhan</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Color Kit</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Domain 1 Tahun (.my.id/ .web.id/ .com)</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Hosting 1 Tahun</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free SSL</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Unmetered Bandwidth</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Free Tanya Jawab & Pemanduan</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Garansi 1 Tahun Masa Aktif Website</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Perpanjangan: Rp. 499.000/tahun</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>3-5x Revisi</li>

                                </ul>
                            </div>
                            <a href="{{ route('konsultasi', 'Pembuatan Custom Website') }}" class="btn-primary-gradient w-100">Pesan Sekarang  <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>


            {{-- Tab Sosial Media --}}
            <div class="" id="tab-services-content-2">
                {{-- Paket Mingguan --}}
                <h6 class="sec-title text-blue-gradient text-center ">Paket Mingguan</h6>
                <div class="row justify-content-center">
                    <div class="col-xl-4">
                        <div class="price-style1 primary-color">
                            <div class="price-shape"></div>
                            <h3 class="price-package h5">Basic Mingguan</h3>
                            <div class="price-amount h1 text-blue-gradient">249k <span class="price-duration"><s></s></span></div>
                            <div class="price-features">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>3 Postingan Instagram per minggu (gambar atau carousel)</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Gratis 2 desain story Instagram dengan upload harian</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Pengelolaan dan monitoring engagement (like, komentar)</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Laporan mingguan performa media sosial</li>
                                </ul>
                            </div>
                            <a href="{{ route('konsultasi', 'Kelola Sosial Media Basic Mingguan') }}" class="btn-primary-gradient w-100">Pesan Sekarang  <i class="far fa-arrow-right"></i></a>

                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="price-style1 primary-color">
                            <div class="price-shape"></div>
                            <h3 class="price-package h5">Premium Mingguan</h3>
                            <div class="price-amount h1 text-blue-gradient">399k <span class="price-duration"><s></s></span></div>
                            <div class="price-features">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>6 Postingan Instagram per minggu (gambar, carousel, atau video pendek)</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Gratis 3 desain story Instagram dengan upload harian</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Pengelolaan dan monitoring engagement (like, komentar, DM)</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Laporan mingguan performa media sosial</li>

                                </ul>
                            </div>
                            <a href="{{ route('konsultasi', 'Kelola Sosial Media Premium Mingguan') }}" class="btn-primary-gradient w-100">Pesan Sekarang  <i class="far fa-arrow-right"></i></a>

                        </div>
                    </div>
                </div>

                {{-- Paket Bulanan --}}
                <h6 class="sec-title text-blue-gradient text-center mt-5">Paket Bulanan</h6>
                <div class="row justify-content-center">
                    <div class="col-xl-4">
                        <div class="price-style1 primary-color">
                            <div class="price-shape"></div>
                            <h3 class="price-package h5">Basic Bulanan</h3>
                            <div class="price-amount h1 text-blue-gradient">349k <span class="price-duration"><s></s></span></div>
                            <div class="price-features">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>9 Postingan Instagram per bulan (gambar atau carousel)</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Gratis 4 desain story Instagram dengan upload harian</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Pengelolaan dan monitoring engagement (like, komentar)</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Laporan bulanan performa media sosial</li>
                                </ul>
                            </div>
                            <a href="{{ route('konsultasi', 'Kelola Sosial Media Basic Bulanan') }}" class="btn-primary-gradient w-100">Pesan Sekarang  <i class="far fa-arrow-right"></i></a>

                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="price-style1 primary-color">
                            <div class="price-shape"></div>
                            <h3 class="price-package h5">Premium Bulanan</h3>
                            <div class="price-amount h1 text-blue-gradient">399k <span class="price-duration"><s></s></span></div>
                            <div class="price-features">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>12 Postingan Instagram per bulan (gambar, carousel, atau video pendek)</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Gratis 8 desain story Instagram dengan upload harian</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Pengelolaan dan monitoring engagement (like, komentar, DM)</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Desain custom banner atau visual untuk promosi khusus</li>
                                    <li class="d-flex align-items-center"><i class="far fa-check-circle"></i>Laporan bulanan performa media sosial insight</li>

                                </ul>
                            </div>
                            <a href="{{ route('konsultasi', 'Kelola Sosial Media Premium Bulanan') }}" class="btn-primary-gradient w-100">Pesan Sekarang  <i class="far fa-arrow-right"></i></a>

                        </div>
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
