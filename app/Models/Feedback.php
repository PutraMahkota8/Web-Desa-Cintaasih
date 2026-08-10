<?php
// app/Models/Feedback.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'dari_user_id', 'ke_user_id', 'materi_id',
        'asesmen_id', 'isi', 'tipe', 'is_dibaca',
    ];

    protected $casts = ['is_dibaca' => 'boolean'];

    public function dariUser()  { return $this->belongsTo(User::class, 'dari_user_id'); }
    public function keUser()    { return $this->belongsTo(User::class, 'ke_user_id'); }
    public function materi()    { return $this->belongsTo(Materi::class); }
    public function asesmen()   { return $this->belongsTo(Asesmen::class); }

    public function tandaiDibaca(): void
    {
        $this->update(['is_dibaca' => true]);
    }
}