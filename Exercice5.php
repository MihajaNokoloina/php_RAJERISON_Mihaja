<?php
    //initialisation
    $a=12;
    $b=8;
    //fonction
    function maxDeux($a, $b) {
        if ($a < $b) {
            echo "Le plus grand est : $b";
        } else {
            echo "Le plus grand est : $a";
        }
    }
    maxDeux($a,$b);