<?php
//fonction
function sommeN($n){
    $somme = 0; 
    for($i = 1; $i <= $n; $i++){
        $somme += $i;
        }
         return $somme;
}
echo sommeN(2);
?>
