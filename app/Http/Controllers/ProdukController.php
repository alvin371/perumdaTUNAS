<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use File;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produk = Produk::all();
        return view('produk/index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('produk/addProduk');
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
        $produk = new Produk;
        // dd($request);
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->satuan = $request->satuan;
        $produk->deskripsi = $request->deskripsi;
        $produk->gambar = $request->file('gambar')->store('Produk','public');

        $produk->save();
        return redirect('admin/produk')->with('status', 'Berhasil Menambahkan produk');
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
        $produk = Produk::find($id);

        return view('produk/editProduk', compact('produk'));
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
        $produk = Produk::find($id);
        // dd($request);
        $produk->nama = $request->nama ? $request->nama : $produk->nama;
        $produk->harga = $request->harga ? $request->harga : $produk->harga;
        $produk->satuan = $request->satuan ? $request->satuan : $produk->satuan;
        $produk->deskripsi = $request->deskripsi ? $request->deskripsi : $produk->deskripsi;
        $produk->gambar = $request->file('gambar')->store('Produk','public');

        $produk->save();
        return redirect('admin/produk')->with('status', 'Produk Berhasil di Update');
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
        $produk = Produk::findOrFail($id);
        $filename = $produk->gambar;
        File::delete($filename);
        $produk->delete();
        return redirect('admin/produk')->with('message','Produk berhasil di hapus!');
    }
}
