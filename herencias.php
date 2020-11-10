<?php
// herencia , la posiblidad de compartir atributos y metodos entre clases
echo "<h1>Class Persona + Class informatico  + Herencia + Get + SET</h1>";

class Persona {
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos): void {
        $this->apellidos = $apellidos;
    }

    public function setAltura($altura): void {
        $this->altura = $altura;
    }

    public function setEdad($edad): void {
        $this->edad = $edad;
    }
    
    public function hablar (){
        return "estoy hablando";
    }
    
    public function caminar() {
        return "estoy caminando";
    }
}

//                heredo de PErsona
class informatico extends Persona{
    public $lenguajes;
    public $anosexpeProgra;
    
    public function __construct() {
        $this->lenguajes = "html, css, y JS";
        $this->anosexpeProgra = 10;
    }


    public function sabeLenguajes($leguajes){
        $this->lenguajes = $leguajes;
        return $this->lenguajes;
    }
    
    public function programar() {
        return "Soy programador";
    }
    public function repararOrdenador() {
        return "reparo compus";
    }
    public  function ofimatica (){
        return "escribo en word";
    }
}

class tecnicoRed extends informatico{
    public $audiRedes;
    public $anosexpeRedes;

    public function __construct() {
        parent::__construct(); // hereda los valores del padre informatico
        $this->audiRedes = "Experto";
        $this->anosexpeRedes = 5;
    }
    public function auditoria(){
        return "Estoy auditando una red";
    }
}