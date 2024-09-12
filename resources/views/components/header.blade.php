<!--Mobile Menu-->
<div class="">
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="/"><img src="{{ asset('assets/img/craftwave/logo/logo-sidebar.png') }}" alt="Craftwave.id" class="logo"></a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                    <li class="">
                        <a href="{{ route('beranda') }}" class="{{ Request::is('/') ? 'text-primary-color' : '' }}">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('tentang-kami') }}" class="{{ Request::is('tentang-kami') ? 'text-primary-color' : '' }}">Tentang Kami</a>
                    </li>
                    <li class="">
                        <a href="{{ route('layanan.index') }}" class="{{ Request::is('layanan') ? 'text-primary-color' : '' }}">Layanan</a>
                    </li>
                    <li>
                        <a href="{{ route('portofolio') }}" class="{{ Request::is('portofolio') ? 'text-primary-color' : '' }}">Portfolio</a>
                    </li>

                    <li>
                        <a href="{{ route('hubungi-kami') }}" class="{{ Request::is('hubungi-kami') ? 'text-primary-color' : '' }}">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--Header Area-->
    <header class="vs-header header-layout1">
        <!-- Main Menu Area -->
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto ">
                            <img src="{{ asset('assets/img/craftwave/logo/logo.png') }}" class="me-2" width="30" height="30" alt="Craftwave.id">
                            <a href="" class="text-blue-gradient fw-medium" >Craftwave.id</a>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu menu-style1 d-none d-lg-block">
                                <ul>
                                    <li class="">
                                        <a href="{{ route('beranda') }}" class="{{ Request::is('/') ? 'text-primary-color ' : '' }}">Beranda</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('tentang-kami') }}" class="{{ Request::is('tentang-kami') ? 'text-primary-color ' : '' }}">Tentang Kami</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ route('layanan.index') }}" class="{{ Request::is('layanan') ? 'text-primary-color ' : '' }}">Layanan</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ route('portofolio') }}" class="{{ Request::is('portofolio') ? 'text-primary-color ' : '' }}">Portofolio</a>

                                    </li>
                                    <li>
                                        <a href="{{ route('hubungi-kami') }}" class="{{ Request::is('hubungi-kami') ? 'text-primary-color ' : '' }}">Hubungi Kami</a>
                                    </li>
                                </ul>
                            </nav>
                            <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

