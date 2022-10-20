@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Galery'])

    <style type="text/css">
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
            left:0;
            padding-top:35px;
            width: 100%;
            height: 100px;
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
                                    <div class="form-group col-sm-5">
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
                                            <input type="file" style="height:100%;opacity:0;" multiple name="gambar[]" class="form-control @error('gambar') is-invalid @enderror">                                            
                                        </div>                                                                                                                   
                                        <button type="submit">Upload</button>
                                        @error('gambar')
                                            {{ $message }}
                                        @enderror  
                                    </div>                                                                              
                                </form>
                                <hr style="border:4px solid #09b955;">
                                <br>
                                <center>
                                    <table align="center" style="text-align: center;border:1px;width:100%;">
                                        <tr>
                                            @foreach ($Galery as $galeri)
                                                <td><img class="img-fluid col-sm-10" src="{{ $galeri->temp }}" alt=""></td>
                                            @endforeach
                                        </tr>
                                    </table>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth.footer')
    </div>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('form input').change(function () {
                $('form p').text(this.files.length + " file(s) selected");
            });
        });
    </script>
@endsection