<?php
/*
Ecrire un script qui génère un nombre positif n et affiche la table de multiplication de n, de 1 jusqu'à 10.
*/
define("MIN",-10);
define("MAX",10);
do{
    $n=rand(MIN,MAX);
}while($n<=0);

$i=1;
echo('<table style="text-align: left; border-collapse: collapse; margin: 30px;">');
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
?>