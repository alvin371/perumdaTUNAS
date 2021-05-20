<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use File;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $berita = Berita::all();
        return view('berita/index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('berita/addBerita');
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
        $berita = new Berita;
        // dd($request);
        $berita->judul = $request->judul;
        $berita->deskripsi = $request->deskripsi;
        $berita->artikel = $request->artikel;
        $berita->gambar = $request->file('gambar')->store('GambarBerita','public');

        $berita->save();
        return redirect('admin/berita')->with('status', 'Berhasil Menambahkan Berita');
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
        $berita = Berita::find($id);
        return view('berita/edit', compact('berita'));
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
        $berita = Berita::find($id);

        $berita->judul = $request->judul ? $request->judul : $berita->judul;
        $berita->deskripsi = $request->deskripsi ? $request->deskripsi : $berita->deskripsi;
        $berita->artikel = $request->artikel ? $request->artikel : $berita->artikel;
        $berita->gambar = $request->file('gambar')->store('GambarBerita','public');

        $berita->save();
        return redirect('admin/berita')->with('status', 'Berita berhasil di edit!');
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
        $berita = Berita::findOrFail($id);
        $filename = $berita->gambar;
        File::delete($filename);
        $berita->delete();
        return redirect('admin/berita')->with('message','Berita berhasil di hapus!');
    }
}
