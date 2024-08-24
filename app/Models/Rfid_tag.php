<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rfid_tag extends Model
{
    // use HasFactory;
    protected $table = 'rfid_tags';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
