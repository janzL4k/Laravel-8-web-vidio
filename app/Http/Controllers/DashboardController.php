<?php

namespace App\Http\Controllers;

use App\Models\Sepakbola;
use App\Models\Bolabasket;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
  public function index(){
    $sepakbola= Sepakbola::count();
    $basket= Bolabasket::count();
      return view('admin.dashboard.index', compact('sepakbola','basket'));
  }
}
