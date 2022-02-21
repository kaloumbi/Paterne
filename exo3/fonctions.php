<?php

    function somme(int $n1, $n2): int{
        return ($n1 + $n2);
    }

    function expo(int $n1, int $n2): int{
        return (pow($n1, 2)*pow($n2, 2));
    }

    function difference(int $n1, $n2): int{
        return $n1 - $n2;
    }

    function produit(int $n1, $n2): int{
        return ($n1*$n2);
    }

    function modulo(int $n1, $n2): int{
        return $n1 % $n2;
    }

    function division(float $n1, $n2): float{
        return $n1 / $n2;
    }

    function carre(int $n1, $n2): float{
        return pow(($n1 * $n2),2);
    }