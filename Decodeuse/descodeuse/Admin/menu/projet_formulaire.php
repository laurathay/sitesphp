<?php
include "../../config.php";
include "../include/entete.php";

proteger_page(); // fonction qui permet de verifier si nous nous sommes préalablement connecté.



if(!empty($_GET["projetAAfficher"])) { //si ya un parametre d'URL
    // si j'ai un paramètre d'URL, c'est que je modifie
    // un enregistrement déjà existant.
    $projetAModifier = $bdd -> query("SELECT * from menu where id_menu = " . $_GET["projetAAfficher"]) -> fetch();
} else {
    $projetAModifier = []; //dans ma variable je mets un tableau vide
}
?>

    <h1>Gestion des projets</h1>

    <?php
    show_error();
    show_success();
    ?>

    <div class="form">
        <!-- Le type d'encodage des données, enctype, DOIT être spécifié comme ce qui suit -->
        <form enctype="multipart/form-data" action="menu_formulaire_reponse.php" method="post">

            <input type="hidden" name="id_menu" value="<?php echoKey($menuAModifier, "id_menu", 0)  ?>">
                                                          <!-- affiche valeur defaut: 0 si la cle idmenu nexiste pas  -->
            <div class="field">
                Tech : <input name="nom" placeholder="Nom" type="text" value="<?php echoKey($projetAModifier, "nom")  ?>">
            </div>                                                                <!-- formulaire plus simple avec echoKey -->

            <div class="field">
                Titre : <input name="titre" placeholder="Titre" type="text" value="<?php echoKey($projetAModifier, "titre")  ?>">
            </div>

            <div class="field">
                Texte : <input name="entree" placeholder="Entrée" type="text" value="<?php echoKey($projetAModifier, "entree")?>">
            </div>

            <div class="field">
                Lien : <input name="plat" placeholder="Plat" type="text"  value="<?php echoKey($projetAModifier, "plat")?>">
            </div>



            <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />

            <div class="image_admin">
            <?php
            if(!empty($_GET["projetAAfficher"])) {
                echo html_image("image/menu/$_GET[projetAAfficher].jpg", "mini_image");
                }
            ?>
            </div>

            <div>
            Image du menu : <input name="imageProjet" type="file"  accept="image/jpeg" />
            </div>

            <input type="submit" value="Envoyer" />
            <a href="<?php echo PROJET_URL_SITE ?>admin/accueil.php" class="button">Annuler</a>

        </form>

    </div>

<?php

include "../include/footer.php";
