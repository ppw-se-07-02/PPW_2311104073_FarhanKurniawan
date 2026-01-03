<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// 1.1 Membuat 5 Route Tanpa Parameter
Route::get('/home', function () {
    return "Halaman Home";
});

Route::get('/about', function () {
    return "Halaman About";
});

Route::get('/contact', function () {
    return "Halaman Contact";
});

Route::get('/profile', function () {
    return "Halaman Profile";
});

Route::get('/help', function () {
    return "Halaman Help";
});



// 1.2. Membuat 3 Route Dengan Parameter
Route::get('/user/{nama}', function ($nama) {
    return "Nama User: $nama";
});

Route::get('/produk/{id}', function ($id) {
    return "Produk dengan ID: $id";
});

Route::get('/kelas/{nama}', function ($nama) {
    return "Kelas: $nama";
});



//1.3 Membuat 3 Route Dengan Optional Parameter
Route::get('/kendaraan/{jenis?}', function ($jenis = "Motor") {
    return "Jenis Kendaraan: $jenis";
});

Route::get('/buku/{judul?}/{penulis?}', function ($judul = "Laravel", $penulis = "Anonim") {
    return "Judul: $judul, Penulis: $penulis";
});

Route::get('/nilai/{angka?}', function ($angka = 0) {
    return "Nilai: $angka";
});


Route::get('/asset', function () {
    return view('asset');
});


Route::get('/mahasiswa', function () {
    $nilai = [80,64,30,76,95];
    return view('mahasiswa', ['nilai' => $nilai]);
});

Route::get('/', [PageController::class, 'index']);
Route::get('/mhs', [PageController::class, 'mahasiswa']);




