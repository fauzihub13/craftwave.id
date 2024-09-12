<!--Footer Area-->
    <footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('assets/img/shape/bg-footer-1-1.jpg') }}">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm footer-info_group">
                        <div class="footer-info">
                            <div class="footer-info_icon"><i class="fal fa-map-marker-alt"></i></div>
                            <div class="media-body">
                                <span class="footer-info_label">Alamat Kami</span>
                                <div class="footer-info_link">Jl. Lodaya 2, Bogor Tengah, Kota Bogor, Jawa Barat</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm footer-info_group">
                        <div class="footer-info">
                            <div class="footer-info_icon"><i class="fal fa-clock"></i></div>
                            <div class="media-body">
                                <span class="footer-info_label">Jam Kerja</span>
                                <div class="footer-info_link">Hari Kerja 8am - 22pm Hari Libur 10am - 12pm</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm footer-info_group">
                        <div class="footer-info">
                            <div class="footer-info_icon"><i class="fal fa-phone-volume"></i></div>
                            <div class="media-body">
                                <span class="footer-info_label">Hubungi Kami</span>
                                <div class="footer-info_link"><a
                                        href="mailto:craftwave.id@gmail.com">craftwave.id@gmail.com</a><br><a
                                        href="tel:+6289684781433">+62 896 8478 1433</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-lg-4 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Tentang Kami</h3>
                            <div class="vs-widget-about">
                                <p class="footer-text">Layanan pembuatan website profesional dan pengelolaan media sosial.</p>
                                <div class="footer-social">
                                    <a href="https://www.instagram.com/craftwave.id"><i class="fab fa-whatsapp"></i></a>
                                    <a href="https://www.instagram.com/craftwave.id"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.instagram.com/craftwave.id"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/craftwave.id"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xl-auto">
                        <div class="widget widget_nav_menu  footer-widget">
                            <h3 class="widget_title">Tautan</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
                                    <li><a href="{{ route('layanan.index') }}">Layanan</a></li>
                                    <li><a href="{{ route('portofolio') }}">Portofolio</a></li>
                                    <li><a href="{{ route('hubungi-kami') }}">Hubungi Kami</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6 col-lg-2 col-xl-auto">
                        <div class="widget widget_nav_menu  footer-widget">
                            <h3 class="widget_title">Explore</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="#">What we Offer</a></li>
                                    <li><a href="#">Our Story</a></li>
                                    <li><a href="#">Latest Posts</a></li>
                                    <li><a href="#">Help Center</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-6 col-lg-4 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Lokasi Kami</h3>
                            <div class="footer-map">
                                <iframe title="office location map"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7926.8944855322325!2d106.80262489127931!3d-6.591200273609904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5d2e602b501%3A0x25a12f0f97fac4ee!2sSchool%20of%20Vocational%20Studies%20-%20IPB%20University!5e0!3m2!1sen!2sid!4v1726173188325!5m2!1sen!2sid"
                                    width="200" height="180" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2024 <a class="text-white"
                        href="index.html">Craftwave.id</a>. All rights reserved by <a class="text-white"
                        href="#">Craftwave.id</a>.</p>
            </div>
        </div>
    </footer>
