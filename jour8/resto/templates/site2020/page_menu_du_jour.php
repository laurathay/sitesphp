<?php
    include "include/head.php";
?>

  <main>
    <div class="container">
        <h1>
          <?php echo $menu_a_afficher["titre"]?>
        </h1>
        <h2>Entrée</h2>
        <?php

        if(isset($menu_a_afficher["entree"])){
           echo $menu_a_afficher["entree"];
         }
         ?>
        <h2>Plat</h2>
        <?php

        if(isset($menu_a_afficher["plat"])){
           echo $menu_a_afficher["plat"];
         }
         ?>

        <h2>Dessert</h2>
        <?php

        if(isset($menu_a_afficher["dessert"])){
           echo $menu_a_afficher["dessert"];
         }
         ?>

    </div>
  </main>


<?php
include "include/footer.php";
?>
