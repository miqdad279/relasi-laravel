<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('relasi-1', function () {
    $mahasiswa = App\Models\Mahasiswa::where('nim', '=', 'D015015072')->first();
    return $mahasiswa->wali->nama;
});

Route::get('relasi-2', function () {
    $mahasiswa = App\Models\Mahasiswa::where('nim', '=', 'D015015072')->first();
    return $mahasiswa->dosen->nama;
});

Route::get('relasi-3', function () {
    $dosen = App\Models\Dosen::where('nama', '=', 'Eko')->first();

    foreach ($dosen->mahasiswa as $temp) {
        echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';
    }
});
