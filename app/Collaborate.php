<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborate extends Model
{
    //use HasFactory;
    public $timestamps = false;

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

}


