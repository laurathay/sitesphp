<?php

    function changeDePage($url) {
        // permet de faire une redirection vers $url

        header("location:" . $url);
        exit;
    }

function show_error() {
    // affiche toutes les cases de mon tableau $_SESSION["erreur"]
    if(!empty($_SESSION["erreur"])) {
        echo "<div class='erreur'><ul>";
        foreach ($_SESSION["erreur"] as $erreur) {
            echo "<li>$erreur</li>";
        }
        echo "</ul></div>";
    }

    unset($_SESSION["erreur"]); // une fois les erreurs affichées, je supprime le tableau pour être sur de ne plus les afficher plus tard.
}

function show_success() {
    // affiche toutes les cases de mon tableau $_SESSION["success"]
    if(!empty($_SESSION["success"])) {
        echo "<div class='success'><ul>";
        foreach ($_SESSION["success"] as $success) {
            echo "<li>$success</li>";
        }
        echo "</ul></div>";
    }

    unset($_SESSION["success"]); // une fois les erreurs affichées, je supprime le tableau pour être sur de ne plus les afficher plus tard.
}

function proteger_page() {
        // fonction qui permet de vérifier que la variable $_SESSION["connected_user"] existe
        // si c'est le cas, nous sommes connecté sinon, on retourne à l'accueil
        // et on ajoute un message d'erreur.
        var_dump($_SESSION);
        if(empty($_SESSION["peut_se_connecter"])) {
            // je ne suis pas connecté.
            changeDePage(PROJET_URL_SITE . "admin/connexion.php");
        }
}

function ajouterErreur($texteMessageErreur) {
    // Ajouter un texte dans notre tableau des erreurs.
    $_SESSION["erreur"][] = $texteMessageErreur;
}

function ajouterSuccess($texteMessageSuccess) {
    // Ajouter un texte dans notre tableau des success.
    $_SESSION["success"][] = $texteMessageSuccess;
}

function debug($var) {
        var_dump($var);
}

function enregistreProjet($titre, $texte) {
    // permet d'enregistrer une donnée dans la table simpledonnee

    global $bdd;
    // permet de récupérer la variable $bdd, même si celle-ci est à l'extérieur de ma fonction
    // dans cette variable, il y a le connexion à la base de données, nous pouvons donc
    // l'utilise dans notre fonction.

    // 1 - on verifie si la donnée existe déjà dans la table.


        // nous n'avons pas d'enregistrement, nous devons l'insérer dans la base.
        $date = '2008-7-04';
        $query = $bdd -> prepare("INSERT into projet (titre, texte, date) VALUES ( :titre, :texte, :date )");
        $stmt = $query -> execute([":titre" => $titre, ":texte" => $texte, ":date" => $date]);


        if (!$stmt) {
            echo "\nPDO::errorInfo():\n";
            print_r($query->errorInfo());

          }
}

function enregistreTechno($techno) {
    // permet d'enregistrer une donnée dans la table techno
    global $bdd;
        // nous n'avons pas d'enregistrement, nous devons l'insérer dans la base.
        $date = '2020';
        $query = $bdd -> prepare("INSERT into techno (nom_techno) VALUES ( :nom_techno )");
        $stmt = $query -> execute([":nom_techno" => $nom_techno]);


        if (!$stmt) {
            echo "\nPDO::errorInfo():\n";
            print_r($query->errorInfo());

          }
}

function MontrerValeur($iduu) {
    // montre la valeur de simpledonnee

    global $bdd;

    // 1 - on verifie si la donnée existe déjà dans la table.
    $query = $bdd -> prepare("SELECT * from simpledonnee where iduu = :iduu");
    $query -> execute([":iduu" => $iduu]);
    $val = $query ->  fetch(PDO::FETCH_ASSOC);

    if(isset($val["valeur"])) {
        return $val["valeur"];
    }

}


function enregistrerFichier($fichier, $destination) {

        if($fichier["error"] == UPLOAD_ERR_OK || $fichier["error"] == UPLOAD_ERR_NO_FILE) {
            // nous utilisons ici des constantes fournies par PHP. Nous pourrions utiliser les chiffres correspondants
            // mais nous utilisons plutôt ces constantes qui ont un nom qui est plus compréhensible
            // voir : https://www.php.net/manual/fr/features.file-upload.errors.php


            if($fichier["error"] == UPLOAD_ERR_OK) {
                // un fichier a été envoyé correctement, nous devons le traiter
                //
                // 1 - nous verrifions que le chemin de destination existe, sinon nous le créons.

                verifierCheminFichier($destination);

                move_uploaded_file($fichier["tmp_name"], PROJET_PATH_SITE . $destination);

            }
        } else {
            ajouterErreur("Un fichier n'a pas été enregistré.");

        }
}

