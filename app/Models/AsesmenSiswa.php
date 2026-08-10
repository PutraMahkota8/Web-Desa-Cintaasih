<?php
// app/Models/AsesmenSiswa.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsesmenSiswa extends Model
{
    protected $table = 'asesmen_siswa';
    protected $fillable = [
        'siswa_id', 'asesmen_id', 'mulai_pada', 'selesai_pada',
        'nilai', 'nilai_akhir', 'status', 'catatan_guru',
    ];

    protected $casts = [
        'mulai_pada'  => 'datetime',
        'selesai_pada'=> 'datetime',
        'nilai'       => 'decimal:2',
        'nilai_akhir' => 'decimal:2',
    ];

    public function siswa()          { return $this->belongsTo(User::class, 'siswa_id'); }
    public function asesmen()        { return $this->belongsTo(Asesmen::class); }
    public function jawabanSiswa()   { return $this->hasMany(JawabanSiswa::class); }

    public function lulus(): bool
    {
        $kkm = $this->asesmen->nilai_kkm;
        return $kkm ? ($this->nilai_akhir ?? $this->nilai) >= $kkm : false;
    }
}