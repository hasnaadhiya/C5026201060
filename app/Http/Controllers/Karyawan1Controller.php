<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Karyawan1Controller extends Controller
{
    public function index()
    {
        // DB::table('')->get(); //hasil get() adalah Array of object [object][]

        // mengambil data dari table karyawan (diambil semuanya pake get())
        $karyawan1 = DB::table('karyawan1')->get();

        // $karyawan1 = DB::table('karyawan1')->paginate(5);

        // mengirim data karyawan ke view index
        return view('karyawan1.index', ['karyawan1' => $karyawan1]); //teknik komunikasi / passing value antara controller dan view
    }

        // method untuk menampilkan view form tambah karyawan
        public function tambah()
        {

            // memanggil view tambah
            return view('karyawan1.tambah');
        }

        // method untuk insert data ke table karyawan
        public function store(Request $request)
        {
            // insert data ke table karyawan
            DB::table('karyawan1')->insert([
                'NIP' => $request->NIP,
                'Nama' => $request->nama,
                'Pangkat' => $request->pangkat,
                'Gaji' => $request->gaji
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/karyawan1'); // tidak return view, karena jadi tidak fleksibel
        }

}
