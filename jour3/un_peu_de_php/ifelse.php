<!DOCTYPE html>
<html>
<head>
    <title>Jour 3</title>
    <style>
        body {
            text-align: center;
        }

        .btn{
            border:1px #ccc solid;
            padding: 3px 10px;
            text-decoration: none;
            background-color: #eee;
            color-adjust: #000;
            margin-right: 10px;
        }

    </style>
</head>

<body>

<h1>Les conditions & les comparaisons</h1>

<?php

$a = 10;
$b = 4;
$c = 5;
$d = 10;

echo "<h2>\$a = $a | \$b = $b  | \$c = $c | \$d = $d</h2>";

if ($a > $b) {
    // si c'est vrai (TRUE), on execute cette la première acolade
    echo 'OUI : $a est supérieur à $b <br>';
} else {
    // sinon... on execute cette accolade :
    echo 'NON : c\'est $b qui est supérieur (ou égale) à $a <br>';
}

//exit;

if ($b >= $c) {
    echo 'OUI : $b est supérieur ou égale à $c <br>';
} else {
    echo 'NON : $b est strictement inférieur à $c <br> ';
}

//exit; //pour arreter tout ce qui a après

// exercice :
//  - vérifier que a est inférieur à b
if ($a < $b){
  echo "oui";
} else{
  echo "non";
}
//  - vérifier que a est inférieur ou égale à b
if ($a <= $b){
  echo "oui";
} else{
  echo "non";
}
//  - vérifier que a est égale à d
if ($a == $d){
  echo "oui";
} else{
  echo "non";
}
//  - vérifier que a est différent de c
if ($a != $d){
  echo "oui";
} else{
  echo "non";
}





echo "<h3>Comparaison par valeur VS comparaison par valeur et type</h3>";
$integer = 10;
$string = "10";

if($integer == $string) {
    echo 'OUI : $integer == $string (même valeur)<br>' ;
} else {
    echo 'NON: $integer != $string  (valeur différente)<br>';
}

if($integer === $string) {
    echo 'OUI : $integer est égale à $string  (meme valeur et meme type)<br>';
} else {
    echo 'NON : $integer est différent de $string (en valeur OU en type) <br>';
}

echo "<h2>Combiner plusieurs comparaison</h2>";

echo "<h3>AND (et)</h3>";

if ($a > $b && $a < $c ) {
    echo 'OUI : Les deux conditions sont vraies <br>';
} else {
    echo 'NON : au moins une de conditions est fausse<br>';
}

echo "<h3>OR  (ou)</h3>";

if ($a > $b || $a < $c ) {
    echo 'OUI : Au moins une des deux conditions est vraie <br>';
} else {
    echo 'NON : les deux conditions sont fausse<br>';
}





// if else elseif

$a = 40;

if($a == 5) {
    echo 'REP 1 : $a est egale à 5 <br>';
} elseif( $a > 9) {
    echo 'REP 2 : $a est supérieur à 9 <br>'; // quand une condition est validé on sort du if

} elseif ($a > 10){
    echo 'REP 2bis: $a est supérieur à 10 <br>'; // cette ligne ne sert a rien donc
} else {
    echo 'REP 3 : $a n\'est pas supérieur à 9 et n\'est pas égale à 5 <br>';
}





echo "<h2>Forme contractée (opérateur ternaire)</h2>";
$a = 5;

// forme contractée
echo ($a >= 5) ? '$a est suppérieur ou égale à 5 <br>' : '$a strictement inférieur à 5 <br>';

// forme longue
if ($a>= 5)
  echo '$a est suppérieur ou égale à 5 <br>';
} else if ($a<= 5){
  echo '$a strictement inférieur à 5 <br>';
}






$new = ($a == 5) ? 'OUI' : 'NON';
echo $new;

// autre facon de l'écrire
$($a == 5){
  $new = "OUI";
} else {
  $new = "NON";
}

echo $new;










echo "<h2>Fonctions pour savoir si une variable est définie</h2>";

// empty( $var ) : retrourne FALSE si la $var existe, qu'elle n'est pas vide et que la valeur n'est pas 0, "0", FALSE, NULL
// isset($var) : retourne TRUE si $var est définit même si elle est vide

$var = 0;
// Evalué à vrai car $var est vide
if (empty($var)) { // si ma variable est vide ca ecrit le echo
    echo 'A - $var vaut soit 0, vide, ou pas définie du tout <br/>';
}

// Evalué à vrai car $var est défini
if (isset($var)) { // est ce que ma variable var est defini si oui echo
    echo 'B - $var est définie même si elle est vide <br/>';
}

if (isset($var_2)) {
    echo 'C - Je peux traiter $var_2 car je sais qu\'elle est définit <br/>';
} else {
    echo 'D - Je ne peux pas traiter  $var_2 car cette variable n\'a pas été définit <br/>';
}


// verifier qu'une variable n'est pas vide
$var_3 = "Je ne suis pas vide !";

if( !empty($var_3)) {
    // c'est une négation.
    // transforme le booléen reçu en son inverse
    // c'est à dire que TRUE devient FALSE
    // et FALSE devient TRUE
    // ici on pourrait dire "SI PAS empty()"
    echo '$var_3 n\'est pas vide et ne vaut pas 0 <br>';
} else {
    echo '$var_3 est pas vide ou vaut 0 <br>';
}

// façon de tester : //
if(  TRUE) { // "si pas vrai"
    echo "VRAI <br>";
} else {
    echo "FALSE <br>";
}

echo "<hr>";
var_dump(!empty($var_3));  // var_dump nous aide pour avoir des infos plus précise sur les variables

echo "<hr>";
var_dump(empty ($var_3));

// Tester en affectant des valeurs différente à la variable & en commentant la ligne

echo "<h4>Exercice</h4>";
// EXO 1 : vérifier que ma variable $var_45 est egale à 0.
// SI OUI, écrire : la variable est égale 0
// SI NON : ne rien faire



echo "<h2>Conditions switch</h2>";

$fruit = 'kiwi';

switch ($fruit) {
    case 'kiwi' :
        // les case représentent les différents cas possibles. Ici, on verifie que $fruit vaut "kiwi",
        // Si c'est le cas, on execute le code en dessous jusqu'à l'instruction break;
        echo 'J\'aime les kiwis <br>';
        break;  // obligatoire pour sortir du switch
    case 'banane' :
        echo 'J\'aime les bananes <br>';
        break;
    case 'pomme' :
        echo 'J\'aime les pommes <br>';
        break;
    default :  // cas par défaut : aucun des précédents cas n'a été validé.
        echo 'Je n\'aime pas les kiwis, ni les bananes, ni les pommes <br>';
        break;
}


$fruit = "amande";

if ($fruit == "amande") {
    elseif ($ftuit == 'kiwi') :
    elseif ($fruit =='banane') :
        echo 'J\'aime les fruits exotiques <br>';
    elseif ($fruit == 'poire') {
      // code...
    } elseif($fruit =='pomme') :
    elseif($fruit == 'poire') :
        echo 'J\'aime les fruits classiques <br>';
    elseif ($fruit == 'amande') {
        echo 'J\'aime les graines <br>';
    else :  // cas par défaut : aucun des précédents cas n'a été validé.
        echo 'J\'ai l\'impression que je n\'aime pas trop les fruits<br>';
}

// EXO : réécrire le dernier switch avec des if / else pour avoir le même résultat


?>
<hr>
<a href="index.php" class="btn">Les bases </a>
<a href="ifelse.php" class="btn">Conditions & Comparaisons</a>
<a href="fonctions.php" class="btn">Les fonctions</a>

</body>
</html>
