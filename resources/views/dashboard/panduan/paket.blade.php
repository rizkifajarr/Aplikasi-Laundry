@extends('layouts.admin')
@section('judul')
    Panduan Fitur Pesanan
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
                                    <h5 class="card-title">Panduan - Paket</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat melihat
                                        jenis-jenis paket yang tertera, paket ini diperuntukkan customer yang berlangganan
                                        di
                                        "Loundry Kite".</p>
                                </div>
                                <img src="{{ asset('assets/img/panduan/paket1.png') }}" class="card-img-top border rounded"
                                    alt="#">
                            </div>
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Menambah Paket</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat menambah jenis
                                        paket, jenis paket yang ditambah harus menyertakan nama paket, biaya paket dan
                                        estimasi
                                        waktu paket.</p>
                                </div>
                                <img src="{{ asset('assets/img/panduan/paket2.png') }}" class="card-img-top border rounded"
                                    alt="#">
                            </div>
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Mengedit Paket</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat mengedit jenis
                                        paket yang sudah tertera dengan mengubah nama paket, biaya paket dan estimasi waktu
                                        paket.</p>
                                </div>
                                <img src="{{ asset('assets/img/panduan/paket3.png') }}" class="card-img-top border rounded"
                                    alt="#">
                            </div>
                            {{-- <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Menghapus Pesanan</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat menghapus
                                        pesanan
                                        dengan menghapus pesanan yang sudah terdaftar dengan meng-klik tombol "Delete" yang
                                        berwarna merah.</p>
                                </div>
                                <img src="{{ asset('assets/img/panduan/pesanan4.png') }}"
                                    class="card-img-top border rounded" alt="#">
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
