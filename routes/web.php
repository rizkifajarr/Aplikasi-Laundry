<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\SosmedController;
use App\Http\Controllers\PesananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::controller(PaketController::class)->name('paket.')->group(function () {
    Route::get('/', 'landingpage')->name('landingpage');
});

Route::controller(UserController::class)->name('user.')->group(function () {
    // Frontend
    Route::post('/simpan', 'simpan')->name('simpan-frontend');
    Route::post('/otentifikasi', 'otentifikasi')->name('otentifikasi');
    Route::post('/logout', 'logout')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::controller(UserController::class)->prefix('dashboard/user')->name('user.')->group(function () {
        Route::get('/ubah/{user}', 'ubah')->name('ubah');
        Route::patch('/update/{user}', 'update')->name('update');
    });

    Route::controller(UserController::class)->prefix('dashboard')->group(function () {
        Route::get('/', 'indexAdmin')->name('admin');
        Route::get('/tak-berhak', function () {
            return view('dashboard.tak-berhak');
        })->name('dashboard.tak-berhak');
    });

    Route::controller(PesananController::class)->prefix('dashboard/pesanan')->name('pesanan.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/tambah', 'tambah')->name('tambah');
        Route::post('/simpan', 'create')->name('simpan');
        Route::get('/ubah/{pesanan}', 'ubah')->name('ubah');
        Route::patch('/update/{pesanan}', 'update')->name('update');
        Route::delete('/hapus/{pesanan}', 'delete')->name('delete');
    });

    Route::middleware('admin')->group(function () {
        Route::controller(PaketController::class)->prefix('dashboard/paket')->name('paket.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/simpan', 'create')->name('simpan');
            Route::get('/ubah/{paket}', 'ubah')->name('ubah');
            Route::patch('/update/{paket}', 'update')->name('update');
            Route::delete('/hapus/{paket}', 'delete')->name('delete');
            Route::get('/tambah', function () {
                return view('dashboard.paket.tambah');
            })->name('tambah');
        });

        Route::controller(UserController::class)->prefix('dashboard/user')->name('user.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/tambah', 'tambah')->name('tambah');
            Route::delete('/hapus/{user}', 'delete')->name('delete');
            Route::post('/simpan', 'create')->name('simpan');
        });

        # Admin
        Route::prefix('dashboard')->group(function () {
            Route::resource('faq', FaqController::class);
            Route::resource('sosmed', SosmedController::class);
        });
        Route::prefix('dashboard/panduan')->name('panduan.')->group(function () {
            Route::get('/', function () { return view('dashboard.panduan.index'); })->name('index');
            Route::get('/dashboard', function () { return view('dashboard.panduan.dashboard'); })->name('dashboard');
            Route::get('/user', function () { return view('dashboard.panduan.user'); })->name('user');
            Route::get('/pesanan', function () { return view('dashboard.panduan.pesanan'); })->name('pesanan');
            Route::get('/paket', function () { return view('dashboard.panduan.paket'); })->name('paket');
        });
    });
});