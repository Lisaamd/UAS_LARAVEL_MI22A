<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;



Route::get('/login', [LoginController::class, 'halamanLogin']);
Route::post('/login', [LoginController::class, 'prosesLogin']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/ganti-password', [LoginController::class, 'halamanGantiPassword']);
Route::post('/ganti-password', [LoginController::class, 'prosesGantiPassword']);


Route::get('/login', [LoginController::class, 'halamanLogin']);
Route::post('/login', [LoginController::class, 'prosesLogin']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/ganti-password', [LoginController::class, 'halamanGantiPassword']);
Route::post('/ganti-password', [LoginController::class, 'prosesGantiPassword']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/katalog/detail', function () {
    return view('detail-katalog');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/login',         [LoginController::class, 'halamanLogin'])->name('login');
Route::post('/proses-login', [LoginController::class, 'prosesLogin']);
Route::get('/logout',        [LoginController::class, 'logout'])->middleware('auth');


Route::get('/ganti-password', [LoginController::class, 'halamanGantiPassword'])->middleware('auth');
Route::post('/proses-ganti-password', [LoginController::class, 'prosesGantiPassword'])->middleware('auth');

Route::get('/daftar', [DaftarController::class, 'halamanDaftar']);
Route::post('/proses-daftar', [DaftarController::class, 'prosesDaftar']);

Route::get('/users', [UserController::class, 'halamanDaftarUser'])->middleware('auth');

Route::get('/produk', [ProdukController::class, 'index'])->middleware('auth');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/produk/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');

Route::resource('kategori', KategoriController::class);
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/user', [UserController::class, 'index']);