@extends('layouts.app')

@section('title', 'Tentang ')

@push('style')
    <!-- CSS Libraries -->

@endpush

@section('main')

    <!--Breadcumb-->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/craftwave/other/Counter.webp') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Tentang Kami</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('beranda') }}">Beranda</a></li>
                        <li>Tentang Kami</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--Team Area-->
    <section class="space-top space-extra-bottom">
        <div class="container  wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area">
                        <h2 class="sec-title3 h1">Tim <span class="text-blue-gradient">Kami</span></h2>
                    </div>
                </div>
            </div>
            <div class="row" data-slide-show="3" data-md-slide-show="2">
                <div class="col-xl-4">
                    <div class="team-style2">
                        <div class="team-img">
                            <div class="team-shape1"></div>
                            <div class="team-shape2"></div>
                            <a href="#"><img src="{{ asset('assets/img/craftwave/tim/Fauzi.png') }}" alt="image"></a>

                        </div>
                        <div class="team-content">
                            <h3 class="team-title h5"><a class="text-inherit" href="#">Fauzi Adi Saputra</a></h3>
                            <p class="team-degi">Chief Technology Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-style2">
                        <div class="team-img">
                            <div class="team-shape1"></div>
                            <div class="team-shape2"></div>
                            <a href="#"><img src="{{ asset('assets/img/craftwave/tim/Marsya.png') }}" alt="image"></a>

                        </div>
                        <div class="team-content">
                            <h3 class="team-title h5"><a class="text-inherit" href="#">Marsya Halya Alfrida</a>
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
                            <a href="#"><img src="{{ asset('assets/img/craftwave/tim/Mia.png') }}" alt="image"></a>

                        </div>
                        <div class="team-content">
                            <h3 class="team-title h5"><a class="text-inherit" href="#">Mia Putri Yeza</a>
                            </h3>
                            <p class="team-degi">Chief Financial Officer</p>
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
                        <h2 class="sec-title3 h1">Kata <span class="text-blue-gradient">Mereka</span></h2>
                    </div>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <div class="sec-btns">
                        <button class="btn-secondary-white" data-slick-prev="#testislide1"><i
                                class="far fa-arrow-left"></i></button>
                        <button class="btn-secondary-white" data-slick-next="#testislide1"><i
                                class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="row testi-style2-slide vs-carousel" data-slide-show="2" data-md-slide-show="2" id="testislide1">
                <div class="col-xl-6">
                    <div class="testi-style2">
                        <div class="testi-body">
                            <div class="author-img"><img src="{{ asset('assets/img/craftwave/testimoni/Andi.jpg') }}" alt="Testimonial">
                            </div>
                            <div class="media-body">
                                <p class="testi-text">“Craftwave.id membuat sistem absensi dan laporan kegiatan yang sangat membantu pengelolaan karyawan kami. Semua terintegrasi dengan baik dan mudah digunakan. Hasilnya benar-benar di luar ekspektasi kami!”</p>
                            </div>
                        </div>
                        <h3 class="testi-name">Panji Yeza</h3>
                        <div class="testi-degi">CEO Sambal Bakar Sutomo</div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="testi-style2">
                        <div class="testi-body">
                            <div class="author-img"><img src="{{ asset('assets/img/craftwave/testimoni/Sarah.jpg') }}" alt="Testimonial">
                            </div>
                            <div class="media-body">
                                <p class="testi-text">“Website e-commerce B2B yang dibuat oleh craftwave.id sangat profesional dan sesuai dengan kebutuhan pasar kami. Fitur-fiturnya lengkap dan proses transaksi berjalan lancar. Benar-benar solusi terbaik untuk bisnis kami.”</p>
                            </div>
                        </div>
                        <h3 class="testi-name">Sarah</h3>
                        <div class="testi-degi">CEO Agrihub</div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="testi-style2">
                        <div class="testi-body">
                            <div class="author-img"><img src="{{ asset('assets/img/craftwave/testimoni/Dita.jpg') }}" alt="Testimonial">
                            </div>
                            <div class="media-body">
                                <p class="testi-text">“Website pemetaan lokasi kebun yang dibuat oleh craftwave.id sangat membantu kami dalam memperlihatkan kebun-kebun kota. Pengunjung jadi mudah menemukan lokasi kami dan semua informasi tersedia dengan jelas.”</p>
                            </div>
                        </div>
                        <h3 class="testi-name">Syifa</h3>
                        <div class="testi-degi">Pemilik GorBoen</div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="testi-style2">
                        <div class="testi-body">
                            <div class="author-img"><img src="{{ asset('assets/img/craftwave/testimoni/Budi.jpg') }}" alt="Testimonial">
                            </div>
                            <div class="media-body">
                                <p class="testi-text">“Website pencatatan dan pelatihan pertanian dari Craftwave.id hasilnya sangat memuaskan. Sistemnya memudahkan kami dalam mencatat hasil panen serta mengadakan pelatihan online bagi anggota kelompok tani.”</p>
                            </div>
                        </div>
                        <h3 class="testi-name">Victor Lee</h3>
                        <div class="testi-degi">Founder One Home Farm</div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="testi-style2">
                        <div class="testi-body">
                            <div class="author-img"><img src="{{ asset('assets/img/craftwave/testimoni/Farhan.jpeg') }}" alt="Testimonial">
                            </div>
                            <div class="media-body">
                                <p class="testi-text">“Website daftar wisata kuliner dan tempat wisata yang kami pesan dari craftwave.id sangat informatif dan mudah diakses oleh wisatawan. Desainnya sangat menarik dan fitur pencariannya sangat memudahkan.”</p>
                            </div>
                        </div>
                        <h3 class="testi-name">Farhan</h3>
                        <div class="testi-degi">Pemilik Studio Photo</div>
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
