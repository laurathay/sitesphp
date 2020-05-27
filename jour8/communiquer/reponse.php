<?php

// 1: on vérifie le champ

$nomChampObligatoires = ["prenom", "nom", "email", "annee_naissance", "pays_de_naissance"];

foreach ($nomChampObligatoires as $nomChamp) {
  if( empty( $_GET [$nomChamp])){
    header("location:formulaire_exo.php?err=champ&probleme=$nomChamp"); // de retourner vers l'url fourni lorsque le champ est vide
  }
  echo "<br>";
}


/*
if(
  empty($_GET["nom"]) && // a remplacer par les deux barres // droites
  empty($_GET["prenom"]) &&
  empty($_GET["annee_naissance"]) &&
  empty($_GET["pays_de_naissance"])

){
  header("location:formulaire_exo.php?err=champ"); // de retourner vers l'url fourni lorsque le champ est vide
//  echo "LE CHAMP N'EST PAS REMPLI";
} else {
  echo "LE CHAMP EST REMPLI";
}
*/

// 2: le champ n'est pas rempli on retourne au formulaire


// 3: le champ est rempli, on continue sur cette page



var_dump($_GET);



 ?>

 <h1> Les réponses sont :</h1>

 Votre nom : <?php echo $_GET["nom"] ?>
 <br>
 Votre prénom : <?php echo $_GET["prenom"] ?>
<br>
Votre email : <?php echo $°GET["email"] ?>
<br>
Votre année de naissance : <?php echo $_GET["annee_naissance"]?>
<br>
Pays de naissance : <?php echo $_GET["pays_de_naissance"]?>
