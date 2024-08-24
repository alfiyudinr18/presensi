<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    // use HasFactory;
    protected $table = 'anggotas';
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable = ['id_kategori'];
    public function divisi()
    {
        return $this->belongsTo('App\Models\Divisi', 'id_divisi');
    }
    public function absen()
    {
        return $this->hasMany(Absen::class, 'uid', 'uid');
    }
}
