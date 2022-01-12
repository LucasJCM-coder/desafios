<?php

function VerificaNaoRepetidos($array) {
    $contador = array_count_values($array);
    $arrayFiltrado = array_filter($array, function ($valor) use ($contador) {
        return $contador[$valor] == 1;
    });
    return array_values($arrayFiltrado);
}

function GerarArrayAleatorio() {
    return array_map(function () {
        return rand(1, 10);
    }, array_fill(0, 20, null));
}


function VerificaNumerosQueNaoSeRepetem() {
    $array = GerarArrayAleatorio();
    return VerificaNaoRepetidos($array);

}



