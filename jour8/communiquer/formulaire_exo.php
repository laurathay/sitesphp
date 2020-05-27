<?php
  session_start();
    include "pays_du_monde.php"; //récupération des données de pays
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Jour 8</title>
    <link rel="stylesheet" type="text/css" href="css/messtyles.css">
</head>

<body>

<div class="main">

    <h1>Jour 8</h1>

    <h1>Formulaire GET</h1>



              <?php

                var_dump($_SESSION);

              if(!empty($_GET["err"]) && $_GET["err"] == "champ")
              {
                echo"<div class='error'>";
                echo "rempli tout";
                echo"</div>";
              }

              if(!empty($_GET["err"]) && $_GET["err"] == "mail"){
                echo "<div class='error'>";
                echo "merci de verifier votre email ";
                echo "</div>";
              }

              function addClassErreurChamp($champVide){
                if (!empty($_GET["problemechamp"]) && $_GET["problemechamp"] == "$champVide"){
                  echo "erreurchamp";
                }
               }

              ?>


              <form method="get" action="reponse.php">

                  <div class="champ <?php addClassErreurChamp("prenom");?> ">
                    <label for="nom"> Prénom</label>
                    <input type="text" name="prenom" placeholder="prénom">
                  </div>
                  <br>

                  <div class="champ <?php addClassErreurChamp("nom");?> ">
                    <label for="nom"> Nom</label>
                    <input type="text" name="nom" placeholder="nom">
                  </div>
                  <br>

                  <div  class="champ <?php addClassErreurChamp("pseudo");?>">                  " >
                    <label for="pseudo"> Pseudo</label>
                    <input type="text" name="pseudo" placeholder="pseudo">
                  </div>
                  <br>

                  <div class="champ <?php addClassErreurChamp("annee_naissance");?>" >
                    <label for="nom"> Année de naissance</label>
                    <select name="annee_naissance" placeholder="DDN">

                      <?php
                          for($i = 1960 ; $i <= date("Y") - 16; $i++){     //bien retenir cette partie pour faire la selction de 1960 a 2000
                              echo "<option value = '$i' > $i</option>";
                          }
                      ?>
                            <option value="1960"> 1960 </option>
                            <option value="1961"> 1961 </option>

                    </select>
                  </div>
                  <br>

                  <div  class="champ <?php addClassErreurChamp("email");?>">
                    <label for="nom"> Adresse email </label>
                    <input type="text" name="email" placeholder="email">
                  </div>
                  <br>

                  <div  class="champ <?php addClassErreurChamp("pays_de_naissance");?>" >
                    Pays de naissance
                      <br/>
                      <select name="pays_de_naissance" multiple class="multiselect"> <!-- on met [] pour le mettre dans un tableau et pouvoir en selectionner plusieurs -->
                          <?php
                          foreach ($pays as $unPays) {
                              echo "<option value='$unPays[3]'>$unPays[3]</option>" . PHP_EOL;
                          }
                          ?>
                      </select>
                  </div>


                          <div class="sep-20">
                              <button type="submit">Valider</button>
                          </div>
              </form>
              <?php
                if(empty($_GET["nom"])) {
                  echo"<br>";
                  echo "Rempli teubé";
                }
               ?>
  </div>

  <?php include "nav.php"; ?>

</body>




















</html>


<?php
    $_SESSION = array(); //pour vider le tableau a chaque fois
    unset($_SESSION["err"]); // pour vider les erreurs type  
 ?>
