<?php
include("connexionBD.php"); // Assurez-vous que ce fichier contient une connexion valide à la base de données
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion NewsLetter</title>
    <link rel="stylesheet" href="insertion_admin_newsletter.css"> <!-- Lien vers votre fichier CSS -->
</head>
<body>
    <header>
        <a href="index.php">
        <img src="pictures/logo1.png" alt="Logo" class="logo">
        </a>
    </header>

    <div class="form-container">
        <form method="POST" class="form">
            <h2>Insertion d'une Actu pour la NewsLetter :</h2>

            <label for="titre">Titre de l'Actu :</label>
            <input type="text" id="titre" name="titre" required>

            <label for="date_actu">Date de l'Actu :</label>
            <input type="date" id="date_actu" name="date_actu" required>

            <label for="contenu">Contenu de l'Actu :</label>
            <textarea id="contenu" name="contenu" rows="8" required></textarea>

            <button type="submit" name="submit">Insérer l'Actualité</button>

            <?php
            if (isset($_POST["submit"])) {
                // Récupération des données soumises
                $titre = mysqli_real_escape_string($conn, $_POST["titre"]);
                $date_actu = mysqli_real_escape_string($conn, $_POST["date_actu"]);
                $contenu = mysqli_real_escape_string($conn, $_POST["contenu"]);

                // Requête d'insertion
                $sql = "INSERT INTO actualites (titre, date_actu, contenu) VALUES ('$titre', '$date_actu', '$contenu')";

                // Exécution de la requête
                if (mysqli_query($conn, $sql)) {
                    echo "<p class='success-message'>Insertion réussie avec succès.</p>";
                } else {
                    echo "<p class='error-message'>Problème lors de l'insertion : " . mysqli_error($conn) . "</p>";
                }
            }
            ?>
        </form>
    </div>

    <footer>
        <p>Copyright &copy; 2024 CHAKIR EL ALAOUI EL YAZID. Tous les droits sont réservés.</p>
    </footer>
</body>
</html>
