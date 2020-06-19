<?php
include "../../config.php";
include "../include/entete.php";
include "../accueil.php";

proteger_page();
if(!empty($_GET["projetAAfficher"])) {
    $projetAModifier = $bdd -> query("SELECT * from projet where id_projet = " . $_GET["projetAAfficher"]) -> fetch();
} else {
    $projetAModifier = [];
}
?>

<h1>Gestion des projets</h1>

<?php
show_error();
show_success();
?>

<div class="form">
  <form enctype="multipart/form-data" action="projet_form_rep.php" method="post">
    <input type="hidden" name="id_projet" value="<?php echoKey($projetAModifier, "id_projet", 0)  ?>">
    <!-- champ caché -->
    <div class="field">
      Nom : <input name="nom" placeholder="Nom" type="text" value="<?php echoKey($projetAModifier, "nom")  ?>">
    </div>
    <div class="field">
      Technologie : <input name="techno_id" placeholder="Technologie" type="text" value="<?php echoKey($projetAModifier, "techno_id")  ?>">
    </div>
    <div class="field">
      Client : <input name="client" placeholder="Client" type="text" value="<?php echoKey($projetAModifier, "client")?>">
    </div>
    <div class="field">
      Lien : <input name="lien" placeholder="Lien" type="text"  value="<?php echoKey($projetAModifier, "lien")?>">
    </div>
    <div class="field">
      Description : <textarea name="description" placeholder="Description" type="text" cols="40" rows="5" value="<?php echoKey($projetAModifier, "texte")?>"></textarea>
    </div>
    <div class="field">
      Page : <input name="page" placeholder="Page" type="number" value="<?php echoKey($projetAModifier, "page")?>">
    </div>
    <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
    <div class="image_admin">
    <?php
    if(!empty($_GET["projetAAfficher"])) {
      echo html_image("images/vracs/$_GET[projetAAfficher].jpg", "mini_image");
      }
    ?>
    </div>
    <div>
    Image du projet : <input name="imageProjet" type="file"  accept="image/jpeg" />
    </div>
    <input type="submit" value="Envoyer" />
    <a href="<?php echo PROJET_URL_SITE ?>admin/form_accueil/form.php" class="button">Annuler</a>
  </form>
</div>

<?php
include "../include/footer.php";
