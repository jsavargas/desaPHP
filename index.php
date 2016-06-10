<?php

$pag = file_get_contents("http://www.emol.com/economia/");





$pag = preg_replace("[\n|\r|\n\r]",' ', $pag);


echo "pag[$pag]";

//echo "cadena[$cadena]";

echo preg_match("/(dolar observado).+?<span.+?>(.+?)</span>/im",$pag,$matchs);



print_r($matchs);

//echo "Hola Mundo";



?>
