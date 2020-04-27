<?php

namespace App\Http\Controllers;

use App\fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_fruit = fruit::get();
	    return view('fruit',compact('all_fruit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahbuah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fruit = new fruit();
        $fruit->name = request('name');
        $fruit->weight = request('weight');
        $fruit->color = request('color');
        $fruit->poisonous = request('poisonous');
        $fruit->date_of_harvest = request('date_of_harvest');
        $fruit->save();
        return redirect('/fruit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function show(fruit $fruit)
    {
        return view('tampilbuah',compact('fruit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function edit(fruit $fruit)
    {
        return view('editfruit',compact('fruit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fruit $fruit)
    {
        $fruit->name = $request->name;
        $fruit->weight = $request->weight;
        $fruit->color = $request->color;
        $fruit->poisonous = $request->poisonous;
        $fruit->date_of_harvest = $request->date_of_harvest;
        $fruit->save();
        return redirect('/fruit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function destroy(fruit $fruit)
    {
        $fruit->delete();
	    return redirect('/fruit');
    }
}
