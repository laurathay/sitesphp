<?php
    include("_function.php");
?><!DOCTYPE html>
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

<h1>Les tableaux</h1>


<?php

// Définition : un tableau, encore appelé array, permet de stocker une multitude de
// valeurs pouvant être de n'importe quel type.

// Déclarer un array :
$fruits = array('Kiwi', 'Poire', 'Pomme', 'Fraise', 'Ananas', 'Banane');

//echo $fruits;  //erreur car on ne peut pas afficher directement un array

var_dump($fruits);
// affiche le contenu du tableau et divers infos utiles au développeur
// à utiliser en cours de développement ou de debugage

// on peut aussi l'écrire
$fruits = ['Kiwi', 'Poire', 'Pomme', 'Fraise', 'Ananas', 'Banane'];

echo '<pre>'; print_r($fruits); echo '</pre>';  // pre est une balise HTML qui permet de formater du texte

// Nous récupérons souvent dans un tableau le résultat d'une recherche dans une base de données.

// Ajouter des valeurs à la fin d'un tableau
$legumes[] = 'Carotte';
$legumes[] = 'Poivron';
$legumes[] = 'Chou';
$legumes[] = 'Aubergine';



var_dump($legumes);

// Nous remarquons que l'index de ma première case est 0
// pour afficher la valeur de la 3ème case de mon tableau
addBr($legumes[2]);  // pour accéder à une valeur de l'array $tab, on précise l'indice de cette valeur entre crochets après le nom de l'array

addBr('Le légume est ' . $legumes[2]);
addBr("Le légume est $legumes[2]");

# Que se passe-t-il quand ....

# $legumes[] = 'Oignon';
# var_dump($legumes);

# $legumes = [];
# var_dump($legumes);

//---------
// Taille d'un tableau :
addbr("Nombre de legumes dans mon tableau: " . count($legumes) );

//-------------------------------------------------------
// Tableau associatif
//-------------------------------------------------------

h2("Tableau associatif");

$auteur = array(
    "prenom" => "Pierre",
    "nom" => "Deproges",
    "annee_naissance" => 1939,
    "annee_mort" => 1988, // on peut terminer son tableau par une virgule même s'il n y a rien après.
);

var_dump($auteur);

// Accéder à un élément du tableau associatif :
addBr('Le nom de notre auteur est ' . $auteur['nom']);
addBr("Le nom de notre auteur est $auteur[nom]");



//-------------------------------------------------------
// La boucle foreach
//-------------------------------------------------------

h2("La boucle foreach");

// foreach est un moyen simple de parcourir un tableau.

$tableau = array('Carotte', 'Poivron', 'Chou', 'Aubergine', 'Oignon');

foreach($tableau as $valeur) {
    // le mot AS fait partie de la structure de la boucle, il est obligatoire.
    // $valeur (on lui donne le nom que l'on veut) vient parcourir les valeurs de $tableau

    echo $valeur . '<br>';  // on affiche successivement les éléments du tableau
}

echo "<hr>";

//-----
echo "<ul>";
foreach($tableau as $indice => $valeur) {  // quand il y a 2 variables séparées par une flèche, la 1ere parcourt la colonne des indices et la seconde la colonne des valeurs
    echo "<li>";
    echo $indice . ' correspond à ' . $valeur . '<br>';  // on affiche successivement les indices et les valeurs de $tab
    echo "</li>";
}
echo "</ul>";

// Exercice : écrivez un array avec les indices prenom, nom, email et telephone et mettez y des valeurs.

$contact = array(         // ou on aurait pu écrire les crocher carrer
    "prenom" => "Laura",
    "nom" => "THAY",
    "mail" => "jedonnepasmonmail@mail.com",
    "telephone" => "0123456789",
    "ville" => "Paris",
    "code postal" => "75020",
    "hobbies" => "se currer le nez",
);

var_dump($contact);


// Puis avec une boucle foreach, affichez les indices et les valeurs dans des <p>,

