<?php
$numberArray = array();
for($i = 0; $i <5; $i++) {
  echo "Escriba un numero para sumar: ";
  $numberArray[] = readline();

}
foreach ($numberArray as $number) {
  $sum = $sum + $number;
}

echo "La suma total del arreglo es: " . $sum;
 ?>