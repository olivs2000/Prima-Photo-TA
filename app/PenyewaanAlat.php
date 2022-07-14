<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyewaanAlat extends Model
{
    use HasFactory;

    public function detailpemesanan()
    {
        return $this->hasMany("App\DetailPemesanan", "penyewaan_alats_id", "id");
    }
}
