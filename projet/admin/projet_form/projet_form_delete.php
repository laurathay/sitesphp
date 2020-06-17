<?php
include "../../config.php";
proteger_page();

if(!isset($_GET["projetASupprimer"])) {
    ajouterErreur("Choisir le projet à supprimer.");
} else {
    $bdd -> query("DELETE FROM chapter WHERE id_projet = " . $_GET["projetASupprimer"]);
    show_Success("Le projet a été supprimé.");

}

changeDePage(PROJET_URL_SITE . "admin/projet/projet_form_list.php");
