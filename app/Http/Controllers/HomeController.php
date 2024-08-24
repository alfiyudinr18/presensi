<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Anggota;
use App\Models\Mode;
use App\Models\Rfid_tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function dashboard()
    {
        date_default_timezone_set('Asia/Jakarta');
        $absen = Anggota::all()->count();
        $hariini = date('Y-m-d');
        $presensi = Absen::where('tanggal', $hariini)->count();
        return view('admin.dashboard', compact('absen', 'presensi'));
    }
}
