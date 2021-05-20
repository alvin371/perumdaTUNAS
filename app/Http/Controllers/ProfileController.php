<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;
use App\Models\team;
use App\Models\direktur;
use File;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $profile = profile::find(1);
        $team = team::all();
        $direktur = direktur::find(1);
        return view('profile/index', compact('profile','team','direktur'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createTeam()
    {
        //tambah team, edit view Team
        return view('artikel/addTeam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeTeam(Request $request)
    {
        //kirim data ke database team
        // edit data
        $team = new team;
        // dd($request);
        $team->nama = $request->nama;
        $team->jabatan = $request->jabatan;
        $team->twitter = $request->twitter;
        $team->facebook = $request->facebook;
        $team->gmail = $request->gmail;
        $team->linkedin = $request->linkedin;
        $team->gambar = $request->file('gambar')->store('TeamPhoto','public');

        $team->save();
        return redirect('admin/profile')->with('status', 'Berhasil Menambahkan Team');
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
    public function editDirektur($id)
    {
        //
        $direktur = direktur::find($id);
        return view('profile/editDirektur', compact('direktur'));
    }
    public function editTeam($id)
    {
        //
        $team = team::find($id);
        return view('profile/editTeam', compact('team'));
    }
    public function editProfile($id)
    {
        //
        $profile = profile::find($id);
        return view('profile/editProfile', compact('profile'));
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
    public function direkturUpdate(Request $request, $id)
    {
        //
        $direktur = direktur::find($id);

        $direktur->nama = $request->nama ? $request->nama : $direktur->nama;
        $direktur->artikel = $request->artikel ? $request->artikel : $direktur->artikel;
        $direktur->jabatan = $request->jabatan ? $request->jabatan : $direktur->jabatan;
        $direktur->photo = $request->file('photo')->store('ProfilePhoto','public');

        $direktur->save();
        return redirect('admin/profile')->with('status', 'direktur berhasil di edit!');
    }
    public function teamUpdate(Request $request, $id)
    {
        //
        $team = team::find($id);

        // Data Harus diganti
        $team->nama = $request->nama ? $request->nama : $team->nama;
        $team->jabatan = $request->jabatan ? $request->jabatan : $team->jabatan;
        $team->twitter = $request->twitter ? $request->twitter : $team->twitter;
        $team->facebook = $request->facebook ? $request->facebook : $team->facebook;
        $team->gmail = $request->gmail ? $request->gmail : $team->gmail;
        $team->linkedin = $request->linkedin ? $request->linkedin : $team->linkedin;
        $team->gambar = $request->file('gambar')->store('TeamPhoto','public');

        $team->save();
        return redirect('admin/profile')->with('status', 'Team berhasil di edit!');
    }
    public function profileUpdate(Request $request, $id)
    {
        //
        $profile = profile::find($id);

        // Data Harus diganti
        $profile->nama = $request->nama ? $request->nama : $profile->nama;
        $profile->artikel = $request->artikel ? $request->artikel : $profile->artikel;
        $profile->jabatan = $request->jabatan ? $request->jabatan : $profile->jabatan;
        $profile->photo = $request->file('photo')->store('ProfilePhoto','public');

        $profile->save();
        return redirect('admin/profile')->with('status', 'profile berhasil di edit!');
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
