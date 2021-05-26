<?php

namespace App\Http\Controllers;
use App\Models\Pengumuman;
use App\Models\Produk;
use App\Models\Layanan;
use App\Models\Highlights;
use App\Models\About;
use App\Models\profile;
use App\Models\Berita;
use App\Models\direktur;
use App\Models\Artikel;
use App\Models\team;
use Illuminate\Http\Request;

class HomeViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $highlights = Highlights::all();
        $about = About::find(1);
        $berita = Berita::all();
        $pengumuman = Pengumuman::all();
        $artikel = Artikel::all();
        return view('homeView/index', compact('highlights','about','berita','pengumuman', 'artikel'));

    }
    public function profile()
    {
        $direktur = direktur::find(1);
        $profile = profile::find(1);
        $team = team::all();
        return view('homeView/profile', compact('direktur','profile','team'));
    }
    public function berita()
    {
        $berita = Berita::all();
        return view('homeView/berita', compact('berita'));
    }
    public function detailBerita($id)
    {
        $berita = Berita::find($id);
        return view('homeView/detailBerita', compact('berita'));
    }
    public function pengumuman()
    {
        $pengumuman = Pengumuman::all();
        return view('homeView/pengumuman', compact('pengumuman'));
    }
    public function detailPengumuman($id)
    {
        $pengumuman = Pengumuman::find($id);
        return view('homeView/detailPengumuman', compact('pengumuman'));
    }
    public function artikel()
    {
        $artikel = Artikel::all();
        return view('homeView/artikel', compact('artikel'));
    }
    public function detailArtikel($id)
    {
        $artikel = Artikel::find($id);
        return view('homeView/detailArtikel', compact('artikel'));
    }
    public function layanan()
    {
        $layanan = Layanan::all();
        return view('homeView/layanan', compact('layanan'));
    }
    public function produk()
    {
        $produk = Produk::all();
        return view('homeView/produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
