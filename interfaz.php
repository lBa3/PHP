<?php

interface  ordenador {
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar ();
    public function detectaUSB ();
    
}

class imac implements ordenador{
    public $modelo;
    
    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo): void {
        $this->modelo = $modelo;
    } 
    
    public function encender() {
        return "Encender";
    }
    public function apagar() {
        return "Encender";;
    }

    public function reiniciar() {
        return "Encender";;
    }
    
    public function desfragmentar() {
        return "Encender";;
    }
    
    public function detectaUSB() {
        return "Encender";;
    }
    
}

$makintosh = new imac();
var_dump($makintosh);
$makintosh->setModelo("mac de batres 2020");
echo $makintosh->getModelo();

