<?php
include "../../config.php"; // on rappelle tout ce qu'on va utiliser
include "../include/entete.php";

proteger_page(); // fonction qui permet de verifier si nous nous sommes préalablement connecté.

?>

    <h1> Liste des menus </h1>

<?php
show_error();
show_success();
?>

    <div class="menu">
        <a href="<?php echo RESTO_URL_SITE ?>admin/accueil.php">Retour à l'accueil</a> <!-- RESTO URL SITE configurer dans config -->
        <a href="<?php echo RESTO_URL_SITE ?>admin/menu/menu_formulaire.php">Ajouter un menu</a>
    </div>

    <div class="list">
        <?php
            $results = $bdd -> query("SELECT * FROM menu order by ordre") -> fetchAll(); //demander de selectionner tout les menus dans lordre avec liste attribut menu

            if(count($results) == 0) { //si y a 0  resultat
                echo "Aucun menu"; // on affiche aucun menu
            } else {               // sinon
                echo "<ul>";

                foreach($results as $result) {
                    $lienModifier = html_a("Modifier", RESTO_URL_SITE . "admin/menu/menu_formulaire.php?menuAAfficher=$result[id_menu]");
                    $lienSupprimer = html_a("Supprimer", RESTO_URL_SITE . "admin/menu/menu_supprimer.php?menuASupprimer=$result[id_menu]", "alert", "Voulez-vous effacer ce menu ?");

                    echo "<li>$result[nom]  ( $lienModifier | $lienSupprimer)</li>";

                }

                echo "</ul>";
            }


        ?>

    </div>

<?php

include "../include/footer.php";
