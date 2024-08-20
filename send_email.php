<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Alamat email tujuan
    $to = 'axellekeren829@gmail.com';
    
    // Subjek email
    $subject = 'Pesan Baru dari Formulir Kontak';
    
    // Pesan email
    $email_message = "Nama: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Pesan:\n$message\n";
    
    // Header email
    $headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    
    // Kirim email
    if (mail($to, $subject, $email_message, $headers)) {
        echo 'Pesan Anda telah dikirim!';
    } else {
        echo 'Gagal mengirim pesan.';
    }
} else {
    echo 'Metode permintaan tidak valid.';
}
?>
