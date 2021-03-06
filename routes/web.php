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
use App\Http\Controllers\CheckoutController;

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

Route::resource('checkout','CheckoutController');

Route::resource('pelanggan','UserController');



// START LAYANAN //
Route::resource('layanan','LayananController');

Route::get('/pasfoto', function () {
    return view('layanan.pasfoto'); 
})->name('layanan.pasfoto');

Route::get('/cetakstandard', function () {
    return view('layanan.cetakstandard'); 
})->name('layanan.cetakstandard');

Route::get('/cetak10R', function () {
    return view('layanan.cetak10R'); 
})->name('layanan.cetak10R');

Route::get('/cetak12R', function () {
    return view('layanan.cetak12R'); 
})->name('layanan.cetak12R');

Route::get('/cetak16R', function () {
    return view('layanan.cetak16R'); 
})->name('layanan.cetak16R');

Route::get('/cetak20R', function () {
    return view('layanan.cetak20R'); 
})->name('layanan.cetak20R');

Route::get('/cetak24R', function () {
    return view('layanan.cetak24R'); 
})->name('layanan.cetak24R');
// START LAYANAN //



// START SEWA ALAT //
Route::resource('penyewaanalat','PenyewaanAlatController');

Route::get('/backdrop', function () {
    return view('penyewaanalat.backdrop'); 
})->name('penyewaanalat.backdrop');

Route::get('/kameradslr', function () {
    return view('penyewaanalat.kameradslr'); 
})->name('penyewaanalat.kameradslr');

Route::get('/kamerapocket', function () {
    return view('penyewaanalat.kamerapocket'); 
})->name('penyewaanalat.kamerapocket');

Route::get('/backdrop', function () {
    return view('penyewaanalat.backdrop'); 
})->name('penyewaanalat.backdrop');

Route::get('/flash', function () {
    return view('penyewaanalat.flash'); 
})->name('penyewaanalat.flash');

Route::get('/softbox', function () {
    return view('penyewaanalat.softbox'); 
})->name('penyewaanalat.softbox');

Route::get('/reflektor', function () {
    return view('penyewaanalat.reflektor'); 
})->name('penyewaanalat.reflektor');

Route::get('/light', function () {
    return view('penyewaanalat.light'); 
})->name('penyewaanalat.light');

Route::get('/tripod', function () {
    return view('penyewaanalat.tripod'); 
})->name('penyewaanalat.tripod');
// END PAKET SEWA ALAT //



// START PRODUK //
Route::resource('produk','ProdukController');

Route::get('/bingkai4R', function () {
    return view('produk.bingkai4R'); 
})->name('produk.bingkai4R');

Route::get('/bingkai5R', function () {
    return view('produk.bingkai5R'); 
})->name('produk.bingkai5R');

Route::get('/bingkai6R', function () {
    return view('produk.bingkai6R'); 
})->name('produk.bingkai6R');

Route::get('/bingkai10R', function () {
    return view('produk.bingkai10R'); 
})->name('produk.bingkai10R');

Route::get('/bingkai12R', function () {
    return view('produk.bingkai12R'); 
})->name('produk.bingkai12R');

Route::get('/bingkai16R', function () {
    return view('produk.bingkai16R'); 
})->name('produk.bingkai16R');

Route::get('/bingkai20R', function () {
    return view('produk.bingkai20R'); 
})->name('produk.bingkai20R');

Route::get('/bingkai24R', function () {
    return view('produk.bingkai24R'); 
})->name('produk.bingkai24R');

Route::get('/albumfoto', function () {
    return view('produk.albumfoto'); 
})->name('produk.albumfoto');
// END PRODUK //



// START PAKET //
Route::resource('paket','PaketController');

Route::get('/babykidssingle', function () {
    return view('paket.babykidssingle'); 
})->name('paket.babykidssingle');

Route::get('/babykidsdouble', function () {
    return view('paket.babykidsdouble'); 
})->name('paket.babykidsdouble');

Route::get('/familypaket1', function () {
    return view('paket.familypaket1'); 
})->name('paket.familypaket1');

Route::get('/familypaket2', function () {
    return view('paket.familypaket2'); 
})->name('paket.familypaket2');

Route::get('/graduationsingle', function () {
    return view('paket.graduationsingle'); 
})->name('paket.graduationsingle');

Route::get('/graduationdouble', function () {
    return view('paket.graduationdouble'); 
})->name('paket.graduationdouble');

Route::get('/birthdaypaket1', function () {
    return view('paket.birthdaypaket1'); 
})->name('paket.birthdaypaket1');

Route::get('/birthdaypaket2', function () {
    return view('paket.birthdaypaket2'); 
})->name('paket.birthdaypaket2');

Route::get('/weddingpaket1', function () {
    return view('paket.weddingpaket1'); 
})->name('paket.weddingpaket1');

Route::get('/weddingpaket2', function () {
    return view('paket.weddingpaket2'); 
})->name('paket.weddingpaket2');

Route::get('/studentpaket1', function () {
    return view('paket.studentpaket1'); 
})->name('paket.studentpaket1');

