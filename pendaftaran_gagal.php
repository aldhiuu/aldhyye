<?php
session_start(); // Memulai sesi
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Gagal - SMA 1 Sumilir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="images/logo.png">
</head>
<body>

<div class="container text-center mt-5">
    <h1>Pendaftaran Gagal</h1>
    <p><?php echo isset($_SESSION['error']) ? $_SESSION['error'] : 'Terjadi kesalahan. Silakan coba lagi.'; ?></p>
    <a href="pendaftaran.html" class="btn btn-primary">Kembali ke Pendaftaran</a>
</div>

<footer class="text-center py-4">
    <p>&copy; 2024 SMA 1 Sumilir. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>