<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\movie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       /* $request->validate([
           'email' => 'required',
           'password' => 'required'
        ]);
        $data = $request->only('email' , 'password');

        if(Auth::guard('admin')->attempt($data))
        {
//            dd($request);

            if($data['email'] == 'admin@gmail.com')
            {
                return redirect('/admindashboard');
            }
            else
            {
                return redirect('/home');
            }
        }
        else
        {
            echo "<script>alert('invalid Email and Password')</script>";
            return redirect('/');
        }*/



        $input = $request->all();

        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where("email",$request->email)->get();

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            $request->session()->regenerate();
            if($input['email']=="admin@gmail.com" && $input['password']=="admin123")
            {
                return redirect('/admindashboard');
            }
            else
            {

                $request->session()->put("user",$user[0]->id);
                return redirect('/home');
            }
        }
        else
        {
            return redirect('/')->with('error', 'Email/Password are Invalid.');
        }


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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    public function logout()
    {
        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
