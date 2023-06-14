@extends('layouts.admin-empty')
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

                        <form id="formAuthentication" class="mb-3" action="index.html" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Masukkan email Anda" autofocus />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
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

                            <form id="formAuthentication" class="mb-3" action="index.html" method="POST">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="Masukkan email Anda" autofocus />
                                </div>
                                <div class="mb-3 form-password-toggle">
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control" name="password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
                                </div>
                            </form>

                            <p class="text-center">
                                <span>Belum punya akun?</span>
                                <a href="{{ route('register') }}">
                                    <span>Buat akun</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Content -->
        @endsection
