<nav>
    <ul>
      <li>
            <a href="<?php echo PROJET_URL_SITE ?>">Accueil</a>
      </li>
        <?php foreach( tousLesProjets() as $projet ) {
            echo "<li>";
            echo html_a($projet["nom"], PROJET_URL_SITE . "projet.php?projetAAfficher=$projet[id_projet]");
            echo "</li>";
        }
        ?>

    </ul>
</nav>
<!-- barre de navigation -->

<div id="div3">

  <div class="container-studio">

    <div class="about">
      <a href="index.php"> About </a>
  </div>
  <div class="project">
    <a href="projet.php"> Projects</a>
  </div>
  <div class="section">
    Section
  </div>
  <div class="project">
    <a href="contact.php"> Contact </a>
  </div>
  <div class="bas">
     Insights projects
  </div>

  </div>

</div>
