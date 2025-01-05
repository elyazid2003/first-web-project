<?php
  include('connexionBD.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>À la Découverte de la Grèce</title>
  <link rel="stylesheet" href="index.css">
  <link rel="icon" href="pictures/logo1.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+GB+S:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">

 

</head>



<body>

  <header class="header">
    <img src="pictures/logo1.png" class="logo" alt="logo">

    <nav class="navbar">
      
      <a href="index.php">Acceuil</a>
      <a href="plandusite.html">Plan du site</a>
      <a href="quisommesnous.html">Qui somme-nous ?</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>
  

<!--
  <div class="intro">

    <img src="im1.jpg" class="im1">
    <h2>MARZOUGA</h2><br>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore iusto dignissimos atque dolorum nostrum ex eius sapiente provident quae. Quos veritatis perspiciatis quibusdam expedita. Sequi optio in necessitatibus quibusdam, aliquam labore fugit mollitia, maiores vero dolorem repellendus architecto hic explicabo exercitationem numquam placeat. Error atque, soluta mollitia maxime delectus itaque.</p>

  </div>

-->
  <div class="navleft">
    <a href="siteetmonuments.html" class="a1">Sites et Monuments</a>
    <a href="indexdesvilles.html" class="a2">Index des villes</a>
    <a href="liensutils.html" class="a3">Liens utiles</a>

    <div class="carte_maps">
      <p class="textcarte"><strong>La carte de la Grèce</strong> </p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11211944.425042838!2d18.91258980618266!3d37.463400849132164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135b4ac711716c63%3A0x363a1775dc9a2d1d!2zR3LDqGNl!5e0!3m2!1sfr!2sma!4v1730207592358!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

    </div>

  </div>  

<div class="container">

      <div class="greece">

        <div class="gimage">
          <img src="pictures\DALL_E-2024-11-24-09.18-removebg-preview.png" >
        </div>

        <div class="gtext">
          <p>La Grèce</p>
        </div>

      </div>





  <div class="intro">
    <div class="ytvideo">
  <iframe
        width="450" 
        height="260" 
        src="https://www.youtube.com/embed/UPRGaZxhNrg" 
        title="YouTube video player" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
    </iframe>
    </div>
    <div class="introtext">
      <p>Découvrez la Grèce : Un voyage au cœur de l'histoire et de la beauté
      Bienvenue sur notre site dédié à la Grèce, un pays où l'histoire ancienne rencontre des paysages d'une beauté époustouflante. Des ruines majestueuses d'Athènes aux plages idylliques des îles grecques, plongez dans un univers riche en culture, en gastronomie et en traditions. Explorez avec nous les trésors cachés et les merveilles incontournables de cette destination unique.
      </p>
    </div>
  </div>


<div class="partiegalerie">
  <div class="h2">
    <h2>📸 La Galerie 📸</h2>
  </div>
  <div class="galerie">

        <div class="pic">
          <img src="pictures\nafpilo.jpeg" alt="picture 1">
          <div class="txt">
            Nafpilo
          </div>
        </div>

        <div class="pic">
          <img src="pictures\Myknos.jpeg" alt="picture 2">
          <div class="txt">
            Myknos
          </div>
        </div>

        <div class="pic">
          <img src="pictures\athene.jpg" alt="picture 3">
          <div class="txt">
            Athènes
        </div>
        </div>

        <div class="pic">
          <img src="pictures\santo.webp" alt="picture 3">
          <div class="txt">
            Santo
        </div>
        </div>

        <div class="pic">
          <img src="pictures\rhodes.jpg" alt="picture 3">
          <div class="txt">
            Rhodes
        </div>
        </div>

        <div class="pic">
          <img src="pictures\Thira.jpeg" alt="picture 3">
          <div class="txt">
            Thira
        </div>
        </div>

     
  </div>
  </div>


  <div class="parent">

    
    <div class="newsletter">
    <div class="form">
    <h2 style="text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.3), -2px -2px 6px rgba(0, 0, 0, 0.2);">La NewsLetter</h2><br><br>
    <form action="index.php" method="POST">
        <label for="nom">Votre nom :</label><br>
        <input type="text" name="nom" required><br>
        <label for="mail">Votre mail :</label><br>
        <input type="email" name="mail" required><br>

        
        <div class="button-container">
            <input type="submit" name="submit" value="S'inscrire" id="nlsubmitbut">
            <a href="connexion_newsletter.php" class="connectnewsletter" target="_blank">Se connecter</a>
        </div>
    </form>
</div>

      <div class="picture">
        <img src="pictures/newsletter.png" alt="newsletterimage" class="newsletterimage">
      </div>
      

      <?php
               if(isset($_POST['submit'])){
                $name = $_POST["nom"];
                $mail = $_POST["mail"];
                $sql = "INSERT INTO inscription_newsletter (nom,mail)  VALUES('$name','$mail')";

                try{
                     mysqli_query($conn,$sql);
                     echo "<script> alert('Inscription réussite dans la NewsLetter !') </script>";
                }

                catch(mysqli_sql_exception){
                  echo "<script> alert('Problème servenu !') </script>";
                }

                }
        ?>

    </div>
      
  
    <div class="actualites">
  <h2 style="text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2), -2px -2px 6px rgba(0, 0, 0, 0.1);">📰 Les dernières Actus 📰</h2>
  <table>
    <tr>
      <th>Actualité</th>
      <th>Date de publication</th>
    </tr>
    <?php
    $sql = "SELECT id_actu, titre, date_actu FROM actualites ORDER BY date_actu DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td><a href='detail_actualite.php?id=" . htmlspecialchars($row['id_actu']) . "'>" . htmlspecialchars($row['titre']) . "</a></td>
                    <td>" . htmlspecialchars($row['date_actu']) . "</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='2'>Aucune actualité trouvée</td></tr>";
    }
    ?>
  </table>
</div>

</div>
      <div class="ending">
        <p>© 2024/2025 CHAKIR EL ALAOUI EL YAZID. | Tous droits réservés.</p>
      </div>

</div>
</body>

 </html>




    


