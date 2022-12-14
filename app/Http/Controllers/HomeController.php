<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galery;
use App\Models\User;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Guest;

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
    public function index(Request $request)
    {
        return view('pages.dashboard', [
            'about' =>  About::all()->first(),
            'acount' =>  User::all()->first(),
            'guestMessage' =>  Guest::orderBy('created_at', 'DESC')->get(),
            'findNotifGuest' => Guest::where('read', '0')->count()
        ]);
    }

    public function data()
    {
        return view('welcome', [
            'about'      =>  About::all()->first(),
            'dataBerita' => Berita::orderBy('created_at', 'DESC')->paginate(8),
            'slide'      => Berita::orderBy('created_at', 'DESC')->limit(3)->get(),
            'active'     => 'home',
            'title'      => 'Home'
        ]);
    }

    public function galery()
    {

        return view('galeryGuest', [
            'dataGalery' => Galery::orderBy('created_at', 'DESC')->paginate(20),
            'jmlGalery' => Galery::count(),
            'slide'      => Berita::orderBy('created_at', 'DESC')->limit(3)->get(),
            'active' => 'galery',
            'title'
        ]);
    }
    public function beritaGuest($slug)
    {
        return view('showBerita', [
            'title' => 'Berita',
            'dataBerita' => Berita::where('slug', $slug)->first(),
            'slide'      => Berita::orderBy('created_at', 'DESC')->limit(3)->get(),
            'active' => 'home'
        ]);
    }

    public function about(string $page)
    {
        if ($page === 'so') {
            # code...
            return view('about', [
                'about'     => About::all()->first(),
                'page'      => $page,
                'title'     => 'Sturktur Organisasi',
                'slide'     => Berita::orderBy('created_at', 'DESC')->limit(3)->get(),
                'active'    => 'about'
            ]);
        } else if ($page === 'visiMisi') {
            # code...
            return view('about', [
                'about'     => About::all()->first(),
                'page'      => $page,
                'title'     => 'Visi & Misi',
                'slide'     => Berita::orderBy('created_at', 'DESC')->limit(3)->get(),
                'active'    => 'about'
            ]);
        } else {
            # code...
            return abort(404);
        }
    }

    public function find(Request $find)
    {
        $find = $find->find;
        return view('find', [
            'dataBerita'    =>  Berita::where('title', 'like', '%' . $find . '%')->paginate(8),
            'dataGalery'    =>  Galery::where('title', 'like', '%' . $find . '%')->paginate(10),
                'title'     => $find,
                'slide'     => Berita::orderBy('created_at', 'DESC')->limit(3)->get(),
                'active'    => 'home'
        ]);
    }
}
