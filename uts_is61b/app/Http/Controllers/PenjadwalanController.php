<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjadwalan;

class PenjadwalanController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pj    = Penjadwalan::all();
        return view('penjadwalan.index',compact('nomor','pj'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjadwalan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $pj = new Penjadwalan;
        $pj->kode = $request->kode;
        $pj->kelas = $request->kelas;
        $pj->mk = $request->mk;
        $pj->hari = $request->hari;
        $pj->jam = $request->jam;
        $pj->dosen = $request->dosen;
        $pj->save();

        return redirect('/penjadwalan/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pj = Penjadwalan::find($id);
            return view('penjadwalan.edit', compact('pj'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $pj = Penjadwalan::find($id);
         $pj->kode = $request->kode;
         $pj->jurusan = $request->nama;
         $pj->save();

         return redirect('/penjadwalan/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $jur = Jurusan::find($id);
        // $jur->delete();

        // return redirect('/jurusan/');
    }
}
