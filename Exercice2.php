<?php 
    //initialisation
    $a = 10;
    $b = 7;
    //Soustraction
    function soustraction($a, $b) {
        return $a - $b;
    }
    //Multiplication
    function multiplication($a, $b) {
        return $a * $b;
    }
    //Division
    function division($a, $b) {
        if($b == 0) {
            echo "Division impossible";
        }
        return $a / $b;
    }
    //soustraction
    echo "Soustraction : ". soustraction($a, $b);
    //multiplication
    echo "Multiplication : ". multiplication($a, $b);
    //division
    echo "Division : ". division($a, $b);
?>