<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Artikel;
use Illuminate\Support\Facades\Storage;
// use RealRashid\SweetAlert\Facades\Alert;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide  = Slide::all();
        $artikel  = Artikel::all();
        return view('back.slide.index')->with([
            'slide' => $slide,
            'artikel' => $artikel,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artikel  = Artikel::all();
        return view('back.slide.create')->with('artikel', $artikel);
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
            'judul_slide' => 'required',
            'gambar' => 'mimes:png,jpg,jpeg,gif,bmp',

        ]);
        if(!empty($request->file('gambar'))){
            $data = new Slide();
            $data->judul_slide = $request->judul_slide;
            $data->link = '-';
            $data->gambar = $request->file('gambar')->store('slide');
            $data->status = $request->status;
            $data->artikel_id = $request->artikel_id;
            $data->save();
            $data->fill($request->except('gambar')); // Jangan sertakan 'gambar' di sini karena sudah diatur sebelumnya
            // Alert::info('Berhasil', 'Berhasil Diupdate');
            return redirect()->route('slide.index');
        }else{
            $data = new Slide();
            $data->judul_slide = $request->judul_slide;
            $data->link = '-';
            $data->status = $request->status;
            $data->artikel_id = $request->artikel_id;
            $data->save();
            // Alert::info('Berhasil', 'Berhasil Diupdate');
            return redirect()->route('slide.index');
        }
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
        $slide = Slide::find($id);
        if(!$slide){
            // Alert::error('Gagal', 'Data Tidak diTemukan');
            return redirect()->back();
        }
        Storage::delete($slide->gambar);
        $slide->delete();    
        // Alert::warning('Berhasil', 'Berhasil Didelete');
        return redirect()->route('slide.index');
    }
}
