<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerasController extends Controller
{

	public function DB()
    {
    	// mengambil data dari table beras
    	$beras = DB::table('beras')
		->orderByRaw('merkberas ASC')
		->paginate(10);
		foreach($beras as $k){
			if($k->tersedia){
				$k->availability = "YA";
			} else {
				$k ->availability = "TIDAK";
			}
		}
    	// mengirim data beras ke view index
    	return view('beras/index',['beras' => $beras]);

    }

    // method untuk menampilkan view form tambah beras
public function tambah()
{

	// memanggil view tambah
	return view('beras/tambah');

}

// method untuk insert data ke table beras
public function store(Request $request)
{
	// insert data ke table beras
	DB::table('beras')->insert([
		'merkberas' => $request->merk,
		'stockberas' => $request->stock,
		'tersedia' => $request->ketersediaan,
	]);
	// alihkan halaman ke halaman beras
	return redirect('/beras');

}

// method untuk edit data beras
public function edit($id)
{
	// mengambil data beras berdasarkan id yang dipilih
	$beras = DB::table('beras')->where('kodeberas',$id)->get();
	// passing data beras yang didapat ke view edit.blade.php
	return view('beras/edit',['beras' => $beras]);

}

// update data beras
public function update(Request $request)
{
	// update data beras
	DB::table('beras')->where('kodeberas',$request->id)->update([
		'merkberas' => $request->merk,
		'stockberas' => $request->stock,
		'tersedia' => $request->tersedia,
	]);
	// alihkan halaman ke halaman beras
	return redirect('/beras');
}
// method untuk hapus data beras
public function hapus($id)
{
	// menghapus data beras berdasarkan id yang dipilih
	DB::table('beras')->where('kodeberas',$id)->delete();

	// alihkan halaman ke halaman beras
	return redirect('/beras');
}

public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table beras sesuai pencarian data
		$beras = DB::table('beras')
		->where('merkberas','like',"%".$cari."%")
		->orderByRaw('merkberas ASC')
		->paginate();
		foreach($beras as $k){
			if($k->tersedia){
				$k->availability = "YA";
			} else {
				$k ->availability = "TIDAK";
			}
		}

    		// mengirim data beras ke view index
		return view('beras/index',['beras' => $beras, 'cari' => $cari]);

	}
// method untuk edit data beras
public function view($id)
{
	// mengambil data beras berdasarkan id yang dipilih
	$beras = DB::table('beras')->where('kodeberas',$id)->get();
	foreach($beras as $k){
		if($k->tersedia){
			$k->availability = "YA";
		} else {
			$k ->availability = "TIDAK";
		}
	}
	// passing data beras yang didapat ke view edit.blade.php
	return view('beras/view',['beras' => $beras]);

}

}
