<?php

$pag = file_get_contents("http://www.emol.com/economia/");


//echo $pag;


preg_match("/(Dolar Observado).+?<span.+?>(.+?)<\/span>/m",$pag,$matchs);



print_r($matchs);

//echo "Hola Mundo";



?>