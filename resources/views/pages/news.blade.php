@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
<style type="text/css">
    .body{
        width: 100%;
        padding: 20px;
    }
</style>
    @include('layouts.navbars.auth.topnav', ['title' => 'Berita'])

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="body">
                            <article>
                                <h3 class="text-l text-secondary mb-0">{{ $posting->title }}</h3>
                                <h5 class="text-xs text-secondary mb-3">Post At : {{ $posting->tgl_post }}</h5>
                                <div style="max-height: 350px;overflow:hidden;">
                                    <img src="{{ asset('storage/'.$posting->image) }}" alt="{{ $posting->slug }}" class="img-fluid">
                                </div>
                                <p>
                                    {!! $posting->body !!}
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('../layouts.footers.auth.footer')
    </div>
@endsection
