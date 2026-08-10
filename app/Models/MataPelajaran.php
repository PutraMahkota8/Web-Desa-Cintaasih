<?php
// app/Models/MataPelajaran.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $table = 'mata_pelajaran';
    protected $fillable = ['nama', 'kode', 'deskripsi'];

    public function guruMengajar() { return $this->hasMany(GuruMengajar::class); }
}