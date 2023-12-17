<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Kategori;
// use RealRashid\SweetAlert\Facades\Alert;



class KategoriController extends Controller
{

    public function index()
    {
        $kategori = Kategori::all();
        return view('back.kategori.index')->with("kategori", $kategori);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.kategori.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required'
        ]);

        $kategori = Kategori::create([

            'nama' => $request->nama,
            'slug' => Str::slug($request->nama)
        ]);
        // Alert::success('Berhasil', 'Berhasil Disimpan');
        return redirect()->route('kategori.index');
        
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view('back.kategori.edit')->with("kategori", $kategori);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);
        $kategori = Kategori::findOrFail($id);
        $kategori->update($data);

        // Alert::info('Berhasil', 'Berhasil Diupdate');
        return redirect()->route('kategori.index');
    }

    public function destroy($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();    
        // Alert::warning('Berhasil', 'Berhasil Didelete');
        return redirect()->route('kategori.index')->with(['success'=>'Data berhasil dihapus']);
    }
}
