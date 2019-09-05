<?php
//var_dump($_GET);
	echo "Su nombre es ".$_GET['nombre'];
 //$archivo=fopen('usuarios.txt','a');
//fwrite($archivo,$_GET['nombre'])."\n";

//fclose($archivo);
$miObjeto = new stdClass();
$miObjeto->nombre=$_GET["Alfredo"];
$miObjeto->apellido=$_GET['nombre'];



var_dump($_GET);
 var_dump(json_encode($miObjeto));
 $archivo=fopen('usuarios.txt','a');
fwrite($archivo,$_GET['nombre'])."\n";
var_dump(json_encode($miObjeto));
fclose($archivo);



//el contenido de data.txt ahora es 123 y no 23
//Estamos el alta de nuestra página

?>