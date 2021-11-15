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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- css -->
    <style>
        body {
            background-color: rgb(192, 201, 153);
            font-family: 'Poppins', sans-serif;
            color: #49502A;

        }

        .container {
            border: 1px solid;
            border-radius: 30px;
            min-width: 576px;
        }

        h2{
            text-align: center;
            font-weight: bold;
        }
        #subtitle {
            text-align: center;
            margin-bottom: 10px;

        }

        form {
            text-align: center;
        }
        ul.no-bullets {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }


        .btn {
            background-color: #c0c999;
            margin-right: 15px;
            margin-left: -15px;
            min-width: 65px;
            color: #49502A;
            font-weight: bold;
        }
    </style>

    <!-- javascript -->
    <script>
        function kamus() {
            var input = document.getElementById("kata").value;
            var w = document.getElementById("go").value;

            switch (input) {
                case "baper":
                    alert("Bawa Perasaan");
                    break;
                case "Bucin":
                    alert("Budak Cinta");
                    break;
                case "Gabut":
                    alert("Bosan dan tidak tahu harus berbuat apa");
                    break;
                case "Gaje":
                    alert("Gak Jelas");
                    break;
                case "Gercep":
                    alert("Gerak Cepat");
                    break;
                case "Halu":
                    alert("Halusinasi; menggambarkan seseorang dengan khayalan yang tinggi");
                    break;
                case "Japri":
                    alert("Jaringan Pribadi");
                    break;
                case "Komuk":
                    alert("Kondisi Muka");
                    break;
                case "Mantul":
                    alert("Mantap Betul");
                    break;
                case "Pansos":
                    alert("Panjat Sosial");
                    break;
                case "AFK":
                    alert("Away From Keyboard");
                    break;
                case "ASAP":
                    alert("As Soon As Possible");
                    break;
                case "Nolep":
                    alert("No Life");
                    break;
                case "OOT":
                    alert("Out of Topic");
                    break;
                case "Kinap":
                    alert("Panik");
                    break;
                case "Rokum":
                    alert("Rumah");
                    break;
                default:
                    alert("Mohon maaf kata yang dicari tidak tersedia");

            }
        }
    </script>
</head>

<body>
    <div class="container p-5 my-5 bg-light shadow-lg">
        <!-- Judul -->
        <h2>KAMUS GAUL</h2>
        <div id="subtitle"><i>Cari arti kata gaul di sini</i></div>
        <form action="artikata" method="post" name="kamusgaul" onsubmit="return kamus();">
            @csrf
            <div class="row">
                <div class="col-11">
                    <input type="text" class="form-control" id="kata" name="kata" placeholder="Masukkan kata yang ingin dicari">
                </div>
                <div class="col-1">
                    <button type="submit" class="btn btn-block">Cari</button>
                </div>
            </div>
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
