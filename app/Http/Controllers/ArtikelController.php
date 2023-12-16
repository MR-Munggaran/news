<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
// use RealRashid\SweetAlert\Facades\Alert;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::paginate(5);
        return view('back.artikel.index')->with('artikel', $artikel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('back.artikel.create')->with('kategori',$kategori);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->gambar);
        $this->validate($request,[
            'judul' => 'required',

        ]);
        $artikel = new Artikel;
        $artikel->slug = Str::slug($request->judul);
        $artikel->gambar = $request->file('gambar')->store('artikel');
        $artikel->user_id = Auth::id();
        // $artikel->is_active= 1;
        $artikel->views = 0;

        // Isi sisa atribut menggunakan fillable
        $artikel->fill($request->except('gambar')); // Jangan sertakan 'gambar' di sini karena sudah diatur sebelumnya

        $artikel->save();
        // Alert::success('Berhasil', 'Berhasil Disimpan');
        return redirect()->route('artikel.index');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::find($id);
        $kategori = Kategori::all();
        return view('back.artikel.edit')->with(['artikel' => $artikel, 'kategori' => $kategori]);
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
        // $this->validate($request,[
        //     'judul' => 'required',

        // ]);
        if(empty($request->file('gambar'))){

            $artikel = Artikel::find($id);
            $artikel->update([
                'judul' => $request->judul,
                'body' => $request->body,
                'kategori_id' => $request->kategori_id,
                'is_active' => $request->is_active,
                'slug' => Str::slug($request->judul),
                'user_id' => Auth::id(),
            ]); 
            // Alert::info('Berhasil', 'Berhasil Diupdate');
            return redirect()->route('artikel.index');
        }else{
            $artikel = Artikel::find($id);
            Storage::delete($artikel->gambar);
            $artikel->update([
                'judul' => $request->judul,
                'body' => $request->body,
                'kategori_id' => $request->kategori_id,
                'is_active' => $request->is_active,
                'slug' => Str::slug($request->judul),
                'user_id' => Auth::id(),
                'gambar' => $request->file('gambar')->store('artikel')
            ]);

            $artikel->fill($request->except('gambar')); // Jangan sertakan 'gambar' di sini karena sudah diatur sebelumnya
            // Alert::info('Berhasil', 'Berhasil Diupdate');
            return redirect()->route('artikel.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        Storage::delete($artikel->gambar);
        $artikel->delete();
        // Alert::warning('Berhasil', 'Berhasil Didelete');    
        return redirect()->route('artikel.index');
    }
}
