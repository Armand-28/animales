<?php
print ("<ul>\n");
$i = 1;
$variable = 1;
while ($i <= 10){
    $resultado = $variable * $i;
    print("<li>Para la tabla $variable X $i = $resultado </li>\n");
    $i++;
}
print("</ul>\n");

?>