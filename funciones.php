<?php

/*funciones */

$saludo = "Hola"; //valor
$x = saludame($saludo); //llamado de la funcion con parametro
echo $x; //impresion con retorno de la funcion

echo "<hr/>";

// declaracion de la funcion con parametro
function saludame($saludo){
    $complemento = "Como estas";
    $saludando = $saludo." ".$complemento;
    $text = dame_texto($saludando); //funciones anidada
    return $saludando."<p>".$text."</p>";
}

function dame_texto($saludando){
    $texto = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pharetra libero diam, nec pellentesque magna finibus vitae. Proin tincidunt, velit egestas mattis convallis, lacus dui sollicitudin tortor, eu tincidunt elit felis a orci. Praesent at consequat ante. Praesent eleifend, arcu sed fringilla tempor, orci nunc pulvinar leo, ac mattis nisi neque in justo. Nullam a ante tortor. Proin tincidunt metus ac semper ornare. Donec venenatis fermentum libero, sed elementum elit viverra ac. Integer interdum magna nec elementum lobortis. Aliquam sed est erat. Integer ornare sapien urna, eget fermentum dolor consequat quis.";
    return $texto;
}

/* variables locales / Declaradas dentro de la una funcion solo disponibles dentro de la funcion solo con return */

/* variables globales / Declaradas de fuera de una funcion y pueden se usadas en las funciones */

$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

function frase (){
    global $frase; // variable global
    $autor = "Jhon Wick"; // variable local
    return $frase." | ".$autor;
}
$oracion = frase ();
echo "<p>".$oracion."</p>";
echo "<hr/>";

/* funciones variables */

function buenosdias (){
    return "<p>Hola buenos dias ;) </p>";
}

function buenastardes (){
    return "<p>Buen provecho </p>";
}

function buenasnoches (){
    return "<p>A dormir ZZZzzzzzzzz</p>";
}

$horario = "buenasnoches"; //variable
echo $horario(); //function varariable
echo "<hr/>";


/* funciones pre definidas */

// var_dump ($variable); -- Debuggear
// date ('d-m-y'); d-m-y fechas
// time ()  timestamp fecha formato UNIX
// rand (minimo , maximo) numero aleatorio
// gettype (variable) obtiene el tipo de dato de la variable
// is_string (variable) comprueba si es un tipo de dato string  --- is_int etc...
// isset(variable) comprueba si existe la variable 
// trim(string) quita los espacios de inicio o final del string
// unset (variable) elimina la variable de la linea de ejecucion
// empty(variable) -- booleano comprobar si esta vacia una variable
// strlen (variable) obtiene el numero de caracteres de un string
// strpos (sting, pablara a buscar) busca una palabra en una cadena de texto
// str_replace (palabra a buscar, palabra a remplazar, string ) remplaza palabra en una cadena
// strtolower (string) texto a miniscula
// strtoupper (string) texto a mayuscula

