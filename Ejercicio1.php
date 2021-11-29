<?php
//Reccogida de datos
$num=$_POST["int1"];
$QUINIELA=1;

//Comienza bucle
while ($num > 0) {
    echo "QUINIELA: " . $QUINIELA . "<br>";
    $QUINIELA++;
    $iteracion=1;
    $contador=1;
    while ($iteracion <= 15) {
        $random=rand(1,3);
        if ($random == 3) {
            $random = "X";
        }
        echo "Resultado del Partido " . $contador . ": " . $random ."<br>";
        $contador++;
        $iteracion++;
    }
    $num=$num-1;
    echo "<br>";
}

?>