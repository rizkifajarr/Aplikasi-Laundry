@extends('layouts.admin')
@section('judul')
    Panduan Fitur Admin
    @endsection @section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Dashboard</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda akan melihat tampilan
                                        awal pada aplikasi web "Laundry Kite" yang dimana akan tertera sebuah profil pribadi
                                        anda serta anda dapat melihat notifikasi pesanan yang ada.</p>
                                    <button href="#" class="btn btn-outline-primary">Tampilkan</button>
                                </div>
                            </div>
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Pesanan</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda harus rutin melihat
                                        jumlah pesanan yang masuk setiap harinya, dimulai dari nama customer, jenis paket,
                                        status pesanan, jumlah pesanan dan juga waktu pemesanan.</p>
                                    <a class="btn btn-outline-primary" href="{{ route('panduan.user') }}">
                                        Tampilkan
                                    </a>
                                </div>
                            </div>
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Paket</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda harus melihat tiap
                                        pesanan dengan tipe paket apa yang telah dipilih oleh customer.</p>
                                    <button href="#" class="btn btn-outline-primary">Tampilkan</button>
                                </div>
                            </div>
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - User</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda harus melihat tiap
                                        user yang telah terdaftar seperti nama customer, alamat, no handphone dan email.</p>
                                    <a class="btn btn-outline-primary" href="{{ route('panduan.user') }}">
                                        Tampilkan
                                    </a>
                                </div>
                            </div>
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - FAQ</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda harus melihat
                                        pertanyaan dari customer.</p>
                                    <button href="#" class="btn btn-outline-primary">Tampilkan</button>
                                </div>
                            </div>
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Sosmed</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda harus melihat
                                        perkembangan sosial media "Laundry Kite".</p>
                                    <button href="#" class="btn btn-outline-primary">Tampilkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
