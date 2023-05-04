<?php

use App\Http\Controllers\DinamisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\PulsaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\TransaksiController;
use App\Models\Pembayaran;

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
    return view ('welcome');
});


Route::get('home',[PortoController::class,'index']);


Route::get('web/beranda',[DinamisController::class,'beranda']);
Route::get('web/profil',[DinamisController::class,'profil']);
Route::get('web/kontak',[DinamisController::class,'kontak']);

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/postlogin',[AuthController::class,'postlogin']);

Route::get('/logout',[AuthController::class,'logout']);

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/postregister',[AuthController::class,'postregister']);

Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');

//Report PDF
Route::get('/downloadpdf',[PembayaranController::class,'downloadpdf']);
Route::get('/pembayaranpdf',function(){
    $pembayaran = Pembayaran::with('pelanggan','kasir','pulsa')->get();
    return view('admin.pembayaran.export', compact('pembayaran'));
});
//cetak struk
Route::get('pembayaran/{pembayaran}/cetakstruk',[PembayaranController::class,'cetakstruk']);

Route::get('/pelanggan',[PelangganController::class,'index']);
Route::get('/pelanggan/create',[PelangganController::class,'create']);
Route::post('/pelanggan/store',[PelangganController::class,'store']);
Route::get('/pelanggan/{id}/edit',[PelangganController::class,'edit']);
Route::post('/pelanggan/{id}/update',[PelangganController::class,'update']);
Route::get('/pelanggan/{id}/delete',[PelangganController::class,'destroy']);
Route::get('/pelanggan/search',[PelangganController::class,'search']);


Route::get('/kasir',[KasirController::class,'index']);
Route::get('/kasir/create',[KasirController::class,'create']);
Route::post('/kasir/store',[KasirController::class,'store']);
Route::get('/kasir/{id}/edit',[KasirController::class,'edit']);
Route::post('/kasir/{id}/update',[KasirController::class,'update']);
Route::get('/kasir/{id}/delete',[KasirController::class,'destroy']);
Route::get('/kasir/search',[KasirController::class,'search']);


Route::get('/pulsa',[PulsaController::class,'index']);
Route::get('/pulsa/create',[PulsaController::class,'create']);
Route::post('/pulsa/store',[PulsaController::class,'store']);
Route::get('/pulsa/{id}/edit',[PulsaController::class,'edit']);
Route::post('/pulsa/{id}/update',[PulsaController::class,'update']);
Route::get('/pulsa/{id}/delete',[PulsaController::class,'destroy']);
Route::get('/pulsa/search',[PulsaController::class,'search']);


Route::get('/pembayaran',[PembayaranController::class,'index']);
Route::get('/pembayaran/create',[PembayaranController::class,'create']);
Route::post('/pembayaran/store',[PembayaranController::class,'store']);
Route::get('/pembayaran/{id}/edit',[PembayaranController::class,'edit']);
Route::post('/pembayaran/{id}/update',[PembayaranController::class,'update']);
Route::get('/pembayaran/{id}/delete',[PembayaranController::class,'destroy']);
Route::get('/pembayaran/search',[PembayaranController::class,'search']);

