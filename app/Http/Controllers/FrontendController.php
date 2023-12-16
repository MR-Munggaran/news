<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Artikel;
use App\Models\Slide;
use App\Models\Visitor;
use App\Models\Materi;


class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        $artikel = Artikel::all();
        $recentArtikels = Artikel::latest('created_at')->limit(5)->get();
        $slidepertama = Slide::first();
        $slidekedua = Slide::skip(1)->take(2)->get();
        $materi = Materi::latest()->limit(4)->get();
        $topArtikel = Artikel::orderByDesc('views')->skip(1)->take(5)->get();
        $topArtikelFirst = Artikel::orderByDesc('views')->first();
        $artikelterakhir = Artikel::latest()->skip(1)->take(5)->get();
        $artikelnanggung = Artikel::latest()->first();

        // $visitor = Visitor::hit();
        // dd($slidepertama, $slidekedua);
        return view('front.home')->with([
            'kategori' => $kategori,
            'artikel' => $artikel,
            'slidepertama' => $slidepertama,
            'slidekedua' => $slidekedua,
            'materi' => $materi,
            'recentArtikels' => $recentArtikels,
            'topArtikel' => $topArtikel,
            'topArtikelFirst' => $topArtikelFirst,
            'artikelterakhir' => $artikelterakhir,
            'artikelnanggung' => $artikelnanggung,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($slug)
    {
        $topArtikels = Artikel::where('slug', $slug)->increment('views');
        $artikel = Artikel::where('slug', $slug)->first();
        $kategori = Kategori::all();
        $relatedPosts = Artikel::relatedPosts($slug);
        $materi = Materi::latest()->limit(4)->get();
        return view('front.artikel.detail')->with([
            'artikel' => $artikel,
            'kategori' => $kategori,
            'related' => $relatedPosts,
            'materi'=> $materi
        ]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function video($slug)
    {
        $materi = Materi::all();
        $kategori = Kategori::all();
        $materidetail = Materi::where('slug', $slug)->first();
        return view('front.video.detail')->with([
            'materi' => $materi,
            'materidetail' => $materidetail,
            'kategori' => $kategori,
        ]);
    }

    public function kategori($id, Request $request)
    {
        $kategori = Kategori::all();
        $kategoriNew = Kategori::where('id', $id)->first();

        if (!$kategoriNew) {
            // Handle jika kategoriNew tidak ditemukan
            abort(404);
        }

        // Ambil data slide
        $slidepertama = Slide::first();
        $slidekedua = Slide::skip(1)->take(2)->get();
        $recentArtikels = Artikel::latest('created_at')->limit(5)->get();


        // Ambil artikel terbaru dalam kategori
        $recentKategori = Artikel::where('kategori_id', $kategoriNew->id)
            ->latest('created_at')
            ->limit(5)
            ->get();

        return view('front.kategori.detail')->with([
            'kategori' => $kategori,
            'slidepertama' => $slidepertama,
            'slidekedua' => $slidekedua,
            'recentKategori' => $recentKategori,
            'kategoriNew' => $kategoriNew,
            'recentArtikels'=>$recentArtikels
        ]);

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
