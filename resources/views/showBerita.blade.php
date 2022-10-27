@extends('layouts.main', ['title' => 'Home >> Berita'])
@section('content')
    @include('layouts.slider')
    @include('layouts.navbars.guest.topNav')

    
    <div class="container-fluid bg-light position-relative py-2 rounded" id="navBerita" style="min-height:200px">
        <p class="text-muted"><small><b> Home</b> <i class="fa-solid fa-angles-right"></i> Berita</small> </p>
        <div class="row mx-2">
            <div class="col">                      
                <div class="card">
                  <div class="card-body p-2">
                    <div class="body">
                        <div class="text-muted fs-5 lh-1" style="font-family: Tahoma, Geneva, Verdana, sans-serif">
                            {{ $dataBerita->title }}                        
                        </div>
                        <p class="text-muted mt-0" style="font-size:11px;"><b> {{ $dataBerita->author }}</b> Dibuat {{ $dataBerita->created_at->diffForHumans() }}</small> </p>
                        @if (!empty($dataBerita->image))                        
                            <center><img src="{{ asset('storage/'.$dataBerita->image) }}" alt="{{ $dataBerita->title }}" class="img-fluid pb-3"/></center>
                        @endif
                        <article class="artikel text-dark" style="text-align: justify">
                          <p>
                              {!! $dataBerita->body !!}
                          </p>                  
                        </article>
                    </div>                    
                  </div> 
                </div>                                           
            </div>
        </div>
    </div>
    
@endsection
