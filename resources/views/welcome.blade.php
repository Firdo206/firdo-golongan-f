<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Minggu 1 Workshop sistem informasi WEB framework</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #f4f6f8, #e9eef3);
            text-align: center;
            padding: 40px;
        }

        .card {
            background: white;
            padding: 30px 35px;
            max-width: 650px;
            margin: auto;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,.12);
            animation: fadeIn 1s ease-in-out;
        }

        .header {
            background: linear-gradient(135deg, #c70101, #8b0000);
            color: white;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 25px;
        }

        h1 {
            margin: 0;
            font-size: 32px;
            letter-spacing: 1px;
        }

        h3 {
            margin-top: 8px;
            font-weight: normal;
            opacity: 0.9;
        }

        p {
            text-align: justify;
            line-height: 1.8;
            color: #333;
            margin-top: 20px;
        }

        .highlight {
            color: #c70101;
            font-weight: bold;
        }

        img {
            width: 320px;
            border-radius: 12px;
            margin-top: 25px;
            box-shadow: 0 6px 15px rgba(0,0,0,.2);
            transition: transform 0.3s ease;
        }

        img:hover {
            transform: scale(1.05);
        }

        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="header">
            <h1>Tugas Minggu 1 Workshop sistem informasi WEB framework</h1>
            <h3>Firdo Al Farobbi Golongan F</h3>
        </div>

        <p>
            <span class="highlight">Manchester United</span> adalah klub sepak bola profesional yang berbasis di Manchester, Inggris.
            Didirikan pada tahun 1878 dengan nama Newton Heath LYR Football Club, klub ini resmi berganti nama menjadi
            Manchester United pada tahun 1902. Hingga saat ini, Manchester United dikenal sebagai salah satu klub
            paling sukses dan populer di dunia, dengan segudang prestasi di liga domestik maupun kompetisi internasional.
        </p>

        <img src="{{ asset('images/MU.jpeg') }}" alt="Gambar Manchester United">

        <div class="footer">
            Framework Laravel
        </div>
    </div>

</body>
</html>
