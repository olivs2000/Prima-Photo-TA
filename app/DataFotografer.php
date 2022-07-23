<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataFotografer extends Model
{
    //use HasFactory;
    public $timestamps = false;
    // public $pas_foto = false;

    protected $table='data_fotografers';

    public function jadwalfotografer()
    {
        return $this->hasMany("App\JadwalFotografer", "data_fotografers_id", "id");
    }
}
