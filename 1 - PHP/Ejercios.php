<?php 
/*Ejercicio 1: Calculadora de Factorial
Escribe una función en PHP llamada calcularFactorial 
que reciba un número entero positivo como argumento y 
devuelva su factorial. El factorial de un número n se 
define como el producto de todos los números enteros 
positivos desde 1 hasta n. */

function calcularFactorial($n) {
    if ($n < 0) {
        return "Error: No se puede calcular el factorial de un número negativo.";
    } elseif ($n == 0) { /*si es igual a 0 devuelve 1*/
        return 1;
    } else {
        $factorial = 1;
        for ($i = 1; $i <= $n; $i++){/* inicia index como 1 le dice que debe ser mayor 
                                        que la variable $n y le da autoincremental al $i*/ 
            $factorial *= $i;
        }
        return $factorial;
    }
}