@extends('layouts.main',['title' =>'Home'])

@section('content')
    @include('layouts.navbars.guest.topNav', ['title' => 'Home'])

    <div class="container mt-4">
        <h1>Halaman Utama Baru</h1>
    </div>    

@endsection