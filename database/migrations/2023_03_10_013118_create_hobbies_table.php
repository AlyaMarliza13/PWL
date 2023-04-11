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
        Schema::create('hobbies', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->integer('umur', false);
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('hobi', 50);
            $table->enum('kategori', ['kesenian', 'olahraga', 'fashion']);
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
        Schema::dropIfExists('hobbies');
    }
};
