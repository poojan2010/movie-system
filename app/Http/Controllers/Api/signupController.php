<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class signupController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::guard('admin')->attempt($data))
        {
           /* if($data['email'] == "admin@gmail.com" && $data['password'] == "admin123")
            {*/
                $response['status'] = 'Success';
                $response['message'] = 'login successfully';
                $response['data'] = $data;
                return $response;
            /*}
            else{
                echo "Nahiii....";
            }*/

        }
        else
        {
            $response['status'] = 'failed';
            $response['message'] = 'login Invalid';
            return $response;
        }

    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|string|same:password|min:8',

        ]);

        if($request['password'] == $request['confirm_password'])
        {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $response['status'] = 'Success';
            $response['message'] = 'Signup Successfully...';
            $response['data'] = $user;
            return $response;
        }
        else
        {
            $response['status'] = 'Failed';
            $response['message'] = 'Enter the Valid Input..';
            return $response;
        }

    }
}
