@extends('layouts.admin-empty')
@section('judul')
Register
@endsection
@section('content')
<!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
          <div class="authentication-inner">
            <!-- Register Card -->
            <div class="card">
              <div class="card-body">
                <!-- Logo -->
                <div class="app-brand justify-content-center">
                  <a href="/" class="app-brand-link gap-2 mt-4">
                    <img src="{{ asset('backend-assets/img/logo.png') }}" height="40px"/>
                  </a>
                </div>
                {{-- <!-- /Logo -->
                <h4 class="mb-2">Solusi praktis untuk semua kebutuhan laundry kiloan Anda!</h4> --}}
                <p class="mb-4 text-center">Silakan isi form untuk melakukan pendaftaran</p>
  
                <form id="formAuthentication" class="mb-3" action="{{route('user.simpan-frontend')}}" method="POST">
                        @csrf
                  <div class="mb-3">
                    <label for="username" class="form-label">Nama Lengkap</label>
                    <input
                      type="text"
                      class="form-control"
                      id="nama"
                      name="nama"
                      autofocus
                    />
                  </div>
                  <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea type="text" class="form-control" id="alamat" name="alamat"> </textarea>
                  </div>
                  <div class="mb-3">
                    <label for="handphone" class="form-label">Handphone</label>
                    <input type="tel" class="form-control" id="hp" name="hp" placeholder="0812345678910"/>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="email@kamu.com"/>
                  </div>
                  <div class="mb-3 form-password-toggle">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-group input-group-merge">
                      <input
                        type="password"
                        id="password"
                        class="form-control"
                        name="password"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password"
                      />
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                  </div>
  
                  {{-- <div class="mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                      <label class="form-check-label" for="terms-conditions">
                        I agree to
                        <a href="javascript:void(0);">privacy policy & terms</a>
                      </label>
                    </div>
                  </div> --}}
                  <button type="submit" class="btn btn-primary d-grid w-100">Daftar</button>
                </form>
  
                <p class="text-center">
                  <span>Sudah punya akun?</span>
                  <a href="{{route('login')}}">
                    <span>Masuk ke sini</span>
                  </a>
                </p>
              </div>
            </div>
            <!-- Register Card -->
          </div>
        </div>
      </div>
  
      <!-- / Content -->
@endsection