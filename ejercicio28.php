<?php
function  operaciones ($n1,$n2,$operacion){
    if ($operacion == "suma"){
        $resultado = $n1 + $n2;
    }
    elseif ($operacion == "resta"){
        $resultado = $n1 - $n2;
    }elseif ($operacion == "multiplicacion"){
        $resultado = $n1 * $n2;
    }elseif ($operacion == "division"){
        $resultado = $n1 / $n2;
    }
return $resultado;
}
$r = operaciones(2,4, "resta");


?>