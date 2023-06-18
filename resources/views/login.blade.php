@extends('layouts.admin-empty')
@section('judul')
Login
@endsection
@section('content')
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="/" class="app-brand-link gap-2 mt-4">
                                <img src="{{ asset('backend-assets/img/logo.png') }}" height="40px" />
                            </a>
                        </div>
                        <!-- /Logo -->
                        <p class="mb-4 text-center">Selamat datang di Laundry Kite</p>

                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          {{ session('success') }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      @endif
                  
                      @if(session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          {{ session('loginError') }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      @endif

                        <form id="formAuthentication" class="mb-3" action="{{ route('user.otentifikasi') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" id="email_address" class="form-control @error('email') is-invalid @enderror" name="email" autofocus required value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror    
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label for="email" class="form-label">Password</label>
                                <input type="password" id="password" class="form-control" name="password" required>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
                            </div>
                        </form>
                        <p class="text-center"><span>Login menggunakan..</span></p>
                        <div class="d-flex justify-content-center mb-3">
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="bi bi-google"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="bi bi-facebook"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="bi bi-twitter"></i>
                            </button>
                        </div>
                        <p class="text-center">
                            <span>Belum punya akun?</span>
                            <a href="{{ route('register') }}">
                                <span>Buat akun</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- /Register -->
            </div>
            <!-- / Content -->
        @endsection
