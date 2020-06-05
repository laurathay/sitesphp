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


$rep = $bdd->query("select * from livre");
$result_livres = $rep -> fetchAll();

if ($_GET(["lien_livre"] > count($result_livres)){
  header("location:index.php"); //toujours mettre en premier question de sécurité pcq header doit forcement etre indiququé avant
  exit;
} 


foreach ($result_livres as $key => $livre) {
  echo "Titre : " . $livre["titre"] . "</br>";
}



vd($result_livres);

 ?>
