<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    //use HasFactory;

    public $timestamps = false;

    // public function user()
    // {
    //     return this->belongsTo('App\Model\User', 'user_id');
    // }

    // public function admin()
    // {
    //     return this->belongsTo('App\Model\Admin', 'admin_studios_id');
    // }

    public function pemesanan()
    {
        return this->belongsToMany('App\Pemesanan', 'pemesanans_id');
    }

    public function produk()
    {
        return this->belongsToMany('App\Produk', 'produks_id')->withPivot('harga');
    }

    public function layanan()
    {
        return this->belongsToMany('App\Layanan', 'layanans_id')->withPivot('harga');
    }

    public function paket()
    {
        return this->belongsToMany('App\Paket', 'pakets_id')->withPivot('harga');
    }

    public function penyewaanalat()
    {
        return this->belongsToMany('App\PenyewaanAlat', 'penyewaan_alats_id')->withPivot('harga');
    }
}
