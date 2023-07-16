<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('backend-assets/') }}"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>
      @if (request()->is('/'))
Laundry Kite
@else
@yield('judul') | Laundry Kite
@endif
    </title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('backend-assets/img/favicon/laundry-kite.ico') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"/>
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('backend-assets/vendor/fonts/boxicons.css') }}" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('backend-assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('backend-assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('backend-assets/css/demo.css') }}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('backend-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend-assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <!-- Page CSS -->
    <!-- Helpers -->
    <script src="{{ asset('backend-assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('backend-assets/js/config.js') }}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme  shadow-lg">
          <div class="app-brand demo">
            <a href="{{ route('admin') }}" class="app-brand-link">
              <img src="{{ asset('backend-assets/img/logo.png') }}" height="40px"/>
            </a>
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>
          <div class="menu-inner-shadow"></div>
          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="{{ route('paket.landingpage') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-left-arrow-circle"></i>
                <div data-i18n="Analytics">Halaman Utama</div>
              </a>
            </li>
            <li class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
              <a href="{{ route('admin') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <li class="menu-item {{ Request::is('dashboard/pesanan*') ? 'active' : '' }}">
              <a href="{{ route('pesanan.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-notepad"></i>
                <div data-i18n="Analytics">Pesanan</div>
              </a>
            </li>
            @can('admin-gate')
    <li class="menu-header small text-uppercase">
                                                                                      <span class="menu-header-text">Admin</span>
                                                      
                                                                                                                                                                                    </li>
                                                                                                                                                                                    <li class="menu-item {{ Request::is('dashboard/paket*') ? 'active' : '' }}">
                                                                                                                                                                                      <a href="{{ route('paket.index') }}" class="menu-link">
                                                                                                                                                                                        <i class="menu-icon tf-icons bx bx-box"></i>
                                                                                                                                                                                        <div data-i18n="Analytics">Paket</div>
                                                                                                                                                                                      </a>
                                                                                                                                                                                    </li>
                                                                                                                                                                                    <li class="menu-item {{ Request::is('dashboard/user*') ? 'active' : '' }}">
                                                                                                                                                                                      <a href="{{ route('user.index') }}" class="menu-link">
                                                                                                                                                                                        <i class="menu-icon tf-icons bx bx-user-circle"></i>
                                                                                                                                                                                        <div data-i18n="Analytics">User</div>
                                                                                                                                                                                      </a>
                                                                                                                                                                                    </li>
                                                                                                                                                                                    <li class="menu-item {{ Request::is('dashboard/faq*') ? 'active' : '' }}">
                                                                                                                                                                                      <a href="{{ route('faq.index') }}" class="menu-link">
                                                                                                                                                                                        <i class="menu-icon tf-icons bx bx-help-circle"></i>
                                                                                                                                                                                        <div data-i18n="Analytics">FAQ</div>
                                                                                                                                                                                      </a>
                                                                                                                                                                                    </li>
                                                                                                                                                                                    <li class="menu-item {{ Request::is('dashboard/sosmed*') ? 'active' : '' }}">
                                                                                                                                                                                      <a href="{{ route('sosmed.index') }}" class="menu-link">
                                                                                                                                                                                        <i class="menu-icon tf-icons bx bx-donate-heart"></i>
                                                                                                                                                                                        <div data-i18n="Analytics">Sosmed</div>
                                                                                                                                                                                      </a>
                                                                                                                                                                                    </li>
                                                                                                                                                                                    <li class="menu-item {{ Request::is('dashboard/panduan*') ? 'active' : '' }}">
                                                                                                                                                                                      <a href="{{ route('panduan.index') }}" class="menu-link">
                                                                                                                                                                                        <i class="menu-icon tf-icons bx bx-book-open"></i>
                                                                                                                                                                                        <div data-i18n="Analytics">Panduan</div>
                                                                                                                                                                                      </a>
                                                                                                                                                                                    </li>
@endcan
            <li class="menu-item">
              <form action="{{ route('user.logout') }}" method="post">
                @csrf
              <button type="submit" class="menu-link li-menu"><i class="menu-icon tf-icons bx bx-power-off me-2"></i> Logout</button>
              </form>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>
            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <h5 class="mb-0 card-title text-primary">@yield('judul')</h5>
                </div>
              </div>
              <!-- /Search -->
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <!-- User -->
                <li class="nav-item d-none d-md-block navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown">
                    Halo, {{ auth()->user()->nama }}
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li class="d-flex align-items-center justify-content-center">
                      <form action="{{ route('user.logout') }}" method="post">
                        @csrf
                      <button type="submit" class="dropdown-item d-flex align-items-center"><i class="bx bx-power-off me-1"></i>Logout</button>
                      </form>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>
          <!-- / Navbar -->
          <!-- Content wrapper -->
          <div class="content-wrapper">
@yield('content')
            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                      document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a class="footer-link fw-bolder">Rizki, Putri & Kanada</a>
                </div>
              </div>
            </footer>
            <!-- / Footer -->
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('backend-assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend-assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('backend-assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('backend-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('backend-assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->
    <!-- Vendors JS -->
    <script src="{{ asset('backend-assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('backend-assets/js/main.js') }}"></script>
    <!-- Page JS -->
    <script src="{{ asset('backend-assets/js/dashboards-analytics.js') }}"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
