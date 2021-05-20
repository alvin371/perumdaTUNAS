<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use File;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $artikel = Artikel::all();
        return view('artikel/index', compact('artikel'));
    }
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('artikel/addArtikel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $artikel = new Artikel;
        // dd($request);
        $artikel->judul = $request->judul;
        $artikel->deskripsi = $request->deskripsi;
        $artikel->artikel = $request->artikel;
        $artikel->gambar = $request->file('gambar')->store('GambarArtikel','public');

        $artikel->save();
        return redirect('admin/artikel')->with('status', 'Berhasil Menambahkan Artikel');
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
        $artikel = Artikel::find($id);
        return view('artikel/edit', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
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
        $artikel = Artikel::find($id);

        $artikel->judul = $request->judul ? $request->judul : $artikel->judul;
        $artikel->deskripsi = $request->deskripsi ? $request->deskripsi : $artikel->deskripsi;
        $artikel->artikel = $request->artikel ? $request->artikel : $artikel->artikel;
        $artikel->gambar = $request->file('gambar')->store('GambarArtikel','public');

        $artikel->save();
        return redirect('admin/artikel')->with('status', 'Artikel berhasil di edit!');
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
        $artikel = Artikel::findOrFail($id);
        $filename = $artikel->gambar;
        File::delete($filename);
        $artikel->delete();
        return redirect('admin/artikel')->with('status','Artikel berhasil di hapus!');
    }
}
