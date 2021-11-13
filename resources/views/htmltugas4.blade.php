<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- css -->
    <style>
        body {
            background-color: beige;

        }

        .box {
            border-style: groove;
        }

        h2,
        #subtitle,
        form {
            text-align: center;
        }

        ul.no-bullets {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
    </style>
    <!-- javascript -->
    <script src="script.js"></script>
</head>

<body>
    <div class="container-lg box m-5 p-3">
        <!-- Judul -->
        <h2>Cari Arti Kata Gaul</h2>
        <div id="subtitle"><i>Cari arti kata gaul di sini</i></div>
        <form action="">
            <input type="text" id="kata" placeholder="Masukkan kata gaul yang ingin dicari" size="80">
            <button onclick="kamus()" id="go">Cari</button>
        </form>
        <br>
        <div class="row justify-content-center">
            <div class="col-3">
                <ul class="no-bullets">
                    <li>Baper</li>
                    <li>Bucin</li>
                    <li>Gabut</li>
                    <li>Gaje</li>
                    <li>Gercep</li>
                    <li>Halu</li>
                    <li>Japri</li>
                    <li>Komuk</li>
                </ul>
            </div>
            <div class="col-3">
                <ul class="no-bullets">
                    <li>Mantul</li>
                    <li>Pansos</li>
                    <li>AFK</li>
                    <li>ASAP</li>
                    <li>Nolep</li>
                    <li>OOT</li>
                    <li>Kinap</li>
                    <li>Rokum</li>
                </ul>
            </div>


        </div>

    </div>
</body>

</html>
