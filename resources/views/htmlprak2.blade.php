<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registration</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
        body {
            background-image: linear-gradient(rgb(241, 249, 250), rgb(210, 223, 247));
            font-family: 'Poppins', sans-serif;
        }

        h1 {
            font-weight: bold;
            color: rgb(56, 69, 82);
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .container {
            border-radius: 30px;
        }

    </style>
</head>

<body>
    <div class="container p-5 my-5 bg-light shadow-lg">
        <h1 class="text-center mb-5">REGISTRATION FORM</h1>
        <form action="www.bukalapak.com" name="myform" onsubmit="return formValidation()" method="post">
            <div>
                <label for="name" class="form-label">Name:</label><br>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name">
                <br>
            </div>

            <div>
                <label for="address" class="form-label">Address:</label><br>
                <input type="text" class="form-control id=" address" name="address" placeholder="Enter your address">
                <br>
            </div>

            <div>
                <label for="email" class="form-label">E-mail Address:</label><br>
                <input type="email" class="form-control id="email" name="email" placeholder="Enter your email">
                <br>
            </div>

            <div>
                <label for="password" class="form-label">Password:</label><br>
                <input type="password" class="form-control id=" password" name="password"
                    placeholder="Enter your password">
                <br>
            </div>

            <div>
                <label for="telephone" class="form-label">Telephone:</label><br>
                <input type="number" class="form-control id=" telephone" name="telephone"
                    placeholder="Enter your phone number">
                <br>
            </div>

            <div>
                <label for="course" class="form-label">Select Your Course:</label> <br>
                <select class="form-select" name="course" id="course">
                    <option value="" selected disabled>Select course..</option>
                    <option value="btech">BTECH</option>
                    <option value="bba">BBA</option>
                    <option value="bca">BCA</option>
                    <option value="bcom">B.COM</option>
                    <option value="geekforgeeks">GEEKFORGEEKS</option>
                </select><br>
            </div>

            <div>
                <label for="zipcode" class="form-label">Zip Code:</label><br>
                <input type="number" class="form-control id=" zipcode" name="zipcode" placeholder="Enter your zip code">
                <br>
            </div>

            <div class="button">
                <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Send">
                <input type="reset" class="btn btn-outline-danger">
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>

</html>