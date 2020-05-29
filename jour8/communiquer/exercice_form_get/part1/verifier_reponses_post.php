<?php
session_start ();


// SECONDE SOLUTION : en méttant le nom des champs dans un tableau
// =======================================================================

$nomChampsObligatoires = array("nom", "prenom", "annee", "email", "pays");

foreach($nomChampsObligatoires as $nomChamp) {

    if( empty($_POST[$nomChamp])) {

        $_SESSION["err"] = "CHAMP";
        $_SESSION["champ_erreur"] = $nomChamp;

        header("location:formulaire_post.php");

        exit;
        //
        // Je ne l'ai pas mis en cours. Mais c'est important pour dire qu'il faut
        // arrêter le code. Il n'y a plus de raison de continuer : on lui a demandé
        // de se rediriger vers la page formulaire.php
        //
    }
}

include("afficher_reponse_post.php"); // à la différence du cours, l'affichage de mon résultat se trouve dans une autre fichier.
