<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->increments('id_cart');
            $table->integer('id')->nullable()->unsigned();
            // $table->string("jenis_pembayaran");
            // $table->integer("jumlah_barang");
            // $table->integer("total_harga");
            $table->date("tanggal_pemesanan");
            $table->boolean('status_cart');
            // $table->date("tanggal_pembayaran");
            // $table->date("tanggal_pengiriman");

            $table->foreign('id', 'fk_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
