<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->increments('id_produk', 11);
            $table->string('nama_barang', 70);
            $table->string('warna', 30);
            $table->string('bahan', 30);
            $table->integer('harga');
            $table->integer('stok');
            $table->text('keterangan');
            $table->increments('id_kategori', 11);
            $table->enum('best_seller', ['Yes', 'No']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
