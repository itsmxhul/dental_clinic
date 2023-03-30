<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\navbar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\session;

class AuthController extends Controller
{
    public function registration(){
        $navbars = navbar::all();
        return view('registration',compact('navbars'));
    }

    public function valid_register(Request $request){
        $request->validate([
            'name' => 'required',
            'email'        =>   'required|email|unique:users',
            'password'     =>   'required|min:3'
        ]);
        $data = $request->all();
    // dd($data);
        User::create([
            'name'  =>  $data['name'],
            'email' =>  $data['email'],
            'password' => Hash::make($data['password'])
        ]);
            return redirect('login');
    }


    public function login(){
        $navbars = navbar::all();
        return view('login',compact('navbars')  );
    }

    Public function valid_login(Request $request){
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);
        $credentials = $request->only('email', 'password');

        // dd(Auth::attempt($credentials));

        if(Auth::attempt($credentials))
        {
            if(Auth::user()->role_id==1){
                return redirect('dashboard');
            }
            else
            {
            return redirect('index');
            }
        } else
        {
            return redirect('login');
        }
    }

    public function logout() {
        session::flush();
        Auth::logout();
        return redirect('login');
      }

}
