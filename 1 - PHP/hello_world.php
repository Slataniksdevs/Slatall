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
//String - Variable
$string = "cadena de texto";
$string = "aqui otra reemplazamos la cadena de texto";
echo $string."\n";
echo gettype($string) ."\n";//con este comando identificamos el tipo de variable//

/*$string = 6;*/ //al hacer esto reemplazamos el tipo de dato y se vuelve entero
echo $string . "\n";
echo gettype($string) ."\n";// aqui podemos validar que el valor es integer y no string


//Integer Variable
$integer = 7; //Variable de tipo entero
$integer = $integer + 4; //suma de variable más integer
echo $integer . "\n";
echo $integer - 1  . "\n";
echo $integer . "\n";
echo gettype($integer) ."\n";

//double Variable
$double = 6.5;
echo gettype($double) ."\n";
echo $integer + $double . "\n";

//boolean Variable
$bool = true;
echo $bool ."\n";
$bool = false;
echo $bool == 0 . "\n";
echo gettype($bool) ."\n";

echo "el valor de mi integer es $integer u el de mi boolean es $bool.\n";;;;;;

//constantes

const MY_CONSTANT = "valor de la constante";
echo MY_CONSTANT . "\n";

//listas

$array =[$string, $integer, $double];
echo gettype($array) ."\n";
echo $array[0] . "\n";
echo $array[1] . "\n";
echo $array[2] . "\n";
echo $array[3] . "\n";
array_push($array, $bool);
print_r($array);

$diccionario =array("string" => $string,"int" => $integer, "bool" => $bool);
echo gettype($diccionario) ."\n";
print_r($diccionario);
echo $diccionario["int"] . "\n";

array_push($array, "elemento nuevo");
array_push($array, "ultimo elemento");
print_r($array);
print_r (array_unique($array));

//for
for ($index == 0; $index <= 10; $index ++){
echo $index . "\n";
}

foreach ($array as $item){
    echo $item  . "\n";
}

//while
/*
$index = 0;
while($a <= sizeof($array)){
    echo $array[$index] . "\n";
} */
// bucle infinito

$index = 0;
while($index <= sizeof($array) - 1) {/*para que el array empieze en 0 debemos restarle un número*/
    echo $array[$index] . "\n";
    $index++;
}// para evitar el bucle infito debemos cumplir con la condición del while

//if else
$integer = 13;
$string = "Hola";

if ($integer = 11 && $string = "Hola"){
    echo "el valor es 11\n";
} elseif($int = 12 || $string = "Hola"){
    echo "el valor no es 12\n";
} else {
    echo "el valor no es 11\n";
}


//Funciones
// se utiliza para utilizar determinados metodos de codigo para funciones especificas
function print_number($numero) {
echo $numero ."\n";

}


print_number(10);
print_number(11);
print_number(12);



    class Miclase{
        public $nombre;
        public $edad;

        function __construct($nombre, $edad) {
        $this-> nombre = $nombre;
        $this-> edad = $edad;
        }
    }

$miclase = new Miclase("zatanus", 27);
print_r($miclase);
echo $miclase->nombre . "\n";
$miclase->name = "SlatanDevs";
echo $miclase->nombre . "\n";
echo gettype($miclase) . "\n";



