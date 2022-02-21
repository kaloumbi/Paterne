<?php
    include_once("fonctions.php");

    define("VAL_MIN",1);
    define("VAL_MAX",100);

    $ab= rand(VAL_MIN, VAL_MAX);
    $ord= rand(VAL_MIN, VAL_MAX);

    echo "L'abscisse est: ". $ab."<br>";
    echo "L'ordonnée est: ". $ord."<br>";
    
    //appel
    $dist= distance($ab, $ord);
    echo "La distance entre deux points A et B de distances ". $ab. " et ". $ord. " est: ". $dist;