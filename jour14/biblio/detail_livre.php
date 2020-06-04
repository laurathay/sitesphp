<?php

function vd($var){
  echo"<pre>";
  var_dump($var);
  echo"</pre>";
}

$serveur = "localhost";
$utilisateur = "root";
$mdp = "root";
$nomBaseDeDonnes = "bibliotheque";
$bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnes" , $utilisateur, $mdp);

$rep = $bdd->query("select * from livre where id_livre = " . $_GET["lien_livre"]); //on fait appelle a la bdd pour selectionner uniquement les livres qui ont l'id 1
//$result_livres = $rep->fetchAll();  //retourne tous les resultats
$result_livres = $rep->fetch();

vd($result_livres);
exit;

echo "<h1>" . $result_livres["titre"] . "</h1>";
echo "<ul>";
echo "<li>" $result_livres["genre"] . "</li>";
echo "<li>" $result_livres[""] . "</li>";
echo "<li>" $result_livres[""] . "</li>";
echo "<ul>";

//s'il n'y a pas de lien livre selectionner ca affiche la page index
