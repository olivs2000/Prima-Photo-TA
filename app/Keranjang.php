<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    //use HasFactory;

    public $timestamps = false;
    protected $table='keranjang';

    public function paket()
    {
        return $this->hasMany("App\Paket", "pakets_id", "id");
    }

    public function insertPaket($cart)
    {
        $total=0;
        foreach($cart as $id => $detail)
        {
            $total += $detail['jumlah'] * $detail['harga'];
            $this->paket()->attach($id,[ 'jumlah'=>$detail['jumlah'],'total'=>$detail['harga'] ]);
        }
        return $total;
    }
}
