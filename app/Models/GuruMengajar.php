<?php
// app/Models/GuruMengajar.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuruMengajar extends Model
{
    protected $table = 'guru_mengajar';
    protected $fillable = ['guru_id', 'mata_pelajaran_id', 'kelas_id', 'tahun_ajaran', 'is_active'];

    protected $casts = ['is_active' => 'boolean'];

    public function guru()          { return $this->belongsTo(User::class, 'guru_id'); }
    public function mataPelajaran() { return $this->belongsTo(MataPelajaran::class); }
    public function kelas()         { return $this->belongsTo(Kelas::class); }
    public function bab()           { return $this->hasMany(Bab::class); }
    public function materi()        { return $this->hasMany(Materi::class); }
    public function asesmen()       { return $this->hasMany(Asesmen::class); }
}