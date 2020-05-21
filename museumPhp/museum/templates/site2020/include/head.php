<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- font awesome link -->
    <script src="https://kit.fontawesome.com/682d71be2a.js" crossorigin="anonymous"></script>

    <meta charset="UTF-8">

    <title><?php echo isset($title_page) ? $title_page : strtoupper($nom_du_musee) . " - Musée ThayThay" ?></title>
    <!-- lien bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&family=Raleway:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $_url_base . $_dossier_template ?>css/style.css" />
</head>

<body>
<header>

        <?php include "navigation.php" ?>
  
</header>
