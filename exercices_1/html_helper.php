<?php

// nous allons écrire une série de fonctions qui vont nous permettre de générer du code HTML

// 1 -
// la fonction html_a( $texte , $url,  $class, $new_window)
// les paramètres url_lien et $texteest sont obligatoires
// quand $new_window est à 1, notre lien ouvrira une nouvelle fenêtre
//
function html_a($texte, $url, $class = '', $new_window = FALSE){

  if($new_window == TRUE){ // on pourrait simplement indiquer if($new_window) => par défaut TRUE
    $new_window = "_blank";
  } else {
    $new_window = "";
  }
  $resultat = "<a href='$url' class='$class' target='$new_window'> $texte </a>" . PHP_EOL;
  return $resultat;
}
// ex :
 echo html_a("Les décodeuses", "https://www.lesdecodeuses.fr", "lien_rouge", TRUE);
// écrire
// <a href='https://www.lesdecodeuses.fr' class='lien_rouge' target='_blank'>Les décodeuses</a>




// 2 -
// la fonction html_tag($nomDuTag, $contenu, $class);
// retourne le tag HTML $nomDuTag bien construit :
// ce tag aura comme contenu $contenu et pourra avoir la class $class (mais ce n'est pas obligatoire)
//
// ex :
// echo html_tag("div", "Vivement lundi", "texte_rouge");
//
// écrit :
// <div class="texte_rouge">Vivement lundi</div>

function html_tag($nomDuTag, $contenu, $class = ''){
  return "<$nomDuTag class='$class'>$contenu<$nomDuTag>" . PHP_EOL;
}

echo html_tag("div", "Vivement lundi", "texte_rouge");
echo html_tag("div", "Vivement ludni");

echo "<hr>" . PHP_EOL;


//  3 -
// une fonction html_ul($tableau)
// qui prends un tableau en paramètre et le ressort sous forme de liste <ul><li>
//
// ex :
// echo html_ul(["kiwi", "banane", "pomme"]);
// écrit :
// <ul>
//    <li>kiwi</li>
//    <li>banace</li>
//    <li>pomme</li>
// <ul>

           function html_ul($tableau){
             $chaine_puces = ""; // on créer a vide
             $chaine_puces .= "<ul>"; // on concaténe avec la balise ul

             foreach ($tableau as $valeur){ // tableau que je passe en parametre et chaque case de ce tableau je continue a créer une chaine de caractere
                $chaine_puces .="<li> $valeur </li>" . PHP_EOL;  // je concacténe les li
             }
             $chaine_puces .= "</ul>"; //la on ferme la balise ul
             return $chaine_puces;
           }

           echo html_ul(["kiwi", "banane", "pomme"]);


          //     $tableau = '<ul>';
          //     while ($donnees = ["kiwi"], ["banane"], ["pomme"]){
          //       $tableau .= '<li> "kiwi, banane, pomme "</li>';
          //   }
          //   $tableau .='</ul>';
          // }
          //
          // echo ($tableau);
