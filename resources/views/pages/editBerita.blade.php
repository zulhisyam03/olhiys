@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
<style type="text/css">
    .body{
        width: 100%;
        padding: 20px;
    }
</style>
    @include('layouts.navbars.auth.topnav', ['title' => 'Edit Berita'])

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Edit Berita</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="card-body">
                            <form action="../berita/{{ $berita->id }}" method="POST">
                                @method('put')
                                @csrf
                                <input type="hidden" name="author" value="Admin">
                                <div class="form-group">
                                    <label class="label">JUDUL POSTINGAN</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Judul Postingan" required value="{{ old('title', $berita->title) }}">
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="label">POSTINGAN</label>
                                    <input id="body" type="hidden" name="body" value="{{ old('body',$berita->body) }}">
                                    <trix-editor input="body"></trix-editor>
                                    <div class="@error('body') is-invalid @enderror"></div>
                                    @error('body')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
    <script>
        document.addEventListener('trix-file-accept', function(e){
        e.preventDefaulth();
        });
     </script>
@endsection
