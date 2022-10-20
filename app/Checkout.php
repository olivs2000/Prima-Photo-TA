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

    public function pemesanans()
    {
        return $this->belongsToMany('App\Pemesanan
        ', 'detail_pemesanan', 'pakets_id', 'produks_id', 'layanans_id', 'penyewaan_alats_id',
                                    'pemesanans_id', 'tanggal_pemesanan', 'waktu_pembayaran', 'total')->withPivot('jumlah', 'harga');
    }

    public function produk()
    {
        return this->belongsToMany('App\Produk', 'produks_id')->withPivot('harga');
    }

    public function produks()
    {
        return $this->belongsToMany('App\Produk', 'detail_pemesanan', 'pakets_id', 'produks_id', 'layanans_id', 'penyewaan_alats_id',
                                    'pemesanans_id', 'tanggal_pemesanan', 'waktu_pembayaran', 'total')->withPivot('jumlah', 'harga');
    }

    public function layanan()
    {
        return this->belongsToMany('App\Layanan', 'layanans_id')->withPivot('harga');
    }

    public function layanans()
    {
        return $this->belongsToMany('App\Layanan', 'detail_pemesanan', 'pakets_id', 'produks_id', 'layanans_id', 'penyewaan_alats_id',
                                    'pemesanans_id', 'tanggal_pemesanan', 'waktu_pembayaran', 'total')->withPivot('jumlah', 'harga');
    }

    public function paket()
    {
        return this->belongsToMany('App\Paket', 'pakets_id')->withPivot('harga');
    }

    public function pakets()
    {
        return $this->belongsToMany('App\Paket', 'detail_pemesanan', 'pakets_id', 'produks_id', 'layanans_id', 'penyewaan_alats_id',
                                    'pemesanans_id', 'tanggal_pemesanan', 'waktu_pembayaran', 'total')->withPivot('jumlah', 'harga');
    }

    public function penyewaanalat()
    {
        return this->belongsToMany('App\PenyewaanAlat', 'penyewaan_alats_id')->withPivot('harga');
    }

    public function penyewaan_alats()
    {
        return $this->belongsToMany('App\PenyewaanAlat', 'detail_pemesanan', 'pakets_id', 'produks_id', 'layanans_id', 'penyewaan_alats_id',
                                    'pemesanans_id', 'tanggal_pemesanan', 'waktu_pembayaran', 'total')->withPivot('jumlah', 'harga');
    }

    public function insertProduks($cart)
    {
        foreach($cart as $id => $detail)
        {
            $this->produks()->attach($id,[ 'jumlah'=>$detail['jumlah'],'harga'=>$detail['harga'] ]);
        }
    }

    public function insertPakets($cart)
    {
        foreach($cart as $id => $detail)
        {
            $this->pakets()->attach($id,[ 'jumlah'=>$detail['jumlah'],'harga'=>$detail['harga'] ]);
        }
    }

    public function insertLayanans($cart)
    {
        foreach($cart as $id => $detail)
        {
            $this->layanans()->attach($id,[ 'jumlah'=>$detail['jumlah'],'harga'=>$detail['harga'] ]);
        }
    }

    public function insertPenyewaanAlats($cart)
    {
        foreach($cart as $id => $detail)
        {
            $this->penyewaanalats()->attach($id,[ 'jumlah'=>$detail['jumlah'],'harga'=>$detail['harga'] ]);
        }
    }
}
