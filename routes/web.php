<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\LahanController;
use App\Http\Controllers\SetelanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::controller(BerandaController::class)->group(function () {
    Route::get('beranda', 'beranda')->name('beranda');
});

Route::controller(NotifikasiController::class)->group(function () {
    Route::get('notifikasi', 'notifikasi')->name('notifikasi');
});

Route::controller(StatistikController::class)->group(function () {
    Route::get('statistik', 'statistik')->name('statistik');
});

Route::controller(LahanController::class)->group(function () {
    Route::get('lahan', 'lahan')->name('lahan');
});

Route::controller(SetelanController::class)->group(function () {
    Route::get('setelan', 'setelan')->name('setelan');
});