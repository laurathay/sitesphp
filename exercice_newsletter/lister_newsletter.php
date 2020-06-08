<?php
include "config.php";

var_dump($_SESSION);


///////////////: la requete

// $inscriptions = array[
//     "nom" => "thay <button> Modifier </button> <button> Effacer </button>",
//     "prenom" => "thay <button> Modifier </button> <button> Effacer </button>",
//     "email" => "thay@gmail.com <button> Modifier </button> <button> Effacer </button>",
// ];
var_dump($inscriptions);

echo'<table style="border:5px pink solid;">';
echo'<tr><td>numero</td><td>prenom</td><td>email</td><td>modifier</td><td>supprimer</td></tr>';

foreach ($ajout_inscription as $key => $inscription){

  echo "<tr style='border: 1px solid pink; padding:10px 20px; text-align:center;'>";
    echo"<td>$inscription[nom]</td>";
    echo"<td>$inscription[prenom]</td>";
    echo"<td>$inscription[email]</td>";

    echo "<td><a href=\"modify.php?url_inscript_modify=$inscript[id_inscription]\">modifier</a></td>";
    echo "<td><a href=\"modify.php?url_inscript_modify=$inscript[id_inscription]\" onclick=\"return confirm('Voulez-vous effacer cet abonné ?') \"> supprimer </a></td>";
    echo"</tr>";
}

echo'</table>';
/*
 *
 *
  * Ici, je veux lister l'ensemble des inscriptions dans un tableau.
 * En face de chaque nom, prenom, email, je veux un bouton "Modifier" qui va aller vers un formulaire qui va me permettre de modifier l'enregistrement
 * et un autre bouton "Effacer" qui va me permettre d'effacer les données de la ligne en question.
 *
 *
 */
