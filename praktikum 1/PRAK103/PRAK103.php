<?php
$celcius = 37.841;
$fahrenheit = round(9*$celcius/5+32, 4);
$reamur = round(4*$celcius/5, 4);
$kelvin = round($celcius+273, 4);

echo "Fahrenheit (F) = $fahrenheit<br>";
echo "Reamur (R) = $reamur<br>";
echo "Kelvin (K) = $kelvin<br>";
?>