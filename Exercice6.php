<?php
function factorielle($n){
    //Initialisation
    $Nbr = 1;
    for($i = 1; $i <= $n; $i++){
        $Nbr *= $i;
    return $Nbr;
    }
}
echo factorielle(2);
?>