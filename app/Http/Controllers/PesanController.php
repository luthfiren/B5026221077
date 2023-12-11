<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesanController extends Controller
{

    public function index()
    {
        $chat = DB::table('chat')
                ->orderBy('id', 'asc')
                ->get();

        $pesan = $chat[0]->pesan;
        $kata = explode(" ", $pesan);

        return view('pesan/index', ['kata' => $kata]);
    }

}
