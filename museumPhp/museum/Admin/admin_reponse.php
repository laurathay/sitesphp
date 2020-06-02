<?php
require "config.php";
verif_connexion();

//envoi du texte :
if(!empty($_POST["montexte"])) { //sil y a un texte ecrit tu l'enregistres en text
  $file = fopen("inscription.txt", "w+"); // w+ permet de supprimer l'ancien texte rentrer

  fwrite($file, $_POST["montexte"] . PHP_EOL);

  fclose($file);
}



//envoi d'image :
    if(!empty($_FILES["mon_fichier"]) && $_FILES["mon_fichier"]["error"] == 0 ) {
            $nom_dossier_destination = "../templates/site2020/images"; //on le fait en 3 étapes, le chemin du fichier envoyé
          $dossier_destination = __DIR__ .  $nom_dossier_destination; // redéfini dans une autre variable
          $chemin_fichier_destination = $dossier_destination . "/" . $_FILES["mon_fichier"]["name"];

          move_uploaded_file($_FILES["mon_fichier"]["tmp_name"], $chemin_fichier_destination);
    }

header("location:admin.php");
