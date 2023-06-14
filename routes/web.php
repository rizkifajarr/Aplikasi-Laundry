<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaketController;
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


Route::controller(PesananController::class)->name('pesanan.')->group(function () {
    Route::get('admin/pesanan', 'index')->name('index');
    Route::get('/admin/pesanan/tambah', 'tambah')->name('tambah');
    Route::post('admin/pesanan/simpan', 'create')->name('simpan');
    Route::get('admin/pesanan/ubah/{pesanan}', 'ubah')->name('ubah');
    Route::patch('admin/pesanan/update/{pesanan}', 'update')->name('update');
    Route::delete('admin/pesanan/hapus/{pesanan}', 'delete')->name('delete');
});

Route::controller(UserController::class)->name('user.')->group(function () {
    Route::get('admin/user', 'index')->name('index');
    Route::get('/admin/user/tambah', 'tambah')->name('tambah');
    Route::post('admin/user/simpan', 'create')->name('simpan');
    Route::post('/simpan', 'simpan')->name('simpan-frontend');
    Route::get('admin/user/ubah/{user}', 'ubah')->name('ubah');
    Route::patch('admin/user/update/{user}', 'update')->name('update');
    Route::delete('admin/user/hapus/{user}', 'delete')->name('delete');
});
