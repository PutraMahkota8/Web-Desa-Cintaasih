<?php
// app/Models/Lembaga.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lembaga extends Model
{
    protected $table = 'lembaga';
    protected $fillable = ['nama', 'tipe', 'alamat', 'logo_url'];

    public function kelas() { return $this->hasMany(Kelas::class); }
}