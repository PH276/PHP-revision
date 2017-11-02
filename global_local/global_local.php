<?php
function jourSemaine(){
    $jour = 'lundi'; // var locale
    return $jour;
}

echo $jour; //==> erreur
$jour = jourSemaine();
echo $jour;

// ----------------------------
$pays = "France";
function affichePays(){
    global $pays;
    echo $pays;
}

affichePays();
