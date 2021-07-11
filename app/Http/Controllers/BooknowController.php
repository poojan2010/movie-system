<?php

namespace App\Http\Controllers;

use App\Models\booknow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        $email = Auth::user()->email;
//        dd($email);
        $seats=$request->input('seat');
        $seat=implode(",",$seats);
        $booknow = booknow::create([
            'm_id' => $request->m_id,
            'm_name' => $request->m_name,
            'user_id' => $request->session()->get('user'),
            'person_name' => $request->person_name,
            'seat_num'=>$seat,
            'theatre_id' => $request->theatre_id,
            'show_id' => $request->show_id,
            'numoftkt' => $request->numoftkt,
        ]);
        $data = [
            'subject' => "You booked movie ticket successfully",
            'email' => $email,
            'content' => $request->content
        ];


        Mail::send('email', $data, function($message) use ($data) {
            $message->to($data['email'])
                ->subject($data['subject']);
        });


        return redirect('showticket');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\booknow  $booknow
     * @return \Illuminate\Http\Response
     */
    public function show(booknow $booknow)
    {
        return view('bookinglist',['bookinglist'=> booknow::all()]);
    }
    public function show2()
    {
        $user_id = session()->get('user');
        $data = booknow::where( 'user_id' , $user_id)->get();
        return view('showticket' , ['data' => $data]);
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\booknow  $booknow
     * @return \Illuminate\Http\Response
     */
    public function destroy(booknow $booknow)
    {

    }
}
