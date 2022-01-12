<?php 


function ValidaPrimo($numero) {
    
    if($numero<2) {
        return false;
    }

    $primo = true;
              
    for ($i = 2; $i <= $numero - 1; $i++) {
        if ($numero % $i == 0) {
            $primo = false;
            break;
        }
    }
    return $primo;

}

function Primos($inicial, $final) {
    $array = [];
    for ($i=$inicial+1; $i < $final; $i++) { 
        if(ValidaPrimo($i)){
            array_push($array, $i);
        }
    }
    return $array;
}

