<?php
// app/Models/Program.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['nama', 'tipe', 'jenjang_awal', 'jenjang_akhir', 'deskripsi'];

    public function kelas() { return $this->hasMany(Kelas::class); }

    public function getLabelJenjangAttribute(): string
    {
        return "Kelas {$this->jenjang_awal}–{$this->jenjang_akhir}";
    }
}