@extends('layouts.frontend')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-column text-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Laundry Kite</h1>
                    <h2>Sebuah project akhir untuk UAS mata kuliah Pemrograman Berbasis Kerangka Kerja</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->
    <main id="main">
        <!-- ======= Team Section ======= -->
        <section id="tim" class="team section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Kelompok Kami</h2>
                    <p>Project merupakan aplikasi web berbasis laravel yang mencakup frontend & frontend. Project ini dikerjakan secara berkelompok dengan anggota kelompok sebagai berikut</p>                    
                </div>
                <div class="row">
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/img/team/rizki.jpeg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Rizki Fajar Setyawan</h4>
                                <span>NIM : 201220024</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/img/team/putri.jpeg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Putri Nirwana</h4>
                                <span>NIM : 201220104</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/img/team/kanadakurniawan.jpg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Kanada Kurniawan</h4>
                                <span>NIM : 201220006</span>
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
