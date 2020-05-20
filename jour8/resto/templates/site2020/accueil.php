<?php include "include/head.php" ?>


  <main>
        <div class="container">
            <h1>Bienvenue sur le site de <?php echo $contenuSite ["accueil"]["titre"]?></h1>
            <div>
              <?php

                echo $contenuSite["accueil"]["texte"]

               ?>
            </div>
        <div>
  </main>

  <?php include "include/footer.php" ?>
