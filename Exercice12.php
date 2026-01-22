<?php
    //Fonction
    function valeurAbsolue($n){
        if($n < 0){
            return $n * (-1);
        } else {
            return $n;
        }
    }
    echo "La valeur absolue : ". valeurAbsolue(5);
?>