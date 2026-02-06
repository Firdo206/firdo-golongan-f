<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            text-align: center;
            padding: 40px;
        }
        .card {
            background: white;
            padding: 30px;
            max-width: 600px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,.1);
        }
        img {
            width: 300px;
            border-radius: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>Tugas Laravel</h1>
        <h3>Firdo – Golongan F</h3>

        <p>
            King Manchester united adalah klub sepak bola profesional yang berbasis di Manchester, Inggris. Didirikan pada tahun 1878 sebagai Newton Heath LYR Football Club, klub ini berganti nama menjadi Manchester United pada tahun 1902. Manchester United telah menjadi salah satu klub paling sukses dan terkenal di dunia, dengan sejarah panjang prestasi di liga domestik dan kompetisi internasional.
        </p>

        <img src="{{ asset('images/MU.jpeg') }}" alt="Gambar Tugas">
    </div>

</body>
</html>
