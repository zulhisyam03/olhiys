<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('pages.berita', [
            "title"     =>  "Berita",
            "dataBerita"=>  Berita::all()
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
        $request->validate([
            'title' => 'required|min:5',
            'slug' =>  'min:5|unique:beritas',
            'body' => 'required',
            'author' => 'required'
        ]);

        Berita::create([
            'title' => $request->title,
            'author' => $request->author,
            'body' => $request->body,
            'slug'  => Str::slug($request->title,'-')//Membuat Slug Ketika Di Inputkan Ke Database
        ]);
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
        $berita =Berita::find($id);
        $input = ([
            'title' => $request->title,
            'author' => $request->author,
            'slug' => Str::slug($request->title,'-'), //Membuat Slug Ketika Di Inputkan Ke Database
            'body' => $request->body,
        ]);
        $berita->update($input);

        return redirect('/berita')->with('succes','Sukses Ubah Data !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($berita)
    {
        //
        
        Berita::destroy($berita); 
        return redirect('/berita')->with('succes','Sukses Hapus Data !!!');
    }
}
