<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiKuliahController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $nilai = DB::table('nilaikuliah')->get();

        foreach($nilai as $n){
            switch(true){
                case($n->NilaiAngka >= 81):
                $n->NilaiHuruf = 'A';
                break;
                case($n->NilaiAngka >= 61):
                $n->NilaiHuruf = 'B';
                break;
                case($n->NilaiAngka >= 41):
                $n->NilaiHuruf = 'C';
                break;
                default:
                $n->NilaiHuruf = 'D';
                break;
            }
        $n->Bobot = $n->NilaiAngka * $n->SKS;
        }

    	// mengirim data pegawai ke view index
		return view('nilaikuliah',['nilai' => $nilai]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahdata');

	}


	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);

		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');

	}
    public function toHuruf($nilaiangka){
        echo "Hello";
    }
}
