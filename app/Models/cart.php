<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;

    protected $table = 'cart';
    protected $primaryKey = 'id_cart';
    protected $fillable=[
        'id',
        'tanggal_pemesanan'
    ];

    public $created_at = false;
    public $updated_at = false;

    public function users(){
        return $this->belongsTo(users::class, 'id'); 
    }

    public function detail_cart(){
        return $this->hasMany(detail_cart::class, 'id_cart');
    }
}
