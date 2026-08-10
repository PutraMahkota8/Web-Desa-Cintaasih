<?php
// app/Models/Asesmen.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asesmen extends Model
{
    protected $fillable = [
        'judul', 'tipe', 'deskripsi', 'guru_mengajar_id', 'bab_id',
        'durasi_menit', 'nilai_kkm', 'acak_soal',
        'tanggal_mulai', 'tanggal_selesai', 'is_published',
    ];

    protected $casts = [
        'acak_soal'      => 'boolean',
        'is_published'   => 'boolean',
        'tanggal_mulai'  => 'datetime',
        'tanggal_selesai'=> 'datetime',
        'nilai_kkm'      => 'decimal:2',
    ];

    public function guruMengajar()  { return $this->belongsTo(GuruMengajar::class); }
    public function bab()           { return $this->belongsTo(Bab::class); }
    public function soal()          { return $this->hasMany(Soal::class)->orderBy('urutan'); }
    public function asesmenSiswa()  { return $this->hasMany(AsesmenSiswa::class); }
    public function feedback()      { return $this->hasMany(Feedback::class); }

    public function sedangBerlangsung(): bool
    {
        $now = now();
        return $this->is_published
            && $now->between($this->tanggal_mulai, $this->tanggal_selesai);
    }
}