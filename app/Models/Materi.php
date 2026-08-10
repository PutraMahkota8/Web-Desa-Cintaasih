<?php
// app/Models/Materi.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $fillable = [
        'judul', 'deskripsi', 'konten', 'file_url', 'video_url',
        'tipe_konten', 'bab_id', 'guru_mengajar_id',
        'urutan', 'is_published', 'tanggal_publish',
    ];

    protected $casts = [
        'is_published'   => 'boolean',
        'tanggal_publish'=> 'date',
    ];

    public function bab()           { return $this->belongsTo(Bab::class); }
    public function guruMengajar()  { return $this->belongsTo(GuruMengajar::class); }
    public function progress()      { return $this->hasMany(MateriProgress::class); }
    public function feedback()      { return $this->hasMany(Feedback::class); }

    // Cek apakah siswa sudah membaca
    public function sudahDibacaOleh(int $siswaId): bool
    {
        return $this->progress()->where('siswa_id', $siswaId)->where('sudah_dibaca', true)->exists();
    }
}