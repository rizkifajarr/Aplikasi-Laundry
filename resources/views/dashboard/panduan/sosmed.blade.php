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
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Menambah Sosmed</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat menambahkan
                                        sosmed baru untuk Aplikasi Web "Loundry Kite" dengan menyertakan nama aplikasi yang
                                        digunakan dan ID / Username yang digunakan pada aplikasi tersebut.</p>
                                </div>
                                <img src="{{ asset('assets/img/panduan/sosmed2.png') }}" class="card-img-top border rounded"
                                    alt="#">
                            </div>
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Mengedit Sosmed</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat mengedit sosmed
                                        yang digunakan pada Aplikasi Web "Loundry Kite", dengan mengubah nama aplikasi dan
                                        ID / Username.</p>
                                </div>
                                <img src="{{ asset('assets/img/panduan/sosmed3.png') }}" class="card-img-top border rounded"
                                    alt="#">
                            </div>
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Menghapus Sosmed</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat menghapus sosmed
                                        yang digunakan pada Aplikasi Web "Loundry Kite" dengan meng-klik
                                        tombol "Delete" yang berwarna merah.</p>
                                </div>
                                <img src="{{ asset('assets/img/panduan/sosmed4.png') }}" class="card-img-top border rounded"
                                    alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
