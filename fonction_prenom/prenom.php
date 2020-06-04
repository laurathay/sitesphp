<?php

session_start();
//

  // $prenom = array("Alix", "Aycha", "Céline", "Charlotte", "Delphine", "Françoise", "Laura", "Lynda", "Nassima", "Paloma", "Sarah", "Silvia", "Sophie", "Soraya", "Vanessa");



  //
  // if(isset($_POST["descodeuse_au_hasard"])) {
  //
  //     $_SESSION["tirage_au_sort"] = TRUE;
  //
  //   }

?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Jour 8</title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body>

    <img src="img/slot.gif" alt="Slot Machine">

    <!-- <form action="prenom.php" method="post"> -->
    <form action="prenom_reponse.php" method="post">
      <input type="submit" class="my_button" name="descodeuse_au_hasard" value="Slot Machine Descodeuses"/>
    </form>


<?php
//
// if(!empty($_POST["descodeuse_au_hasard"])) {
//     echo "<div class='descodeuse'><p>C'est à <br><span id='clignotant'>" . $prenomHasard = $prenom[array_rand($prenom)] . "</span></p></div>";
//
// }

if(!empty($_SESSION["descodeuse_au_hasard"])) {
    echo "<div class='descodeuse'><p>C'est à <br><span id='clignotant'>" . $_SESSION["descodeuse_au_hasard"] . "</span></p></div>";
    unset($_SESSION["descodeuse_au_hasard"]);
}

?>


<script type="text/javascript" src="js/script.js"></script>

</script>
  </body>
</html>
