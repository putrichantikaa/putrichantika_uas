<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengambilan extends Model
{
    use HasFactory;

    public function resep() {
        return $this->belongsTo(Resep::class, 'reseps_id');
    }

    public function pasien() {
        return $this->belongsTo(Pasien::class, 'pasiens_id');
    }
}
