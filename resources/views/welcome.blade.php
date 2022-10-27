@extends('layouts.main', ['title' => 'Home'])
@section('content')    
    @include('layouts.slider')
    @include('layouts.navbars.guest.topNav')
    
    <div class="container bg-light position-relative py-2 rounded" id="" style="min-height:200px">
        <p class="text-muted"><small><b> Home</b> <i class="fa-solid fa-angles-right"></i> Berita</small> </p>
        <div class="row mx-2">            
            @foreach ($dataBerita as $berita)
            <div class="colBerita p-1 border">
                <div class="row">
                    <div class="col text-start">
                        <div class="mx-0 py-1">
                            <a class="link py-2 px-3 " href="#" ><i class="fa-regular fa-calendar-days"></i><span class="popupJudul">{{ $berita->created_at->format('d M Y') }}</span></a>
                            <a class="link py-2 px-3" href="#" style="margin-left:-5px;"><i class="fa-regular fa-user"></i><span class="popupJudul text-center" style="margin-left:45px;width:80px;">{{ $berita->author }}</span></a>  
                        </div>
                        <div class="itemBerita">
                            <a class="judul" href="/showBerita/{{ $berita->slug }}">
                                @if ($berita->image != '')
                                    <img class="img-fluid" src="storage/{{ $berita->image }}" alt="{{ $berita->title }}">
                                @else
                                    <img class="img-fluid" src="images/templatemo_blogimage03.jpg" alt="{{ $berita->title }}">
                                @endif
                                <p>{{ Str::limit($berita->title,'40','...') }}</p>
                            </a>
                        </div>                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>        
    </div>    
@endsection
