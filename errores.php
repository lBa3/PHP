<?php

//Exepcion 

//throw new Exception("Oops! Hay una exepcion!");

//try catch

try{
    
    throw new Exception("Oops!!");  
    // codigo o funciones que pueden tener errores
    
    
} catch (Exception $e){
    
    echo "hay un error con la variable  ".$e->getMessage();
    
} finally {
    
    echo "<p>todo Uff</p>";
}