<?php

require 'coche.php';
echo "<p><h2>VISTA Class Carro</h2></p>";

$carroDefault  = new Coche("","", "", "", 1, 1, 1);
$carroLuis     = new Coche("Luis Batres", "Verde", "KIA", "RIO", 280, 300, 5);
$carroZaida    = new Coche("Zaida Batres","ROJO", "MITSUBUSHI", "C20", 260, 200, 4);


echo $carroDefault->mostrarInfo($carroZaida);

//var_dump  ($carroLuis);
//var_dump  ($carroZaida);
