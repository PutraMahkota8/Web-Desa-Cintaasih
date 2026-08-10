<?php
// app/Models/User.php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['nama', 'email', 'password', 'role', 'avatar_url', 'is_active'];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'is_active'         => 'boolean',
        'email_verified_at' => 'datetime',
    ];

    // Relasi ke profil
    public function profilGuru()   { return $this->hasOne(Guru::class, 'user_id'); }
    public function profilSiswa()  { return $this->hasOne(Siswa::class, 'user_id'); }

    // Scope role
    public function scopeAdmin($q)  { return $q->where('role', 'admin'); }
    public function scopeGuru($q)   { return $q->where('role', 'guru'); }
    public function scopeSiswa($q)  { return $q->where('role', 'siswa'); }

    // Helper
    public function isAdmin()  { return $this->role === 'admin'; }
    public function isGuru()   { return $this->role === 'guru'; }
    public function isSiswa()  { return $this->role === 'siswa'; }

    // Relasi aktivitas
    public function kelasSiswa()     { return $this->hasMany(KelasSiswa::class, 'siswa_id'); }
    public function guruMengajar()   { return $this->hasMany(GuruMengajar::class, 'guru_id'); }
    public function asesmenSiswa()   { return $this->hasMany(AsesmenSiswa::class, 'siswa_id'); }
    public function feedbackDikirim(){ return $this->hasMany(Feedback::class, 'dari_user_id'); }
    public function feedbackDiterima(){ return $this->hasMany(Feedback::class, 'ke_user_id'); }
    public function prestasi()       { return $this->hasMany(Prestasi::class, 'siswa_id'); }
}