<?php

use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::controller(BerandaController::class)->group(function () {
    Route::get('beranda', 'beranda')->name('beranda');
});