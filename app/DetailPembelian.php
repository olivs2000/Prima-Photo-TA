<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPembelian extends Model
{
    //use HasFactory;

    protected $table='detail_pembelians';
    protected $fillable = ['data_pembelians_id', 'produks_id', 'jumlah', 'harga','total'];

    public $timestamps = false;

    // public function datapembelian()
    // {
    //     return $this->belongsTo('App\DataPembelian', 'data_pembelians_id');
    // }

    // public function produk()
    // {
    //     return $this->belongsTo('App\Produk', 'produks_id');
    // }

    public function produk()
    {
        return $this->belongsToMany('App\Produk', 'detail_pembelians', 'detail_Pembelians_id', 
        'produks_id' )->withPivot('jumlah','harga', 'total');
    }

    public function datapembelian()
    {
        return $this->belongsToMany('App\DataPembelian', 'detail_pembelians', 'detail_Pembelians_id', 
        'data_pembelians_id' )->withPivot('jumlah','harga', 'total');
    }

}
