<?php

function SeculoAno($ano) {
    if($ano < 0) {
        return 0;
    }

    $resultado = ceil($ano/100);
    return intval($resultado);
}
