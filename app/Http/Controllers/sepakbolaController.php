<?php

namespace App\Http\Controllers;

use App\Models\Sepakbola;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class SepakbolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sepakbola = Sepakbola::all();
        return view("admin.upload_sepakbola.index", compact('sepakbola'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.upload_sepakbola.create");
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
        $path = public_path().'/uploads_sepakbola/';
        $video->move($path, $namevideo);

        $sepakbola = Sepakbola::create([

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
        $sepakbola = Sepakbola::find($id);
        return view("admin.upload_sepakbola.edit", compact('sepakbola'));
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
        $sepakbola = Sepakbola::find($request->id);
        if($request->has('inputvideo')){
            $sepakbola->judul_video = $request->title;
            $sepakbola->deskripsi = $request->deskripsi;

            $video =$request->video;

            $namevideo = time() . "_" . $video->getClientOriginalName();
            $path = public_path().'/uploads_sepakbola/';
            $video->move($path, $namevideo);
        }else{
            // $data['inputvideo'] = $sepakbola->namevideo;
            $sepakbola->judul_video = $request->judul_video;
            $sepakbola->deskripsi = $request->deskripsi;
        }
        $sepakbola->update();
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
        $sepakbola = Sepakbola::find($id)->delete();
        return redirect()->back()->with('success','Data berhasil dihapus');
    }
}
