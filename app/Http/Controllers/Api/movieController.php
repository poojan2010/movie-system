<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\movie;

class movieController extends Controller
{
    public function index()
    {
        $data = movie::get();

        $response['status'] = 'success';
        $response['msg'] = 'Show Data';
        $response['data'] = $data;

        return $response;
    }
    public function store(Request $request)
    {
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

        $response['status'] = 'success';
        $response['data'] = $movie;

        return $response;
    }

    public function update(Request $request, $m_id)
    {
        if(is_null($request->file))
        {
            movie::where('m_id', $m_id)->update([
                'title' => $request->title,
                'overview' => $request->overview,
                'release_year' => $request->release_year,
                'runtime' => $request->runtime,
                'cast_member' => $request->cast_member,
            ]);

        }
        else
        {
            $request->file('image')->move('Uploads', $request->file('image')->getClientOriginalName());
            movie::where('m_id', $m_id)->update([
                'title' => $request->title,
                'overview' => $request->overview,
                'image' => $request->file('image')->getClientOriginalName(),
                'release_year' => $request->release_year,
                'runtime' => $request->runtime,
                'cast_member' => $request->cast_member,

            ]);

        }

        $response['status'] = 'success';
        $response['data'] = [];

        return $response;

    }

    public function show()
    {
        /*return view('movielist',['movielist'=> movie::paginate(5)]);*/

        $movielist = movie::paginate(5);

        $response['status'] = 'Success';
        $response['message'] = 'Show';
        $response['data'] = $movielist;

        return $response;
    }

    public function moviedetails($m_id)
    {
        /*return view('moviedetails',['movielist'=> movie::where('m_id',$m_id)->first()]);*/

        $moviedetails = movie::where('m_id',$m_id)->first();

        $response['status'] = 'Success';
        $response['message'] = 'Show';
        $response['data'] = $moviedetails;

        return $response;
    }
    public function movieshow()
    {
       /* return view('home',['movielist'=> movie::latest()->get()]);*/

        $movie = movie::get();

        $response['status'] = 'Success';
        $response['message'] = 'Show';
        $response['data'] = $movie;

        return $response;
    }



    public function destroy($m_id)
    {
        $movie = movie::find($m_id);
        $movie->delete();

        $response['status'] = 'success';
        $response['data'] = [];
    }

}


