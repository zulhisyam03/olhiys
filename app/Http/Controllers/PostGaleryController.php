<?php

namespace App\Http\Controllers;

use App\Models\PostGalery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostGaleryController extends Controller
{
    //
    public function index(){
        return view('pages.galery', [
            "title" => "PostGaleri",
            "galery" => PostGalery::all()
        ]);
    }
}
