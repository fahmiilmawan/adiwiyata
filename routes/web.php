<?php

use App\Http\Controllers\BankSampahController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("index");

Route::get('/koleksi-tanaman-adiwiyata', function () {
    return view('koleksi');
})->name('koleksi');

Route::get('/program-kerja-adiwiyata', function () {
    return view('program-kerja');
})->name('program-kerja');

Route::get('/kader-adiwiyata', function () {
    return view('kader');
})->name('kader');
