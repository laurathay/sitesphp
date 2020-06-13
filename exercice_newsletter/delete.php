<?php
include "config.php";

// var_dump($_GET);
$maRequeteDelete = "DELETE FROM inscription WHERE id_inscription = $_GET[url_abonne_delete]";

$bdd->query($maRequeteDelete);

header("location:lister_newsletter.php");
exit;
