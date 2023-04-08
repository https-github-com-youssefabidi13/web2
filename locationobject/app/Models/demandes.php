<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demandes extends Model
{
    use HasFactory;
    public function annonces(){
        return $this->belongsTo(annonces::class,'annonce_id');
    }
    public function products(){
        return $this->belongsTo(Product::class,'products_id');
    }
}
