<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_cart', function (Blueprint $table) {
            $table->integer('id_cart')->nullable()->unsigned();
            $table->integer('id_product')->nullable()->unsigned();
            $table->string('nama');
            $table->string('alamat');
            $table->string("jenis_pembayaran");
            $table->integer("jumlah_barang");
            $table->integer("total_harga");
            $table->string('shipping');
            $table->date("tanggal_pembayaran")->nullable();
            $table->date("tanggal_pengiriman")->nullable();
            $table->integer('status');
            $table->integer('status_bayar');
            $table->string('foto_bukti_bayar')->nullable();


            $table->foreign('id_cart', 'fk_cart')->references('id_cart')->on('cart');
            $table->foreign('id_product', 'fk_product')->references('id_product')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_cart');
    }
}
