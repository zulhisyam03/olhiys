@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
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
        @if ($message = session()->has('gagal'))
            <div class="px-4 pt-4">
                <div style="color:white;" class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-check"></i>
                    {{ session()->get('gagal') }}
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
                        <h6>About</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="form-group px-4" id="aboutShow">
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="formDisabled">Visi</label>
                                <div class="col-sm">
                                    <input type="text" class="form-control" value="{{ Str::limit($about->visi,40,'..') }}" disabled>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="formDisabled">Misi</label>
                                <div class="col-sm">
                                    <input type="text" class="form-control" value="{{ Str::limit($about->misi,40,'..') }}" disabled>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="formDisabled">Tentang OLHIY'S</label>
                                <div class="col-sm">
                                    <input type="text" class="form-control" value="{{ Str::limit($about->tentang,40,'..') }}" disabled>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="formDisabled">Struktur Organisasi</label>
                                <div class="col-sm-4">
                                    @if ($about->so)
                                    <div class="portfolio-item">
                                        <div class="portfolio-thumb border border-2 border-success p-0"
                                            style="height:150px;width:100%;">                                              
                                            <img src="storage/{{ $about->so }}" alt="Struktur Organisasi" style="height: 100%;">                                                                                                                                 
                                            <div class="overlay-p">
                                                <a href="storage/{{ $about->so }}"
                                                    data-rel="lightbox[portfolio]" style="padding-top:20%;height:100%;">
                                                    <ul>
                                                        <li class="fa-solid fa-magnifying-glass-plus fa-2xl"></i>
                                                    </ul>
                                                </a>
                                            </div>
                                        </div> <!-- /.portfolio-thumb -->
                                    </div>
                                    @else
                                        No Image Available
                                    @endif                                    
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm text-center">
                                    <button type="button" class="btn btn-success w-100" onclick="aboutBtn()"><i
                                            class="fa fa-pencil"></i> Edit</button>
                                </div>
                            </div>
                        </div>

                        <form action="/setabout/{{ $about->id }}" method="post" id="aboutEdit" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group px-4">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="formDisabled">Visi</label>
                                    <div class="col-sm">
                                        <textarea name="visi" id="" class="form-control" cols="30" rows="3" required>{{ old('visi',$about->visi) }}</textarea>
                                        <div class="@error('visi') is-invlaid @enderror"></div>
                                        @error('visi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="formDisabled">Misi</label>
                                    <div class="col-sm">
                                        <textarea name="misi" id="" class="form-control" cols="30" rows="3" required>{{ old('misi', $about->misi) }}</textarea>
                                        <div class="@error('misi') is-invlaid @enderror"></div>
                                        @error('misi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="formDisabled">Tentang OLHIY'S</label>
                                    <div class="col-sm">
                                        <textarea name="tentang" id="" class="form-control" cols="30" rows="3" required>{{ old('tentang', $about->tentang) }}</textarea>
                                        <div class="@error('tentang') is-invlaid @enderror"></div>
                                        @error('tentang')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label " for="formDisabled">Struktur Organisasi</label>
                                    <div class="col-sm-4">
                                        <input type="hidden" name="oldImage" value="{{ $about->so }}">
                                        <input type="file" class="form-control" name="so" id="image"
                                            onchange="previewImg() @error('so') is-invalid @enderror">
                                        @if ($about->so)
                                            <img class="img-preview img-fluid mt-2 col-sm-5 d-block" src="{{ asset('storage/'.$about->so) }}">
                                        @else
                                            <img class="img-preview img-fluid mt-2 col-sm-5 d-block">
                                        @endif                                        
                                        @error('so')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm text-center">
                                        <button class="btn btn-success" id=""><i class="fa-solid fa-floppy-disk"></i>
                                            Save</button>
                                        <button class="btn btn-danger" onclick="aboutBtn()" type="button"><i
                                                class="fa-solid fa-x"></i> Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <hr>


                        <div class="form-group px-4" id="acountShow">
                            <div class="mb-3 row">
                                <div class="col-sm-5">
                                    <label class="col-form-label for="staticEmail">E-Mail</label>
                                    <input type="email" class="form-control" id="email" value="{{ $acount->email }}" name="" readonly>
                                </div>
                                <div class="col-sm-5">
                                    <label class="col-form-label" for="password">Password</label>
                                    <input type="password" class="form-control" name="" value="........" disabled>
                                </div>
                                <div class="col-sm  py-0" style="margin-top:39px;">
                                    <button class="btn btn-success mb-0" type="button"
                                        onclick="acountBtn()"><i class="fa fa-pencil"></i> Edit</button>
                                </div>
                            </div>
                        </div>

                        <form action="/setaccount/{{ $acount->id }}" method="post" id="acountEdit">
                            @method('put')
                            @csrf
                            <div class="form-group px-4">
                                <div class="mb-3 row">                                
                                    <label class="col-sm-3 col-form-label for="staticEmail">E-Mail</label>
                                    <div class="col-sm">                                        
                                        <input type="email" class="form-control" id="email" value="{{ $acount->email }}" name="" readonly>
                                    </div>                                
                                </div>
                                <div class="mb-3 row">                                
                                    <label class="col-sm-3 col-form-label for="staticPassword">Password Lama</label>
                                    <div class="col-sm">
                                        <input type="password" class="form-control @error('passwordLama') is-invalid @enderror" id="passwordLama" name="passwordLama" autofocus required>
                                        @error('passwordLama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>                                            
                                        @enderror 
                                    </div>                                
                                </div>
                                <div class="mb-3 row">                                
                                    <label class="col-sm-3 col-form-label for="staticPassword">Password Baru</label>
                                    <div class="col-sm">
                                        <input type="password" class="form-control @error('passwordBaru') is-invalid @enderror" id="passwordBaru" name="passwordBaru" required>
                                    </div> 
                                    @error('passwordBaru')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror                               
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm text-center">
                                        <button type="" onclick="" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Simpan</i></button>
                                    <button type="button" onclick="btnAcountCancel()" class="btn btn-danger"><i class="fa-solid fa-x"></i> Cancel</button>
                                    </div>                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Projects table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Project</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Budget</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Status</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                            Completion</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="/img/small-logos/logo-spotify.svg"
                                                        class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">Spotify</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">$2,500</p>
                                        </td>
                                        <td>
                                            <span class="text-xs font-weight-bold">working</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <span class="me-2 text-xs font-weight-bold">60%</span>
                                                <div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-info" role="progressbar"
                                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 60%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-link text-secondary mb-0">
                                                <i class="fa fa-ellipsis-v text-xs"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="/img/small-logos/logo-invision.svg"
                                                        class="avatar avatar-sm rounded-circle me-2" alt="invision">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">Invision</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">$5,000</p>
                                        </td>
                                        <td>
                                            <span class="text-xs font-weight-bold">done</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <span class="me-2 text-xs font-weight-bold">100%</span>
                                                <div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-success" role="progressbar"
                                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 100%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-v text-xs"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="/img/small-logos/logo-jira.svg"
                                                        class="avatar avatar-sm rounded-circle me-2" alt="jira">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">Jira</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">$3,400</p>
                                        </td>
                                        <td>
                                            <span class="text-xs font-weight-bold">canceled</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <span class="me-2 text-xs font-weight-bold">30%</span>
                                                <div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-danger" role="progressbar"
                                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="30"
                                                            style="width: 30%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-v text-xs"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="/img/small-logos/logo-slack.svg"
                                                        class="avatar avatar-sm rounded-circle me-2" alt="slack">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">Slack</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">$1,000</p>
                                        </td>
                                        <td>
                                            <span class="text-xs font-weight-bold">canceled</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <span class="me-2 text-xs font-weight-bold">0%</span>
                                                <div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-success" role="progressbar"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="0"
                                                            style="width: 0%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-v text-xs"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="/img/small-logos/logo-webdev.svg"
                                                        class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">Webdev</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">$14,000</p>
                                        </td>
                                        <td>
                                            <span class="text-xs font-weight-bold">working</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <span class="me-2 text-xs font-weight-bold">80%</span>
                                                <div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-info" role="progressbar"
                                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="80"
                                                            style="width: 80%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-v text-xs"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="/img/small-logos/logo-xd.svg"
                                                        class="avatar avatar-sm rounded-circle me-2" alt="xd">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">Adobe XD</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">$2,300</p>
                                        </td>
                                        <td>
                                            <span class="text-xs font-weight-bold">done</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <span class="me-2 text-xs font-weight-bold">100%</span>
                                                <div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-success" role="progressbar"
                                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 100%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-v text-xs"></i>
                                            </button>
                                        </td>
                                    </tr>
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

@push('js')
    <script src="./assets/js/plugins/chartjs.min.js"></script>

    <script>
        //Membuat Preview Image
        function previewImg() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'blok';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
    {{-- Modal Galeri Popup --}}
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
                prevText: '',
                nextText: '',
                controlNav: false,
            });
        });
    </script>
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(251, 99, 64, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(251, 99, 64, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(251, 99, 64, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fb6340",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
@endpush
