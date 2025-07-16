<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;
    public function pasiens(){
        return $this->belongsTo(Pasien::class, 'id', 'pasiens_id');
    }

    public function obats(){
        return $this->belongsTo(Obat::class,'obats_id', 'id' );
    }

}