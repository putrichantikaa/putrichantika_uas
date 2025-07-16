<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasiens';

    public function reseps(){
        return $this->hasMany(Resep::class);
    }

    public function pengambilan(){
        return $this->hasMany(Pengambilan::class);
    }

    protected $fillable = ['nik_pasien', 'nama_pasien', 'tgl_lahir', 'no_hp', 'alamat'];
}