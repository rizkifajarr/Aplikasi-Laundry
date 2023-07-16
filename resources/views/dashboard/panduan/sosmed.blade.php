@extends('layouts.admin')
@section('judul')
    Panduan Fitur Sosmed
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Sosmed</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat melihat sosial
                                        media yang digunakan untuk Aplikasi Web "Loundry Kite" dan anda harus
                                        melihat perkembangan sosial media Aplikasi Web "Loundry Kite".</p>
                                </div>
                                <img src="{{ asset('assets/img/panduan/sosmed1.png') }}" class="card-img-top border rounded"
                                    alt="#">
                            </div>
                            {{-- <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Menambah FAQ</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat menambah
                                        pertanyaa baru yang sering ditanyakan oleh beberapa customer serta anda dapat
                                        menambahkan jawaban dari pertanyaan tersebut.</p>
                                </div>
                                <img src="{{ asset('assets/img/panduan/faq2.png') }}" class="card-img-top border rounded"
                                    alt="#">
                            </div> --}}
                            {{-- <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Mengedit FAQ</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat mengedit FAQ
                                        yaitu pertanyaan dan jawaban yang sering ditanyakan oleh customer.</p>
                                </div>
                                <img src="{{ asset('assets/img/panduan/faq3.png') }}" class="card-img-top border rounded"
                                    alt="#">
                            </div> --}}
                            {{-- <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Menghapus FAQ</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat menghapus FAQ
                                        yaitu pertanyaan dan jawaban yang sering ditanyakan oleh customer dengan meng-klik
                                        tombol "Delete" yang berwarna merah.</p>
                                </div>
                                <img src="{{ asset('assets/img/panduan/faq4.png') }}" class="card-img-top border rounded"
                                    alt="#">
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
