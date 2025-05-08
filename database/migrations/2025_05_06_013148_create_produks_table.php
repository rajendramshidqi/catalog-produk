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
        Schema::create('produks', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('jenis_produk');
            $table->integer('harga');
            $table->string('deskripsi');
            $table->integer('stok');
            $table->unsignedBigInteger('id_merek');
            $table->unsignedBigInteger('id_kategori');
            $table->string('foto');

            $table->foreign('id_merek')->references('id')->on('mereks')->onDelete('cascade');
            $table->foreign('id_kategori')->references('id')->on('kategoris')->onDelete('cascade');

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
        Schema::dropIfExists('produks');
    }
};
