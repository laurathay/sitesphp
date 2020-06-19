<?php

include "config.php";

include "template/include/head.php";

?>
<body>
        <h1> Liste des projets </h1>

        <div class="nav_chapitres">

          <h2>Les projets</h2>
          <div class="chapter_list">

            <?php

            echo "<ul>";
             recupererProjets();
          echo "</ul>";
            ?>

          </div>

        </div>
</body>

<?php
include "template/include/footer.php";
?>
