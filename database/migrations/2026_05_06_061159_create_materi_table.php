<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('materi', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->longText('konten')->nullable();
            $table->string('file_url')->nullable();
            $table->string('video_url')->nullable();
            $table->enum('tipe_konten', ['teks', 'file', 'video', 'campuran']);
            $table->foreignId('bab_id')->constrained('bab')->cascadeOnDelete();
            $table->foreignId('guru_mengajar_id')->constrained('guru_mengajar')->cascadeOnDelete();
            $table->unsignedTinyInteger('urutan')->default(1);
            $table->boolean('is_published')->default(false);
            $table->date('tanggal_publish')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('materi');
    }
};
