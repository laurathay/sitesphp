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

        table {
            margin: 20px 0px;
            border-collapse: collapse;
        }

        table, table td {
            border:1px #ccc solid;
        }

        table td {
            padding: 5px;
        }

    </style>
</head>

<body>

<h1>Les boucles</h1>


<?php

// Les boucles sont destinées à répéter des lignes de codes de façon automatique.


/////////////////////////  Boucle while :
h2("La boucle while");


$i = 0; // valeur de départ de la boucle


while ($i <= 5) {  // Tant que $i < 5 alors fait le code suivant.
    echo $i . '---';
    $i++; ///// SUPER IMPORTANT /// sinon continue a tourner a 0 a l'infini
    // l'incrémentation est obligatoire pour changer la valeur de $i
    // jusqu'à ce que la condition while devienne fausse (cela évite une boucle infinie)
}

hr();

# EXO 1 : Ecrivez une fonction tableDeMultiplication() qui prend en paramètre un chiffre et écrit la
# table de multiplication (jusqu'à 10)

// $i = 5;
//
// fontion tableDeMultiplication(){
//   while (isset(is_int($i))){
//     echo $i . '---';
//     $i*5;
//   }
// }
//
// hr()
// tableDeMultiplication(5);


function tableDeMultiplication($Tablede){
    echo "<h2> Table de  $Tablede </h2>";
    $i = 1;
    while ($i <= 10) {
      echo "$Tablede x $i = " . $i * $Tablede;
      echo "<br>";
      $i++;
  }
}

tableDeMultiplication(3);
echo "<hr>";


$a = 1; // valeur de départ de la boucle
while ($a <= 10){
  tableDeMultiplication($a);
  echo "<hr>";
  $a++;
}



# EXO 2 : Ecrire un <select> qui nous permettre de choisir une annéé entre 1900 et aujourd'hui

$ma_date = 1900;

echo "<select>";
  while($ma_date <= 2020) {

    echo "<option> $ma_date </option>";
    $ma_date++;
}
echo"</select>";
exit;

//alternative

// function choixAnnee($i) {
//   $chaineHtml = "";
//   while ($a <= date("Y")) {
//     $chaineHtml .= "<option value=\"$si\">$i</option>";
//     $i++;
//   }
// }

////////////////////////// Boucle do while :
h2("La boucle do ..... while");
// La boucle do while a la particularité de s'exécuter au moins une fois,
// puis de tourner tant que la condition de fin est vraie.


$j = 1;
do {
    addBr("On passe ici une fois");
} while($j > 10);
// la condition est FAUSSE mais la boucle s'est pourtant exécuter une fois.
// Attention à ne pas oublier le ";" à la fin du do...while


////////////////////////// Boucle for :
h2("La boucle for");

echo '<br>';


for($j = 0; $j < 16; $j++) {
    // dans les () on trouve :
    // la valeur de départ;
    // la condition d'entrée dans la boucle;
    // l'incrémentation ou la décrémentation
    // on peut dire "pour j allant de 0 à 15"
    // (15 car j doit rester strictement inférieur à 16, donc 15)
    addBr($j);
}

// pour que ce soit plus facilement lisible, je prefère écrire
for($j = 0; $j <= 15; $j++) {
//
}

hr();
//addbrX($j);


hr();

# Exercices :
# 1- faire une boucle for qui affiche les valeurs 0 à 9 sur la même ligne séparé par un " - ";
$a =33;

addBrX($a, "yellow") ;


$html = "";
for($a = 0; $a <= 9; $a++) {
    $html .= "$a -";
}

addBrX($html); // a ce niveau la a =10 et c'est la derniere valeur


# 2- faire la même chose en mettant les valeurs dans une <table>
echo "<table>";
echo "<tr>";

  for ($ma_table = 0; $ma_table <= 9; $ma_table++){
    echo "<td> $ma_table </td>";
  }

echo"</tr>";
echo"</table>";

hr();

// on veut ca
// <tr>
// <td> 0 </td>
// <td> 1 </td>
// <td> 2 </td>
// <td> ... </td>
// <td> 9 </td>
// </tr>
// </table>


echo '<table border="1">';
echo '<tr>';
for($i = 0; $i < 10; $i++) {
    echo "<td>$i</td>";
}
echo '</tr>';
echo '</table>';

hr();

# 3-  Faire un tableau de 5 lignes sur 5 colonnes :
//imbriquer 2 boucles for

echo '<table border="1">'.PHP_EOL;
for($l = 0; $l < 10; $l++)
  {
    echo "<tr>";{
    for($c = 0; $c < 10; $c++)
    {
        echo "<td>$l col $c</td>".PHP_EOL;
    }
    echo "</tr>";
  }

echo '</table>';
}

hr();

//12 lignes et 3 colonnes maintenant





function creerTableau ($nombreLigne, $nombreColonne){
  // retourner une chaine HTML
  $strHTML = "";

  if($nombreLigne > 0 && $nombreColonne > 0){
    $strHTML .= "<table>";

    for($l=1; $l<=$nombreLigne; $l++){
      $strHTML .= "<tr>";
      for($c=1; $x<=$nombreColonne; $c++){
        $strHTML .= "<td>Ligne $1 Col $c <td>";
      }
      $strHTML .= "</tr";
    }
    $strHTML .= "</table";

  }
  return $strHTML;

}


echo creerTableau(12,3);

hr();


function tableau(){
    echo '<table border="1">'.PHP_EOL;
    for($l = 0; $l < 12; $l++)
      {
        echo "<tr>";
        for($c = 0; $c < 3; $c++)
        {
            echo "<td>$l col $c</td>".PHP_EOL;
        }
        echo "</tr>";
      }

    echo '</table>';

    return $strHTML;
  }


?>






  <hr>
  <?php
  include("nav.php");
  ?>
  </body>
</html>
