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
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Selamat Datang {{ auth()->user()->nama }}! 🎉</h5>
                          <p class="mb-4">
                            You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                            your profile.
                          </p>
                          <p>Profil Anda</p>
                          <p>Nama :<br><strong>{{ auth()->user()->nama }}</strong></p>
                          <p>HP :<br><strong>{{ auth()->user()->hp }}</strong></p>
                          <p>Alamat :<br><strong>{{ auth()->user()->alamat }}</strong></p>
                          <p>Email :<br><strong>{{ auth()->user()->email }}</strong></p>

                          <a href="{{route('user.ubah',[auth()->user()->id])}}" class="btn btn-sm btn-outline-primary">Ubah Profil</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
@endsection