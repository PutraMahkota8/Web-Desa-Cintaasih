<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('guru_mengajar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('mata_pelajaran_id')->constrained('mata_pelajaran')->restrictOnDelete();
            $table->foreignId('kelas_id')->constrained('kelas')->restrictOnDelete();
            $table->string('tahun_ajaran', 10);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->timestamp('tanggal_selesai')->nullable();

            $table->unique(['guru_id', 'mata_pelajaran_id', 'kelas_id', 'tahun_ajaran'], 'guru_mengajar_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('guru_mengajar');
    }
};
