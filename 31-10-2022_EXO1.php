<?php
/*
Ecrire un script qui génère un nombre N positif et qui affishe un triangle d'étoile.
Ex: Si N=3, on aura :
*
* *
* * * 

*/
define("MIN",-10);
define("MAX",10);
do{
    $n=rand(MIN,MAX);
}while($n<=0);

$ch="* ";
$i=1;
while($i<=$n){
    $j=0;
    while($j<$i){
        echo("$ch");
        $j++;
    }
    echo("<br>");
    $i++;
}
?>