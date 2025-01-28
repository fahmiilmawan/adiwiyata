<?php

use App\Http\Controllers\BankSampahController;
use App\Http\Controllers\TanamanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("index");

Route::get('/koleksi-tanaman-adiwiyata', [TanamanController::class,'index'])->name('koleksi');
Route::get('/koleksi-tanaman-adiwiyata-detail/{id}', [TanamanController::class,'show'])->name('koleksi-detail');

Route::get('/program-kerja-adiwiyata', function () {
    return view('program-kerja');
})->name('program-kerja');

Route::get('/kader-adiwiyata', function () {
    return view('kader');
})->name('kader');