echo "<ul>";
foreach($contact as $indice => $valeur) {  // quand il y a 2 variables séparées par une flèche, la 1ere parcourt la colonne des indices et la seconde la colonne des valeurs
    echo "<li>";
    echo $indice . ' correspond à ' . $valeur . '<br>';  // on affiche successivement les indices et les valeurs de $tab
    echo "</li>";
}
echo "</ul>";


// sauf pour le prenom qui doit être dans un <h3>.


# 2 -   Ecrire une fonction arrayToTable() qui reçoit en paramètre un tableau et qui écrit ce tableau dans un
#       balise <table> sur une ligne

//arrayToTable($contact);
// a faire pour demain



function tableDeMultiplication($NbrCol, $NbrLigne) {
  // $NbrCol = "20";
  // $NbrLigne = "10";

  echo '<table border="1" width="400">';  //tableau
  // 1ere ligne (ligne 0)
     echo '<tr>';        //meme agencement que dans html
     echo '<td bgcolor="pink"> i X j </td>'; // pareil que dans html
     for ($j=1; $j<=$NbrCol; $j++) { // initilisation de la 1ere colonne en tete
        echo '<td bgcolor="pink">'.$j.'</td>'; // affichage de la 1ere colonne en tete
     }
     echo '</tr>'; // fermeture de la premiere ligne en tete

  for ($i=1; $i<=$NbrLigne; $i++) { // initialisation du nombre de ligne
     echo '<tr>';
     for ($j=1; $j<=$NbrCol; $j++) { // initialisationdu nombre de colonne
         // 1ere colonne (colonne 0)
        if ($j==1) {
           echo '<td bgcolor="pink">'.$i.'</td>'; // affichage de la premiere colonne en tete
        }
         // colonnes suivantes
           if ($i==$j) {
              echo '<td bgcolor="yellow">'; // juste un rajout de couleur pour faire joli sur les memes nombres qui se multiplient
           } else {
              echo '<td>';
           }
         // ------------------------------------------
         // AFFICHAGE ligne $i, colonne $j
        echo $i*$j;    // c'est la que la multiplication du tableau se fait
        echo '</td>';
     }
     echo '</tr>';
     $j=1;
  }
  echo '</table>'; // tableau fermeture
}


tableDeMultiplication(10,10);


// LA VRAIE CORRECTION MAIS bug ligne : 230
// function creerTableauMultiplication ($nombreLigne, $nombreColonne){
//
//   $strHTML = "";
//
//   if($nombreLigne > 0 && $nombreColonne > 0) {
//
//     $strHTML .= "<table>"; //$strHTML = $strHTML . "<table>";
//     //creation des lignes
//
//     //premiere ligne d'entete
//     for($l=1; $l<=$nombreLigne ; l++){
//       $strHTML .= "<tr>";
//         $strHTML .= "<th>Multiplication</th>";
//     // BOUCLE
//       for($premiere_colonne=1; $premiere_colonne <= $nombreColonne; $premiere_colonne++){
//         $strHTML .= "<th>";
//         $strHTML .=  $premiere_colonne;
//         $strHTML .= "<th>" ;
//       }
//
//     //lignes de resultats
//     for($l=1; $l<=$nombreLigne; $l++){
//       $strHTML.="<tr>";
//     }
//         for($c=1; $c<=$nombreColonne; c++){
//           $strHTML .= "<td>";
//           $strHTML .= $l * $c;
//           $strHTML .= "</td>";
//         }
//         $strHTML .= "</tr>";
//     }
//     $strHTML .= "</table>";
//   }
//
//   return $strHTML;
//
// }


















//-----------------------
echo '<h2> Les tableaux multidimensionnels </h2>';
//-----------------------
// Nous parlons de tableaux multidimensionnels quand un tableau est contenu dans un autre.
// Chaque tableau représente une dimension.

