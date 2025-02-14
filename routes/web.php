<?php

use App\Http\Controllers\BankSampahController;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\LaporanPemasukanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("index");

Route::get('/koleksi-tanaman', [TanamanController::class, 'index'])->name('koleksi');
Route::get('/koleksi-tanaman/{slug}', [TanamanController::class, 'show'])->name('koleksi-detail');

Route::get('/program-kerja-adiwiyata', function () {
    return view('program-kerja');
})->name('program-kerja');

Route::get('/kader-adiwiyata', function () {
    return view('kader');
})->name('kader');

Route::get('/print-laporan-pemasukan', [LaporanPemasukanController::class, 'printPDF'])->name('print.laporan-pemasukan');

Route::get('/print-qr-code', [TanamanController::class, 'printQRCode'])->name('print.qr-code');
