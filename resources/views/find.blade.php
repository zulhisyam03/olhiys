@extends('layouts.main', ['title' => 'Home'])
@section('content')
    @include('layouts.slider')
    @include('layouts.navbars.guest.topNav')

    @if ($message = session()->has('succes'))
    <div class="alert alert-success fixed-top alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> {{ session()->get('succes') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    {{-- Berita --}}
    <div class="container bg-light position-relative py-2 rounded" id="" style="min-height:200px">
        <p><h3 class="text-dark">Pencarian : {{ $title }}</h3></p>
        <p class="text-muted"><small><b> Home</b> <i class="fa-solid fa-angles-right"></i> Berita</small> </p>
        <div class="row mx-2">
            @foreach ($dataBerita as $berita)
                <div class="colBerita p-1 border">
                    <div class="row">
                        <div class="col text-start">
                            <div class="mx-0 py-1">
                                <a class="link py-2 px-3 " href="#"><i class="fa-regular fa-calendar-days"></i><span
                                        class="popupJudul">{{ $berita->created_at->format('d M Y') }}</span></a>
                                <a class="link py-2 px-3" href="#" style="margin-left:-5px;"><i
                                        class="fa-regular fa-user"></i><span class="popupJudul text-center"
                                        style="margin-left:45px;width:80px;">{{ $berita->author }}</span></a>
                            </div>
                            <div class="itemBerita">
                                <a class="judul" href="/showBerita/{{ $berita->slug }}">
                                    @if ($berita->image != '')
                                        <img class="img-fluid" src="storage/{{ $berita->image }}"
                                            alt="{{ $berita->title }}">
                                    @else
                                        <img class="img-fluid" src="images/templatemo_blogimage03.jpg"
                                            alt="{{ $berita->title }}">
                                    @endif
                                    <p>{{ Str::limit($berita->title, '40', '...') }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if ($dataBerita->hasPages())
            <div class="mt-2 align-content-center">
                {{ $dataBerita->links() }}
            </div>
        @endif
    </div>
    {{-- END BERITA --}}
    <p></p>
    <div class="container bg-light position-relative py-2 rounded" id="" style="min-height:200px">
        <p class="text-muted"><small><b> Home</b> <i class="fa-solid fa-angles-right"></i> Galery</small> </p>
        <div class="row mx-2">            
            @foreach ($dataGalery as $galery)
                <div class="colGalery p-1">
                    <div class="row">
                        <div class="col text-start mt-1">
                            <div class="itemBerita">    
                                <div id="portfolio p-0">
                                    <div class="portfolio-item">                                   
                                        @if ($galery->image != '')
                                            <a href="{{ asset('storage/' . $galery->image) }}"
                                                class="portfolio-popup">
                                                <img class="border img-fluid border-3 border-success"
                                                    src="storage/{{ $galery->image }}" alt="{{ $galery->title }}" id="gambar">                                                       
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if ($dataGalery->hasPages())
            <div class="mt-2 me-auto justify-content-center">                
                {{ $dataGalery->links() }}  
            </div>            
        @endif 
    </div>

    <script type="text/javascript">
        // memanggil plugin magnific popup
        $('.portfolio-popup').magnificPopup({
            type: 'image',
            removalDelay: 300,
            mainClass: 'mfp-fade',
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300,
                easing: 'ease-in-out',
                opener: function(openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
        });
        // memanggil datatable membuat callback datatable pada magnific popup agar gambar 
        // yang di munculkan sesuai pada saat pindah paginasi dari 1 ke 2 
        // dan seterusnya
        $(document).ready(function() {
            var table = $('#example').dataTable({
                "fnDrawCallback": function() {
                    $('.portfolio-popup').magnificPopup({
                        type: 'image',
                        removalDelay: 300,
                        mainClass: 'mfp-fade',
                        gallery: {
                            enabled: true
                        },
                        zoom: {
                            enabled: true,
                            duration: 300,
                            easing: 'ease-in-out',
                            opener: function(openerElement) {
                                return openerElement.is('img') ? openerElement :
                                    openerElement.find('img');
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection
