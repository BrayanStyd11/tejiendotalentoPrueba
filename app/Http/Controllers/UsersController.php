<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            return view('dashboard/index');
        }else{
            return view('users/login');
        }
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $credentials = $request->only('email','password');
        
        if (Auth::attempt($credentials)) {
            return view('dashboard/index');
        }

        return redirect("/")->withSuccess('Los datos introducidos no son correctos');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
      }
}