// Créer un tableau multidimensionnel :
$auteurs = array(
    0 => array('prenom' => 'Pierre', 'nom' => 'Deproges', 'annee_naissance' => 1939, "annee_mort" => 1988, ),
    1 => array('prenom' => 'Albert', 'nom' => 'Camus', 'annee_naissance' => 1913, "annee_mort" => 1960, ),
    2 => array('prenom' => 'Gustave', 'nom' => 'Flaubert', 'annee_naissance' => 1821, "annee_mort" => 1880, ),
    3 => array('prenom' => 'Victor', 'nom' => 'Hugo', 'annee_naissance' => 1802, "annee_mort" => 1885, ),
);

echo '<pre>'; print_r($auteurs); echo '</pre>';

// Accéder à la valeur "Flaubert" :
echo $auteurs[2]['nom'] . '<br>';

foreach ($auteurs as $key => $auteur) {
 echo '<hr>';
 echo "<ul>";
 foreach($auteur as $cleTableau => $valeurLigne) {  // quand il y a 2 variables séparées par une flèche, la 1ere parcourt la colonne des indices et la seconde la colonne des valeurs
     echo "<li>";
     echo $cleTableau . ' correspond à ' . $valeurLigne ;  // on affiche successivement les indices et les valeurs de $tab
     echo "</li>";
 }
 echo "</ul>";
}

echo '<hr>';


// Parcourir le tableau avec une boucle for :
for($i = 0; $i < count($auteurs); $i++) {  // tant que $i est inférieur au nombre d'éléments du tableau, nous entrons dans la boucle
    echo $auteurs[$i]['nom'] . '<br>'; // $i va successivement prendre les valeurs 0 puis 1 puis 2, on parcourt donc l'array $tab_multi dans son intégralité
}

echo '<hr>';

#
# Exercice :
# dans une liste ul, li,
# afficher chaque auteur sous la forme : nom prenom ( annee de naissance - annee de mort)

foreach ($auteurs as $key => $auteur) {
 echo '<hr>';
 echo "<ul>";
 foreach($auteur as $cleTableau => $valeurLigne) {  // quand il y a 2 variables séparées par une flèche, la 1ere parcourt la colonne des indices et la seconde la colonne des valeurs
     echo "<li>";
     echo $cleTableau . ' correspond à ' . $valeurLigne ;  // on affiche successivement les indices et les valeurs de $tab
     echo "</li>";
 }
 echo "</ul>";
}

echo '<ul>'; //on commence par construire le html
foreach ($auteurs as $key => $auteur){
  echo"<li>";
  var_dump($auteur); //voir ce qui a linteiruer
  echo $auteur["nom"]. " " . ["prenom"]. "("["annee_naissance"] ." - ".["annee_mort"] .")";
  echo"</li>";
}
echo'</ul>';

exit;



// Accéder à la valeur "Flaubert" :
// echo $auteurs[2]['nom'] . '<br>';
//
// foreach ($auteurs as $key => $auteur) {
//  echo '<hr>';
//  echo "<ul>";
//  foreach($auteur as $cleTableau => $valeurLigne) {  // quand il y a 2 variables séparées par une flèche, la 1ere parcourt la colonne des indices et la seconde la colonne des valeurs
//      echo "<li>";
//      echo $cleTableau . ' correspond à ' . $valeurLigne ;  // on affiche successivement les indices et les valeurs de $tab
//      echo "</li>";
//  }
//  echo "</ul>";
// }

# Ecrire une fonction arrayToTable() qui reçoit en paramètre un tableau et qui écrit ce tableau dans une balise <table> sur une ligne
$contact = array(
  "prenom" => "Laura",
  "nom" => "Thay",
  "email" => "nogmail@gamil.com",
  "telephone" => "xxxx",
);


function arrayToTable($minion){

    echo '<table style="border: 5px pink solid;">' .'<tr>'.PHP_EOL;
      foreach($minion as $cle => $valeur){
        echo "<td>$valeur</td>".PHP_EOL;
      }
        echo "</tr>" . "</table>";
};

  echo arrayToTable($contact).PHP_EOL;


?>




<hr>
<?php
include("nav.php");
?>
</body>
</html>
