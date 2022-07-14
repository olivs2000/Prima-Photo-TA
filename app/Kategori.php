<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public function paket()
    {
        return $this->hasMany("App\Paket", "kategoris_id", "id");
    }
}
