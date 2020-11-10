<?php

class Usuario {
    public $nombre;
    public $mail;
    
    public function __construct() {
        $this->nombre="Boris";
        $this->mail="boris@mail.com";
        echo "<p>crenado el objeto</p>";
    }
    
    public function __toString($usuario) { //combierte un objeto a string
        return $usuario_texto;
    }
    
    public function __destruct() {
        echo "<p>destruye el objeto</p>";
    }
    
}


$usuario = new Usuario();
echo $usuario->mail;


for ($i= 0; $i<=100; $i++){
    echo "<p>ciclo : ".$i."</p>";
}
