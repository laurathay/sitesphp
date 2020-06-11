<?php
include "../../config.php"; // on rappelle tout ce qu'on va utiliser
include "../include/entete.php";

proteger_page(); // fonction qui permet de verifier si nous nous sommes préalablement connecté.

?>

    <h1> Liste des projets </h1>

<?php
show_error();
show_success();
?>

    <div class="projets">
        <a href="<?php echo RESTO_URL_SITE ?>admin/accueil.php">Retour à l'accueil</a> <!-- RESTO URL SITE configurer dans config -->
        <a href="<?php echo RESTO_URL_SITE ?>admin/menu/projet_formulaire.php">Ajouter un projet</a>
    </div>

    <div class="list">
        <?php
            $results = $bdd -> query("SELECT * FROM projet order by ordre") -> fetchAll(); //demander de selectionner tout les menus dans lordre avec liste attribut menu

            if(count($results) == 0) { //si y a 0  resultat
                echo "Aucun menu"; // on affiche aucun menu
            } else {               // sinon
                echo "<ul>";

                foreach($results as $result) {
                    $lienModifier = html_a("Modifier", RESTO_URL_SITE . "admin/menu/projet_formulaire.php?projetAAfficher=$result[id_projet]");
                    $lienSupprimer = html_a("Supprimer", RESTO_URL_SITE . "admin/menu/projet_supprimer.php?projetASupprimer=$result[id_projet]", "alert", "Voulez-vous effacer ce menu ?");

                    echo "<li>$result[nom]  ( $lienModifier | $lienSupprimer)</li>";

                }

                echo "</ul>";
            }


        ?>

    </div>

<?php

include "../include/footer.php";
