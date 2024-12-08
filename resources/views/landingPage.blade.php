<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f3f4f6;
        }

        .container {
            text-align: center;
        }

        .module {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            /* Jarak antara teks dan tombol */
            margin-bottom: 20px;
        }

        .btn-group {
            display: flex;
            gap: 10px;
            /* Jarak antara tombol */
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Tugas Sistem Informasi Geografis</h1>
        <h3>I Gede Satyananda Gautama (2105541022)</h3>

        <div class="module">
            <h3>Modul 1 :</h3>
            <div class="btn-group">
                <a href="{{ url('/HandsOn1') }}" class="btn"><b>Tugas 1</b></a>
                <a href="{{ url('/Latihan1') }}" class="btn"><b>Latihan 1</b></a>
            </div>
        </div>
    </div>
</body>

</html>
