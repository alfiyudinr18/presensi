<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $table = 'absens';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function Anggota()
    {
        return $this->belongsTo(Anggota::class, 'uid', 'uid');
    }

    // use HasFactory;
}
