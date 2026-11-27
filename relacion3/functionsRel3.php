<?php
/**
 * Intercambia dos valores y devuelve ambos en un array.
 * En PHP los argumentos escalares se reciben por valor; se devuelven los cambios.
 */
function swap($n1, $n2): array {
    $aux = $n1;
    $n1 = $n2;
    $n2 = $aux;
    return [$n1, $n2];
}

/** Invierte el orden de los elementos de un array usando swap(). */
function invertirArray(array $datos): array {
    $inicio = 0;
    $fin = count($datos) - 1;
    while ($inicio < $fin) {
        [$datos[$inicio], $datos[$fin]] = swap($datos[$inicio], $datos[$fin]);
        $inicio++;
        $fin--;
    }
    return $datos;
}
?>
