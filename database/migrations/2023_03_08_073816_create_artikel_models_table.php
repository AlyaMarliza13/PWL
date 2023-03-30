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
        Schema::create('artikel_models', function (Blueprint $table) {
            $table->id('id_artikel');
            $table->string('judul', 100);
            $table->string('penulis', 100);
            $table->enum('kategori', ['pendidikan', 'kesehatan', 'keluarga']);
            $table->integer('tahun_terbit', false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikel_models');
    }
};
