<?php
  include "config.php";

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste Newsletter</title>
    <link rel="stylesheet" type="text/css" href="css/messtyles.css">
</head>
<body>

  <h2><?php echo $_SESSION["nom_abonne"] . " " . $_SESSION["prenom_abonne"]; ?></h2>
  <table>
    <tr>
      <th>Nom</th>
      <th>Prénom</th>
      <th>E-mail</th>
    </tr>
    <tr>
      <td><?php echo $_SESSION["nom_abonne"]; ?></td>
      <td><?php echo $_SESSION["prenom_abonne"] ?></td>
      <td><?php echo $_SESSION["email_abonne"] ?></td>
    <tr>
      <td> <form class="" action="#" method="post">
        <button type="submit" name="button">Modifier le nom</button>
      </form> </td>
      <td> <form class="" action="#" method="post">
        <button type="submit" name="button">Modifier le prénom</button>
      </form> </td>
      <td> <form class="" action="#" method="post">
        <button type="submit" name="button">Modifier l'e-mail</button>
      </form> </td>
    </tr>
  </table>
</body>
