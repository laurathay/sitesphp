<?php
    include "include/head.php";

?>


  <main>
    <div class="container">
        <h1>
            <?php echo $projet_a_afficher["titre"]?> <!-- comment faire le lien avec bdd?  -->
        </h1>
        <div class="row">
            <div class="col-6">


                <h2> Aperçu </h2>
                <?php echo $projet_a_afficher["tech"]?>

                <h2> Texte </h2>
                <?php echo $projet_a_afficher["texte"]?>

                <h2> Date </h2>
                <?php echo $projet_a_afficher["date"]?>
            </div>

            <div class="col-6">
                <?php echo html_image("images/projet/$_GET[projetAAfficher].jpg");?>

            </div>

        </div>





    </div>
  </main>


<?php
include "include/footer.php";
?>
