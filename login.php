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


    <div class="container">
        <div class="content">
            <div class="left-column">
                <h2>Formular de Înregistrare</h2>
                <form method="POST" action="index.php">
                    <label for="nume-utilizator">Nume Utilizator:</label>
                    <input type="text" id="nume-utilizator" name="nume-utilizator" placeholder="Nume utilizator" required><br/><br/>
                    <label for="parola">Parola:</label>
                    <input type="password" id="parola" name="parola" placeholder="Parola" required><br/><br/>
                    <input type="submit" name="submit" value="GO">
                </form>

                <?php
                include "config.php";
if (isset($_POST["submit"])) {
                if (!empty($_POST["nume-utilizator"]) && !empty($_POST["parola"])) {
                    if ($con) {
                        $username = $_POST["nume-utilizator"];
                        $parola = $_POST["parola"];
                        $password_hash = password_hash($parola, PASSWORD_BCRYPT);

                        // Utilizăm prepared statements pentru a preveni SQL injection
                        $stmt = $con->prepare("INSERT INTO users (nume_utilizator, parola) VALUES (?, ?)");
                        $stmt->bind_param("ss", $username, $password_hash);

                        if ($stmt->execute()) {
                            echo "<p>Ai fost înregistrat cu succes!</p>";
                        } else {
                            echo "<p>Eroare la inserare: " . htmlspecialchars($stmt->error) . "</p>";
                        }

                        $stmt->close();
                    } else {
                        echo "<p>Eroare la conectare la baza de date</p>";
                    }
                } else {
                    echo '<p>Te rog completează toate câmpurile.</p>';
                }
            }
            ?>
            </div>
            <div class="right-column">
          
            </div>
        </div>
    </div>

</body>

</html>
