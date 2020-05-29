<h1> Ecrire dans un fichier </h1>

<?php

  $file = fopen("inscription.text", "a+"); // check mdn permet afficher et ecrire sur le fichier et s'il nexsite pas de le creer

  fwrite($file, "laurathaythay" . PHP_EOL); //ecrit sur le fichier et rajoute des sauts de ligne a chaque fois qu'on recharge
  fwrite($file, "cacapipi" . PHP_EOL);

  fclose($file); //ferme le fichier

 ?>
