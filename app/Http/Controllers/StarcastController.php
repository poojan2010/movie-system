<?php

namespace App\Http\Controllers;

use App\Models\starcast;
use Illuminate\Http\Request;

class StarcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $starcastlist = starcast::get();
        return view('starcastlist',compact('starcastlist'));
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
       // var_dump($request);die;
        $starcast = $request->input();
        $request->validate([
            'name' => 'required',
            'bio' => 'required',
            'birth_date' => 'required',
            'worked_movie' => 'required',


        ]);

        $starcast = starcast::create([
            'name' => $request->name,
            'bio' => $request->bio,
            'birth_date' => $request->birth_date,
            'worked_movie' => $request->worked_movie,

        ]);
        return redirect('/starcastlist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\starcast  $starcast
     * @return \Illuminate\Http\Response
     */
    public function show(starcast $starcast)
    {
        return view('starcastlist',['starcastlist'=> starcast::paginate(4)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\starcast  $starcast
     * @return \Illuminate\Http\Response
     */
    public function edit(starcast $id)
    {
//        $editstarcast = starcast::findOrfail($id);
//        return view('editstarcast',compact('editstarcast'));
        return view('editstarcast',['editstarcast' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\starcast  $starcast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*$editstarcast = starcast::findOrfail($id);
        $editstarcast->name =$request->name;
        $editstarcast->bio =$request->bio;
        $editstarcast->birth_date =$request->birth_date;
        $editstarcast->worked_movie =$request->worked_movie;
        $editstarcast->save();
        return redirect('starcastlist');*/

        starcast::where('id', $id)->update([
            'name' => $request->name,
            'bio' => $request->bio,
            'birth_date' => $request->birth_date,
            'worked_movie' => $request->worked_movie,
        ]);
        return redirect('starcastlist');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\starcast  $starcast
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $starcast = starcast::findOrfail($id);
        $starcast->delete();
        return redirect('starcastlist');
    }

//    public function staradmindash()
//    {
//        return view('admindashboard',['starcast' => starcast::all()]);
//    }
}
