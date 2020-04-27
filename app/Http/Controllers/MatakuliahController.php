<?php

namespace App\Http\Controllers;

use App\matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_matakuliah = matakuliah::get();
        return view('matakuliah',compact('all_matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahmk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $matakuliah = new matakuliah();
        $matakuliah->kode_mk = request('kode_mk');
        $matakuliah->nama_mk = request('nama_mk');
        $matakuliah->sks = request('sks');
        $matakuliah->semester = request('semester');
        $matakuliah->id_kurikulum = request('id_kurikulum');
        $matakuliah->id_dosen = request('id_dosen');
        $matakuliah->id_prodi = request('id_prodi');
        $matakuliah->save();
        return redirect('/matakuliah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function show(matakuliah $matakuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(matakuliah $matakuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, matakuliah $matakuliah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy(matakuliah $matakuliah)
    {
        //
    }
}
