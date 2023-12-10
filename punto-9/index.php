<?php
echo "Interfaz de multiplicación";
// Creación de datos (Inputs)
$number = 0;
$i = 0;

// Process
echo "Digite el numero a multiplicar: \n ";
$number = readline(); 

while($i <= 30) {
  $result = $number * $i;
  echo $number . " x " . $i . " = " . $result . "\n";
  $i = $i +1;
}
// output

?>