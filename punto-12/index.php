<?php
//Datos de entrada
$number = 0;

//proceso
echo "Digite el numero a multiplicar: ";
$number = readline();

for ($i = 0; $i <= 30; $i++) {
  $result = $number * $i;
  echo $number . " x " . $i . " = " . $result . "\n";
}
?>