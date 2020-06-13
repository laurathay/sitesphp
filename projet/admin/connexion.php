<?php

include"../config.php";

if(!empty($_SESSION["peut_se_connecter"])){
  header("location:accueil.php");
  exit;
}

 ?>

<html lang="en" dir="ltr">
  <head>
    <head>
      <!-- emoticones et fonts -->
      <script src="https://kit.fontawesome.com/682d71be2a.js" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Playfair+Display|Quicksand&display=swap" rel="stylesheet">

      <!-- lien bootstrap-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <!-- normal -->
      <link rel="stylesheet" href="css/connexion.css">
      <meta charset="utf-8">
      <title> Site Decodeuse Admin Page </title>

      <!-- responsive -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    </head>
  </head>
  <body>

    <section class="background">


           <div class="card-deck">
             <div class="card">
                  <img src="images/developers-img2.jpeg" class="card-img-top" alt="Photo by Alex Azabache on Unsplash">

                  <div class="card-body" style="padding-left: 55px;">
                    <h5 class="card-title"></h5>
                    <p class="card-text">


                    </p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted"></small>
                  </div>
                </div>
                <div class="card">
                  <img src="images/developers-img.jpg" class="card-img-top" alt="Unsplash">


                  <div class="card-body">
                    <h5 class="card-title"> </h5>
                    <p class="card-text">
                      <div class="wrapper fadeInDown">
                      <div id="formContent">
                        <!-- Tabs Titles -->

                        <!-- Login Form -->
                        <form method="post" action="reponse.php"> <!-- c'est cette ligne qui est important avec action pour voir les réponses  -->

                        <?php if(!empty($_GET['err']) && $_GET['err'] == 'champ'){
                            echo "<div clas=\"error \">";
                            echo "merci de vérifier";
                            echo "</div>";
                          }

                          function addClassErreurChamp($champVide){
                            if(!empty($_SESSION['problemechamp']) && $_SESSION ['problemechamp']== $champVide){
                              echo"erreurchamp";
                            }
                          }

                            //erreur dans le champ
                            if(!empty($_GET['err']) && $_GET['err'] == 'identification'){
                                echo "<div clas=\"error \">";
                                echo "merci de vérifier vos id et mdp";
                                echo "</div>";
                                unset($_SESSION['err']);
                              }


                          ?>

                          <input type="text" id="login" class="fadeIn second" name="identifiant" placeholder="login"> <!-- c'est le name qui est important pour le fichier verigier login -->
                          <input type="password" id="password" class="fadeIn third" name="mdp" placeholder="password">
                          <input type="submit" class="fadeIn fourth" value="Log In">
                        </form>

                        <!-- Remind Passowrd -->
                        <div id="formFooter">
                          <a class="underlineHover" href="#">Forgot Password?</a>
                        </div>

                      </div>
                    </div>


                  </div>

              <div class="card-footer">
                    <small class="text-muted"> </small>
                  </div>
                </div>
                <div class="card">
                  <img src="Images/developers-img3.jpeg" class="card-img-top" alt="Photo by KIMO on Unsplash">

                  <div class="card-body">
                    <h5 class="card-title">  </h5>
                    <p class="card-text">
                    </p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted"></small>
                  </div>
                </div>
              </div>

              <br/>
              <hr>
              <br/>

    </section>

    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
