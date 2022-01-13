<?php

namespace App\Http\Controllers;

// use App\Models\Sepakbola;
use App\Models\Bolabasket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BolabasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $basket = Bolabasket::all();
        return view("admin.upload_bolabasket.index", compact('basket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("admin.upload_bolabasket.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $video = $request->file('inputvideo');
        $namevideo =time() . "_" .$video->getClientOriginalName();
        $path = public_path().'/uploads/';
        $video->move($path, $namevideo);

        $basket = Bolabasket::create([

            'judul_video' => $request->title,
            'deskripsi' => $request->deskripsi,
            'video' => $namevideo,
        ]);

        return redirect(route('upload.sepakbola'))->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
