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
            'dataGalery' => Galery::orderBy('created_at','DESC')->get(),
            'dataBerita' => Berita::orderBy('created_at','DESC')->get()
        ]);
    }
}
