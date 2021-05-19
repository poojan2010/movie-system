<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//      dd("hello");
        $movielist = movie::get();
//      dd($movielist);
        return view('movielist',compact('movielist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
       /* $movie = new movie();
        $movie->title =$request->title;
        $movie->overview =$request->overview;
        $filename = time().'.'.$request->image->extension();
        $request->image->move(public_path('Uploads'),$filename);
        $movie->image =$filename;
        $movie->release_year =$request->release_year;
        $movie->runtime =$request->runtime;
        $movie->cast_member =$request->cast_member;
        $movie->save();
        return redirect('movielist');*/

        $movie = $request->input();
        $request->validate([
            'title' => 'required',
            'overview' => 'required',
            'image' => 'required',
            'release_year' => 'required',
            'runtime' => 'required',
            'cast_member' => 'required',

        ]);


        $request->file('image')->move('Uploads',$request->file('image')->getClientOriginalName());
        $movie = movie::create([
            'title' => $request->title,
            'overview' => $request->overview,
            'image' => $request->file('image')->getClientOriginalName(),
            'release_year' => $request->release_year,
            'runtime' => $request->runtime,
            'cast_member' => $request->cast_member,

        ]);
        return redirect('movielist');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('movielist',['movielist'=> movie::all()]);
    }
    public function usershow()
    {
        return view('home',['movielist'=> movie::all()]);
    }
    public function moviedetails($id)
    {
        return view('moviedetails',['movielist'=> movie::where('id',$id)->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editmovie = movie::findOrfail($id);
        return view('editmovie',compact('editmovie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(is_null($request->file))
        {
            $editmovie = movie::findOrfail($id);
            $editmovie->title =$request->title;
            $editmovie->overview =$request->overview;
            $editmovie->release_year =$request->release_year;
            $editmovie->runtime =$request->runtime;
            $editmovie->cast_member =$request->cast_member;
            $editmovie->save();
            return redirect('movielist');
        }
        else
        {
            $editmovie = movie::findOrfail($id);
            $editmovie->title =$request->title;
            $editmovie->overview =$request->overview;
            $filename = time().'.'.$request->image->extension();
            $request->image->move(public_path('Uploads'),$filename);
            $editmovie->image =$filename;
            $editmovie->release_year =$request->release_year;
            $editmovie->runtime =$request->runtime;
            $editmovie->cast_member =$request->cast_member;
            $editmovie->save();
            return redirect('movielist');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = movie::findOrfail($id);
        $movie->delete();
        return redirect('movielist');
    }
}
