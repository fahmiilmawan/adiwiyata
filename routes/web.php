<?php

use App\Http\Controllers\BankSampahController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/pokja', function () {
    return view('pokja');
})->name('pokja');

