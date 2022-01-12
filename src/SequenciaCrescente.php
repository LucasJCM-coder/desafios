<?php

function SequenciaCrescente($array) {
    $tamanhoArray = count($array);

    if($tamanhoArray <= 1) {
        return "TRUE";
    }

    $contador = 0;

    $indexToRemove = -1;

    for ($i=1; $i < $tamanhoArray; $i++) { 
        if ($array[$i - 1] >= $array[$i]){
            $contador += 1;
  
            $indexToRemove = $i;    
        }
    }

    if($contador > 1) {
        return "FALSE";
    }

    if ($indexToRemove == $tamanhoArray - 1 || $indexToRemove == 1 || 
        $array[$indexToRemove - 1] < $array[$indexToRemove + 1]) {
            return "TRUE";
        }
        
        if ($array[$indexToRemove - 2] < $array[$indexToRemove]) {
            return "TRUE";
        }
        
    return "FALSE";
}
