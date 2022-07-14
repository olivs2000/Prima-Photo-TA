<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    //use HasFactory;

    public function detailpemesanan()
    {
        return $this->hasMany("App\DetailPemesanan", "pemesanans_id", "id");
    }
}
