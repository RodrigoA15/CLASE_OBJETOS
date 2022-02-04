<?php

class Vehiculo {

    public $placa;
    public $marca;
    public $modelo;
    public $kilometraje;
    public $velocidad;
    public $tiempo;
    



    public function __construct($vrplaca, $vrmarca, $vrmodelo, $vrkilometraje, $vrvelocidad, $vrtiempo)
    {
        $this->placa = $vrplaca;
        $this->marca = $vrmarca;
        $this->modelo = $vrmodelo;
        $this->kilometraje = $vrkilometraje;
        $this->fecha_registro = date('Y-m-d');
        $this->velocidad= $vrvelocidad;
        $this->tiempo= $vrtiempo;

    }
    public function getVehiculo(){
        $arrayVehiculo = Array(
            'placa: ' => $this->placa,
            'marca: ' => $this->marca,
            'modelo: ' => $this->modelo,
            'kilometraje: ' => $this->kilometraje,
            'fecha_registro'=>$this->fecha_registro
        );
        return $arrayVehiculo;
    }

public function distancia(){
    $vrdistancia = $this->velocidad*$this->tiempo;
    return$vrdistancia;
}



}
?>