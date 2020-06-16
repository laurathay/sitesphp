
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
                			  <span>T</span>
                			  <span>h</span>
                			  <span>a</span>
                				<span>y</span>
                				<span>A</span>
                				<span>b</span>
                				<span>o</span>
                				<span>r</span>
                				<span>a</span>
                        <span>d</span>

                			</h1>
                		  <nav role="navigation" class="main-menu">
                				<ul class="menu">
                          <li><a href="<?php echo PROJET_URL_SITE ?>" target="_blank">Voir le site</a></li>
                          <li><a href="<?php echo PROJET_URL_SITE ?>admin/accueil/formulaire_accueil.php">Modifier ma page d'accueil</a></li>
                          <li><a href="<?php echo PROJET_URL_SITE ?>admin/menu/menu_lister.php">Ajouter, modifier ou supprimer un menu</a></li>
                          <li><a href="#">Ajouter, modifier ou supprimer un utilisateur</a></li>
                          <li><a href="deconnexion.php">Se déconnecter</a></li>
                          <li><a href="studio.html"> Projet </a></li>
                          <li><a href="contact.html"> Contact </a></li>
                				</ul>
                			</nav>
                			<div class="red-box"></div>
                			<img src="Assets/images/studio-img.jpg" alt="roze">
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

include "include/footer.php";
