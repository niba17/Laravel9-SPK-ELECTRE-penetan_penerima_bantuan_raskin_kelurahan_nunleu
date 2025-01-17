@extends('layouts.masterLanding')
@section('title', 'ELECTRE | Landing')
@section('content')





    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top ">
            <div class="container d-flex align-items-center justify-content-between">

                <h1 class="logo"><a href="index.html">SPK <span class="fw-bold" style="color:#E43C5C;">ELECTRE</span></a>
                </h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo"><img src="{{ asset('landing') }}/assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                        <li><a class="nav-link scrollto" href="#about">Latar Belakang</a></li>
                        <li><a class="nav-link scrollto" href="#services">Kerangka Kerja & Pustaka</a></li>
                        {{-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                        <li><a class="nav-link scrollto" href="#team">Team</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#">Drop Down 1</a></li>
                                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                            class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li><a href="#">Deep Drop Down 1</a></li>
                                        <li><a href="#">Deep Drop Down 2</a></li>
                                        <li><a href="#">Deep Drop Down 3</a></li>
                                        <li><a href="#">Deep Drop Down 4</a></li>
                                        <li><a href="#">Deep Drop Down 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Drop Down 2</a></li>
                                <li><a href="#">Drop Down 3</a></li>
                                <li><a href="#">Drop Down 4</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div class="hero-container">
                <h3> <strong class="h2 fw-bold">SISTEM PENDUKUNG KEPUTUSAN <br> PENENTUAN CALON PENERIMA BANTUAN BERAS
                        MISKIN
                        ( RASKIN ) <br>
                        MENGGUNAKAN
                        METODE <span class="fst-italic" style="color:#E43C5C;"> ELECTRE </span> DI KELURAHAN
                        NUNLEU</strong></h3>
                {{-- <h1>We're Creative Agency</h1> --}}
                {{-- <h2>We are team of talented designers making websites with Bootstrap</h2> --}}
                <a href="/login" class="btn-get-started scrollto">Login</a>
            </div>
        </section><!-- End Hero -->

        <main id="main">

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container">

                    <div class="section-title">
                        <h2 style="font-size:30px;">Latar Belakang</h2>
                        {{-- <h3>Learn More <span>About Us</span></h3> --}}
                        {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas
                            atque vitae autem.</p> --}}
                    </div>

                    <div class="row content">
                        <div class="col-lg-12">
                            <p class="text-center">
                                Program raskin secara intensif berkembang di Indonesia sebagai salah satu jalan untuk
                                memberikan
                                bantuan kepada rumah tangga miskin dan meningkatkan kesejahteraan masyarakat, program
                                ini
                                pertama kali direncanakan pada tahun 1994 yang bertitik pada tiap kelurahan yang ada di
                                dalam
                                wilayah Kabupaten/Kota. Dalam rangka pemenuhan hak dan kebutuhan pangan bagi Rumah
                                Tangga
                                Miskin, Pemerintah melanjutkan Program Raskin sebagai salah satu program perlindungan
                                sosial,
                                yang bertujuan untuk memenuhi sebagian kebutuhan pangan (beras) sehingga diharapkan
                                dapat
                                mengurangi beban pengeluaran Rumah Tangga Miskin (Peraturan Pemerintah No. 68 Tahun
                                2002,
                                Tentang Ketahanan Pangan). Tahun 2003 program raskin baru diserahkan langsung pada rumah
                                tangga
                                miskin dari tiap-tiap kelurahan melalui distribusi dari perum Bulog berdasarkan
                                pendataan
                                (Undang-Undang No. 19 tahun 2003, Tentang Penugasan Pemerintah Kepada BUMN). Program
                                beras
                                miskin tergolong program nasional yang melibatkan berbagai pihak baik vertikal maupun
                                horizontal. Secara horizontal semua sektor terkait memiliki tanggung jawab dan wewenang
                                sesuai
                                dengan tupoksinya masing-masing dalam pelaksanaan program raskin.
                            </p>
                            {{-- <ul>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat</li>
                                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate
                                    velit</li>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat</li>
                            </ul> --}}
                        </div>
                        {{-- <div class="col-lg-6 pt-4 pt-lg-0">
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <a href="#" class="btn-learn-more">Learn More</a>
                        </div> --}}
                    </div>

                </div>
            </section><!-- End About Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services">
                <div class="container">

                    <div class="section-title">
                        <h2 style="font-size:30px;">Kerangka Kerja & Pustaka</h2>
                        {{-- <h3>We do offer awesome <span>Services</span></h3>
                        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas
                            atque vitae autem.</p> --}}
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box">
                                <div class="icon"><i class="fa-brands fa-laravel"></i></div>
                                <h4 class="title"><a target="_blank" href="https://laravel.com/docs/9.x/releases">Laravel
                                        9</a></h4>
                                <p class="description">Laravel 9 adalah versi terbaru dari Laravel, framework PHP terpopuler
                                    saat ini. Laravel 9 membawa banyak fitur baru dan perubahan, seperti Symfony Mailer dan
                                    persyaratan minimal PHP 8.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box">
                                <div class="icon"><i class="fa-brands fa-bootstrap"></i></div>
                                <h4 class="title"><a target="_blank" href="https://getbootstrap.com/">Bootstrap 5</a></h4>
                                <p class="description">Bootstrap 5 adalah versi terbaru dari salah satu front-end framework
                                    terbaik yang cepat dan ringan. untuk membantu proses pengembangan website. Dengan
                                    Bootstrap, Anda tidak perlu menulis kode CSS yang panjang, karena Anda bisa langsung
                                    menggunakan semua elemen yang disediakan Bootstrap</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Services Section -->

            <!-- ======= Features Section ======= -->
            {{-- <section id="features" class="features">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-6 col-6">
                            <div class="icon-box">
                                <i class="ri-store-line" style="color: #ffbb2c;"></i>
                                <h3><a href="">Lorem Ipsum</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="icon-box">
                                <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                                <h3><a href="">Dolor Sitema</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 mt-4 mt-md-0">
                            <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                                <h3><a href="">Sed perspiciatis</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 mt-4 mt-lg-0">
                            <div class="icon-box">
                                <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                                <h3><a href="">Magni Dolores</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 mt-4">
                            <div class="icon-box">
                                <i class="ri-database-2-line" style="color: #47aeff;"></i>
                                <h3><a href="">Nemo Enim</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 mt-4">
                            <div class="icon-box">
                                <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                                <h3><a href="">Eiusmod Tempor</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 mt-4">
                            <div class="icon-box">
                                <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                                <h3><a href="">Midela Teren</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 mt-4">
                            <div class="icon-box">
                                <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
                                <h3><a href="">Pira Neve</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 mt-4">
                            <div class="icon-box">
                                <i class="ri-anchor-line" style="color: #b2904f;"></i>
                                <h3><a href="">Dirada Pack</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 mt-4">
                            <div class="icon-box">
                                <i class="ri-disc-line" style="color: #b20969;"></i>
                                <h3><a href="">Moton Ideal</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 mt-4">
                            <div class="icon-box">
                                <i class="ri-base-station-line" style="color: #ff5828;"></i>
                                <h3><a href="">Verdo Park</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 mt-4">
                            <div class="icon-box">
                                <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
                                <h3><a href="">Flavor Nivelanda</a></h3>
                            </div>
                        </div>
                    </div>

                </div>
            </section> --}}
            <!-- End Features Section -->

            <!-- ======= Cta Section ======= -->
            {{-- <section id="cta" class="cta">
                <div class="container">

                    <div class="text-center">
                        <h3>Call To Action</h3>
                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                        <a class="cta-btn" href="#">Call To Action</a>
                    </div>

                </div>
            </section> --}}
            <!-- End Cta Section -->

            <!-- ======= Portfolio Section ======= -->
            {{-- <section id="portfolio" class="portfolio">
                <div class="container">

                    <div class="section-title">
                        <h2>Portfolio</h2>
                        <h3>Check our <span>Portfolio</span></h3>
                        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas
                            atque vitae autem.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-app">App</li>
                                <li data-filter=".filter-card">Card</li>
                                <li data-filter=".filter-web">Web</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row portfolio-container">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <img src="{{ asset('landing') }}/assets/img/portfolio/portfolio-1.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <img src="{{ asset('landing') }}/assets/img/portfolio/portfolio-2.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <img src="{{ asset('landing') }}/assets/img/portfolio/portfolio-3.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <img src="{{ asset('landing') }}/assets/img/portfolio/portfolio-4.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <img src="{{ asset('landing') }}/assets/img/portfolio/portfolio-5.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <img src="{{ asset('landing') }}/assets/img/portfolio/portfolio-6.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <img src="{{ asset('landing') }}/assets/img/portfolio/portfolio-7.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <img src="{{ asset('landing') }}/assets/img/portfolio/portfolio-8.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <img src="{{ asset('landing') }}/assets/img/portfolio/portfolio-9.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Portfolio Section --> --}}

            <!-- ======= Pricing Section ======= -->
            {{-- <section id="pricing" class="pricing">
                <div class="container">

                    <div class="section-title">
                        <h2>Pricing</h2>
                        <h3>Our Competing <span>Prices</span></h3>
                        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas
                            atque vitae autem.</p>
                    </div>

                    <div class="row">

                        <div class="col-lg-4 col-md-6">
                            <div class="box">
                                <h3>Free</h3>
                                <h4><sup>$</sup>0<span> / month</span></h4>
                                <ul>
                                    <li>Aida dere</li>
                                    <li>Nec feugiat nisl</li>
                                    <li>Nulla at volutpat dola</li>
                                    <li class="na">Pharetra massa</li>
                                    <li class="na">Massa ultricies mi</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-buy">Buy Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                            <div class="box recommended">
                                <span class="recommended-badge">Recommended</span>
                                <h3>Business</h3>
                                <h4><sup>$</sup>19<span> / month</span></h4>
                                <ul>
                                    <li>Aida dere</li>
                                    <li>Nec feugiat nisl</li>
                                    <li>Nulla at volutpat dola</li>
                                    <li>Pharetra massa</li>
                                    <li class="na">Massa ultricies mi</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-buy">Buy Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                            <div class="box">
                                <h3>Developer</h3>
                                <h4><sup>$</sup>29<span> / month</span></h4>
                                <ul>
                                    <li>Aida dere</li>
                                    <li>Nec feugiat nisl</li>
                                    <li>Nulla at volutpat dola</li>
                                    <li>Pharetra massa</li>
                                    <li>Massa ultricies mi</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-buy">Buy Now</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section> --}}
            <!-- End Pricing Section -->

            <!-- ======= F.A.Q Section ======= -->
            {{-- <section id="faq" class="faq">
                <div class="container">

                    <div class="section-title">
                        <h2>F.A.Q</h2>
                        <h3>Frequently Asked <span>Questions</span></h3>
                    </div>

                    <ul class="faq-list">

                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a
                                erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                    curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                    non.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque
                                varius morbi enim nunc faucibus a pellentesque? <i
                                    class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                    velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                    pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                    turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet
                                consectetur adipiscing elit pellentesque habitant morbi? <i
                                    class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                    pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                                    tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                    molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci
                                dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                    velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                    pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                    turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam
                                pellentesque nec nam aliquam sem et tortor consequat? <i
                                    class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                                    ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                                    adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus
                                faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                                    class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                    integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                                    eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                    Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus.
                                    Nibh tellus molestie nunc non blandit massa enim nec.
                                </p>
                            </div>
                        </li>

                    </ul>

                </div>
            </section> --}}
            <!-- End F.A.Q Section -->

            <!-- ======= Team Section ======= -->
            {{-- <section id="team" class="team">
                <div class="container">

                    <div class="section-title">
                        <h2>Team</h2>
                        <h3>Our Hardworking <span>Team</span></h3>
                        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas
                            atque vitae autem.</p>
                    </div>

                    <div class="row">

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">
                                    <img src="{{ asset('landing') }}/assets/img/team/team-1.jpg" class="img-fluid"
                                        alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Walter White</h4>
                                    <span>Chief Executive Officer</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">
                                    <img src="{{ asset('landing') }}/assets/img/team/team-2.jpg" class="img-fluid"
                                        alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Product Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">
                                    <img src="{{ asset('landing') }}/assets/img/team/team-3.jpg" class="img-fluid"
                                        alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>William Anderson</h4>
                                    <span>CTO</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">
                                    <img src="{{ asset('landing') }}/assets/img/team/team-4.jpg" class="img-fluid"
                                        alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Amanda Jepson</h4>
                                    <span>Accountant</span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section> --}}
            <!-- End Team Section -->

            <!-- ======= Contact Section ======= -->
            {{-- <section id="contact" class="contact">
                <div class="container">

                    <div class="section-title">
                        <h2>Contact</h2>
                        <h3>Contact <span>Us</span></h3>
                        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas
                            atque vitae autem.</p>
                    </div>

                    <div>
                        <iframe style="border:0; width: 100%; height: 270px;"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="row mt-5">

                        <div class="col-lg-4">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>A108 Adam Street, New York, NY 535022</p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>info@example.com</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+1 5589 55488 55s</p>
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-8 mt-5 mt-lg-0">

                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>

                        </div>

                    </div>

                </div>
            </section> --}}
            <!-- End Contact Section -->

        </main><!-- End #main -->



    @endsection
