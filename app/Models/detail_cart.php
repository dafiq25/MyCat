<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_cart extends Model
{
    use HasFactory;

    protected $table = 'detail_cart';
    protected $fillable =[
        'id_cart',
        'id_product',
        'nama',
        'notelp',
        'alamat',
        'jenis_pembayaran',
        'jumlah_barang',
        'total_harga',
        'shipping',
        'tanggal_pembayaran',
        'tanggal_pengiriman',
        'status',
        'status_bayar'
    ];
    public $created_at = false;
    public $updated_at = false;

    public function cart(){
        return $this->belongsTo(cart::class, 'id_cart');
    }
    public function product(){
        return $this->belongsTo(product::class, 'id_product');
    }
}
