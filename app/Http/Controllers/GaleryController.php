<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.galery',[
            'title'  => 'Galery',
            'Galery' => Galery::all(),
            'jmlGalery' => Galery::count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validated = $request->validate([
            'title' => 'required',
            'gambar.*'=> 'image|file|max:1024|required'
        ]);

        
        if($request->hasfile('gambar')){
            foreach ($request->file('gambar') as $img) {
                # code...
                $image_name = time().'-'.md5(rand(1000, 10000));
                $ext        = strtolower($img->getClientOriginalExtension());
                $imgFullName= $image_name.'.'.$ext;
                $path       = 'upload-images/galery/';

                $images = $path.$imgFullName; //Untuk Di Isi ke Fiel Image pada Tabel
                $img->storeAs($path,$imgFullName); 

                Galery::create([
                    'image' => $images,
                    'title' => $request->title
                ]);
            }            
        } 

        return redirect('/galery')->with('succes','Sukses Tambah Galery !!!');
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
        $hapus = Galery::find($id);
        Storage::delete($hapus->image);
        $hapus->delete();

        return redirect('/galery')->with('succes','Berhasil Menghapus Gambar !!!');
    }
}
