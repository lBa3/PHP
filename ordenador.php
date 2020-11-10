<?php

abstract class Ordenador {
     public $encedido ;
    
    
    abstract public function encender ();
    
    public function apagar (){
        $this->encedido = false;
    }
    
}


class PC extends Ordenador{
    public $SO ;
   
    public function arrancarSO() {
        $this->SO = true;
    }
    
    public function encender() {
        $this->encedido= true;
        
    }
}

$PC = new PC();
var_dump($PC);
$PC->arrancarSO();
var_dump($PC);
$PC->apagar();
var_dump($PC);