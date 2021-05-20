<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pengumuman;
use File;
use Illuminate\Support\Facades\DB;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pengumuman = Pengumuman::all();
        return view('pengumuman/index', compact('pengumuman'));
    }
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pengumuman/addPengumuman');
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
        $pengumuman = new Pengumuman;
        $pengumuman->judul = $request->judul;
        $pengumuman->kategori = $request->kategori;
        $pengumuman->deskripsi = $request->deskripsi;
        $pengumuman->gambar = $request->file('gambar')->store('GambarPengumuman','public');

        $pengumuman->save();
        return redirect('admin/pengumuman')->with('status', 'Berhasil Menambahkan Pengumuman');
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
        $pengumuman = Pengumuman::find($id);
        return view('pengumuman/edit', compact('pengumuman'));
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
        $pengumuman = Pengumuman::find($id);

        $pengumuman->judul = $request->judul ? $request->judul : $pengumuman->judul;
        $pengumuman->kategori = $request->kategori ? $request->kategori : $pengumuman->kategori;
        $pengumuman->deskripsi = $request->deskripsi ? $request->deskripsi : $pengumuman->deskripsi;
        $pengumuman->gambar = $request->file('gambar')->store('GambarPengumuman','public');

        $pengumuman->save();
        return redirect('admin/pengumuman')->with('status', 'Pengumuman berhasil di edit!');
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
        $pengumuman = Pengumuman::findOrFail($id);
        $filename = $pengumuman->gambar;
        File::delete($filename);
        $pengumuman->delete();
        return redirect('admin/pengumuman')->with('message','Pengumuman berhasil di hapus!');
    }
}
