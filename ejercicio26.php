<?php

function cuadrado ($numero = 2){
    return ($numero * $numero);
}
$res = cuadrado(6) + cuadrado();
print $res;

print("<br><br>");

function base ($base,$altura){
    return ($base * $altura / 2);
}
$resultado = base(8,5);
print($resultado);

print("<br><br>");




function hipotenusa ($cateto1,$cateto2){
    return  sqrt($cateto1**2 + $cateto2**2);
} 
$resu = hipotenusa(5,5);
print($resu);

print("<br><br>");

function cateto ($h,$c){
    return sqrt($h**2 - $c**2);
}
$resul = cateto(6,4);
print($resul)
?>