@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')

<style type="text/css">
    a.judul{
        color:rgb(125, 128, 125);
        font-size: 15px;
        font-weight: bold;
        font-family:Arial, Helvetica, sans-serif;
    }
    a.judul:hover{
        color:orangered;
    }
    .table-non-responsive-new{
        width:100%;        
    }
    @media screen and (max-width:600px){
        .table-responsive-new{
            width:100%;
            display:inline-block;
            border:1px solid red;
        }
        .table-non-responsive-new{
            visibility: hidden;
        }
    }
</style>
    @include('layouts.navbars.auth.topnav', ['title' => 'Berita'])

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
                        <h6>Daftar Berita</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2" >
                        <div class="table-responsive">            
                            <div class="form-group" style="padding-left:10px;padding-right:10px;">
                                <a href="../berita/create">
                                    <button class="btn btn-primary" style="width:100%;">+ Tambah Berita</button>
                                </a>
                            </div>   
                            <div class="table-non-reponsive-new">
                                <table class="table align-items-center mb-0">
                                    <thead>                                    
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Judul</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Tgl. Terbit</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                
                                        @foreach ($dataBerita as $berita)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="assets/img/logo-small.png" class="avatar avatar-sm me-3"
                                                                alt="user1">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="berita\{{ $berita->slug }}" class="judul">
                                                                {{ $berita->title }}
                                                                <p class="text-xs text-secondary mb-0">{{ $berita->author }}</p>    
                                                            </a>                                    
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ \Carbon\Carbon::parse($berita->tgl_post)->format('l, d M Y H:i:s') }}</p>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="berita\{{ $berita->slug }}\edit">
                                                        <button class="badge bg-success border-0"><i class="fas fa-edit"></i></button>
                                                    </a>
                                                    <form action="berita\{{ $berita->slug }}" method="post" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-danger border-0" onclick="return confirm('Yakin Hapus Data?')"><i class="fas fa-trash-alt"></i></button>
                                                    </form>                                                
                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-reponsive-new">
                                <table class="table align-item-center" style="max-width:100%;">                                    
                                    @foreach ($dataBerita as $berita)
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>
                                            </tr>                               
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="berita\{{ $berita->slug }}" class="judul">
                                                            {{ $berita->title }}
                                                            <p class="text-xs font-weight-bold mb-0">At: {{ $berita->tgl_post }}</p> 
                                                        </a>                                                                                           
                                                    </div>                                                
                                                    <p class="text-xs font-weight-bold mb-0 d-inline">
                                                        <a href="berita\{{ $berita->slug }}\edit">
                                                            <button class="btn btn-success btn-sm border-0"><i class="fas fa-edit"></i></button>
                                                        </a>
                                                        <form action="berita\{{ $berita->slug }}" method="post" class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="btn btn-danger btn-sm border-0" onclick="return confirm('Yakin Hapus Data?')"><i class="fas fa-trash-alt"></i></button>
                                                        </form>
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth.footer')
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection
