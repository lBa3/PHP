<?php

//Metodos estaticos

echo "<h1>Class config</h1>";


class Configuracion_Static{
    
    public static $color;
    public static $new;
    public static $entorno;
    
    
    public static function getColor() {
        return self::$color;
    }

    public static function getNew() {
        return self::$new;
    }

    public static function getEntorno() {
        return self::$entorno;
    }

    public static function setColor($color): void {
        self::$color = $color;
    }

    public static function setNew($new): void {
        self::$new = $new;
    }

    public static function setEntorno($entorno): void {
        self::$entorno = $entorno;
    }


    
}