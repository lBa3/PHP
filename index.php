<?php

/** 
  * @desc Practica de programacion en php
  * examples 40tena
  * @author lbatres@freelancerdevelopers.com 
  * @required 
*/

echo 'hola mundo</br>';
echo '<p>concatenacion de texto'.'en php</p>';

//Declaracion de variables
$mivariable = "Mi primera variable de php";
echo "<p>".$mivariable."</p>";
$a = 10;
$b = 20;
$c = '';
$c = $a + $b ;
echo "<p>Valor de la suma de ".$a." + ".$b." = ".$c."</p>";
echo "<p>obtener el tipo de dato que tiene una variable GETTYPE(variable) ".gettype($mivariable). "</p>";
echo "<p>imprime con VAR_DUMP(variable) ".var_dump($c)."</p>";

//CONSTANTES

        //variable | contenido
define ('nombre',    'luis batres');
define ('web',       'www.google.com');

//nombre = "hola"; No se puede cambiar el valor de constante
echo "<p>".nombre."</p>";

//constantes pre definidas
echo "<p>Conctante php-os ".PHP_OS."</p>";

//operador de incremento y decremento
$i = 10;
echo "<p> valor de i antes del incremento ".$i."</p>";
$i++;
echo "<p> Operador incremento ++ valor de i ya con el incremento ".$i."</p>";
$i--;
echo "<p> Operador de decremento -- valor de i ya con el decremento ".$i. "</p>";

//operador de asignacion
$casa = 5;
$casa = $casa+=5;
//var_dump($casa);
echo "<p> operador d asignacion ".$casa."</p>";

//variables globales
//var_dump($GLOBALS);

echo "<p></p>";
echo "<p></p>";
echo "<p></p>";
echo "<p></p>";

//Servidor
//var_dump($_SERVER);

//condiciones

$as= "hola";
if ($as == "hola"){
    Echo "entro";
}else{
    echo "no entro";
}

switch ($as){
    case '0': $as = "Invalid";
    break;
    case 'hola': $as = "<p>entro al case </p>";
    break;
    default:  $as = "Unknown";
}


//go-to
goto marca;

echo "<p>instruccion 1</p>";
echo "<p>instruccion 2</p>";
echo "<p>instruccion 3</p>";
echo "<p>instruccion 4</p>";

marca: 
    echo "<p>me fui a la marca con goto</p>";

//bucles

//while
$o = 0;
echo "<p>el valor de o es ".$o."</p>";
while ($o < 10){
    $o++;
    echo "<p> imprime n- ".$o." </p>";
}

//do while
$edad = 10;
$con = 1;
do {
    $con++;
    echo "<p>la edad es 18".$con."</p>";
}while ($edad >= 18 && $con <= 10);

//for (expre inicial , condicion, incremento contador)
$resul = 0;
for ($i=0; $i <= 100; $i++){
    //$resul = $resul + $i;
    $resul += $i;
    echo "<p>".$resul."</p>";
}
echo "<p>resultado ".$resul."</p>";



//casteo sring to int
$numero = "12";
echo "<p>el valor de la variable es un string</p>".var_dump($numero);
$numero = (int)$numero;
echo "<p>a hora es un int</p>".var_dump($numero);

echo "<hr/>"








?>

<html>
    <head>
        <title>Curso Php   </title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    </head>
    
    <body>
        <!--Imprimir en pantalla html con estructura php -->
        <p> <?= "Hola desde html"?></p>
    </body>
    
</html>