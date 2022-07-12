<?php

$nombre = $_POST['nombre'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc = $peso / ($altura * $altura);
$result;

echo "<h2>Tu nombre es $nombre .<h2>";
echo "<h2>Tu peso es $peso .<h2>";
echo "<h2>Tu altura es $altura .<h2>";

echo "<h2>Entonces tú IMC está en $imc  .<h2>";

if ($imc < 18.5 ) {
    echo "Usted está abajo de peso";
} else if ($imc <= 24.9) {
    echo "Su peso está Normal";
} else if ($imc <= 29.9) {
    echo "Usted tiene Sobrepeso";
} else if ($imc <= 34.9) {
    echo "Su Grado es I";
} else if ($imc <= 39.9) {
    echo "Su Grado es II";
} else {
    echo "Definitivamente tienes problemas de sobrepeso!!!";
}

header("refresh:5;url=index.php");



?>