<?php
echo "<h1>Class Coche + constructor + get + set</h1>";

class Coche {
    //parametros de la clase Coche
    public    $dueno;
    public    $color;    // acceder de cualquir lugar
    protected $marca;    // solo desde la classe que los define o lo hereden
    private   $modelo;   // solo desde esta classe
    public    $velocidad;
    public    $caballaje;
    public    $plazas;
    
    //constructor de la clase Coche
    public function __construct($dueno, $color, $marca, $modelo, $velocidad, $caballaje, $plazas) {
        $this->dueno     = $dueno;
        $this->color     = $color;
        $this->marca     = $marca;
        $this->modelo    = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas    = $plazas;
    }

    //----------GET-Parametros
    public function getDueno()    {  return $this->dueno;     }
    public function getColor()    {  return $this->color;     }
    public function getMarca()    {  return $this->marca;     }
    public function getModelo()   {  return $this->modelo;    }
    public function getVelocidad(){  return $this->velocidad; }
    public function getCaballaje(){  return $this->caballaje; }
    public function getPlazas()   {  return $this->plazas;    }
    
    //----------SET-Parametros
    public function setDueno($color)        { $this->dueno     = $dueno;     }
    public function setColor($color)        { $this->color     = $color;     }
    public function setMarca($marca)        { $this->marca     = $marca;     }
    public function setModelo($modelo)      { $this->modelo    = $modelo;    }
    public function setVelocidad($velocidad){ $this->velocidad = $velocidad; }
    public function setCaballaje($caballaje){ $this->caballaje = $caballaje; }
    public function setPlazas($plazas)      { $this->plazas    = $plazas;    }
    
    public function mostrarInfo (Coche $miObjeto){
        if (is_object($miObjeto)){
            $info = "<h1>Informacion del coche de <b>".$miObjeto->dueno."</b></h1>";
            $info .= "<p>El color:     ".$miObjeto->color.    "</p>";
            $info .= "<p>La marca:     ".$miObjeto->marca.    "</p>";
            $info .= "<p>El modelo:    ".$miObjeto->modelo.   "</p>";
            $info .= "<p>La velocidad: ".$miObjeto->velocidad."</p>";
            $info .= "<p>El caballaje: ".$miObjeto->caballaje."</p>";
            $info .= "<p>Las plazas:   ".$miObjeto->plazas.   "</p>";
            return $info;   
        }else{
            echo "Error--, el dato enviado no corresponde al esperado";
        }
        
        
    } 
   
   
    
    
    
  
}

