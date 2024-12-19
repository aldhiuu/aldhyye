<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Konfigurasi SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'aldhisyahrul.11@gmail.com'; // Ganti dengan email Anda
    $mail->Password = 'dukpvonknrhxjghp'; // Ganti dengan App Password jika menggunakan Gmail
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    // Pengaturan email
    $mail->setFrom('aldhisyahrul.11@gmail.com', 'ALDHI'); // Ganti dengan email dan nama Anda
    $mail->addAddress('aldhisyahrul.11@gmail.com'); // Ganti dengan alamat email penerima
    $mail->Subject = 'Test Email';
    $mail->Body = 'This is a test email sent using PHPMailer.';

 // Kirim email
 if ($mail->send()) {
    // Redirect ke halaman berhasil
    header("Location: berhasil.php");
    exit(); // Pastikan untuk keluar setelah redirect
} else {
    echo 'Email sending failed. Error: ' . $mail->ErrorInfo;
}
} catch (Exception $e) {
echo 'Email sending failed. Error: ' . $mail->ErrorInfo;
}
?>