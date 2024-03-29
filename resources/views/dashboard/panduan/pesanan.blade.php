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
                                    <h5 class="card-title">Panduan - Pesanan</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat melihat pesanan
                                        yang muncul setiap harinya, dengan detail nama customer, jenis paket, status pesanan
                                        dan jumlah pesanan.</p>
                                </div>
                                <img src="{{ asset('assets/img/panduan/pesanan1.png') }}"
                                    class="card-img-top border rounded" alt="#">
                            </div>
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Menambah Pesanan</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat menambah jumlah
                                        pesanan dengan menyertakan nama customer, jenis paket dan jumlah pesanan dalam
                                        bentuk
                                        per-kilogram.</p>
                                </div>
                                <img src="{{ asset('assets/img/panduan/pesanan2.png') }}"
                                    class="card-img-top border rounded" alt="#">
                            </div>
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Mengedit Pesanan</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat mengedit user
                                        dengan mengubah nama customer, jenis paket dan jumlah pesanan dalam bentuk
                                        per-kilogram.</p>
                                </div>
                                <img src="{{ asset('assets/img/panduan/pesanan3.png') }}"
                                    class="card-img-top border rounded" alt="#">
                            </div>
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Menghapus Pesanan</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat menghapus
                                        pesanan
                                        dengan menghapus pesanan yang sudah terdaftar dengan meng-klik tombol "Delete" yang
                                        berwarna merah.</p>
                                </div>
                                <img src="{{ asset('assets/img/panduan/pesanan4.png') }}"
                                    class="card-img-top border rounded" alt="#">   
                            </div>
                                
                            <a href="{{ route('panduan.paket') }}"><button type="button"
                                class="btn mt-3 btn-sm btn-primary">Selanjutnya</button></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
