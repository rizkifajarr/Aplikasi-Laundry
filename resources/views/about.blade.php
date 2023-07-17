@extends('layouts.frontend')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Laundry Kite</h1>
                    <h2>Solusi praktis untuk semua kebutuhan laundry kiloan Anda!</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->
    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Tentang Kami</h2>
                </div>
                <div class="row content">
                    <div class="col-lg-12 pt-4 pt-lg-0 text-center">
                        <p>
                            Laundry Kite adalah mitra tepercaya untuk kebutuhan laundry kiloan Anda. Dengan pengalaman dan
                            keahlian kami, kami memberikan layanan cuci kiloan yang berkualitas tinggi dengan kecepatan dan
                            efisiensi yang luar biasa. Kami menggunakan peralatan modern dan bahan pembersih terbaik untuk
                            memberikan hasil terbaik bagi pakaian Anda. Tim profesional kami siap membantu Anda dengan
                            pelayanan pelanggan yang prima. Bersama Laundry Kilat, nikmati pengalaman laundry kiloan yang
                            mudah, cepat, dan handal.
                        </p>
                        <a href="#" class="btn-learn-more text-center">Lebih lanjut ..</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->
        <!-- ======= Cta Section ======= -->
        <section id="hubungi" class="cta">
            <div class="container" data-aos="zoom-in">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Hubungi Kami</h3>
                        <p>Hubungi kami hari ini dan nikmati pengalaman laundry kiloan yang mudah, cepat, dan handal bersama
                            Laundry Kite. bersih, rapi, dan cepat!</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="tel:0812345678910">0812345678910</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Cta Section -->
        <!-- ======= Team Section ======= -->
        <section id="tim" class="team section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Tim Kami</h2>
                    <p>Kami percaya bahwa kepuasan pelanggan adalah kunci kesuksesan kami. Itulah sebabnya tim kami selalu
                        berusaha untuk memberikan layanan yang memenuhi harapan Anda. Kecepatan, ketepatan waktu, dan
                        keamanan pakaian Anda adalah prioritas utama kami.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/img/team/rizki.jpeg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Rizki Fajar Setyawan</h4>
                                <span>Chief Executive Officer</span>
                                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/img/team/putri.jpeg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Putri Nirwana</h4>
                                <span>Product Manager</span>
                                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Kanada Kurniawan</h4>
                                <span>Chief Technology Officer</span>
                                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team Section -->
    </main>
    <!-- End #main -->
@endsection
