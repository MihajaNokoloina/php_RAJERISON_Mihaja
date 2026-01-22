<?php
    //initialisation
    $a = 5;
    //Création du fonction
    function estPair($n) {
        if($n % 2 == 0){
            return true;
        } else {
            return false;
            }
    }
    if(estPair($a)==true){
        echo "Pair";
    } else {
        echo "Impair";
    }