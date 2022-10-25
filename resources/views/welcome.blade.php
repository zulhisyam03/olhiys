@extends('layouts.main', ['title' => 'Home'])

@section('content')    
    @include('layouts.slider')
    @include('layouts.navbars.guest.topNav')

    <div class="container position-relative py-0" style="background:rgba(255, 255, 255, 0.355);min-height: 200px;">
        <div class="container bg-light position-relative py-2 rounded" id="navBerita" style="min-height:200px">
            <p class="text-muted"><small><b> Home</b> <i class="fa-solid fa-angles-right"></i> Berita</small> </p> 
            <div class="row mx-2">
                @foreach ($dataBerita as $berita)
                <div class="colBerita border">
                    <div class="row">
                        <div class="col text-start mt-1">
                            <a class="link" href=""><i class="fa-regular fa-calendar-days"></i><span class="popupJudul">{{ $berita->created_at }}</span></a>
                            <a class="link" href=""><i class="fa-regular fa-user"></i><span class="popupJudul">{{ $berita->author }}</span></a>  
                            <div class="itemBerita">
                                @if ($berita->image != '')
                                    <img class="img-fluid" src="storage/{{ $berita->image }}" alt="{{ $berita->title }}">
                                @else
                                    <img class="img-fluid" src="images/templatemo_blogimage03.jpg" alt="{{ $berita->title }}">
                                @endif
                                <p>
                                    <a class="text-light text-decoration-none" href="">
                                        {{ Str::limit($berita->title,'40','...') }} 
                                    </a>                                                                       
                                </p>
                            </div>                        
                        </div>
                    </div>
                </div>
                @endforeach                
            </div>
        </div>        
    </div>
@endsection
