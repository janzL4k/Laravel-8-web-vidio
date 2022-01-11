<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sepakbolaController extends Controller
{
    public function show(){
        return view("admin.upload_sepakbola.show");
    }
    public function index(){
        return view("admin.upload_sepakbola.index");
    }
    public function edit(){
        return view("admin.upload_sepakbola.edit");
    }
}
