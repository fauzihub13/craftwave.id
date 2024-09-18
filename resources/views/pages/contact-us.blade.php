@extends('layouts.app')

@section('title', 'Hubungi ')

@push('style')
    <!-- CSS Libraries -->

@endpush

@section('main')

    <!--Breadcumb-->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/craftwave/other/Counter.webp') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Hubungi Kami</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('beranda') }}">Beranda</a></li>
                        <li>Hubungi Kami</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--Contact Form Area-->
    <section class=" space-top space-extra-bottom">
        <div class="container">

            <div class="tab-content" id="nav-contactTabContent">
                <div class="tab-pane fade show active" id="nav-GermanyAddress" role="tabpanel"
                    aria-labelledby="nav-GermanyAddress-tab">
                    <div class="row">
                        <div class="col-lg-6 mb-30">
                            <div class="contact-box">
                                <h3 class="contact-box__title h4">Kontak Kami</h3>
                                <p class="contact-box__text">Hubungi kami kapan saja untuk solusi digital yang tepat sasaran dan inovatif, dirancang untuk memenuhi kebutuhan bisnis Anda sepanjang waktu.</p>
                                <div class="contact-box__item">
                                    <div class="contact-box__icon"><i class="fal fa-phone-alt"></i></div>
                                    <div class="media-body">
                                        <h4 class="contact-box__label">No Hp dan Email</h4>
                                        <p class="contact-box__info"><a href="{{ route('konsultasi', ' ') }}">+62 896 8478 1433</a><a
                                                href="mailto:craftwave.id@gmail.com">craftwave.id@gmail.com</a></p>
                                    </div>
                                </div>
                                <div class="contact-box__item">
                                    <div class="contact-box__icon"><i class="far fa-map-marker-alt"></i></div>
                                    <div class="media-body">
                                        <h4 class="contact-box__label">Alamat Kami</h4>
                                        <p class="contact-box__info">Jl. Lodaya 2, Bogor Tengah, Kota Bogor, Jawa Barat</p>
                                    </div>
                                </div>
                                <div class="contact-box__item">
                                    <div class="contact-box__icon"><i class="far fa-clock"></i></div>
                                    <div class="media-body">
                                        <h4 class="contact-box__label">Jam Kerja</h4>
                                        <p class="contact-box__info">Hari Kerja 8am - 22pm  <br>Hari Libur 10am - 12pm
                                            </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-30">
                            <div class="contact-box">
                                <h3 class="contact-box__title h4">Kirim Pesan</h3>
                                <p class="contact-box__text">Kami siap untuk membantu Anda.</p>
                                <form class="contact-box__form ajax-contact" action="{{ route('kirim-pesan') }}" method="POST">
                                    @csrf
                                    <div class="row gx-20">
                                        <div class="col-md-6 form-group">
                                            <input type="text" name="name" id="name" placeholder="Nama Anda">
                                            <i class="fal fa-user"></i>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="email" name="email" id="email" placeholder="Alamat Email">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <input type="number" name="phone_number" id="phone_number" placeholder="No Hp">
                                            <i class="fal fa-phone"></i>
                                        </div>
                                        <div class="col-12 form-group">
                                            <select name="subject" id="subject">
                                                <option selected disabled hidden>Pilih Subjek</option>
                                                <option value="Pembuatan Website">Pembuatan Website</option>
                                                <option value="Kelola Sosial Media">Kelola Sosial Media</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="col-12 form-group">
                                            <textarea name="message" id="message"
                                                placeholder="Tulis Pesan Anda"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn-primary-gradient">Kirim Pesan  <i
                                                    class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messages mb-0 mt-3"></p>
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
