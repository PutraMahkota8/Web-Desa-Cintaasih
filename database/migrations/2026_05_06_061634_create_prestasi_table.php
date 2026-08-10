<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('prestasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('users')->cascadeOnDelete();
            $table->string('nama_prestasi');
            $table->enum('kategori', ['akademik','non-akademik','olahraga','seni'])->nullable();
            $table->text('deskripsi')->nullable();
            $table->enum('tingkat', ['sekolah','kabupaten','provinsi','nasional'])->nullable();
            $table->date('tanggal');
            $table->string('bukti_url')->nullable();
            $table->foreignId('dicatat_oleh')->constrained('users')->restrictOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prestasi');
    }
};
