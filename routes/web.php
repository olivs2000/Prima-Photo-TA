<?php

use Illuminate\Auth\Event\Login;
use App\Http\Controllers\MailController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\JadwalFotograferController;
use App\Http\Controllers\DataFotograferController;
use App\Http\Controllers\DataPemesananController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\DetailPemesananController;
use App\Http\Controllers\DataPembelianController;
use App\Http\Controllers\DetailPembelianController;
use App\Http\Controllers\DataPelangganController;
use App\Http\Controllers\AdminStudioController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PaketAdminController;
use App\Http\Controllers\PenyewaanAlatController;
use App\Http\Controllers\PenyewaanAlatAdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProdukAdminController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LayananAdminController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\KonfirmasiColController;
use App\Http\Controllers\CollaborateController;
use App\Http\Controllers\CollaborateAdminController;
use App\Http\Controllers\RiwayatPemesananController;
use App\Http\Controllers\DetailPemesananPelangganController;
use App\Http\Controllers\AlatFotografiController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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



Route::get('/checkStorage', function(){
    dd(public_path('storage'));
});

Route::post('/saveDropzone', 'PaketAdminController@upload')->name('dropzone.upload');

Route::middleware(['auth'])->group(function () {
    
    Route::get('email', [EmailController::class,'kirim']);
    Route::get('attach', [EmailController::class,'attach']);
    Route::get('pesan', [EmailController::class,'notif']);

    Route::resource('uploadbuktitf','UploadController');
    Route::get('uploadbuktitf/{pemesanan_id}','UploadController@index')->name('uploadbuktitf.index');

    Route::resource('checkout','CheckoutController');
    Route::post('checkout/store','CheckoutController@store')->name('checkout.store');

    Route::get('konfirmasi/{pemesanan_id}','KonfirmasiController@index')->name('konfirmasi.index');
    Route::resource('konfirmasi','KonfirmasiController',['except' => ['index']]);

    Route::resource('konfirmasicol','KonfirmasicolController');

    Route::resource('collaborate','CollaborateController');

    Route::resource('collaborateadmin','CollaborateAdminController');
    Route::post('/collaborateadmin/deleteData','CollaborateAdminController@deleteData')->name('collaborateadmin.deleteData');
    Route::post('collaborateadmin/editcol','CollaborateAdminController@editcol')->name('collaborateadmin.editcol');
    Route::post('/collaborateadmin/saveData','CollaborateAdminController@saveData')->name('collaborateadmin.saveData');

    Route::resource('pelanggan','UserController');

    Route::get('riwayatpemesanan/{pemesanan_id}','RiwayatPemesananController@index')->name('riwayatpemesanan.index');
    Route::resource('riwayatpemesanan','RiwayatPemesananController',['except' => ['index']]);


    Route::resource('/detailpemesananpelanggan','DetailPemesananPelangganController');


    // START LAYANAN //
    Route::resource('layanan','LayananController');

    Route::resource('layananadmin','LayananAdminController');

    Route::post('/delete-gambar','LayananAdminController@deleteDetailGambar')->name('delete.gambar');

    Route::post('/storepaket','LayananAdminController@saveData')->name('layananadmin.saveData');

    Route::get('layananadmin/delete','LayananAdminController@delete')->name('layananadmin.delete');

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
    // END LAYANAN //



    // START SEWA ALAT //
    Route::resource('penyewaanalat','PenyewaanAlatController');

    Route::resource('penyewaanalatadmin','PenyewaanAlatAdminController');

    Route::post('/delete-gambar','PenyewaanAlatAdminController@deleteDetailGambar')->name('delete.gambar');

    Route::post('/storepaket','PenyewaanAlatAdminController@saveData')->name('penyewaanalatadmin.saveData');

    Route::get('penyewaanalatadmin/delete','PenyewaanAlatAdminController@delete')->name('penyewaanalatadmin.delete');

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
    // END SEWA ALAT //



    // START PRODUK //
    Route::resource('produk','ProdukController');

    Route::resource('produkadmin','ProdukAdminController');

    Route::post('/delete-gambar','ProdukAdminController@deleteDetailGambar')->name('delete.gambar');

    Route::post('/storepaket','ProdukAdminController@saveData')->name('produkadmin.saveData');

    Route::get('produkadmin/delete','ProdukAdminController@delete')->name('produkadmin.delete');

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

    Route::resource('paketadmin','PaketAdminController');

    Route::post('/delete-gambar','PaketAdminController@deleteDetailGambar')->name('delete.gambar');

    Route::post('/storepaket','PaketAdminController@saveData')->name('paketadmin.saveData');

    Route::get('paketadmin/delete','PaketAdminController@delete')->name('paketadmin.delete');

    Route::get('/detailpaket', function () {
        return view('paket.detailpaket'); 
    })->name('paket.detailpaket');

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
    Route::post('/datapemesanan/editForm','PemesananController@editForm')->name('datapemesanan.editForm');
    Route::post('/datapemesanan/saveData','PemesananController@saveData')->name('datapemesanan.saveData');

    Route::resource('/datapemesanan','DataPemesananController');
    Route::post('/datapemesanan/editForm','DataPemesananController@editForm')->name('datapemesanan.editForm');
    Route::post('/datapemesanan/saveData','DataPemesananController@saveData')->name('datapemesanan.saveData');

    Route::resource('/dataadmin','AdminStudioController');
    Route::post('/delete-admin','AdminStudioController@deleteAdmin')->name('delete.admin');
    Route::post('/delete-gambar','PaketAdminController@deleteDetailGambar')->name('delete.gambar');
    Route::delete('/delete-admin', [AdminStudioController::class, 'delete'])->name('delete.admin');

    Route::resource('/datapelanggan','DataPelangganController');

    Route::resource('alatfotografi', 'AlatFotografiController');
    Route::post('/alatfotografi/edit','AlatFotografiController@edit')->name('alatfotografi.edit');
    Route::post('/alatfotografi/create','AlatFotografiController@create')->name('alatfotografi.create');

    Route::resource('/detailpemesanan','DetailPemesananController');
    Route::post('/detailpemesanan/editForm','DetailPemesananController@editForm')->name('detailpemesanan.editForm');
    Route::post('/detailpemesanan/edit','DetailPemesananController@edit')->name('detailpemesanan.edit');
    Route::post('/detailpemesesanan/saveData','DetailpemesananController@saveData')->name('detailpemesanan.saveData');

    Route::resource('/datapembelian','DataPembelianController');
    Route::resource('/datapembelian','DataPembelianController',['except' => ['store','update','destroy']]);
    Route::post('/datapemebelian/create','DataPembelianController@create')->name('datapembelian.create');
    Route::post('/datapemebelian/edit','DataPembelianController@edit')->name('datapembelian.edit');
    Route::post('/datapemebelian/editForm','DataPembelianController@editForm')->name('datapembelian.editForm');
    Route::post('/datapemebelian/deleteData','DataPembelianController@deleteData')->name('datapembelian.deleteData');
    Route::post('/datapembelian/saveData','DatapembelianController@saveData')->name('datapembelian.saveData');

    Route::resource('/detailpembelian','DetailPembelianController');
    Route::resource('/detailpembelian','DetailPembelianController',['except' => ['store','update','destroy']]);
    Route::post('/detailpembelian/create','DetailPembelianController@store')->name('detailpembelian.store');
    Route::post('/detailpembelian/update','DetailPembelianController@update')->name('detailpembelian.update');
    Route::post('/detailpembelian/edit/{id}','DetailPembelianController@update')->name('detailpembelian.edit');
    Route::post('/detailpembelian/destroy','DetailPembelianController@destroy')->name('detailpembelian.destroy');
    Route::get('/detailpembelian/getDetail/{id}','DetailPembelianController@getDetailPembelian')->name('detailpembelian.getDetail');

    Route::post('/detailpembelian/create','DetailPembelianController@add')->name('detailpembelian.add');

    Route::get('/get-list-produk','ProdukController@getListProduk') ->name('get.list.produk');
    Route::get('/get-list-produk2','ProdukController@getListProduk2') ->name('get.list.produk2');

    //Dropzone
    Route::post('paketadmin/create', [PaketAdminController::class, 'store'])->name('paketadmin.store');
    Route::post('paketadmin/create', 'PaketAdmin@store')->name('paketadmin.store');
    Route::post('paketadmin/destroy', 'PaketAdmin@destroy')->name('paketadmin.destroy');

    //Cart Paket
    Route::get('paket', 'PaketController@front_index');
    Route::get('cart', 'PaketController@cart');
    Route::get('add-to-cart-paket/{id}', 'PaketController@addToCart');

    //Cart Penyewaan Alat
    Route::get('/', 'PenyewaanAlatController@front_index');
    Route::get('cart', 'PenyewaanAlatController@cart');
    Route::get('add-to-cart-penyewaanalat/{id}', 'PenyewaanAlatController@addToCart');

    //Cart Produk
    Route::get('/', 'ProdukController@front_index');
    Route::get('cart', 'ProdukController@cart');
    Route::get('add-to-cart-produk/{id}', 'ProdukController@addToCart');

    //Cart Layanan
    Route::get('/', 'LayananController@front_index');
    Route::get('cart', 'LayananController@cart');
    Route::get('add-to-cart-layanan/{id}', 'LayananController@addToCart');

    Route::get('submit_checkout','CheckoutController@submit_front')->name('submitCheckout');

    Route::get('create-directory', function () {
        Storage::disk('public')->makeDirectory('storage');
    });

    Route::resource('/DETAILPEMESANANTEMP','DetailPemesananPelangganController');

});
