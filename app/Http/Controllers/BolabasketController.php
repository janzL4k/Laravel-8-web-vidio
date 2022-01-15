<?php

namespace App\Http\Controllers;

use App\Models\Sepakbola;
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
        $basket = Bolabasket::all();
        return view("admin.upload_bolabasket.create", compact('basket'));
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
        $namevideo =time() . '.' .$video->getClientOriginalName();
        $path = public_path().'/uploads/';
        $video->move($path, $namevideo);

        $basket = Bolabasket::create([

            'judul_video' => $request->title,
            'deskripsi' => $request->deskripsi,
            'video' => $namevideo,
        ]);
        return redirect(route('upload.basket'))->with('success','Data berhasil ditambahkan');
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
        $basket = Bolabasket::find($id);
        return view("admin.upload_bolabasket.edit", compact('basket'));
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
        $basket = Bolabasket::find($request->id);
        if($request->has('inputvideo')){
            $basket->judul_video = $request->title;
            $basket->deskripsi = $request->deskripsi;

            $video =$request->video;

            $namevideo = time() . "_" . $video->getClientOriginalName();
            $path = public_path().'/uploads_sepakbola/';
            $video->move($path, $namevideo);
        }else{
            // $data['inputvideo'] = $sepakbola->namevideo;
            $basket->judul_video = $request->judul_video;
            $basket->deskripsi = $request->deskripsi;
        }
        $basket->update();
        return redirect(route('upload.sepakbola'))->with('success','Data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $basket= Bolabasket::find($id)->delete();
      return redirect()->back()->with('Berhasil Di Hapus');
    }
}
