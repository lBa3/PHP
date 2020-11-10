<?php

//Session 

//iniciar session
session_start();
$_SESSION['variable_persistente'] = 'Hola soy una session activa';
var_dump($_SESSION);
// destruid session
session_destroy();


// cookies
setcookie("migalleta", "valor galleta");
var_dump ($_COOKIE);

setcookie('migalleta','', time()-100);//elimina cookie por caducidad 

