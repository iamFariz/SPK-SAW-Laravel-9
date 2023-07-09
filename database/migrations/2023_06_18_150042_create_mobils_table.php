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
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->string('nopol')->unique();
            $table->string('nama')->unique();
            $table->string('slug')->unique();
            $table->text('gambar');
            $table->integer('harga');
            $table->string('tahun');
            $table->string('merek');
            $table->integer('kilometer');
            $table->string('bahan_bakar');
            $table->integer('kapasitas_mesin');
            $table->string('tipe_mobil');
            $table->integer('jml_kursi');
            $table->string('transmisi');
            $table->string('warna');
            $table->string('pemilik');
            $table->text('alamat_pemilik');
            $table->text('deskripsi')->nullable();
            $table->string('Ketersediaan');
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
        Schema::dropIfExists('mobils');
    }
};
