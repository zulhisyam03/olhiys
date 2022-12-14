    @extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
    {{-- Loading --}}
    <link rel="stylesheet" href="{{ asset('css/loading.css') }}">

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
                                        <input type="text" class="form-control"
                                            value="{{ Str::limit($about->visi, 40, '..') }}" disabled>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="formDisabled">Misi</label>
                                    <div class="col-sm">
                                        <input type="text" class="form-control"
                                            value="{{ Str::limit($about->misi, 40, '..') }}" disabled>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="formDisabled">Tentang OLHIY'S</label>
                                    <div class="col-sm">
                                        <input type="text" class="form-control"
                                            value="{{ Str::limit($about->tentang, 40, '..') }}" disabled>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="formDisabled">Struktur Organisasi</label>
                                    <div class="col-sm-4">
                                        @if ($about->so)
                                            <div class="portfolio-item">
                                                <div class="portfolio-thumb border border-2 border-success p-0"
                                                    style="height:150px;width:100%;">
                                                    <img src="storage/{{ $about->so }}" alt="Struktur Organisasi"
                                                        style="height: 100%;">
                                                    <div class="overlay-p">
                                                        <a href="storage/{{ $about->so }}" data-rel="lightbox[portfolio]"
                                                            style="padding-top:20%;height:100%;">
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

                            <form action="/setabout/{{ $about->id }}" method="post" id="aboutEdit"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="form-group px-4">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="formDisabled">Visi</label>
                                        <div class="col-sm">
                                            <textarea name="visi" id="" class="form-control" cols="30" rows="3" required>{{ old('visi', $about->visi) }}</textarea>
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
                                        <label class="col-sm-3 col-form-label " for="formDisabled">Struktur
                                            Organisasi</label>
                                        <div class="col-sm-4">
                                            <input type="hidden" name="oldImage" value="{{ $about->so }}">
                                            <input type="file" class="form-control" name="so" id="image"
                                                onchange="previewImg() @error('so') is-invalid @enderror">
                                            @if ($about->so)
                                                <img class="img-preview img-fluid mt-2 col-sm-5 d-block"
                                                    src="{{ asset('storage/' . $about->so) }}">
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
                                            <button class="btn btn-success" id=""><i
                                                    class="fa-solid fa-floppy-disk"></i>
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
                                        <input type="email" class="form-control" id="email"
                                            value="{{ $acount->email }}" name="" readonly>
                                    </div>
                                    <div class="col-sm-5">
                                        <label class="col-form-label" for="password">Password</label>
                                        <input type="password" class="form-control" name="" value="........"
                                            disabled>
                                    </div>
                                    <div class="col-sm  py-0" style="margin-top:39px;">
                                        <button class="btn btn-success mb-0" type="button" onclick="acountBtn()"><i
                                                class="fa fa-pencil"></i> Edit</button>
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
                                            <input type="hidden" name="email" value="{{ $acount->email }}">
                                            <input type="email" class="form-control" id="email"
                                                value="{{ $acount->email }}" name="" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label for="staticPassword">Password Lama</label>
                                        <div class="col-sm">
                                            <input type="password"
                                                class="form-control @error('passwordLama') is-invalid @enderror"
                                                id="passwordLama" name="passwordLama" autofocus required>
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
                                            <input type="password"
                                                class="form-control @error('passwordBaru') is-invalid @enderror"
                                                id="passwordBaru" name="passwordBaru" required>
                                        </div>
                                        @error('passwordBaru')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm text-center">
                                            <button type="" onclick="" class="btn btn-success"><i
                                                    class="fa-solid fa-floppy-disk"></i> Simpan</i></button>
                                            <button type="button" onclick="btnAcountCancel()" class="btn btn-danger"><i
                                                    class="fa-solid fa-x"></i> Cancel</button>
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
                    <div class="card">
                        <div class="card-header pb-0 px-3">
                            <h6 class="mb-0">Pesan Tamu</h6>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <table id="tableGuest" class="table table-secondary table-striped table-hover"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <td class="d-none"></td>
                                        <th>Nama Tamu</th>
                                        <th>Tanggal</th>
                                        <th>Pesan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($guestMessage as $guest)
                                        <tr class="{{ $guest->read == '0' ? 'table-danger' : '' }}">
                                            <td class="d-none">
                                            </td>
                                            <td class="">
                                                <a href="#show{{ $guest->id }}" value="" class=""
                                                    title="Show Data" data-bs-toggle="modal"
                                                    data-bs-target="#show{{ $guest->id }}">
                                                    <div
                                                        style="width:100%;height:100%;margin-left:-25px;padding-left:25px;position: relative;">
                                                        {{ $guest->nama }} <p><small>{{ $guest->email }}</small></p>
                                                    </div>
                                                </a>
                                                @include('layouts.modalGuest')
                                            </td>
                                            <td>{{ $guest->created_at->diffForHumans() }}<p>
                                                    {{ $guest->created_at->format('d M Y') }}</p>
                                            </td>
                                            <td class="text-wrap">{{ Str::limit($guest->message, 150, '...') }}</td>
                                            <td class="text-center">
                                                <form action="guestMessage/{{ $guest->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger"
                                                        onclick="return confirm('Yakin Hapus Data?')"><i
                                                            class="fa fa-trash" aria-hidden="true"></i> Hapus</button>
                                                </form>
                                            </td>
                                            <?php $no++; ?>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            @include('layouts.footers.auth.footer')
        </div>
    @endsection
</div>

<script src="{{ asset('js/loading.js') }}"></script>
@push('js')
    
    <script src="./assets/js/plugins/chartjs.min.js"></script>

    {{-- JS Datatables Responsiv --}}
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js">
    </script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tableGuest').DataTable({
                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.modal({
                            header: function(row) {
                                var data = row.data();
                                return 'Details for ' + data[0] + ' ' + data[1];
                            }
                        }),
                        renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                            tableClass: 'table'
                        })
                    }
                }
            });
        });

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
