<?php
/*
Ecrire un script qui génère une date puis indique si la date est valide ou pas.
Une date est formée du jour(entier), d'un mois(entier) et d'une année(entier) 
*/

$j=rand(1,31);
$m=rand(1,12);
$a=rand(1,3000);

$ok=false;
if(($m==1 || $m==3 || $m==5 || $m==7 || $m==8 || $m==10 || $m==12) && (1<=$j && $j<=31)){
    $ok=true;
}elseif(($m==4 || $m==6 || $m==9|| $m==11) && (1<=$j && $j<=30)){
    $ok=true;
}else{
    if((($a%4==0 && $a%100!=0) || $a%400==0) && (1<=$j && $j<=29)){
        $ok=true;
    }elseif((1<=$j && $j<=28)){
        $ok=true;
    }
}

echo("Date = $j / $m / $a");echo("<br>");

if($ok==true){
    echo("La date est valide");echo("<br>");
}else{
    echo("La date n'est pas valide");echo("<br>");
}
?>