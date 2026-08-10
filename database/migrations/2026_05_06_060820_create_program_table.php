<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('program', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Paket A, Paket B, Paket C, MA Reguler
            $table->enum('tipe', ['paket', 'reguler']);
            $table->tinyInteger('jenjang_awal');  // 1, 7, 10
            $table->tinyInteger('jenjang_akhir'); // 6, 9, 12
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('program');
    }
};
