
<?php
    function estVide($nbre):bool{
        return empty($nbre); 
    }

    function estNombre($nbre):bool{
        return is_numeric($nbre); 
    }

    
   function validNombre($nbre,string $key,array &$arrError ):void{
        if(estVide($nbre)){
            $arrError[$key]="Veullez saisir une valeur";
        }else{
            if(!estNombre($nbre)){
                $arrError[$key]="Veullez saisir un nombre";
            }
        }

    } 
    //fonctions multiplication
    
    function multipli($n){
        for($i=1; $i <= 10; $i++){
            echo "$n * $i". " = ". $n*$i."<br>";
        }
    }