// onclick="document.getElementById('clignotant').style.visibility='visible';"
//
function clignotement(){
  if (document.getElementById("clignotant").style.display=="block")
  document.getElementById("clignotant").style.display="none";
  else
  document.getElementById("clignotant").style.display="block";
}
// mise en place de l appel régulier de la fonction toutes les 0.5 secondes
setInterval("clignotement()", 500);
