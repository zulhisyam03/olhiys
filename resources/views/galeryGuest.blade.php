@extends('layouts.main', ['title' => 'Galery'])

@section('content')
    @include('layouts.slider')
    @include('layouts.navbars.guest.topNav')
    
    <div class="container bg-light position-relative py-2 rounded" id="navGalery" style="min-height:200px">
        <p class="text-muted"><small><b> Home</b> <i class="fa-solid fa-angles-right"></i> Galery</small> </p> 
        <div class="row mx-2">
            @foreach ($dataGalery as $galery)
            <div class="colGalery p-1">
                <div class="row">
                    <div class="col text-start mt-1">                                                    
                        <div class="itemBerita">
                            @if ($galery->image != '')
                                <img class="img-fluid border border-3 border-success" src="storage/{{ $galery->image }}" alt="{{ $galery->title }}">
                            @else
                                <img class="img-fluid border" src="images/templatemo_blogimage03.jpg" alt="{{ $galery->title }}">
                            @endif
                        </div>                        
                    </div>
                </div>
            </div>
            @endforeach                
        </div>
    </div>        
    
@endsection
