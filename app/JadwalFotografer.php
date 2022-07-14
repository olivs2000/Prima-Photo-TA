<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalFotografer extends Model
{
    //use HasFactory;
    public $timestamps = false;

    protected $table='jadwal_fotografers';

    public function admin()
    {
        return $this->belongsTo('App\Admin', 'admin_studios_id');
    }

    public function datafotografer()
    {
        return $this->belongsTo('App\DataFotografer', 'data_fotografers_id');
    }

    public function detailpemesanan()
    {
        return $this->belongsTo('App\DetailPemesanan', 'detail_pemesanans_id');
    }

}
