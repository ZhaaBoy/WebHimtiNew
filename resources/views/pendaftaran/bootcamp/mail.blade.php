<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HIMTI BOOTCAMP 2023</title>

    <style>
        body {
            background-color: #bdc3c7;
            margin: 0;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            margin: 20%;
            text-align: center;
            margin: 0px auto;
            width: 580px;
            max-width: 580px;
            margin-top: 10%;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        .garis {
            width: 75%;
        }

        .footer {
            margin-top: 5%;
        }
    </style>
</head>

<body>
    <div class="card" style="text-align: center;">
        <h1>Berhasil</h1>
        <p>Terima Kasih <b>{{ $nama }}</b> Sudah Mendaftar HIMTI BOOTCAMP 2023 </p>
        <hr class="garis">
        <p>Silakan klik link dibawah ini untuk memasuki group HIMTI BOOTCAMP 2023 </p>
        <a href="https://chat.whatsapp.com/FFpvwZ7azSf7ulcx7yB2TD">Klik disini</a>
        <hr class="garis">
        <br>
        <hr class="garis">
        <strong>Note : Mohon simpan email sebagai verifkasi pendaftaran kepada contact person
            yang tertera</strong>
        <br>
        <br>
        <img src=" {{ asset('assets/img/logo/himti.png') }} " style="width:40%;">
        <h4>Untuk informasi lebih lanjut : </h4>
        <h5>Instagram :<a href="https://www.instagram.com/himtiumt/" style="text-decoration: none;"> @himtiumt</a>
        </h5>
        <h5>Whatsapp :<a href="https://api.whatsapp.com/send?phone=6289630626130" style="text-decoration: none;">
                089630626130 (Deril Hamdani)</a></h5>
        <h5>Whatsapp :<a href="https://api.whatsapp.com/send?phone=6287884792346" style="text-decoration: none;">
                087884792346 (Raya An-nazily)</a></h5>
        <div class="footer">
            Copyright &copy; HIMTI-UMT 2023
        </div>
    </div>
</body>

</html>
