@extends('layouts.main', ['title' => 'Home >> About'])
@section('content')
    @include('layouts.slider')
    @include('layouts.navbars.guest.topNav')

    
    <div class="container-fluid bg-light position-relative py-2 rounded" id="navBerita" style="min-height:200px">
        <p class="text-muted"><small><b> Home</b> <i class="fa-solid fa-angles-right"></i> About <i class="fa-solid fa-angles-right"></i> {{ $title }}</small> </p>
        <div class="row mx-2">
            <div class="col">                      
                <div class="card">
                  <div class="card-body p-2">
                    <div class="body text-dark p-3">
                        @if ($title === 'Sturktur Organisasi')
                            <center>
                            <img src="{{ asset('storage/'.$about->so) }}" class="img-fluid" alt="{{ $title }}">
                            </center>
                        @else
                            <h3 class="text-center">VISI</h3>
                            <p align='justify'>{{ $about->visi }}</p>
                            <h3 class="text-center">MISI</h3>
                            <p align='justify'>{{ $about->misi }}</p>
                        @endif                        
                    </div>                    
                  </div> 
                </div>                                           
            </div>
        </div>
    </div>
    
@endsection
