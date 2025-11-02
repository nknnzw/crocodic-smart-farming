<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\LahanController;
use App\Http\Controllers\SetelanController;
use App\Http\Controllers\NotifController;
use App\Http\Controllers\ZonawaktuController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TentangController;
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

Route::controller(NotifController::class)->group(function () {
    Route::get('notif', 'notif')->name('notif');
});

Route::controller(ZonawaktuController::class)->group(function () {
    Route::get('zona', 'zona')->name('zona');
});

Route::controller(ProfilController::class)->group(function () {
    Route::get('profil', 'profil')->name('profil');
});

Route::controller(TentangController::class)->group(function () {
    Route::get('tentang', 'tentang')->name('tentang');
});