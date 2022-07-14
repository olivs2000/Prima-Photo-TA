<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    public function detailpemesanan()
    {
        return $this->hasMany("App\DetailPemesanan", "layanans_id", "id");
    }
}
