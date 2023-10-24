<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up() {
        Schema::create('dosen', function (Blueprint $table) {
            $table->char('nidn', 10)->primary();
            $table->string('nama', 50);
        });
    }

    public function down() {
        Schema::dropIfExists('dosen');
    }
};
