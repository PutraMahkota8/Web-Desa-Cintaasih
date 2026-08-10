<?php
// app/Models/Prestasi.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $fillable = [
        'siswa_id', 'nama_prestasi', 'kategori',
        'deskripsi', 'tingkat', 'tanggal', 'bukti_url', 'dicatat_oleh',
    ];

    protected $casts = ['tanggal' => 'date'];

    public function siswa()      { return $this->belongsTo(User::class, 'siswa_id'); }
    public function dicatatOleh(){ return $this->belongsTo(User::class, 'dicatat_oleh'); }
}