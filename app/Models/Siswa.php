<?php
// app/Models/Siswa.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'user_id', 'nis', 'nisn', 'nik', 'tempat_lahir', 'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_hp', 'nama_orang_tua_wali','no_hp_ortu',
        'asal_sekolah', 'tahun_masuk', 'status_siswa', 
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'tahun_masuk'   => 'integer',
    ];

    public function user()         { return $this->belongsTo(User::class); }
    public function kelasSiswa()   { return $this->hasMany(KelasSiswa::class, 'siswa_id', 'user_id'); }
    public function kelas()        { return $this->belongsToMany(Kelas::class, 'kelas_siswa', 'siswa_id', 'kelas_id', 'user_id'); }
    public function prestasi()     { return $this->hasMany(Prestasi::class, 'siswa_id', 'user_id'); }
    public function asesmenSiswa() { return $this->hasMany(AsesmenSiswa::class, 'siswa_id', 'user_id'); }
}