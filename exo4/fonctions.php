<?php

    function permutation(int $n1, $n2): void{
        $temp= $n1;
        $n1= $n2;
        $n2= $temp;

        echo  "La permutation est $n1 $n2" ;
    }