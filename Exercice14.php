<?php
    //Verification
    function signeNombre($n){
        if($n== 0){
            return "Null";
        } else if($n > 0){
            return "Positif";
        } else{
            return "Negatif";
        }
    }
    echo signeNombre(5);
?>