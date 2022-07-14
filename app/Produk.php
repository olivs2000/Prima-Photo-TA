<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    public function detailpembelian()
    {
        return $this->hasMany("App\DetailPembelian", "produks_id", "id");
    }

    public function detailpemesanan()
    {
        return $this->hasMany("App\DetailPemesanan", "produks_id", "id");
    }
}
