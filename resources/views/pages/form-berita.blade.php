@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
<style type="text/css">
    .body{
        width: 100%;
        padding: 20px;
    }
</style>
    @include('layouts.navbars.auth.topnav', ['title' => 'Tambah Berita'])

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Tambah Berita</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="body">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('../layouts.footers.auth.footer')
    </div>
@endsection
