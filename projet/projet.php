<?php

include "config.php";

include "template/include/head.php";

?>
<body>
      <div class = "liste-projets">
        <h1> Liste des projets </h1>


            <?php
            echo "<div class=\"inline\">";
            echo "<ul>";
             recupererProjets();
             
            echo "</ul>";
            echo "</div>";
            ?>

      </div>
</body>

<?php
include "template/include/footer.php";
?>
