<?php
  include "config.php";

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Jour 14</title>
    <link rel="stylesheet" type="text/css" href="css/messtyles.css">
</head>
<body>
<h1>Inscription à la newsletter</h1>
<?php
// erreurs % base de données
if(isset($_SESSION["erreur"])) {
    echo "<div class='err'>Une erreur s'est produite</div>";
}
if(isset($_SESSION["success"])) {
    echo "<div class='bravo'>L'enregistrement s'est passé correctement.</div>";
}
unset($_SESSION["erreur"], $_SESSION["success"]); // j'efface mes variables de session si elles existent.
//=============================================
// traitement des erreurs formulaire

?>

<form action="reponse.php" method="post">
  <?php
  if (!empty($_SESSION["mal_rempli"]) && $_SESSION["mal_rempli"] == 'patate') {
    echo "<div class='error'>Merci de remplir tous les champs</div>";
    unset($_SESSION["mal_rempli"]);
  }
  ?>
  <input type="text" placeholder="Nom" name="fnom">

  <input type="text" placeholder="Prénom" name="fprenom">

  <input type="email" placeholder="Email" name="femail">

  <input type="submit">
</form>
<!-- <a href="lister_newsletter.php">Liste des abonnés</a> -->


</body>
</html>
