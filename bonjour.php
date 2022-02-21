<?php
    include_once('fonctions.php');
    $name = hello('Kaloumbi');
    echo "Bonjour $name!!!";
    // appel de fonction somme
    $x= 5; 
    $y= 20;
    $ad= som($x, $y);
    echo "La somme est: $ad <br>";

    //appel de la fonction volumeCone
    $c= 25;
    $d= 28;

    $vc= volumeCone($c, $d);
    echo "Le volume d'un cône de hauteur ".$c." et de rayon ".$d." est: $vc";
?>
