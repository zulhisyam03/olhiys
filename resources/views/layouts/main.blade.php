<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OLHIY'S | {{ $title }}</title>

    <link rel="icon" href="{{ asset('images/logo-olhiys.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/62c979b04d.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    {{-- Magnific Popup CDN --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background-color: #0e6cc4;
            font-family: sans-serif;
        }

        a:hover {
            color: orangered;
        }

        .link {
            text-decoration: none;
            background: grey;
            color: white;
        }

        .popupJudul {
            display: none;
        }

        .link:hover {
            background: #1eac6a;
            color: white;
        }

        .link:hover .popupJudul {
            display: block;
            background: #1eac6a;
            padding: 4px;
            position: absolute;
        }

        .judul {
            color: white;
            text-decoration: none;
        }

        .judul:hover {
            color: orangered;
        }


        .nav-link {
            height: 50px;
            width: 80px;
            color: white;
            padding-top: 10px;
            text-align: center;
        }

        .nav-link:hover {
            color: white;
            background: #1eac6a;
            font-weight: bold;
            border-radius: 5px 5px 0 0;
            padding-left: 5px;
        }

        #navbarTogglerDemo02 li a.active {
            color: white;
            background: #1eac6a;
            font-weight: bold;
            border-radius: 5px 5px 0 0;
        }

        .itemBerita img {
            width: 100%;
            height: 150px;
        }

        .colBerita {
            padding-top: 1px;
            width: 25%;
            background: url('images/templatemo_reasonbg.jpg');
            color: white;
        }

        .colGalery {
            padding: 0;
            width: 20%;
            color: white;
        }

        figure img {
            max-width: 100%;
        }

        @media screen and (max-width:460px) {
            figure img {
                max-width: 100%;
                max-height: 200px;
            }
        }

        /* CSS Magnific Popup Image */
        #portfolio {
            background: #fff;
            padding: 30px 0;
        }

        #portfolio .portfolio-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 1;
            transition: all ease-in-out 0.4s;
        }

        #portfolio .portfolio-item {
            overflow: hidden;
            position: relative;
            padding: 0;
            vertical-align: middle;
            text-align: center;
        }

        #portfolio .portfolio-item h2 {
            color: #ffffff;
            font-size: 24px;
            margin: 0;
            text-transform: capitalize;
            font-weight: 700;
        }

        #portfolio .portfolio-item img {
            transition: all ease-in-out 0.4s;
            width: 100%;
        }

        #portfolio .portfolio-item:hover img {
            cursor: zoom-in;
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

        #portfolio .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
            background: rgba(0, 0, 0, 0.7);
        }

        #portfolio .portfolio-info {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        #gambar:hover {
            cursor: zoom-in;
        }

        /* @media screen and (max-width:765px){
            .carouselExampleDark{
                height:150px;
            }
            .carouse .carousel-inner .carousel-item{
                height:150px;
            }
        } */

        @media screen and (max-width:992px) {
            .carousel {
                padding-top: 5px;
                height: 200px;
            }

            .carousel-caption {
                margin-bottom: 100px;

            }

            .carousel .carousel-inner {
                height: 200px;
            }

            .carousel .carousel-inner .carousel-item {
                height: 200px;
            }

            .carousel .carousel-inner .carousel-item img {
                height: 100%;
            }

            .colBerita {
                width: 100%;
            }

            .colGalery {
                width: 100%;
            }

            .itemBerita img {
                width: 100%;
            }

            .nav-link {
                width: 100%;
            }
        }

        /*waves****************************/


        .box {
            position: fixed;
            top: 0;
            transform: rotate(80deg);
            left: 0;
        }

        .wave {
            position: fixed;
            top: 0;
            left: 0;
            opacity: .4;
            position: absolute;
            top: 3%;
            left: 10%;
            background: #0af;
            width: 1500px;
            height: 1300px;
            margin-left: -150px;
            margin-top: -250px;
            transform-origin: 50% 48%;
            border-radius: 43%;
            animation: drift 7000ms infinite linear;
        }

        .wave.-three {
            animation: drift 7500ms infinite linear;
            position: fixed;
            background-color: #77daff;
        }

        .wave.-two {
            animation: drift 3000ms infinite linear;
            opacity: .1;
            background: black;
            position: fixed;
        }

        .box:after {
            content: '';
            display: block;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 11;
            transform: translate3d(0, 0, 0);
        }

        @keyframes drift {
            from {
                transform: rotate(0deg);
            }

            from {
                transform: rotate(360deg);
            }
        }

        /*LOADING SPACE*/

        .contain {
            animation-delay: 4s;
            z-index: 1000;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;

            background: #25a7d7;
            background: -webkit-linear-gradient(#25a7d7, #2962FF);
            background: linear-gradient(#25a7d7, #25a7d7);
        }

        .icon {
            width: 100px;
            height: 100px;
            margin: 0 5px;
        }

        /*Animation*/
        .icon:nth-child(2) img {
            -webkit-animation-delay: 0.2s;
            animation-delay: 0.2s
        }

        .icon:nth-child(3) img {
            -webkit-animation-delay: 0.3s;
            animation-delay: 0.3s
        }

        .icon:nth-child(4) img {
            -webkit-animation-delay: 0.4s;
            animation-delay: 0.4s
        }

        .icon img {
            -webkit-animation: anim 2s ease infinite;
            animation: anim 2s ease infinite;
            -webkit-transform: scale(0, 0) rotateZ(180deg);
            transform: scale(0, 0) rotateZ(180deg);
        }

        @-webkit-keyframes anim {
            0% {
                -webkit-transform: scale(0, 0) rotateZ(-90deg);
                transform: scale(0, 0) rotateZ(-90deg);
                opacity: 0
            }

            30% {
                -webkit-transform: scale(1, 1) rotateZ(0deg);
                transform: scale(1, 1) rotateZ(0deg);
                opacity: 1
            }

            50% {
                -webkit-transform: scale(1, 1) rotateZ(0deg);
                transform: scale(1, 1) rotateZ(0deg);
                opacity: 1
            }

            80% {
                -webkit-transform: scale(0, 0) rotateZ(90deg);
                transform: scale(0, 0) rotateZ(90deg);
                opacity: 0
            }
        }

        @keyframes anim {
            0% {
                -webkit-transform: scale(0, 0) rotateZ(-90deg);
                transform: scale(0, 0) rotateZ(-90deg);
                opacity: 0
            }

            30% {
                -webkit-transform: scale(1, 1) rotateZ(0deg);
                transform: scale(1, 1) rotateZ(0deg);
                opacity: 1
            }

            50% {
                -webkit-transform: scale(1, 1) rotateZ(0deg);
                transform: scale(1, 1) rotateZ(0deg);
                opacity: 1
            }

            80% {
                -webkit-transform: scale(0, 0) rotateZ(90deg);
                transform: scale(0, 0) rotateZ(90deg);
                opacity: 0
            }
        }
    </style>
</head>

<body>
    <div class="box">
        <div class='wave -one'></div>
        <div class='wave -two'></div>
        <div class='wave -three'></div>
    </div>
    <div class="container position-relative py-0 pb-2" style="background:rgba(255, 255, 255, 0.355);min-height: 200px;">
        @yield('content')

        @include('layouts.footers.guest.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> --}}
</body>

</html>
