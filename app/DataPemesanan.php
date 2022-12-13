<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPemesanan extends Model
{
    //use HasFactory;

    public $timestamps = false;

    public function detailpemesanan()
    {
        return $this->hasMany("App\DetailPemesanan", "pemesanans_id", "id");
    }
}
