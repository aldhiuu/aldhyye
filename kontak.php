<?php
session_start(); // Memulai sesi
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - SMA 1 Sumilir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="images/logo.png">
</head>
<body>

<!-- Navigasi -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="index.html"> <!-- Tautan ke halaman beranda -->
            <img src="images/logo.png" alt="Logo SekolahKu" class="logo">
            SMA 1 SUMILIR
        </a>            
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTentang" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownTentang">
                        <li><a class="dropdown-item" href="sambutan.html">Sambutan Kepala Sekolah</a></li>
                        <li><a class="dropdown-item" href="#visimisi">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="#sejarah">Sejarah</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pendaftaran.php">Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="kontak.php">Kontak</a> <!-- Tautan ke halaman kontak -->
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Bagian Kontak -->
<section class="contact-section py-5">
    <div class="container">
        <h2 class="text-center mb-4">Kontak Kami</h2>
        <p class="text-center mb-5">Kami siap membantu Anda! Silakan isi formulir di bawah ini untuk mengirim pesan kepada kami:</p>
        
        <form action="send_email.php" method="POST" class="contact-form">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subjek</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Masukkan subjek pesan" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Pesan</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tulis pesan Anda di sini" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary ">Kirim Pesan</button>
        </form>
    </div>
</section>

<!-- Footer -->
<footer class="bg-light text-center py-4">
    <p>&copy; 2024 SMA 1 Sumilir. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>