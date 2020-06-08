<?php

include "config.php";

function tousLesUsers () {
    // retourne tous les menus
    global $bdd;
    return $bdd -> query("select * from user") -> fetchAll(PDO::FETCH_ASSOC);
}

var_dump(tousLesUsers());

 ?>
