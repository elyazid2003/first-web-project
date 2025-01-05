<?php
// Inclure le fichier de connexion à la base de données
include('connexionBD.php');

// Vérifier si un ID est passé dans l'URL
if (!isset($_GET['id'])) {
    die("ID d'actualité manquant.");
}

$id = intval($_GET['id']); // Convertir en entier pour éviter les injections SQL

// Vérifier si l'actualité existe
$stmt = $conn->prepare("SELECT * FROM actualites WHERE id_actu = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Aucune actualité trouvée pour cet ID.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Authentification de l'administrateur
    $admin_username = "yazid";
    $admin_password = "yazid2003";

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $admin_username && $password === $admin_password) {
        // Suppression de l'actualité
        $delete_stmt = $conn->prepare("DELETE FROM actualites WHERE id_actu = ?");
        $delete_stmt->bind_param("i", $id);

        if ($delete_stmt->execute()) {
            echo "<script>alert('L\'actualité a été supprimée avec succès.'); window.location.href='index.php';</script>";
            exit;
        } else {
            echo "Erreur lors de la suppression de l'actualité : " . $conn->error;
        }
    } else {
        echo "<script>alert('Nom d\'utilisateur ou mot de passe incorrect.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression de l'Actualité</title>
    <link rel="stylesheet" href="connexion_newsletter.css">
</head>
<body>
    <header>
        <img src="pictures/logo1.png" alt="Logo Greece" class="logo">
    </header>
    <div class="login-container">
        <form class="login-form" method="post">
            <h2>Confirmation de suppression</h2>
            <label for="username">Utilisateur :</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="submit">Se connecter</button>
        </form>
    </div>
    <footer>
        <p>Copyright &copy; 2024 CHAKIR EL ALAOUI EL YAZID. Tous les droits sont réservés.</p>
    </footer>
</body>
</html>
