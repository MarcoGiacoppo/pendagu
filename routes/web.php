<?php

use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\KaryawanController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Dashboard Page 
Route::get('/', function () {
    return view('/Pendagu/Dashboard',[
        'users' => User::all()->where('level', 'karyawan')->count(),
        // 'users' => User::count(),
    ]);
});
// Login Page 
Route::get('/login', function () {
    return view('/Pendagu/Systems/login');
});

// Karyawan Page
Route::resource('/Karyawan', KaryawanController::class);

// Barang Masuk Page
Route::resource('/Barang-masuk', BarangMasukController::class);

// Barang Keluar Page
Route::resource('/Barang-keluar', BarangKeluarController::class);

// Setting Page
Route::get('/Settings', function () {
    return view('/Pendagu/Systems/Setting_Page/index');
});