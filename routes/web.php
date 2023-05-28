<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketController;

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

// Route::get('/', function () {
//     return view('index');
// })->name('index');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::controller(PaketController::class)->name('paket.')->group(function () {
    Route::get('/', 'landingpage')->name('landingpage');
    Route::get('admin/paket', 'index')->name('index');
    Route::post('admin/paket/simpan', 'create')->name('simpan');
    Route::get('admin/paket/ubah/{paket}', 'ubah')->name('ubah');
    Route::patch('admin/paket/update/{paket}', 'update')->name('update');
    Route::delete('admin/paket/hapus/{paket}', 'delete')->name('delete');
});

Route::get('/admin/paket/tambah', function () {
    return view('admin.paket.tambah');
})->name('paket.tambah');


Route::controller(PasananController::class)->name('pesanan.')->group(function () {
    Route::get('admin/pesanan', 'index')->name('index');
    Route::post('admin/pesanan/simpan', 'create')->name('simpan');
    Route::get('admin/pesanan/ubah/{paket}', 'ubah')->name('ubah');
    Route::patch('admin/pesanan/update/{paket}', 'update')->name('update');
    Route::delete('admin/pesanan/hapus/{paket}', 'delete')->name('delete');
});

Route::get('/admin/pesanan/tambah', function () {
    return view('admin.pesanan.tambah');
})->name('pesanan.tambah');