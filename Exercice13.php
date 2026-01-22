<?php
    //Comparaison
    function maxTrois($a, $b, $c){
        if($a > $b && $a > $c){
            return a;
        } else {
            if($b > $a && $b > $c){
                return $b;
            } else {
            return $c;
            }
        }
    }
    echo "Le plus grand nombre entre ces trois est : ". maxTrois(2, 7, 18);
?>