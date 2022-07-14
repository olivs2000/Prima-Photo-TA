<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminStudio extends Model
{
    //use HasFactory;

    protected $table='admin_studios';

    public function jadwalfotografer()
    {
        return $this->hasMany("App\JadwalFotografer", "admin_studios_id", "id");
    }
}
