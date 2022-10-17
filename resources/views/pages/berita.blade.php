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
</style>
    @include('layouts.navbars.auth.topnav', ['title' => 'Berita'])

    <div class="container-fluid py-4">
        
            @if ($message = session()->has('succes'))
            <div class="px-4 pt-4">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p class="text-white mb-0">{{ session()->get('succes') }}</p>
                </div>
            </div>
            @endif

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Daftar Berita</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">                              
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th colspan="3">
                                            <a href="create-berita/">
                                                <button class="btn btn-primary" style="width: 100%;align:center;">+ Tambah Berita</button>
                                            </a>
                                        </th>
                                    </tr>
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
                                                        <a href="berita\{{ $berita->id }}" class="judul">
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
                                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth.footer')
    </div>
@endsection
