<?php
echo "<h1>Programacion POO en php </h1>";


// definicion de clase

//molde o plantilla de tipo coche con caracteristicas parecidas

class Coche {
    //atributos o propiedades (variables)
    
    //valores por defecto
    public $color = "rojo";
    public $marca = "KIA";
    public $modelo = "Rio"; 
    public $velocidad = 200;
    public $caballaje = 500;
    public $plazas = 4;
    
    
    //metodos = acciones (funciones)
    public function getColor (){
        return $this->color; 
    }
    
    public function setColor ($color){
        $this->color = $color;
    }
    
    public function getMarca (){
        return $this->marca;
    }
    
    public function setMarca ($marca){
         $this->marca = $marca;
    }
    
    public function acelerar(){
        $this->velocidad++;
    }
    
    public function frenar(){
        $this->velocidad--;
    }
    
    public function getVelocidad() {
        return $this->velocidad;
    }
}

///------Usar clase

//crear objeto o instanciar clase
$coche = new Coche();
//llamado de metodos
echo "<p>imprime el velocidad del coche <b>".$coche->getVelocidad()."</b></p>";
echo "<p>imprime el color del coche <b>".$coche->getColor()."</b></p>";
echo "<p>Cambiar el color del carro</p>";
$coche->setColor("Verde");
echo "<p>Cambio  el color del coche <b>".$coche->getColor()."</b></p>";
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();
echo "<p>imprime el velocidad del coche <b>".$coche->getVelocidad()."</b></p>";

//--------------------------------------------------------------------------------------

$coche2 = new Coche();
$coche2->setColor("Amarillo");
$coche2->setMarca("FORD");

var_dump($coche);
var_dump($coche2);

