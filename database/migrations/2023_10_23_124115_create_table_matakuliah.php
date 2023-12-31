<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->char('kode_matakuliah', 8)->primary();
            $table->string('nama_matakuliah', 50);
            $table->integer('sks');
        });
    }

    public function down() {
        Schema::dropIfExists('matakuliah');
    }
};
