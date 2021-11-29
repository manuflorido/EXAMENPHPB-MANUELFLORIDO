<?php
//Recogida de datos
$a=$_POST["int1"];
$b=$_POST["int2"];
$c=$_POST["int3"];
$bneg=$b*-1;
$bcuad=$b*$b;
$apor=$a*2;
//Ecuacion Positiva
$var=4*$a*$c;
$var2=$bcuad-$var;
$var3=sqrt($var2);
$var4=$bneg+$var3;
$resp=$var4/$apor;
echo "Resultado de la ecuación positiva: " . $resp . "<br>";

//Ecuacion Negativa
$var=4*$a*$c;
$var2=$bcuad-$var;
$var3=sqrt($var2);
$var4=$bneg-$var3;
$resn=$var4/$apor;
echo "Resultado de la ecuación negativa: " . $resn;



?>