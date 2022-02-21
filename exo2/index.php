<?php

    include_once("fonctions.php");

    define("VAL_MIN",1);
    define("VAL_MAX",100);

    $larg = rand(VAL_MIN, VAL_MAX);
    $long = rand(VAL_MIN, VAL_MAX);

    echo "La longueur est ". $long."<br>";
    echo "La largeur est ". $larg."<br>";

    //Appel de la fonction
    $peri = perimetre($long, $larg);
    echo "Le perimetre est ". $peri."<br>";

    $surfa = surface($long, $larg);
    echo "La surface est ". $surfa."<br>";

    $d = diagonale($long, $larg);
    echo "La diagonale est ". $d."<br>";