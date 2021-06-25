<?php

$peso = 65;
$altura = 1.72;
$resultado = $peso/ ($altura^2);

echo "<h1>$resultado </h1><br>";

if ($resultado<18.5) {

    echo "<h2 style =  color: green>Resultado: Magreza.<h2>";

}else if ($resultado< 25 ) {

    echo ( "<h2 style =  'color: green'>Resultado: Normal.</h2>");

}else{

    echo ( "<h2>Resultado: Obesidade.</h2>");
}



?>
