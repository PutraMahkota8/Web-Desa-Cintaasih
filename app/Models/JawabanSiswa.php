<?php
// app/Models/JawabanSiswa.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JawabanSiswa extends Model
{
    protected $table = 'jawaban_siswa';
    protected $fillable = [
        'asesmen_siswa_id', 'soal_id', 'jawaban_teks',
        'pilihan_jawaban_id', 'is_benar', 'nilai_didapat',
    ];

    protected $casts = [
        'is_benar'     => 'boolean',
        'nilai_didapat'=> 'decimal:2',
    ];

    public function asesmenSiswa()  { return $this->belongsTo(AsesmenSiswa::class); }
    public function soal()          { return $this->belongsTo(Soal::class); }
    public function pilihanJawaban(){ return $this->belongsTo(PilihanJawaban::class); }
}