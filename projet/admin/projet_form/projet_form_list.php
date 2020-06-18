<?php
include "../../config.php";
include "../include/entete.php";

proteger_page();

?>

<h2>Liste des Projets</h2>

<?php
show_error();
show_success();
?>

<div class="chapter">
  <a href="<?php echo PROJET_URL_SITE ?>admin/accueil.php">Retour à l'accueil</a>
  <a href="<?php echo PROJET_URL_SITE ?>admin/projet_form/projet_form.php">Ajouter un Projet</a>
</div>

<div class="list">
  <?php
    $results = $bdd -> query("SELECT * FROM projet order by id_projet") -> fetchAll();
    if(count($results) == 0) {
        echo "Aucun projet";
    } else {
        echo "<ul>";
      foreach($results as $result) {
        $lienModifier = html_a("Modifier", PROJET_URL_SITE . "admin/projet/projet_form.php?projetAAfficher=$result[id_projet]");
        $lienSupprimer = html_a("Supprimer", PROJET_URL_SITE . "admin/projet/projet_delete.php?projetASupprimer=$result[id_projet]", "alert", "Effacer ce projet ?");
        echo "<li>$result[nom]  ( $lienModifier | $lienSupprimer)</li>";
      }
      echo "</ul>";
    }
  ?>

</div>

<?php include "../include/footer.php"; ?>
