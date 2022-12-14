<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/images/logo-OLHIYS.png">
    <title>
        Administrator | OLHIYS
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/62c979b04d.js" crossorigin="anonymous"></script>
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="../../css/templatemo_style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/templatemo_misc.css">

    {{-- MODAL GALERI POPUP --}}
    <link rel="stylesheet" href="../../css/slimbox2.css" type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/JavaScript" src="../../js/slimbox2.js"></script>

    {{-- Datatables Responsif --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css"> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link id="pagestyle" href="../../assets/css/argon-dashboard.css" rel="stylesheet" />


    <link rel="stylesheet" type="text/css" href="../../css/trix.css">
    <script type="text/javascript" src="../../js/trix.js"></script>

    <style type="text/css">
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }

        #aboutEdit {
            display: none;
        }

        #acountEdit {
            display: none;
        }
    </style>
</head>

<body onload="loading()" class="{{ $class ?? '' }}">
    <div class="loader-wrap">
        <div class="loader">
            <div class="circle-1 circle">
                <div class="circle-2 circle">
                    <div class="circle-3 circle">
                        <div class="circle-4 circle">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div id="myLoad" class="animate-bottom">
            @guest
                @yield('content')
            @endguest

            @auth
                @if (in_array(request()->route()->getName(),
                    ['sign-in-static', 'sign-up-static', 'login', 'register', 'recover-password', 'rtl', 'virtual-reality']))
                    @yield('content')
                @else
                    @if (!in_array(request()->route()->getName(),
                        ['profile', 'profile-static']))
                        <div class="min-height-300 bg-primary position-absolute w-100"></div>
                    @elseif (in_array(request()->route()->getName(),
                        ['profile-static', 'profile']))
                        <div class="position-absolute w-100 min-height-300 top-0"
                            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
                            <span class="mask bg-primary opacity-6"></span>
                        </div>
                    @endif
                    @include('layouts.navbars.auth.sidenav')
                    <main class="main-content border-radius-lg">
                        @yield('content')
                    </main>
                    @include('components.fixed-plugin')
                @endif
            @endauth
        </div>

        <!-- ckeditor5 -->
        <script>
            ClassicEditor
                .create(document.querySelector('#editorBerita'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
        </script>

        <script>
            const observer = lozad('.lozad', {
                rootMargin: '10px 0px', // syntax similar to that of CSS Margin
                threshold: 0.1, // ratio of element convergence
                enableAutoReload: true // it will reload the new image when validating attributes changes
            });
            observer.observe();
        </script>

        <!--   Core JS Files   -->
        <script src="../../assets/js/core/popper.min.js"></script>
        <script src="../../assets/js/core/bootstrap.min.js"></script>
        <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>

        <script>
            function aboutBtn() {
                var show = document.getElementById("aboutShow");
                var edit = document.getElementById("aboutEdit");
                if (show.style.display === "none") {
                    show.style.display = "block";
                    edit.style.display = "none";
                } else {
                    show.style.display = "none";
                    $("#aboutEdit").fadeToggle("slow");
                }
            }

            function acountBtn() {
                var acountShow = document.getElementById("acountShow");
                var acountEdit = document.getElementById("acountEdit");

                acountShow.style.display = "none";
                $("#acountEdit").fadeToggle("slow");
            }

            function btnAcountCancel() {
                var acountShow = document.getElementById("acountShow");
                var acountEdit = document.getElementById("acountEdit");

                acountEdit.style.display = "none";
                $("#acountShow").fadeToggle("slow");
            }
        </script>

        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../../assets/js/argon-dashboard.js"></script>
        @stack('js');
</body>

</html>
