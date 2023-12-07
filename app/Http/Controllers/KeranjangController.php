<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    public function indexkeranjangbelanja()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
        return view('/indexkeranjangbelanja', ['keranjangbelanja' => $keranjangbelanja]);
    }

    public function beli()
    {
        return view('/beli');
    }

    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'kodeBarang' => $request->kodeBarang,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga
        ]);
        return redirect('/keranjangbelanja');
    }

    public function batal($ID)
    {
        DB::table('keranjangbelanja')->where('id', $ID)->delete();
        return redirect('/keranjangbelanja');
    }
}
