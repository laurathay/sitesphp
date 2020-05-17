<!DOCTYPE html>
<html>
<head>
    <title>Jour 5</title>
    <style>
        body {
            text-align: left;
            padding-left: 20px;
        }

        nav a{
            border:1px #ccc solid;
            padding: 3px 10px;
            text-decoration: none;
            background-color: #eee;
            color-adjust: #000;
            margin-right: 10px;
        }

        h1 {
            background: #ccc;
            padding: 10px;
        }

        h2 {
            border-bottom:1px #ccc dotted;
            border-top:1px #ccc dotted;
            margin-top: 40px;
            padding: 20px 0 5px;
        }

    </style>
</head>

<body>

<h1>Les fonctions</h1>


<h2>petit flashback</h2>

<?php

    // retour sur la fonction strpos()

    echo strpos("# ddddd dddddd", "#"); // va retourner 0
    echo "<br>";
    echo strpos("ddddd  dddddd", "#"); // va retourner False

    echo "<hr>";

    if(0 === FALSE){
      echo"Oui : O est FALSE";

    }

    // strpos : cherche la position de la premiere occurence dans une chaine
    // retourner lire la doc sur le site de php
    // https://www.php.net/manual/fr/function.strpos.php
    // il y a un avertissement à prendre en compte !
    // l'importance d'écrire ==== et non ==


?>



<h2>Les fonctions prédéfinies</h2>
<?php


// Nous avons déjà vu plusieurs fonction
//
// ecrire à quoi servent les fonctions suivantes :
//
// gettype() :  le type de la variable
// strlen($string) : longueur de la chaine de caractère
// empty() : voir si la variable est nulle ou vide
// isset(): voir si la variable est défini ou different de nulle
// trim() : Supprime les espaces (ou d'autres caractères) en début et fin de chaîne

echo "<h2>Les fonctions définies par l'utilisateur</h2>";

// un utilisateur peut ecrire ses propres fonctions
// une fonction ne peut être définie qu'une seule fois


function html_h1($titre) {
    echo "<h1>$titre</h1>";
}

html_h1("Mon titre");


function addBr($monParametre = "") { //ne pas oublier le = dans le parametre sinon ne s'affiche pas
    echo $monParametre;
    echo "<br>";
}

addBr("Plus besoin de mettre de br à la fin de ma chaine !");
addBr("Je suis à la ligne !");

// tester simplement (sans passer de paramètre)
addBr();




##
## EXERCICE : ecrire une fonction addBrX($monParametre, $couleur) qui écrit le contenu de $var dans une div avec une bordure de
## couleur $couleur et un padding de 10px
## si aucune couleur n'est envoyé, on met la couleur red par default
##

//addBrX("les fonctions, c'est la balle!", "yellow");

// <div style="border: 1px solid yellow, padding:10px;">
// Les fonctions, c'est de la balle
// </div>


// MON ESSAIE
// funtion addBrX($monAutreParametre = "Les fonctions, c'est de la balle"){
//   echo $monAutreParametre;
//   echo "<div style="border: 1px solid yellow, padding:10px /div>";
// }
//
// addBrX();
//
//
// function addBrX($monAutreParametre) {
//     echo "<div>$monAutreParametre</div>";
// }
//
// addBrX("style="border: 1px solid yellow, padding:10px");


//CORRECTION
function addBrX($monParametreAAfficher, $couleurBordureDiv){
  echo "
  <div style=\"border: 1px solid $couleurBordureDiv, padding:10px;\">  // ne pas oublier les antislash pour que ca passe au verre
   $monParametreAAfficher
   </div>
   ";
}
 // ne pas oublier les antislash pour que ca passe au verre
// ne pas oublier de remplacer les parametres dans le echo

//1ere étape
//addBrX("Ecrire ceci", "pink"); //rajouter 2 parametres !!!!!!!


//2eme etape
addBrX('Ecrire ceci xxxx');


htmlDiv("Super contenu 1", "superclass");


//autre exemple
function htmlDiv($contenu, $class){
  echo "
  <div class=\"$class\">
  $contenu
  </div>
  ";
}

htmlDiv("Super contenu", "superclass2");








function add($val1, $val2) {
    return $val1 + $val2; // les insctructions qui suivent un return ne sont pas executer.
    echo "Je suis une ligne bien inutile !"; //
}

$resultat = add(5,10);
addBr($resultat); // pour rajouter un br sans avoir a le faire

echo add(20, 65); // autre possibilité de l'écrire







// exo de division
funtion divide($val1, $val2){
  return $val1 / $val2;
}

$resultat = divide(150, 10); // j'ai oublié echo
addBr($resultat);

// autre facon de l'écrire Correction
addBr (divide(150,10));














