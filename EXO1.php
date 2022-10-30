<?php
/*
Ecrire un sript qui génère  3 nombres entre -10 et 10 puis range ces nombres dans l'ordre croissant
*/
$x=rand(-10,10);
$y=rand(-10,10);
$z=rand(-10,10);
$inter;

$mini=$x;
$maxi=$x;

if($y<$mini){
    $mini=$y;
}
if($y>$maxi){
    $maxi=$y;
}

if($z<$mini){
    $mini=$z;
}
if($z>$maxi){
    $maxi=$z;
}

if(($x<=$y && $y<=$z) || ($z<=$y && $y<=$x)){
    $inter=$y;
}
if(($y<=$z && $z<=$x) || ($x<=$z && $z<=$y)){
    $inter=$z;
}if(($z<=$x && $x<=$y) || ($y<=$x && $x<=$z)){
    $inter=$x;
}

echo("x = $x");echo("<br>");
echo("y = $y");echo("<br>");
echo("z = $z");echo("<br>");

echo("Ordre croissant : $mini , $inter , $maxi");echo("<br>");

?>