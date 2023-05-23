<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    protected $fillable=[
        'nama_kategori',
        // 'slug',
        'foto_kategori'
    ];
    public $created_at = false;
    public $updated_at = false;


    public function product(){
        return $this->hasMany(product::class, 'id_category');
    }
}
