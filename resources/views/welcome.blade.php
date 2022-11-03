@extends('layouts.main', ['title' => 'Home'])
@section('content')
    @include('layouts.slider')
    @include('layouts.navbars.guest.topNav')

    @if ($message = session()->has('succes'))
    <div class="alert alert-success fixed-top alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> {{ session()->get('succes') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    {{-- Berita --}}
    <div class="container bg-light position-relative py-2 rounded" id="" style="min-height:200px">
        <p class="text-muted"><small><b> Home</b> <i class="fa-solid fa-angles-right"></i> Berita</small> </p>
        <div class="row mx-2">
            @foreach ($dataBerita as $berita)
                <div class="colBerita p-1 border">
                    <div class="row">
                        <div class="col text-start">
                            <div class="mx-0 py-1">
                                <a class="link py-2 px-3 " href="#"><i class="fa-regular fa-calendar-days"></i><span
                                        class="popupJudul">{{ $berita->created_at->format('d M Y') }}</span></a>
                                <a class="link py-2 px-3" href="#" style="margin-left:-5px;"><i
                                        class="fa-regular fa-user"></i><span class="popupJudul text-center"
                                        style="margin-left:45px;width:80px;">{{ $berita->author }}</span></a>
                            </div>
                            <div class="itemBerita">
                                <a class="judul" href="/showBerita/{{ $berita->slug }}">
                                    @if ($berita->image != '')
                                        <img class="img-fluid" src="storage/{{ $berita->image }}"
                                            alt="{{ $berita->title }}">
                                    @else
                                        <img class="img-fluid" src="images/templatemo_blogimage03.jpg"
                                            alt="{{ $berita->title }}">
                                    @endif
                                    <p>{{ Str::limit($berita->title, '40', '...') }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if ($dataBerita->hasPages())
            <div class="mt-2 align-content-center">
                {{ $dataBerita->links() }}
            </div>
        @endif
    </div>
    {{-- END BERITA --}}
    <p></p>
    {{-- sponsor By --}}
    <div class="container bg-light position-relative py-2 text-dark rounded" id="" style="min-height:200px">
        <p class="text-muted"><small><b> Home</b> <i class="fa-solid fa-angles-right"></i> Sponsor</small> </p>
        <div class="row mx-2">
            <h3 align='center'>Our Sponsor</h3>
            <p align='center'>
                Kami mengucapkan terima kasih sebesar besarnya atas support atau dukungan yang telah diberikan terhadap
                OLHIY'S sampai detik ini,
                tanpa dukungan dari pihak-pihak terkait, kami tidak akan bisa menjadi seperti saat ini.
            </p>
            <div class="row p-3 m-auto text-light rounded"
                style="background:url({{ asset('images/templatemo_reasonbg.jpg') }})">
                <div class="col-sm-2 text-center m-auto">
                    <a href="https://sigikab.go.id" target="_blank"><img
                            src="https://upload.wikimedia.org/wikipedia/commons/5/58/Lambang_Kabupaten_Sigi.png"
                            alt="" class="img-thumbnail" style="height: 200px;width:200px;"></a>
                    <p><b>Pemerintah Kab.SIGI</b></p>
                </div>
                <div class="col-sm-2 text-center m-auto">
                    <a href="#"><img
                            src="https://w7.pngwing.com/pngs/835/434/png-transparent-sponsor-business-donation-service-organization-business-text-sport-service-thumbnail.png"
                            alt="" class="img-thumbnail" style="height: 200px;width:200px;"></a>
                    <p><b>Sponsor Ke-2</b></p>
                </div>
                <div class="col-sm-2 text-center m-auto">
                    <a href="#"><img
                            src="https://w7.pngwing.com/pngs/835/434/png-transparent-sponsor-business-donation-service-organization-business-text-sport-service-thumbnail.png"
                            alt="" class="img-thumbnail" style="height: 200px;width:200px;"></a>
                    <p><b>Sponsor Ke-3</b></p>
                </div>
            </div>
        </div>
    </div>
    {{-- END Sponsor --}}
    <p></p>
    {{-- Contact Us --}}
    <div class="container bg-light position-relative py-2 text-dark rounded" id="" style="min-height:200px">
        <p class="text-muted"><small><b> Home</b> <i class="fa-solid fa-angles-right"></i> Kontak Kami</small> </p>
        <div class="row mx-2">
            <div class="card">
                <div class="card-header" id="contactUs">
                    <h4>Hubungi Kami</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <form action="/contactUs" method="POST">
                            @csrf
                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label" for="staticEmail">Email</label>
                                <div class="col-sm">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="user@gmail.com" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="feedback-invalid">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label" for="staticNama">Nama</label>
                                <div class="col-sm">
                                    <input type="text" name="nama"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        placeholder="Nama ... " value="{{ old('nama') }}" required>
                                    @error('nama')
                                        <div class="feedback-invalid">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label" for="staticPesan">Pesan</label>
                                <div class="col-sm">
                                    <textarea name="message" id="" class="form-control @error('message') is-invalid @enderror"
                                        cols="30" rows="10" required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="feedback-invalid">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm text-end">
                                    <input type="hidden" name="read" value="0">
                                    <button class="btn btn-success"><i class="fa-solid fa-paper-plane"></i> Kirim</button>
                                    <button class="btn btn-danger" type="reset"><i class="fa-solid fa-x"></i>
                                        Batal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END Sponsor --}}
@endsection
