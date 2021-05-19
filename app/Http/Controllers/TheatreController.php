<?php

namespace App\Http\Controllers;

use App\Models\theatre;
use Illuminate\Http\Request;

class TheatreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $theatre = $request->input();
        $request->validate([
            'name' => 'required',
            'area' => 'required',
            'city' => 'required',

        ]);


        $theatre = theatre::create([
            'name' => $request->name,
            'area' => $request->area,
            'city' => $request->city,

        ]);
        return redirect('theatrelist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\theatre  $theatre
     * @return \Illuminate\Http\Response
     */
    public function show(theatre $theatre)
    {
        return view('theatrelist',['theatrelist'=> theatre::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\theatre  $theatre
     * @return \Illuminate\Http\Response
     */
    public function edit(theatre $theatre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\theatre  $theatre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, theatre $theatre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\theatre  $theatre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $theatre = theatre::findOrfail($id);
        $theatre->delete();
        return redirect('theatrelist');
    }
}