function recupererTechno() { //que jutilise dans l'admin


        global $bdd;
        $results = $bdd-> query("SELECT * FROM techno")->fetchAll();
        foreach ($results as $key => $techno) {

            $lienSupprimer = html_a("Supprimer", PROJET_URL_SITE . "admin/projet_form/projet_form_delete.php?technoASupprimer=$techno[id_techno]", "alert", "Effacer ce langage ?");
            echo "<div class=\"nom_techno\"><li> Langue : $techno[nom_techno] <br> ($lienSupprimer)</li></div>";
        }
}

function recupTechno ($idTech, $techno) { //pour afficher la techno avec le bon projet mais in progress..
     global $bdd;
     $query2 = $bdd -> prepare("SELECT nom_techno
       FROM projet, techno, projet_tech
       WHERE projet.id_projet = projet_tech.projet_id
       AND projet_tech.techno_id = techno.id_techno
       AND projet.id_projet = :idProjet ");
     $query2 -> execute([":idProjet" => $idTechno]);//
     return $query2 -> fetchAll(PDO::FETCH_ASSOC); // on utilise fetch et non fetchAll car nous souhaitons retourner un seul résultat.

     foreach ($results as $key => $techno) {

         $lienSupprimer = html_a("Supprimer", PROJET_URL_SITE . "admin/projet_form/projet_form_delete.php?technoASupprimer=$techno[id_techno]", "alert", "Effacer ce langage ?");
         echo "<div class=\"nom_techno\"><li> Langue : $techno[nom_techno] <br> ($lienSupprimer)</li></div>";

// manque quelque chose pour l'afficher mais je n'arrive pas à mettre le doigt dessus 
 }
}
/* $techno_a_afficher = recupTechno($idTech);*/




function recupererListeProjets() { //que jutilise dans l'admin


        global $bdd;
        $results = $bdd-> query("SELECT * FROM projet")->fetchAll();
        foreach ($results as $key => $projet) {

            $lienModifier = html_a("Modifier", PROJET_URL_SITE . "admin/projet_form/projet_form.php?projetAAfficher=$projet[id_projet]");
            $lienSupprimer = html_a("Supprimer", PROJET_URL_SITE . "admin/projet_form/projet_form_delete.php?projetASupprimer=$projet[id_projet]", "alert", "Effacer ce projet ?");
            echo "<div class=\"titre_projet\"><li> Projet : $projet[titre] <br> ( $lienModifier | $lienSupprimer)</li></div>";
            echo "<div class=\"texte_projet\"><li> Description: $projet[texte] <br> ( $lienModifier | $lienSupprimer)</li></div>";
            echo html_image("images/vrac/" .  $projet['id_projet'] . ".jpg", "image_dimension");
            echo "<hr>";
        }
}
function recupererProjets() { //que jutiise sur le site normal

  /*try{
        $pdo = new PDO("projet");
    } catch(Exception $e){
        print_r($e);
    }*/

        global $bdd;
        $results = $bdd-> query("SELECT * FROM projet")->fetchAll();
        foreach ($results as $key => $projet) {

            echo "<div class=\"titre_projet\"><li> Projet : $projet[titre]  </li></div>";
            echo "<div class=\"texte_projet\"><li> Description : $projet[texte]  </li></div>";
            echo html_image("images/vrac/" .  $projet['id_projet'] . ".jpg", "image_dimension");
            echo "<hr>";
        }
}


function verifierCheminFichier($chemin) {
        //
    // verifier si un chemin de fichier existe.
    // si les répértoires n'existent pas, nous allons les créer.
    //
        $arrChemin = explode("/", $chemin);

        $verifChemin = PROJET_PATH_SITE;
        foreach ($arrChemin as $dossier) {
            if(!strstr($dossier, ".")) {
                // si il n'y a pas de point dans le nom du dossier, c'est qu'il s'agit d'un dossier
                // (sinon, c'est un fichier)
                $verifChemin .= $dossier ."/";
                var_dump($verifChemin);
                if(!is_dir($verifChemin)) { // ce n'est pas un dossier, alors nous allons le créer.
                    mkdir($verifChemin);
                }
            }
        }
}

function echoKey($tableau, $cle, $valeurDefaut = "") {
        // ecrit la valeur de la case clé de mon tableau.
    if(!empty($tableau[$cle])) {
        echo $tableau[$cle];
    } else {
        echo $valeurDefaut;
    }


}


function html_image($urlImage, $classHtml = "") {
        // on affiche le tag vers l'image seulement si l'image existe.

        if(is_file(PROJET_PATH_SITE .$urlImage)) {
            return "<img src='".PROJET_URL_SITE."$urlImage' class='$classHtml'>";
        }
        return "";
}

function html_a($text, $lien = "#", $class="", $confirm="") {
        // fabrique la balise <a href></a>

    if($confirm != "") {
        $confirm = "onclick=\"return confirm('$confirm')\"";
    }

    return "<a href='$lien' class='$class' $confirm >$text</a>";
}

function f($str) {
    // formate une chaine avant de l'enregistrer dans la base.
    // permet de mettre des guillemets dans ma chaine.

    global $bdd;


    return $bdd->quote($str);

}
