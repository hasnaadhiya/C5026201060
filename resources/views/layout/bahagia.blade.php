<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.1/umd/popper.min.js" integrity="sha512-8jeQKzUKh/0pqnK24AfqZYxlQ8JdQjl9gGONwGwKbJiEaAPkD3eoIjz3IuX4IrP+dnxkchGUeWdXLazLHin+UQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/js/tempus-dominus.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/css/tempus-dominus.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        </style>

</head>
<body>
    <nav class="navbar navbar-light bg-light sticky-top">
        <div class="container-fluid d-flex justify-content-start mx-3">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/fotohasna.jpg') }}" alt="" width="50" class="img-fluid rounded-circle float-start">
            </a>
            <div class="fw-bold text-wrap text-decoration-none text-dark py-2">
                <span>5026201060</span><br>
                <span>Hasna Dhiya Nafitra</span>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row m-5">
            <aside class="col-2">


                <div class="row container rounded bg-secondary bg-opacity-10 p-2">
                    <nav class="navbar navbar-expand align-items-start py-2 sticky">
                        <div class="col fw-bold">
                            <div class="align-items-center text-center mb-1 p-1 border-bottom">
                                <span>Menu</span>
                            </div>
                            <ul class="navbar-nav flex-column">
                                <li class="nav-item">
                                    <a href="/pegawai" class="nav-link text-dark">Data Pegawai</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/absen" class="nav-link text-dark">Data Absen</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/mutasi" class="nav-link text-dark">Data Mutasi</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link disabled">Minggu Depan</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link disabled">Praktikum</a>
                                </li>
                            </ul>
                        </div>
                      </nav>
                </div>
            </aside>
            <div class="col-10">
                <div class="row container-fluid rounded bg-secondary bg-opacity-10 p-4">
                    <h2 class="fw-bold">@yield('judulhalaman')</h2>
                    @section('konten')
                    @show
                </div>
            </div>
        </div>
        <footer class="container-fluid bg-light text-muted p-3">
            <div class="row text-center">
                <span>&copy; 2021</span>
            </div>
            <div class="row text-center">
                <span>5026201060 - Hasna Dhiya Nafitra</span>
            </div>
        </footer>
    </div>
    </div>

</body>
</html>
