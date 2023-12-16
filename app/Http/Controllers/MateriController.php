<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;
use App\Models\Playlist;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

// use RealRashid\SweetAlert\Facades\Alert;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materi = Materi::all();
        return view('back.materi.index')->with('materi', $materi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.materi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul_materi' => 'required',

        ]);
        $materi = new Materi;
        $materi->slug = Str::slug($request->judul_materi);
        $materi->gambar_materi = $request->file('gambar_materi')->store('materi');

        // Isi sisa atribut menggunakan fillable
        $materi->fill($request->except('gambar_materi')); // Jangan sertakan 'gambar' di sini karena sudah diatur sebelumnya

        $materi->save();
        // Alert::success('Berhasil', 'Berhasil Disimpan');
        return redirect()->route('materi.index');
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
        $materi = Materi::find($id);
        return view('back.materi.edit')->with([
            'materi' => $materi,
        ]);
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
        if(empty($request->file('gambar_materi'))){

            $materi = Materi::find($id);
            $materi->update([
                'judul_materi' => $request->judul_materi,
                'deskripsi' => $request->deskripsi,
                'is_active' => $request->is_active,
                'link' => $request->link,
                'slug' => Str::slug($request->judul_materi),
            ]); 
            // Alert::info('Berhasil', 'Berhasil Diupdate');
            return redirect()->route('materi.index');
        }else{
            $materi = Materi::find($id);
            Storage::delete($materi->gambar_materi);
            $materi->update([
                'judul_materi' => $request->judul_materi,
                'deskripsi' => $request->deskripsi,
                'is_active' => $request->is_active,
                'link' => $request->link,
                'slug' => Str::slug($request->judul_materi),
                'gambar_materi' => $request->file('gambar_materi')->store('materi')
            ]);

            $materi->fill($request->except('gambar_materi')); // Jangan sertakan 'gambar' di sini karena sudah diatur sebelumnya
            // Alert::info('Berhasil', 'Berhasil Diupdate');
            return redirect()->route('materi.index');
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
        $materi = Materi::find($id);
        Storage::delete($materi->gambar_materi);
        $materi->delete();    
        // Alert::warning('Berhasil', 'Berhasil Didelete');
        return redirect()->route('materi.index');
    }
}
