<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function categories(){
        return $this->belongsTo(categories::class, 'id_category');
    }
    public function detail_cart(){
        return $this->hasMany(detail_cart::class, 'id_product');
    }

}
