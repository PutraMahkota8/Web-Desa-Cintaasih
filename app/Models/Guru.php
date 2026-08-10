<?php
// app/Models/Guru.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $fillable = [
        'user_id', 'nip', 'nik', 'tempat_lahir', 'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_hp', 'no_telp', 
        'pendidikan_terakhir',
        'status_kepegawaian', 'tanggal_masuk', 'mata_pelajaran_utama',
        'sertifikasi', 'no_sertifikasi',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'tanggal_masuk' => 'date',
        'sertifikasi'   => 'boolean',
    ];

    public function user()          { return $this->belongsTo(User::class); }
    public function guruMengajar()  { return $this->hasMany(GuruMengajar::class, 'guru_id', 'user_id'); }

    // Alamat lengkap sebagai string
    public function getAlamatLengkapAttribute()
    {
        $parts = array_filter([
            $this->alamat,
        ]);

        return implode(', ', $parts);
    }
}