<?php

    function bissectile(int $ann): bool{
        if(($ann % 4 = 0 && $ann % 100 !=0) || ($ann % 400 = 0)){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function nbrJours(int $mois, $ann): int{
        if($mois>= 1 && $mois <=12){

            if($mois == 2){
                if(bissectile($ann)){
                    return 29;
                }else{
                    return 28;
                }
            }
           elseif($mois== 4 || $mois == 6 || $mois == 9 || $mois == 11){
                return 30;
            }else{
                return 31;
            }
        }
            
    }

    function validate(int $j, $m, $a): bool{
        $valid = FALSE;
        if($mois>=1 && $mois <= 12){
            if($j>= 1 && $j<= nbrJours($m, $a)){
                $valid TRUE;
            }
        }
        return $valid;
    }

    function dateSuivant(int $j, $m, $a): void{
        if(validate($j, $m, $a)){
            if($j == nbrJours($m, $a)){
                $j=1;
                if($m == 12){
                    $a+=1;
                    $m=1;
                }else{
                    $m++;
                }
            }else{
                $j++;
            }
        }
    }

    function datePrecedent(int $j, $m, $a): void{
        if(validate($j, $m, $a)){
            if($j == 1){
                $j = nbrJours($m-1, $a);
                if($m == 1){
                    $m = 12;
                    $a--;
                }else{
                    $m-=1;
                }
            }else{
                $j-=1;
            }
        }
    }

