@extends('layouts.admin')
@section('judul')
    Panduan Fitur FAQ
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
                                    <h5 class="card-title">Panduan - FAQ</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat melihat beberapa
                                        pertanyaan yang sering ditanyakan oleh customer dan juga jawabannya.</p>
                                </div>
                                <img src="{{ asset('assets/img/panduan/faq1.png') }}" class="card-img-top border rounded"
                                    alt="#">
                            </div>
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Menambah FAQ</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat menambahkan
                                        pertanyaan baru yang sering ditanyakan oleh beberapa customer serta anda dapat
                                        menambahkan jawaban dari pertanyaan tersebut.</p>
                                </div>
                                <img src="{{ asset('assets/img/panduan/faq2.png') }}" class="card-img-top border rounded"
                                    alt="#">
                            </div>
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Mengedit FAQ</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat mengedit FAQ
                                        yaitu pertanyaan dan jawaban yang ditanyakan oleh customer.</p>
                                </div>
                                <img src="{{ asset('assets/img/panduan/faq3.png') }}" class="card-img-top border rounded"
                                    alt="#">
                            </div>
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Menghapus FAQ</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat menghapus FAQ
                                        yaitu pertanyaan dan jawaban yang ditanyakan oleh customer dengan meng-klik
                                        tombol "Delete" yang berwarna merah.</p>
                                </div>
                                <img src="{{ asset('assets/img/panduan/faq4.png') }}" class="card-img-top border rounded"
                                    alt="#">
                            </div>
                                
                            <a href="{{ route('panduan.sosmed') }}"><button type="button"
                                class="btn mt-3 btn-sm btn-primary">Selanjutnya</button></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
