<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;
    public function pasiens(){
        return $this->hasOne(Pasien::class, 'id', 'pasiens_id');
    }

    public function obats(){
        return $this->hasOne(Obat::class, 'id', 'obats_id');
    }

    public function pengambilan(){
        return $this->belongTo(Pengambilan::class);
    }

}