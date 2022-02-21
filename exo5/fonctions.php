<?php

    function distance(int $p1, $p2): int{
        $d = sqrt(pow(($p2-$p1),2) + pow(($p2-$p1),2));
        return $d;
    }