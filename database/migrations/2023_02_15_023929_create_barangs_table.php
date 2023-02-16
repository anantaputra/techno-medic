<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignId('jenis_barang');
            $table->string('nama');
            $table->integer('harga');
            $table->integer('stok');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('jenis_barang')->references('id')->on('jenis_barangs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
