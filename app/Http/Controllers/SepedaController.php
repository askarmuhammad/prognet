<?php

namespace App\Http\Controllers;

use App\sepeda;
use Illuminate\Http\Request;

class SepedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_sepeda = sepeda::get();
        return view('sepeda',compact('all_sepeda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $sepeda = new sepeda();
        $sepeda->nama = request('nama');
        $sepeda->jenis = request('jenis');
        $sepeda->merk = request('merk');
        $sepeda->save();
        return redirect('/sepeda');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sepeda  $sepeda
     * @return \Illuminate\Http\Response
     */
    public function show(sepeda $sepeda)
    {
       return view('tampilkan',compact('sepeda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sepeda  $sepeda
     * @return \Illuminate\Http\Response
     */

    public function edit(sepeda $sepeda)
    {
        return view('editsepeda',compact('sepeda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sepeda  $sepeda
     * @return \Illuminate\Http\Response
     */
    public function update(sepeda $sepeda)
    {
        $sepeda->nama = request('nama');
        $sepeda->jenis = request('jenis');
        $sepeda->merk = request('merk');
        $sepeda->save();
        return redirect('/sepeda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sepeda  $sepeda
     * @return \Illuminate\Http\Response
     */
    public function destroy(sepeda $sepeda)
    {
        $sepeda->delete();
        return redirect ('/sepeda');
    }
}
