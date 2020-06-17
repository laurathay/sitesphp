<?php
include "../../config.php";
proteger_page();

// AJOUTER CHAPITRE :
if(!empty($_POST)) {// si on a cliqué sur valider
  if($_POST["id_projet"] == 0) {// 0 dans hidden
    $query = $bdd -> prepare ("INSERT INTO chapter (nom, techno_id, client, lien, texte, page) VALUES (:nom, :techno_id , :client , :lien , :texte , :page )");
    $query -> execute([
      ":nom" => $_POST["nom"],
      ":techno_id" =>  $_POST["techno_id"],
      ":client" =>  $_POST["client"],
      ":lien" => $_POST["lien"],
      ":texte" =>  $_POST["texte"],
      ":page" =>  $_POST["page"],
    ]);
    $chapterID = $bdd -> lastInsertId();
    show_success("Le nouveau projet $projetID  a été ajouté.");
} else {
    // MODIFIER CHAPITRE
    $query = $bdd -> prepare ("UPDATE projet SET
                                        nom = :nom,
                                        techno_id = :techno_id,
                                        client = :client,
                                        lien = :lien,
                                        texte = :texte,
                                        page = :page
                                        WHERE id_projet = :idProjet");
    $query -> execute(
      [
        ":nom" => $_POST["nom"],
        ":techno_id" =>  $_POST["techno_id"],
        ":client" =>  $_POST["client"],
        ":lien" => $_POST["lien"],
        ":texte" =>  $_POST["texte"],
        ":page" =>  $_POST["page"],
        ":idProjet" => $_POST["id_projet"],
      ]
    );

var_dump($bdd->errorinfo());

    $menuID = $_POST["id_projet"]; // lastInsertId Retourne l'identifiant de la dernière ligne insérée en base. ici, c'est l'ID du menu que nous venons tout juste d'ajouter dans la base.
    show_success("Le projet a été modifié");
  }
}
if(!empty($_FILES)) {
  enregistrerFichier($_FILES["imageChapitre"],  "img/vracs/$chapterID.jpg");
}
changeDePage(PROJET_URL_SITE . "admin/projet/projet_form_list.php");
