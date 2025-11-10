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
use App\Http\Controllers\SplashController;
use Illuminate\Support\Facades\Route;

// Tambahkan route ini di paling atas, sebelum route lainnya
Route::get('/', function () {
    return view('splash');
})->name('splash');

// Ubah route beranda menjadi:
Route::get('/beranda', [BerandaController::class, 'beranda'])->name('beranda');

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


Route::get('/lahan', [LahanController::class, 'lahan'])->name('lahan');
Route::get('/lahan1', [LahanController::class, 'lahan1'])->name('lahan1');
Route::get('/lahan2', [LahanController::class, 'lahan2'])->name('lahan2');
Route::get('/lahan3', [LahanController::class, 'lahan3'])->name('lahan3');
Route::get('/lahan4', [LahanController::class, 'lahan4'])->name('lahan4');
Route::get('/lahan5', [LahanController::class, 'lahan5'])->name('lahan5');
Route::get('/lahan6', [LahanController::class, 'lahan6'])->name('lahan6');
Route::get('/lahan7', [LahanController::class, 'lahan7'])->name('lahan7');
Route::get('/lahan8', [LahanController::class, 'lahan8'])->name('lahan8');
Route::get('/lahan9', [LahanController::class, 'lahan9'])->name('lahan9');
Route::get('/lahan10', [LahanController::class, 'lahan10'])->name('lahan10');
Route::get('/lahan11', [LahanController::class, 'lahan11'])->name('lahan11');
Route::get('/lahan12', [LahanController::class, 'lahan12'])->name('lahan12');
Route::get('/lahan13', [LahanController::class, 'lahan13'])->name('lahan13');