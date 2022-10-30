<?php
/*
Ecrire un script qui affiche les valeurs entre 100 et 1. Sachant que chaque ligne contient 5 nombres
*/

$cpt=0;
for ($i=100; $i >0 ; $i--){
    echo("$i ");
    $cpt++;
    if($cpt==5){
        echo("<br>");
        $cpt =0;
    }
}
?>