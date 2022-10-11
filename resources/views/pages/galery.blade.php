@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Galery'])

    <style type="text/css">
        /* FORM UPLOAD CSS */
        form.upload{
        position: relative;
        width: 100%;
        height: 100px;
        border: 4px dashed #09b955;
        border-radius: 8px;
        }
        form p{
        width: 100%;
        height: 100%;
        text-align: center;
        line-height: 90px;
        color: #060505;
        font-family: Arial;
        }
        form input{
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
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
                                <form class="upload" action="upload.php" method="POST" enctype="multipart/form-data">
                                    <input type="file" multiple name="gambar[]" accept="image/*">
                                    <p>Drag your files here or click in this area.</p>
                                    <button type="submit">Upload</button>
                                </form>
                                <br>&nbsp;
                                <hr style="border:4px solid #09b955;">
                                <br>
                                <center>
                                    <table align="center" style="text-align: center;border:1px;width:100%;">
                                        <tr>
                                            @foreach ($galery as $galeri)
                                                <td><img style="width:100px;height:100px;" src="{{ $galeri->temp }}{{ $galeri->title }}.{{ $galeri->tipe }}" alt=""></td>
                                            @endforeach
                                            <td>Gambar 3</td>
                                            <td>Gambar 4</td>
                                            <td>Gambar 5</td>
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