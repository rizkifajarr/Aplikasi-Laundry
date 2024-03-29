<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('judul')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="{{ asset('backend-assets/img/favicon/laundry-kite.ico') }}" rel="icon">
    <link href="{{ asset('backend-assets/img/favicon/laundry-kite.ico') }}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- =======================================================
  * Template Name: Arsha
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            {{-- <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="{{ route('paket.landingpage') }}" class="logo me-auto"><img src="{{ asset('assets/img/logo-white.png') }}"
                    alt="" class="img-fluid"></a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ route('paket.landingpage') }}">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#kelebihan">Kelebihan</a></li>
                    <li><a class="nav-link scrollto" href="#hubungi">Kontak</a></li>
                    <li><a class="nav-link scrollto" href="#tim">Tim</a></li>
                    <li><a class="nav-link scrollto" href="#paket">Paket</a></li>
                    @auth
                        <div class="dropdown">
                            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Halo, {{ auth()->user()->nama }}
                            </a>
                            <ul class="dropdown-menu text-small">
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin') }}">Dashboard</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="{{ route('user.logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="bi bi-box-arrow-right me-2"></i>Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <li><a class="getstarted scrollto" href="{{ route('login') }}">Masuk</a></li>
                        <li><a class="getstarted scrollto" href="{{ route('register') }}">Daftar</a></li>
                    @endauth
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
    @yield('content')
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 footer-contact">
                        <h3>Laundry Kite</h3>
                        <p>
                            Jl. Jenderal Ahmad Yani No.111, <br>
                            Bangka Belitung Laut, Kec. <br>
                            Pontianak Tenggara, Kota Pontianak, <br>
                            Kalimantan Barat 78123 <br><br>
                            <strong>Phone:</strong> 08123456789<br>
                            <strong>Email:</strong> info@laundrykite.com<br>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 footer-links">
                        <h4>Sosial Media</h4>
                        <p>Ikuti kami melalui sosial media berikut</p>
                        <div class="social-links mt-3">
                            @foreach ($dataSosmed as $index => $sosmed)
                                @if ($sosmed["jenis"] == 'Twitter')
                                    <a href="https://twitter.com/{{ $sosmed["sosmed_id"] }}" class="twitter"><i
                                            class="bx bxl-twitter"></i></a>
                                @elseif($sosmed["jenis"] == 'Facebook')
                                    <a href="https://facebook.com/{{ $sosmed["sosmed_id"] }}" class="facebook"><i
                                            class="bx bxl-facebook"></i></a>
                                @elseif($sosmed["jenis"] == 'Instagram')
                                    <a href="https://instagram.com/{{ $sosmed["sosmed_id"] }}" class="instagram"><i
                                            class="bx bxl-instagram"></i></a>
                                @elseif($sosmed["jenis"] == 'LinkedIn')
                                    <a href="https://linkedin.com/{{ $sosmed["sosmed_id"] }}" class="linkedin"><i
                                            class="bx bxl-linkedin"></i></a>
                                @endif
                            @endforeach
                        </div>
                        <h4 class="pb-0 mt-4">Panduan User</h4>
                        <button class="btn btn-info mt-2">
                            <a href="{{ asset('assets/panduan/dokumentasi-user.pdf') }}" class="text-white d-flex align-items-center">
                                <i class="bx bx-book-open me-1"></i>Panduan
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Laundry Kite</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Made with ❤️ by <a href="{{ route('paket.about') }}">Rizki, Putri &amp; Kanada</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
