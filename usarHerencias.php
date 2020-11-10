<?php

require_once 'herencias.php';

echo "<p>Vista Class Persona</p>";
$persona = new Persona();
var_dump($persona);
echo "<br/><br/><br/>";
echo "<hr/>";


echo "<p>Vista Class Informatico + Persona</p>";
$informatico = new informatico();
var_dump($informatico);
echo "<br/><br/><br/>";
echo "<hr/>";


echo "<p>Vista Class tecnico + informartico + persona </p>";
$tecnico = new tecnicoRed();
var_dump($tecnico);
echo "<br/><br/><br/>";
echo "<hr/>";

//----------------------------------------------------


echo "<p> Seteamos valores a class persona desde la class informatico </p>";
$Programador_Luis = new informatico();
$Programador_Luis->setNombre("Roberto");
$Programador_Luis->setApellidos("Warner");
$Programador_Luis->setApellidos(1.60);
$Programador_Luis->setEdad(32);
$Programador_Luis->sabeLenguajes("html, CSS, php, etc");
var_dump($Programador_Luis);        
echo "<br/><br/><br/>";
echo "<hr/>";


//----------------------------------------------------
