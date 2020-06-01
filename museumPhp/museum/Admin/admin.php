<?php
  require"../config.php";

  verif_connexion(); //pour sécuriser la page et include dans confi.php

 ?>

 <?php

     if(!empty($_POST["montexte"])) { //sil y a un texte ecrit tu l'enregistres en text
       $file = fopen("inscription.txt", "w+"); // w+ permet de supprimer l'ancien texte rentrer

       fwrite($file, $_POST["montexte"] . PHP_EOL);

       fclose($file);
     }

  ?>


<h1> Bienvenue sur la page admin </h1>

  <h3>Formulaire</h3>
        Pour envoyer un fichier via le formulaire, nous devons construire le formualaire avec un encodage
        particulier : <em>enctype="multipart/form-data"</em>

        <a id="form1"></a>
        <form method="post" action="admin.php" enctype="multipart/form-data">


            Champ de type texte :
            <input name="nomChamp" type="text">
            <textarea name="montexte" type="text" rows="10" cols = "33" class="textearea" ><?php

            echo file_get_contents(__DIR__ . "/inscription.text");

            ?>
            </textarea>

            <hr>

            Fichier à envoyer : <input name="mon_fichier" type="file" />

            <hr>

            <button type="submit">Envoyer</button>

            <a href="deconnexion.php"> Deconnexion </a>

        </form>


    <?php
        //
        // Si j'ai envoyé un fichier à mon serveur, je vais le placer dans le repertoire /fichier_envoye
        //

        if(!empty($_FILES["mon_image"]) && $_FILES["mon_image"]["error"] == 0 ) {
            // = Si j'ai envoyé un fichier et que ce fichier n'a pas d'erreur
                $nom_dossier_destination = "../templates/site2020/images";

            // Je fabrique le chemin de destination de mon fichier
              $dossier_destination = __DIR__ .  $nom_dossier_destination;
              $chemin_fichier_destination = $dossier_destination . "/" . $_FILES["mon_image"]["name"];

            // Je bouge mon fichier du repertoire temporaire jusque dans mon répertoire de destination
            // et je modifie son nom
              move_uploaded_file($_FILES["mon_image"]["tmp_name"], $chemin_fichier_destination);

            // Je construits le lien vers le fichier que je viens d'envoyer sur le serveur
             # echo "<a href='mes_fichiers_envoyes/" . $_FILES["mon_fichier"]["name"] . "' target='_blank'>Mon fichier envoyé se trouve à l'URL suivante</a>";
        }

        echo "<hr>";



    if(!empty($_FILES["mon_fichier"]) && $_FILES["mon_fichier"]["error"] == 0 ) {
        // = Si j'ai envoyé un fichier et que ce fichier n'a pas d'erreur

        // Je choisis le nom du dossier dans lequel je veux placer le fichier envoyé
         $nom_dossier_destination = "mon_dossier_image";

        // Je fabrique le chemin de destination de mon nouveau fichier
         $chemin_dossier_destination = __DIR__ .  "/" . $nom_dossier_destination;
         $chemin_fichier_destination = $chemin_dossier_destination . "/" . "thaythay" . $_FILES["mon_fichier"]["name"];

        echo "<hr>";

        // Je bouge mon fichier du repertoire temporaire jusque dans mon répertoire de destination
        // et je modifie son nom
         move_uploaded_file($_FILES["mon_fichier"]["tmp_name"], $chemin_fichier_destination);

        // Je construits le lien vers le fichier que je viens d'envoyer sur le serveur
        echo "<a href='" . $nom_dossier_destination . "/" . $_FILES['mon_fichier']['name'] . "' target='_blank'>Mon fichier envoyé se trouve à l'URL suivante</a>";
    }

    ?>
