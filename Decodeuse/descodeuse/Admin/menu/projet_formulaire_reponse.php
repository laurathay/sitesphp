<?php
// Cette page reçoit les informations du formulaire qui se trouve sur formulaire_accueil.php

include "../../config.php";

proteger_page(); // on ne peut pas acceder à la page sans être connecté.

if(!empty($_POST)) { //si on a cliqué sur validé
    //
    // on construit la requête
    //

    if($_POST["id_projet"] == 0) { // 0 dans hidden
        // je n'envoie pas d'ID donc je dois ajouter un nouveau menu

        // on aurait pu faire comme ça mais l'écriture est difficile à comprendre et moins sécurisé.
        //$bdd -> query ("INSERT INTO menu (nom, titre, entree, plat, dessert, ordre) VALUES ('$_POST[nom]', '$_POST[titre]' , '$_POST[entree]', '$_POST[plat]', '$_POST[dessert]', '$_POST[ordre]')");

        $query = $bdd -> prepare ("INSERT INTO projet (tech, titre, texte, lien) VALUES (:tech, :titre , :texte , :lien)");
        $query -> execute([
            ":tech" => $_POST["tech"],
            ":titre" =>  $_POST["titre"],
            ":texte" =>  $_POST["texte"],
            ":lien" => $_POST["lien"],
        ]);

        $menuID = $bdd -> lastInsertId(); // lastInsertId Retourne l'identifiant de la dernière ligne insérée en base. ici, c'est l'ID du menu que nous venons tout juste d'ajouter dans la base.
        ajouterSuccess("Nous avons ajouté un nouveau projet");

    } else {
        // un id est envoyé alors je modifie un enregistrement.
        $query = $bdd -> prepare ("UPDATE projet SET
                                            tech = :tech,
                                            titre = :titre,
                                            texte = :texte,
                                            lien = :lien
                                            WHERE id_projet = :idProjet");

        $query -> execute(
            [
                ":tech" => $_POST["tech"],
                ":titre" =>  $_POST["titre"],
                ":texte" =>  $_POST["texte"],
                ":lien" => $_POST["lien"],
                ":idProjet" => $_POST["id_projet"],
            ]
        );

        $projetID = $_POST["id_projet"]; // lastInsertId Retourne l'identifiant de la dernière ligne insérée en base. ici, c'est l'ID du menu que nous venons tout juste d'ajouter dans la base.
        ajouterSuccess("Nous avons modifié le projet");
    }
}

if(!empty($_FILES)) {
    enregistrerFichier($_FILES["imageProjet"],  "image/projet/$projetID.jpg");
}


changeDePage(RESTO_URL_SITE . "admin/menu/projet_lister.php");
