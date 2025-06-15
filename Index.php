

<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Daniela Georgeta Gavrila">
    <meta name="description" content="Site servicii financiare">
    <meta name="keywords" content="Contabilitate">
    <link rel="stylesheet" href="style.css">
    <title>ConsultXpert</title>
</head>

<body>
    <!-- Acesta este un comentariu pentru header -->
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="Index.php" class="menu-link">Acasă</a></li>
                    <li><a href="Servicii.php" class="menu-link">Servicii</a></li>
                    <li><a href="Despre-noi.php" class="menu-link">Despre noi</a></li>
                    <li><a href="Echipa-noastra.php" class="menu-link">Specialistii Nostri</a></li>
                    <li><a href="Contact.php" class="menu-link">Contact</a></li>
                    <li><a href="Feedback.php" class="menu-link">Feedback</a></li>
                    <li><a href="login.php" class="menu-link">LogIn</a></li>
                </ul>
                <img src="logo1.jpg" alt="Logo" class="logo" id="main-logo">
            </nav>
        </div>
    </header>

    <!-- Imaginea principală -->
    <img src="pexels-olly-3760067.jpg" alt="Ecran de Acasă" class="home-screen-container" style="width:100%; height:70%;"> 

    <!-- Secțiunea de ofertă personalizată -->
    <section class="content-section">
        <div class="container">
            <div class="text-container-servicii-personalizate-pentru-tine">
                <h2>Servicii Personalizate pentru Tine</h2>
                <form id="ofertapersonalizataForm" action="index.php" method="POST">
                    <div class="form-group">
                        <label for="nume">Nume:</label>
                        <input type="text" id="nume" name="nume" required>
                    </div>
                    <div class="form-group">
                        <label for="prenume">Prenume:</label>
                        <input type="text" id="prenume" name="prenume" required>
                    </div>
                    <div class="form-group">
                        <label for="telefon">Număr de Telefon:</label>
                        <input type="tel" id="telefon" name="telefon" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Adresă Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="serviciu">Selectați Serviciul:</label>
                        <select id="serviciu" name="serviciu" required>
                            <option value="" disabled selected>Selectați un serviciu</option>
                            <option value="Contabilitate">Contabilitate</option>
                            <option value="Audit Financiar">Audit Financiar</option>
                            <option value="Declaratii Fiscale">Declaratii Fiscale</option>
                            <option value="Consiliere Fiscala">Consiliere Fiscala</option>
                            <option value="Servicii de Payroll">Servicii de Payroll</option>
                            <option value="Audit Intern">Audit Intern</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="mesaj">Mesaj:</label>
                        <textarea id="mesaj" name="mesaj" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
    <label for="id_serviciu">ID Serviciu:</label>
    <input type="number" id="id_serviciu" name="id_serviciu" required>
</div>
                    <button type="submit">Trimite Cerere</button>
                </form>
            </div>
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
    $prenume = $_POST['prenume'];
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];
    $serviciu = $_POST['serviciu'];
    $mesaj = $_POST['mesaj'];
    $id_serviciu = $_POST['id_serviciu']; // Adăugat câmpul id_serviciu

// Creăm interogarea pentru inserarea datelor în tabel
$sql = "INSERT INTO servicii (nume, prenume, telefon, email, serviciu, mesaj, id_serviciu)
        VALUES ('$nume', '$prenume', '$telefon', '$email', '$serviciu', '$mesaj', '$id_serviciu')";

    // Executăm interogarea
    if ($conn->query($sql) === TRUE) {
        echo "Datele au fost adăugate cu succes!";
    } else {
        echo "Eroare: " . $sql . "<br>" . $conn->error;
    }

    // Închidem conexiunea
    $conn->close();

    // Stocăm datele în sesiune pentru a le folosi mai departe
  
    $_SESSION['nume'] = $nume;
    $_SESSION['prenume'] = $prenume;
    $_SESSION['telefon'] = $telefon;
    $_SESSION['email'] = $email;
    $_SESSION['serviciu'] = $serviciu;
    $_SESSION['mesaj'] = $mesaj;
    $_SESSION['id_serviciu'] = $id_serviciu;  // Adăugat id_serviciu în sesiune

    // Redirecționăm utilizatorul la pagina principală (Index.php)
    header("Location: Index.php");
    exit();
}
?>
