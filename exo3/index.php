<?php

    include("fonctions.php");

    define("VAL_MIN",1);
    define("VAL_MAX",100);

    $nb1= rand(VAL_MIN, VAL_MAX);
    $nb2= rand(VAL_MIN, VAL_MAX);

    echo "Le premier nombre est ". $nb1."<br>";
    echo "Le deuxième nombre est :". $nb2."<br>";

    //appel fonctions
    $som= somme($nb1, $nb2);
    echo "La somme est ". $som."<br>";

    $exp= expo($nb1, $nb2);
    echo "L'exponentiel est: ". $exp."<br>";

    $diff= difference($nb1, $nb2);
    echo "La différence est: ". $diff."<br>";

    $p= produit($nb1, $nb2);
    echo "Le produit est: ". $diff."<br>";

    $mod= modulo($nb1, $nb2);
    echo "Le reste de la division est: ". $mod."<br>";

    $div= division($nb1, $nb2);
    echo "La divison est: ". $div."<br>";

    $car= carre($nb1, $nb1);
    echo "Le carre des deux nombres est: ". $car."<br>";