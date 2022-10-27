@extends('layouts.main', ['title' => 'Galery'])
@section('content')
    @include('layouts.slider')
    @include('layouts.navbars.guest.topNav')

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
