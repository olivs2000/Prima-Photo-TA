<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPembelian extends Model
{
    //use HasFactory;

    protected $table='detail_pembelians';
    public $timestamps = false;

    // public function datapembelian()
    // {
    //     return $this->belongsTo('App\MDetailPembelian', 'detail_pembelians_id');
    // }

    // public function produk()
    // {
    //     return $this->belongsTo('App\Produk', 'produks_id');
    // }

    public function produk()
    {
        return $this->belongsToMany('App\Produk', 'detail_pembelians', 'dataPembelians_id', 
        'produks_id' )->withPivot('jumlah', 'harga');
    }

}
