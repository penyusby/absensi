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
    return view('index');
});
Route::get('tampilan', function () {
    return view('tampilan');
});
Route::get('addjamkerja', function () {
    return view('addjamkerja');
});
Route::get('setting', function () {
    return view('setting');
});
Route::get('noshift', function () {
    return view('noshift');
});
Route::get('pegawai', function () {
    return view('pegawai');
});
Route::get('addpegawai', function () {
    return view('addpegawai');
});
Route::get('absensi', function () {
    return view('absensi');
});
Route::get('addabsensi', function () {
    return view('addabsensi');
});
