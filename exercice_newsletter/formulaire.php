<?php

    include "config.php";

    if(!empty($_SESSION["peut_se_connecter"])){
        header("location:formulaire.php");
        exit;
    }

// 1 / Vérifier que la personne a bien rempli le champ email.
// Si le champ email est correcte (c'est à dire qu'il est rempli et qu'il s'agit d'un email), on l'enregistre.
// Dans le cas contraire, on retourne sur le formulaire en mettant un message d'erreur.
if(false !== filter_var($_POST["femail"], FILTER_VALIDATE_EMAIL)){
  $_SESSION["erreur_mail"] = FALSE;
} else{
  $_SESSION[erreur_mail] = TRUE;
  header("location:formulaire.php");
}

// 2 / dans la page "lister_newsletter.php", lister dans un tableau l'ensemble des inscriptions. (une colonne nom, prénom et email)

// 3 / dans le tableau précédent, ajouter une colonne "modifier" et sur chaque ligne un bouton "modifier".
// Quand on clique sur ce bouton, on arrive sur un formulaire qui va nous permettre de modifier les données de l'enregistrement choisi.
// (par exemple, si on clique sur le bouton "modifier" en face de la ligne nicolas hennette, on arrive sur un nouveau formulaire pré-remplit qui va me permettre de modifier mon nom, mon prénom et mon email)

// * je pense que vous allez devoir ajouter dans ce formulaire de modification un champ "caché" qui aura la valeur de l'identifiant de l'inscription que j'ai choisi de modifier.
//  (<input type='hidden' value='identifiant a récupérer'>)

// 4 / Dans le tableau qui liste l'ensemble des inscriptions, ajouter un second bouton pour chaque ligne "Effacer".
// Quand on clique sur ce bouton, on efface la ligne choisie.

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Jour 14</title>
    <link rel="stylesheet" type="text/css" href="css/messtyles.css">
</head>
<body>

<?php
    if(isset($_SESSION["erreur"])) {
        echo "<div class='err'>Une erreur s'est produite</div>";
    }

    if(isset($_SESSION["success"])) {
        echo "<div class='bravo'>L'enregistrement s'est passé correctement.</div>";
    }

    unset($_SESSION["erreur"], $_SESSION["success"]); // j'efface mes variables de session si elles existent.

?>


<form action="reponse.php" method="post">

<?php if(!empty($_GET['err']) && $_GET['err'] == 'champ'){
                            echo "<div clas=\"error \">";
                            echo "merci de vérifier";
                            echo "</div>";
                          }

                          function addClassErreurChamp($champVide){
                            if(!empty($_SESSION['problemechamp']) && $_SESSION ['problemechamp']== $champVide){
                              echo"erreurchamp";
                            }
                          }

                            //erreur dans le champ
                            if(!empty($_GET['err']) && $_GET['err'] == 'identification'){
                                echo "<div clas=\"error \">";
                                echo "merci de vérifier vos id et mdp";
                                echo "</div>";
                                unset($_SESSION['err']);
                              }


 ?>

    <input type="text" placeholder="Nom" name="fnom">
    <input type="text" placeholder="Prénom" name="fprenom">
    <input type="email" placeholder="Email" name="femail">
    <br><br>
    <input type="submit">
</form>

<?php

//INSERT INTO `inscription` (`id_inscription`, `nom`, `prenom`, `email`) VALUES (NULL, 'Thay', 'Thay', 'thay@gmail.com');

$ajout_inscription ="INSERT INTO `inscription` (`id_inscription`, `nom`, `prenom`, `email`) VALUES('. $_POST[nom].', '.$_POST[prenom].', '.$_POST[email]' )";
    echo $ajout_inscription;

?>


</body>
</html>
