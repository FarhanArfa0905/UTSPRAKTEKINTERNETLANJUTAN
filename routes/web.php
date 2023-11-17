<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('about', function () {
    return view('about');
});

Route::get('tugas4', function () {
    return view('tugas4');
});

Route::get('belajar', function () {
    return view('belajar');
});

Route::get('tabel', function () {
    return view('tabel');
});

route::get('tabel', function () {
    $npm = [123, 124, 125];
    $jumlah = count($npm);

    return view('tabel', compact('npm', 'jumlah'));
});

Route::get('utshome', function () {
    return view('utshome');
});

route::get('utsproduk', function () {
    $kode = ['BRG001', 'BRG002'];
    $nama = ['pena', 'buku'];
    $jenis = ['Alat Tulis', 'Alat Tulis'];
    $harga = [2000, 1500];
    $total = count($kode);
    return view('utsproduk', compact('kode', 'nama', 'jenis', 'harga', 'total'));
});

route::get('utssimpan', function () {
    $namap = ['Pilih Produk', 'Alat Tulis', 'elektronik', 'Sembako'];
    $jumlah = count($namap);

    return view('utssimpan', compact('namap', 'jumlah'));
});