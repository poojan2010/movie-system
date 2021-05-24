<?php

namespace App\Http\Controllers;

use App\Models\booknow;
use Illuminate\Http\Request;

class BooknowController extends Controller
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
        return view('booknow');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $booknow = booknow::create([
            'm_id' => $request->m_id,
            'm_name' => $request->m_name,
            'person_name' => $request->person_name,
            'numoftkt' => $request->numoftkt,
        ]);
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\booknow  $booknow
     * @return \Illuminate\Http\Response
     */
    public function show(booknow $booknow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\booknow  $booknow
     * @return \Illuminate\Http\Response
     */
    public function edit(booknow $booknow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\booknow  $booknow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booknow $booknow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\booknow  $booknow
     * @return \Illuminate\Http\Response
     */
    public function destroy(booknow $booknow)
    {
        //
    }
}
