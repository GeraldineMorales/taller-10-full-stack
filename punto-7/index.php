<?php
//Declaracion de datos globales 
$continue = true;

do {
//Declaracion de datos de entrada
$option = 0;
$firstNumber = 0;
$secondtNumber = 0;
$result = 0;

// Proceso
echo "Digite el primer numero a operar: \n";
$firtsNumber = readline();

echo "Digite el segundo numero a operar: \n";
$secondNumber = readline();

echo "Digite la operacion de acuerdo a: \n";
echo "1 - SUMAR \n";
echo "2 - RESTAR \n";
echo "3 - MULTIPLICAR \n";
echo "4 - DIVIDIR \n";

$option = readline();

switch ($option) {
  case 1:
  $result = $firstNumber + $secondtNumber; 
  break;
  case 2:
  $result = $firstNumber - $secondtNumber;
  break;
  case 3:
  $result = $firstNumber * $secondtNumber;
  break;
  case 4:
  $result = $firstNumber / $secondtNumber;
  break;
  default: 
  echo "Digito una opcion incorrecta \n";
}

echo "El resultado de la operacion es: " . $result . "\n";
echo "Desea realizar otra operacion? \n";
echo "1 - SI \n";
echo "0 - NO \n";
$continue =  readline();
} while ($continue);
 ?>