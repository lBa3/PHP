<?php

/* arrays */

$peliculas = array('batman', 'vengadores', 'caza fantasmas');
var_dump($peliculas);
echo "<hr/>";
echo "<p><b>".$peliculas[2]."</b></p>";


$carros = ['mazda', 'nissan', 'ford'];
var_dump ($carros);
echo "<hr/>";
echo "<p><b>".$carros[1]."</b></p>";


$personas = array ('nombre' => 'Luis', 'apellido' => 'Batres' );
var_dump ($personas);
echo "<hr/>";
echo "<p><b>".$personas['apellido']."</b></p>";

echo "<hr/>";
$contactos = array(
    array (
      'nombre' => 'luis rogelio',
        'email' => 'usuario@mail.com',
    ),
    array (
      'nombre' => 'zaida batres',
        'email' => 'usuario2@mail.com',
    ),
    array (
      'nombre' => 'antonio batres',
        'email' => 'usuario3@mail.com',
    )
);

var_dump ($contactos);
echo "<hr/>";
echo "<p><b>".$contactos[1]['nombre']."</b></p>";
echo "<hr/>";

/*-------------------------------------------------------------*/

/* recorre array */
echo "<p>listado de pelis del array</p>";
echo "<ul>";
for ($i = 0; $i < count($peliculas); $i++){
    echo "<li>".$peliculas[$i]."</li>";
}
echo "</ul>";
echo "<hr/>";

/*-------------------------------------------------------------*/

echo "<p>listado de carros del array</p>";
echo "<ul>";
foreach ($carros as $marca){
    echo "<li>".$marca."</li>";
}
echo "</ul>";


echo "<hr/>";
foreach ($contactos as $key => $contacto){
    echo "<p>".$key.".- ".$contacto['nombre']."</p>";
}
echo "<hr/>";


/*-------------------------------------------------------------*/

//function con arrays

var_dump($carros); // origen 
echo "<br>";
asort($carros); // orden alfabetico a - z
var_dump($carros);
echo "<hr/>";

var_dump ($peliculas); // origen
echo "<br>";
sort($peliculas); // orden alfabetico desendente z - a
var_dump($peliculas);
echo "<hr/>";

$carros[] = 'kia'; // añade un valor al array
var_dump($carros);
echo "<hr/>";

array_push($peliculas, 'manos de tijera'); // añade un valor al array
var_dump ($peliculas);
echo "<hr/>";

array_pop($peliculas); // eliminar el ultimo valor de tu aray
var_dump ($peliculas);
echo "<hr/>";

unset($carros[2]); // eimina un valor en especifico de tu array
var_dump ($carros);
echo "<hr/>";

array_rand($personas); // toma un valor aleatorio del array
var_dump ($personas);
echo "<hr/>";

$rever = array_reverse($personas); // invierte el array
var_dump ($rever);
echo "<hr/>";

$resul = array_search('kia', $carros); //busqueda dentro del array
var_dump($resul);
echo "<hr/>";

$con = count($carros);
var_dump ($con);
echo "<hr/>";
echo sizeof($carros);




