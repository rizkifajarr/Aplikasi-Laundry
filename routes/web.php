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

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/tambah', function () {
    return view('dashboard.paket.tambah');
})->name('paket.tambah');

Route::controller(PaketController::class)->name('paket.')->group(function () {
    Route::get('dashboard/paket', 'index')->name('index');
    Route::post('/simpan', 'create')->name('simpan');
    Route::get('/ubah/{paket}', 'ubah')->name('ubah');
    Route::patch('/update/{paket}', 'update')->name('update');
    Route::delete('/hapus/{paket}', 'delete')->name('delete');
});