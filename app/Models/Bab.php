<?php
// app/Models/Bab.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bab extends Model
{
    protected $table = 'bab';
    protected $fillable = ['nama_bab', 'urutan', 'deskripsi', 'guru_mengajar_id'];

    public function guruMengajar() { return $this->belongsTo(GuruMengajar::class); }
    public function materi()       { return $this->hasMany(Materi::class)->orderBy('urutan'); }
    public function asesmen()      { return $this->hasMany(Asesmen::class); }
}