#
# EXERCICE
# développer une fonction nombre_de_photo() qui prend en paramètre le nombre de photos que j'ai shooté hier
# la fonction écrit en toute lettre :
# exemple : si j'appelle nombre_de_photo(5)
# on verra écrit à l'écran "hier, vous avez pris 5 photos."
#
# La particularité de cette fonction est qu'elle ne se trompe jamais !
# c'est à dire qu'elle ne fait pas de fautes de grammaires !
#
# (perso, j'ai besoin de ce genre de fonction !)
#


fontion nombre_de_photo($nombre_de_photo(x)){
  if $nombre_de_photo(x) == 1{
    echo "Hier, vous avez pris 1 photo";
  } elseif ($nombre_de_photo(x) > 1) {
    echo "Hier, vous avez pris $nombre_de_photo photos";
  } else $nombre_de_photo(x) == 0{
    echo "Hier, vous n'avez pas pris de photo.";
  }
}

//Correction
function nombre_de_photo($nombre = 0){
  //hier, vous avez pris 5 photo.

  if(is_int($nombre) && $nombre >= 0){  //pour s'assurer que le nombre donner doit etre un nombre entier et supérieur a 0

    if ($nombre <=1){
      $chaine = "hier, vous avez pris $nombre photo.";
    } else {
      $chaine = "hier, vous avez pris $nombre photos.";
    }

    echo $chaine;
  } else {
    echo "Je ne vous comprends pas";
  }

}

nombre_de_photo("blabla");


















// Dans une fonction, nous pouvons préciser le type des paramètres que nous lui passons

function dire_age(string $nom, int $age) {
    return "$nom a $age ans";
}

addBr(dire_age("Nicolas",42));

#
# EXERCICE : modifier la fonction précédente.
# Si on s'interesse à Nicolas, retourner plutôt "Nicolas est cachotier".
# Si on ne s'interesse pas à Nicolas, continuer à retourner le résultat actuel
#

// on peut avoir plusieurs return dans une même fonction: l'interet de l'exo
function interresser(string $nom, int $age) {

    if ($nom == "Nicolas"){
      return "Nicolas est cachottier";
    } else {
      return "$nom a $age ans";
    }
}

addBr(dire_age("Nicolas",42));









#
# EXERCICE : ecrire une fonction est_adulte($age) qui retourne VRAI ou FAUX suivant l'age donné.
#
///////////////////////////// propagation d'une $variable /////////////////////

$chaine = "UNE CHAINE";

function ma_function_A() {
    $chaine = "La chaine de ma fonction";

    addBr("ma_function_A a été exécutée");
}

addBr($chaine);
// afficher à plusieurs endroit la valeur de la variable chaine
// et constater.


////////////////////////////////// une variable comme nom de fonction ///////////

$chaine = "Nicolas";

$debug = "var_dump";
$debug($chaine); // ===> var_dump($chaine)

echo $toto($chaine);
echo strlen ($chaine);
var_dump($chaine);

echo "<hr>";













# QUELQUES FONCTIONS A DEVELOPPER

# 1 - Créer une fonction concatenationEspace(), elle prend deux arguments de type string. Elle devra retourner
#     la concatenation des deux avec un espace entre les deux.
#     ex :  argument1 = Nicolas
#           argument2 = Hennette
#           résultat = Nicolas Hennette
############

concatenationEspace (Nicolas, Hennette)

fonction concatenationEspace(string $argument1, string $argument2){
  return "$argument1 . " " . $argument1";
}

$nomPrenom = concatenationEspace ("Nicolas", "Hennette");

addBrX($nomPrenom);
addBr($nomPrenom);


# 2 - Créer une fonction quiEstLePlusGrand(), elle prend deux arguments de type int et devra retourner le plus grand
#     des deux.
#########################


# 3 - Créer une fonction quiEstLePlusPetit(), elle prend 4 arguments de type int et devra retourner le plus petit
#     des 4.
#########################


# 4 - Créer une fonction validerMotDePasse(), elle prend une chaine en argument et retourne VRAI si cette chaine
#     valide les conditions suivante :
#       + elle fait au moins 10 caractères (non vide, sans compter les espaces)
#       + il y a au moins le caractère @
#


# 5 - Créer une fonction capital() qui prend en argument une chaine et qui retourne le nom de la capitale
#       FRANCE  ===> PARIS
#       ITALIE  ===> ROME
#       ESPAGNE ===> MADRID
#       TOUT AUTRE PAYS ===> OOOPS ! JE NE SAIS PAS
#
# echo capital('France'); ====> PARIS


# 6 - Créer une fonction aujourdhui() qui affiche la date du jour 15/05/2020
# si on galère dessus il y a une fonction pour ca  




?>



<hr>
<?php
include("nav.php");
?>
</body>
</html>
