<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bab', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bab');
            $table->unsignedTinyInteger('urutan');
            $table->text('deskripsi')->nullable();
            $table->foreignId('guru_mengajar_id')->constrained('guru_mengajar')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bab');
    }
};
