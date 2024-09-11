@extends('layouts.app')

@section('title', 'Tentang ')

@push('style')
    <!-- CSS Libraries -->

@endpush

@section('main')

    <!--Breadcumb-->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Tentang Kami</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Beranda</a></li>
                        <li>Tentang Kami</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Service Area-->
    <section class=" space-top space-extra-bottom">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="title-area">
                        {{-- <span class="sec-subtitle">Our Latest Services</span> --}}
                        <h2 class="sec-title h1">Layanan <span class="text-primary-color">Craftwave.id</span></h2>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp justify-content-center" data-wow-delay="0.2s">
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1">
                        {{-- <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div> --}}
                        <div class="service-icon"><img src="assets/img/icon/sr-icon-1-1.png" alt="Features"></div>
                        <h3 class="service-title h5"><a href="service-details.html">Pengelolaan Sosial Media</a></h3>
                        <p class="service-text">Tingkatkan brand Anda dengan strategi social media yang menghubungkan dan menginspirasi.</p>
                        <a href="service-details.html" class="vs-btn style3">Selengkapnya<i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1">
                        {{-- <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div> --}}
                        <div class="service-icon"><img src="assets/img/icon/sr-icon-1-2.png" alt="Features"></div>
                        <h3 class="service-title h5"><a href="service-details.html">Pembuatan Website</a></h3>
                        <p class="service-text">Dapatkan website elegan yang mengesankan dan mengonversi pengunjung menjadi pelanggan setia.</p>
                        <a href="service-details.html" class="vs-btn style3">Selengkapnya<i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Team Area-->
    <section class=" space-extra-bottom">
        <div class="container  wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area">
                        <h2 class="sec-title3 h1">Tim <span class="text-primary-color">Kami</span></h2>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
                <div class="col-xl-4">
                    <div class="team-style2">
                        <div class="team-img">
                            <div class="team-shape1"></div>
                            <div class="team-shape2"></div>
                            <a href="team-details.html"><img src="{{ asset('assets/img/craftwave/tim/Fauzi.png') }}" alt="image"></a>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title h5"><a class="text-inherit" href="team-details.html">Fauzi Adi Saputra</a></h3>
                            <p class="team-degi">Chief Technology Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-style2">
                        <div class="team-img">
                            <div class="team-shape1"></div>
                            <div class="team-shape2"></div>
                            <a href="team-details.html"><img src="{{ asset('assets/img/craftwave/tim/Marsya.png') }}" alt="image"></a>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title h5"><a class="text-inherit" href="team-details.html">Marsya Halya Alfrida</a>
                            </h3>
                            <p class="team-degi">Chief Marketing Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-style2">
                        <div class="team-img">
                            <div class="team-shape1"></div>
                            <div class="team-shape2"></div>
                            <a href="team-details.html"><img src="{{ asset('assets/img/craftwave/tim/Mia.png') }}" alt="image"></a>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title h5"><a class="text-inherit" href="team-details.html">Mia Putri Yeza</a>
                            </h3>
                            <p class="team-degi">Chief Financial Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-style2">
                        <div class="team-img">
                            <div class="team-shape1"></div>
                            <div class="team-shape2"></div>
                            <a href="team-details.html"><img src="assets/img/team/t-2-4.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title h5"><a class="text-inherit" href="team-details.html">Daniel
                                    Matthew</a></h3>
                            <p class="team-degi">Cheif Expert</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Area-->
    <section class=" space-top space-extra-bottom" data-bg-src="assets/img/bg/testi-bg-4-1.jpg">
        <div class="container  wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 text-center text-lg-start">
                    <div class="title-area">
                        <h2 class="sec-title3 h1">Kata <span class="text-primary-color">Mereka</span></h2>
                    </div>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <div class="sec-btns">
                        <button class="vs-btn style4" data-slick-prev="#testislide1"><i
                                class="far fa-arrow-left"></i></button>
                        <button class="vs-btn style4" data-slick-next="#testislide1"><i
                                class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="row testi-style2-slide vs-carousel" data-slide-show="2" data-md-slide-show="2" id="testislide1">
                <div class="col-xl-6">
                    <div class="testi-style2">
                        <div class="testi-body">
                            <div class="author-img"><img src="assets/img/testimonial/auth-4-1.jpg" alt="Testimonial">
                            </div>
                            <div class="media-body">
                                <p class="testi-text">“Layanan yang luar biasa! Website kami responsif, dan konten media sosial berhasil meningkatkan interaksi dengan pelanggan.”</p>
                            </div>
                        </div>
                        <h3 class="testi-name">Andi</h3>
                        <div class="testi-degi">Pemilik Villa Lestari</div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="testi-style2">
                        <div class="testi-body">
                            <div class="author-img"><img src="assets/img/testimonial/auth-4-2.jpg" alt="Testimonial">
                            </div>
                            <div class="media-body">
                                <p class="testi-text">“Website dan konten media sosial kami terlihat jauh lebih profesional. Penjualan naik drastis, sangat puas dengan hasilnya!”</p>
                            </div>
                        </div>
                        <h3 class="testi-name">Sarah</h3>
                        <div class="testi-degi">Pemilik Toko Fashion</div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="testi-style2">
                        <div class="testi-body">
                            <div class="author-img"><img src="assets/img/testimonial/auth-4-3.jpg" alt="Testimonial">
                            </div>
                            <div class="media-body">
                                <p class="testi-text">“Sejak pakai jasa Craftwave.id, website dan media sosial kami menarik lebih banyak pelanggan. Sangat direkomendasikan!”</p>
                            </div>
                        </div>
                        <h3 class="testi-name">Dita</h3>
                        <div class="testi-degi">CEO Kafe Artisan</div>
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
