<?php
// app/Models/Kelas.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = ['nama_kelas', 'tingkat', 'tahun_ajaran', 'program_id', 'lembaga_id', 'is_active'];

    protected $casts = ['is_active' => 'boolean'];

    public function program()       { return $this->belongsTo(Program::class); }
    public function lembaga()       { return $this->belongsTo(Lembaga::class); }
    public function kelasSiswa()    { return $this->hasMany(KelasSiswa::class); }
    public function siswa()         { return $this->belongsToMany(User::class, 'kelas_siswa', 'kelas_id', 'siswa_id'); }
    public function guruMengajar()  { return $this->hasMany(GuruMengajar::class); }
}