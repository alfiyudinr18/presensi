<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Divisi;
use App\Models\Rfid_tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = Anggota::with('divisi')->get();
        return view('anggota.index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function nokartu()
    {
        $data = Rfid_tag::all();
        $cek = Rfid_tag::all()->toArray();

        return view('anggota.kartu', compact('data', 'cek'));
    }

    public function create()
    {
        $delete = DB::table('rfid_tags')->delete();
        $divisi = Divisi::all();
        return view('anggota.create', compact('divisi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $anggota = new Anggota();
        $anggota->uid = $request->uid;
        $anggota->nama = $request->nama;
        $anggota->nim = $request->nim;
        $anggota->id_divisi = $request->id_divisi;
        $anggota->save();
        $delete = DB::table('rfid_tags')->delete();
        return redirect()->route('anggota.index')->with(['message' => 'anggota berhasil dibuat!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $anggota = Anggota::findOrFail($id);
        $divisi = Divisi::all();
        return view('anggota.edit', compact('anggota', 'divisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->uid = $request->uid;
        $anggota->nama = $request->nama;
        $anggota->nim = $request->nim;
        $anggota->id_divisi = $request->id_divisi;
        $anggota->save();
        return redirect()->route('anggota.index')->with(['message' => 'anggota berhasil diedit!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $anggota = Anggota::findOrFail($id)->delete();
        return redirect()->route('anggota.index')->with(['message' => 'anggota berhasil dihapus!']);
    }
}
