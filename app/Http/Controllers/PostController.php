<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\PostGalery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    //
    public function index(){
        return view('pages.galery', [
            "title" => "PostGaleri",
            "galery" => PostGalery::all()
        ]);
    }

    public function indexBerita(){
        return view('pages.berita', [
            "title"     =>  "Berita",
            "dataBerita"=>  Berita::all()
        ]);
    }

    public function showPost($id){
        return view('pages.news', [
            "title"     =>  "Berita",
            "posting"   =>  Berita::find($id)
        ]);
    }
}
