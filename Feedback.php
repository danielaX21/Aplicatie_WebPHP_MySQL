<?php
// Conexiune la baza de date
include 'config.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "consultxpert";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexiunea a eșuat: " . $conn->connect_error);
}

// Adăugare feedback
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $nume = $_POST['nume'];
    $email = $_POST['email'];
    $id_serviciu = $_POST['id_serviciu'];
    $mesaj = $_POST['mesaj'];

    $sql = "INSERT INTO feedback (nume, email, id_serviciu, mesaj)
            VALUES ('$nume', '$email', '$id_serviciu', '$mesaj')";
    if ($conn->query($sql) === TRUE) {
        echo "Feedback-ul a fost trimis cu succes!";
    } else {
        echo "Eroare: " . $sql . "<br>" . $conn->error;
    }
}

$query1 = "SELECT f.email, f.nume, f.mesaj, s.serviciu, s.id_serviciu
           FROM feedback f
           JOIN servicii s ON f.id_serviciu = s.id_serviciu";
$result1 = $conn->query($query1);

$query2 = "SELECT f.email, f.nume, S.mesaj, s.serviciu
           FROM feedback f
           JOIN servicii s ON f.id_serviciu = s.id_serviciu
           WHERE s.serviciu = 'Contabilitate'";
$result2 = $conn->query($query2);

$query3 = "SELECT f.email, f.nume, GROUP_CONCAT(s.serviciu) AS servicii_feedback
           FROM feedback f
           JOIN servicii s ON f.id_serviciu = s.id_serviciu
           GROUP BY f.email, f.nume
           HAVING COUNT(DISTINCT s.serviciu) > 1";
$result3 = $conn->query($query3);

$feedbackuri = $conn->query("SELECT f.email, f.nume, f.mesaj, f.id_serviciu 
                             FROM feedback f");
?>
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
    <title>ConsultXpert - Feedback</title>
</head>
<body>
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

    <section class="content-section">
        <div class="container">
            <h2>Feedback</h2>
            <form action="feedback.php" method="POST">
                <div class="form-group">
                    <label for="nume">Nume:</label>
                    <input type="text" id="nume" name="nume" required value="<?= isset($edit_data['nume']) ? $edit_data['nume'] : '' ?>">
                </div>
                <div class="form-group">
                    <label for="email">Adresă Email:</label>
                    <input type="email" id="email" name="email" required value="<?= isset($edit_data['email']) ? $edit_data['email'] : '' ?>" <?= isset($edit_data['email']) ? 'readonly' : '' ?> >
                </div>
                <div class="form-group">
                    <label for="id_serviciu">ID Serviciu:</label>
                    <input type="number" id="id_serviciu" name="id_serviciu" required value="<?= isset($edit_data['id_serviciu']) ? $edit_data['id_serviciu'] : '' ?>">
                </div>
                <div class="form-group">
                    <label for="mesaj">Mesaj:</label>
                    <textarea id="mesaj" name="mesaj" rows="4" required><?= isset($edit_data['mesaj']) ? $edit_data['mesaj'] : '' ?></textarea>
                </div>
                <?php if (isset($edit_data)): ?>
                    <button type="submit" name="update">Actualizează Feedback</button>
                <?php else: ?>
                    <button type="submit" name="submit">Trimite Feedback</button>
                <?php endif; ?>
            </form>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <h2>Feedback-uri Existente</h2>

            <!-- Structura FOR -->
            <h4>Rating Test:</h4>
            <p>
                <?php for ($i = 0; $i < 5; $i++) { echo "★ "; } ?>
            </p>

            <!-- Structura WHILE -->
            <h4>Mesaje Standard:</h4>
            <ul>
                <?php
                $mesaje = ["Mulțumim pentru feedback!", "Îl vom analiza cât mai curând.", "O zi frumoasă!"];
                $i = 0;
                while ($i < count($mesaje)) {
                    echo "<li>" . $mesaje[$i] . "</li>";
                    $i++;
                }
                ?>
            </ul>

            <!-- Structura DO-WHILE -->
            <h4>Status:</h4>
            <p>
                <?php
                $executat = false;
                do {
                    echo "Se încarcă răspunsurile...<br>";
                    $executat = true;
                } while (false);
                ?>
            </p>

            <!-- Structura FOREACH -->
            <h4>Sfaturi utile pentru feedback:</h4>
            <ol>
                <?php
                $tips = [
                    "Fii cât mai specific în mesaj.",
                    "Evaluează serviciul folosit.",
                    "Include sugestii dacă ai."
                ];
                foreach ($tips as $sfat) {
                    echo "<li>$sfat</li>";
                }
                ?>
            </ol>

            <table>
                <tr>
                    <th>Email</th>
                    <th>Nume</th>
                    <th>Serviciu</th>
                    <th>Mesaj</th>
                    <th>Acțiuni</th>
                </tr>
                <?php while ($row = $feedbackuri->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['nume']) ?></td>
                        <td><?= htmlspecialchars($row['id_serviciu']) ?></td>
                        <td><?= nl2br(htmlspecialchars($row['mesaj'])) ?></td>
                        <td>
                            <a href="?edit=<?= $row['email'] ?>">✏️ Editare</a> |
                            <a href="?delete=<?= $row['email'] ?>" onclick="return confirm('Ștergi feedback-ul?')">🗑️ Ștergere</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <h2>Rezultatele Interogărilor</h2>

            <h3>Interogare 1: Feedback împreună cu serviciile asociate</h3>
            <table>
                <tr>
                    <th>Email</th>
                    <th>Nume</th>
                    <th>Mesaj</th>
                    <th>Serviciu</th>
                    <th>Descriere Serviciu</th>
                </tr>
                <?php while ($row = $result1->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['nume']) ?></td>
                        <td><?= nl2br(htmlspecialchars($row['mesaj'])) ?></td>
                        <td><?= htmlspecialchars($row['serviciu']) ?></td>
                        <td><?= nl2br(htmlspecialchars($row['id_serviciu'])) ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>

            <h3>Interogare 2: Feedback pentru serviciul "Contabilitate"</h3>
            <table>
                <tr>
                    <th>Email</th>
                    <th>Nume</th>
                    <th>Mesaj</th>
                    <th>Serviciu</th>
                </tr>
                <?php while ($row = $result2->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['nume']) ?></td>
                        <td><?= nl2br(htmlspecialchars($row['mesaj'])) ?></td>
                        <td><?= htmlspecialchars($row['serviciu']) ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>

            <h3>Interogare 3: Utilizatori care au dat feedback pentru mai multe servicii</h3>
            <table>
                <tr>
                    <th>Email</th>
                    <th>Nume</th>
                    <th>Servicii</th>
                </tr>
                <?php while ($row = $result3->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['nume']) ?></td>
                        <td><?= nl2br(htmlspecialchars($row['servicii_feedback'])) ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </section>
</body>
</html>

<?php
$conn->close();
?>
