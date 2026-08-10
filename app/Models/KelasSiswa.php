<?php
// app/Models/KelasSiswa.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KelasSiswa extends Model
{
    protected $table = 'kelas_siswa';
    protected $fillable = ['siswa_id', 'kelas_id', 'tahun_ajaran', 'tanggal_masuk', 'tanggal_keluar', 'status'];

    protected $casts = [
        'tanggal_masuk'  => 'date',
        'tanggal_keluar' => 'date',
    ];

    public function siswa() { return $this->belongsTo(User::class, 'siswa_id'); }
    public function kelas() { return $this->belongsTo(Kelas::class); }
}