<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPemesanan extends Model
{
    //use HasFactory;

    public $timestamps = false;

    protected $table='detail_pemesanans';

    public function pemesanan()
    {
        return $this->belongsTo('App\Pemesanan', 'pemesanans_id');
    }

    public function penyewaanalat()
    {
        return $this->belongsTo('App\PenyewaanAlat', 'penyewaan_alats_id');
    }

    public function produk()
    {
        return $this->belongsTo('App\Produk', 'produks_id');
    }

    public function layanan()
    {
        return $this->hasMany("App\Layanan", "layanans_id", "id");
    }

    public function paket()
    {
        return $this->hasMany("App\Paket", "pakets_id", "id");
    }
}
