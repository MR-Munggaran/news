<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('back.profile.index')->with('user', $user);
    }

    public function create()
    {
        return view('back.artikel.buat');
    }
}
