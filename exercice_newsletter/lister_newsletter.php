<?php
  include("config.php");

/*Ici, je veux lister l'ensemble des inscriptions dans un tableau.
 En face de chaque nom, prenom, email, je veux un bouton "Modifier" qui va aller vers un formulaire qui va me permettre de modifier l'enregistrement
 et un autre bouton "Effacer" qui va me permettre d'effacer les données de la ligne en question.*/


// var_dump($_SESSION);
$listeAbonnes = $bdd->query("SELECT * FROM inscription");
$resultAbonne = $listeAbonnes-> fetchAll();
// var_dump($resultAbonne);
?>

 <!doctype html>
 <html lang="fr">
 <head>
     <meta charset="UTF-8">
     <title>Liste Newsletter</title>
     <link rel="stylesheet" type="text/css" href="css/messtyles.css">
 </head>
 <body>

  <div class="list">
    <h2>Liste des abonnés</h2>
    <table>
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>E-mail</th>
        <th>Modifier</th>
        <th>Effacer</th>
      </tr>
      <?php foreach ($resultAbonne as $key => $abonne) {
        echo "<tr>";
        echo "<td>$abonne[nom]</td>";
        echo "<td>$abonne[prenom]</td>";
        echo "<td>$abonne[email]</td>";
        echo "<td><a href=\"modify.php?url_abonne_modify=$abonne[id_inscription]\">modifier</a></td>";
        echo "<td><a href=\"delete.php?url_abonne_delete=$abonne[id_inscription]\" onclick=\"return confirm('Voulez-vous effacer cet abonné ?')\">supprimer</a></td>";
        echo "</tr>";
      } ?>
    </table>
  </div>


 </body>
 </html>
