<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


    <title>ETS PWEB</title>

    <style>
        body {
            background-color: rgb(196, 221, 206);
            font-family: 'Poppins', sans-serif;

        }

        .container {
            border-radius: 10px;
            border: solid rgb(56, 94, 78) 2px;
            background-color: rgb(191, 236, 210);
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        h1 {
            font-weight: bold;
        }

        .form-control {
            border: solid 1px;
        }

        .form-select {
            border: solid 1px;
        }


    </style>
</head>

<body>
    <p class="m-3">Hasna Dhiya Nafitra <br> Hasna <br> 5026201060
    <div class="container shadow-lg p-3">

        <h1 class="text-center mb-4">Form Input Data Barang</h1>
        <form action="www.bukalapak.com" name="dataBarang" onsubmit=" return formValidation();">
            <div class="row my-3">
                <div class="col-5">
                    <label for="namabarang" class="form-label">Nama Barang</label>
                </div>
                <div class="col-1">
                    <p>:</p>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" id="namabarang" name="namabarang" minlength="10">
                </div>
            </div>

            <div class="row my-3">
                <div class="col-5">
                    <label for="harga" class="form-label">Harga</label>
                </div>
                <div class="col-1">
                    <p>:</p>
                </div>
                <div class="col-6">
                    <input type="number" class="form-control" id="harga" name="harga" min="5000">
                </div>
            </div>

            <div class="row my-3">
                <div class="col-5">
                    <label for="jenisbarang" class="form-label">Jenis Barang</label>
                </div>
                <div class="col-1">
                    <p>:</p>
                </div>
                <div class="col-6">
                    <select type="text" class="form-select" id="jenisbarang" name="jenisbarang">
                        <option value="" selected disabled></option>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                        <option value="nonmamin">Non Makanan Minuman</option>
                    </select>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-5">
                    <label for="barcode" class="form-label">Kode Barcode</label>
                </div>
                <div class="col-1">
                    <p>:</p>
                </div>
                <div class="col-6">
                    <input type="number" class="form-control" id="barcode" name="barcode" minlength="10">
                </div>
            </div>

            <div class="button d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mx-2" style="width: 350px;">Kirim</button>
                <button type="reset" class="btn btn-success mx-2" style="width: 350px;">Reset</button>
            </div>



        </form>


    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script>
        function formValidation() {
            if (document.forms["dataBarang"]["namabarang"].value == "") {
                alert("Masukkan nama barang");
                document.forms["dataBarang"]["namabarang"].focus();
                return false;
            }
            if (document.forms["dataBarang"]["harga"].value == "") {
                alert("Masukkan harga barang");
                document.forms["dataBarang"]["harga"].focus();
                return false;
            }
            if (document.forms["dataBarang"]["jenisbarang"].value == "") {
                alert("Pilih jenis barang");
                document.forms["dataBarang"]["jenisbarang"].focus();
                return false;
            }
            if (document.forms["dataBarang"]["barcode"].value == "") {
                alert("Masukkan kode barcode barang");
                document.forms["dataBarang"]["barcode"].focus();
                return false;
            }
            if (document.forms["dataBarang"]["barcode"].value.length < 10) {
                alert("Masukkan kode barcode minimal 10 digit");
                document.forms["dataBarang"]["barcode"].focus();
                return false;
            }


        }
    </script>

</body>

</html>
