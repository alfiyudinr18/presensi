<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Anggota;
use App\Models\Mode;
use App\Models\Rfid_tag;
use Illuminate\Http\Request;

class RfidTagController extends Controller
{
    public function index()
    {
        Rfid_tag::truncate();
        return view('front.index');
    }

    public function reader()
    {
        $data = Rfid_tag::find(1);
        $cek =  Rfid_tag::all()->toArray();
        $mode = Mode::first();
        $mode_absen = $mode->mode;

        $nama = "";
        $text = "";
        $hasil = null;

        if ($mode_absen == 1) {
            $text = "Jam Masuk";
        } elseif (2) {
            $text = "Jam Keluar";
        }

        // cek tabel temp rfid
        if (empty($cek)) {
            $hasil = 1;
        } else {
            // rfid temporary
            $rfid_masuk = $data->uid;
            // cek rfid apakah sudah terdaftar di tabel Anggota
            $anggota = Anggota::where('uid', $rfid_masuk)->count();
            if ($anggota > 0) {

                // ambil nama Anggota
                $data = Anggota::where('uid', $rfid_masuk)->first();
                $nama = $data->nama;
                // -----------------------------------
                date_default_timezone_set('Asia/Jakarta');
                $tanggal = date('Y-m-d');
                $jam = date("H:i:s");
                // cek data Absen
                $absen = Absen::where('uid', $rfid_masuk)->where('tanggal', $tanggal)->count();

                if ($absen < 1) {
                    $hasil = 0;
                    $insert_absen = Absen::create([
                        'uid' => $rfid_masuk,
                        'tanggal' => $tanggal,
                        'jam_masuk' => $jam,
                        'jam_keluar' => "-",
                    ]);
                } else {
                    if ($mode_absen != 2) {
                        $hasil = 4;
                    } else {
                        $hasil = 2;
                        $update_absen = Absen::where('uid', $rfid_masuk)->where('tanggal', $tanggal)->update([
                            'jam_keluar' => $jam,
                        ]);
                    }
                }
            } else {
                // else cek data Anggota
                $hasil = 3;
            }
        }
        // delete temprfid
        Rfid_tag::truncate();

        return view('front.detail', compact('hasil', 'text', 'nama'));
    }
    public function rfid($id)
    {

        $delete = Rfid_tag::truncate();

        $insert = Rfid_tag::create([
            'uid' => $id,
        ]);

        return 'Kartu Masuk';
    }

    public function mode()
    {
        $data = Mode::first();
        $mode = $data->mode + 1;
        if ($mode > 2) {
            $mode = 1;
        }
        $update = Mode::where('id', 1)->update([
            'mode' => $mode,
        ]);
        return "Mode Berhasil Diubah";
    }
}
