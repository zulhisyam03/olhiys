<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/loading.css') }}">    
    <title>Document</title>

    <style>
        body {
            background: rgba(3, 3, 34, 0.829);
        }
    </style>
</head>

<body>
    <div id="" style="" class="animated-bottom">
        <nav class="container-fluid bg-success">
            <div class="container py-1">
                <div class="row text-light ">
                    <div class="col text-start">
                        <img src="images/logo-OLHIYS.png" width="40px" height="30px" alt=""><b>TUGAS <span
                                class="text-dark">CHELSY</span> </b>
                    </div>
                    <div class="col text-end">                        
                        <a href="/tugas"><button class="btn btn-outline-light py-0">Home</button></a>
                        <a href="inputTugas.php" target="content"><button class="btn btn-outline-light py-0">Input</button></a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row text-light pt-2" style="justify-content: center;">
                <div class="col px-5" style="height: 400px;">
                    <table class="" width="100%" height="100%">
                        <tr>
                            <td class="align-middle">
                                <center>
                                    <h2 class="align-middle">
                                        Profile
                                        <span class="text-success">Nama-Mahasiswa</span>
                                    </h2>
                                    <p>
                                        Sekolah Tinggi Manajemen Informatika dan Komputer
                                    </p>
                                </center>
                                <p align="justify">
                                    <b>Pandangan NAMA-MAHASISWA Mengenai Pemrograman Web</b> Isi dengan Kalimat/paragraf mengenai pandangan kalian mengenai pemrograman Web.
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col" style="height: 400px;">
                    <img class="" src="https://bintangsekolahindonesia.com/wp-content/uploads/2020/09/3964906.jpg"
                        alt="" width="100%" height="100%">
                </div>
            </div>
            <div class="row">
                <div class="col text-light text-center mt-3">
                    <h2 class="">HALAMAN <span class="text-success">KONTEN</span></h2>
                    <p class="lh-1">                        
                    </p>
                </div>
            </div>
            <div class="row text-center text-light">
                <div class="col mb-3 " style="height: 400px;">
                    <iframe src="" frameborder="0" name="content" width="100%" height="400px"></iframe>
                </div>                
            </div>
        </div>
        <footer class="bg-success text-center text-light">Copyright &copy; Zul Hisyam 2022</footer>

    </div>

    <script src="{{ asset('js/loading.js') }}"></script>

</body>

</html>
