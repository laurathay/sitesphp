<?php
//créer un fichier dans lequel y aura un formulaire
// avec le nom/ prenom et l'email et quand on clique
// sur validé ca enregistre dans une nouvel table
//le nom/prenom et email de la personne




//1.On établit la connexion

$serveur = 'localhost';
$utilisateur = 'root';
$motdepasse = 'root';
$nomBaseDeDonnees = "newsletter";



$bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees");

?>


<!-- 2. on créer le formulaire  -->
<form class="formulaire" action="formulaire.php" method="post">
  <label for="">Nom
    <input type="text" name="nom" value="">
  </label>
  <label for="">Prenom
    <input type="text" name="nom" value="">
  </label>
  <label for="">Email
    <input type="text" name="nom" value="">
  </label>
  <button type="subit" name="button"> Validé </button>

</form>

<?php

//3. on fait la requete insert, (on rentre par nous meme les données dans phpMyAdmin)
// on insert dabord dans phpmyAdmin puis on copie colle la fonction qui a été inserer ce qui donne
//INSERT INTO newsletter (nom, prenom, email) VALUES ('thay','thay','thaythay@gmail.com')


//4. maintenant on l'introduit dans le code :

    $ajout_abonne ="INSERT INTO newsletter(nom,prenom,email) VALUES('. $_POST[nom].', '.$_POST[prenom].', '.$_POST[email]' )";
    echo $ajout_abonne;

 ?>
