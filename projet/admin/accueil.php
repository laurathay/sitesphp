
<?php

include "../config.php";
include "include/entete.php";


proteger_page(); // fonction qui permet de verifier si nous nous sommes préalablement connecté.

?>

<?php
show_error();
show_success();
?>



  <body>

      <nav>

      </nav>





                <body class="E" data-gr-c-s-loaded="true" cz-shortcut-listen="true">

                		<header role="banner">
                		  <h1 class="site-name">
                			  <span>T</span>
                			  <span>h</span>
                			  <span>a</span>
                			  <span>y</span>
                			  <span>D</span>
                			  <span>E</span>
                			  <span>S</span>
                				<span>C</span>
                				<span>O</span>
                				<span>D</span>
                				<span>U</span>
                				<span>E</span>
                				<span>S</span>
                        <span>E</span>

                			</h1>
                		  <nav role="navigation" class="main-menu">
                				<ul class="menu">
                          <li><a href="<?php echo PROJET_URL_SITE ?>index.php">Voir le site</a></li> <br>
                          <li><a href="<?php echo PROJET_URL_SITE ?>admin/formulaire_accueil.php">Modifier </a></li> <br>
                          <li><a href="<?php echo PROJET_URL_SITE ?>admin/projet_form/projet_form_list.php">Ajouter </a></li> <br>
                          <li><a href="<?php echo PROJET_URL_SITE ?>admin/projet_form/projet_form_delete.php"> Supprimer </a></li> <br>
                          <li><a href="/projet/admin/deconnexion.php">Se déconnecter</a></li> <br>
                          <li><a href="projet.php"> Projet </a></li> <br>
                          <li><a href="contact.php"> Contact </a></li> <br>
                				</ul>
                			</nav>
                			<div class="red-box"></div>
                			<img src="images/flamingo.jpg" alt="flamingo">
                		</header>


                    <main>

                      <div class="o-container d-flex u-justify-content-end u-justify-content-mobile-start">
                        <div class="c-intro__text">
                          <p class="fs-3 is_over" data-anim="">
                              Bienvenue dans votre espace administration <br>
                              Ici vous allez pouvoir modifier le contenu de votre site internet. <br>
                          </p>
                        </div>
                      </div>

<?php
include "formulaire_accueil.php";

include "include/footer.php";
