@extends('layouts.main', ['title' => 'Galery'])
{{-- CSS Magnific Popup Image --}}
<style type="text/css">
    #portfolio {
        background: #fff;
        padding: 30px 0;        
    }

    #portfolio .portfolio-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 1;
        transition: all ease-in-out 0.4s;
    }

    #portfolio .portfolio-item {
        overflow: hidden;
        position: relative;
        padding: 0;
        vertical-align: middle;
        text-align: center;
    }

    #portfolio .portfolio-item h2 {
        color: #ffffff;
        font-size: 24px;
        margin: 0;
        text-transform: capitalize;
        font-weight: 700;
    }

    #portfolio .portfolio-item img {
        transition: all ease-in-out 0.4s;
        width: 100%;
    }

    #portfolio .portfolio-item:hover img {
        cursor: zoom-in;
        -webkit-transform: scale(1.1);
        transform: scale(1.1);    
    }

    #portfolio .portfolio-item:hover .portfolio-overlay {
        opacity: 1;
        background: rgba(0, 0, 0, 0.7);
    }

    #portfolio .portfolio-info {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    #gambar:hover {
        cursor: zoom-in;        
    }

</style>

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
