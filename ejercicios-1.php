<?php

/* crea dos variables pais y contienente e imprime en pantalla concatenados  */
$pais = "México";
$continente ="America Norte";
echo "<p>".$continente." - ".$pais."</p>";
echo "<hr/>";

/* obtener los numero pares del listado del 1 al 100 */
for ($i = 1; $i <= 100; $i++ ){
    if ($i%2 == 0){
        echo "<p>este numero es par ".$i."</p>";
    }
}
echo "<hr/>";

/* imprime en pantalla los cuadrados de los 20 primeros numeros naturales con while*/
$i = 0;
while ($i <= 20){
    $i = $i*$i;
    echo "<p>".$i."</p>";
    $i++;
}
echo "<hr/>";

for ($i = 0; $i<=20; $i++){
    $i = $i*$i;
    echo "<p>".$i."</p>";
}
echo "<hr/>";

/* Otener datos por GET y sumarlos  */

$a = $_GET[1] = 10;
$b = $_GET[2] = 30;
var_dump($_GET);
$res = $a + $b;
echo "<p> la suma de los get es ".$res."</p>";
echo "<hr/>";

/* imprimir tablas de multiplicar del 1 al 10 en html */

echo "<table border='1'> <tr>";
echo "<tr>";
for ($i=1; $i<=10 ;$i++){
    echo "<td>Tabla del ".$i."</td>";
}
echo "</tr>";
echo "<tr>";
for ($v=1; $v<=10 ;$v++){
    echo "<td>";
    for ($x=1; $x<=10; $x++){
        echo "<p>$v x $x = <b>".($v*$x)."</b></p>";
    }
    echo "</td>";
}
echo "</tr>";
echo "</table>";

/*  */




