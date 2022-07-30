<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPembelian extends Model
{
    //use HasFactory;
    public $timestamps = false;
    public $stok = false;
    // public $id = false;
    //public $tanggal_penerimaan = false;

    protected $table='data_pembelians';

    public function detailpembelian()
    {
        return $this->hasMany("App\DetailPembelian", "data_pembelians_id", "id");
    }

    public function produks()
    {
        return $this->belongsToMany(Produk::class, 'detail_pembelians', 'data_pembelians_id', 'produks_id');
    }
}
