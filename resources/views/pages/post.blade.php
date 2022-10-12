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
        <div class="row">
            <div class="col-12">SS
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Daftar Berita</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
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
