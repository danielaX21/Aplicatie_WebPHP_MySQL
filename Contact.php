<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script defer src="javascript.js"></script>
    <title>ConsultXpert</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="Index.php" class="menu-link">Acasă</a></li>
                    <li><a href="Servicii.php" class="menu-link">Servicii</a></li>
                    <li><a href="Despre-noi.php" class="menu-link">Despre noi</a></li>
                    <li><a href="Echipa-noastra.php" class="menu-link">Echipa noastră</a></li>
                    <li><a href="Contact.php" class="menu-link">Contact</a></li>
                    <li><a href="Feedback.php" class="menu-link">Feedback</a></li>
                    <li><a href="login.php" class="menu-link">LogIn</a></li>
                </ul>
                <img src="logo1.jpg" alt="Logo" class="logo" id="main-logo">
            </nav>
        </div>
    </header>

    <section class="content-section">
        <div class="container">
            <div class="contact-section">
                <h2>Contact</h2>
                <p>SUNTEM AICI PENTRU A VĂ AJUTA<br>
Așteptăm cu drag orice întrebări de Luni până Vineri între orele 09:00 - 18:00 unde puteti contacta unul dintre specialistii nostri.</p>
   <a href="#program-lucru">Program de lucru</a>
<h1>Cum ne poți contacta</h1>
<p>Dacă dorești informații despre serviciile noastre ne poți suna sau trimite un e-mail.
Îți vom răspunde în cel mai scurt timp.</p>
                <div class="contact-info">
                    <p>Nume:ConsultXpert</p>
                    <p>Adresă: Str Calea Dumbravii, Nr. 17</p>
                    <p>Telefon: 0269 215 037</p>
                    <p>Email: contact@consultXpert.ro</p>
                    <p>Locație: <a href="https://www.google.com/maps/place/Facultatea+de+%C8%98tiin%C8%9Be+Economice+-+Universitatea+%22Lucian+Blaga%22+din+Sibiu/@45.7884407,24.1479748,17z/data=!4m14!1m7!3m6!1s0x474c6785ec8db5e9:0x7ab72242b8387082!2sCalea+Dumbr%C4%83vii+5,+Sibiu+557260!3b1!8m2!3d45.7892639!4d24.1498227!3m5!1s0x474c67867b2259b3:0x9b37b50b2dba2dfe!8m2!3d45.7873389!4d24.1500077!16s%2Fg%2F1tdf9x2g?entry=ttu" target="_blank">Locatia noastra</a></p>
                </div>
                <form action="#" method="post" class="contact-form">
    <label for="nume">Nume:</label>
    <input type="text" id="nume" name="nume" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="mesaj">Mesaj:</label>
    <textarea id="mesaj" name="mesaj" rows="4" required></textarea>
    <button type="submit">Trimiteti</button>
</form>
            </div>
        </div>
    </section>

    <section class="content-section" id="program-lucru">
        <div class="container">
            <h2>Program de lucru</h2>
            <table>
                <caption>Luni-Vineri</caption>
                <thead>
                    <tr>
                        <th>Specialistii Nostri</th>
                        <th>Luni</th>
                        <th>Marți</th>
                        <th>Miercuri</th>
                        <th>Joi</th>
                        <th>Vineri</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mihai Ionescu</td>
                        <td>10:00 - 18:00</td>
                        <td>10:00 - 18:00</td>
                        <td>10:00 - 18:00</td>
                        <td>10:00 - 18:00</td>
                        <td>10:00 - 18:00</td>
                    </tr>
                    <tr>
                        <td>Roxana Georgescu</td>
                        <td>09:00 - 17:00</td>
                        <td>09:00 - 17:00</td>
                        <td>09:00 - 17:00</td>
                        <td>09:00 - 17:00</td>
                        <td>09:00 - 17:00</td>
                    </tr>
                    <tr>
                        <td>Lucian Popa</td>
                        <td>10:00 - 18:00</td>
                        <td>10:00 - 18:00</td>
                        <td>10:00 - 18:00</td>
                        <td>10:00 - 18:00</td>
                        <td>10:00 - 18:00</td>
                    </tr>
                    <tr>
                        <td>Andreea Rusu</td>
                        <td>09:00 - 17:00</td>
                        <td>09:00 - 17:00</td>
                        <td>09:00 - 17:00</td>
                        <td>09:00 - 17:00</td>
                        <td>09:00 - 17:00</td>
                    </tr>
                    <tr>
                        <td>Andrei Neagu</td>
                      <td>09:00 - 17:00</td>
                        <td>09:00 - 17:00</td>
                        <td>09:00 - 17:00</td>
                        <td>09:00 - 17:00</td>
                        <td>09:00 - 17:00</td>
                    </tr>
                    <tr>
                        <td>Gabriela Stan</td> 
			<td>10:00 - 18:00</td>
                        <td>10:00 - 18:00</td>
                        <td>10:00 - 18:00</td>
                        <td>10:00 - 18:00</td>
                        <td>10:00 - 18:00</td>
                    </tr>
                </tbody>
            </table>
            <h3>Orarul detaliat</h3>
            <object data="orar.pdf" type="application/pdf" style="width: 100%; height: 600px;">
                PDF-ul nu poate fi afișat. 
                <a href="orar.pdf" target="_blank">Descarcă orarul aici.</a>
            </object>
        </div>
    </section>
</body>
</html>

<?php
// Încarcă fișierul de conexiune
include 'config.php'; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "consultxpert";  // Numele bazei tale de date

// Crează conexiunea
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificăm conexiunea
if ($conn->connect_error) {
    die("Conexiunea a eșuat: " . $conn->connect_error);
}

// Verificăm dacă formularul a fost trimis prin POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Preluăm datele din formular
    $nume = $_POST['nume'];
    $email = $_POST['email']; 
    $mesaj = $_POST['mesaj'];

    // Creăm interogarea pentru inserarea datelor în tabel
    $sql = "INSERT INTO contact (nume,email, mesaj)
            VALUES ('$nume', '$email', '$mesaj')";

    // Executăm interogarea
    if ($conn->query($sql) === TRUE) {
        echo "Datele au fost adăugate cu succes!";
    } else {
        echo "Eroare: " . $sql . "<br>" . $conn->error;
    }

    // Închidem conexiunea
    $conn->close();

    // Stocăm datele în sesiune pentru a le folosi mai departe
    session_start();
    $_SESSION['nume'] = $nume;
    $_SESSION['email'] = $email;
    $_SESSION['mesaj'] = $mesaj;

    // Redirecționăm utilizatorul la pagina principală (Index.php)
    header("Location: Contact.php");
    exit();
}
?>