<?php

$pag = file_get_contents("http://www.emol.com/economia/");





$cadena = preg_replace(“[\n|\r|\n\r]”,' ', $pag);

echo "cadena[$cadena]";

preg_match("/(Dolar Observado).+?<span.+?>(.+?)<\/span>/m",$cadena,$matchs);



print_r($matchs);

//echo "Hola Mundo";



?>