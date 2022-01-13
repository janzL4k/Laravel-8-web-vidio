<?php

namespace App\Http\Controllers;

use App\Models\Sepakbola;
use App\Models\Bolabasket;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class frontendController extends Controller
{
    public function index(){
        $sepakbola  = Sepakbola::all();
        // $basket  = Bolabasket::all();
        return view('frontend.halaman-utama.index', compact('sepakbola'));
    }

    public function depan(){
        $sepakbola  = Sepakbola::all();
        // $basket  = Bolabasket::all();
        return view('user.index', compact('sepakbola'));
    }
}
