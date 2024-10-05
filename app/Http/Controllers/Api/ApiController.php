<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mode;
use App\Models\Rfid_tag;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function rfid(Request $request, $id)
    {
        // Menghapus semua data dari tabel Rfid_tag
        Rfid_tag::truncate();

        // Memasukkan data baru ke tabel Rfid_tag
        $insert = Rfid_tag::create([
            'uid' => $id,
        ]);

        // Mengembalikan respons JSON
        return response()->json([
            'message' => 'Kartu Masuk',
            'data' => $insert
        ], 201); // Status code 201 berarti "Created"
    }

    public function mode(Request $request)
    {
        // Ambil data mode pertama
        $data = Mode::first();

        if (!$data) {
            return response()->json([
                'message' => 'Mode data not found',
            ], 404);
        }

        // Mengubah mode
        $mode = $data->mode + 1;
        if ($mode > 2) {
            $mode = 1;
        }

        // Update mode
        $update = Mode::where('id', $data->id)->update([
            'mode' => $mode,
        ]);

        if ($update) {
            return response()->json([
                'message' => 'Mode Berhasil Diubah',
                'mode' => $mode,
            ], 200); // Status 200 berarti sukses
        } else {
            return response()->json([
                'message' => 'Failed to update mode',
            ], 500); // Status 500 berarti error server
        }
    }
}
