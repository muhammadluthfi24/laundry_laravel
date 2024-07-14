<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/jenis',[JenisController::class, 'index']);
Route::post('/jenis/store',[JenisController::class, 'store']);
Route::post('/jenis/update',[JenisController::class, 'update']);
Route::get('/jenis/edit/{id_jenis}',[JenisController::class, 'edit']);


Route::get('/admin',[UserController::class, 'index']);
Route::post('/admin/store',[UserController::class, 'store']);
Route::post('/admin/update',[UserController::class, 'update']);
Route::get('/admin/edit/{id}',[UserController::class, 'edit']);

Route::get('/kasir',[UserController::class, 'index2']);
Route::post('/kasir/store',[UserController::class, 'store2']);
Route::post('/kasir/update',[UserController::class, 'update2']);
Route::get('/kasir/edit/{id}',[UserController::class, 'edit2']);

Route::get('/owner',[UserController::class, 'index3']);
Route::post('/owner/store',[UserController::class, 'store3']);
Route::post('/owner/update',[UserController::class, 'update3']);
Route::get('/owner/edit/{id}',[UserController::class, 'edit3']);


Route::get('/member',[MemberController::class, 'index']);
Route::post('/member/store',[MemberController::class, 'store']);
Route::post('/member/update',[MemberController::class, 'update']);
Route::get('/member/edit/{id_member}',[MemberController::class, 'edit']);

Route::get('/outlet',[OutletController::class, 'index']);
Route::post('/outlet/store',[OutletController::class, 'store']);
Route::post('/outlet/update',[OutletController::class, 'update']);
Route::get('/outlet/edit/{id_outlet}',[OutletController::class, 'edit']);

Route::get('/paket',[PaketController::class, 'index']);
Route::post('/paket/store',[PaketController::class, 'store']);
Route::post('/paket/update',[PaketController::class, 'update']);
Route::get('/paket/edit/{id_paket}',[PaketController::class, 'edit']);

Route::get('/transaksi',[TransaksiController::class, 'index']);
Route::get('/transaksi/tambah',[TransaksiController::class, 'tambah']);
Route::post('/transaksi/store',[TransaksiController::class, 'store']);

Route::get('/transaksi/pakaian1/{id_transaksi}',[TransaksiController::class, 'pakaian1']);
Route::get('/transaksi/pakaian2/{id_transaksi}',[TransaksiController::class, 'pakaian2']);
Route::get('/transaksi/pakaian3/{id_transaksi}',[TransaksiController::class, 'pakaian3']);


Route::get('/transaksi/bayar1/{id_transaksi}',[TransaksiController::class, 'bayar1']);

Route::get('/ambil',[TransaksiController::class, 'ambil']);
Route::get('/ambil2',[TransaksiController::class, 'ambil2']);


Route::post('/masuk/sementara',[TransaksiController::class, 'ambil']);
Route::post('/masuk/semua',[TransaksiController::class, 'storesemua']);
Route::get('/cetak/{id_transaksi}',[TransaksiController::class, 'cetak']);
Route::get('/transaksi/show/{id_transaksi}',[TransaksiController::class, 'show']);
Route::get('/laporan/show/{id_transaksi}',[TransaksiController::class, 'show']);

Route::get('/laporan',[LaporanController::class, 'index']);
Route::post('/laporan_masuk',[LaporanController::class, 'index']);

Route::get('change-password', [ChangePasswordController::class, 'index']);
Route::post('change-password', [ChangePasswordController::class, 'store'])->name('change.password');

Route::get('/laporan/export_excel', [LaporanController::class, 'export_excel']);
Route::get('/laporan/export_pdf', [LaporanController::class, 'export_pdf']);
