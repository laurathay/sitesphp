<?php

$tab_1 = array(
    "prenom" => "Pierre",
    "nom" => "Deproges",
    "annee_naissance" => 1939,
    "annee_mort" => 1988, // on peut terminer son tableau par une virgule même s'il n y a rien après.
);

$tab_2 = array(
    "prenom" => "Pierre",
    "nom" => "Deproges",
    "annee_naissance" => 1939,
    "annee_mort" => 1988, // on peut terminer son tableau par une virgule même s'il n y a rien après.
    "oeuvres" => array("Le Petit Reporter", "La Minute nécessaire de monsieur Cyclopède", "Les Bons Conseils du professeur Corbiniou"),
);



function html_separation() {
    // écrit 3 sauts de ligne , le tag HR et 3 sauts de lignes à la fin.
    echo PHP_EOL . PHP_EOL . PHP_EOL;
    echo "<hr>";
    echo PHP_EOL . PHP_EOL . PHP_EOL;
}



/////////////////////////////////////////////////////////////////////
// essayer de comprendre ce que font les fonctions suivantes
//
// Dans la peau de l'interpréteur de PHP
/////////////////////////////////////////////////////////////////////

function choisir_un_meilleur_nom($param_1, $param_2) {

    if(strlen($param_1) < strlen($param_2)) {
        return 2;
    } elseif(strlen($param_1) == strlen($param_2)) {
        return 0;
    } if(strlen($param_1) > strlen($param_2)) {
        return 1;
    }
}

# echo choisir_un_meilleur_nom("Nicolas", "Hennette"); //2
# echo choisir_un_meilleur_nom("Hennette", "Nicolas"); // 1
# echo choisir_un_meilleur_nom("tata", "toto"); // 0

//Mon interprétation c'est que si la longueur de la chaine de caractère du prénom nicolas et inferieur à la longueur
// de la chaine de caractere de Hennette alors il va renvoyer 2 et les deux parametres ont le meme nombre de
// chaine de caractere ca va renvoyer 0 et si le parametre 1 est supérieur donc 1







/////////////////////////////////////////////////////////////////////
html_separation(); //////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////

function code_php() {
    echo "<?php echo 'Je vous jure que ce n'est pas compliqué' ?>";
    // n'oubliez pas de regarder le code source de votre page !
}

 code_php();

//Mon interprétation c'est que y aura 3 sauts de ligne avant d'afficher le texte, j'avais pas vu les guillemets
// ca n'affiche que le hr pcq y a pas de echo code_php(), il faut appeler la fonction avant.




/////////////////////////////////////////////////////////////////////
html_separation(); //////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////


function format_c($je_veux_formater = TRUE) {
    echo "Vous aller effacer TOUS les fichiers de votre disque dur";

    if($je_veux_formater === TRUE) {
        format_disk("c:");
    } else {
        echo "Aucun fichier n'a été supprimé.";
    }
}
#format_c() prend la valeure true par defaut
# format_c(FALSE); // la fonction n'existe pas en soi
# format_c(TRUE);// ca affiche fatal error


//mon interprétation:

/////////////////////////////////////////////////////////////////////
html_separation(); //////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////


function je_sais_pas_ce_que_je_fais($nombre){
    if($nombre<=0){
        echo'<span style="color:blue">'.$nombre.'</span>';
    }
    elseif($nombre<=19){
        echo'<span style="color:green">'.$nombre.'</span>';
    }
    else{
        echo'<span style="color:red">'.$nombre.'</span>';
    }
    echo PHP_EOL;
}

//essayer de comprendre la fonction
#je_sais_pas_ce_que_je_fais(30); //ca va afficher en rouge le nombre
#je_sais_pas_ce_que_je_fais(-50); //ca va afficher en bleu le nombre
#je_sais_pas_ce_que_je_fais(15); // ca va afficher en vert le nombre



function thermometrer(){
    // Attention !
    // dans le code de cette fonction, j'utilise la fonction précédente "je_sais_pas_ce_que_je_fais"
    // si vous avez changé son nom, il faudra le repercuter

    for($i=25; $i>=-15; $i--) {
        thermometrer($i);
        echo "<br>";
    }
}

 #thermometrer();

 //essayer de comprendre la fonction
 // i est initialiser a 25 donc sera en rouge et ainsi de suite jusqu'a -15 donc va passer par bleu puis vert avec
 // un saut de ligne entre chaque chiffre



/////////////////////////////////////////////////////////////////////
html_separation(); //////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////// Pour aller encore plus loin (si vous ne craquez pas !)   ////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
/// même moi, j'ai du mal à me relire ! Alors pas de soucis ! /////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////


function parcourir_tableau($tableau) {
    // ça on ne l'a pas vu... mais vous pouvez essayer de parcourir le code est comprendre
    // deviner ce que va écrire notre fonction

    echo "<ul>"  . PHP_EOL;
    foreach($tableau as $key => $value) {
        if(is_array($value)) { // détermine si la variable est un tableau
            parcourir_tableau($value); // c'est a ce moment que la fonction s'appelle elle meme
        } else {
            echo "<li>" . $value . "</li>"  . PHP_EOL;
        }
    }
    echo "</ul>" . PHP_EOL;
}

# parcourir_tableau($tab_1); // affiche une liste, si la valeur est une variable fait partie du tableau la fonction s'applique sinon elle affiche juste la valeur?
# parcourir_tableau($tab_2); // une fonction qui s'appelle elle-meme , un tableau qui affiche un autre tableau


html_separation();

////////////////////////////////////////////////////

function creerMotDePasse($parametre_1) {

    // fonction bien obscure !

    $alpha_maj = range('A', 'Z');  // fonction utile a connaitre , qu'est ce que fait range?
    $alpha_min = range('a', 'z'); //  Crée un tableau de a à z et de A à Z
    $chiffres = range(0, 9);

    $tableau_global = array_merge($a, $b, $bb); //autre fonction a check : fusionne les variables donc les tableaux

    $nb_ele_tableau = count($c); // compte combien j'ai déléments dans ma variable c

    $motdepasse = ""; // si ne retourne pas le mdp = erreur. initialise pour renvoyer le mot de passe meme si y a rien, existe donc. créer une chaine vide, celle que je renvoie a la fin. il vaut mieux essayer d'utiliser des noms compréhensible a la lecture .

    for($i=1; $i<=$parametre_1; $i++) {
        $valeur_tableau = rand(0, $nb_elem_tableau - 1); // Pourquoi on met - 1 ? pour que ca génére une valeur aléatoire i entre 0 et 9 ?
        $motdepasse .= $c[$h]; // ici je prends la valeur correspondant a ce chiffre et je la colle a la chaine
    }

    return $motdepasse;

}

# echo nom_de_fonction_pas_clair_1(10); // permet de générer un mot de passe.

# echo nom_de_fonction_pas_clair_1(100); // un mixe de 100 elements randomly chosen avec chiffres et abc



html_separation();
