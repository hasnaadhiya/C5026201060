<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kamus Gaul</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

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

        h2 {
            font-weight: bold;
        }
        p {
            margin-bottom: 10px;
            font-style:italic;
        }

        .btn {
            background-color: #c0c999;
            margin-left: -15px;
            max-width: 180px;
            color: #49502A;
            font-weight: bold;
        }

        .card-header {
            background-color: rgb(192, 201, 153);
            color: #49502A;
        }
    </style>
</head>
<body>

<div class="container p-5 my-5 bg-light shadow-lg">
  <h2>HASIL PENCARIAN</h2>
  <p>Arti Kata Gaul</p>
      <div class="row my-3">
          <div class="card">
              <div class="card-header"><?php echo $_POST["kata"] ?></div>
              <div class="card-body">
                  <?php
                  $kata = $_POST["kata"];
                  $kata = strtolower($kata);
                    if ($kata == "baper") {
                        echo "Bawa Perasaan";
                    } else if ($kata == "bucin") {
                        echo "Budak Cinta";
                    } else if ($kata == "gabut") {
                        echo "Bosan dan tidak tahu harus berbuat apa";
                    } else if ($kata == "gaje") {
                        echo "Gak Jelas";
                    } else if ($kata == "gercep") {
                        echo "Gerak Cepat";
                    } else if ($kata == "halu") {
                        echo "Halusinasi; menggambarkan seseorang dengan khayalan yang tinggi";
                    } else if ($kata == "japri") {
                        echo "Jaringan Pribadi";
                    } else if ($kata == "komuk") {
                        echo "Kondisi Muka";
                    } else if ($kata == "mantul") {
                        echo "Mantap Betul";
                    } else if ($kata == "pansos") {
                        echo "Panjat Sosial";
                    } else if ($kata == "afk") {
                        echo "Away From Keyboard";
                    } else if ($kata == "asap") {
                        echo "As Soon As Possible";
                    } else if ($kata == "nolep") {
                        echo "No Life";
                    } else if ($kata == "oot") {
                        echo "Out of Topic";
                    } else if ($kata == "kinap") {
                        echo "Panik";
                    } else if ($kata == "rokum") {
                        echo "Rumah";
                    } else if ($kata == "") {
                        echo "Masukkan kata terlebih dahulu";
                    } else {
                        echo "Mohon maaf kata yang dicari tidak tersedia";
                    }
                  ?>
                  </div>
              </div>
          </div>
          <form action="kamus">
              <button type="submit" class="btn btn-block">Cari Arti Kata Lain</button>
          </form>
        </div>
      </div>
  </div>
</div>

</body>
</html>
