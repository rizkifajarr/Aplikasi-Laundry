@extends('layouts.admin')
@section('judul')
    @can('admin-gate')
        Beranda Admin
    @else
        Beranda
    @endcan
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-lg-8 mb-12 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-12">
                            <div class="card-body pb-0">
                                @can('admin-gate')
                                    <h5 class="card-title text-primary">Halo, Admin {{ auth()->user()->nama }}! 🎉</h5>
                                    <p class="mb-0">
                                        @if ($jumlahPesanan == 0)
                                            Saat ini belum ada pesanan masuk.
                                        @else
                                            Saat ini terdapat <span class="fw-bold">{{ $jumlahPesanan }}</span> pesanan.
                                        @endif
                                        Silakan cek dibagian <a href="{{ route('pesanan.index') }}">pesanan</a>.
                                    </p>
                                @else
                                    <h5 class="card-title text-primary">Selamat Datang {{ auth()->user()->nama }}! 🎉</h5>
                                    <p class="mb-0">
                                        @if ($jumlahPesanan == 0)
                                            Saat ini kamu tidak memiliki pesanan.
                                        @else
                                            Saat ini kamu memiliki <span class="fw-bold">{{ $jumlahPesanan }}</span> pesanan.
                                            Silakan cek dibagian <a href="{{ route('pesanan.index') }}">pesanan</a>.
                                        @endif
                                        Kamu juga dapat menambahkan pesanan di <a class="btn btn-xs btn-primary"
                                            href="{{ route('pesanan.tambah') }}">Pesan Sekarang</a>.
                                    </p>
                                @endcan
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body">
                                <p>Profil Anda</p>
                                <p>Nama :<br><strong>{{ auth()->user()->nama }}</strong></p>
                                <p>HP :<br><strong>{{ auth()->user()->hp }}</strong></p>
                                <p>Alamat :<br><strong>{{ auth()->user()->alamat }}</strong></p>
                                <p>Email :<br><strong>{{ auth()->user()->email }}</strong></p>
                                <a href="{{ route('user.ubah', [auth()->user()->id]) }}"
                                    class="btn btn-sm btn-outline-primary">Ubah Profil</a>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('backend-assets/img/illustrations/man-with-laptop-light.png') }}"
                                    height="140" alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
