
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
    //fonctions input
    
    function input($n){
        for($i=1; $i <= $n; $i++){
            echo "<input>"."<br>";
        }
    }
    