<!--Mobile Menu-->
<div class="">
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="/"><img src="assets/img/logo.png" alt="TechBiz" class="logo"></a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                    <li class="">
                        <a href="{{ route('beranda') }}">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('tentang-kami') }}">Tentang Kami</a>
                    </li>
                    <li class="">
                        <a href="{{ route('layanan.website') }}">Layanan</a>
                    </li>
                    <li>
                        <a href="{{ route('portofolio') }}">Portfolio</a>
                    </li>

                    <li>
                        <a href="{{ route('hubungi-kami') }}">Hubungi Kami</a>
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
                        <div class="col-auto">
                            <nav class="main-menu menu-style1 d-none d-lg-block">
                                <ul>
                                    <li class="">
                                        <a href="{{ route('beranda') }}">Beranda</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('tentang-kami') }}">Tentang Kami</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ route('layanan.index') }}">Layanan</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ route('portofolio') }}">Portofolio</a>

                                    </li>
                                    <li>
                                        <a href="{{ route('hubungi-kami') }}">Hubungi Kami</a>
                                    </li>
                                </ul>
                            </nav>
                            <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                        </div>
                        <div class="col-auto ">
                            <form action="#" class="header-search">
                                <input type="text" placeholder="Search here...">
                                <button type="submit" aria-label="search-button"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

