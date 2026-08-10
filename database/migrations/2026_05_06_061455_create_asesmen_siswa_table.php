<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('asesmen_siswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('asesmen_id')->constrained('asesmen')->cascadeOnDelete();
            $table->timestamp('mulai_pada')->nullable();
            $table->timestamp('selesai_pada')->nullable();
            $table->decimal('nilai', 5, 2)->nullable();
            $table->decimal('nilai_akhir', 5, 2)->nullable();
            $table->enum('status', ['belum','berlangsung','selesai','dinilai'])->default('belum');
            $table->text('catatan_guru')->nullable();
            $table->timestamps();

            $table->unique(['siswa_id', 'asesmen_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('asesmen_siswa');
    }
};
