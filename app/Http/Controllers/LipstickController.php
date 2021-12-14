<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LipstickController extends Controller
{
    public function index()
    {
        // DB::table('')->get(); //hasil get() adalah Array of object [object][]

        // mengambil data dari table lipstick (diambil semuanya pake get())
        // $lipstick = DB::table('lipstick')->get();

        $lipstick = DB::table('lipstick')->paginate(5);

        // mengirim data lipstick ke view index
        return view('lipstick.index', ['lipstick' => $lipstick]); //teknik komunikasi / passing value antara controller dan view
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table lipstick sesuai pencarian data
		$lipstick = DB::table('lipstick')
		->where('merklipstick','like',"%" . $cari . "%")
		->paginate(3);

    	// mengirim data lipstick ke view index
		return view('lipstick.index',['lipstick' => $lipstick]);

	}


    // method untuk menampilkan view form tambah lipstick
    public function tambah()
    {

        // memanggil view tambah
        return view('lipstick.tambah');
    }

    // method untuk insert data ke table lipstick
    public function store(Request $request)
    {
        // insert data ke table lipstick
        DB::table('lipstick')->insert([
            'kodelipstick' => $request->kode,
            'merklipstick' => $request->merk,
            'stocklipstick' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman lipstick
        return redirect('/lipstick'); // tidak return view, karena jadi tidak fleksibel
    }

    // method untuk edit data lipstick
    public function edit($kodelipstick)
    {
        // mengambil data lipstick berdasarkan kode lipstick yang dipilih
        $lipstick = DB::table('lipstick')->where('kodelipstick', $kodelipstick)->get();
        // passing data lipstick yang didapat ke view edit.blade.php
        return view('lipstick.edit', ['lipstick' => $lipstick]);
    }

    // method untuk melihat detail data lipstick
    public function detail($kodelipstick)
    {
        // mengambil data lipstick berdasarkan kodelipstick yang dipilih
        $lipstick = DB::table('lipstick')->where('kodelipstick', $kodelipstick)->get();
        // passing data lipstick yang didapat ke view detail.blade.php
        return view('lipstick.detail', ['lipstick' => $lipstick]);
    }

    // update data lipstick
    public function update(Request $request)
    {
        // update data lipstick
        DB::table('lipstick')->where('kodelipstick', $request->kodelipstick)->update([
            'kodelipstick' => $request->kode,
            'merklipstick' => $request->merk,
            'stocklipstick' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman lipstick
        return redirect('/lipstick');
    }

    // method untuk hapus data lipstick
    public function hapus($kodelipstick)
    {
        // menghapus data lipstick berdasarkan kodelipstick yang dipilih
        DB::table('lipstick')->where('kodelipstick', $kodelipstick)->delete();

        // alihkan halaman ke halaman lipstick
        return redirect('/lipstick');
    }
}
