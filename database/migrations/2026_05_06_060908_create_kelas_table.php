<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelas');
            $table->tinyInteger('tingkat'); // 1-12
            $table->string('tahun_ajaran', 10); // 2024/2025
            $table->foreignId('program_id')->constrained('program')->restrictOnDelete();
            $table->foreignId('lembaga_id')->constrained('lembaga')->restrictOnDelete();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
