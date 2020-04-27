<?php

namespace App\Http\Controllers;

use App\kurikulum;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_kurikulum = kurikulum::get();
        return view('kurikulum',compact('all_kurikulum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahkrklm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $kurikulum = new kurikulum();
        $kurikulum->nama_kurikulum = request('nama_kurikulum');
        $kurikulum->tahun = request('tahun');
        $kurikulum->save();
        return redirect('/kurikulum');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function show(kurikulum $kurikulum)
    {
        return view('tampilkurikulum',compact('kurikulum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function edit(kurikulum $kurikulum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kurikulum $kurikulum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function destroy(kurikulum $kurikulum)
    {
        $kurikulum->delete();
        return redirect ('\kurikulum');
    }
}
