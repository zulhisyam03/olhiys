<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $jmlBerita  = Berita::count();

        return view('pages.berita', [            
            "title"     =>  "Berita",
            "dataBerita"=>  Berita::orderBy('created_at','DESC')->paginate(10),
            "cekBerita" =>  $jmlBerita
        ]);
    }

    public function findBerita(Request $search){
        $find = $search->find;
        $cekData = Berita::where('title','like','%'.$find.'%')->get();
        
        return view('pages.berita',[
            'title'     => 'Berita',
            'dataBerita'=> Berita::where('title','like','%'.$find.'%')->get(),
            'cekBerita'      => count($cekData)
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
        return view('pages.createBerita');
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
        $validated = $request->validate([
            'title' => 'required|min:5',
            'slug' =>  'min:5|unique:beritas',
            'image' => 'image|file|max:1024|nullable',
            'body' => 'required',
            'author' => 'required'
        ]);

        //Membuat Slug Ketika Di Inputkan Ke Database
        $validated['slug'] = Str::slug($request->title,'-'); 
        
        if($request->file('image')){
            // ===== JIKA INGIN MENGUBAH NAMA FILE GAMBAR SESUAI DENGAN SLUG =====
            // $new_nameFile = $validated['slug'].'.'.$validated['image']->getClientOriginalExtension();
            // $validated['image'] = $request->file('image')->storeAs('upload-images', $new_nameFile);
            //============================= END ========================
            
            $validated['image'] = $request->file('image')->store('upload-images');
        }
        
        Berita::create($validated);
        return redirect('/berita')->with('succes','Sukses Posting Berita Baru !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        return view('pages.news', [
            "title"     =>  "Berita",
            "posting"   =>  Berita::where('slug',$slug)->first()
        ]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //
        return view('pages.editBerita',[
            'berita' => Berita::where('slug',$slug)->first()
        ] );

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

        $validated = $request->validate([
            'title' => 'required|min:5',
            'slug' =>  'min:5|unique:beritas',
            'image' => 'image|file|max:1024',
            'body' => 'required',
            'author' => 'required'
        ]);

        //Membuat Slug Ketika Di Inputkan Ke Database
        $validated['slug'] = Str::slug($request->title,'-');
        
        if($request->file('image')){
            if ($request->oldImage) {
                # code...
                Storage::delete($request->oldImage);
            }
            
            $validated['image'] = $request->file('image')->store('upload-images');
        }

        $berita =Berita::find($id);
        $input = ($validated);
        $berita->update($input);
        return redirect('/berita')->with('succes','Sukses Ubah Data !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        //
        $hapus = Berita::where('slug',$slug)->first(); 
        $hapus->delete();
        !is_null($hapus->image) && Storage::delete($hapus->image);
        return redirect('/berita')->with('succes','Sukses Hapus Data !!!');
    }
}
