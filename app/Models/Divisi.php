<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    public function anggota()
    {
        return $this->hasMany('App\Models\Anggota', 'id_divisi');
    }
}
