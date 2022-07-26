<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public function barangs(){
        return $this->hasOne(Barang::class,'id','barangs_id');
    }
}
