<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index()
    {
        $absen = Absen::all();
        return view('admin.absen', compact('absen'));
    }
}
