<?php

echo "<h1>Vsta class config</h1>";

require_once 'config.php';

Configuracion_Static::setColor("red");
Configuracion_Static::setEntorno("localhost");
Configuracion_Static::setNew(true);

echo Configuracion_Static::$color."<br/>";
echo Configuracion_Static::$entorno."<br/>";
echo Configuracion_Static::$new."<br/>";

$Configuracion = new Configuracion_Static();
$Configuracion::$color = "BLUE";
echo $Configuracion::$color;