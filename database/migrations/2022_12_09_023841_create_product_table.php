<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id_product');
            $table->integer('id_category')->nullable()->unsigned();
            $table->string('nama_produk');
            // $table->string('slug')->unique();
            $table->float('berat')->nullable();
            $table->text('deskripsi')->nullable();
            $table->integer('jumlah')->nullable();
            $table->integer('harga');
            $table->string('foto_product');
            $table->boolean('status_product');

            $table->foreign('id_category', 'fk_category')->references('id_category')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
