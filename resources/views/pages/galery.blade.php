@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])



@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Galery'])

    <style type="text/css">
        .row-galery{
            display: flex;
            flex-wrap: wrap;                                  
        }
        .column{
            /* margin: 0 auto; */
            max-width: 20%;
            padding-left:2px;
            padding-right: 2px;
        }
        @media screen and (max-width:600px){
            .column{
                max-width:100%;
                flex: 100%;
            }
        }
        .imgGaleri{
            width: 100%;
            height: 100%;
            border: 4px solid rgba(255, 0, 0, 0.284);
        }
        .img-fluid:hover{
            width: 120px;
            height: 120px;
            cursor: pointer;
        }
        .upload{
            outline: none;      
            border-radius: 8px;       
            height: 100px;
            opacity: 100;
            border: 4px dashed #09b955;
            text-align: center;
            margin-bottom: 10px;
        }
        .textUpload{
            position: absolute;
            padding-top:35px;
            left:0;
            margin-top:0x;
            width: 100%;
            height: 100px;
        }
        .tombolInput{
            opacity: 0;
            height: 100%;
        }
        form button{
        margin: 0;
        color: #fff;
        background: #16a085;
        border: none;
        width: 100%;
        height: 35px;
        margin-top: -20px;
        border-radius: 4px;
        border-bottom: 4px solid #117A60;
        transition: all .2s ease;
        outline: none;
        }
        form button:hover{
        background: #149174;
            color: #0C5645;
        }
        form button:active{
        border:0;
        }
        /* END FORM UPLOAD CSS */
    </style>

    <div class="container-fluid py-4">
        @if ($message = session()->has('succes'))
            <div class="px-4 pt-4">
                <div style="color:white;" class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check"></i>
                    {{ session()->get('succes') }}
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
            </div>
            @endif

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Galery</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div style="position: relative;padding:10px;min-height:500px;c">
                                <form class="" action="/galery" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title" class="col-form-label">
                                            JUDUL GAMBAR
                                        </label>
                                        <input type="text" name="title" class="form-control d-inline @error('title') is-invalid @enderror">
                                        @error('title')
                                            {{ $message }}
                                        @enderror                                       
                                    </div>    
                                    <div class="form-group">     
                                        <div class="upload">                     
                                            <span class="textUpload">
                                                <p>Drag your files here or click in this area.</p>
                                            </span>                                                                   
                                            <input type="file" name="gambar[]" multiple class="form-control tombolInput @error('gambar') is-invalid @enderror">                                            
                                        </div>
                                        
                                        @error('gambar')
                                            {{ $message }}
                                        @enderror                                                                                                           
                                        <button type="submit">Upload</button>                                         
                                    </div>                                                                              
                                </form>
                                <hr style="border:4px solid #09b955;">
                                <br>                                                                
                                <div class="row-galery">                                        
                                    @foreach ($Galery as $galeri)
                                            <div class="column">
                                                <div class="portfolio-item">
                                                    <div class="portfolio-thumb imgGaleri">
                                                        <img src="storage/{{ $galeri->image }}" alt="{{ $galeri->title }}" >
                                                        <div class="overlay-p">
                                                            <a href="storage/{{ $galeri->image }}" data-rel="lightbox[portfolio]" style="padding-top:20%;height:100%;">
                                                                <ul>
                                                                    <li class="fa-solid fa-magnifying-glass-plus fa-2xl"></i>
                                                                </ul>
                                                            </a>                                                                                                                              
                                                        </div>                                                                                                                                                                                                                                              
                                                    </div> <!-- /.portfolio-thumb -->
                                                </div>
                                                <div style="margin-top:-20px;">
                                                    <form action="galery\{{ $galeri->id }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger" onclick="return confirm('Yakin Hapus Foto ?')" style="border-radius:0 0 5px 5px;"><i class="fa-solid fa-trash-can fa-lg"></i></button>
                                                    </form> 
                                                </div>                                                                 
                                            </div>
                                        @endforeach 
                                </div>                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth.footer')
    </div>

    <script src="js/bootstrap.min.js"></script>

    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('form input').change(function () {
                $('form p').text(this.files.length + " file(s) selected");
            });
        });
    </script>
  
  {{-- Modal Galeri Popup --}}
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
                prevText: '',
                nextText: '',
                controlNav: false,
            });
        });
    </script>
    
@endsection