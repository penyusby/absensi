<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllers;
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
// Route::get('pegawai', function () {
//     return view('pegawai');
// });
// Route::get('addpegawai', function () {
//     return view('addpegawai');
// });
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/addpegawai', [PegawaiController::class, 'create']);
Route::post('/addpegawai', [PegawaiController::class, 'store']);
Route::get('/editpegawai/{id}', [PegawaiController::class, 'edit']);
Route::post('/update/{id}', [PegawaiController::class, 'update']);

Route::get('absensi', function () {
    return view('absensi');
});
Route::get('addabsensi', function () {
    return view('addabsensi');
});
