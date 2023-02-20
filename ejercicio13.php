<?php
$nombre = "ana";
$sexo = "F";

if ($sexo == "F")
    {
    $saludo = "Bienvenida, ";
    $saludo = $saludo . $nombre;
    print ($saludo);
    }

elseif ($sexo == "M")
     {
     $saludo = "Bienvenido Armando";
     $saludo = $saludo . $nombre;
     print ($saludo);
     }
else
    {
    $saludo = "No definido";
    $saludo = $saludo . $nombre;
    print ($saludo);
    }

?>