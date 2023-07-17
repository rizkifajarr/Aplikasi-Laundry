@extends('layouts.frontend')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Laundry Kite</h1>
                    <h2>Solusi praktis untuk semua kebutuhan laundry kiloan Anda!</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ route('admin') }}" class="btn-get-started scrollto">Pesan Sekarang</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
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
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->
        <!-- ======= Services Section ======= -->
        <section id="kelebihan" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Kelebihan Kami</h2>
                    <p>Mengapa memilih Laundry Kite? Berikut adalah beberapa alasan mengapa kami adalah pilihan yang tepat:
                    </p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Kualitas Terbaik</a></h4>
                            <p>Kami menggunakan deterjen dan pewangi berkualitas tinggi yang tidak hanya membersihkan
                                pakaian, tetapi juga menjaga warna dan tekstur kain. Pakaian Anda akan terlihat dan terasa
                                seperti baru setiap kali Anda menggunakannya.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Harga Terjangkau</a></h4>
                            <p>Kami memahami pentingnya anggaran dalam bisnis dan kehidupan sehari-hari. Oleh karena itu,
                                kami menawarkan harga yang kompetitif untuk layanan laundry kiloan berkualitas tinggi. Anda
                                akan mendapatkan nilai terbaik untuk uang Anda.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Kecepatan dan Efisiensi</a></h4>
                            <p>Kami menghargai waktu Anda. Dengan sistem kerja yang terorganisir dengan baik, kami menjamin
                                pengambilan, pencucian, dan pengantaran pakaian Anda dengan cepat dan tepat waktu.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a href="">Layanan Terbaik</a></h4>
                            <p>Tim kami selalu siap membantu Anda dengan segala pertanyaan atau permintaan yang Anda miliki.
                                Kami berkomitmen untuk memberikan pelayanan pelanggan yang prima dan memberikan kepuasan
                                kepada setiap pelanggan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->
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
        <!-- ======= Pricing Section ======= -->
        <section id="paket" class="pricing">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Paket</h2>
                    <p>Laundry Kite memahami bahwa kesibukan Anda, dan mencuci pakaian mungkin bukan prioritas utama. Oleh
                        karena itu, kami menyediakan layanan laundry kiloan yang cepat, efisien, dan terjangkau.</p>
                </div>
                <div class="row">
                    @foreach ($dataPaket as $index => $paket)
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="box">
                                <h3>{{ $paket->nama }}</h3>
                                <h4><sup>Rp</sup>.{{ $paket->harga }},-<span>per kilo</span></h4>
                                <ul>
                                    <li><i class="bx bx-check"></i> Selesai dalam {{ $paket->waktu }} hari</li>
                                    <li><i class="bx bx-check"></i> Cusi dan lipat</li>
                                    <li><i class="bx bx-check"></i> Termasuk antar jemput pakaian</li>
                                </ul>
                                <a href="{{ route('register') }}" class="buy-btn">Pesan</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Pricing Section -->
        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p>Kami telah merangkum beberapa pertanyaan yang sering ditanyakan oleh pelanggan kami, sehingga Anda
                        dapat mendapatkan informasi yang Anda butuhkan dengan cepat dan mudah.</p>
                </div>
                <div class="faq-list">
                    <ul>
                        @foreach ($dataFaq as $index => $faq)
                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                    data-bs-target="#faq-list-{{ ++$index }}"
                                    class="collapsed">{{ $faq->pertanyaan }}<i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-{{ $index++ }}" class="collapse" data-bs-parent=".faq-list">
                                    <p>{{ $faq->jawaban }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Frequently Asked Questions Section -->
    </main>
    <!-- End #main -->
@endsection
