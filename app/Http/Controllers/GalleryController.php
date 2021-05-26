<?php

namespace App\Http\Controllers;
use App\Models\Layanan;
use App\Models\Highlights;
use App\Models\About;
use File;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $layanan = Layanan::all();
        $highlights = Highlights::all();
        $about = About::find(1);
        return view('gallery/index', compact('layanan', 'highlights', 'about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addLayanan()
    {
        //
        return view('gallery/addLayanan');
    }
    public function addHighlights()
    {
        //
        return view('gallery/addHighlights');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeLayanan(Request $request)
    {
        //
        $layanan = new Layanan();
        
        $layanan->gambar = $request->file('gambar')->store('Gallery','public');
        $layanan->caption = $request->caption;
        $layanan->deskripsi = $request->deskripsi;
        $layanan->save();

        return redirect('admin/gallery')->with('status', 'Berhasil Menambahkan Layanan');
    }
    public function storeHighglights(Request $request)
    {
        //
        $highlights = new Highlights();
        
        $highlights->gambar = $request->file('gambar')->store('Gallery','public');
        $highlights->judul = $request->judul;
        $highlights->subjudul = $request->subjudul;
        $highlights->save();

        return redirect('admin/gallery')->with('status', 'Berhasil Menambahkan Highlights');
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
    public function editAbout($id)
    {
        $about = About::find($id);
        return view('gallery/editAbout', compact('about'));
    }
    public function editHighlights($id)
    {
        $highlights = Highlights::find($id);
        return view('gallery/editHighlights', compact('highlights'));
    }
    public function editLayanan($id)
    {
        $layanan = Layanan::find($id);
        return view('gallery/editLayanan', compact('layanan'));
    }
    public function updateAbout(Request $request, $id)
    {
        //

        $about = About::find($id);

        $about->judul = $request->judul ? $request->judul : $about->judul;
        $about->artikel = $request->artikel ? $request->artikel : $about->artikel;
        $about->gambar = $request->file('gambar')->store('Gallery','public');
        
        $about->save();
        return redirect('admin/gallery')->with('status', 'About Us berhasil di edit!');
    }
    public function updateHighlights(Request $request, $id)
    {
        //

        $highlights = Highlights::find($id);

        $highlights->judul = $request->judul ? $request->judul : $highlights->judul;
        $highlights->subjudul = $request->subjudul ? $request->subjudul : $highlights->subjudul;
        $highlights->gambar = $request->file('gambar')->store('Gallery','public');

        
        $highlights->save();
        return redirect('admin/gallery')->with('status', 'Highlights berhasil di edit!');
    }
    public function updateLayanan(Request $request, $id)
    {
        //

        $layanan = Layanan::find($id);

        $layanan->caption = $request->caption ? $request->caption : $layanan->caption;
        $layanan->deskripsi = $request->deskripsi ? $request->deskripsi : $layanan->deskripsi;
        $layanan->gambar = $request->file('gambar')->store('Gallery','public');

        
        $layanan->save();
        return redirect('admin/gallery')->with('status', 'Layanan berhasil di edit!');
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
    public function deleteHighlights($id)
    {
        //
        $highlights = Highlights::findOrFail($id);
        $filename = $highlights->gambar;
        File::delete($filename);
        $highlights->delete();
        return redirect('admin/gallery')->with('message','Highlights berhasil di hapus!');
    }
    public function deleteLayanan($id)
    {
        $layanan = Layanan::findOrFail($id);
        $filename = $layanan->gambar;
        File::delete($filename);
        $layanan->delete();
        return redirect('admin/gallery')->with('message','Layanan berhasil di hapus!');
    }
}
