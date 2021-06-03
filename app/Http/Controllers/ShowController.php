<?php

namespace App\Http\Controllers;

use App\Models\show;
use Illuminate\Http\Request;

class ShowController extends Controller
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
        $show = $request->input();
        $request->validate([
            'name' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'theatre_id' => 'required',

        ]);


        $show = show::create([
            'name' => $request->name,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'theatre_id' => $request->theatre_id

        ]);
        return redirect('admindashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\show  $show
     * @return \Illuminate\Http\Response
     */
    public function show(show $show)
    {

        return view('showlist',['showlist'=> show::all()]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\show  $show
     * @return \Illuminate\Http\Response
     */
    public function edit(show $id)
    {
        return view('editshow',['editshow' => $id]);
       // return view('editshow',compact('theatrelist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\show  $show
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        show::where('id', $id)->update([
            'name' => $request->name,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'theatre_id' => $request->theatre_id,

        ]);
        return redirect('showlist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\show  $show
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $show = show::find($id);
        $show->delete();
        return redirect('showlist');
    }

    public function showbyid($id)
    {
        //dd($id);
       //return view('booknow',['show'=> show::where('theatre_id',$id)->first()]);

        $data = show::where('theatre_id',$id)->get();
        \Log::info($data);
        return response()->json(['data' => $data]);


    }

}
