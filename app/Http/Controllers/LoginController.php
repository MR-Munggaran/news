<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::check()){
            return redirect('/dashboard');
        }else{
            return view('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if(Auth::Attempt($data)){
            return redirect('/dashboard');
        }else{
            Session::flash('error', 'Email atau Password salah');
            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}
