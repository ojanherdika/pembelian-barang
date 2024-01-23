<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian_barang', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pembelian');
            $table->date('tanggal');
            $table->string('kode_barang');
            $table->string('satuan');
            $table->decimal('qty', 10, 2);
            $table->decimal('harga', 10, 2);
            $table->decimal('diskon', 5, 2);
            $table->decimal('subtotal', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelian_barang');
    }
};
