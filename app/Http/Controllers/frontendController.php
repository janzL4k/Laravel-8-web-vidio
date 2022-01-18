<?php

namespace App\Http\Controllers;

use App\Models\Sepakbola;
use App\Models\Bolabasket;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class frontendController extends Controller
{
    // public function index(){
    //     $sepakbola  = Sepakbola::all();
    //     // $basket  = Bolabasket::all();
    //     return view('frontend.halaman-utama.index', compact('sepakbola'));
    // }

    public function depan(){
        $sepakbola  = Sepakbola::all();
        $basket  = Bolabasket::all();
        return view('user.index', compact('sepakbola','basket'));
    }
    public function tentang(){
        $sepakbola  = Sepakbola::find(5);
        $sepakbola2 =Sepakbola::find(6);
        $sepakbola3 =Sepakbola::find(9);
        $basket  = Bolabasket::find(2);
        $basket1  = Bolabasket::find(3);
        $basket2  = Bolabasket::find(4);
        $basket3  = Bolabasket::find(3);
        $basket4  = Bolabasket::find(4);
        return view('user.tentang',compact('sepakbola','sepakbola2','sepakbola3','basket','basket1','basket2','basket3','basket4'));
    }

    public function sepak(){
        $sepakbola  = Sepakbola::all();
        return view('user.sepakbola',compact('sepakbola'));

    }
    public function basket(){
        $basket  = Bolabasket::all();

        return view('user.bolabasket',compact('basket'));
    }

public function youtube(){
    return view('user.youtube');
}

public function details($id){

    $sepakbola = Sepakbola::find($id);
    return view("user.detail.details", compact('sepakbola'));

}


}

