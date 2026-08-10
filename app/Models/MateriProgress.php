<?php
// app/Models/MateriProgress.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MateriProgress extends Model
{
    protected $table = 'materi_progress';
    protected $fillable = ['siswa_id', 'materi_id', 'sudah_dibaca', 'dibaca_pada'];

    protected $casts = [
        'sudah_dibaca' => 'boolean',
        'dibaca_pada'  => 'datetime',
    ];

    public function siswa()  { return $this->belongsTo(User::class, 'siswa_id'); }
    public function materi() { return $this->belongsTo(Materi::class); }
}