<?php
// DECLARACION DE DATOS DE ENTRADA
$name = "";
$age = 0;

// PROCESO
echo "Ingrese su nombre por favor: \n";
$name = readline();

echo "Ingrese su edad a por favor: \n";
$age = readline();

// OUPUT
if ($age >= 18) {
echo "Hola" . $name . "Usted es mayor de edad"; 
} else {
echo "Hola" . $name . "Usted es menor de edad";
}
?>

