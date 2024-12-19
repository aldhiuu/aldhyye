<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Berhasil Dikirim - SMA 1 Sumilir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> <!-- Link ke file CSS Anda -->
    <style>
        body {
            background: linear-gradient(135deg, #007bff, #00c6ff);
            color: white;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Memastikan body setidaknya setinggi viewport */
        }
        .success-message {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            padding: 40px;
            margin-top: 100px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            flex: 1; /* Membuat area ini tumbuh untuk mengisi ruang yang tersedia */
            display: flex;
            flex-direction: column;
            justify-content: center; /* Memusatkan konten secara vertikal */
        }
        .btn-primary {
            background-color: #28a745; /* Warna hijau untuk tombol */
            border-color: #28a745;
        }
        .btn-primary:hover {
            background-color: #218838; /* Warna hijau gelap saat hover */
            border-color: #1e7e34;
        }
        footer {
            background-color: #222; /* Warna latar belakang footer */
            color: #ccc; /* Warna teks footer */
            padding: 10px 0; /* Padding atas dan bawah */
        }
    </style>
</head>
<body>

<div class="container text-center success-message">
    <h1 class="display-4">Email Berhasil Dikirim!</h1>
    <p class="lead">Terima kasih! Email Anda telah berhasil dikirim. Kami akan segera menghubungi Anda.</p>
    <a href="index.html" class="btn btn-primary btn-lg">Kembali ke Beranda</a>
</div>

<footer class="text-center">
    <p>&copy; 2024 SMA 1 Sumilir. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>