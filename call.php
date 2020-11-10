<?php

class Persona {
    private $nombre;
    private $edad;
    private $ciudad;
    
    public function __construct($nombre, $edad, $ciudad) {
        $this->nombre = $nombre;
        $this->edad   = $edad;
        $this->ciudad = $ciudad;
    }
    
    public function __call($name, $arguments) {
        $prefijo_metodo = substr($name, 0,10);
        return "Este metodo no existe ".$prefijo_metodo;
        
    }
    
}

$persona = new Persona("paco", 66, "CDMx");
echo "<p>:".$persona->getNombre()."</p>"; // No existe este metodo
echo "<p>".$persona->getEdad()."</p>"; // No existe este metodo
echo "<p>".$persona->getCiudad()."</p>"; // No existe este metodo

