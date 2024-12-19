<?php
// Mulai sesi
session_start();

// Cek apakah formulir telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama = htmlspecialchars(trim($_POST['nama']));
    $email = htmlspecialchars(trim($_POST['email']));
    $telepon = htmlspecialchars(trim($_POST['telepon']));
    $alamat = htmlspecialchars(trim($_POST['alamat']));
    $tanggal_lahir = htmlspecialchars(trim($_POST['tanggal_lahir']));
    $sekolah_asal = htmlspecialchars(trim($_POST['sekolah_asal']));

    // Validasi data (contoh sederhana)
    if (empty($nama) || empty($email) || empty($telepon) || empty($alamat) || empty($tanggal_lahir) || empty($sekolah_asal)) {
        $_SESSION['error'] = "Semua field harus diisi!";
        header("Location: pendaftaran.html");
        exit();
    }

    // Simpan data ke file teks
    $data = "Nama: $nama, Email: $email, Telepon: $telepon, Alamat: $alamat, Tanggal Lahir: $tanggal_lahir, Sekolah Asal: $sekolah_asal\n";
    if (file_put_contents('pendaftaran.txt', $data, FILE_APPEND) === false) {
        $_SESSION['error'] = "Gagal menyimpan data. Silakan coba lagi.";
        header("Location: pendaftaran.html");
        exit();
    }

   // Set pesan sukses
$_SESSION['success'] = "Pendaftaran berhasil! Terima kasih telah mendaftar.";
header("Location: pendaftaran_berhasil.php"); // Redirect ke halaman pendaftaran berhasil
exit();

// Jika ada yang kosong, set pesan error dan redirect ke halaman pendaftaran gagal
if (empty($nama) || empty($email) || empty($telepon) || empty($alamat) || empty($tanggal_lahir) || empty($sekolah_asal)) {
    $_SESSION['error'] = "Semua field harus diisi!";
    header("Location: pendaftaran_gagal.php"); // Redirect ke halaman pendaftaran gagal
    exit();
}

// Jika penyimpanan gagal
if (file_put_contents('pendaftaran.txt', $data, FILE_APPEND) === false) {
    $_SESSION['error'] = "Gagal menyimpan data. Silakan coba lagi.";
    header("Location: pendaftaran_gagal.php"); // Redirect ke halaman pendaftaran gagal
    exit();
}

} else {
    // Jika tidak ada data yang dikirim, redirect ke halaman pendaftaran
    header("Location: pendaftaran.html");
    exit();
}
?>