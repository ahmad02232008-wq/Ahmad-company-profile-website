<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('gambar_propertis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('properti_id')->constrained('propertis')->onDelete('cascade');
            $table->string('nama_file');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gambar_propertis');
    }
};