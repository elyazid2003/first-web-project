<?php
include("connexionBD.php");

// Vérifier si un ID est passé dans l'URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Convertir l'ID en entier pour éviter les injections SQL

    // Utiliser 'id_actu' dans la requête SQL pour correspondre à votre colonne dans la base de données
    $sql = "SELECT titre, date_actu, contenu FROM actualites WHERE id_actu = $id"; 
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Aucune actualité trouvée.";
        exit;
    }
} else {
    echo "ID d'actualité manquant.";
    exit;
}

// Vérifier si le formulaire de suppression a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $admin_username = "admin"; // Nom d'utilisateur de l'admin
    $admin_password = "motdepasse123"; // Mot de passe de l'admin

    // Vérification de l'authentification
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $admin_username && $password == $admin_password) {
        // Si l'authentification réussit, supprimer l'actualité
        $delete_sql = "DELETE FROM actualites WHERE id_actu = $id";
        if ($conn->query($delete_sql) === TRUE) {
            echo "L'actualité a été supprimée avec succès.";
            header("Location: index.php"); // Rediriger vers la page des actualités
            exit;
        } else {
            echo "Erreur lors de la suppression de l'actualité : " . $conn->error;
        }
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($row['titre']); ?></title>
    <link rel="stylesheet" href="detail_actu.css"> <!-- Lien vers le fichier CSS -->
</head>
<body>
    <header>
        <img src="pictures/logo1.png" alt="Logo" class="logo">
    </header>

    <div class="container">
        <h1><?php echo htmlspecialchars($row['titre']); ?></h1>
        <p class="date"><strong>Date de publication :</strong> <?php echo htmlspecialchars($row['date_actu']); ?></p>
        
        <div class="content">
            <p><?php echo nl2br(htmlspecialchars($row['contenu'])); ?></p>
        </div>

        <a href="index.php" class="back-link">← Retour aux actualités</a>
        
        <!-- Ajouter le texte sous le lien de retour -->
        <p class="delete-info">
            Vous pouvez supprimer cette actualité si vous êtes un administrateur. <br>
            <a href="supprimer_actu.php?id=<?php echo $id; ?>">Cliquez ici pour supprimer l'actualité.</a>
        </p>

    </div>
</body>
</html>
