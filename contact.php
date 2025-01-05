<?php
    include("connexionBD.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contactez Nous </title>
  <link rel="stylesheet" href="contact.css">
  <link rel="icon" href="pictures/logo1.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+GB+S:wght@300&display=swap" rel="stylesheet">
 

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
  


 <div class="parent">

    <div class="image">
        <img src="pictures/contact.png">
    </div>
  
    <form action="contact.php" method="post">

      <label for="fullname">Full Name </label>
      <input id="fullname" name="fullname" type="text" required>
      
      <label for="mail">Mail </label>
      <input id="mail" name="mail" type="email" required>
      
      
      <label for="message">Your Message</label>
      <textarea name="message" rows="10" cols="30"></textarea>

      <input type="submit" name="submit" class="submit" value="Send">

    </form>


</div>


      <div class="ending">
        <p>© 2024/2025 CHAKIR EL ALAOUI EL YAZID. | Tous droits réservés.</p>
      </div>



</body>
</html>
<?php

  if(isset($_POST["submit"])){
    $fullname = $_POST["fullname"];
    $mail = $_POST["mail"];
    $message = $_POST["message"];
  
  
  $sql = "INSERT INTO contact (fullname,mail,message) VALUES('$fullname','$mail','$message')";

  try{
    mysqli_query($conn,$sql);
    echo"<script> alert('Le message a été envoyer avec succes !')</script>";
  }

  catch(mysqli_sql_exception){
    echo "Problème d'envoie de votre message ! <br>";
  }

}

?>