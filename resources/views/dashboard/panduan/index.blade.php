@extends('layouts.admin')
@section('judul')
    Panduan Admin
    @endsection @section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Pesanan</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda harus rutin mengecek
                                        jumlah pesanan yang masuk setiap harinya, dimulai dari nama customer, jenis paket,
                                        status pesanan, jumlah pesanan dan juga waktu pemesanan.</p>
                                    <button href="#" class="btn btn-outline-primary">Tampilkan</button>
                                </div>
                            </div>
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Paket</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda harus mengecek tiap
                                        pesanan dengan tipe paket apa yang telah dipilih oleh customer.</p>
                                    <button href="#" class="btn btn-outline-primary">Tampilkan</button>
                                </div>
                            </div>
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - User</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda harus mengecek tiap
                                        user yang telah terdaftar seperti nama customer, alamat, no handphone dan email.</p>
                                    <button href="#" class="btn btn-outline-primary">Tampilkan</button>
                                </div>
                            </div>
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - FAQ</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda harus mengecek tiap
                                        user yang telah terdaftar seperti nama customer, alamat, no handphone dan email.</p>
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
