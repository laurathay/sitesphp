
<?php
  require"../config.php";

/*  verif_connexion(); *///pour sécuriser la page et include dans confi.php

 ?>


<h1> Bienvenue sur la page admin </h1>

  <h3>Formulaire</h3>
        Pour envoyer un fichier via le formulaire, nous devons construire le formualaire avec un encodage
        particulier : <em>enctype="multipart/form-data"</em>

        <a id="form1"></a>
        <form method="post" action="admin_reponse.php" enctype="multipart/form-data"> <!-- se renvoyer a soi meme mais on a changé a admin _reponse-->


            Champ de type texte :
            <input name="mon_fichier" id="mon_fichier" type="text"> <!--c'est ce name qu'on reprend plus tard -->
            <textarea name="montexte" type="text" rows="10" cols = "33" class="textearea" ><?php

          //  echo file_get_contents(__DIR__ . "/inscription.txt");

            ?>
            </textarea>

            <div class="resultat_mon_texte">


            </div>

            <hr>

            Fichier à envoyer : <input name="mon_fichier" type="file" />

            <hr>

            <button type="submit">Envoyer</button>

            <a href="deconnexion.php"> Deconnexion </a>

        </form>
