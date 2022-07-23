<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    //use HasFactory;

    protected $table='pakets';

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategoris_id');
    }

    public function detailpemesanan()
    {
        return $this->hasMany("App\DetailPemesanan", "pakets_id", "id");
    }
}
