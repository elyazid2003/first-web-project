<?php
include('connexionBD.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="connexion_newsletter.css">
</head>
<body>
    <header>
        <a href="index.php">
        <img src="pictures/logo1.png" alt="Logo Greece" class="logo"></a>
    </header>
    <div class="login-container">
        <form class="login-form" method="post" action="connexion_newsletter.php">
            <h2>Connexion</h2>
            <label for="username">Utilisateur :</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="submit">Se connecter</button>
        </form>

        <?php
            $admin_name = 'yazid';
            $admin_password = 'yazid2003';

            if (isset($_POST["submit"])) {
                $vn = $_POST["username"];
                $vp = $_POST["password"];

                if ($vn == $admin_name && $vp == $admin_password) {
                    header("Location: insertion_admin_newsletter.php"); // Redirige vers la page d'insertion
                    exit();
                } else {
                    echo "<br><p class='error-message'>Utilisateur ou mot de passe incorrect !</p>";
                }
            }
        ?>
    </div>
    <footer>
        <p>Copyright &copy; 2024 CHAKIR EL ALAOUI EL YAZID. Tous les droits sont réservés.</p>
    </footer>
</body>
</html>
