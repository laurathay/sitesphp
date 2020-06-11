<nav>
    <ul>
      <li>
            <a href="<?php echo RESTO_URL_SITE ?>">Accueil</a>
      </li>
        <?php foreach( tousLesMenus() as $menu ) {
            echo "<li>";
            echo html_a($menu["nom"], RESTO_URL_SITE . "menu.php?menuAAfficher=$menu[id_menu]");
            echo "</li>";
        }
        ?>

    </ul>
</nav>

<!-- barre de navigation -->

<div id="div3">

  <div class="container-studio">

    <div class="about">
      <a href="index.html"> About </a>
  </div>
  <div class="project">
    <a href="project.html"> Projects</a>
  </div>
  <div class="section">
    Section
  </div>
  <div class="project">
    <a href="contact.html"> Contact </a>
  </div>
  <div class="bas">
     Insights projects
  </div>

  </div>

</div>
