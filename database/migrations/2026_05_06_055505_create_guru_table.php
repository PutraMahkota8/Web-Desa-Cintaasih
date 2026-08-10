<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// database/migrations/2024_01_01_000002_create_guru_table.php

return new class extends Migration {
    public function up(): void
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained('users')->cascadeOnDelete();
            $table->string('nip', 18)->unique()->nullable();
            $table->string('nik', 16)->unique()->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable();
            $table->text('alamat')->nullable();
            $table->string('no_hp', 20)->nullable();
            $table->enum('pendidikan_terakhir', ['D3','D4','S1','S2','S3'])->nullable();
            $table->enum('status_kepegawaian', ['PNS','PPPK','honorer','GTY'])->nullable();
            $table->date('tanggal_masuk')->nullable();
            $table->string('mata_pelajaran_utama')->nullable();
            $table->boolean('sertifikasi')->default(false);
            $table->string('no_sertifikasi')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('guru');
    }
};