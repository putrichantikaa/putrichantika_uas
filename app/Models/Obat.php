<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    
    use HasFactory;
        protected $table = 'obats';

    public function resep(){
        return $this->hansMany(Resep::class,'obats_id');
    }   

}
    
    
    

