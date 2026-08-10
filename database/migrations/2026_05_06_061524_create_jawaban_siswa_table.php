<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('jawaban_siswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asesmen_siswa_id')->constrained('asesmen_siswa')->cascadeOnDelete();
            $table->foreignId('soal_id')->constrained('soal')->cascadeOnDelete();
            $table->text('jawaban_teks')->nullable();
            $table->foreignId('pilihan_jawaban_id')->nullable()->constrained('pilihan_jawaban')->nullOnDelete();
            $table->boolean('is_benar')->nullable();
            $table->decimal('nilai_didapat', 5, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jawaban_siswa');
    }
};
