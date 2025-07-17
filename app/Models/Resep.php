<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    public function pasien(){
        return $this->belongsTo(Pasien::class, 'pasiens_id');
    }

    public function obat(){
        return $this->belongsTo(Obat::class, 'obats_id');
    }   
}