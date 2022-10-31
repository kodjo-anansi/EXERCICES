<?php
/*
Ecrire un script qui génère N notes puis détermine et affiche:
- la moyenne des notes
- la note la plus grande 
- la note la plus petite
NB: N est aussi générer et est positif
*/

$n=rand(1,27);
$moy;

echo("N = $n");echo("<br>");echo("<br>");
echo("Notes : ");echo("<br>");

$note=rand(0,20);
$mini=$note;
$maxi=$note;
$som=$note;
echo("$note");echo("<br>");

for ($i=1; $i<$n ; $i++){
    $note=rand(0,20);
    echo("$note");echo("<br>");

    $som+=$note;
    
    if($note < $mini){
        $mini=$note;
    }
    if($note > $maxi){
        $maxi=$note;
    }
}

$moy=$som/$n;

echo("<br>");
echo("La moyenne des notes est : $moy");echo("<br>");
echo("La note la plus grande est : $maxi");echo("<br>");
echo("La note la plus petite est : $mini");echo("<br>");
?>