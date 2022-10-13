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
                        <div class="card-body">
                            <form action="" method="POST" role="form">
                                @csrf
                                <div class="form-group">
                                    <label class="label">JUDUL POSTINGAN</label>
                                    <input type="text" class="form-control" name="judul" placeholder="Judul Postingan">
                                </div>
                                <div class="form-group">
                                    <label class="label">POSTINGAN</label>
                                    <textarea name="isiBerita" id="editorBerita" class="form-control" rows="4"></textarea>
                                </div>    
                                <div class="form-group">
                                    <input type="submit" value="Save" class="btn btn-primary">
                                </div>                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('../layouts.footers.auth.footer')
    </div>
@endsection
