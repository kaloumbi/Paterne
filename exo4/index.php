<?php

    include("fonctions.php");
    
    define("VAL_MIN", 1);
    define("VAL_MAX", 100);

    $nbr1= rand(VAL_MIN, VAL_MAX);
    $nbr2= rand(VAL_MIN, VAL_MAX);

    echo "le premier nombre est: $nbr1"."<br>";
    echo "le deuxieme nombre est: $nbr2"."<br>";

    permutation($nbr1, $nbr2);
