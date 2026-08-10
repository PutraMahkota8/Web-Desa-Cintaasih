<?php
// app/Models/Soal.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $fillable = ['asesmen_id', 'pertanyaan', 'tipe_soal', 'urutan', 'bobot'];

    public function asesmen()         { return $this->belongsTo(Asesmen::class); }
    public function pilihanJawaban()  { return $this->hasMany(PilihanJawaban::class); }
    public function jawabanBenar()    { return $this->hasOne(PilihanJawaban::class)->where('is_benar', true); }
}