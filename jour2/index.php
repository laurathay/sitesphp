 <?php include "config.php";?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Exo 1 <?php echo $titre_restaurant;?> </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

  </head>
  <body>
    <header>

      <div class="container">
    <?php include "navigation.php"; ?>
      </div>

   </header>

    <main>
          <h1><? php echo $titre; ?></h1>

          <p><? php echo $contenu;?> </p>

          <div class="container">
              <img src="aditya-hermawan-K5WNouzf-TQ-unsplash.jpg" alt="fond">

                  <div id="intro_color" >

                    <h1>
                    <span class="char1 color4" style="opacity: 1;">T</span>
                    <span class="char2 color1" style="opacity: 1;">H</span>
                    <span class="char3 color2" style="opacity: 1;">A</span>
                    <span class="char4 color3" style="opacity: 1;">Y</span>
                    <span class="char5 color1" style="opacity: 1;"> </span><br/>
                    <span class="char6 color2" style="opacity: 1;">T</span>
                    <span class="char7 color3" style="opacity: 1;">H</span>
                    <span class="char8 color1" style="opacity: 1;">A</span>
                    <span class="char9 color2" style="opacity: 1;">Y</span>
                    <span class="char10 color4" style="opacity: 1;">  </span><br/>
                    </h1>

                  </div>
          </div>
    </main>

    <footer>

      <?php include "footer.php"; ?>
      <?php include "navigation.php"; ?>

    </footer>

  </body>
</html>





<?php

echo "<hr>";
echo "<br/>";

$name = "Laura";
echo "moi c'est" . " " . $name . " et j\'ai faim.";

 ?>
