<?php
// app/Models/PilihanJawaban.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PilihanJawaban extends Model
{
    protected $table = 'pilihan_jawaban';
    protected $fillable = ['soal_id', 'teks_pilihan', 'is_benar'];

    protected $casts = ['is_benar' => 'boolean'];

    public function soal() { return $this->belongsTo(Soal::class); }
}