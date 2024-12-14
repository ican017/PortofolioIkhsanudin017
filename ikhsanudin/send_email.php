<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email tujuan
    $to = "017freelance017@gmail.com";  // Ganti dengan alamat email yang Anda tuju
    $subject = "Pesan dari Kontak Website";

    // Pesan yang akan dikirim
    $body = "Nama: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Pesan: \n$message\n";

    // Header email
    $headers = "From: $email";

    // Kirim email
    if (mail($to, $subject, $body, $headers)) {
        header("Location: contact.html?status=success");
        exit();
    } else {
        header("Location: contact.html?status=error");
        exit();
    }
}
?>
