<?php

$pag = file_get_contents("http://www.emol.com/economia/");


//echo $pag;


preg_match("/(Dolar Observado).+?valor_divisas.+?<span.+?>(.+?)<\/span>/im",$pag,$matchs);



print_r($matchs);

//echo "Hola Mundo";



?>