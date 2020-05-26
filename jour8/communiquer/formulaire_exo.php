<?php
    include "pays_du_monde.php";
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Jour 8</title>
    <link rel="stylesheet" type="text/css" href="css/messtyles.css">
</head>

<body>

<div class="main">

    <h1>Jour 8</h1>

    <h1>Formualaire GET</h1>

    <a href="get_formulaire.php">Réinitialiser la page</a>



              <form method="get" action="#result">

                  <div >
                    <label for="nom"> Prénom</label>
                    <input type="text" name="prenom" placeholder="prénom">
                  </div>
                  <div >
                    <label for="noom"> Nom</label>
                    <input type="text" name="nom" placeholder="nom">
                  </div>
                  <div >
                    <label for="nom"> Année de naissance</label>
                    <input type="text" name="DDN" placeholder="DDN">
                  </div>
                  <div >
                    <label for="nom"> Adresse email </label>
                    <input type="text" name="adresse email" placeholder="email">
                  </div>
                  <div class="sep-20">
                    Pays de naissance
                      <br/>
                      <select name="choix_pays[]" multiple class="multiselect"> <!-- on met [] pour le mettre dans un tableau et pouvoir en selectionner plusieurs -->
                          <?php
                          foreach ($pays as $un_pays) {
                              echo "<option value='$un_pays[0]' >$un_pays[1]</option>" . PHP_EOL;
                          }
                          ?>
                      </select>
                  </div>


                          <div class="sep-20">
                              <button>Valider</button>
                          </div>
              </form>
  </div>

  <?php include "nav.php"; ?>

</body>

</html>
