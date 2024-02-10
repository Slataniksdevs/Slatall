<?php 
/*Ejercicio 1: Calculadora de Factorial
Escribe una función en PHP llamada calcularFactorial 
que reciba un número entero positivo como argumento y 
devuelva su factorial. 
quiere decir que hay que multiplicar todos los números enteros positivos que hay entre ese número y el 1.
*/

function calcularFactorial($n) {
    if ($n < 0) {
        return "Error: No se puede calcular el factorial de un número negativo.";
    } elseif ($n == 0) { /*si es igual a 0 devuelve 1*/
        return 1;
    } else {
        $factorial = 1;
        for ($i = 1; $i <= $n; $i++){/* inicia index como 1 le dice que debe ser mayor 
                                        que la variable $n y le da autoincremental al $i*/ 

            $factorial *= $i; /*estás multiplicando el valor de la variable a la que se aplica el operador por el 
                                valor especificado y luego asignas el resultado de 
                                la multiplicación de nuevo a la variable.*/
        }
        return $factorial;
    }
}


// Ejemplo de uso// Juegue! este es el factorial de 12 :479001600
echo calcularFactorial(12); 


/* Ejercicio 2: Validación de Palíndromo

Escribe una función en PHP llamada esPalindromo que reciba una cadena como 
argumento y devuelva true si la cadena es un palíndromo y false en caso contrario.  */

function esPalindromo($cadena) {
    $cadena = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $cadena)); // convertir a minusculas para evitar fallos y sacar caracteres especiales, validaciones
    return $cadena == strrev($cadena); //strrev palabra reservada que devuelve la cadena invertida
}

// Ejemplo de uso juegue
echo esPalindromo("in girum imus nocte et consumimur igni"); // Debería imprimir true(recordar que true en php es 1)





//Ejercicio 3 Rectangulo
/*Crea una clase en PHP llamada Rectangulo que tenga propiedades para la longitud y el ancho.
Implementa métodos para calcular el área y el perímetro del rectángulo.*/
class Rectangulo {
    private $longitud;
    private $ancho;
    
    public function __construct($longitud, $ancho) {
        $this->longitud = $longitud;
        $this->ancho = $ancho;
    }
    
    public function calcularArea() {
        return $this->longitud * $this->ancho;
    }
    
    public function calcularPerimetro() {
        return 2 * ($this->longitud + $this->ancho);
    }
}

// Ejemplo de uso
$rectangulo = new Rectangulo(5, 3);
echo $rectangulo->calcularArea(); // Debería imprimir 15
echo $rectangulo->calcularPerimetro(); // Debería imprimir 16