<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $a = 7 ;
        $b = 3 ;
        $c = $a * $b ;
        return "hasil perkalian" . $c;
    }
}