Route::get('/studentpaket2', function () {
    return view('paket.studentpaket2'); 
})->name('paket.studentpaket2');

Route::get('/alumnipaket1', function () {
    return view('paket.alumnipaket1'); 
})->name('paket.alumnipaket1');

Route::get('/alumnipaket2', function () {
    return view('paket.alumnipaket2'); 
})->name('paket.alumnipaket2');

Route::get('/constructionpaket1', function () {
    return view('paket.constructionpaket1'); 
})->name('paket.constructionpaket1');

Route::get('/constructionpaket2', function () {
    return view('paket.constructionpaket2'); 
})->name('paket.constructionpaket2');

Route::get('/productpaket1', function () {
    return view('paket.productpaket1'); 
})->name('paket.productpaket1');

Route::get('/productpaket2', function () {
    return view('paket.productpaket2'); 
})->name('paket.productpaket2');
// END PAKET //


Route::resource('datafotografer', 'DataFotograferController');
Route::post('/datafotografer/createForm','DataFotograferController@createForm')->name('datafotografer.create');
Route::post('/datafotografer/editForm','DataFotograferController@editForm')->name('datafotografer.editForm');
Route::post('/datafotografer/deleteData','DataFotograferController@deleteData')->name('datafotografer.deleteData');
Route::post('/datafotografer/saveData','DataFotograferController@saveData')->name('datafotografer.saveData');

Route::resource('/jadwalfotografer','JadwalFotograferController');
Route::post('/jadwalfotografer/createForm','JadwalFotograferController@createForm')->name('jadwalfotografer.create');
Route::post('/jadwalfotografer/editForm','JadwalFotograferController@editForm')->name('jadwalfotografer.editForm');
Route::post('/jadwalfotografer/deleteData','JadwalFotograferController@deleteData')->name('jadwalfotografer.deleteData');
Route::post('/jadwalfotografer/saveData','JadwalFotograferController@saveData')->name('jadwalfotografer.saveData');

Route::resource('/datapemesanan','PemesananController');

Route::resource('/detailpemesanan','DetailPemesananController');
Route::post('/detailpemesanan/editForm','DetailPemesananController@editForm')->name('detailpemesanan.editForm');
Route::post('/detailpemesanan/edit','DetailPemesananController@edit')->name('detailpemesanan.edit');
Route::post('/detailpemesesanan/saveData','DetailpemesananController@saveData')->name('detailpemesanan.saveData');

Route::resource('/datapembelian','DataPembelianController');
Route::post('/datapemebelian/createForm','DataPembelianController@createForm')->name('datapembelian.create');
Route::post('/datapemebelian/edit','DataPembelianController@edit')->name('datapembelian.edit');
Route::post('/datapemebelian/editForm','DataPembelianController@editForm')->name('datapembelian.editForm');
Route::post('/datapemebelian/deleteData','DataPembelianController@deleteData')->name('datapembelian.deleteData');

Route::resource('/detailpembelian','DetailPembelianController',['except' => ['update','destroy']]);
Route::post('/detailpembelian/edit/{id}','DetailPembelianController@update')->name('detailpembelian.edit');
Route::post('/detailpembelian/destroy','DetailPembelianController@destroy')->name('detailpembelian.destroy');
Route::get('/detailpembelian/getDetail/{id}','DetailPembelianController@getDetailPembelian')->name('detailpembelian.getDetail');

Route::post('/datapembelian/saveData','DatapembelianController@saveData')->name('datapembelian.saveData');
Route::post('/datapembelian/showDetail','DataPembelianController@showDetail')->name('datapembelian.showDetail');

// Route::get('showDetail/{id}','DataPembelianController@showDetail')->name('datapembelian.showDetail');

// Route::get('datapembelian/{datapembelian}', 'DataPembelianController@showDetail')->name('datapembelian.showDetail');

Route::get('/showDetail', function () {
    return view('datapembelian.showDetail'); 
})->name('datapembelian.showDetail');

Route::get('/get-list-produk','ProdukController@getListProduk') ->name('get.list.produk');


//Cart Paket
// Route::get('/', 'PaketController@front_index');
// Route::get('cart', 'PaketController@cart');
// Route::get('add-to-cart/{id}', 'PaketController@addToCart');

//Cart Penyewaan Alat
// Route::get('/', 'PenyewaanAlatController@front_index');
// Route::get('cart', 'PenyewaanAlatController@cart');
// Route::get('add-to-cart/{id}', 'PenyewaanAlatController@addToCart');

//Cart Produk
Route::get('/', 'ProdukController@front_index');
Route::get('cart', 'ProdukController@cart');
Route::get('add-to-cart/{id}', 'ProdukController@addToCart');

Route::post('/', [\App\Http\Controllers\ProdukController::class, 'cart'])->name(name:'frontend.cart');

//Cart Layanan
// Route::get('/', 'LayananController@front_index');
// Route::get('cart', 'LayananController@cart');
// Route::get('add-to-cart/{id}', 'LayananController@addToCart');

// Route::get('submit_checkout','CheckoutController@submit_front')->name('submitCheckout');


