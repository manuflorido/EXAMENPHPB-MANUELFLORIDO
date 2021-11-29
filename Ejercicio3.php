<?php
//Ejercicio 3 Manuel Florido
$operador = $_POST["operacion"];
//Recoger Array
$array=$_POST["array"];
$ent1=$array["ent1"];
$ent2=$array["ent2"];
$ent3=$array["ent3"];
$ent4=$array["ent4"];
$ent5=$array["ent5"];

//Funciones
function ex3($array){
    print_r(array_slice($array,0,3));
}

function aña3($array){
    $array["ent6"] = "hola";
    $array["ent7"] = "que";
    $array["ent8"] = "pasa";
    print_r($array);
}

function orden($array){
    arsort($array);
    print_r($array);
}

function nu2($array){
    array_unshift($array,"hola","buenas");
    print_r($array);
}

switch ($operador) {
    case 'ex3':
        ex3($array);
        break;
    case 'aña3':
        aña3($array);
        break;
    case 'ord':
        orden($array);
        break;
    case '2nu':
        nu2($array);
        break;
    default:
        echo "La has liado";
        break;
    }


?>