<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->char('npm', 10)->primary();
            $table->char('nidn', 10);
            $table->string('nama', 50);
            $table->foreign('nidn')->references('nidn')->on('dosen');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
};
