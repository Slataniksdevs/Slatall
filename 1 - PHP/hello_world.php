<?php
//hola mundo estandar x consola
echo "hola,PHP\n"; 

/* 
este 
es 
un
comentario
*/

//Variables

$string = "cadena de texto";
$string = "aqui otra reemplazamos la cadena de texto";
echo $string."\n";
echo gettype($string) ."\n";//con este comando identificamos el tipo de variable//

$string = 6; //al hacer esto reemplazamos el tipo de dato y se vuelve entero
echo $string . "\n";
echo gettype($string) ."\n";// aqui podemos validar que el valor es integer y no string

$integer = 7; //Variable de tipo entero
$integer = $integer + 4; //suma de variable más integer
echo $integer . "\n";
echo $integer - 1  . "\n";
echo $integer . "\n";
echo gettype($integer) ."\n";


$double = 6.5;
echo gettype($double) ."\n";
echo $integer + $double . "\n";

$bool = true;
echo $bool ."\n";
$bool = false;
echo $bool = 0 . "\n";
echo gettype($bool) ."\n";


echo "el valor de mi integer es $integer u el de mi boolean es $bool.\n";

//Constantes

const MY_CONSTANT = "valor de la constante";
echo $MY_CONSTANT . "\n";