<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Materi;
use App\Models\Visitor;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriCount = Kategori::count();
        $artikelCount = Artikel::count();
        $materiCount = Materi::count();
        $visitorCount = Visitor::count();
        $artikel = Artikel::orderBy('views', 'desc')->take(5)->get();;
        return view('back.dashboard')->with([
            'materiCount' => $materiCount,
            'artikelCount' => $artikelCount,
            'kategoriCount' => $kategoriCount,
            'visitorCount' => $visitorCount,
            'artikel' => $artikel
        ]);
    }

    // public function side() {
    //     $userComponent = User::all();
    //     return view('includes.sidebar')->with('userComponent', $userComponent);
    // }

}
