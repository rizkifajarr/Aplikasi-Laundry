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
                        <a href="#paket" class="btn-get-started scrollto">Pesan Sekarang</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

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
        </section><!-- End About Us Section -->

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
        </section><!-- End Services Section -->

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
        </section><!-- End Cta Section -->

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
                            <div class="pic"><img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid"
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
                            <div class="pic"><img src="{{ asset('assets/img/team/team-2.jpg') }}" class="img-fluid"
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
        </section><!-- End Team Section -->

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
                                <a href="#" class="buy-btn">Pesan</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Pricing Section -->

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
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">Berapa lama waktu yang diperlukan untuk mencuci dan
                                mengeringkan pakaian? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Di Laundry Kite, kami berkomitmen untuk memberikan layanan yang cepat dan efisien. Waktu
                                    yang diperlukan tergantung pada jumlah dan jenis pakaian yang Anda serahkan. Secara
                                    umum, kami menargetkan pengembalian dalam waktu 24-48 jam.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">Bagaimana sistem pengambilan dan
                                pengantaran bekerja? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Kami menawarkan layanan pengambilan dan pengantaran gratis untuk memudahkan Anda.
                                    Setelah Anda memesan layanan, tim kami akan mengatur jadwal pengambilan sesuai dengan
                                    waktu yang Anda pilih. Kami akan mengambil cucian Anda di lokasi yang ditentukan dan
                                    mengantarkannya kembali setelah selesai dicuci dan dikeringkan.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">Apakah Anda menerima pakaian dengan
                                instruksi khusus atau bahan sensitif? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Ya, kami dapat menangani pakaian dengan instruksi khusus atau bahan sensitif. Kami
                                    memiliki pengalaman dalam merawat berbagai jenis pakaian dan memahami kebutuhan khusus
                                    yang mungkin Anda miliki. Anda dapat memberikan instruksi khusus kepada tim kami dan
                                    kami akan merawat pakaian Anda dengan hati-hati sesuai dengan permintaan Anda.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="500">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-5" class="collapsed">Bagaimana jika ada kerusakan atau
                                kehilangan pakaian? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Kami sangat memperhatikan keamanan dan keandalan. Namun, jika terjadi kerusakan atau
                                    kehilangan pakaian selama proses pencucian, kami memiliki kebijakan tanggung jawab yang
                                    sesuai. Anda dapat menghubungi tim kami dan kami akan menindaklanjuti secara profesional
                                    dan memberikan solusi yang adil.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        {{-- <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
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

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
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
    </section><!-- End Contact Section --> --}}

    </main><!-- End #main -->
@endsection
