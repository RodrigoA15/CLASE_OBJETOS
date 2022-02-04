<?php
require_once("01_CLASEAUTO.PHP");

$objetovehiculo = new Vehiculo ("RPO-123","KIA",2022, 16544,70,30);
$objetovehiculo->getVehiculo();


print_r('<prev>');
print_r($objetovehiculo);
print_r('<prev>');

echo "<br>";
echo $objetovehiculo->$marca;
echo "<br>";

echo 'la distancia recorrida es: '. $objetovehiculo  ->distancia();

