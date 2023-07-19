<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\SosmedController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/faqs', [FaqController::class,'apiIndex'])->name('api.faq');
Route::get('/paket', [PaketController::class,'apiIndex'])->name('api.paket');
Route::get('/sosmed', [SosmedController::class,'apiIndex'])->name('api.sosmed');
