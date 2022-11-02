<?php
/*
Ecrire un script qui générer un nombre positif N et N<=12 puis affiche toutes les tables
de multiplication entre 1 et N.
NB: L'affichage se fait par pas de 3.
*/
define("MIN",-30);
define("MAX",30);
do{
    $n=rand(MIN,MAX);
}while($n<=0 || $n>12);

function affiche_table(int $n):void{
    $i=1;
    echo('<table style="display: inline; text-align: left; border-collapse: collapse; margin: 30px;">');
    while($i<=10){
        $p=$n*$i;
        echo('
        <tr>
            <td style="width: 60px; border: 1px solid;">'.$n." x ".$i.'</td>
            <td style="width: 60px; border: 1px solid;">'."= ".$p.'</td>
        </tr>
        ');
        if($i===10){
            echo("</table>");
        }
        $i++;
    }
}

$j=1;
while($j<=$n){
    affiche_table($j);
    if($j%3===0){
        echo("<br> <br>");
    }
    $j++;
}
?>