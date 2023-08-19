<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = $_POST['nume'];
    $email = $_POST['email'];
    $mesaj = $_POST['mesaj'];

    $to = "adrianghedeon12@gmail.com"; // Adresa de email către care doriți să trimiteți
    $subject = "Mesaj de la $nume";
    $message = "Nume: $nume\nEmail: $email\nMesaj: $mesaj";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Mesajul a fost trimis cu succes!";
    } else {
        echo "A apărut o eroare la trimiterea mesajului.";
    }
} else {
    echo "A apărut o eroare la procesarea formularului.";
}
?>