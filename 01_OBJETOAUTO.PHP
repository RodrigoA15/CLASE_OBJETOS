<?php
require_once("01_CLASEAUTO.PHP");

$objetoVehiculo = new Vehiculo ("RPO-123","KIA",2022, 16544,70,30);
$objetoVehiculo->getVehiculo();


print_r('<prev>');
print_r($objetoVehiculo);
print_r('<prev>');

echo "<br>";
echo $objetoVehiculo->getmarca();
echo "<br>";
echo $objetoVehiculo->setmarca("FORD");
echo "<br>";
echo $objetoVehiculo->getmarca();
echo $objetoVehiculo->modelo;
echo "<br>";


echo 'la distancia recorrida es: '. $objetoVehiculo->getdistancia();

?>