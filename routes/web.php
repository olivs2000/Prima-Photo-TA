<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalFotograferController;
use App\Http\Controllers\DataFotograferController;
use App\Http\Controllers\DataPemesananController;
use App\Http\Controllers\DetailPemesananController;
use App\Http\Controllers\DataPembelianController;
use App\Http\Controllers\DetailPembelianController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PenyewaanAlatController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LayananController;

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


Route::view('/', 'auth/login');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('datafotografer', 'DataFotograferController');
Route::post('/datafotografer/createForm','DataFotograferController@createForm')->name('datafotografer.create');
Route::post('/datafotografer/editForm','DataFotograferController@editForm')->name('datafotografer.editForm');
Route::post('/datafotografer/deleteData','DataFotograferController@deleteData')->name('datafotografer.deleteData');
Route::post('/datafotografer/saveData','DataFotograferController@saveData')->name('datafotografer.saveData');

Route::resource('/jadwalfotografer','JadwalFotograferController');
Route::post('/jadwalfotografer/createForm','JadwalFotograferController@createForm')->name('jadwalfotografer.create');
Route::post('/jadwalfotografer/editForm','JadwalFotograferController@editForm')->name('jadwalfotografer.editForm');
Route::post('/jadwalfotografer/deleteData','JadwalFotograferController@deleteData')->name('jadwalfotografer.deleteData');
Route::post('/jadwalfotografer/saveData','JataFotograferController@saveData')->name('jadwalfotografer.saveData');

Route::resource('/datapemesanan','PemesananController');

Route::resource('/detailpemesanan','DetailPemesananController');
Route::post('/detailpemesanan/editForm','DetailPemesananController@editForm')->name('detailpemesanan.editForm');
Route::post('/detailpemesanan/deleteData','detailpemesananController@deleteData')->name('detailpemesanan.deleteData');
Route::post('/detailpemesesanan/saveData','DetailpemesananController@saveData')->name('detailpemesanan.saveData');

Route::resource('/datapembelian','DataPembelianController');
Route::post('/datapemebelian/createForm','DataPembelianController@createForm')->name('datapembelian.create');
Route::post('/datapemebelian/editForm','DataPembelianController@editForm')->name('datapembelian.editForm');
Route::post('/datapemebelian/deleteData','DataPembelianController@deleteData')->name('datapembelian.deleteData');
Route::post('/datapembelian/saveData','DatapembelianController@saveData')->name('datapembelian.saveData');
Route::post('/datapembelian/showDetailPembelian','DataPembelianController@showDetailPembelian')->name('datapembelian.showDetailPembelian');

Route::get('/showDetailPembelian','DataPembelianController@showDetailPembelian');
Route::post('/showDetailPembelian','DataPembelianController@showDetailPembelian');
Route::resource('/showDetailPembelian','DataPembelianController@showDetailPembelian');