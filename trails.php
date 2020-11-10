<?php

trait Utilidades{
  public function mostrarNombre() {
      echo '<h1>El nombre es:'.$this->nombre.'</h1>';
   }
}


class coche {
    public $nombre;
    public $marca;
    
    use Utilidades;
    
}

class persona{
    public $nombre;
    public $apellido;
    
    use Utilidades;
}

class video{
    public $nombre;
    public $anio;
    
    use Utilidades;
}


$coche= new coche();
$coche->nombre = "KIA" ;
echo $coche->mostrarNombre();

$persona = new persona();
$persona->nombre = "Rogelio" ;
echo $persona->mostrarNombre();

$video = new video();
$video->nombre = "KillZONe" ;
echo $video->mostrarNombre();



