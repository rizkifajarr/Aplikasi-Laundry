@extends('layouts.admin')
@section('judul')
    Panduan Fitur User
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow-sm mb-3">
                                <img src="{{ asset('assets/img/panduan/user1.png') }}" class="card-img-top shadow-sm"
                                    alt="#">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - User</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda harus melihat tiap
                                        user yang telah terdaftar seperti nama, alamat, no handphone dan email.</p>
                                </div>
                            </div>
                            <div class="card shadow-sm mb-3">
                                <img src="{{ asset('assets/img/panduan/user2.png') }}" class="card-img-top shadow-sm"
                                    alt="#">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Menambah User</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat menambah jumlah
                                        user dengan menyertakan nama lengkap, alamat, no handphone dan email.</p>
                                </div>
                            </div>
                            <div class="card shadow-sm mb-3">
                                <img src="{{ asset('assets/img/panduan/user3.png') }}" class="card-img-top shadow-sm"
                                    alt="#">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Mengedit User</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat mengedit user
                                        dengan mengubah nama lengkap, alamat, no handphone dan email.</p>
                                </div>
                            </div>
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Panduan - Menghapus User</h5>
                                    <p class="card-text">Pada panduan ini sebagai seorang admin anda dapat menghapus
                                        user
                                        dengan menghapus akun yang sudah terdaftar dengan meng-klik tombol "Delete" yang
                                        berwarna merah.</p>
                                </div>
                                <img src="{{ asset('assets/img/panduan/user4.png') }}"
                                    class="card-img-top border-top rounded" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
