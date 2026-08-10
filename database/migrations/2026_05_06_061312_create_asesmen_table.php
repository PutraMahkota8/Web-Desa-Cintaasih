<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('asesmen', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->enum('tipe', ['harian', 'uts', 'uas']);
            $table->text('deskripsi')->nullable();
            $table->foreignId('guru_mengajar_id')->constrained('guru_mengajar')->cascadeOnDelete();
            $table->foreignId('bab_id')->nullable()->constrained('bab')->nullOnDelete();
            $table->unsignedSmallInteger('durasi_menit');
            $table->decimal('nilai_kkm', 5, 2)->nullable();
            $table->boolean('acak_soal')->default(false);
            $table->timestamp('tanggal_mulai');
            $table->timestamp('tanggal_selesai')->nullable();
            $table->boolean('is_published')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('asesmen');
    }
};
