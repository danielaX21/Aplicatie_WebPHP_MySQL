<?php
session_start();

// Verificăm dacă formularul a fost trimis și procesăm datele
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Procesarea formularului de pe Index.php
    if (isset($_POST['nume']) && isset($_POST['prenume']) && isset($_POST['telefon']) && isset($_POST['email']) && isset($_POST['serviciu']) && isset($_POST['mesaj'])) {
        // Preluăm datele din formularul de pe Index.php
        $_SESSION['nume'] = $_POST['nume'];
        $_SESSION['prenume'] = $_POST['prenume'];
        $_SESSION['telefon'] = $_POST['telefon'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['serviciu'] = $_POST['serviciu'];
        $_SESSION['mesaj'] = $_POST['mesaj'];

        // Aici poți adăuga orice alte operații sau validări necesare
        // Redirect sau mesaj de succes
        header("Location: Index.php"); // Redirecționăm la pagina Index.php
        exit();
    }

    // Procesarea formularului de Contact
    elseif (isset($_POST['nume']) && isset($_POST['email']) && isset($_POST['mesaj'])) {
        // Preluăm datele din formularul de contact
        $_SESSION['nume'] = $_POST['nume'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['mesaj'] = $_POST['mesaj'];

        // Aici poți adăuga logica de procesare a datelor (de exemplu, trimiterea unui email, salvarea în baza de date, etc.)
        // De exemplu, trimiterea unui email:
        // mail($to, $subject, $message, $headers);

        // Redirecționăm utilizatorul la o pagină de succes (de exemplu, Contact.php)
        header("Location: Contact.php"); // Sau altă pagină de succes
        exit();
    }
}
?>
