<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $table = 'obats';

    public function reseps(){
        return $this->hasMany(Resep::class,'obats_id');
    }

    
}