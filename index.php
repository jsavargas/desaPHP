<?php

$pag = file_get_contents("http://www.emol.com/economia/");


echo "pag[$pag]";



//$cadena = preg_replace(“[\n|\r|\n\r]”,' ', $pag);

//echo "cadena[$cadena]";

preg_match("/(dolar observado).+?<span.+?>(.+?)</span>/im",$pag,$matchs);



print_r($matchs);

//echo "Hola Mundo";



?>