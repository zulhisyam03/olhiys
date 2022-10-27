<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return redirect('/berita');
    }

    public function data(){
        return view('welcome', [
            'dataBerita' => Berita::orderBy('created_at','DESC')->paginate(8),
            'slide'      => Berita::orderBy('created_at','DESC')->limit(3)->get(),
            'active'     => 'home',
            'title'      => 'Home'
        ]);
    }

    public function galery(){

        return view('galeryGuest',[
            'dataGalery' => Galery::orderBy('created_at','DESC')->paginate(20),
            'jmlGalery' => Galery::count(),
            'slide'      => Berita::orderBy('created_at','DESC')->limit(3)->get(),
            'active' => 'galery',
            'title'
        ]);
    }
    public function beritaGuest($slug){
        return view('showBerita', [
            'title' => 'Berita',
            'dataBerita' => Berita::where('slug',$slug)->first(),
            'slide'      => Berita::orderBy('created_at','DESC')->limit(3)->get(),
            'active' => 'home'
        ]);
    }
}